<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request){
        // $profile = $request->cookie('data');
        // $data = json_decode($profile);
        // dd($data);

        return view('profile.my-profile', [
            'active' => 'Flight',
            'tittle' => 'My Profile',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Mahasiswa::findOrFail($id);
        dd($data);
        return view('mahasiswa.0247edit', ['data' => $data]);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request){
        USER::where('id', $request->id)->update([
            'username' => $request->username,
        ]);

        return back()->with('updateSuccess', 'Your profile has been updated!');
    }
}
