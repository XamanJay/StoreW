<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userw;

class Userw_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = Userw::all();

        return view('users.index',[
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //dd ('entrus');
       return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = Userw::create([    
            'firstname'          => $request->input('firstname'),
            'lastname'       => $request->input('lastname'),
            'username'         => $request->input('username'),
            'password'    => $request->input('password'),
            'active'        => $request->input('active'),
            'type'  => $request->input('type'),
            'email'  => $request->input('email'),
        ]);

        $users = Userw::all();

        return view('users.index',[
            'users' => $users
        ]);
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
        $users = Userw::find($id);

        return view('users.edit',[
            'users' => $users
        ]);
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
        $users = Userw::where('id',$id)->update([    
            'firstname'          => $request->input('firstname'),
            'lastname'       => $request->input('lastname'),
            'username'         => $request->input('username'),
            'password'    => $request->input('password'),
            'active'        => $request->input('active'),
            'type'  => $request->input('type'),
            'email'  => $request->input('email'),
        ]);


        $users = Userw::all();

        return view('users.index',[
            'users' => $users
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    
    public function destroy(Userw $Userw)
    {
        $Userw->delete();
        // return redirect()->route('users.index')->with('message', ' Deleted Successfully');

         

        $users = Userw::all();

        return view('users.index',[
            'users' => $users
        ]);

    }
}
