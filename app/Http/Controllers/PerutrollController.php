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

    if (isset($_SESSION['facebook_access_token'])) { 
         $this->facebook_access_token=$_SESSION['facebook_access_token'];         
      }

    $this->fb = new Facebook\Facebook([
    'app_id' => config('facebook.default.app_id'),
    'app_secret' => config('facebook.default.app_secret'),
    'default_graph_version' =>config('facebook.default.default_graph_version'),
    'default_access_token' => !empty($this->facebook_access_token) ? $this->facebook_access_token : 'APP-1587689828188355|59c0d907a249cd37bc9e98caf7b675d6'
     ]);
     
    }

 public function index(){
 	 session_start(); 
	 $data=[];

    if (isset($_SESSION['user']))
    {
      $data['user']=$_SESSION['user'];
                 
    }else{
	   $helper = $this->fb->getRedirectLoginHelper();
	   $permissions = ['email', 'user_likes','user_friends','public_profile','user_photos'];
	   $loginUrl = $helper->getLoginUrl('http://perutroll.com/login/callback', $permissions);
	   $data['url']=$loginUrl;
	}	
	return view('home',$data);  	
  }  


public function callback(Request $request)
  {
    session_start();             
	var_dump($this->fb);
    $accessToken=$this->getAccessToken($this->fb);            
    var_dump($accessToken);
    exit();
    if (isset($accessToken))
      {
        $_SESSION['facebook_access_token']=$accessToken;
        $response = $this->fb->get('/me?fields=name,email,id,picture,first_name,last_name,gender,birthday', $accessToken);        
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
       echo $accessToken = $helper->getAccessToken();
       exit();
     } catch(Facebook\Exceptions\FacebookResponseException $e) {
         echo 'Graph returned an error: ' . $e->getMessage();
     } catch(Facebook\Exceptions\FacebookSDKException $e) {    
         echo 'Facebook SDK returned an error: ' . $e->getMessage();
     } 
   return (string) $accessToken;
}

}
