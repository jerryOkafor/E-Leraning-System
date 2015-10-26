<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-06 19:27:45
         compiled from "C:\wamp\www\usr\temp\smarty\templates\editprofile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28173557b8a058fba67-16060928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34e32ed3a781da19afa76464f01a004a9046232f' => 
    array (
      0 => 'C:\\wamp\\www\\usr\\temp\\smarty\\templates\\editprofile.tpl',
      1 => 1438881950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28173557b8a058fba67-16060928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557b8a059c6c95_12704550',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b8a059c6c95_12704550')) {function content_557b8a059c6c95_12704550($_smarty_tpl) {?><div class="jqm-block-content" >
  <form action="../usr/pages/ajaxForms.php" method="POST"  entype="multipart/form-data" data-ajax="false" data-url="../usr/pages/ajaxForms.php">
    <fildset><legend><h3>Login Information:</h3></legend>
     <label for="username">Username:</label>
  <input name="usname_up"  placeholder="hanskjerry_dedon" value="" data-mini="true" type="text">  
    </fildset>
   
    <fildset><legend><h3>Contact Information:</h3></legend>
     <label for="email">Email:</label>
  <input name="email_up" id="" placeholder="hanskjerry_dedon@yahoo.com" value="" data-mini="true" type="text">
  <label for="c_email">Phone:</label>
  <input name="phone_up" placeholder="+2348030520715" value="" data-mini="true" type="text">
  <label for="textarea">Address:</label>
  <textarea cols="40" rows="8" name="address_up" id="textarea"></textarea>
  </fildset>
    <button class="ui-shadow ui-btn ui-corner-all" type="submit" id="">Update</button>
    </form>
	  
	</div><?php }} ?>
