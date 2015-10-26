<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{$title}</title>
	<link rel="shortcut icon" href="css/images/e_learning.ico">
	<link rel="stylesheet"  href="css/style.css">	
	<link rel="stylesheet"  href="css/jquery.treeview.css">
	<link rel="stylesheet"  href="css/mainstyle.css">	
	<link rel="stylesheet"  href="css/qtipv2css.css">
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.4.2.min.css">	
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">	
	<link rel="stylesheet" href="css/jquery.mobile.datepicker.css" />
	<link rel="stylesheet" href="css/jquery.mobile.datepicker.theme.css" />
	<link rel="stylesheet" href="css/listview-grid.css" type="text/css">	
	<link rel="stylesheet" type="text/css" href="css/jquery.countdown.css">
	<script src="js/jquery.min.js"></script>		
	<script src="_assets/js/index.js"></script>	
	<script type="text/javascript" src="js/jquery.plugin.min.js"></script> 
	<script type="text/javascript" src="js/jquery.countdown.min.js"></script>
	<script src="js/index.js"></script>
	<script src="js/jquery.mobile-1.4.2.min.js" ></script>	
	<script src="js/jquery.treeview.min.js" ></script>		
	<script src="js/qtipv2js.js" ></script>
	<script src="js/datepicker.js"></script>
	<script src="js/jquery.mobile.datepicker.js"></script> 
	<!--script type="text/javascript">
	$(document).bind( "pagecontainerload", function( e, triggerData ) {
	var redirect = triggerData.xhr.getResponseHeader( "X-Redirect" );
	if ( redirect ) {
	$( e.target ).pagecontainer( "load", redirect, triggerData.options );
	e.preventDefault();
	}
	});
	</script-->

</head>
<body>
 
<button class="show-page-loading-msg" data-textonly="false" data-textvisible="false" data-msgtext="" data-inline="true">Icon (default)</button>
<button class="show-page-loading-msg" data-textonly="false" data-textvisible="true" data-msgtext="" data-inline="true">Icon + text</button>
<button class="show-page-loading-msg" data-textonly="true" data-textvisible="true" data-msgtext="Text only loader" data-inline="true">Text only</button>
<button class="hide-page-loading-msg" data-inline="true" data-icon="delete">Hide</button>

<div id="page" data-role="page" class="jqm-demos jqm-home" data-ajax="false">
	<!-- /header -->
	<div data-role="header" class="jqm-header">
	  <h2><img src="css/images/unnlogo1.png" alt="ECE-E-learning"></h2>
		<p><a href="../usr/?action=logout" data-ajax="false" >Logout</a></p>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
		<a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
	</div><!-- /header -->
	
	<!-- content -->
      <div role="main" class="ui-content jqm-content" id="forummaindiv" >
	<div id="error_div"class="error">{$message}</div>

		{$mainContent}

	</div><!-- /content -->
	
<!-- panel -->
<div data-role="panel" class="jqm-navmenu-panel" data-position="left" data-display="overlay" data-theme="a">
<ul class="jqm-list ui-alt-icon ui-nodisc-icon">
<li data-filtertext="demos homepage" data-icon="home" ><a href="../usr/?view=homeView&suid={$user_id}&token={$token}" data-ajax="false">Home</a></li>

<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
  <h3>Resources</h3>
	<ul>
		
		<li data-filtertext="pm"><a href="../usr/?view=resourceView&rtype=documents&suid={$user_id}&token={$token}" data-ajax="false">Document Resources</a></li>
		<li data-filtertext="pm"><a href="../usr/?view=resourceView&rtype=images&suid={$user_id}&token={$token}" data-ajax="false">Image Resources</a></li>
		<li data-filtertext="pm"><a href="../usr/?view=resourceView&rtype=videos&suid={$user_id}&token={$token}" data-ajax="false">Video Resources</a></li>
		<li data-filtertext="pm"><a href="../usr/?view=newResource&&suid={$user_id}&token={$token}" data-ajax="false">Add A Resource</a></li>
		
	</ul>
  </li>

<!--project manager-->
<!--<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Archives</h3>
	<ul>
		<li data-filtertext="pm"><a href="../usr/?view=archiveView&suid={$user_id}&token={$token}" data-ajax="false">Archive Home</a></li>
		<li data-filtertext="pm"><a href="#" data-ajax="false">Overview</a></li>
	</ul>
</li>-->

<!----CM-------->

