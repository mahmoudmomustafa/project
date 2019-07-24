<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Shipment;

class DriverController extends Controller
{
    // exports
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::get();
        return view('pages.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'min:4', 'max:255'],
            'email' => ['required','string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'acQualification' => ['required', 'max:255'],
            'brithDate' => ['required', 'date'],
            'phoneNum' => ['required','numeric'],
            'nationalNum' => ['required', 'max:255'],
            'workingHrs' => ['required', 'numeric'],
            'type' => ['required']
        ]);
        $user = $request->all();
        $user['password'] = bcrypt($user['password']);
        User::create($user);
        return redirect('/dashboard/users')->with('message','New User was created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // $shipments = Shipment::where('driver_id', Auth::user()->id)->get();
        // return view('pages.user.show', compact('shipments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('pages/user/edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'min:4', 'max:255'],
            'email' => ['required','string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'acQualification' => ['required', 'max:255'],
            'brithDate' => ['required', 'date'],
            'phoneNum' => ['required','numeric'],
            'nationalNum' => ['required', 'max:255'],
            'workingHrs' => ['required', 'numeric'],
            'type' => ['required']
        ]);
        $user['password'] = bcrypt($user['password']);
        $user->update($request->all());
        return redirect('/dashboard/users')->with('message', 'User was Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if($user->id == Auth::user()->id){
            return abort(403);
        }
        $user->delete();
        return redirect('/dashboard/users')->with('message', 'User was Deleted');
    }
}