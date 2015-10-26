<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Evaluation
 *
 * @author DABBY(3pleMinds)
 */
require_once 'Connection.php';
require_once 'Authenticate.php';
class Evaluation
{
  public $userid;
  public $qCount;
  public $qCategory;
  public $qStyle;
  public $qTime;
     
  //put your code here
  public function __construct()
    {
   
    
    }
   

    public function configureEValuation($user_id,$qCnt,$qCat,$qStl,$qTim)
      {
         
    $this->userid=$user_id;
    $this->qCount=$qCnt;
    $this->qCategory=$qCat;
    $this->qStyle=$qStl;
    $this->qTime = $qTim;
      //connnect to database and store all the values
      
    $con = new Connection();
    $link = $con->getConnection();
    $query = "INSERT INTO `evaluation`(`ID`, `user_id`, `qCount`, `qCategory`, `qStyle`, `qTime`) "
	    . "VALUES (NULL,?,?,?,?,?)";
    $stmt = $link->prepare($query);
    $stmt->execute(array($this->userid,$this->qCount,$this->qCategory,$this->qStyle,$this->qTime));
    }
    
    public function startEvaluation($user_id,$qCount,$qCat,$qStyle,$qTime)
      {
	    $sx = simplexml_load_file("../xml/allquestions.xml");
	    $i=1;
	    $rand = rand(01,100);
	    $qId = $qCat."q".$rand;
	    foreach ($sx->question as $question)
	      {
	      if($question->catID==$qCat||$question->qID==$qId)
	      {
		$catName = $question->catName;
		$catId = $question->catID;
		$qId = $question->qID;
		$qText = $question->qText;
		$optiona = $question->option1;
		$optionb = $question->option2;
		$optionc = $question->option3;    
		$correctAns = $question->correctAns;		 
		$reply = $this->populateReply($catName, $catId, $qId, $i, $qText, $optiona, $optionb, $optionc, $correctAns,$user_id,$qCount,$qCat,$qStyle,$qTime,0);
		$i++;
		return $reply;
	      }
	      }
      
      }
      
    public function continueEvaluation($user_id,$currentCount,$currentCatName,$currentId,$currentTime,
	    $option,$correctAns,$qCount,$qCat,$qStyle,$qTime,$totalScore)      
		{	    
	    $sx = simplexml_load_file("../xml/allquestions.xml");
	    $reply = $this->trackConfig($currentCount,$currentTime,$qCount,$qTime);
	    // $totalScore .= $this->markAnswer($option, $correctAns);
	    $totalScore += $this->markAnswer($option, $correctAns);
	    
	     if($reply==1)//time and or count exceeded
	       {
	       return $this->rewardUser($user_id,$totalScore,$qCount);//end Ealuation session
	       }
	     	     else //user still has some time left for question
		       {
		       //save User Score
	return  $this->getQuestion($currentCount,$currentCatName,$currentId,$user_id,$qCat,$qStyle,$qCount,$qTime,$totalScore,$sx);
	      
		       
	       }
	    
      }   
    //this codes populates questio and other details and send it back to the user  
    function populateReply($catName,$catId,$qId,$i,$qText,$optiona,$optionb,$optionc,$correctAns,$user_id,$qCount,$qCat,$qStyle,$qTime,$totalScore)
      {
      return $reply =  '<div id="evaluationDiv">'
	      .'<script type="text/javascript">$("#evaluationDiv").trigger("create");</script>'
			. '<input type="hidden" id="totalScore" value="'.$totalScore.'"/>'
			. '<input type="hidden" id="user_id" value="'.$user_id.'"/>'
			. '<input type="hidden" id="qCount" value="'.$qCount.'"/>'
			. '<input type="hidden" id="qCat" value="'.$qCat.'"/>'
			. '<input type="hidden" id="qStyle" value="'.$qStyle.'"/>'
			. '<input type="hidden" id="qTime" value="'.$qTime.'"/>'
			. '<p><label><input  type="hidden" id="currentCatName" value="'.$catName.'" required /> </p>'
			. '<p><label><input  type="hidden" id="currentCatId" value="'.$catId.'" required /> </p>'
			  .'<p class="forumfeed error"></p>'
			. '<p><label><input  type="hidden" id="currentqId" value="'.$qId.'" required /> </p>'
			. '<p><label><input  type="hidden" id="currentCount" value="'.$i.'" required /> </p>'
		        . '<p><h3 class="h-center">Category Name:'.$catName.'</h3></p>'
			. '<p class="center boldtext">('.$i.')</p>'
			. '<label for="textarea-2" class="boldertext">Question:</label>'
			.'<textarea cols="30" rows="3" class="tabmargin bold middle" name="textarea-2" id="mqs">'.$qText.'</textarea>'
			.  '<fieldset data-role="controlgroup" data-mini="true">'
				  .  '<legend class="boldertext">Option:</legend>'
				  .  '<input name="option" id="radio-choice-v-6a" value="1" type="radio">'
				  .  '<label for="radio-choice-v-6a">'.$optiona.'</label>'
				  .  '<input name="option" id="radio-choice-v-6b" value="2" type="radio">'
				  .  '<label for="radio-choice-v-6b">'.$optionb.'</label>'
				  .  '<input name="option" id="radio-choice-v-6c" value="3" type="radio">'
				  .  '<label for="radio-choice-v-6c">'.$optionc.'</label>
				</fieldset>'      
			. '<p><input  type="hidden" id="correctAns" value=" '.$correctAns.'"></p>'			
			. '<button type="button" id="evalSubmit" class="ui-shadow ui-btn ui-corner-all ui-mini">Submit</button>'
			.'</label></p></div>'; 
      
		}
	//this code rewards user ate the end of the evaluation
	    function rewardUser($user_id,$totalScore,$count)
			  {
			  $auth = new Authenticate();
			  return $reply =  '<div id="evaluationDiv">'
			. '<h3>User Reward!</h3>'
			. '<p id="headLabel">Name:'.$auth->getFullName($user_id).'</p>'
			. '<p id="qtag">Total Question:'.$count.'</p>'
			. '<p id="qtag">Total Score:'.$totalScore.'</p>'
			. '<p id="qtag">Percentage:'.(($totalScore/$count)*100).'%</p>'
			. '<p><label id="mqs">Total Time Expired or Count Exceede</label></p>'
			.'</div>'; 
      
		}
		
