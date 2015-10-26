<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ResourceManager
 *
 * @author DABBY(3pleMinds)
 */
require_once 'Connection.php';
//require_once 'Authenticate.php';

class ResourceManager
{
  //put your code here
  
  private $rID;
  
  public function getAllDocumentResources()
    {
    //global $auth;
    $reply = "";
     $con = new Connection();
    $link = $con->getConnection();
    $query = "SELECT * FROM `resources` WHERE `format`= 'pdf' OR `format`= 'xls' OR `format`= 'ppt' OR `format`= 'docx' OR `format`= 'xlsx'";
    $stmt = $link->prepare($query);
    $stmt->execute();
    $i = 0;
    while ($row = $stmt->fetch(PDO::FETCH_BOTH))
      {

      $i++;
      
      
      $reply.='<li><a href="../usr/uploads/resources/'.$row["name"].'" data-ajax="false">
                <img src="_assets/img/apple.png" class="ui-li-thumb">
                <h2> Click To Download</h2>
                <p>'.$row['rNameUsr'].'</p>
                <p class="ui-li-aside">'.$this->getFileType($row['format']).'</p>
            </a></li>';
      
      }
    $stmt = null;
    $reply.="<script type='text/javascript'>$('#page').trigger('create');</script>";
    
    return $reply;
    }
  public function getAllImageResources()
    {
     //global $auth;
    $reply = "";
     $con = new Connection();
    $link = $con->getConnection();
    $query = "SELECT * FROM `resources` WHERE `format`= 'gif' OR `format`= 'png' OR `format`= 'jpeg' OR `format`= 'jpg'";
    $stmt = $link->prepare($query);
    $stmt->execute();
    $i = 0;
    while ($row = $stmt->fetch(PDO::FETCH_BOTH))
      {

      $i++;
      
      
      $reply.='<li><a href="../usr/uploads/resources/'.$row["name"].'" data-ajax="false">
                <img src="../usr/uploads/resources/'.$row["name"].'" class="ui-li-thumb">
		<h2> Click To Download</h2>
                <p>'.$row['rNameUsr'].'</p>
                <p class="ui-li-aside">'.$this->getFileType($row['format']).'</p>
            </a></li>';
      
      }
    $stmt = null;
    $reply.="<script type='text/javascript'>$('#page').trigger('create');</script>";
    
    return $reply;
    
    }
  public function getAllVideoResources()
    {
       //global $auth;
    $reply = "";
     $con = new Connection();
    $link = $con->getConnection();
    $query = "SELECT * FROM `resources` WHERE `format`= 'mp4' OR `format`= '3gp' OR `format`= 'xvid' OR `format`='flv'";
    $stmt = $link->prepare($query);
    $stmt->execute();
    $i = 0;
    while ($row = $stmt->fetch(PDO::FETCH_BOTH))
      {

      $i++;
      
      
      $reply.='<li><a href="../usr/uploads/resources/'.$row["name"].'" data-ajax="false">
                <img src="_assets/img/apple.png" class="ui-li-thumb">
                <h2> Click To Download</h2>
                <p>'.$row['rNameUsr'].'</p>
                <p class="ui-li-aside">'.$this->getFileType($row['format']).'</p>
            </a></li>';
      
      }
    $stmt = null;
    $reply.="<script type='text/javascript'>$('#page').trigger('create');</script>";
    
    return $reply; 
    
    }
    
    
    private function getFileType($type)
      {
      $rtype="";
      switch ($type)
	{
	case "pdf":
	  {
	  $rtype = "PDF";
	  
	  break;
	  }
	  case "docx":
	  {
	  $rtype = "DOCX";
	  
	  break;
	  }
	  case "png":
	  {
	  $rtype = "PNG";
	  
	  break;
	  }
	  case "ppt":
	  {
	  $rtype = "PPT";
	  
	  break;
	  }
	  case "jpeg":
	  {
	  $rtype = "JPEG";
	  
	  break;
	  }
	  case "jpg":
	  {
	  $rtype = "JPG";
	  
	  break;
	  }
	  case "gif":
	  {
	  $rtype = "GIF";
	  
	  break;
	  }
	  case "xls":
	  {
	  $rtype = "XLS";
	  
	  break;
	  }
	   case "flv":
	  {
	  $rtype = "FLV";
	  
	  break;
	  }
	   case "mp4":
	  {
	  $rtype = "MP4";
	  
	  break;
	  }
	default :
	   $rtype = "N/A";  
	  break;
	  
	}
	return $rtype;
      
      }
      
      
}

