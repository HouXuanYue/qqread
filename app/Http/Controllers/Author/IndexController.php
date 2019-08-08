<?php

namespace App\Http\Controllers\Author;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        return view('author/index/index');
    }

    public function login()
    {
        $a_name = request()->a_name;
        $a_pwd = request()->a_pwd;
        $userinfo = DB::table('author')->where(['a_name'=>$a_name])->first();
        if(empty($userinfo)){
            return json_encode(['code'=>0,'message'=>'该用户不存在']);
        }
        if(md5($a_pwd)!=$userinfo->a_pwd){
            return json_encode(['code'=>0,'message'=>'密码不正确']);
        }
        $a_id = $userinfo->a_id;
        session(['a_id'=>$a_id]);
        return json_encode(['code'=>2,'message'=>'登陆成功']);

    }

    public function shouye()
    {
        return view('author/index/shouye');
    }

    public function user()
    {
        return view('author/index/user');
    }
}