<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Forum</h3>
	<ul>
		<li data-filtertext="pm"><a href="../usr/?view=forumView&suid={$user_id}&token={$token}" data-ajax="false">Forum Home</a></li>
		<li data-filtertext="pm"><a href="#" data-ajax="false" id="newcategory">New Category</a></li>
		<li data-filtertext="pm"><a href="#" data-ajax="false" id="newtopic">New Topic</a></li>
		<li data-filtertext="pm"><a href="#" data-ajax="false" id="categoryview">Category View</a></li>
		<li data-filtertext="pm"><a href="#" data-ajax="false" id="topicview">Topic View</a></li>
		<li data-filtertext="pm"><a href="#" data-ajax="false">Top Category</a></li>
		<li data-filtertext="pm"><a href="#" data-ajax="false">Creat A Group</a></li>
		<li data-filtertext="pm"><a href="#" data-ajax="false">others</a></li>
	
	</ul>
</li>
<!----PM-------->

<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Contact</h3>
	<ul>
		<li data-filtertext="pm"><a href="../usr/?view=contactView&suid={$user_id}&token={$token}" data-ajax="false">Contact Admin</a></li>
<!--		<li data-filtertext="pm"><a href="#" data-ajax="false">Inbox</a></li>
		<li data-filtertext="pm"><a href="#" data-ajax="false">Chart</a></li>-->
	
	</ul>
</li>


<!--------------Accountant----------->

<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Registeration</h3>
	<ul>
		<li data-filtertext="pm"><a href="../usr/?view=registerView&suid={$user_id}&token={$token}" data-ajax="false">New Registeration Here</a></li>
		<li data-filtertext="pm"><a href="../usr/htm/verify.html" data-transition="pop" >Verify Registration</a></li>

	
	</ul>
</li>
<!--------------Profile----------->

<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Profile Management</h3>
	<ul>
		<li data-filtertext="pm"><a href="#profile_view" data-rel="popup" data-position-to="window" data-transition="pop">View Profile</a></li>
		<li data-filtertext="pm"><a href="../usr/?action=editprofile&userid={$user_id}&token={$token}" data-ajax="false">Edit Profile</a></li>
		
	</ul>
	
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Courses</h3>
	<ul>
	  <li data-filtertext="pm"><a href="../usr/?view=userCourses&suid={$user_id}&token={$token}" data-ajax="false">Course Home</a></li>
		<li data-filtertext="pm"><a href="#" data-ajax="false">Check For Assignment</a></li>
		<li data-filtertext="pm"><a href="#" data-ajax="false">Submit Assignment</a></li>
		<li data-filtertext="pm"><a href="#" data-ajax="false">Check My Performance</a></li>
	</ul>
</li>

<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Evaluation</h3>
	<ul>
	  <li data-filtertext="sup"><a href="../usr/?view=userEvaluation&suid={$user_id}&token={$token}" data-ajax="false">Take A Test</a></li>
		<li data-filtertext="sup"><a href="#" data-ajax="false">Add A Question</a></li>
		<li data-filtertext="sup"><a href="#" data-ajax="false">Generate Report</a></li>		
		<li data-filtertext="sup"><a href="#" data-ajax="false">Write A Report</a></li>
	</ul>
</li>
<li data-filtertext="sup"><a href="../usr/?view=adminView&suid={$user_id}&token={$token}" data-ajax="false">Administration</a></li>
</div>
<!-- /panel -->


	<div data-role="footer" data-position="fixed" data-tap-toggle="true" class="jqm-footer">
		<p>e-Digitron 1.0.1</p>
		<p>Copyright &COPY; 2015 Department Of Electronic Engineering. UNN.</p>
	</div><!-- /footer -->
	
	
	
	
<!--	
	 TODO: This should become an external panel so we can add input to markup (unique ID) 
<div data-role="panel" class="jqm-search-panel" data-position="right" data-display="overlay" data-theme="a">
		<div class="jqm-search">
			<ul class="jqm-list" data-filter-placeholder="Search demos..." data-filter-reveal="true">
