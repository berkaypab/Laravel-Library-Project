<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $datalist = User::all();

        return view('admin.userpanel', ['datalist' => $datalist]);
    }

    public function roleadd($id)
    {

        $data = User::find($id);

        $data->role = UserRole::where('user_id','=',$id)->first();

       // $data->role->name =Role::find($data->role->id)->name;
        $data->roles= Role::all();
        foreach ($data->roles as $role)
        {
            $role->name=Role::find($role->id)->name;
        }
        return view('admin.role_add', ['data' => $data]);
    }
    public function update($id,Request $request)
    {
        $userrrole = UserRole::where('user_id','=',$id)->first();
        if ($userrrole)
        {
            $userrrole->role_id=$request->input('role');
        }
        else
            {
                $userrrole = new UserRole();
                $userrrole->user_id=$id;

                $userrrole->role_id=$request->input('role');
            }
        $userrrole->save();

        return redirect()->route('userpanel');
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
