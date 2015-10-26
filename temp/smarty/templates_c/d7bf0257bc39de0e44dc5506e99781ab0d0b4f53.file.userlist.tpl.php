<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-09 17:43:56
         compiled from "C:\wamp\www\usr\temp\smarty\templates\userlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205345531a19a7ab5c2-40013639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7bf0257bc39de0e44dc5506e99781ab0d0b4f53' => 
    array (
      0 => 'C:\\wamp\\www\\usr\\temp\\smarty\\templates\\userlist.tpl',
      1 => 1430317483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205345531a19a7ab5c2-40013639',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5531a19a918fc7_91310307',
  'variables' => 
  array (
    'users' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5531a19a918fc7_91310307')) {function content_5531a19a918fc7_91310307($_smarty_tpl) {?>
	<?php echo '<script'; ?>
>
	
		$( document ).ready(function() {
				// Click delete split-button to remove list item
				$( ".delete" ).on( "click", function() {
					var listitem = $( this ).parent( "li" );

					confirmAndDisable( listitem );
				});
			

			function confirmAndDisable( listitem) {
				// Highlight the list item that will be removed
				//listitem.children( ".ui-btn" ).addClass( "ui-btn-active" );
				// Inject name of user in confirmation popup after removing any previous injected topics
				$( "#confirm .topic" ).remove();
				var status = listitem.find( "a p .status" ).html();
				if(status==="Active")
				{
				  $( "#question" ).html("Are you Sure that you Want to Disable");
				}else
				{
				  $( "#question" ).html("Are you Sure that you Want to Enable");
				}
				$( "#question1" ).html(listitem.find( ".user" ).html());
				// Show the confirmation popup
				
				$( "#confirm" ).popup( "open" );
				// Proceed when the user confirms
				$( "#confirm #yes" ).on( "click", function() {
					// Remove with a transition
					
				listitem.removeClass( "ui-btn-active" );
					$( "#confirm #yes" ).off();
					
				});
				
				// Remove active state and unbind when the cancel button is clicked
				$( "#confirm #cancel" ).on( "click", function() {
					$( "#confirm #yes" ).off();
					
				listitem.removeClass( "ui-btn-active" );
				});
			}
		});
    <?php echo '</script'; ?>
>
	<style>
		/* Left transition */
		li.left {
			-webkit-transition: -webkit-transform 250ms ease;
			-webkit-transform: translateX(-100%);
			-moz-transition: -moz-transform 250ms ease;
			-moz-transform: translateX(-100%);
			-o-transition: -o-transform 250ms ease;
			-o-transform: translateX(-100%);
			transition: transform 250ms ease;
			transform: translateX(-100%);
		}
		/* Right transition */
		li.right {
			-webkit-transition: -webkit-transform 250ms ease;
			-webkit-transform: translateX(100%);
			-moz-transition: -moz-transform 250ms ease;
			-moz-transform: translateX(100%);
			-o-transition: -o-transform 250ms ease;
			-o-transform: translateX(100%);
			transition: transform 250ms ease;
			transform: translateX(100%);
		}
		/* Border bottom for the previous button during the transition*/
		li.left a.ui-btn,
		li.right a.ui-btn {
			border-top-width: 0;
			border-left-width: 1px;
			border-right-width: 1px;
		}
		li a.ui-btn.border-bottom {
			border-bottom-width: 1px;
		}
		/* Hide the delete button on touch devices */
		ul.touch li.ui-li-has-alt a.delete {
			display: inline-block;
		}
		ul.touch li.ui-li-has-alt a.ui-btn {
			margin-right:0;
		}
		/* Styling for the popup */
		#confirm p {
			text-align: center;
			font-size: inherit;
			margin-bottom: .75em;
		}
		.profilepic{
		  padding: 10px;
		}
    </style>

    <div data-role="header" data-position="" data-theme="b">
        <h1>Users</h1>
        <a href="#demo-intro" data-rel="back" data-icon="carat-l" data-iconpos="notext">Back</a>
        <a href="#" onclick="window.location.reload();" data-icon="back" data-iconpos="notext">Refresh</a>
    </div><!-- /header -->

    <div role="main" class="ui-content">

        <ul id="list" class="touch" data-role="listview" data-icon="false" data-split-icon="delete">
           <?php echo $_smarty_tpl->tpl_vars['users']->value;?>

	</ul>

    </div><!-- /content -->

    <div id="confirm" class="ui-content" data-role="popup" data-theme="a">

        <p id="question"></p>
	<div id="question1"></div>

        <div class="ui-grid-a">
            <div class="ui-block-a">
                <a id="yes" class="ui-btn ui-corner-all ui-mini ui-btn-a" data-rel="back">Yes</a>
            </div>
            <div class="ui-block-b">
                <a id="cancel" class="ui-btn ui-corner-all ui-mini ui-btn-a" data-rel="back">Cancel</a>
            </div>
        </div>

	</div><!-- /popup -->




<?php }} ?>
