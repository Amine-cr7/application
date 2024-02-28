<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\String\b;

class UserController extends Controller
{
    //
    public function index(){
        $biens = DB::select('select * from les_biens where active = 1 limit 4');
        return view('agence.home',['biens' => $biens]);
    }
    public function search(Request $request){
       
        // $biens = DB::select('select * from les_biens where  ? IN (`Ville`,`Adresse`,`titre`) AND ( pieces >= ? Or surface >= ? Or prix >=  ?) AND active = 1 ',
        // [$request['cle'],$request['pieces'],$request['surface'],$request['prix']]
        // );
        $biens = null;
        if(isset($request['cle'])){
            $biens = DB::select('select * from les_biens where  ? IN (`Ville`,`Adresse`,`titre`)', [$request['cle']]);
        }
        elseif(isset($request['pieces']) AND isset($request['cle'])){
            $biens = DB::table('les_biens')->where('pieces',$request['pieces'])->where('ville',$request['cle'])->get();
        }
      dd($biens);
    return view('agence.search',['biens' => $biens]);
    }
}