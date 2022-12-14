<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use App\Models\UserProfiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileUserController extends Controller
{
    public function profile()
    {
        $user = User::find(Auth::user()->id);
        return view('home.user_profile.show', [
            'user' => $user,
        ]);
    }

    public function edit()
    {
        $user = User::find(Auth::user()->id);
        $profile = UserProfiles::where('user_id', Auth::user()->id)->first();
        return view('home.user_profile.edit', [
            'user' => $user,
            'profile' => $profile,
        ]);
    }

    public function update(UpdateProfileRequest $request)
    {
        $phone = $request->get('phone');
        $city = $request->get('city');
        $country = $request->get('country');
        $address = $request->get('address');
        $dayOfBirth = $request->get('day_of_birth');
        $gender = $request->get('gender');
        $userProfile = UserProfiles::where('user_id', Auth::user()->id)->first();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $randomize = rand(111111, 999999);
            $extension = $file->getClientOriginalExtension();
            $filename = $randomize . '.' . $extension;
            $file->move(public_path('images'), $filename);
        }

        if (!empty($userProfile)) {
            UserProfiles::where('id', $userProfile->id)->update([
                'phone' => $phone,
                'city' => $city,
                'country' => $country,
                'address' => $address,
                'day_of_birth' => $dayOfBirth,
                'gender' => $gender,
                'image' => $filename,
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
                'image' => $filename,
            ]);
        }

        return redirect(route('user_profile.show'));
    }
}
