<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of XML
 *
 * @author DABBY(3pleMinds)
 */

/*$doc = new DomDocument("1.0");
$root = $doc->createElement("HTML");
$root = $doc->appendChild($root);
$body = $doc->createElement("BODY");
$body = $root->appendChild($body);
$body->setAttribute("bgcolor", "#87CEEB");
$graff = $doc->createElement("P");
$graff = $body->appendChild($graff);
$text = $doc->createTextNode("This is some text.");
$text = $graff->appendChild($text);
$doc->save("test_dom.xml");

$dom = new DOMDocument('1.0');
// create the root element, <book>, and append it to the document
$book = $dom->appendChild($dom->createElement('book'));
// create the title element and append it to $book
$title = $book->appendChild($dom->createElement('title'));
// set the text and the cover attribute for $title
$title->appendChild($dom->createTextNode('PHP Cookbook'));
$title->setAttribute('cover', 'soft');
// create and append author elements to $book
$sklar = $book->appendChild($dom->createElement('author'));
// create and append the text for each element
$sklar->appendChild($dom->createTextNode('Sklar'));
$trachtenberg = $book->appendChild($dom->createElement('author'));
$trachtenberg->appendChild($dom->createTextNode('Trachtenberg'));
// print a nicely formatted version of the DOM document as XML
$dom->formatOutput = true;
echo $dom->save("dom.xml");
echo $dom->saveXML(); */

$sx = simplexml_load_file("../xml/allquestions.xml");
$i=1;
//$question = $sx->question;
foreach ($sx->question as $question)
  {
if($question->catID=="ae"||$question->qID=="aeq2")


  {
    $catName = $question->catName;
    $catId = $question->catID;
    $qId = $question->qID;
    $qText = $question->qText;
    $optiona = $question->option1;
    $optionb = $question->option2;
    $optionc = $question->option3;    
    $correctAns = $question->correctAns;
    
    echo '<p>'.$i.') Category Name: '.$catName.'</p>'
	    . '<p>&nbsp;Category Id: '.$catId.'</p>'
	    . '<p>&nbsp;&nbsp;Question Id:'.$qId.'</p>'
	    . '<p>&nbsp;&nbsp;&nbsp;Question:'.$qText.'</p>'
	    . '<p>&nbsp;&nbsp;&nbsp;&nbsp;Option 1: '.$optiona.'</p>'
	    . '<p>&nbsp;&nbsp;&nbsp;&nbsp;Option 2; '.$optionb.'</p>'
	    . '<p>&nbsp;&nbsp;&nbsp;&nbsp;Option 3: '.$optionc.'</p>'
	    . '<p>&nbsp;&nbsp;&nbsp;&nbsp;Correct Answer: '.$correctAns.'</p>';
    $i++;
  }
  }
 