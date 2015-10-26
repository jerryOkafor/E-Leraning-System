<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-13 01:25:01
         compiled from "C:\wamp\www\e-learning.com\temp\smarty\templates\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210775503f37684a419-33252842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '841b010917ffeece83a72069de15df5d52346f0d' => 
    array (
      0 => 'C:\\wamp\\www\\e-learning.com\\temp\\smarty\\templates\\register.tpl',
      1 => 1427138921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210775503f37684a419-33252842',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5503f3768f23c2_14869797',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5503f3768f23c2_14869797')) {function content_5503f3768f23c2_14869797($_smarty_tpl) {?><div class="jqm-block-content" >
  <form action="../e-learning.com/pages/ajaxForms.php" method="POST"  data-ajax="false" data-url="../e-learning.com/pages/ajaxForms.php">
    <fieldset><legend><h3>Personal Information:</h3></legend>
  <label for="textinput-1">First Name:</label>
  <input data-clear-btn="true" name="fname" id="" placeholder="First Name" value="" data-mini="true" type="text">
  <label for="textinput-2">Middle Name:</label>
  <input data-clear-btn="true" name="mname" id="" placeholder="Middle Name" value="" data-mini="true" type="text">
  <label for="Last Name">Last Name:</label>
  <input data-clear-btn="true" name="lname" id="" placeholder="Last Name" value="" data-mini="true" type="text">
  
  <label for="regno">Registration Number:</label>
  <input data-clear-btn="true" name="regno" pattern="[0-9/0-9]" id="" placeholder="Text input" value="" data-mini="true" type="text">
  
   <label for="regno">Year Of Entry:</label>
    <input data-role="date" type="date" data-clear-bt="true">
    
    <label for="regno">Date of Birth:</label>
    <input data-role="date" type="text">
     </fieldset>
<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><h3>Gender:</h3></legend>
    <input name="radio-choice-h-6" id="radio-choice-h-6a" value="on" checked="checked" type="radio">
    <label for="radio-choice-h-6a">Male</label>
    <input name="radio-choice-h-6" id="radio-choice-h-6b" value="off" type="radio">
    <label for="radio-choice-h-6b">Female</label>
</fieldset>
   
    <fildset><legend><h3>Contact Information:</h3></legend>
     <label for="email">Email:</label>
  <input name="email" id="" placeholder="hanskjerry_dedon@yahoo.com" value="" data-mini="true" type="text">
  <label for="c_email">Confir Email:</label>
  <input name="c_email" id="" placeholder="hanskjerry_dedon@yahoo.com" value="" data-mini="true" type="text">
  <label for="c_email">Phone:</label>
  <input name="c_email" id="" placeholder="+2348030520715" value="" data-mini="true" type="text">
  <label for="textarea">Address:</label>
  <textarea cols="40" rows="8" name="address" id="textarea"></textarea>
  <label for="file">Choose a Passport:</label>
  <input name="passport" id="passport" value="" type="file">
    </fildset>
    
    <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><h3>Are You a Student:</h3></legend>
        <input name="student" id="radio-choice-c" value="list" checked="checked" type="radio">
        <label for="radio-choice-c">Yes</label>
        <input name="student" id="radio-choice-d" value="grid" type="radio">
        <label for="radio-choice-d">No</label>
	</fieldset>

	    <fieldset data-role="controlgroup" class="ui-responsive ui-mobile ui-mini" data-type="horizontal" data-mini="true">
	    <legend><h3>Family:</h3></legend>
		<input name="family" id="radio-choice-c" value="list" checked="checked" type="radio">
		<label for="radio-choice-c">Single</label>
		<input name="family" id="radio-choice-d" value="grid" type="radio">
		<label for="radio-choice-d">Married</label>
		<input name="family" id="radio-choice-e" value="gallery" type="radio">
		<label for="radio-choice-e">Other</label>
	</fieldset>
	<fieldset data-role="controlgroup">
    <legend><h3>Check the Box Below To contine:</h3></legend>
    <label for="checkbox-2">I agree with the terms of services</label>
    <input name="tofs" id="checkbox-2" type="checkbox">
    </fieldset>
    <br/>
    <button class="ui-shadow ui-btn ui-corner-all" type="submit" id="">Submit</button>
    </form>
	  
	</div><?php }} ?>
