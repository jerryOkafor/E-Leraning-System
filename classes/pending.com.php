<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../classes/Forum.php';

$forum = new Forum();
session_start();

if(isset($_POST["cat"]))
{
  $cat_target = htmlentities(htmlspecialchars($_POST["cat"]));
  $cat_by = $_SESSION['username'];
  $cat_name = htmlentities(htmlspecialchars($_POST["cat_name"]));
  $cat_desc= htmlentities(htmlspecialchars($_POST["cat_desc"]));
  $reply = $formu->addCategory($cat_by,$cat_name, $cat_desc);
  if($reply==true)
  {
    echo 'Category added succesfully';
  }else  {
    
  }
}
if(isset($_POST["catall"]))
{
  
  $reply=true; //= $formu->getAllCategory();
  if($reply==true)
  {
    echo 'Category added succesfully';
  }else  {
    print '<option>Nothing Selected</option>';
  }
}



if(isset($_POST["newcategory"]))
      {
      echo '<div id="newcategorydiv"><form class="signupform" id="signupform" method="post" action="" enctype="multipart/form-data">'.
		'<p class="forumfeed"></p>'.
		'<fieldset><legend><span class="title">category Details</span></legend><p><label>Name:</label>'.
		'<input id="cat" class="smallinputs" name="firstname" type="text" required /></p><p><label>Category Name:</label>'.
		'<input id="cat_name" class="smallinputs" name="middlename" type="text" required /></p><p><label>Category Description:</label>'.
		'<textarea id="cat_desc" class="smalltextarea" cols="50" rows="4" required></textarea></p>'.
		'</fieldset></form><p style="text-align:center"><button class="submit" id="newcategorybt" name="cratnewtopic">Create Category:</button ></p></div>';
	
      }
      
 if(isset($_POST["newtopic"]))
      {
      global $forum;
	echo' <div id="newtopicdiv"><form class="signupform" id="newtopicform" method="post" action="" enctype="multipart/form-data">'.
		'<p class="forumfeed"></p><fieldset><legend><span class="title">Topic deatils</span></legend>'.
		'<p><label>Topic Subject</label><input id="topic_subject" class="smallinputs" name="firstname" type="text" required /></p>'.
		'<p><label>Topic Category</label><select id="topic_cat_select" class="smallinput" name="firstname" value="'.$_SESSION["username"].'" required>'.$forum->getAllCategory().'</select></p>'.
		'<p><label> Topic By</label><input id="topic_by" class="smallinputs" name="middlename" userid="'.$_SESSION["user_id"].'" type="text" value="'.$_SESSION["username"].'" required /></p>'.
		'</fieldset></form><p style="text-align:center"><button  class="submit" id="newtopicbt" name="cratnewtopic">Create Topic</button ></p></div>';
	
      }

      
      
      
if(isset($_POST["getallforum"]))
{
 
  //$reply = $formu->addCategory();
  echo 'Forum for will display most recent forms';
  
}

if(isset($_POST["c_view"]))
{
  echo $forum->getAllCategoryView();
  
}

if(isset($_POST["topicspecview"]))
{
  $topic = htmlentities(htmlspecialchars($_POST["topic"]));
  echo $forum->getTopicSpecView($topic);
  
}

if(isset($_POST["t_view"]))
{
 
  echo $forum->getAllTopicView();
  
}

if(isset($_POST["t_sub"]))
{
  $t_sub = htmlentities(htmlspecialchars($_POST["t_sub"]));
  $t_cat = htmlentities(htmlspecialchars($_POST["t_cat"]));
  $t_by = $_SESSION['user_id'];
  echo $t_sub.$t_cat.$t_by;
  $reply = $forum->addTopic($t_sub,date("Y-m-d H:i:m",time()), $t_cat, $t_by);
 if($reply==true)
  {
    echo 'Topic added succesfully';
  }else  {
    echo 'Unable to add the topic.';
    
  }

  
  
}

