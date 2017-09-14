<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * @var UserRepository
     */
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index()
    {
        $users = User::all();
        return view('user.index',compact('users'));
    }

    public function create()
    {
        $repository = $this->repository;
        return view('user.create',compact('repository'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role_id' => 'required'
        ]);

        $request['password'] = bcrypt($request->password);

        User::query()->create($request->all());
        Session::flash('success','User created successfully!');
        return redirect('users');
    }

    public function edit($id)
    {
        $user = User::query()->findOrFail($id);
        $repository = $this->repository;
        return view('user.edit',compact('user','repository'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => ['required','string','email','max:255',Rule::unique('users')->ignore($id)],
            //'password' => 'required|string|min:6|confirmed',
            'role_id' => 'required'
        ]);
        $user = User::query()->findOrFail($id);
        $user->update($request->only(['name','email','role_id']));
        Session::flash('success','"'.$user->name.'" has been updated!');
        return redirect('users');
    }

    public function resetPassword(Request $request,$id)
    {
        $this->validate($request,[
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user = User::query()->findOrFail($id);
        $user->update(['password'=>bcrypt($request->password)]);
        Session::flash('success','Password has been changed for "'.$user->name.'"!');
        return redirect('users');
    }

    public function changePassword()
    {
        $id = Auth::id();
        $user = User::query()->findOrFail($id);
        $repository = $this->repository;
        return view('user.password',compact('user','repository'));
    }

    public function newPassword(Request $request)
    {
        $this->validate($request,[
            'email' => [
                'required',
                'email',
                Rule::exists('users')->where(function($query)use($request){
                    $query->where('email',$request->email);
                }),

            ],
            'current_password' => [
                Rule::exists('users','password')->where(function($query)use($request){
                    $query->where('password',bcrypt($request->current_password));
                })
            ],

        ]);
        $id = Auth::id();
        $user = User::query()->findOrFail($id);
        return redirect('users');
    }

    public function destroy($id)
    {
        $user = User::query()->findOrFail($id);
        $user->delete($id);
        Session::flash('success','"'.$user->name.'" has been deleted!');
        return redirect('users');
    }
}
