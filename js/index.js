/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
  
 	// first example
	$("#navigation").treeview({
		collapsed: true,		
		animated: "fast",
		unique: true
		//persist: "location"
	});

host = "169.254.10.73";
currentTime ="";
//Evaluatioin Codes
$(document.body).on('click', '#evalHome', function () {
     $.post("http://"+host+"/usr/pages/ClassProcessor.php",{evalHome:"evalHome"},function (data){
      $('#evalHomeContent').html(data);
    });    
  });
  
$(document.body).on('click', '#evaluationButton', function () {
    // Your code here
    var qCount = $("#qCount").val();    
    var qCategory = $("#qCategory").val();    
    var qStyle =$("input[name='qStyle']:radio:checked").val();
    var qTime = $("#qTime").val();
    
    //alert(qCount+" "+qCategory+" "+qStyle+" "+qTime);
    if (qCount=== "" || qCategory === "" || qStyle === "" || qTime === ""){
      
      $(".forumfeed").html("You must fill all fields correctltly");
    }
      else{
    
    configureEvaluation(qCount,qCategory,qStyle,qTime);
      }
  });
  

  function configureEvaluation(qCount,qCategory,qStyle,qTime)
  {
     startTimeCounting(qTime*60);
    $.ajax({
         url: "http://"+host+"/usr/pages/index.php",
      success: function (result) {
	$("#evalHomeContent").html(result);
	// alert(result.toString());
      },
      type: 'POST',
      beforeSend: function (xhr) {

      },
      data:{config:"config",qCount:qCount,qCategory:qCategory,qStyle:qStyle,qTime:qTime}
    });
  }
  
  
  $(document.body).on('click', '#evalSubmit', function () {
    currentTime = "true";
    var user = $("#user_id").val();
     var qCount = $("#qCount").val();
    var qCat = $("#qCat").val(); 
    var qStyle = $("#qStyle").val(); 
    var qTime= $("#qTime").val(); 
    //current values
    var currentCount = $("#currentCount").val();
    var currentCatName = $("#currentCatName").val();
    var currentqId = $("#currentqId").val(); 
    var option = $("input[name='option']:radio:checked").val(); 
    var correctAns = $("#correctAns").val(); 
    var currentTime = currentTime;
    var totalScore = $("#totalScore").val();
    //check if no optio is selecte dand tell the user to select an option
    if(option===undefined){ 
      ////no option is selected, alert the user to select an option
      $(".forumfeed").html("You must choose an option correctltly");
      
    }else{ 
      //an option is selected so post the data to the server
     
    $.ajax({
         url: "http://"+host+"/usr/pages/ClassProcessor.php",
      success: function (result) {
	$("#evalHomeContent").html(result);
	// alert(result.toString());
      },
      type: 'POST',
      beforeSend: function (xhr) {

      },
      data:{continueEval:"continueEval",currentCatName:currentCatName,currentCount:currentCount,currentqId:currentqId,
      currentTime:currentTime,option:option,correctAns:correctAns,user:user,qCount:qCount,qCat:qCat,
      qStyle:qStyle,qTime:qTime,totalScore:totalScore}
    });
  }
      
  });
  
  $(document.body).on('click', '#evalSkip', function () {
    // Your code here
    var qCount = $("#qCount").val();    
    var qCategory = $("#qCategory").val();
      
  });

//Qtip codes begin
$('[title!=""]').qtip();

//creates dialog box fo new category'
 $(document.body).on("click","#newcategory",function(){
   $.ajax({
         url: "http://"+host+"/usr/pages/ClassProcessor.php",
      success: function (result) {
	
	 $( "#newcategory_content" ).html(result);
	  $( "#newcategoryBox" ).popup( "open" );
	
      },
      type: 'POST',
      beforeSend: function (xhr) {
      },
      data: {newcategory: "newcategory"}
    });
  });//end box
  
  //creates dialog box for new topic'
 $(document.body).on("click","#newtopic",function(){
   $.ajax({
         url: "http://"+host+"/usr/pages/ClassProcessor.php",
      success: function (result) {
	
	 $( "#new_topic_content" ).html(result);
	  $( "#newtopicBox" ).popup( "open" );
	
      },
      type: 'POST',
      beforeSend: function (xhr) {
      },
      data: {newtopic: "newtopic"}
    });
  });//
   
   
   //this code handles the evaluation count down 

