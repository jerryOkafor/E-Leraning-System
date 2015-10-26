<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-04 12:30:33
         compiled from "C:\wamp\www\usr\temp\smarty\templates\videoResources.tpl" */ ?>
<?php /*%%SmartyHeaderCode:649155c07f8e416235-97680719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d15c6d7c61cd3310a7be9b7b507ff5d448b7743' => 
    array (
      0 => 'C:\\wamp\\www\\usr\\temp\\smarty\\templates\\videoResources.tpl',
      1 => 1438683178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '649155c07f8e416235-97680719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c07f8e454a47_98670960',
  'variables' => 
  array (
    'videos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c07f8e454a47_98670960')) {function content_55c07f8e454a47_98670960($_smarty_tpl) {?><div  data-theme="b" id="demo-page" class="my-page" data-url="demo-page">
    <div data-role="header">
        <h1>Resource Listview</h1>
        <a href="../" data-shadow="false" data-iconshadow="false" data-icon="carat-l" data-iconpos="notext" data-rel="back" data-ajax="false">Back</a>
    </div><!-- /header -->
    <div role="main" class="ui-content">
        <ul data-role="listview" data-inset="true">
           <?php echo $_smarty_tpl->tpl_vars['videos']->value;?>

        </ul>
    </div><!-- /content -->
</div><?php }} ?>
