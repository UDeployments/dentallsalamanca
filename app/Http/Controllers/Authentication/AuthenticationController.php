<?php

namespace App\Http\Controllers\Authentication;

use App\Mail\VerifyMail;
use App\Models\User;
use App\Models\ValidationEmail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use App\Http\Requests\RegisterRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

class AuthenticationController extends Controller
{

    /**
     * Display a form to Log In with credentials
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('Authentication.login');
    }

    /**
     * Show the form for creating a new user credential.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('Authentication.register');
    }

    /**
     * Store a newly credential in storage.
     *
     * @param RegisterRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(RegisterRequest $request): Redirector|RedirectResponse|Application
    {
        /**
         * Store the user process
         * 1. Validate if the values of the form are correct to defined in RegisterRequest
         * 2. If the values are correct then store the user in DB with Model User
         * 3. Create token validation to confirm the email of the user (This token create with email user and date exact with seconds)
         * 4. Save the values in the table of validation email
         * 5. Create the JSON object to encrypt and generate the unique URL to confirm the email
         * 6. Encrypt the data and create the URL, after send the email to user
         */

        // Step 1 and 2
        User::create($request->validated());
        // Step 3
        $tokenValidation = Crypt::encryptString($request['email'] . Carbon::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s'))->format('Y-m-d H:i:s'));
        // Step 4
        ValidationEmail::create(['email' => $request['email'], 'token_validation' => $tokenValidation]);
        // Step 5
        $verifyValues = array('email' => $request['email'], 'token_validation' => $tokenValidation);
        $verifyValues = json_encode($verifyValues);
        // Step 6 (Prod: https://dentallsalamanca.com/ | Dev: https://dentallsalamanca.test/)
        $uniqueURL = 'https://dentallsalamanca.test/verify/' . Crypt::encryptString($verifyValues);
        $details = ['url' => $uniqueURL];
        Mail::to($request['email'])->send(new VerifyMail($details));

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
