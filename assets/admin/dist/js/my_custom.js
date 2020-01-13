$(function () {
    $("#btnAdd").bind("click", function () {
        var div = $("<tr />");
        div.html(GetDynamicTextBox(""));
        $("#TextBoxContainer").append(div);
    });
    $("body").on("click", ".remove", function () {
        $(this).closest("tr").remove();
    });


/* External / Internal link disabled Jquery */
jQuery(document).ready(function(){

    var get_val =  jQuery('.dropdown_class').val();

    if(get_val == 'internal'){
        jQuery("#checkboxval2").prop('disabled', true);
    } else if(get_val == 'external')
    {
        jQuery("#checkboxval1").prop('disabled', true);
    }
    
    jQuery('.dropdown_class').change(function(){
        var show_value = jQuery(this).val();
        if(show_value == 'internal'){
        	jQuery('.external').css('display','none');
        	jQuery('.internal').css('display','block');
            jQuery("#checkboxval1").attr('checked','checked');
            jQuery("#checkboxval2").prop('disabled', true);
            jQuery("#checkboxval1").prop('disabled', false);
            jQuery("#checkboxval2").attr('checked',false);
        } else if (show_value == 'external')
        {
        	jQuery('.internal').css('display','none');
        	jQuery('.external').css('display','block');
            jQuery("#checkboxval2").attr('checked','checked');
            jQuery("#checkboxval1").prop('disabled', true);
            jQuery("#checkboxval2").prop('disabled', false);
            jQuery("#checkboxval1").attr('checked',false);
        }
    });



	/* Conform password Jquery */   
	var password = document.getElementById("password")
	  , confirm_password = document.getElementById("confirm_password");

	function validatePassword(){
	  if(password.value != confirm_password.value) {
	    confirm_password.setCustomValidity("Passwords Don't Match");
	  } else {
	    confirm_password.setCustomValidity('');
	  }
	}

	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;
	/* Conform password Jquery End */

	});

});

function GetDynamicTextBox(value) {
    return '<td><input name = "social_heading[]" placeholder="Facebook" type="text" value = "' + value + '" class="form-control" /></td>' + '<td><input name = "social_url[]" placeholder="https://facebook.com" type="url" value = "' + value + '" class="form-control" /></td>' + '<td><select name = "social_icon[]" class="form-control"><option value="fas fa-facebook">Facebook</option><option value="fab fa-instagram">Instagram</option><option value="fab fa-twitter">Twitter</option><option value="fab fa-google-plus-g">Google + </option><option value="fab fa-youtube">Youtube</option> </select></td>' +'<td><button type="button" class="btn btn-danger remove"><i class="fas fa-minus"></i></button></td>'
}


function deleteData(table,id){
		swal({
		title: "Are you sure for delete this row?",
		text: "You will not be able to recover this row data!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Yes, delete it!',
		closeOnConfirm: false,
		//closeOnCancel: false
	},
	function(){
         $.post("http://demo.personsplanet.com/admin/ajax/delete",
		  {
		    id: id,
		    table: table
		  },
		  function(data, status){
		    swal("Deleted!", "Your imaginary file has been deleted!", "success");
			$("#row_"+id).css('opacity','0.5');
			setTimeout(function(){
	          $("#row_"+id).hide();
			},2000)
		  });


		
	});
}

function convertToSlug(text)
{	
	var setting_type = 'pages';
	var heading = text;
    $.post("http://demo.personsplanet.com/admin/ajax/convertToSlug",
	{
		setting_type: setting_type,
		heading: heading,

	},
	function(data, status){
		 
		if(status == 'success'){
			$('#pageSlug').val(data);
		}
	});

}


$("#pageTitle").on('keyup', function(){
	var heading = $(this).val().trim();
	var id = $('#pageID').val().trim();
	if( id < 1 ){
		convertToSlug( heading );
	}
	
	 
});
$("#pageSlug").on('keyup', function(){
	var heading = $(this).val().trim();
	if( heading != '' ){
		convertToSlug( heading );
	}else{
		heading = $('#pageTitle').val().trim();
		convertToSlug( heading );
	}
	
});
function listCopyMediaPath(row_id) {
	console.log("row_id", row_id)
	var id = 'list_media_path_'+row_id;
  var copyText = document.getElementById(id);
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  $('span#list_media_span_'+row_id).text('Copied');
} 
$('#upload_media_file').submit(function(e){
e.preventDefault(); 
alert("Upload Media");
          $.ajax({
                     url:'http://demo.personsplanet.com/admin/upload/do_upload',
                     type:"post",
                     data:new FormData(this), //this is formData
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(data){
                          alert("Upload Image Successful.");
                   }
             });
});

function get_all_media(current_page) {
	
	 console.log("current_page", current_page);
	 var DataString = 'current_page='+current_page;
	  $.ajax({
	                     url:'http://demo.personsplanet.com/admin/ajax/get_all_media',
	                     type:"post",
	                     data: DataString, //this is formData
	                     dataType:'json',
	                    
	                     cache:false,
	                     async:false,
	                      success: function(data){
	                      	console.log(data);
	                      	 if( data.status ){
	                      	 	$('#media_wrapper').append(data.output)
	                      	 }
	                      	 	
	                          
	                   }
	             });
 //    $.post("http://demo.personsplanet.com/admin/ajax/get_all_media",
	// {
		 
	// 	current_page: current_page,

	// },
	// function(data, status){
		 
	// 	if(status == 'success'){
	// 		$('#pageSlug').val(data);
	// 	}
	// });
}

$("#get_all_media").on("click", function(e){
	e.preventDefault();
	var current_page = 0;
	$("#media_wrapper").html('');
	get_all_media(current_page);

})
 
