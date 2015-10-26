<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-13 01:28:45
         compiled from "C:\wamp\www\e-learning.com\temp\smarty\templates\logedout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172345503e8f0750dd6-54399845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f7351f97f018dc51d00a68cd4985294385d7e50' => 
    array (
      0 => 'C:\\wamp\\www\\e-learning.com\\temp\\smarty\\templates\\logedout.tpl',
      1 => 1428881322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172345503e8f0750dd6-54399845',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5503e8f07cabd2_76322730',
  'variables' => 
  array (
    'slider' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5503e8f07cabd2_76322730')) {function content_5503e8f07cabd2_76322730($_smarty_tpl) {?>		<!--Slider for home page--->
		<h2 id="title">Welcome to e-Digitron!</h2>
		<div class="boldtext">e-learning system is designed to enhance learning in the department of electronic engineering.
		  </div>
	<?php echo $_smarty_tpl->tpl_vars['slider']->value;?>

	
	<div class="jqm-block-content" style="display: inline-block; width:94.5%;">
	  <div class="jqm-block-content ui-responsive ui-mini ui-mobile" data-mini="true" style="width:200px; float: left; right: 10px; left:20px;"id="filterbox">
   
	  <h3>Login!</h3>
	      <form acton="index.php" method="POST" data-ajax="false" data-url="../index.php">
		<label for="textinput-2">Username:</label>
		<input name="username" id="textinput-2" placeholder="Username" data-mini="true" class="ui-mini ui-mobile-rendering" type="text" required="true">
		<label for="password">Password:</label>
		<input name="password" id="password"  placeholder="Password"  autocomplete="off" data-mini="true" type="password" required="true">

		<br/>
		<input type="submit" name="submit" id="submit-6" class="ui-shadow ui-btn ui-corner-all ui-mini" value="Submit"/>
	       </form>
	  </div>
	  <div class="jqm-block-content ui-responsive ui-mini ui-mobile" data-mini="true" style="width:200px; float: left; right: 10px;"id="filterbox">
   
	  <h3>Register!</h3>
	      <form acton="index.php" method="GET" data-ajax="false" data-url="../index.php">
		<label for="textinput-2">Email:</label>
		<input name="username" id="textinput-2" placeholder="email" data-mini="true" class="ui-mini ui-mobile-rendering" type="text" required="true">
		<label for="textinput-2">Username:</label>
		<input name="username" id="textinput-2" placeholder="username" data-mini="true" class="ui-mini ui-mobile-rendering" type="text" required="true">
		
		<br/>
		<input type="submit" name="submit" id="submit-6" class="ui-shadow ui-btn ui-corner-all ui-mini" value="Register"/>
	       </form>
	  </div>
	  <div class="jqm-block-content ui-responsive ui-mini ui-mobile" data-mini="true" style="width:200px; float: left; right: 10px;"id="filterbox">
   
	  <h3>Guest User!</h3>
	      <form acton="index.php" method="GET" data-ajax="false" data-url="../index.php">
		<label for="textinput-2">Email:</label>
		<input name="g_email" id="textinput-2" placeholder="Username" data-mini="true" class="ui-mini ui-mobile-rendering" type="text" required="true">
		<label for="password">Phone:</label>
		<input name="g_phone" id="password"  placeholder="+234xxxxxxxxxx"  autocomplete="off" data-mini="true" type="text" required="true">

		<br/>
		<input type="submit" name="submit" id="submit-6" class="ui-shadow ui-btn ui-corner-all ui-mini" value="Access"/>
	       </form>
	  </div>
	</div><?php }} ?>