<li data-filtertext="demos homepage" data-icon="home"><a href="../usr/./">Home</a></li>
<li data-filtertext="introduction overview getting started"><a href="../usr/intro/" data-ajax="false">Introduction</a></li>
<li data-filtertext="buttons button markup buttonmarkup method anchor link button element"><a href="../usr/button-markup/" data-ajax="false">Buttons</a></li>
<li data-filtertext="form button widget input button submit reset"><a href="../usr/button/" data-ajax="false">Button widget</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Checkboxradio widget</h3>
	<ul>
		<li data-filtertext="pm"><a href="../usr/checkboxradio-checkbox/" data-ajax="false">Checkboxes</a></li>
		<li data-filtertext="pm"><a href="../usr/checkboxradio-radio/" data-ajax="false">Radio buttons</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Collapsible (set) widget</h3>
	<ul>
		<li data-filtertext="collapsibles content formatting"><a href="../usr/collapsible/" data-ajax="false">Collapsible</a></li>
		<li data-filtertext="dynamic collapsible set accordion append expand"><a href="../usr/collapsible-dynamic/" data-ajax="false">Dynamic collapsibles</a></li>
		<li data-filtertext="accordions collapsible set widget content formatting grouped collapsibles"><a href="../usr/collapsibleset/" data-ajax="false">Collapsible set</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Controlgroup widget</h3>
	<ul>
		<li data-filtertext="controlgroups selectmenu checkboxradio input grouped buttons horizontal vertical"><a href="../usr/controlgroup/" data-ajax="false">Controlgroup</a></li>
		<li data-filtertext="dynamic controlgroup dynamically add buttons"><a href="../usr/controlgroup-dynamic/" data-ajax="false">Dynamic controlgroups</a></li>
	</ul>
</li>
<li data-filtertext="form datepicker widget date input"><a href="../usr/datepicker/" data-ajax="false">Datepicker</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Events</h3>
	<ul>
		<li data-filtertext="swipe to delete list items listviews swipe events"><a href="../usr/swipe-list/" data-ajax="false">Swipe list items</a></li>
		<li data-filtertext="swipe to navigate swipe page navigation swipe events"><a href="../usr/swipe-page/" data-ajax="false">Swipe page navigation</a></li>
	</ul>
</li>
<li data-filtertext="filterable filter elements sorting searching listview table"><a href="../usr/filterable/" data-ajax="false">Filterable widget</a></li>
<li data-filtertext="form flipswitch widget flip toggle switch binary select checkbox input"><a href="../usr/flipswitch/" data-ajax="false">Flipswitch widget</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Forms</h3>
	<ul>
		<li data-filtertext="forms text checkbox radio range button submit reset inputs selects textarea slider flipswitch label form elements"><a href="../usr/forms/" data-ajax="false">Forms</a></li>
		<li data-filtertext="form hide labels hidden accessible ui-hidden-accessible forms"><a href="../usr/forms-label-hidden-accessible/" data-ajax="false">Hide labels</a></li>
		<li data-filtertext="form field containers fieldcontain ui-field-contain forms"><a href="../usr/forms-field-contain/" data-ajax="false">Field containers</a></li>
		<li data-filtertext="forms disabled form elements"><a href="../usr/forms-disabled/" data-ajax="false">Forms disabled</a></li>
		<li data-filtertext="forms gallery examples overview forms text checkbox radio range button submit reset inputs selects textarea slider flipswitch label form elements"><a href="../usr/forms-gallery/" data-ajax="false">Forms gallery</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Grids</h3>
	<ul>
		<li data-filtertext="grids columns blocks content formatting rwd responsive css framework"><a href="../usr/grids/" data-ajax="false">Grids</a></li>
		<li data-filtertext="buttons in grids css framework"><a href="../usr/grids-buttons/" data-ajax="false">Buttons in grids</a></li>
		<li data-filtertext="custom responsive grids rwd css framework"><a href="../usr/grids-custom-responsive/" data-ajax="false">Custom responsive grids</a></li>
	</ul>
