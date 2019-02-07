<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = User::all();

        return view('profile', compact('CRUD'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            
        ]);
        $profile = new profile();
        $profile->name=$request->get('name');
        $profile->email=$request->get('email');
        $profile->password=$request->get('password');
        // if($request->hasFile('photo')){
        //     $profile_img=$request->file('photo');
        //     $fileName=time().'.'.$profile_img->getClientOriginalExtension();
        //     Image::make($profile_img)->resize(150,150)->save(public_path('/img/food_img/'.$fileName));
        //     $profile->photo=$fileName;
        // }
        // // dd($profile);
        // $profile->save();
        // return redirect('/foods')->with('success','Food has been added to menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = user::find($id);

        return view('profile', compact('CRUD'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            ]);
    
            $profile = User::find($id);
            $profile->name= $request->get('name');
            $profile->email= $request->get('email');
    
            // if($request->hasFile('photo')){
            //     $profile_img=$request->file('photo');
            //     $fileName='/img/food_img/'.time().'.'.$profile_img->getClientOriginalExtension();
            //     Image::make($profile_img)->resize(150,150)->save(public_path($fileName));
            //     $profile->photo=$fileName;
            // }
            // $profile ->save();
            // return redirect('/foods')->with('success', 'Food has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = User::find($id);
        $profile->delete();

        return redirect('/home')->with('success', 'Food has been deleted Successfully');
    }
}
