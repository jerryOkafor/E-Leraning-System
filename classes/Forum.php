<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'Connection.php';
require_once 'Authenticate.php';
$auth = new Authenticate();
class Forum
{

  private $SITEKEY;
  

  public function __construct()
    {
    $this->SITEKEY = 'don13';
    
    }

  private function randomString($length = 5)
    {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $string = "";

    for ($p = 0; $p < $length; $p++)
      {
      $string .= $characters[mt_rand(0, strlen($characters))];
      }

    return $string;
    }

  protected function hashData($data)
    {
    return hash_hmac('sha512', $data, $this->_siteKey);
    }
//code for forum.gohome
  public function goHome()
    {
    $reply="";
   
    $reply.= $this->getAllCategoryView();
	
	    return $reply;
    }
  
    
  function addTopic($topic_subject, $topic_date, $topic_cat, $topic_by)
    {
    $con = new Connection();
    $link = $con->getConnection();
    $query = "INSERT INTO `topics`(`topic_id`, `topic_subject`, `topic_date`, `topic_cat`, `topic_by`) VALUES (NULL,?,?,?,?)";
    $stmt = $link->prepare($query);
    $stmt->execute(array($topic_subject, $topic_date, $topic_cat, $topic_by));
    //$stmt->closeCursor;
    $stmt = null;
    return true;
    }

