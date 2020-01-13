$(document).ready(function() {

   var calendar = $('#calendar').fullCalendar({
      editable:true,
      header:{
       left:'prev,next today',
       center:'title',
       right:'month,agendaWeek,agendaDay,listMonth'
      },
      events: 'http://demo.personsplanet.com/frontend/ajax/events',
      selectable:true,
      selectHelper:true,
       eventLimit: true,
       eventClick: function(event) {
    if (event.url) {
        window.open(event.url, "_blank");
        return false;
    }
}
     
  });

  	function ValidateEmail(user_email) 
	{
	 	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(user_email))
	  	{
	    	return (true)
	  	}
	    	// alert("You have entered an invalid email address!")
	    	return (false)
	}

$('#user_email').on("keypress", function(){
	if( !ValidateEmail( user_email ) ){
		$(this).addClass('validationError');
	}else{
		$(this).removeClass('validationError')
	}

})			
  /** Submit contact form **/
  $("#contact_form").submit(function(e) {
  		e.preventDefault();
  		$("#cform-status").remove();
  		var user_email = $.trim($('#user_email').val());
  		if( !ValidateEmail(user_email) ){
  			$('#contact_form').append("<div id='cform-status'><p class='validationError'>Please enter valid email address.</p></div>")
  			return false;
  		}
  		if($("#remember").prop('checked') != true){
		   $('#contact_form').append("<div id='cform-status'><p class='validationError'>Please accept email consent.</p></div>")
  			return false; 
		}
  		console.log("Email ", user_email)
  		var form = $(this);
  		$('#contact_form').append("<div id='cform-status'><p class='processing'>Sending mail...</p></div>")
  		 
  		$.ajax({
           type: "POST",
           url: 'http://demo.personsplanet.com/frontend/ajax/sendContactEmail',
           data: form.serialize(),
           dataType:'json',
           success: function(data)
           {
           		$("#cform-status").remove();
                if('success' == data.status){
                	// alert();
                	$('#contact_form').append("<div id='cform-status'><p class='success'>"+data.message+"</p></div>")
                	 setTimeout(function(){ 
                	 	$("#cform-status").remove();
                	 	$("#contact_form").trigger("reset");
                	  }, 2500);
                }else{
                	$('#contact_form').append("<div id='cform-status'><p class='validationError'>"+data.message+"</p></div>")
                }
           },
           error: function(){
           		$("#cform-status").remove();
           		$('#contact_form').append("<div id='cform-status'><p class='validationError'>Invalid Request.</p></div>")
           }
        });
  }); 

  /** Instructional Video **/

   $(".show-instruction-video").on("click", function(){
    var videoURL = $(this).attr('data-url');
    console.log("VIdeo URL ", videoURL);

    $("#display-instruction-video").on('hide.bs.modal', function(){

      $("#instruction-modal").attr('src', '');
    });
  

  $("#display-instruction-video").on('show.bs.modal', function(){
      $("#instruction-modal").attr('src', videoURL+'?autoplay=1');
  });
      $(".instruction-modal").trigger('click');
      
    });

    /** trade station video **/
    var url = $("#cartoonVideo").attr('src');
    

    $("#videoModal").on('hide.bs.modal', function(){
        $("#cartoonVideo").attr('src', '');
    });
    

    $("#videoModal").on('show.bs.modal', function(){
        $("#cartoonVideo").attr('src', url);
    });

    

   
});

