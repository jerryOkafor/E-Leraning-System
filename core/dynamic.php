<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../classes/VerifyReg.php';

if(isset($_GET["verification"]))
  {
  //grab some data
  $email = htmlentities(htmlspecialchars($_GET["email"]));
  $verCode =  htmlentities(htmlspecialchars($_GET["verCode"]));
  //echo $email.$verCode;
  $ver = new VerifyReg($email, $verCode);
  if($ver->matchParam())
    {
    //go ahead and verify
      if($ver->verify())
	{	
	header("location:../?dbk=verification succesfull!");
	}else
	  {
	  header("location:../htm/error.html?fdbk=verification Failed!");
	  } 
    }
    else
    {
    //take user to error page
    header("location:../htm/error.html?fdbk=Parameter mismatch!");
      }
  }
