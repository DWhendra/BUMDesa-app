<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rules\Unique;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function login()
    {
        return view('user.login');
    }
    public function create()
    {
        return view('user.create');
    }
    public function users()
    {

        if (Gate::allows('admin')) {
            $dt = User::paginate(10);
            return view('user.index', ['users' => $dt]);
        } elseif (Gate::allows('desa')) {
            $joinedData = DB::table('users')
            ->select('users.*')
            ->where('id', auth()->user()->id)
            ->get();
            return view('user.index', ['users' => $joinedData]);
        }
        $dt = User::paginate(10);
            return view('user.index', ['users' => $dt]);



    }
    public function store(Request $request)
    {
        // $max=DB::table('test')->select('point')->get();
        // $max2= $max[0]->point;
        $dt = $request->validate([
            'role' => 'required',
            'nama' => 'required',
            'username' => ['required', 'unique:users'],
            'password' => "required|min:8"

        ]);
        User::create($dt);
        return redirect('/user')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function edit($id)
    {
        return view('user.edit', ['edit' => User::where('id', $id)->get()]);
    }
    public function update(Request $request, $id)
    {
        $dt = $request->validate([
            'role' => 'required',
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required|min:5'

        ]);
        $user = User::findOrFail($id);
        $user->update($dt);
        //dd($dt);
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with(['error' => 'Gagal Masuk!']);
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
