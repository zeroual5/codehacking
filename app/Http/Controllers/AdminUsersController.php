<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersCreateRequest;
use App\Http\Requests\UsersUpdateRequest;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Scalar\String_;

class AdminUsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $users = User::all();
        $users = User::paginate(10);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $roles = Role::pluck(textField, value)->all();
        $roles = Role::pluck('name', 'id')->all();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(UsersCreateRequest $request)
    {
        $input = $request->all();
        if($file = $request->file('photo_id'))
        {
            $name = time() . $file->getClientOriginalName();

            $file->move('Images',$name);
            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }
//        $input['password'] = bcrypt($request->password);

        User::create($input);
        return redirect('/admin/users');
//        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.users.show');
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
        $roles = Role::pluck('name','id')->all();
        return view('admin.users.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(UsersUpdateRequest $request, $id)
    {
        $user = User::findOrFail($id);

//        if(trim($request->password)){
//            $input['password'] = bcrypt($request->password);
//        }
//        else{
//            $input['password'] = $user->password;
//        }

        if(trim($request->password)){
            $input = $request->all();
//            $input['password'] = bcrypt($request->password);
        }else{
            $input = $request->except('password');
        }

        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('Images',$name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }

        $user->update($input);
        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $currentUserId = Auth::user()->id;
        $user = User::findOrFail($id);
        if($user->id != $currentUserId){
            unlink(public_path($user->photo->file));
            $user->delete();
            Session::flash('DangerAlert','The user has been Deleted');
        }
        return redirect('/admin/users');
    }
}
