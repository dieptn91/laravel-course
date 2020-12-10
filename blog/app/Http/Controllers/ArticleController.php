<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\articles;//su dung 1 object articles tu file articles.php

class ArticleController extends Controller
{
    //ham show ra web
    //b1 tao 1 class ke thua controler vi lrv hoat dong theo cau truc controler => route/web
    //trong lrv dung return de tra ve gia tri
    public function viewblog(){
        //return 'This is content blog';
        $articles=new articles;//khai bao 1 doi tuong articles de dung
        $articles->title="This is title";//tao gia tri de luu xuong db
        $articles->content="This is a content";
        $articles->save();//luu xuong csdl khi goi ham viewblog
    }
    //doc du lieu da luu duoi db
    public function readblog(){
        $articlesread=articles::find(1);//tao bien articlesread chua du lieu du db articles co id =1
        echo $articlesread->title;
    }
}
