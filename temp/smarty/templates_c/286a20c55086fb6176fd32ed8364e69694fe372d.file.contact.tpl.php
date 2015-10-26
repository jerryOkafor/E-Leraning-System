<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-16 10:48:53
         compiled from "C:\wamp\www\e-learning.com\temp\smarty\templates\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117555506a6e5774eb0-98477072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '286a20c55086fb6176fd32ed8364e69694fe372d' => 
    array (
      0 => 'C:\\wamp\\www\\e-learning.com\\temp\\smarty\\templates\\contact.tpl',
      1 => 1426499330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117555506a6e5774eb0-98477072',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5506a6e5805756_92563058',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5506a6e5805756_92563058')) {function content_5506a6e5805756_92563058($_smarty_tpl) {?><div class="jqm-block-content" >
  <form action="../e-learning.com/pages/ajaxForms.php" method="POST"  data-ajax="false" data-url="../e-learning.com/pages/ajaxForms.php">
    <fieldset><legend><h3>Edit Your Message below:</h3></legend>
  <label for="textinput-1">Sender:</label>
  <input data-clear-btn="true" name="fname" id="" placeholder="First Name" value="" data-mini="true" type="text">
  <label for="textinput-2">Email:</label>
  <input data-clear-btn="true" name="fname" id="" placeholder="First Name" value="" data-mini="true" type="text">
  
  <label for="textarea">Message:</label>
  <textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
     </fieldset>
    
    
    
    <br/>
    <button class="ui-shadow ui-btn ui-corner-all" type="submit" id="">Submit</button>
    </form>
	  
	</div><?php }} ?>
