<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\articles;
//phien ban day du cua controller, resource controller tao bang lenh php artisan make:controller ten --resource
class ArticlereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $art=articles::all();//ham all lay toan bo du lieu o csdl len
        //ham doc mang art sau khi load all gan ve 1 arts
        //foreach($art as $arts){
         //   echo $arts->title;
          //  echo '<br>';
        //}

        //return view('article.listview',['art'=>$art]);//tra ve listview theo dinh dang blade template, bien $art se lay gia tri mang art len
        return view('article.listview')->with('art',$art);//tra ve view du lieu, with mang art bien $art giong o tren
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('article.create');//tra ve view create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store tuong ung vs save 
        //request laf 1 object luu toan bo du lieu client gui len
        //$request->all():lay tat ca du lieu tu request
        $art01=new articles;//tao 1 object model articles tu articles.php
        $art01->title=$request->title;//lay gtri tu client form create.blade($request) cho vao bien $art01
        $art01->content=$request->content;
        $art01->save();//luu bien xuong db
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