</li>
<li data-filtertext="blocks content formatting sections heading"><a href="../usr/body-bar-classes/" data-ajax="false">Grouping and dividing content</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Icons</h3>
	<ul>
		<li data-filtertext="button icons svg disc alt custom icon position"><a href="../usr/icons/" data-ajax="false">Icons</a></li>
		<li data-filtertext=""><a href="../usr/icons-grunticon/" data-ajax="false">Grunticon loader</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Listview widget</h3>
	<ul>
		<li data-filtertext="listview widget thumbnails icons nested split button collapsible ul ol"><a href="../usr/listview/" data-ajax="false">Listview</a></li>
		<li data-filtertext="autocomplete filterable reveal listview filtertextbeforefilter placeholder"><a href="../usr/listview-autocomplete/" data-ajax="false">Listview autocomplete</a></li>
		<li data-filtertext="autocomplete filterable reveal listview remote data filtertextbeforefilter placeholder"><a href="../usr/listview-autocomplete-remote/" data-ajax="false">Listview autocomplete remote data</a></li>
		<li data-filtertext="autodividers anchor jump scroll linkbars listview lists ul ol"><a href="../usr/listview-autodividers-linkbar/" data-ajax="false">Listview autodividers linkbar</a></li>
		<li data-filtertext="listview autodividers selector autodividersselector lists ul ol"><a href="../usr/listview-autodividers-selector/" data-ajax="false">Listview autodividers selector</a></li>
		<li data-filtertext="listview nested list items"><a href="../usr/listview-nested-lists/" data-ajax="false">Listview Nested Listviews</a></li>
		<li data-filtertext="listview collapsible list items flat"><a href="../usr/listview-collapsible-item-flat/" data-ajax="false">Listview collapsible list items (flat)</a></li>
		<li data-filtertext="listview collapsible list indented"><a href="../usr/listview-collapsible-item-indented/" data-ajax="false">Listview collapsible list items (indented)</a></li>
		<li data-filtertext="grid listview responsive grids responsive listviews lists ul"><a href="../usr/listview-grid/" data-ajax="false">Listview responsive grid</a></li>
	</ul>
</li>
<li data-filtertext="loader widget page loading navigation overlay spinner"><a href="../usr/loader/" data-ajax="false">Loader widget</a></li>
<li data-filtertext="navbar widget navmenu toolbars header footer"><a href="../usr/navbar/" data-ajax="false">Navbar widget</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Navigation</h3>
	<ul>
		<li data-filtertext="ajax navigation navigate widget history event method"><a href="../usr/navigation/" data-ajax="false">Navigation</a></li>
		<li data-filtertext="linking pages page links navigation ajax prefetch cache"><a href="../usr/navigation-linking-pages/" data-ajax="false">Linking pages</a></li>
		<li data-filtertext="php redirect server redirection server-side navigation"><a href="../usr/navigation-php-redirect/" data-ajax="false">PHP redirect demo</a></li>
		<li data-filtertext="navigation redirection hash query"><a href="../usr/navigation-hash-processing/" data-ajax="false">Hash processing demo</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Pages</h3>
	<ul>
		<li data-filtertext="pages page widget ajax navigation"><a href="../usr/pages/" data-ajax="false">Pages</a></li>
		<li data-filtertext="single page"><a href="../usr/pages-single-page/" data-ajax="false">Single page</a></li>
		<li data-filtertext="multipage multi-page page"><a href="../usr/pages-multi-page/" data-ajax="false">Multi-page template</a></li>
		<li data-filtertext="dialog page widget modal popup"><a href="../usr/pages-dialog/" data-ajax="false">Dialog page</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Panel widget</h3>
	<ul>
		<li data-filtertext="panel widget sliding panels reveal push overlay responsive"><a href="../usr/panel/" data-ajax="false">Panel</a></li>
		<li data-filtertext=""><a href="../usr/panel-external/" data-ajax="false">External panels</a></li>
		<li data-filtertext="panel "><a href="../usr/panel-fixed/" data-ajax="false">Fixed panels</a></li>
		<li data-filtertext="panel slide panels sliding panels shadow rwd responsive breakpoint"><a href="../usr/panel-responsive/" data-ajax="false">Panels responsive</a></li>
		<li data-filtertext="panel custom style custom panel width reveal shadow listview panel styling page background wrapper"><a href="../usr/panel-styling/" data-ajax="false">Custom panel style</a></li>
		<li data-filtertext="panel open on swipe"><a href="../usr/panel-swipe-open/" data-ajax="false">Panel open on swipe</a></li>
		<li data-filtertext="panels outside page internal external toolbars"><a href="../usr/panel-external-internal/" data-ajax="false">Panel external and internal</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Popup widget</h3>
	<ul>
		<li data-filtertext="popup widget popups dialog modal transition tooltip lightbox form overlay screen flip pop fade transition"><a href="../usr/popup/" data-ajax="false">Popup</a></li>
		<li data-filtertext="popup alignment position"><a href="../usr/popup-alignment/" data-ajax="false">Popup alignment</a></li>
		<li data-filtertext="popup arrow size popups popover"><a href="../usr/popup-arrow-size/" data-ajax="false">Popup arrow size</a></li>
		<li data-filtertext="dynamic popups popup images lightbox"><a href="../usr/popup-dynamic/" data-ajax="false">Dynamic popups</a></li>
		<li data-filtertext="popups with iframes scaling"><a href="../usr/popup-iframe/" data-ajax="false">Popups with iframes</a></li>
		<li data-filtertext="popup image scaling"><a href="../usr/popup-image-scaling/" data-ajax="false">Popup image scaling</a></li>
		<li data-filtertext="external popup outside multi-page"><a href="../usr/popup-outside-multipage" data-ajax="false">Popup outside multi-page</a></li>
	</ul>
