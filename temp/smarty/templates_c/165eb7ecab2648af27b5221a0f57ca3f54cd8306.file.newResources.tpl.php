<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-04 09:45:33
         compiled from "C:\wamp\www\usr\temp\smarty\templates\newResources.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183845544d2c743cfe2-92447683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '165eb7ecab2648af27b5221a0f57ca3f54cd8306' => 
    array (
      0 => 'C:\\wamp\\www\\usr\\temp\\smarty\\templates\\newResources.tpl',
      1 => 1438674165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183845544d2c743cfe2-92447683',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5544d2c7477975_97793983',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544d2c7477975_97793983')) {function content_5544d2c7477975_97793983($_smarty_tpl) {?><form method="post" enctype="multipart/form-data" action='../usr/pages/ResourceProcessor.php' data-ajax="false">
    <ul data-role="listview" data-inset="true">
        <li class="ui-field-contain">
            <label for="name2">Resource Name:</label>
            <input name="rname" id="name2" value="" data-clear-btn="true" type="text" required="true">
        </li>
	  <li class="ui-field-contain">
            <label for="name2">Choose File:</label>
            <input name="resource" data-clear-btn="true" type="file" data-ajax="false" required="true">
        </li>
        <li class="ui-field-contain">
            <label for="textarea2">Brief Description:</label>
	    <textarea  name="rdesc" cols="40" rows="8" name="rdesc" id="textarea2" required="true"></textarea>
        </li>
	<li class="ui-field-contain">
            <label for="select-choice-1" class="select">Resource:</label>
            <select name="media_type" id="select-choice-1" required="true">	      
                <option value="null">Select</option>
                <option value="doc">Readable Document</option>
                <option value="image">Images</option>
                <option value="video">Video</option>
            </select>
        </li>
        <!--li class="ui-field-contain">
	  
            <label for="flip2">Flip switch:</label>
            <select name="flip2" id="flip2" data-role="slider">
                <option value="off">Off</option>
                <option value="on">On</option>
            </select>
        </li-->
        <li class="ui-field-contain">
            <label for="slider2">Priority:</label>
            <input name="rprio" id="slider2" value="0" min="0" max="100" data-highlight="true" type="range" required="true">
        </li>
        
        <li class="ui-body ui-body-b">
            <fieldset class="ui-grid-a">
                    <div class="ui-block-a"><button type="reset" class="ui-btn ui-corner-all ui-btn-a">Cancel</button></div>
                    <div class="ui-block-b"><button type="submit" class="ui-btn ui-corner-all ui-btn-a">Uplaod</button></div>
            </fieldset>
        </li>
    </ul>
</form><?php }} ?>
