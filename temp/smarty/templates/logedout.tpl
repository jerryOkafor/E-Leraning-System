		<!--Slider for home page--->
		<h2 id="title">Welcome to e-Digitron!</h2>
		<div class="boldtext"><strong>E-learning system</strong> is designed to enhance learning in the department of electronic engineering.
		This system is based on the information specifications and representation that satisfy requirements like reusability, interoperability and multipurpose. 
		</div>
	{$slider}
	
	<div class="jqm-block-content" style="display: inline-block; width:94.5%;">
	  <div class="jqm-block-content ui-responsive ui-mini ui-mobile" data-mini="true" style="width:200px; float: left; right: 10px; left:20px;" id="filterbox">
   
	  <h3>Login!</h3>
	      <form acton="index.php" method="POST" data-ajax="false" data-url="../index.php">
		<label for="textinput-2">Username:</label>
		<input name="username" id="textinput-2" placeholder="Username" data-mini="true" class="ui-mini ui-mobile-rendering" type="text" required="true">
		<label for="password">Password:</label>
		<input name="password" id="password"  placeholder="Password"  autocomplete="off" data-mini="true" type="password" required="true">

		<br/>
		<input type="submit" name="submit" id="submit-6" class="ui-shadow ui-btn ui-corner-all ui-mini" value="Login"/>
	       </form>
	  </div>
	  <div class="jqm-block-content ui-responsive ui-mini ui-mobile" data-mini="true" style="width:200px; float: left; right: 10px;" id="filterbox">
   
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
	  <div class="jqm-block-content ui-responsive ui-mini ui-mobile" data-mini="true" style="width:200px; float: left; right: 10px;" id="filterbox">
   
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
	</div>