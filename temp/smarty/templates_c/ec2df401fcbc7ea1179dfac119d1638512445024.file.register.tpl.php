<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-12 08:34:08
         compiled from "C:\wamp\www\usr\temp\smarty\templates\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26563553284d8da7c51-43877020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec2df401fcbc7ea1179dfac119d1638512445024' => 
    array (
      0 => 'C:\\wamp\\www\\usr\\temp\\smarty\\templates\\register.tpl',
      1 => 1439361243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26563553284d8da7c51-43877020',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553284d8e15275_67531744',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553284d8e15275_67531744')) {function content_553284d8e15275_67531744($_smarty_tpl) {?><div class="jqm-block-content" >
  <form action="../usr/pages/ajaxForms.php" method="post"  enctype="multipart/form-data"  data-ajax="false" data-url="../usr/pages/ajaxForms.php">
    <fieldset><legend><h3>Personal Information:</h3></legend>
  <label for="textinput-1">First Name:</label>
  <input data-clear-btn="true" name="fname" id="" placeholder="First Name" value="" data-mini="true" type="text">
  <label for="textinput-2">Middle Name:</label>
  <input data-clear-btn="true" name="mname" id="" placeholder="Middle Name" value="" data-mini="true" type="text">
  <label for="Last Name">Last Name:</label>
  <input data-clear-btn="true" name="lname" id="" placeholder="Last Name" value="" data-mini="true" type="text">
  
  <label for="regno">Registration Number:</label>
  <input data-clear-btn="true" name="regno" id="" placeholder="Text input" value="" data-mini="true" type="text">
  
   <label for="regno">Year Of Entry:</label>
   <input data-role="date" type="date" data-clear-bt="true" name="entryyear" >
    
    <label for="regno">Date of Birth:</label>
    <input data-role="date" type="text" name="dateOfBirth">
     </fieldset>
<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><h3>Gender:</h3></legend>
    <input name="gender" id="radio-choice-h-6a" value="on" checked="checked" type="radio">
    <label for="radio-choice-h-6a">Male</label>
    <input name="gender" id="radio-choice-h-6b" value="off" type="radio">
    <label for="radio-choice-h-6b">Female</label>
</fieldset>
    
    <fildset><legend><h3>Login Information:</h3></legend>
     <label for="username">Username:</label>
  <input name="username" id="" placeholder="hanskjerry_dedon" value="" data-mini="true" type="text">
  <label for="c_password">Password:</label>
  <input name="password"  value="mmmmmmmm" data-mini="true" type="password">
  <label for="confirm_password">Confirm Password:</label>
  <input name="confirm_password" value="mmmmmmmm" data-mini="true" type="password">
  
  <label for="confirm_password">Choose Passport:</label>
  <input name="pass" data-mini="true" type="file" accept=".png,.gif,.jpg">
  
    </fildset>
   
    <fildset><legend><h3>Contact Information:</h3></legend>
     <label for="email">Email:</label>
  <input name="email" id="" placeholder="hanskjerry_dedon@yahoo.com" value="" data-mini="true" type="text">
  <label for="c_email">Confir Email:</label>
  <input name="c_email" id="" placeholder="hanskjerry_dedon@yahoo.com"  data-mini="true" type="text">
  <label for="c_email">Phone:</label>
  <input name="phone" placeholder="+2348030520715" value="" data-mini="true" type="text">
  <label for="textarea">Address:</label>
  <textarea cols="40" rows="8" name="address" id="textarea"></textarea>
  </fildset>
    
    <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend><h3>Are You a Student:</h3></legend>
        <input name="student" id="radio-choice-c" value="yes" checked="checked" type="radio">
        <label for="radio-choice-c">Yes</label>
        <input name="student" id="radio-choice-d" value="no" type="radio">
        <label for="radio-choice-d">No</label>
	</fieldset>

	    <fieldset data-role="controlgroup" class="ui-responsive ui-mobile ui-mini" data-type="horizontal" data-mini="true">
	    <legend><h3>Family Information:</h3></legend>
		<input name="family" id="radio-choice-c" value="single" checked="checked" type="radio">
		<label for="radio-choice-c">Single</label>
		<input name="family" id="radio-choice-d" value="married" type="radio">
		<label for="radio-choice-d">Married</label>
		<input name="family" id="radio-choice-e" value="others" type="radio">
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