</li>
<li data-filtertext="form rangeslider widget dual sliders dual handle sliders range input"><a href="../usr/rangeslider/" data-ajax="false">Rangeslider widget</a></li>
<li data-filtertext="responsive web design rwd adaptive progressive enhancement PE accessible mobile breakpoints media query media queries"><a href="../usr/rwd/" data-ajax="false">Responsive Web Design</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Selectmenu widget</h3>
	<ul>
		<li data-filtertext="form selectmenu widget select input custom select menu selects"><a href="../usr/selectmenu/" data-ajax="false">Selectmenu</a></li>
		<li data-filtertext="form custom select menu selectmenu widget custom menu option optgroup multiple selects"><a href="../usr/selectmenu-custom/" data-ajax="false">Custom select menu</a></li>
		<li data-filtertext="filterable select filter popup dialog"><a href="../usr/selectmenu-custom-filter/" data-ajax="false">Custom select menu with filter</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Slider widget</h3>
	<ul>
		<li data-filtertext="form slider widget range input single sliders"><a href="../usr/slider/" data-ajax="false">Slider</a></li>
		<li data-filtertext="form slider widget flipswitch slider binary select flip toggle switch"><a href="../usr/slider-flipswitch/" data-ajax="false">Slider flip toggle switch</a></li>
		<li data-filtertext="form slider tooltip handle value input range sliders"><a href="../usr/slider-tooltip/" data-ajax="false">Slider tooltip</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Table widget</h3>
	<ul>
		<li data-filtertext="table widget reflow column toggle th td responsive tables rwd hide show tabular"><a href="../usr/table-column-toggle/" data-ajax="false">Table Column Toggle</a></li>
		<li data-filtertext="table column toggle phone comparison demo"><a href="../usr/table-column-toggle-example/" data-ajax="false">Table Column Toggle demo</a></li>
		<li data-filtertext="responsive tables table column toggle heading groups rwd breakpoint"><a href="../usr/table-column-toggle-heading-groups/" data-ajax="false">Table Column Toggle heading groups</a></li>
		<li data-filtertext="responsive tables table column toggle hide rwd breakpoint customization options"><a href="../usr/table-column-toggle-options/" data-ajax="false">Table Column Toggle options</a></li>
		<li data-filtertext="table reflow th td responsive rwd columns tabular"><a href="../usr/table-reflow/" data-ajax="false">Table Reflow</a></li>
		<li data-filtertext="responsive tables table reflow heading groups rwd breakpoint"><a href="../usr/table-reflow-heading-groups/" data-ajax="false">Table Reflow heading groups</a></li>
		<li data-filtertext="responsive tables table reflow stripes strokes table style"><a href="../usr/table-reflow-stripes-strokes/" data-ajax="false">Table Reflow stripes and strokes</a></li>
		<li data-filtertext="responsive tables table reflow stack custom styles"><a href="../usr/table-reflow-styling/" data-ajax="false">Table Reflow custom styles</a></li>
	</ul>
