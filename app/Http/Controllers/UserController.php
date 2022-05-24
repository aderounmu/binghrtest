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
        $data['users'] = User::paginate(5);
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
            'email'=> 'required',
            'password'=> 'required',
            'emplyeeID'=> 'required|unique:users',
            'roles'=> 'required',
            //'permission'=> 'required',
            'mobile' => 'required',
        ]);

        

         $user = User::create($request->all());
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
            'password'=> 'required',
            'emplyeeID'=> 'required|unique',
            'roles'=> 'required',
            'title'=> 'required',
            //'permission'=> 'required',
            'mobile' => 'required',
        ]);

        $user->update($request->all());

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
