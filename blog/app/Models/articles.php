<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//de tao 1 model(thuc the hien thi) trong lrv ta dung lenh cmd php artisan make:model ten thu muc/ten file -m 
//-m se tao them 1 migration tuong ung, co nghia la 1 model object se co 1 table database duoc tao ra
//file se duoc tao o thu app
//resource controller giong controller nhung co san cac ham
class articles extends Model
{
    //fillable dinh nghia cac fiel se duoc luu xuong database
    //khai bao nhu sau, 2 fiel da co la title va content trung vs 2 cot co o database
    protected $fillable=[
        'title',
        'content'
    ];
}
