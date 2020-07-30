<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Datatables;

class AdministratorController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/admin';

    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
    public function index() {
        $administrator = User::orderBy('created_at','desc')->get();
        return view('admin.administrator.index', compact('administrator'));
    }

    public function create() {
        return view('admin.administrator.add_edit_administrator');
    }

    public function postCreate(AdminRequest $data) {
        $administrator           = new User();
        $administrator->name     = $data['name'];
        $administrator->password = Hash::make($data['password']);
        $administrator->email    = $data['email'];
        $administrator->status   = $data['status'] == 1 ? 1 : 0;
        $administrator->save();
        return redirect()->route('admin.administrator.home');

    }
    public function update($id)
    {
        $administrator = User::findOrFail($id);

        return view('admin.administrator.add_edit_administrator', compact('administrator'));
    }

    public function postUpdate($id, Request $data)
    {
        $administrator        = User::findOrFail($id);
        $administrator->name  = $data['name'];
        $administrator->email = $data['email'];
        $administrator->status   = $data['status'] == 1 ? 1 : 0;
        $validatedData = $data->validate([
            'name'  => 'required|unique:users,name,' .$administrator->id,
            'email' => 'email|max:200|unique:users,email,' .$administrator->id,
        ]);
        if($data->password == null){
            $administrator->save();
        }else{
            $administrator->password = Hash::make($data['password']);
            $administrator->save();
        }
        return redirect()->route('admin.administrator.home');

    }

    public function destroy($id) {
        User::findOrFail($id)->delete();
        return redirect()->route('admin.administrator.home');
    }
}
