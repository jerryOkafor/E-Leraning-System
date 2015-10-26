<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'Connection.php';

class Course{
  
  private $courseTable;
  public function __construct()
    {
      $this->courseTable = "course_content";
      
    }
  
  public function displayAllCourse()
    {
    $reply="";
    $query = "SELECT * FROM `course_contents` WHERE 1";
     $con = new Connection();
      $link = $con->getConnection();
      $stmt = $link->prepare($query);
      $stmt->execute();
      
       $i = 0;
    while ($row = $stmt->fetch(PDO::FETCH_BOTH))
      {

      $i++;
      $reply.= '<br/><div id="'.$row["course_code"].'"><a href="#demo-mail">
		    <p class="topic"><strong>Course Title: '.$row["course_code"].'</strong></p>		    
                    <p class="topic"><strong>CoureName: '.$row["course_name"].'</strong></p>		    
                    <p class="topic"><strong>Unit Load: '.$row["course_unit"].'</strong></p>		    
                    <p class="topic"><strong>course Content:</strong></p>
                    <p>'.$row["course_content"].'.</p>
                    <p class="ui-li-aside"><strong>Level:'.$row["course_level"].'</strong></p>			    
                    <p class="topic"><strong>Hours:'.$row["course_hours"].'</strong></p>
		  
                </a>
		      </div>';
      }
    $stmt = null;

    return $reply;
    }
    
    public function displayCourse($tag)
    {
    $reply="";
    $query = "SELECT * FROM `course_contents` WHERE `course_code` = '$tag'";
     $con = new Connection();
      $link = $con->getConnection();
      $stmt = $link->prepare($query);
      $stmt->execute();
     $row = $stmt->fetch(PDO::FETCH_BOTH);
       $reply.= '<a href="#demo-mail">
                    <p class="topic"><strong>Course Title: '.$row["course_code"].'</strong></p>		    
                    <p class="topic"><strong>CoureName: '.$row["course_name"].'</strong></p>		    
                    <p class="topic"><strong>Unit Load: '.$row["course_unit"].'</strong></p>		    
                    <p class="topic"><strong>course Content:</strong></p>
                    <p>'.$row["course_content"].'</p>
                    <p class="ui-li-aside"><strong>Level:'.$row["course_level"].'</strong></p>
		    
                    <p class="topic"><strong>ENG 102</strong></p>		    
                    <p class="topic"><strong>Hours:'.$row["course_hour"].'</strong></p>
                </a>';


    return $reply;
    }
      
  }

