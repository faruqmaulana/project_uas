<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request){
        $profile = $request->cookie('data');
        $data = json_decode($profile);
        // dd($data);

        return view('profile.my-profile', [
            'active' => 'Flight',
            'tittle' => 'My Profile',
            'profile' => $data
        ]);
    }
}
