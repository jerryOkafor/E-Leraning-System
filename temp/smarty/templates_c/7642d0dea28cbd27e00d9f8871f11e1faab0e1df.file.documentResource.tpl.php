<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-04 12:13:57
         compiled from "C:\wamp\www\usr\temp\smarty\templates\documentResource.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2177255c0754073f3a7-43653267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7642d0dea28cbd27e00d9f8871f11e1faab0e1df' => 
    array (
      0 => 'C:\\wamp\\www\\usr\\temp\\smarty\\templates\\documentResource.tpl',
      1 => 1438682440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2177255c0754073f3a7-43653267',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c075407a8b38_61552080',
  'variables' => 
  array (
    'documents' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c075407a8b38_61552080')) {function content_55c075407a8b38_61552080($_smarty_tpl) {?><div  data-theme="b" id="demo-page" class="my-page" data-url="demo-page">
    <div data-role="header">
        <h1>Resource Listview</h1>
        <a href="../" data-shadow="false" data-iconshadow="false" data-icon="carat-l" data-iconpos="notext" data-rel="back" data-ajax="false">Back</a>
    </div><!-- /header -->
    <div role="main" class="ui-content">
        <ul data-role="listview" data-inset="true">
	  <?php echo $_smarty_tpl->tpl_vars['documents']->value;?>

        </ul>
    </div><!-- /content -->
</div><?php }} ?>
