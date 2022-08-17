<?php

namespace App\Http\Controllers\Authentication;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use App\Http\Requests\RegisterRequest;
use Illuminate\Contracts\Foundation\Application;

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
        User::create($request->validated());

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
