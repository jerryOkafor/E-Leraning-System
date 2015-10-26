<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../classes/Forum.php';
require_once '../classes/Evaluation.php';

require_once '../classes/Course.php';
$forum = new Forum();
$course = new Course();
session_start();

if (isset($_POST["cat"]))
  {
  $cat_target = htmlentities(htmlspecialchars($_POST["cat"]));
  $cat_by = $_SESSION['username'];
  $cat_name = htmlentities(htmlspecialchars($_POST["cat_name"]));
  $cat_desc = htmlentities(htmlspecialchars($_POST["cat_desc"]));
  $reply = $forum->addCategory($cat_by, $cat_name, $cat_desc);
  if ($reply == true)
    {
    echo 'Category added succesfully';
    }
  else
    {
    
    }
  }
if (isset($_POST["catall"]))
  {

  $reply = true; //= $formu->getAllCategory();
  if ($reply == true)
    {
    echo 'Category added succesfully';
    }
  else
    {
    print '<option>Nothing Selected</option>';
    }
  }



if (isset($_POST["newcategory"]))
  {
  echo '<div id="newcategorydiv"><form>' .
  '<p class="forumfeed"></p>' .
  '<fieldset><legend><span class="boldertext">Category Details</span></legend>'.
  '<input id="cat" data-clear-btn="true" data-mini="true" class="" value="'. isset($_SESSION["user_id"])? $_SESSION["user_id"]: "" .'" type="hidden" required /></p>'
  . '<p><label>Category Name:</label>' .
  '<input id="cat_name" data-clear-btn="true" data-mini="true" class="" name="middlename" type="text" required /></p>'
  . '<p><label>Category Description:</label>' .
  '<textarea id="cat_desc" class="smalltextarea" cols="30" rows="4" required></textarea></p>' .
  '</fieldset></form></div></p>';
  }

if (isset($_POST["newtopic"]))
  {
  global $forum;
  echo' <div id="newtopicdiv"><form>' .
  '<p class="forumfeed"></p>'
  . '<fieldset><legend><span class="boldertext">Topic deatils</span></legend>' .
  '<p><label>Topic Subject</label>'
  . '<input id="topic_subject" class="" type="text" required /></p>' .
  '<p><label>Topic Category</label>'
  . '<select id="topic_cat_select" class="" required>' . $forum->getAllCategory() . '</select></p>' .
  '<p><label> Topic By</label>'
  . '<input id="topic_by" class=""  userid="' . $_SESSION["user_id"] . '" type="text" value="' . $_SESSION["username"] . '" required /></p>' .
  '</fieldset></form></div>';
  }




if (isset($_POST["getallforum"]))
  {

  //$reply = $formu->addCategory();
  echo $forum->goHome();
  }
  
  
////category view codes
if (isset($_POST["c_view"]))
  {
  echo $forum->getAllCategoryView();
  }

  //topic spec view codes
if (isset($_POST["topicspecview"]))
  {
  $topic = htmlentities(htmlspecialchars($_POST["topic_subject"]));
  $id = htmlentities(htmlspecialchars($_POST["topic_id"]));
  echo $forum->getTopicSpecView($topic,$id);
  }

  //topic in category
  if (isset($_POST["topicincat"]))
  {
  $cat = htmlentities(htmlspecialchars($_POST["category"]));
  $id = htmlentities(htmlspecialchars($_POST["catid"]));
  echo $forum->getTopicInCat($cat,$id);
  }

  
  //topic view codes
if (isset($_POST["t_view"]))
  {

  echo $forum->getAllTopicView();
  }

if (isset($_POST["t_sub"]))
	    {
	    $t_sub = htmlentities(htmlspecialchars($_POST["t_sub"]));
	    $t_cat = htmlentities(htmlspecialchars($_POST["t_cat"]));
	    $t_by = $_SESSION['user_id'];
	    echo $t_sub . $t_cat . $t_by;
	    $reply = $forum->addTopic($t_sub, date("Y-m-d H:i:m", time()), $t_cat, $t_by);
	    if ($reply == true)
	      {
	      echo 'Topic added succesfully';
	      }
	    else
	      {
	      echo 'Unable to add the topic.';
	      }
	    }
	    
//comment/post codes
	    if (isset($_POST["comment_details"]))
	    {
	    $comment = htmlentities(htmlspecialchars($_POST["comment_details"]));
	    $by = htmlentities(htmlspecialchars($_POST["comment_by"]));
	    $topic = htmlentities(htmlspecialchars($_POST["topic"]));
	    $topicid = htmlentities(htmlspecialchars($_POST["topicid"]));
	    $reply = $forum->comment($comment, $by, $topicid,date("Y-m-d H:i:m", time()));
	    if ($reply == true)
	      {
	      echo '<p class="center fancy error">Comment Posted succesfully</p>'. $forum->getTopicSpecView($topic,$topicid);
	      }
	    else
	      {
	      echo '<p class="center fancy error">Unable to post topic, an Error occured.</p>'. $forum->getTopicSpecView($topic,$topicid);
	      }
	    }

  if(isset($_POST["config"]))
	  {
	  $user_id = $_SESSION['user_id'];
	  $qCount = htmlentities(htmlspecialchars($_POST["qCount"]));
	  $qC = htmlentities(htmlspecialchars($_POST["qCategory"]));
	  $qCat = fixCategory($qC);
	  $qS = htmlentities(htmlspecialchars($_POST["qStyle"]));
	  $qTime = htmlentities(htmlspecialchars($_POST["qTime"]));
	 
	  if($qS=="Random")//switches between random.
	    {
	    $qStyle = 1;
	    }else
	    {
		$qStyle = 0;
	    }
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

	if(isset($_POST["getCourse"]))
	  {
	  
	  $tag= htmlentities(htmlspecialchars($_POST["tag"]));
	  echo $course->displayCourse($tag);
	  }
	  
	
	  
	       
	
	  
	                