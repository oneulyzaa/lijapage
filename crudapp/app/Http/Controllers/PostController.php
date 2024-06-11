<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\PostModel;

class PostController extends Controller
{
    public function index(){

    }
    public function create()
    {
        $data['title'] = 'Tambahkan Data';
        return view("create",$data);
    }
    public function show($id){

        $data['user']   = PostModel::where(['id'=>$id])->firstOrFail();
        $data['id']     = $id;
        return view("show",$data);
    }
    public function store(Request $request){
        $nama       = $request->nama;
        $email      = $request->email;
        $username   = $request->username;
        $password   = $request->password;
        $alamat     = $request->alamat;
        
        $data       = array(
            'nama'      => $nama,
            'email'     => $email,
            'username'  => $username,
            'password'  => Hash::make($password),
            'alamat'    => $alamat
        );
        $result = PostModel::create($data);

        if($result) return redirect()->route('home')->with([
            'message' => 'Berhasil tambahkan data',
            'alert' => 'alert-success'
        ]);
        else return redirect()->route('home')->with([
            'message' => 'Gagal menambahkan',
            'alert' => 'alert-danger'
        ]);    
    }
   
    public function edit($id)
    {
        $data['title'] = 'Edit Data';
        $data['user']   = PostModel::where(['id'=>$id])->firstOrFail();
        $data['id']     = $id;
        return view("edit",$data);
    }

    public function update(Request $request, $id)
    {
        $nama       = $request->nama;
        $email      = $request->email;
        $username   = $request->username;
        $password   = $request->password;
        $alamat     = $request->alamat;
        
        $data       = array(
            'nama'      => $nama,
            'email'     => $email,
            'username'  => $username,
            'password'  => $password,
            'alamat'    => $alamat
        );
        
        $result = PostModel::where(['id'=>$id])->update($data);
        if($result) return redirect()->route('home')->with([
            'message' => 'Berhasil',
            'alert' => 'alert-success'
        ]);
        else return redirect()->route('home')->with([
            'message' => 'Gagal',
            'alert' => 'alert-danger'
        ]);     
    }

    public function destroy($id)
    {
        $delete = PostModel::where('id',$id);
        $delete->delete();
        if($delete) return redirect()->route('home')->with([
            'message' => 'Berhasil',
            'alert' => 'alert-success'
        ]);
        else return redirect()->route('home')->with([
            'message' => 'Gagal',
            'alert' => 'alert-danger'
        ]);     
    }
}
