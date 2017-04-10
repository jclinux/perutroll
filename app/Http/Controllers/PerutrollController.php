<?php
namespace App\Http\Controllers;

use Facebook;
use Facebook\FacebookSession as FacebookSession;
use Facebook\FacebookRequest as FacebookRequest;
use Illuminate\Http\Request;
class PerutrollController extends Controller
{
 private $facebook_access_token =null;  
 private $fb=null;

 public function __construct()
    {
        
    }

  private function init(){

  if (isset($_SESSION['facebook_access_token'])) { 
         $this->facebook_access_token=$_SESSION['facebook_access_token'];         
      }

    $fb = new Facebook\Facebook([
    'app_id' => config('facebook.default.app_id'),
    'app_secret' => config('facebook.default.app_secret'),
    'default_graph_version' =>config('facebook.default.default_graph_version'),
    'default_access_token' => !empty($this->facebook_access_token) ? $this->facebook_access_token : 'APP-1587689828188355|59c0d907a249cd37bc9e98caf7b675d6'
     ]);
    return $fb;
    }

 public function index(){
 	session_start(); 
	$data=[];
	$fb=$this->init();
    if (isset($_SESSION['user']))
    {
      $data['user']=$_SESSION['user'];
      $response=$this->getFotos();
	    $data['friends']=$response;

	  $response = $fb->get('/me/friends?fields=name,email,id,picture.type(small).as(picture_small), picture.type(normal).as(picture_normal),picture.width(400).height(400).as(picture_large)&limit=100&redirect=false',$this->facebook_access_token);
    $rspta6 = $response->getGraphEdge()->asArray();
    var_dump($rspta6); 
    exit;
    }else{
	   $helper = $fb->getRedirectLoginHelper();
	   $permissions = ['email', 'user_likes','user_friends','public_profile','user_photos'];
	   $loginUrl = $helper->getLoginUrl('http://perutroll.com/login/callback', $permissions);
	   $data['url']=$loginUrl;
	}
	var_dump($data);
	return view('home',$data);  	
  }  
public function callback(Request $request)
  {
    session_start();  
    $fb=$this->init();           	
    $accessToken=$this->getAccessToken($fb);    
    if (isset($accessToken))
      {
        $_SESSION['facebook_access_token']=$accessToken;
        $response = $fb->get('/me?fields=name,email,id,picture,first_name,last_name,gender,birthday', $accessToken);        
        $user = $response->getGraphUser();
        //dd($user);
        //$authUser = $this->findOrCreateUser($user);        
        // session
        $_SESSION['user']=array(
            'name' => $user['name'],
            'email' => $user['email'],
            'facebook_id' => $user['id']
          );

        return redirect('/');        
      }      
}


public function getAccessToken($fb=null)
{
   //session_start();
   $accessToken=null;
   $helper = $fb->getRedirectLoginHelper();
   try {
       $accessToken = $helper->getAccessToken();       
     } catch(Facebook\Exceptions\FacebookResponseException $e) {
         echo 'Graph returned an error: ' . $e->getMessage();
     } catch(Facebook\Exceptions\FacebookSDKException $e) {    
         echo 'Facebook SDK returned an error: ' . $e->getMessage();
     } 
   return (string) $accessToken;
}

private function getFotos(){

  $accessToken=$_SESSION['facebook_access_token'];     
  
  $fb=$this->init();           	
  $friends=array();
  $r_picture=array();
  if ($accessToken)
  {    

    $response = $fb->get('/me/friends?fields=name,email,id,picture.width(300)&redirect=false&type=large',$this->facebook_access_token);
    $rspta6 = $response->getGraphEdge()->asArray();
    var_dump($rspta6); 
    exit;

//    $response = $fb->get('/me/friends?fields=name,email,id,picture.type(small).as(picture_small), picture.type(normal).as(picture_normal),picture.width(400).height(400).as(picture_large)&limit=100&redirect=false', $accessToken);
  //  $r_friends = $response->getGraphEdge()->asArray();        
    foreach ($r_friends as $key => $value) {
        $friends[$key]['id']=$value['id'];
        $friends[$key]['name']=$this->getName($value['name']);
        $friends[$key]['fullname']=$value['name'];
        $friends[$key]['picture_normal']=$value['picture_normal']['url'];   
        $friends[$key]['picture_large']=$value['picture_large']['url'];   

        $r_picture[$value['id']]=$value['picture_large']['url'];
    }    
        $_SESSION['pictures']=$r_picture;
    return $friends; 
  }
}

 public function logout(){
  session_start();
  if (isset($_SESSION['user'])){
      session_destroy();
      unset($_SESSION['user']);
  }


 }

}
