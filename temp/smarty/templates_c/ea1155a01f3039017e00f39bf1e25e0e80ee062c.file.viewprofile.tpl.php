<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-13 03:19:26
         compiled from "C:\wamp\www\usr\temp\smarty\templates\viewprofile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18436554aa5887662b4-47572373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea1155a01f3039017e00f39bf1e25e0e80ee062c' => 
    array (
      0 => 'C:\\wamp\\www\\usr\\temp\\smarty\\templates\\viewprofile.tpl',
      1 => 1434158364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18436554aa5887662b4-47572373',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554aa588798f49_76916244',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554aa588798f49_76916244')) {function content_554aa588798f49_76916244($_smarty_tpl) {?><ul data-role="listview" data-split-icon="gear" data-split-theme="a" data-inset="true">
    <li><a href="#">
        <img src="../_assets/img/album-bb.jpg">
    <h2>Broken Bells</h2>
    <p>Broken Bells</p></a>
        <a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
    </li>
    <li><a href="#">
        <img src="../_assets/img/album-hc.jpg">
    <h2>Warning</h2>
    <p>Hot Chip</p></a>
        <a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
    </li>
    <li><a href="#">
        <img src="../_assets/img/album-p.jpg">
    <h2>Wolfgang Amadeus Phoenix</h2>
    <p>Phoenix</p></a>
        <a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
    </li>
</ul>
<div data-role="popup" id="purchase" data-theme="a" data-overlay-theme="b" class="ui-content" style="max-width:340px; padding-bottom:2em;">
    <h3>Purchase Album?</h3>
<p>Your download will begin immediately on your mobile device when you purchase.</p>
    <a href="index.html" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-btn-b ui-icon-check ui-btn-icon-left ui-btn-inline ui-mini">Buy: $10.99</a>
    <a href="index.html" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-btn-inline ui-mini">Cancel</a>
</div><?php }} ?>
