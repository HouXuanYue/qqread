<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RpmapController extends Controller
{
    //
    public function add()
    {
        return view('/admin/rpmap/add');
    }

    public function upload()
    {
        $data = request()->all();
        //文件上传操作
        $file = request()->file('img');
        //定义允许上传的文件类型
        $allow = ['jpg','png','gif'];
        if(request()->hasFile('img') && $file->isValid()){
            //获取文件的后缀名
            $ext = $file->getClientOriginalExtension();
            if(in_array($ext,$allow)){
                //获取当前文件的位置
                $path = $file->getRealPath();
                //生成新文件的文件名
                $newfilename = date('Ymd')."/".time().".".$ext;
                $data['img'] = $newfilename;
                $re = Storage::disk('uploads')->put($newfilename,file_get_contents($path));
                if($re){
                    //入库
                    DB::table('lmap')->insert($data);
                }else{
                    exit("文件类型不合法，请重新检查");
                }
            }else{
                exit("上传文件错误，请重新检查");
            }
        }
    }
}
