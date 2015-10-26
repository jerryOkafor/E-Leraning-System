<div class="jqm-block-content" >
  <form action="../usr/pages/ajaxForms.php" method="POST"  data-ajax="false" data-url="../usr/pages/ajaxForms.php">
    <fieldset><legend><h3>Edit Your Message below:</h3></legend>
  <label for="textinput-1">Sender:</label>
  <input type="hidden" name="contact_mail" value="mail">
  <input data-clear-btn="true" required="true" name="sname" id="" placeholder="Okafor Jerryhanks Chinonso" value="" data-mini="true" type="text">
  <label for="textinput-2">Email:</label>
  <input data-clear-btn="true" required="true" name="semail" id="" placeholder="hanksjerry_dedon@yahoo.com" value="" data-mini="true" type="text">
  <label for="textinput-2">Subject:</label>
  <input data-clear-btn="true" required="true" name="ssubject" id="" placeholder="Complaint" value="" data-mini="true" type="text">
  
  <label for="textarea">Message:</label>
  <textarea cols="40" rows="8" name="smsg"  required="true"  placeholder="Enter your message here" id="textarea"></textarea>
     </fieldset>
    
    
    
    <br/>
    <button class="ui-shadow ui-btn ui-corner-all" type="submit" id="">Send Mail</button>
    </form>
	  
	</div>