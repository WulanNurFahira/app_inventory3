<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('home.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.user.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,  
            "level" => $request->level
        ]);
        return redirect('/user')->with('succses', 'Data Berhasil Ditambahkan');;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('home.user.edit',[
            'users' => User::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        User::where('id', $id)->update([
            "name" => $request->name,
            "email" => $request->email,
            "level" => $request->level
                       
        ]);
        return redirect('/user')->with('succses', 'Data Berhasil Diedit');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=User::find($id);
        $user->delete();

        return redirect('/user')->with('succses', 'Data Berhasil Dihapus');
    }
}
