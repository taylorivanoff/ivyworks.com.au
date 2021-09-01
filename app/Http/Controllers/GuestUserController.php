<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuestUserStoreRequest;
use App\Http\Requests\GuestUserUpdateRequest;
use App\Models\GuestUser;
use Illuminate\Http\Request;

class GuestUserController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $guestUsers = GuestUser::all();

        return view('guestUser.index', compact('guestUsers'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('guestUser.create');
    }

    /**
     * @param \App\Http\Requests\GuestUserStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuestUserStoreRequest $request)
    {
        $guestUser = GuestUser::create($request->validated());

        //$request->session()->flash('guestUser.id', $guestUser->id);

        return redirect()->route('guestUser.show');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\GuestUser $guestUser
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, GuestUser $guestUser)
    {
        return view('guestUser.show', compact('guestUser'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\GuestUser $guestUser
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, GuestUser $guestUser)
    {
        return view('guestUser.edit', compact('guestUser'));
    }

    /**
     * @param \App\Http\Requests\GuestUserUpdateRequest $request
     * @param \App\Models\GuestUser $guestUser
     * @return \Illuminate\Http\Response
     */
    public function update(GuestUserUpdateRequest $request, GuestUser $guestUser)
    {
        $guestUser->update($request->validated());

        $request->session()->flash('guestUser.id', $guestUser->id);

        return redirect()->route('guestUser.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\GuestUser $guestUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, GuestUser $guestUser)
    {
        $guestUser->delete();

        return redirect()->route('guestUser.index');
    }
}
