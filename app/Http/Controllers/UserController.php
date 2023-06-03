<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function change(User $user) {
        $role = $user->role == 'admin' ? 'user' : 'admin';

        $user->update(['role' => $role]);
        return redirect()->route('user.index');
    }
}
