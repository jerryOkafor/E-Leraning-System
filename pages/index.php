<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../classes/Authenticate.php';
require_once '../core/Core.php';
require_once '../classes/Evaluation.php';
session_start();
$auth = new Authenticate();
$core = new Core();
$evaluation = new Evaluation();
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
	 // $passport = htmlentities(htmlspecialchars($_FILES["passport"]));
	  $name=$_FILES["passport"]["name"];
	  $size=$_FILES["passport"]["size"];
	  $type=$_FILES["passport"]["type"];
	  $student = htmlentities(htmlspecialchars($_POST["student"]));
	  $family = htmlentities(htmlspecialchars($_POST["family"]));
	  $tofs = htmlentities(htmlspecialchars($_POST["tofs"]));
	  $extension= strtolower(substr($name,strpos($name,'.')+1));
	  
	 
	 if($core->verifyImageExtension($extension,$type)) 
	   {
	    //Check if there is error in the image
	   if ($_FILES["passport"]["error"] > 0)
			{
				
			echo "Return Code: " . $_FILES["passpor"]["error"] . "<br />";
			
			}else//goahead and upload.
			{
			  $location= 'uploads/profilePics/';
			  move_uploaded_file($tmp_name,$location.$name);
			  $rand= $core->randomString();
			      if(rename($location.$name,$location.$rand.'.'.$extension))
				{
				echo 'The image<strong>'.$name.'</strong> has been renamed to <strong>'.$rand.'.'.$extension.'</strong><br/>';
				$new_name = $location.$rand.'.'.$extension;
							}
			
			}
	   }else
	     {
	     echo 'File is not an image!';
	     }
	   
	 // $auth->creatprofile($fname, $lname, $mname, $regno, $entryYear, $dateOfBirth, $gender, $email, $phone, $address, $username, $password,$family, $passport);
	  
	  //header('Location:e-learning.com/?view=register&feedback=Thank you for registering');
  }
  //header('location:../?view=registerView&feedback='.urlnecode('Thank you for registering! Do you want to <a href="/">Login</a>'));
 // header('Location:../?view=register&feedback=Thank you for registering\nDo you wantn to <a href="/">Login</a>');
  
  //this code is used for evaluation
    if(isset($_POST["config"]))
	  {
	  $user_id = $_SESSION['user_id'];
	  $qCount = htmlentities(htmlspecialchars($_POST["qCount"]));
	  $qCat = htmlentities(htmlspecialchars($_POST["qCategory"]));	  
	  $qStyle = htmlentities(htmlspecialchars($_POST["qStyle"]));
	  $qTime = htmlentities(htmlspecialchars($_POST["qTime"]));

      $evaluation = new Evaluation();
      //check if user has configured evaluation before if true, reset values, else configure new values
      //$evaluation->configureEValuation($user_id, $qCount, $qCat, $qStyle, $qTime);
      echo $evaluation->startEvaluation($user_id,$qCount,$qCat,$qStyle,$qTime);

	    }

      if(isset($_POST["continueEval"]))
	  {
	  $evaluation = new Evaluation();
	  $user_id = $_SESSION['user_id'];
	  $currentCount= htmlentities(htmlspecialchars($_POST["currentCount"]));
	  $currentCatName = htmlentities(htmlspecialchars($_POST["currentCatName"]));
	  $currentId = htmlentities(htmlspecialchars($_POST["currentqId"]));
	  $currentTime = htmlentities(htmlspecialchars($_POST["currentTime"]));
	  $option = htmlentities(htmlspecialchars($_POST["option"]));	  
	  $correctAns = htmlentities(htmlspecialchars($_POST["correctAns"]));
	  //initial
	  $qCount=htmlentities(htmlspecialchars($_POST["qCount"]));
	  $qCat=htmlentities(htmlspecialchars($_POST["qCat"]));
	  $qStyle=htmlentities(htmlspecialchars($_POST["qStyle"]));
	  $qTime=htmlentities(htmlspecialchars($_POST["qTime"]));
	  $totalScore = htmlentities(htmlspecialchars($_POST["totalScore"]));
	  echo $evaluation->continueEvaluation($user_id,$currentCount,$currentCatName,$currentId,$currentTime,$option,$correctAns,$qCount,$qCat,$qStyle,$qTime,$totalScore);
	      }
		

	if(isset($_POST["evalHome"]))
	  {
	   $evaluation = new Evaluation();
	   echo $evaluation->goHome();
	  }