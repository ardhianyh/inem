$(document).ready(function(){

	$('a#btnDelete').click(function(){
		var id =$(this).attr("data-id");

		$("#modalDelete").modal();
		$("#id").val(id);

	})

	$('button#submitDelete').click(function(){
		event.preventDefault();
		var id = $( "input#id" ).val();
		var token = $(this).data("token");

        $.ajax({
            url: "delete/"+id,
            type: 'PUT',
            dataType: "JSON",
            data: {
                "id": id,
                "_method": 'DELETE',
                "_token": token,
            },
            success: function ()
            {
                console.log("it Work");
            }
        });

        console.log("It failed");

	})

})