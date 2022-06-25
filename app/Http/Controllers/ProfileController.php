<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return view('profile.my-profile', [
            'active' => 'Flight',
            'tittle' => 'My Profile',
        ]);
    }

    public function profileSetting(Request $request)
    {
        return view('profile.my-profile-setting', [
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
    // public function edit($id)
    // {
    //     $data = Mahasiswa::findOrFail($id);
    //     dd($data);
    //     return view('mahasiswa.0247edit', ['data' => $data]);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required'],
        ]);
        $validatedData['citizen_id'] = $request->citizen_id;
        $validatedData['nationality'] = $request->nationality;
        
        USER::where('id', auth()->user()->id)->update($validatedData);

        return back()->with('updateSuccess', 'Your profile has been updated!');
    }

    public function updateProfileSetting(Request $request){
        
        $validatedData = $request->validate([
            'name' => 'required_if:name,==,null',
            'password' => 'required_if:password,!==,null',
            'new_password' => 'required_if:password,!==,null',
        ]);
        
        $checkPassword = $validatedData['password'] ?? null;
        $checkNewPassword = $validatedData['new_password'] ?? null;
        
        $user = User::findOrFail( auth()->user()->id );

        if($checkPassword === null || $checkNewPassword === null) {
            USER::where('id', auth()->user()->id)->update($validatedData);
            return back()->with('updateSuccess', 'Your profile has been updated!');
        }

        if (Hash::check($request->password, $user->password)) { 
        $user->fill([
            'password' => Hash::make($request->new_password)
            ])->save();

            $request->session();
            return back()->with('updateSuccess', 'Your '.array_keys($validatedData)[0].' profile has been updated!');
        } else {
            $request->session()->flash('Error', 'Password does not match with your old password');
            return back();
        }

    }
}
