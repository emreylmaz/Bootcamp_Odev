<?php

namespace App\Http\Controllers;

use App\Users;
use Carbon\Carbon;
use Illuminate\Http\Request;
use http\Client\Curl\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use mysql_xdevapi\Table;

class AdminController extends Controller
{
    public function index()
    {
        return view('layouts.admin-master');
    }
    public function indexView(){
        $users = Users::where('deleted_at', '=', null)->get(); //tabloda deleted_at sütunu boş olanları çeker
        return view('users', compact('users'));
    }
    public function updateView($id)
    {
        $user = Users::where('id',$id)->get();
        $user = $user->first();

        return view('update',compact('user'));
    }

    public function update(Request $request,$id)
    {
        Users::where('id',$id)->update([
            'name' => $request->get('name'),
            'username' => $request->get('username'),
            'email' => $request->get('email'),
            'updated_at' => Carbon::now()
        ]);
        return 'Başarıyla Güncellendi';
    }
    public function delete($id)
    {
        DB::table('users')->where('id', '=', $id)->update(['deleted_at' => Carbon::now()]);//id'ye ait kullanıcının deleted_at sütununa silme tarihi ekler ama tabloda durur soft delete
        return "<script>alert('Başarıyla Silindi')</script>";
    }
    public function register(){
        return view('create');
    }
    public function create(Request $request){
        $password = $request->get('password');

        DB::table('users')->insert([
           'name' => $request->get('name'),
           'username' => $request->get('username'),
           'email' => $request->get('email'),
            'password' => Hash::make($request),
            'created_at' => Carbon::now(),
            'position' =>  ('user'),
        ]);
        return'Başarılı';
    }
}
