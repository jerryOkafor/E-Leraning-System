<?php
require_once 'core/config.php';
$templatePath = "$path/temp/smarty/templates";
require "$path/Smarty/libs/Smarty.class.php";
require_once 'core/smarty.init.php';
require_once 'classes/Authenticate.php';
require_once 'classes/Connection.php';
require_once 'classes/Forum.php';
require_once 'classes/Evaluation.php';
require_once 'classes/Course.php';
require_once 'classes/ResourceManager.php';
ob_start();
session_start();
//echo $_SERVER["REMOTE_ADDR"];
$auth = new Authenticate();
$forum = new Forum();
$eval = new Evaluation();
$rMan = new ResourceManager();


$token = isset($_SESSION['token'])? $_SESSION["token"]:"";
$id = isset($_SESSION['user_id'])? $_SESSION["user_id"]:0;

if (!$auth->isLogedin($token, $id)) {
	//Not logged in, send to login page.
  $msg = isset($_GET['loginerrorfeed'])? $_GET["loginerrorfeed"]:"";
  $smarty->assign("message",$msg);
   $smarty->assign('user_id',$id);
   $smarty->assign('token',$token);
   $smarty->assign('profile',"You Do not have Active Session \n So no Profile to display!");
    if (isset($_GET["view"])) {
    $view =htmlspecialchars( $_GET["view"]);
      if($view=="registerView")
	{
	//take the person to register page
	if(isset($_GET["feedback"]))
	  {
	  $feedback = htmlentities(htmlspecialchars($_GET["feedback"]));
	      
	  }
	  
	//$smarty->assign('feedback',$feedback);
	$smarty->assign('mainContent',$smarty->fetch("register.tpl"));
        $smarty->assign('title', '..::ECE_E-Learning:register');
	
	$smarty->display("index.tpl");
	  }
		else
	  {
		  go_homeforlogin();
	
	$smarty->display("index.tpl");
	  
	  }
	  }
		else
	  {
	   go_homeforlogin();
	$smarty->display("index.tpl");
	  }
	  
	 
	
	
	  } else 
	    {
            //user is loged in and making request
	     $msg = isset($_GET['loginerrorfeed'])? $_GET["loginerrorfeed"]:"";
	     $smarty->assign("message",$msg);
	    $smarty->assign('user_id',$id);
	    $smarty->assign('token',$token);
	    $smarty->assign('user',$auth->getFullName($id));
	    
      $smarty->assign('profile',$auth->getProfile($id));
          
	      if (isset($_GET["view"])) {
		   $view =htmlspecialchars( $_GET["view"]);		   
		   $rtype = isset($_GET['rtype'])? $_GET["rtype"]:"";

		 if ($view == "homeView") {     
		   go_homeforlogedin();

		 } else if ($view == "resourceView") {
		   
		   
		   if($rtype=="documents")
		     {
		    
		   $smarty->assign('documents',$rMan->getAllDocumentResources());
		   $smarty->assign('mainContent',$smarty->fetch("documentResource.tpl"));
		     }
		  else if($rtype=="images")
		     {
		   $smarty->assign('images',$rMan->getAllImageResources());		    
		   $smarty->assign('mainContent',$smarty->fetch("imageResources.tpl"));
		     }else if($rtype=="videos")
		       {
		       
		   $smarty->assign('videos',$rMan->getAllVideoResources());
		   $smarty->assign('mainContent',$smarty->fetch("videoResources.tpl"));
		       }
		       else
			 {
			 
		   $smarty->assign('mainContent',$smarty->fetch("resources.tpl"));
			 }
		     	   
		   $smarty->assign('errorfeed','');		   
		   $smarty->assign('title', '..::ECE_E-Learning:homeViewLogin');
		   
		 } else if ($view == "newResource") {
		   $smarty->assign('mainContent',$smarty->fetch("newResources.tpl"));
		   $smarty->assign('errorfeed','');
		   $smarty->assign('title', '..::ECE_E-Learning:homeViewLogin');
		 } else if ($view == "archiveView") {
		   $smarty->assign('mainContent',"Archive View");
		   $smarty->assign('title', '..::ECE_E-Learning:archive');
		 } else if ($view == "forumView") {    
		   $smarty->assign('forumhome',$forum->goHome());
		   $smarty->assign('mainContent',$smarty->fetch("forum.tpl"));
		   $smarty->assign('title', '..::ECE_E-Learning:forum');
		 } else if ($view == "contactView") {
		   $smarty->assign('mainContent',$smarty->fetch("contact.tpl"));
		   $smarty->assign('title', '..::ECE_E-Learning:contact');
		 } else if ($view == "registerView")
		   {
		   go_homeforlogedin();
		 } else if ($view == "userCourses") {
		   
		   $course = new Course();
		   
		   $smarty->assign('courses',$course->displayAllCourse());
		   $smarty->assign('title', '..::ECE_E-Learning:userCouses');
		   $smarty->assign('mainContent',$smarty->fetch("userCourses.tpl"));
		 } else if ($view == "userEvaluation") {
		   $smarty->assign('evalHome',$eval->goHome());
		   $smarty->assign('mainContent',$smarty->fetch("userEvaluation.tpl"));
		   $smarty->assign('title', '..::ECE_E-Learning:userCourses');
		 }else if ($view == "adminView")   {

		     //include_once 'adminmainpage.php';
		  if($auth->isAdmin($auth->selectSessionData($id)))
		    {
		    //direct user to the admin main page
		    header("Location:../usr/admin/?suid=".$id."token=".$token."&view=enable_disableUser");
			
		     }else//user is loged in but not as admin
			  {

				   go_homeforlogedin();
			  }
			  } else //no specific access of the index page
			   {

			     go_homeforlogedin();
			   }
			 } else if(isset($_GET['action']))
				{
				$action = htmlspecialchars($_GET['action']);

			if($action == "logout")
				     {
				      $auth->logout();
				      header('Location:../usr/index.php');
			}else if($action=="editprofile")
			    {
			  //check if the user is loged in or the user has a dprofiile running
			  if (!$auth->isLogedin($token, $id)) {
			    				
			  $smarty->assign('mainContent',"You do not have a profile to edit");
			      
				}
			      else
				{
			      
			        $smarty->assign('mainContent',$smarty->fetch("editprofile.tpl"));
				}
				$smarty->assign('title', '..::ECE_E-Learning:Profile Edit');
			  }
			}else{ //user is loged in but not accsessing any particular page, view not set
			   
				 go_homeforlogedin();
			 }

			 $smarty->display("index.tpl");


	       }


