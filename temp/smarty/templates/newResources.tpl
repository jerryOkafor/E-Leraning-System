<form method="post" enctype="multipart/form-data" action='../usr/pages/ResourceProcessor.php' data-ajax="false">
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
</form>