	  function trackConfig($currentCount,$currentTime,$qCount,$qTime)
		    {
		      if($currentTime == "false" || $currentCount >= $qCount )
			{
			return 1;
			}else{
			  return 2;
			}
		    }
		    
	  function markAnswer($option,$correctAns)
	    {
	    if($option==$correctAns)
	      {
	      return 1;
	      }
	    	    else
	      {
	      return 0;
	      }
	    }
	    
	  function getQuestion($currentCount,$currentCatName,$currentId,$user_id,$qCat,$qStyle,$qCount,$qTime,$totalScore,$sx)
	    {
	     $i=$currentCount+1;
	     $max =1;$min = 100; //$qCount; 
	     $reply ="";
	    
	    if($qStyle==1)//randomise
	      {
	       $randid = rand($min, $max);
	       $randCat = $this->randomString();
	       $qid = "q".$randid;	       
	      }
	    	    else// don't Randomise
	      {
	       $randid = rand($min, $max);
	       $randCat =$qCat;
	       $qid = "q".$randid;
	      }	   
	    foreach ($sx->question as $question)
	      {
	    if($question->catID=="$randCat" && $question->qID==$question->catID.$qid)
	      {	$catName = $question->catName;$catId = $question->catID;$qId = $question->qID;
		$qText = $question->qText;$optiona = $question->option1;$optionb = $question->option2;
		$optionc = $question->option3;$correctAns = $question->correctAns;		
		
		$reply= $this->populateReply($catName, $catId, $qId, $i, $qText, $optiona, $optionb, $optionc, $correctAns,$user_id,$qCount,$qCat,$qStyle,$qTime,$totalScore);
	      } 
	      
	      } 
	      return $reply;
	    }
	    
	    
	    
	private function randomString()
	    {
	   $category =array("ae","be","de","mcu");
	   $string = $category[mt_rand(0,3)];
	      

	    return $string;
	    }
	public function goHome()
	  {
	  
	  return '
		<h3>User Evaluation Page!</h3>
		<p class="forumfeed error"></p>
	    <form id="evalForm" action="../e-learning.com/pages" method="POST" data-url="../e-learning.com/pages" data-ajax="false">
	      <label for="number-pattern">Number Of Questions:</label>
	      <input  name="number" pattern="[0-100]*" id="qCount" value="" min="0" max="120"  type="number" data-inline="true">
	      <label for="select-choice-mini" class="select">Question Category</label>
	      <select name="select-choice-mini" id="qCategory" data-mini="true" data-inline="true">
	      <option value="be">Basic Electronic</option>
	      <option value="ae">Analog Electronics</option>
	      <option value="de">Digital Electronics</option>
	      <option value="mcu">Micro Processor Systems</option>    
	      <option value="comsys">Communication Systems</option>
	      </select>
	      <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
	      <legend>Question Style:</legend>
		  <input name="qStyle" id="radio-choice-c" value="1" checked="checked" type="radio">
		  <label for="radio-choice-c">Random</label>
		  <input name="qStyle" id="radio-choice-d" value="0" type="radio">
		  <label for="radio-choice-d">Not Rnadom</label>
		</fieldset>
	      <label for="slider-fill">Evaluation Time:</label>
	      <input name="slider-fill" id="qTime" value="10" min="0" max="120" step="2" data-highlight="true" type="range">
	     <br/>
	      <button type="button" id="evaluationButton" name="button" class="ui-shadow ui-btn ui-corner-all ui-mini">Configure Evaluation</button>

	    </form>';
	  }

}

