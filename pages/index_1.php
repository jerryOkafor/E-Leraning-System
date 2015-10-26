<?php
require_once '../core/config.php';
$templatePath = "$path/temp/smarty/templates";
require "$path/Smarty/libs/Smarty.class.php";
require '../core/core.php';
require_once '../classes/Connection.php';
require_once '../core/smarty.init.php';


if (isset($_GET["action"])) {
  $action =htmlspecialchars( $_GET["action"]);
  if ($action == "viewprofile") {
    $sidp = htmlentities($_GET["action"]);
    $username = htmlentities($_GET["action"]);
    $token = htmlentities($_GET["action"]);
    $profile = getProfile($sidp,$username,$token,'student');
    
	      
    
    $smarty->assign('mainContent',$smarty->fetch('profileview.tpl'));
    $smarty->assign('title', '..::ECE_E-Learning:Profile View');
  } else if ($action == "updateprofile") {
    $smarty->assign('mainContent',$smarty->fetch('profileupdate.tpl'));
    $smarty->assign('title', '..::ECE_E-Learning:Profile Update');
  } else if ($action == "closeaccount") {
    $smarty->assign('mainContent',$smarty->fetch('deletaccount.tpl'));
    $smarty->assign('title', '..::ECE_E-Learning:Delet Account');
  } else if ($action == "inbox") {
    $smarty->assign('mainContent',$smarty->fetch('deletaccount.tpl'));
    $smarty->assign('title', '..::ECE_E-Learning:Delet Account');
  } else if ($action == "composemail") {
    $smarty->assign('mainContent',$smarty->fetch('deletaccount.tpl'));
    $smarty->assign('title', '..::ECE_E-Learning:Delet Account');
  } else if ($action == "assignment") {
    $smarty->assign('mainContent',$smarty->fetch('deletaccount.tpl'));
    $smarty->assign('title', '..::ECE_E-Learning:Delet Account');
  } else if ($action == "giveassignment") {
    $smarty->assign('mainContent',$smarty->fetch('deletaccount.tpl'));
    $smarty->assign('title', '..::ECE_E-Learning:Delet Account');
  } 
  
    
$smarty->assign('user','Okafor Jerry Hanks');
$smarty->assign('sid',$sid);
$smarty->display("pages.tpl");

  

}

