<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\PostModel;

class HomeController extends Controller
{
    public function index(){
        $data['users'] = PostModel::get();
        return view('home',$data);
    }
}
