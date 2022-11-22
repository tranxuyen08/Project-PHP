<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use App\Models\UserProfiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileUserController extends Controller
{
    public function profile() {

        $user = User::find(Auth::user()->id);
        return view('home.user_profile.show',[
            'user' => $user,
        ]);
    }

    public function edit() {
        return view('home.user_profile.edit');
    }

    public function update(UpdateProfileRequest $request) {
        $phone = $request->get('phone');
        $city = $request->get('city');
        $country = $request->get('country');
        $address = $request->get('address');
        $dayOfBirth = $request->get('day_of_birth');
        $gender = $request->get('gender');
        $userProfile = UserProfiles::where('user_id', Auth::user()->id)->first();
        if (!empty($userProfile)) {
            UserProfiles::where('id', $userProfile->id)->update([
                'phone' => $phone,
                'city' => $city,
                'country' => $country,
                'address' => $address,
                'day_of_birth' => $dayOfBirth,
                'gender' => $gender,
            ]);

        } else {
            UserProfiles::create([
                'user_id' =>  Auth::user()->id,
                'phone' => $phone,
                'city' => $city,
                'country' => $country,
                'address' => $address,
                'day_of_birth' => $dayOfBirth,
                'gender' => $gender,
                'status' => 0,
            ]);
        }
        return redirect( route('user_profile.show'));
    }
}
