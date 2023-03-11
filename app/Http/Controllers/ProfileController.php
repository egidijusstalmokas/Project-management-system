<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('profile.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'education' => ['required', 'string', 'max:255'],
            'profession' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'skills' => ['required', 'string', 'max:255'],
            'notes' => ['required', 'string'],
            'email' => ['required', 'string', 'max:255', 'email'],
            'phone' => ['required', 'string', 'max:255'],
            'profile_img' => ['mimes:jpeg,png,jpg,gif', 'max:10240'],
        ])->validate();

        $user = Auth::user();
        $profile = new Profile;
        $profile->user_id = $user->id;
        $profile->education = $request->education;
        $profile->profession = $request->profession;
        $profile->location = $request->location;
        $profile->skills = $request->skills;
        $profile->notes = $request->notes;
        $profile->email = $request->email;
        $profile->phone = $request->phone;
        $profile->save();
        //Save image
        if($request->has('profile_img')){
            $image = time().'.'.$request->profile_img->extension();  
            $request->profile_img->move('profiles/' . $user->id . '/', $image);
            $user->profile_photo_path = $image;
            $user->save();
        }
        return redirect()->route('profile.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        Validator::make($request->all(), [
            'education' => ['required', 'string', 'max:255'],
            'profession' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'skills' => ['required', 'string', 'max:255'],
            'notes' => ['required', 'string'],
            'email' => ['required', 'string', 'max:255', 'email'],
            'phone' => ['required', 'string', 'max:255'],
            'profile_img' => ['mimes:jpeg,png,jpg,gif', 'max:10240'],
        ])->validate();

        $profile->education = $request->education;
        $profile->profession = $request->profession;
        $profile->location = $request->location;
        $profile->skills = $request->skills;
        $profile->notes = $request->notes;
        $profile->email = $request->email;
        $profile->phone = $request->phone;
        $profile->save();
        //Update image
        if($request->has('profile_img')){
            $user = Auth::user();
            $image = time().'.'.$request->profile_img->extension();  
            $request->profile_img->move('profiles/' . $user->id . '/', $image);
            $user->profile_photo_path = $image;
            $user->save();
        }
        return redirect()->back()->with('success', 'Your profile updated succesfully');
    }

}
