<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Contribution;
use App\User;
use Carbon\Carbon;


use File;
use App\Http\Requests\Requestsit;
use App\Http\Requests\UPDATEREQUEST;
use Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Input;

class SiteController extends Controller
{
   
   public function acch(){
$cnb = DB::table('contributions')->where( 'deleted_at' , null)->orderBy('id','desc')->limit(5)->get();


$user = DB::table('users')->get();
return view('acch', ['cnb' => $cnb , 'user'=>$user]);


  }

    public function sss(UPDATEREQUEST $request){

if($request->input('ville')==null )

if( $request->input('type_cnb')==null){

$cnb = DB::table('users')->join('contributions', 'contributions.id_user', '=', 'users.id')

->where( 'deleted_at' , null)->limit(5)->get();



return view('acch2', ['cnb' => $cnb ]);


  }

if($request->input('ville')!=null )

if( $request->input('type_cnb')!=null){
 

 



 

$cnb = DB::table('users')->join('contributions', 'contributions.id_user', '=', 'users.id')->where( 'deleted_at' , null)->where( 'type_cnb' ,$request->input('type_cnb'))->where( 'ville' ,$request->input('ville'))->get();




return view('acch2', ['cnb' => $cnb ]);



  }



if($request->input('ville')==null )

if( $request->input('type_cnb')!=null){
 

$cnb = DB::table('users')->join('contributions', 'contributions.id_user', '=', 'users.id')->where( 'deleted_at' , null)->where( 'type_cnb' ,$request->input('type_cnb'))->limit(5)->get();





return view('acch2', ['cnb' => $cnb ]);

}



if($request->input('ville')!=null )

if( $request->input('type_cnb')==null){

$cnb = DB::table('users')->join('contributions', 'contributions.id_user', '=', 'users.id')->where( 'deleted_at' , null)->where( 'ville' ,$request->input('ville'))->limit(5)->get();





return view('acch2', ['cnb' => $cnb ]);
}




}

}
