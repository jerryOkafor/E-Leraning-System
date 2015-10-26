<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../core/Core.php';
require_once '../classes/Connection.php';
require_once '../classes/Authenticate.php';
$core = new Core();
session_start();
$MAX_SIZE = 16457280;

  
  $resourceName = htmlentities(htmlspecialchars(isset($_POST["rname"])? $_POST["rname"]:"" ));
  
  $rdesc = htmlentities(htmlspecialchars(isset($_POST["rdesc"])? $_POST["rdesc"]:"" ));
  
  
  $rname=isset($_FILES["resource"]["name"])? $_FILES["resource"]["name"]:"";
    
  $rerror=isset($_FILES["resource"]["error"])? $_FILES["resource"]["error"]:"";
  
  $rsize=isset($_FILES["resource"]["size"])? $_FILES["resource"]["size"]:"";
  
  $rtype=isset($_FILES["resource"]["type"])? $_FILES["resource"]["type"]:"";
  
  $rtmp_name=isset($_FILES["resource"]["tmp_name"])? $_FILES["resource"]["tmp_name"]:"";
  
  $extension= strtolower(substr($rname,strpos($rname,'.')+1));
  
  $rtype_usr = htmlentities(htmlspecialchars(isset($_POST["media_type"])?$_POST["media_type"]:"" )); 
  
  $rprio = htmlentities(htmlspecialchars(isset($_POST["rprio"])? $_POST["rprio"]:"" )); 
  
  if($rsize >= $MAX_SIZE)
	  {
	  header('location:../htm/upload_rep_big_file.html');
	
	  }
	else if ($core->matchResource($extension,$rtype))
	{
	  if ($rerror > 0)
	    {
	echo "Return Code: " . $_FILES["resource"]["error"] . "<br />";
	}else
	  {
	//rename the file/image using random nmber
	$location= '../uploads/resources/';	  
	
	move_uploaded_file($rtmp_name,$location.$rname);
	
	set_time_limit(500000);
	
	$rand = randomString(10);
  
      if(renameResources($location,$rname,$extension,$rand))
	{
	$new_name = $rand.".".$extension;
	}
	  }
	}else
	{
	echo "<p class='error' id='errormsg1'>Invalid file</p>";
	}
	addToDatabase($new_name,$rsize,$rtype,$resourceName,$rtype_usr,$rdesc,$extension,$rprio);
	header('location:../htm/upload_rep.html');
	 //echo $resourceName. " ". $new_name;
  
function addToDatabase($rname,$rsize,$rtype,$rname_usr,$rtype_usr,$rdesc,$extension,$rprio)
    {  
  $auth = new Authenticate();
   $con = new Connection();
    $link = $con->getConnection();    
    $query = "INSERT INTO `resources`(`ID`, `name`,`rNameUsr`,`rsize`, `rtype`, `format`, `doc_by`,`user_r_type`,`rDescription`,`rprio`, `when`, `approved`) VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?)";
    //$query = "INSERT INTO `categories`(`cat_id`,`cat_name`,`cat_description`,`cat_by`) VALUES (NULL,?,?,?)";
    $stmt = $link->prepare($query);
    $stmt->execute(array($rname,$rname_usr,$rsize,$rtype,$extension,$auth->getFullName($_SESSION['user_id']),$rtype_usr,$rdesc,$rprio,date("Y-m-d H:i:m",time()),0));
    $stmt = null;
    return TRUE;
    }
    
  function renameResources($location,$name,$extension,$rand)
    
    {
    if (rename($location.$name,$location.$rand.".".$extension))
      {
    return true;
      }else
      {      
      return false;
          
    }
    }
    
  function randomString($length)
	  {
	$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	$string ="";    
		
	for ($p = 0; $p < $length; $p++) {
		$string .= $characters[mt_rand(0, 61)];
	}
		
      	return $string;
	  }
    
    
	 

  