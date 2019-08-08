<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $data = DB::table('lmap')->limit(6)->select('img')->get();
        return view('index/index/index',['data'=>$data]);
    }
}
