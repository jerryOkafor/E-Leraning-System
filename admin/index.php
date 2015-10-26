<?php
require_once '../core/config.php';
$templatePath = "$path/temp/smarty/templates";
require "$path/Smarty/libs/Smarty.class.php";
require_once '../core/smarty.init.php';
require_once '../classes/Authenticate.php';
require_once '../classes/Connection.php';
require_once '../classes/Forum.php';
require_once '../classes/Evaluation.php';
require_once '../classes/Admin.php';
ob_start();
session_start();
$auth = new Authenticate();
$forum = new Forum();
$eval = new Evaluation();
$admin = new Admin();

if (!isset($_SESSION['token'])) {
	//Not logged in, send to login page.
 

	
	
	  } else {//user is loged in and making request
	  //
          //verify token for match
	      if (isset($_GET["view"])) {
		   $view =htmlspecialchars( $_GET["view"]);

		 if ($view == "homeView") {     
		   go_homeforlogedin();

		 } else if ($view == "enable_disableUser") {
		   
		   $smarty->assign("title","Admin Page");
	    $smarty->assign("users",$admin->showAllUser());
	    $smarty->assign("mainContent",$smarty->fetch('userlist.tpl'));
	    $smarty->display("admin.tpl");
		 
		   
		 } else //no specific access of the index page
			   {

			     go_homeforlogedin();
			   }
			 } else { //user is loged in but not accsessing any particular page, view not set
			   
				 go_homeforlogedin();
			 }

			 //$smarty->display("index.tpl");


	       }


 
 
 
 
function go_homeforlogedin()
	  {
	    global $smarty;
 $smarty->assign("title","Admin Page");
 $smarty->assign("mainContent","This is a test");
 $smarty->display("admin.tpl");
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
	    $smarty->assign("title","Admin Page");
	    $smarty->assign("mainContent","This is a test");
	    $smarty->display("admin.tpl");


	    }


	      