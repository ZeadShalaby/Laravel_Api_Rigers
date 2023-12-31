<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\Images;
use App\Models\Messages;
use App\Models\User;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function index() {
        $users = User::all();
        $messages = Messages::all();
        $images = Images::all();
        return view('tables', compact('users', 'messages', 'images'));
    }

    public function indexDoctors() {
        $appointments = Appointments::all()->toArray();
        return view('table_doctor', compact('appointments'));
    }
}