  function getAllTopicView()
    {
      global $auth;
    $reply = "
	    <p id='forumtitle'><h3 class='center'>Topics Under Various Categories Contained In Our Database:</h3></p>".
	     "<ul data-role='listview' data-split-icon='gear' data-split-theme='a' data-inset='true'>";
    $con = new Connection();
    $link = $con->getConnection();
    $query = "SELECT * FROM `topics` WHERE 1";
    $stmt = $link->prepare($query);
    $stmt->execute();
    $i = 0;
    while ($row = $stmt->fetch(PDO::FETCH_BOTH))
      {
      $i++;
       $reply.='<li data-role="list-divider"><strong>Topic Subject: '.$row["topic_subject"].'</strong><span class="ui-li-count">'.$i.'</span></li>
	<li><a href="#" class="view_comment_topic" topic_id=" '.$row["topic_id"].'" subject="'.$row["topic_subject"].'" >
	<img src="css/images/drupal.png"><span class="ui-li-count">'.html_entity_decode($row["topic_cat"]).'</span>
	<h2>Created By:'.$auth->getFullName( $row["topic_by"] ).'</h2>
	<p>Created On:'. gmstrftime("%a, %b %d, %Y, %X, ",strtotime($row["topic_date"])).'</p></a>
        <a href="#" class="view_comment_topic" topic_id=" '.$row["topic_id"].'" subject="'.$row["topic_subject"].'" data-rel="" data-position-to="window" data-transition="pop">Comment!</a>
	</li>';   
	    
      /*$reply.= "<tr>"
	      . "<td>$i</td>" . "<td><a href='#' topic_id='".html_entity_decode($row['topic_id'])."' id='vct_$i'class='view_comment_topic noud'>" .
	      html_entity_decode($row["topic_subject"]) . "</a></td>" . 
	      "<td><a href='#' id='' catid='' class='noud'>" .html_entity_decode($row["topic_cat"]). "</a></td>"
	      . "<td>Created On ".gmstrftime("%a, %b %d, %Y, %X, ",strtotime($row["topic_date"]))."</td>" 
	      . "<td><a href='#' id='' catid='' class='noud'>" .html_entity_decode($auth->getFullName( $row["topic_by"] )). "</a></td></tr>";
      */
       }
       
    $stmt = null;
    $reply.="</ul><script type='text/javascript'>$('#page').trigger('create');</script>";
    return $reply;
    }

//code for exact topic selection
  function selectTopic($topic_id, $type)
    {
    $con = new Connection();
    $link = $con->getConnection();
    $query = "SELECT * FROM `topics` WHERE `topic_id`='$topic_id'";
    $query1 = "SELECT * FROM `topics`";
    if ($type == 'all')
      {
      $stmt = $link->prepare($query1);
      }
    else
      {
      $stmt = $link->prepare($query);
      }
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_BOTH);
    $stmt->closeCursor;
    $stmt = null;
    return $result;
    }

  function addCategory($cat_by, $cat_name, $cat_description)
    {
    $con = new Connection();
    $link = $con->getConnection();
    $query = "INSERT INTO `categories`(`cat_id`,`cat_name`,`cat_description`,`cat_by`) VALUES (NULL,?,?,?)";
    $stmt = $link->prepare($query);
    $stmt->execute(array($cat_name, $cat_description, $cat_by));
    $stmt = null;
    return TRUE;
    }

  function deletCategory($cat_name, $cat_description)
    {
    
    }

  public function getAllCategory()
    {

    $reply = "";
    $con = new Connection();
    $link = $con->getConnection();
    $query = "SELECT * FROM `categories` WHERE 1";
    $stmt = $link->prepare($query);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_BOTH))
      {

      $reply.= "<option id='" .html_entity_decode( $row["cat_id"]) . "'>" .html_entity_decode( $row["cat_name"]) . "</option>";
      }
    $stmt = null;
    return $reply;
    }

  public function getAllCategoryView()
    {
    global $auth;
    $reply = "";
     $reply .=  '<div id="forumbox">'
	    . '<h3 class="forump ceneter" id="forump0">Our forum Include: </h3>'
	      . '<h3 p class="forump center" id="forump1">Over 300 categories of Discuss</h3>'
	      . '<h3 class="forump center" id="forump2">Over 30,000 Topics Covering all the categories</h3>'
	      . '<h3 class="forump center" id="forump3">Over 45,000 Comments on All the topics.</h3></div>';
    $con = new Connection();
    $link = $con->getConnection();
    $query = "SELECT * FROM `categories` WHERE 1";
    $stmt = $link->prepare($query);
    $stmt->execute();
    $i = 0;
    while ($row = $stmt->fetch(PDO::FETCH_BOTH))
      {

      $i++;
       $reply.='<ul data-role="listview" data-inset="true">
    <li data-role="list-divider"><span class="name">'.html_entity_decode($row["cat_name"]).'<span>: Created:'. gmstrftime("%a, %b %d, %Y, %X, ",strtotime($row["date_created"])).'<span class="ui-li-count">'.$i.'</span></li>
   
    <li><a href="#" class="view_topics_inCat" name="'.html_entity_decode($row["cat_name"]).'" catid="'.html_entity_decode($row["cat_id"]).'">
    <span class="ui-li-count">50 Topics &amp; <br /> 20 Comments</span>
    <h2>'. html_entity_decode($row["cat_description"]).'</h2>
    <p><strong>Created: '.$auth->getFullName($row["cat_by"]).'</strong></p></strong></p></a></li></ul>';
      
      }
    $stmt = null;
    $reply.="<script type='text/javascript'>$('#page').trigger('create');</script>";
   
    return $reply;
    }

    
    
  function getTopicSpecView($topic,$id)
    {
    $auth = new Authenticate();
    $reply = '<ul data-role="listview" data-inset="true">';
    $con = new Connection();
    $link = $con->getConnection();
    $query = "SELECT * FROM `posts` WHERE `post_topic`=$id";
    $stmt = $link->prepare($query);
    $stmt->execute();
    $i = 0;
    $reply.='<li data-role="list-divider"><strong>Topic Subject:'.$topic
	    . '</strong><span class="ui-li-count">Comments:'."300".'</span></li>';
    while ($row = $stmt->fetch(PDO::FETCH_BOTH))
      {
      $i++;
      $reply.='<li><span class="ui-li-count">'.$i.'</span><a href="#">
        <img src="css/images/bubble.png">	
	<span class="ui-li-count center">'.$i.'</span>
	  <strong>'.gmstrftime("%a, %b %d, %Y, %X, ",strtotime($row["post_date"])).'</strong>
    <p style="display:list-item;  overflow-wrap: break-word; ">'. $row["post_content"]. '</p>
    <p>By: '.$auth->getFullName( $row["post_by"] ).'</p></a>
    </li>';}
    $stmt = null;
    $reply.="</ul>";
    //include a coment form here
    $reply.='<form class="">' 	    
	    .'<p class="forumfeed"></p>'
	    . '<p><label for="comment">Comment:</label>' 
	    .'<textarea id="comment_details" class="smalltextarea" cols="50" rows="4" required></textarea></p>'	    
	    .'<p class="bolder fancy">Coment by:'.$auth->getFullName($_SESSION['user_id'])
	    .'</p><input id="postby" type="hidden" value="'.$_SESSION['user_id'].'">'
	    . '</p><input id="topic" type="hidden" value="'.$topic.'">'
	     . '</p><input id="topic_id" type="hidden" value="'.$id.'">'
	    .'</fieldset></form><p style="text-align:center">'
	    .'<button class="submit" id="commentButton">Post</button ></p>'
	    .' <script type="text/javascript">$("#page").trigger("create");</script>';

    return $reply;
    }

  

  function comment($comment, $by, $topic, $date)
    {
    $con = new Connection();
    $link = $con->getConnection();
    $query = "INSERT INTO `posts`(`post_id`, `post_content`, `post_date`, `post_topic`, `post_by`) VALUES "
	    . "(NULL,?,?,?,?)";
    $stmt = $link->prepare($query);
    if($stmt->execute(array($comment, $date, $topic,$by)))
      {
         return true;
      }else{
      
	  return false;
      }
      
      
    $stmt->closeCursor;
 
    
    }

  function getTopicInCat($cat,$id)
    {
    $auth = new Authenticate();
    $reply = "<h3 class='center'>Topics in: $cat</h3>";
    $con = new Connection();
    $link = $con->getConnection();
    $query = "SELECT * FROM `topics` WHERE `topic_cat`=?";
    $stmt = $link->prepare($query);
    $stmt->execute(array($cat));
    $i = 0;
    while ($row = $stmt->fetch(PDO::FETCH_BOTH))
      {
      $i++;
      $reply.='<ul data-role="listview" data-split-icon="gear" data-split-theme="a" data-inset="true">
	<li data-role="list-divider"><strong>Topic Subject: '.$row["topic_subject"].'</strong><span class="ui-li-count">'.$i.'</span></li>
	<li><a href="#" class="view_comment_topic" topic_id=" '.$row["topic_id"].'" subject="'.$row["topic_subject"].'" >
	    <img src="css/images/drupal.png">
	<h2>Created By:'.$auth->getFullName( $row["topic_by"] ).'</h2>
	<p>Created On:'. gmstrftime("%a, %b %d, %Y, %X, ",strtotime($row["topic_date"])).'</p></a>
        <a href="#" class="view_comment_topic" topic_id=" '.$row["topic_id"].'" subject="'.$row["topic_subject"].'" data-rel="" data-position-to="window" data-transition="pop">Comment!</a>
	</li></ul>';
           
      }
        $reply.=" </tbody></table><script type='text/javascript'>$('#page').trigger('create');</script>";
	
   

    return $reply;
    
    }
	  
  function selectcomment($reply_content, $reply_date, $reply_topic, $reply_by)
    {
    
    }

  function deletecomment($reply_content, $reply_date, $reply_topic, $reply_by)
    {
    
    }

}
