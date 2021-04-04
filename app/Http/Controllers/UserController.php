<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
=======
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
use App\User;

class UserController extends Controller
{
<<<<<<< HEAD
      /**
=======
    /**
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

<<<<<<< HEAD

=======
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $users = User::paginate('15');
        return view ('admin_pages.users.index', compact('users'));
=======
        $users = User::paginate(15);
        return view('admin_pages.users.index', compact('users'));
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        return view ('admin_pages.users.create');
=======
        return view('admin_pages.users.create');
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
       User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request -> password),
=======
        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
            'role'  => $request->role,
            'address' => $request->address,
            'telp' => $request->telp
        ]);

<<<<<<< HEAD

        return  redirect (route('pengguna.index'));
=======
        // alihkan halaman ke halaman pengguna
	    return redirect(route('pengguna.index'));
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
<<<<<<< HEAD
        return view('admin_pages.users.detail', compact('user'));
=======
        return view('admin_pages.users.edit', compact('user'));

        return redirect(route('pengguna.index'));
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin_pages.users.edit', compact('user'));
<<<<<<< HEAD
=======

        return redirect(route('pengguna.index'));
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
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
        $user = User::find($id);
<<<<<<< HEAD
        $user -> update ([
=======
        $user->update([
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
            'name' => $request->nama,
            'email' => $request->email,
            'password' => is_null($request->password)? $user->password : Hash::make($request->password),
            'role'  => $request->role,
            'address' => $request->address,
            'telp' => $request->telp
        ]);
<<<<<<< HEAD


        return  redirect (route('pengguna.index'));
=======
        return redirect(route('pengguna.index'));
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
        DB::table('users')->where('id', $id)->delete();
        // $user = User::findOrFail($id);
        // $user->delete();
        return redirect()->route('pengguna.index');
=======
        //
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
    }
}
