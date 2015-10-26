<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-12 07:41:39
         compiled from "C:\wamp\www\usr\temp\smarty\templates\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30565539f9f48731f0-89192505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '876c9f2177088620b2725b2a2f8be130498d58e3' => 
    array (
      0 => 'C:\\wamp\\www\\usr\\temp\\smarty\\templates\\contact.tpl',
      1 => 1439358092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30565539f9f48731f0-89192505',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5539f9f48b1a01_21939909',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5539f9f48b1a01_21939909')) {function content_5539f9f48b1a01_21939909($_smarty_tpl) {?><div class="jqm-block-content" >
  <form action="../usr/pages/ajaxForms.php" method="POST"  data-ajax="false" data-url="../usr/pages/ajaxForms.php">
    <fieldset><legend><h3>Edit Your Message below:</h3></legend>
  <label for="textinput-1">Sender:</label>
  <input type="hidden" name="contact_mail" value="mail">
  <input data-clear-btn="true" required="true" name="sname" id="" placeholder="Okafor Jerryhanks Chinonso" value="" data-mini="true" type="text">
  <label for="textinput-2">Email:</label>
  <input data-clear-btn="true" required="true" name="semail" id="" placeholder="hanksjerry_dedon@yahoo.com" value="" data-mini="true" type="text">
  <label for="textinput-2">Subject:</label>
  <input data-clear-btn="true" required="true" name="ssubject" id="" placeholder="Complaint" value="" data-mini="true" type="text">
  
  <label for="textarea">Message:</label>
  <textarea cols="40" rows="8" name="smsg"  required="true"  placeholder="Enter your message here" id="textarea"></textarea>
     </fieldset>
    
    
    
    <br/>
    <button class="ui-shadow ui-btn ui-corner-all" type="submit" id="">Send Mail</button>
    </form>
	  
	</div><?php }} ?>