if(isset($_POST["submit"]))
	{	
	$username =  htmlentities(htmlspecialchars($_POST["username"]));
	$password =  htmlentities(htmlspecialchars($_POST["password"]));
	
	
	if(!empty($username)&&!empty($password))
	{
	 // echo $username.$password.$logintype;
	  $reply = $auth->login($username, $password);
	  if($reply==1)//bad login combination
	  {
	    header("Location:../usr/?sid=".$_SESSION['user_id']."&token=".$token = $_SESSION['token']."&loginerrorfeed=".rawurlencode(" Invalid username and password combination! ::.."));
		      
	  }else if($reply==2)//user not active
	  {
	    header("Location:../usr/?sid=".$_SESSION['user_id']."&token=". $token = $_SESSION['token']."&loginerrorfeed=".rawurlencode(" User-is-Temporary-Disabled! ::.."));
				
	  }  else if($reply==3)//user not verified
	    {
	    header("Location:../usr/?sid=".$_SESSION['user_id']."&token=".$token = $_SESSION['token']."&loginerrorfeed=".rawurlencode(" User have not verified Registration! ::.."));
				
	  }else if($reply==0)//login successful
	    {
	    
	   header("Location:../usr/index.php?sid=".$_SESSION['user_id']."&token=".$token = $_SESSION['token']."&loginerrorfeed=".rawurlencode(" Login Successful! ::.."));
			
	  }
	 	}
		}//end if;
		
		


		
		
		

function go_homeforlogedin()
	  {
	    global $smarty;
	    global $auth;
	    global $id;


	    $smarty->assign('slider',$smarty->fetch('slider.tpl'));
			$smarty->assign('user',$auth->getFullName($id));
			$smarty->assign('mainContent',$smarty->fetch("logedin.tpl"));
			$smarty->assign('title', '..::ECE_E-Learning:homeView');

	  }

function go_homeforlogin()
	    {
	      global $smarty;
	      $error = isset ($_GET["loginerrorfeed"])? $_GET["loginerrorfeed"] : "";

			  if(!empty($error))

			  {
			   $smarty->assign('errorfeed',$error);
			  }
			   else {
			  $smarty->assign('errorfeed','');
			   }

			  $smarty->assign('slider',$smarty->fetch('slider.tpl'));
			  
			  $smarty->assign('user',"");
			  $smarty->assign('mainContent',$smarty->fetch("logedout.tpl"));
			  $smarty->assign('title', '..::ECE_E-Learning:homeView');

	    }


	      