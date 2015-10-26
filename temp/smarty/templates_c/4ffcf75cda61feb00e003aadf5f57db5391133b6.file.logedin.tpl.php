<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-06 11:04:24
         compiled from "C:\wamp\www\usr\temp\smarty\templates\logedin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28358553177e6cd18a0-89740195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ffcf75cda61feb00e003aadf5f57db5391133b6' => 
    array (
      0 => 'C:\\wamp\\www\\usr\\temp\\smarty\\templates\\logedin.tpl',
      1 => 1438851571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28358553177e6cd18a0-89740195',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553177e6d277b1_79643809',
  'variables' => 
  array (
    'user' => 0,
    'slider' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553177e6d277b1_79643809')) {function content_553177e6d277b1_79643809($_smarty_tpl) {?>		<!--Slider for home page--->
		<h2 id="title">Welcome to e-Digitron:<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</h2>
      
	
	  <?php echo $_smarty_tpl->tpl_vars['slider']->value;?>

	
	<div class="ui-grid-a ui-responsive jqm-block-content">
        	<div class="ui-block-a">
        		<div class="jqm-block-content">
			  <h3>News &AMP; Events</h3>

        			<p><a href="#" data-ajax="false">Forums And Interactions</a></p>
        			<p><a href="#" data-ajax="false">Resources and Downloads</a></p>
        			<p><a href="#" data-ajax="false">Profile Management</a></p>
        			<p><a href="#" data-ajax="false">Users Assessmnet</a></p>
        		</div>
        	</div>
        	<div class="ui-block-b">
        		<div class="jqm-block-content">
        			<h3>Current Issues</h3>

        			<p><a href="#" data-ajax="false">Current Research Issues</a></p>
        			<p><a href="#" data-ajax="false">Professional Associations</a></p>
        			<p><a href="#" data-ajax="false">Engineering</a></p>
        			<p><a href="#" data-ajax="false">Mechatronics</a></p>
        			<p><a href="#" data-ajax="false">Software Engineering</a></p>
        		</div>
        	</div>        	
        	
        </div><?php }} ?>
