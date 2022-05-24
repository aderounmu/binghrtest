<?php

namespace App\Http\Controllers;

// use App\Http\Requests\StoreUserRequest;
// use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
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
        //
        // $data['users'] = User::orderBy('id','desc');//->paginate(20);
        // $data['users'] = User::paginate(5);
        $data['users'] = User::get();
        return view('home',$data);
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
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    //public function store(StoreUserRequest $request)
    public function store(Request $request)
    {
        //
        // 

        $request->validate([
            'firstname' => 'required',
            'lastname'=> 'required',
            'username' => 'required',
            'email'=> 'required|unique:users',
            'password'=> 'required_with:confirm_password|min:6|same:confirm_password',
            'confirm_password' => 'min:6',
            'emplyeeID'=> 'required|unique:users',
            //'roles'=> 'required',
            'permission'=> 'required',
            'mobile' => 'required',
        ]);

        $role_array = ['CEO and Founder', 'Team Lead' , 'HR' , 'Web Developer' , 'App Designer'];

         $user = User::create([
            'firstname' => $request->firstname,
            'lastname'=> $request->lastname,
            'username' => $request->username,
            'email'=> $request->email,
            'emplyeeID'=> $request->emplyeeID,
            'roles'=> $role_array[array_rand($role_array)],
            'permission'=> $request->permission,
            'mobile' => $request->mobile,
            'password' => $request->password
         ]);
         $user->fill([
            'password' => Hash::make($user->password)
        ])->save();
        

        //dd($request->all());

        

        return redirect()->action([UserController::class, 'index'])->with(['success' => 'user successfully deleted']) ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    //public function update(UpdateUserRequest $request, User $user)
    public function update(Request $request, User $user)
    {
        //
        $request->validate([
            'firstname' => 'required',
            'lastname'=> 'required',
            'username' => 'required',
            'email'=> 'required',
            'emplyeeID'=> 'required',
            //'roles'=> 'required',
            'permission'=> 'required',
            'mobile' => 'required',
        ]);
         if($request->password === null){
             $request->password = $user->password ;
            $user->update([
                'firstname' => $request->firstname,
                'lastname'=> $request->lastname,
                'username' => $request->username,
                'email'=> $request->email,
                'emplyeeID'=> $request->emplyeeID,
                //'roles'=> $request->roles,
                'permission'=> $request->permission,
                'mobile' => $request->mobile,
            ]);
            
         }else{
            $user->update($request->all());
            $user->fill([
                'password' => Hash::make($user->password)
            ])->save();
         }

        

        return redirect()->action([UserController::class, 'index'])->with(['success' => 'user successfully deleted']) ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        // return redirect()->route('/')->with(['success' => 'user successfully deleted']);
        return redirect()->action([UserController::class, 'index'])->with(['success' => 'user successfully deleted']) ;

    }
}
