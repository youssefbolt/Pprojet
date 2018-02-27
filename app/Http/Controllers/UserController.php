<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contribution;
use App\User;
use Carbon\Carbon;
use Auth;
use File;
use App\Http\Requests\Requestsit;
use App\Http\Requests\UPDATEREQUEST;
use Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Input;


class UserController extends Controller
{


function __construct() {

    $this->middleware(function ($request, $next)
    {
        $this->user = Auth::user();
        return $next($request);
    }); }

  public function indexuser(){
$cnb = DB::table('contributions')->where('id_user', Auth::User()->id)->where( 'deleted_at' , null)->orderBy('id','desc')->limit(5)->get();


$user = DB::table('users')->where('id', Auth::User()->id )->get();
return view('home', ['cnb' => $cnb , 'user'=>$user]);


  }

    public function filtre(UPDATEREQUEST $request){

if($request->input('ville')==null )

if( $request->input('type_cnb')==null){

$cnb = DB::table('users')->join('contributions', 'contributions.id_user', '=', 'users.id')

->where( 'deleted_at' , null)->limit(5)->get();



return view('home2', ['cnb' => $cnb ]);


  }

if($request->input('ville')!=null )

if( $request->input('type_cnb')!=null){
 

 



 

$cnb = DB::table('users')->join('contributions', 'contributions.id_user', '=', 'users.id')->where( 'deleted_at' , null)->where( 'type_cnb' ,$request->input('type_cnb'))->where( 'ville' ,$request->input('ville'))->get();




return view('home2', ['cnb' => $cnb ]);



  }



if($request->input('ville')==null )

if( $request->input('type_cnb')!=null){
 

$cnb = DB::table('users')->join('contributions', 'contributions.id_user', '=', 'users.id')->where( 'deleted_at' , null)->where( 'type_cnb' ,$request->input('type_cnb'))->limit(5)->get();





return view('home2', ['cnb' => $cnb ]);

}



if($request->input('ville')!=null )

if( $request->input('type_cnb')==null){

$cnb = DB::table('users')->join('contributions', 'contributions.id_user', '=', 'users.id')->where( 'deleted_at' , null)->where( 'ville' ,$request->input('ville'))->limit(5)->get();





return view('home2', ['cnb' => $cnb ]);
}




}

    public function indexusers($id){

$cnb = DB::table('contributions')->where('id_user', Auth::User()->id)->where( 'deleted_at' , null)->whereBetween('id', [$id, $id+10])->limit(5)->get();


$user = DB::table('users')->where('id', Auth::User()->id )->get();

return view('home', ['cnb' => $cnb , 'user'=>$user]);


  }


  public function edite($id){

$cnb = DB::table('contributions')->where('id', $id )->get();


return view('editt', ['cnb' => $cnb]);
  }



  public  function update($id , Requestsit $request){
$cnb = Contribution::find($id)->get();

if($request->file('video') != null ){
	

	$cnb[0]->video=str_replace('\'', '/', $cnb[0]->video);


unlink(public_path(''.$cnb[0]->video));

            $video = $request->file('video')->getClientOriginalName();
$video=Str::random().''.$video;
$destination ='upload';
$vd=$request->file('video')->move($destination, $video);
DB::table('contributions')
            ->where('id', $id)
            ->update(['video' => $vd ]);

	}
	if($request->file('photo_cnb') != null ){
		File::delete($cnb[0]->photo_cnb);
$photo = $request->file('photo_cnb')->getClientOriginalName();
$destination = 'upload';
$image =$request->file('photo_cnb')->move($destination, $photo);
DB::table('contributions')
            ->where('id', $id)
            ->update(['photo_cnb' => $image ]);
}



DB::table('contributions')
            ->where('id', $id)
            ->update(['title' => $request->input('title') , 
        'text' => $request->input('text'),

'type_cnb' => $request->input('type_cnb'),

]);
            Alert::warning('Update  good!')->persistent("Close");
return redirect('/home');










  }

  public function profile(){

$user = DB::table('users')->where('id', Auth::User()->id )->get();

return view('profile', ['user' => $user]);


  }
      public function store(Requestsit $request){

$now = Carbon::now();


$cnb = DB::table('contributions')->where('id_user', Auth::user()->id )->max('created_at');



if($now->diffInDays(Carbon::parse($cnb)) < 30 ){
  session()->flash('eroor' ,'une suel fois par moi  ');
 return redirect('/home');
}

// show difference in days between now and end dates







      $cnb= new Contribution();
      $cnb->title=$request->input('title');
      $cnb->text=$request->input('text');
     $cnb->type_cnb=$request->input('type_cnb');
$cnb->id_user = Auth::User()->id;
$data = $request->input('video');




if($request->file('video')!=null){
	$video = $request->file('video')->getClientOriginalName();
$video=Str::random().''.$video;
$destination ='upload';
$vd=$request->file('video')->move($destination, $video);
$cnb->video=$vd;}

	$data = $request->input('photo_cnb');

$photo = $request->file('photo_cnb')->getClientOriginalName();
$destination = 'upload';
$image =$request->file('photo_cnb')->move($destination, $photo);

$cnb->photo_cnb=$image;

$cnb->save();
Alert::success('created  job!')->persistent("Close");
 return redirect('/home');
  }
  public function delete($id){

DB::table('contributions')
            ->where('id', $id)
            ->update(['deleted_at' => Carbon::now()]);
return redirect('/home');
Alert::success('deleted good!')->persistent("Close");



  }

   public  function updateUser( UPDATEREQUEST $request){

 $usera = user::find(Auth::user()->id)->get();

if($request->file('photo_user')!=null){
  $video = $request->file('photo_user')->getClientOriginalName();
$video=Str::random().''.$video;
$destination ='upload';
$vd=$request->file('photo_user')->move($destination, $video);

DB::table('users')
            ->where('id', Auth::user()->id)
            
        ->update([
         
          'photo_user' => $vd,



]);} 
       

if($request->input('npassword') == null){return 'oohhh';}
if($usera[0]->password ==$request->input('password') ){return $usera[0]->password ;}
if($request->input('npassword') == $request->input('Confime_password')){
DB::table('users')
            ->where('id', Auth::user()->id)
         ->update([   
        
         
          'password' => bcrypt($request->input('npassword')) , ]);}


DB::table('users')
            ->where('id', Auth::user()->id)
           ->update([ 
        
         
          'name' => $request->input('name'),
          'email' => $request->input('email'),     'ville' => $request->input('ville'),
           'tel' => $request->input('tel'),



]);









  	}

 }