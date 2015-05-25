//Constructor
function Example(){
	//this.base_url = window.location.origin+"/quangnguyen/";
    // This article:
    // http://stackoverflow.com/questions/21246818/how-to-get-the-base-url-in-javascript

    //var base_url = window.location.origin;
    // "http://stackoverflow.com"

    //var host = window.location.host;
    // stackoverflow.com

    //var pathArray = window.location.pathname.split( '/' );
    // ["", "questions", "21246818", "how-to-get-the-base-url-in-javascript"]

}

//function
Example.prototype = {
	// Create new example
	createExample : function()
	{
		// send data
		$.ajax({
			type 			: 'POST',
			url 			: "http://localhost/myphpmvc/public/example/testInsert",
			dataType		: 'json',
			data			: {
				title 		: 	$('#crudTitle').val(),
		    	message  	: 	$('#crudMessage').val(),
		    	type 		: 	$('#crudType').val(),
		    },
			success	: function (data, status)
			{
				var dom = $('#example_danger');
            	if(status != "success"){
            		dom.html("Error happens. The request is not successful. Please try again.").fadeIn();
            	}
            	else
                {
                    if(data.code == 0) 
                    {
                    	if(typeof data.info === 'undefined')
                        {
                            dom.html('Error happens. The request is undefined. Please try again.').fadeIn();
                        }
                        if(typeof data.info === 'object')
                        {
                            var output = '<ul>';
                            // Loop
                            for (var key in data.info){

                             output += '<li>' + data.info[key]  + '</li>';
                            }
                            output += '</ul>';
                            dom.html(output).fadeIn();  
                        } 
                        else 
                        {
                            dom.html("Error happens. \n"+ "Info: "+ data.info+ "\n The object info is undefined. Please try again.").fadeIn();	
          				}
                    }
                    // Successfully
                    else {
                        dom.html(data.info).fadeIn();
                    }
                }
			},
			error: function() {
		      alert("Something went wrong when create new example. Please try again");
		    },
		});
		return false;
	},

	//======================================================================================================================
	// delete function
	deleteExample : function(example_id)
	{
		$.ajax({
			type 			: 'POST',
			url 			: "http://localhost/myphpmvc/public/example/testDelete",
			dataType		: 'json',
			data			: {
				id  	    : 	example_id,
			},
			success	: function (data, status)
			{
				if(status != "success"){
            		alert("Error happens. The request is not successful. Please try again.").fadeIn();
            	}
            	else
                {
                    if(data.code == 0) 
                    {
                    	if(typeof data.info === 'undefined')
                        {
                            alert('Error happens. The request is undefined. Please try again.').fadeIn();
                        }
                        if(typeof data.info === 'object'){
                            var output = '<ul>';
                            // Loop
                            for (var key in data.info){

                             output += '<li>' + data.info[key]  + '</li>';
                            }
                            output += '</ul>';
                           	alert(output);
                        } 
                        else 
                        {
                           alert("Error happens. \n"+ "Info: "+ data.info+ "\n The object info is undefined. Please try again.");
                        }
                    }
                    // Successfully
                    else 
                    {
                    	$(".recordExample[record-id=" + example_id + "]").fadeOut(500, function(){
							$(this).remove();
						});
                        //location.reload();
                    }
                }
			},
			error: function() {
		      alert("Something went wrong when delete this example. Please try again");
		    },
		});
	},

    //======================================================================================================================
    // update example function
    updateExample : function()
    {
        $.ajax({
            type            : 'POST',
            url             : "http://localhost/myphpmvc/public/example/testUpdate",
            dataType        : 'json',
            data            : {
                id          :   $('#crudId').val(),
                title       :   $('#crudTitle').val(),
                message     :   $('#crudMessage').val(),
                type        :   $('#crudType').val(),
            },
            success : function (data, status)
            {
                var dom = $('#example_danger');
                if(status != "success"){
                    alert("Error happens. The request is not successful. Please try again.").fadeIn();
                }
                else
                {
                     if(data.code == 0) 
                    {
                        if(typeof data.info === 'undefined')
                        {
                           dom.html("Error happens. The request is not successful. Please try again.").fadeIn();
                        }
                        if(typeof data.info === 'object'){
                            var output = '<ul>';
                            // Loop
                            for (var key in data.info){

                             output += '<li>' + data.info[key]  + '</li>';
                            }
                            output += '</ul>';
                            dom.html(output).fadeIn();
                        } 
                        else 
                        {
                           dom.html("Error happens. \n"+ "Info: "+ data.info+ "\n The object info is undefined. Please try again.").fadeIn();   
                        }
                    }
                    // Successfully
                    else 
                    {
                        dom.html(data.info).fadeIn();
                    }
                }
            },
            error: function() {
              alert("Something went wrong when update this example. Please try again");
            },
        });
    },

};	

//Instance
exampleIs = new Example();