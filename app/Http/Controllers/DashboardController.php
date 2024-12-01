<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::select('id', 'name', 'email')
                ->paginate(5);
        return $user;
        // return view('dashboard', compact('user'));
    }
}
