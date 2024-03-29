<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() 
    {
        $users = User::all();
        return view('admin.users.index', ['users' => $users]);
    }

    public function destroy(string $id) 
    {
        $user = User::find($id);
        $user->delete();

        return redirect('admin/users');
    }
}
