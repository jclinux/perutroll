<?php
namespace App\Http\Controllers;

use Facebook;
use Facebook\FacebookSession as FacebookSession;
use Facebook\FacebookRequest as FacebookRequest;

use Illuminate\Http\Request;

class PerutrollController extends Controller
{
 private $facebook_access_token =null;  
public function index(){
 
      if (isset($_SESSION['facebook_access_token'])) { 
         $this->facebook_access_token=$_SESSION['facebook_access_token'];         
      }

	$fb = new \Facebook\Facebook([
	  'app_id' => config('facebook.default.app_id'),
	  'app_secret' => config('facebook.default.app_secret'),
	  'default_graph_version' =>config('facebook.default.default_graph_version'),
	  'default_access_token' => !empty($facebook_access_token) ? $facebook_access_token : 'APP-1587689828188355|59c0d907a249cd37bc9e98caf7b675d6'
	]);

// Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
//   $helper = $fb->getRedirectLoginHelper();
//   $helper = $fb->getJavaScriptHelper();
//   $helper = $fb->getCanvasHelper();
//   $helper = $fb->getPageTabHelper();

try {
  // Get the \Facebook\GraphNodes\GraphUser object for the current user.
  // If you provided a 'default_access_token', the '{access-token}' is optional.
  $response = $fb->get('/me');
} catch(\Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(\Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$me = $response->getGraphUser();
echo 'Logged in as ' . $me->getName();





  	return view('home');
  }  

    
}
