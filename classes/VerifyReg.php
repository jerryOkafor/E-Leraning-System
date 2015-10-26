<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VerifyReg
 *
 * @author DABBY(3pleMinds)
 */
require_once 'Connection.php';
class VerifyReg
{
  //put your code here
  private $email;
  private $verCode;
  private $id;
  
  public function __construct($email,$verCode)
    {
    $this->email = $email;
    $this->verCode = $verCode;
    
    }
    
  public function matchParam()
    {
    $query = "SELECT `ID`,`ver_code` FROM `users` WHERE `email` = ? ";
    $con = new Connection();
    $link = $con->getConnection();
    $stmt = $link->prepare($query);
    $stmt->execute(array($this->email));
    $result = $stmt->fetch(PDO::FETCH_BOTH);
    //echo  $result['ver_code']." ".$this->verCode;
    //die();
    if($result['ver_code'] === $this->verCode)
      {
      $this->id = $result['ID'];
      return true;
      }
        else
      {
      return false;	
	}
    
    }
  public function verify()
      {
     $query = "UPDATE `users` SET `verified`= 1 WHERE `ID` = '$this->id'";
     $con = new Connection();
    $link = $con->getConnection();
    $stmt = $link->prepare($query);
    
    if($stmt->execute())
      {
      return true;
      }
        else
      {
      return false;	
	}
      }
}
