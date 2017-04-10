<?php

namespace App\Http\Library;

use Facebook;
use Facebook\FacebookSession as FacebookSession;
use Facebook\FacebookRequest as FacebookRequest;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
class FacebookLibrary {


   public function init($request)
   {
      session_start();
      $facebook_access_token=null;

      if (isset($_SESSION['facebook_access_token'])) {
      //if ($request->session()->has('facebook_access_token')) {
         //$facebook_access_token=$request->session()->get('facebook_access_token');
         $facebook_access_token=$_SESSION['facebook_access_token'];         
      }
      

    $fb = new Facebook\Facebook([
    'app_id' => config('facebook.default.app_id'),
    'app_secret' => config('facebook.default.app_secret'),
    'default_graph_version' =>config('facebook.default.default_graph_version'),
    'default_access_token' => !empty($facebook_access_token) ? $facebook_access_token : 'APP-1587689828188355|59c0d907a249cd37bc9e98caf7b675d6'
     ]);
  return $fb;
   }

 public function login($fb=null){
//session_start();
   try {
      $response = $fb->get('/me/friends?fields=id,name');
      $user = $response->getGraphUser();
      return 'Bienvenido'. $user['name'];
      exit; //redirect, or do whatever you want
      } catch(Facebook\Exceptions\FacebookResponseException $e) {
            //echo 'Graph returned an error: ' . $e->getMessage();
      } catch(Facebook\Exceptions\FacebookSDKException $e) {
            //echo 'Facebook SDK returned an error: ' . $e->getMessage();
      }
 
   $helper = $fb->getRedirectLoginHelper();
   $permissions = ['email', 'user_likes','user_friends','public_profile','user_photos'];
   $loginUrl = $helper->getLoginUrl('http://perutroll.com/login/callback', $permissions);
   return $loginUrl;
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

   public function getUser()
   {


   }
   public function getFriends()
   {


   }




}

