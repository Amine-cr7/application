<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class produitController extends Controller
{
    public function __construct()
    {
        return $this->middleware('login');
    }
    public function index(){
        $result = DB::select('select * from produit');
        return view('crud.commerce',['produits' => $result]);
    }
    public function show($id){
        $result = Db::select('select * from produit where id = ?',[$id]);
        
        return view('crud.showProduct',['produit'=>$result]);
    }
    public function store(Request $request){
        if($request->hasFile('image')){
            $image = $request->file('image');
            $img = $image->getClientOriginalName();
            $image->move(public_path('public/'), $img);
            DB::insert('insert into produit (`title`, `price`, `image`, `description`) values(?,?,?,?)',
            [$request['title'],$request['price'],$img,$request['description']]);
        }
      return  redirect('produit');
    }
    public function edit($id){
        $result = Db::select('select * from produit where id = ?',[$id]);
        return view('crud.edit',['produit'=>$result]);
    }
    public function update(Request $request,$id){
        $result = DB::select('select image from produit where id = ? ',[$id]);
        $img = null;
        foreach($result as $res){
            $img = $res->image;
        }
        if($request->hasFile('image')){
            $image = $request->file('image');
            $img = $image->getClientOriginalName();
            $image->move(public_path('public/'), $img); 
        }
        DB::update('update produit set title = ? , price = ? , image = ? , description = ? where id = ?',
        [$request['title'],$request['price'],$img,$request['description'],$id]);
        return redirect('produit/'.$id); 
    }
    public function delete($id){
        DB::delete('delete from produit where id = ?',[$id]);
        return redirect('produit');
    }
}
