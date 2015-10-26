<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../classes/Authenticate.php';
require_once '../core/Core.php';
$auth = new Authenticate();
$core = new Core();
session_start();


$MAX_SIZE = 16457280;

if (isset($_POST["contact_mail"]))
  {
	  //getVariables
	  $name = htmlentities(htmlspecialchars($_POST["sname"]));
	  $email = htmlentities(htmlspecialchars($_POST["semail"]));
	  $subject = htmlentities(htmlspecialchars($_POST["ssubject"]));
	  $text = htmlentities(htmlspecialchars($_POST["smsg"]));
	  
	  if(!empty($name)&&!empty($email)&&!empty($subject)&&!empty($text))
	    {
	    //send mail
	    mail("hanksjerry_dedon@yahoo.com", $subject, $text."\n\n".$email);
	    echo 'Mail sent succesfully';
	    }
	  else
	    {
	    echo 'You must fill all fields';
	    }
  }

if (isset($_POST["fname"]))
  {
	  //getVariables
	  $fname = htmlentities(htmlspecialchars($_POST["fname"]));
	  $mname = htmlentities(htmlspecialchars($_POST["mname"]));
	  $lname = htmlentities(htmlspecialchars($_POST["lname"]));
	  $regno = htmlentities(htmlspecialchars($_POST["regno"]));
	  $entryYear = htmlentities(htmlspecialchars($_POST["entryyear"]));
	  $dateOfBirth = htmlentities(htmlspecialchars($_POST["dateOfBirth"]));
	  $gender = htmlentities(htmlspecialchars($_POST["gender"]));
	  $email = htmlentities(htmlspecialchars($_POST["email"]));
	  $confirmPassword = htmlentities(htmlspecialchars($_POST["confirm_password"]));
	  $phone = htmlentities(htmlspecialchars($_POST["phone"]));
	  $address = htmlentities(htmlspecialchars($_POST["address"]));
	  $username = htmlentities(htmlspecialchars($_POST["username"]));
	  $password = htmlentities(htmlspecialchars($_POST["password"]));
	  $confirmpassword = htmlentities(htmlspecialchars($_POST["confirm_password"]));
	  $student = htmlentities(htmlspecialchars($_POST["student"]));
	  $family = htmlentities(htmlspecialchars($_POST["family"]));
	  $tofs = htmlentities(htmlspecialchars($_POST["tofs"]));
	  
  $rname=isset($_FILES["pass"]["name"])? $_FILES["pass"]["name"]:"";
    
  $rerror=isset($_FILES["pass"]["error"])? $_FILES["pass"]["error"]:"";
  
  $rsize=isset($_FILES["pass"]["size"])? $_FILES["pass"]["size"]:"";
  
  $rtype=isset($_FILES["pass"]["type"])? $_FILES["pass"]["type"]:"";
  
  $rtmp_name=isset($_FILES["pass"]["tmp_name"])? $_FILES["pass"]["tmp_name"]:"";
  
  $extension= strtolower(substr($rname,strpos($rname,'.')+1));
  
  //echo $rname;
  
  //validate image
    if($rsize >= $MAX_SIZE)
	  {
	  header('location:../');
	
	  }
	else if ($core->matchResource($extension,$rtype))
	{
	  if ($rerror > 0)
	    {
	echo "Return Code: " . $_FILES["pass"]["error"] . "<br />";
	}else
	  {
	//rename the file/image using random nmber
	$location= '../uploads/profilePics/';	  
	
	move_uploaded_file($rtmp_name,$location.$rname);
		
	$rand = $core->randomString(10);
  
      if(renameResources($location,$rname,$extension,$rand))
	{
	$new_name = $rand.".".$extension;
	}
	  }
	}else
	{
	echo "<p class='error' id='errormsg1'>Invalid file type</p>";
	}
	  
	
	 $reply = $auth->creatprofile($fname, $lname, $mname, $regno, $entryYear, $dateOfBirth, $gender, $email, $phone, $address, $username, $password,$family,$new_name);
	 if($reply)
	   {
	   header('Location:../?view=register&feedback=Thank you for registering');
	   
	   }else if($reply=="Username and/or email taken!")
	     {
	      header('Location:../?view=register&feedback=Username and/or email taken!');
	     }else
	       {
	       
		header('Location:../?view=register&feedback=Could not create a new user. An Error Occured!');
	       }
	 
	  
  } 
  
  
  if (isset($_POST["usname_up"]))
  {
	  //getVariables
	  $id = $_SESSION["user_id"];
	  $email = htmlentities(htmlspecialchars($_POST["email_up"]));
	  $phone = htmlentities(htmlspecialchars($_POST["phone_up"]));
	  $address = htmlentities(htmlspecialchars($_POST["address_up"]));
	  $username = htmlentities(htmlspecialchars($_POST["usname_up"]));
	 
 	
	 $reply = $auth->updateProfile($id,$username,$email,$phone,$address);
	 
	 if($reply)
	   {
	   header('Location:../?view=register&feedback=Profile Details Updated Succesfully!');
	   }
	 	 else{
	       
		header('Location:../?view=register&feedback=Could not Update Your Profile. An Error Occured!');
	       }
	 
	  
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
    
	