function startTimeCounting(sec) { 
   shortly = new Date(); 
   shortly.setSeconds(shortly.getSeconds() + sec); 
    $('#time_elapsed').countdown({until: shortly,onExpiry: liftOff, onTick: watchCountdown}); 
    
   
}

function liftOff() { 
    $('#time_monitor').text('Your time has expired!'); 
    //stop the process
    currentTime = "false";
} 
 
function watchCountdown(periods) { 
    $('#time_monitor').text('About ' + periods[5] + ' minutes and ' + 
        periods[6] + ' seconds to go'); 
}
 
  //new topic codes for Forum
//  $('#newtopic').qtip({
//    prerender: false, // Render tooltip HTML on $(document).ready()
//    id: 'newtopicqtip', // Incremental numerical ID used by default
//    overwrite: true, // Overwrite previous tooltips on this element
//    suppress: true, // Translate 'title' to 'oldtitle' attribute (prevent browser tooltip)
//    content: {
//      text: function (event, api) {
//
//	$.ajax({
//	     url: "http://"+host+"/usr/../pages/ClassProcessor.php",
//	  data: {newtopic: "newtopic"},
//	  type: 'POST'
//	})
//		.done(function (html) {
//		  api.set('content.text', html);
//		})
//		.fail(function (xhr, status, error) {
//		  api.set('content.text', status + ': ' + error);
//		});
//
//	return 'Loading...';
//      },
//      title: 'You can creat a new topic below',
//      button: 'Close'},
//    style: {
//      classes: 'qtip-blue qtip-shadow',
//      tip: {// Requires Tips plugin
//	corner: true, // Use position.my by default
//	mimic: false, // Don't mimic a particular corner
//	width: 20,
//	height: 8,
//	border: true, // Detect border from tooltip style
//	offset: 0 // Do not apply an offset from corner
//      }
//    },
//    position: {
//      my: 'left center', // Position my top left...
//      at: 'right center', // at the bottom right of...
//      target: $('#newtopic'), // my target
//      //target:'mouse' //$('#useroptions') // my target
//      effect: function (api, pos, viewport) {
//	// "this" refers to the tooltip
//	$(this).animate(pos, {
//	  duration: 600,
//	  easing: 'linear',
//	  queue: false // Set this to false so it doesn't interfere with the show/hide animations
//	});
//      }
//
//
//    },
//    show: {
//      event: 'click'
//    },
//    hide: {
//      event: 'unfocus'}
//
//  });//end of new topic codes
  
  
  
  
  
  //this codes oads the forum home
  $("#forumhome").click(function () {
    $.ajax({
         url: "http://"+host+"/usr/pages/ClassProcessor.php",
      success: function (result) {
	$("#scrolldiv").html(result);
	// alert(result.toString());
      },
      type: 'POST',
      beforeSend: function (xhr) {      },
      data: {getallforum: "getallforum"}
    });

  });//end of codes for forum home
  
  //this code displays the category view 
    $("#categoryview").click(function () {
    $.ajax({
         url: "http://"+host+"/usr/pages/ClassProcessor.php",
      success: function (result) {
	$("#forummaindiv").html(result);
	// alert(result.toString());
      },
      type: 'POST',
      beforeSend: function (xhr) {

      },
      data: {c_view: "c_view"}
    });
  });
  
  //this code displays the topic view of things
  $("#topicview").click(function () {
    $.ajax({
         url: "http://"+host+"/usr/pages/ClassProcessor.php",
      success: function (result) {
	$("#forummaindiv").html(result);
	// alert(result.toString());
      },
      type: 'POST',
      beforeSend: function (xhr) {

      },
      data: {t_view: "t_view"}
    });
  });//end of codes to display topic view
  
  
  
  //codes for view comment and topic
  $(document.body).on('click', '.view_comment_topic', function () {
    //grab some data
    var topic_subject = $(this).attr('subject');
     var id = $(this).attr('topic_id');
    
    //make an ajax request
    //alert(topic_subject);
    $.ajax({
         url: "http://"+host+"/usr/pages/ClassProcessor.php",
      success: function (result) {
	$("#forummaindiv").html(result);
      },
      type: 'POST',
      beforeSend: function (xhr) {

      },
      data: {topicspecview: "topicspecview", topic_subject: topic_subject,topic_id:id}
    });
  });//end of codes for view of comments
  
  
  //codes for topic relating to category
    $(document.body).on('click', ' li .view_topics_inCat', function () {
    //grab some data
     var category = $(this).attr('name');
     var catid = $(this).attr('catid');
    
    //make an ajax request
    $.ajax({
         url: "http://"+host+"/usr/pages/ClassProcessor.php",
      success: function (result) {
	$("#forummaindiv").html(result);
      },
      type: 'POST',
      beforeSend: function (xhr) {

      },
      data: {topicincat:"topicincat",category:category,catid:catid}
    });
  });//end of codes for topic relating to category


    //coding for posting commment
  $(document.body).on('click','#commentButton',function () {
    // Your code here   
    var comment_details = $("#comment_details").val();    
    var comment_by = $("#postby").val();
    var topic = $("#topic").val();
    var topicid = $("#topic_id").val();
    
    if (comment_details === "")
    {
      $(".forumfeed").html("<p class='error'>You must fill all fields correctltl</p>");
    } else {
      postComent(comment_details,comment_by,topic,topicid);
      //alert("Somthing has to be done "+comment_details+" "+comment_by+" "+topic);
    }
  });
  
  function postComent(comment_details,comment_by,topic,topicid){
    
    $.post("http://"+host+"/usr/pages/ClassProcessor.php", {comment_details:comment_details,comment_by:comment_by,topic:topic,topicid:topicid}, function (data) {
      $('#forummaindiv').html(data);
      //alert(data.toString());
    });
  }
  
  
  //this code captures couse view clicka and fire an ajax eveent to displa it in the diaplay box;
  $(document.body).on("click",".courseTag",function(){
    //garg id Data
    //var code = $(this).attr('code');
    var text = $(this).text();
      //alert("You Clicked "+text);
      //make an ajax request to the page and get feed back.
      
      $.post("http://"+host+"/usr/pages/ClassProcessor.php", {getCourse:"getCourse",tag:text}, function (data) {
      $('#course').html(data);
      //alert(data.toString());
    });
      
  });


