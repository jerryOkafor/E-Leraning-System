<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author DABBY(3pleMinds)
 */
require_once 'Connection.php';

class Admin
{
  //put your code here
 public function __construct()
   {
   
   }
   
  public function showAllUser()
  {
    $i=0;$reply="";
  $sql = "SELECT * FROM `profile_data` ORDER BY `ID` ASC";
  $con = new Connection();
  $link = $con->getConnection();
  $stmt = $link->prepare($sql);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_BOTH))
      {    $i++;
      $reply.=' <li id="'.$row["ID"].' class="ui-responsive">
	     <a href="href=".../pages/?action=viewProfile&userid='.$row["ID"].'&viewer=admin">
	         <img class="profilepic" src="../css/images/logo1.png" alt="ECE-E-learning">
		 <div>
		    <h3 class="user">'.$row["l_name"]." ".$row["m_name"]." ".$row["f_name"].'</h3>
                    <p class="topic"><strong>Reg No:'.$row["regno"].'. Gender: '.$row["gender"].'. Marital Status: '.$row["m_status"].'.</strong></p>
                    <p><strong>'.$row["email"].'. Phone:'.$row["phone"].'</strong></p>		    
                    <p><strong>'.$row["address"].'.</strong></p>
		    </div>
                    <div class="ui-li-aside ui-responsive"><p><strong>Joind:'.gmstrftime("%a, %b %d, %Y. Time:%I:%M:%S.%p",strtotime($row["signup_date"])).'</strong></p>
		     <p>Last login:<strong>4:48</strong></p>
		     <p >Status:<strong class="status">'.$this->getUserStatus($row["user_id"]).'</strong></p>
		     
		     </div>
                </a>
		
                <a href="#" class="delete">Disable</a>
            </li>';
	      
	      
      }
    
    //$stmt ->closeCursor();
    return $reply;
  
}

private function getUserStatus($id)
  {
  
  $sql = "SELECT `user_status` FROM `users` WHERE `ID` =?";
  $con = new Connection();
  $link = $con->getConnection();
  $stmt = $link->prepare($sql);
  $stmt->execute(array($id));
  $result = $stmt->fetch(PDO::FETCH_BOTH);
  if($result["user_status"]==1)
    {
    return "Active";
    }else
      {
  return "Disabled";
  }
  }




}