</li>
<li data-filtertext="ui tabs widget"><a href="../usr/tabs/" data-ajax="false">Tabs widget</a></li>
<li data-filtertext="form textinput widget text input textarea number date time tel email file color password"><a href="../usr/textinput/" data-ajax="false">Textinput widget</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Theming</h3>
	<ul>
		<li data-filtertext="default theme swatches theming style css"><a href="../usr/theme-default/" data-ajax="false">Default theme</a></li>
		<li data-filtertext="classic theme old theme swatches theming style css"><a href="../usr/theme-classic/" data-ajax="false">Classic theme</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Toolbar widget</h3>
	<ul>
		<li data-filtertext="toolbar widget header footer toolbars fixed fullscreen external sections"><a href="../usr/toolbar/" data-ajax="false">Toolbar</a></li>
		<li data-filtertext="dynamic toolbars dynamically add toolbar header footer"><a href="../usr/toolbar-dynamic/" data-ajax="false">Dynamic toolbars</a></li>
		<li data-filtertext="external toolbars header footer"><a href="../usr/toolbar-external/" data-ajax="false">External toolbars</a></li>
		<li data-filtertext="fixed toolbars header footer"><a href="../usr/toolbar-fixed/" data-ajax="false">Fixed toolbars</a></li>
		<li data-filtertext="fixed fullscreen toolbars header footer"><a href="../usr/toolbar-fixed-fullscreen/" data-ajax="false">Fullscreen toolbars</a></li>
		<li data-filtertext="external fixed toolbars header footer"><a href="../usr/toolbar-fixed-external/" data-ajax="false">Fixed external toolbars</a></li>
		<li data-filtertext="external persistent toolbars header footer navbar navmenu"><a href="../usr/toolbar-fixed-persistent/" data-ajax="false">Persistent toolbars</a></li>
		<li data-filtertext="external ajax optimized toolbars persistent toolbars header footer navbar"><a href="../usr/toolbar-fixed-persistent-optimized/" data-ajax="false">Ajax optimized toolbars</a></li>
		<li data-filtertext="form in toolbars header footer"><a href="../usr/toolbar-fixed-forms/" data-ajax="false">Form in toolbar</a></li>
	</ul>
</li>
<li data-filtertext="page transitions animated pages popup navigation flip slide fade pop"><a href="../usr/transitions/" data-ajax="false">Transitions</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>3rd party API demos</h3>
	<ul>
		<li data-filtertext="backbone requirejs navigation router"><a href="../usr/backbone-requirejs/" data-ajax="false">Backbone RequireJS</a></li>
		<li data-filtertext="google maps geolocation demo"><a href="../usr/map-geolocation/" data-ajax="false">Google Maps geolocation</a></li>
		<li data-filtertext="google maps hybrid"><a href="../usr/map-list-toggle/" data-ajax="false">Google Maps list toggle</a></li>
	</ul>
</li>



			</ul>
		</div>
    </div>-->
	
	
	
	
<div id="newcategoryBox" class="ui-content" data-role="popup" data-theme="a">

        <p id="question" class="center"><strong>Create New Category</strong></p>
	<div id="newcategory_content">
	  
	</div>

        <div class="ui-grid-a">
            <div class="ui-block-a">
                <a id="newCategoryYes" class="ui-btn ui-corner-all ui-mini ui-btn-a" data-rel="ok">Create</a>
            </div>
            <div class="ui-block-b">
                <a id="newCategoryCancel" class="ui-btn ui-corner-all ui-mini ui-btn-a" data-rel="back">Cancel</a>
            </div>
        </div>

	</div><!-- /popup -->
	
	<div id="newtopicBox" class="ui-content" data-role="popup" data-theme="a">

        <p id="question" class="center"><strong>Create New Topic</strong></p>
	<div id="new_topic_content">
	  
	</div>

        <div class="ui-grid-a">
            <div class="ui-block-a">
                <a id="newTopicYes" class="ui-btn ui-corner-all ui-mini ui-btn-a" data-rel="">Create</a>
            </div>
            <div class="ui-block-b">
                <a id="newTopicCancel" class="ui-btn ui-corner-all ui-mini ui-btn-a" data-rel="back">Cancel</a>
            </div>
        </div>

	</div><!-- /popup -->
<!--this box shows the user profile-->
<div data-role="popup" id="profile_view" data-theme="a" data-overlay-theme="b" class="ui-content" style="max-width:600px;max-height: 900px; padding-bottom:2em;">
  	<div data-role="header">
		<h1>My Profile: {$user}</h1>
	</div><!-- /header -->
	{$profile}
	<div data-role="footer">
    <h1><a href="http://localhost/usr/?action=editprofile&userid={$user_id}" data-rel="link" class="ui-shadow ui-btn ui-corner-all ui-btn-b ui-icon-check ui-btn-icon-left ui-btn-inline ui-mini">Edit</a>
	<a href="../" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-btn-b ui-icon-back ui-btn-icon-left ui-btn-inline ui-mini" style="margin-left: 200px;">Back</a>
<!--	<a href="index.html" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-btn-inline ui-mini"></a>-->
</h1>
	</div><!-- /header -->
</div>
	
	
</div><!-- /page -->

</body>
</html>