///this code handles the creation of new topic
  $(document.body).on("click","#newTopicYes",function(){
    //garg id Data
    //var code = $(this).attr('code');
    var topic_subject = $("#topic_subject").val();
    var topic_cat_select = $("#topic_cat_select").val();
    var topic_by = $("#topic_by").val();
      //alert("You Clicked "+text);
//      alert(topic_by+" "+topic_cat_select+ " "+topic_subject);

       if (topic_subject=== "" || topic_cat_select === "" || topic_by === ""){
    
      alert("You must fill the blank fielsd!");
    }else
    {
      //make an ajax request to the page and get feed back.
      
      $.post("http://"+host+"/usr/pages/ClassProcessor.php", {t_sub:topic_subject,t_cat:topic_cat_select,t_by:topic_by}, function (data) {
      $('#new_topic_content').html(data);
      //alert(data.toString());
    });
  }
      
  });
  //this code handles the creation of new category
  
    $(document.body).on("click","#newCategoryYes",function(){
    //garg id Data
    
    var cat = $("#cat").val();
    var cat_name = $("#cat_name").val();
    var cat_desc = $("#cat_desc").val();
      //alert("You Clicked "+text);
    if (cat=== "" || cat_name === "" || cat_desc === ""){
    
      alert("You must fill the blank fielsd!");
    }else
    {
      //make an ajax request to the page and get feed back.
      
      $.post("http://"+host+"/usr/pages/ClassProcessor.php", {cat:cat,cat_name:cat_name,cat_desc:cat_desc}, function (data) {
      $('#newcategory_content').html(data);
      //alert(data.toString());
    
    });
  }
      
  });
});
//end of ducument ready



