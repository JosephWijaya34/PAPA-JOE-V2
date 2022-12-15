<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;







class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user', [
            'users' => User::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'telphone' => ['required', 'string', 'max:14', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'telphone' => $request->telphone,
            'password' => Hash::make($request->password),
        ]);


        return redirect('/user');
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
        //
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

        $user = User::findOrFail($id);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'telphone' => ['required', 'string', 'max:14'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $name = $request->name;
        $email = $request->email;
        $telphone = $request->telphone;
        $password = Hash::make($request->password);
        $role = $request->role;

        $user->update([
            'name' => $name,
            'email' => $email,
            'telphone' => $telphone,
            'password' => $password,
            'role' => $role
        ]);

        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedProduct = User::findOrFail($id);

        $user_id = Auth::user()->id;
        if ($id == $user_id) {
            return redirect('/user');
        }

        // hapus data user
        $deletedProduct->delete();

        // if ($deletedProduct) {
        //     Session::flash('status', 'success');
        //     Session::flash('message', 'Delete product success');
        // }
        return redirect('/user');
    }
}
