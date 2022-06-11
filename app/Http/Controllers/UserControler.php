<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserControler extends Controller
{
    /**
     * function index
     *
     * @param Request $request
     * @return
     */
    public function index(Request $request)
    {
        $users = User::latest()->paginate(20);

        return view('users.index', [
            'users' => $users
        ]);
    }

    /**
     * function show
     *
     * @param Request $request,
     * @param int $userId
     * @return
     */
    public function show(Request $request, int $userId)
    {
        $user = User::where('id', $userId)->first();

        if (!$user) {
            return redirect()
                ->route('users.index')
                ->with('error', __('User not found'));
        }

        return view('users.show', [
            'user' => $user,
        ]);
    }

    /**
     * function edit
     *
     * @param Request $request,
     * @param int $userId
     * @return
     */
    public function edit(Request $request, int $userId)
    {
        $user = User::where('id', $userId)->first();

        if (!$user) {
            return redirect()
                ->route('users.index')
                ->with('error', __('User not found'));
        }

        return view('users.edit', [
            'user' => $user,
        ]);
    }

    /**
     * function create
     *
     * @param Request $request,
     * @param int $userId
     * @return
     */
    public function create(Request $request)
    {
        return view('users.create');
    }

    /**
     * function confirmDelete
     *
     * @param Request $request,
     * @param int $userId
     * @return
     */
    public function confirmDelete(Request $request, int $userId)
    {
        $user = User::where('id', $userId)->first();

        if (!$user) {
            return redirect()
                ->route('users.index')
                ->with('error', __('User not found'));
        }

        return view('users.confirm_delete', [
            'user' => $user,
        ]);
    }

    /**
     * function update
     *
     * @param Request $request,
     * @param int $userId
     * @return
     */
    public function update(Request $request, int $userId)
    {
        $request->validate([
            'name'      => 'nullable|string|min:5',
            'email'     => 'nullable|email|min:5',
            'password'  => 'nullable|string|min:5',
        ]);

        $user = User::where('id', $userId)->first();

        if (!$user) {
            return redirect()
                ->route('users.index')
                ->with('error', __('User not found'));
        }

        $data = $request->only([
            'name',
            'email',
            'password',
        ]);

        if ($request->has('password')) {
            $data['password'] = \Hash::make($request->input('password'));
        }

        $user->update($data);

        return redirect()
                ->route('users.index')
                ->with('success', __('Updated user'));
    }

    /**
     * function store
     *
     * @param Request $request
     * @return
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|min:5',
            'email'     => 'required|email|min:5',
            'password'  => 'required|string|min:5',
        ]);

        $data = $request->only([
            'name',
            'email',
            'password',
        ]);

        $data['password'] = \Hash::make($request->input('password'));

        $user = User::create($data);

        if (!$user) {
            return redirect()
                ->route('users.index')
                ->with('error', __('Failed to register user'));
        }

        return redirect()
                ->route('users.index')
                ->with('success', __('User created successfully'));
    }

    /**
     * function delete
     *
     * @param Request $request,
     * @param int $userId
     * @return
     */
    public function delete(Request $request, int $userId)
    {
        $user = User::where('id', $userId)->first();

        if (!$user) {
            return redirect()
                ->route('users.index')
                ->with('error', __('User updated successfully'));
        }

        $user->delete();

        return redirect()
                ->route('users.index')
                ->with('success', __('User deleted successfully'));
    }
}
