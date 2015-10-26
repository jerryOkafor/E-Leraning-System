<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-04 12:13:54
         compiled from "C:\wamp\www\usr\temp\smarty\templates\imageResources.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1239455c07f8ad48d98-72599158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cd4c306d8f38d9528af2dca22f0dd797156c052' => 
    array (
      0 => 'C:\\wamp\\www\\usr\\temp\\smarty\\templates\\imageResources.tpl',
      1 => 1438683152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1239455c07f8ad48d98-72599158',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c07f8ad93126_11251780',
  'variables' => 
  array (
    'images' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c07f8ad93126_11251780')) {function content_55c07f8ad93126_11251780($_smarty_tpl) {?><div  data-theme="b" id="demo-page" class="my-page" data-url="demo-page">
    <div data-role="header">
        <h1>Resource Listview</h1>
        <a href="../" data-shadow="false" data-iconshadow="false" data-icon="carat-l" data-iconpos="notext" data-rel="back" data-ajax="false">Back</a>
    </div><!-- /header -->
    <div role="main" class="ui-content">
        <ul data-role="listview" data-inset="true">
            <?php echo $_smarty_tpl->tpl_vars['images']->value;?>

        </ul>
    </div><!-- /content -->
</div><?php }} ?>
