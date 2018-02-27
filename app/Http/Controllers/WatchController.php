<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contribution;
use App\User;
use Auth;
/////////////
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;



use Input;
class WatchController extends Controller
{
   public function watch($id){
   	$cnb = DB::table('contributions')->where('id',$id )->get();
   	DB::table('contributions')->where('id',$id )->increment('nbr_vue', 1);
   	$allcnb = DB::table('contributions')->orderBy('nbr_vue',  'DESC')->get();
   	$user = DB::table('users')->get();
   	return view('watch', ['cnb' => $cnb , 'allcnb'=>$allcnb ]);
   }

}
