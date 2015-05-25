$(function() {
	//======================================================================================================================
	function refesh_example_info(){
		document.getElementById('crudId').value = '';
		document.getElementById('crudTitle').value = '';
		document.getElementById('crudType').selectedIndex = 0;
		document.getElementById('crudMessage').value = '';
		document.getElementById('example_danger').innerHTML="";
	}

	// Clean all character after create new example
	$("body").on('click','#cleanChanges',function(){
		refesh_example_info();
	});
    
    $("body").on('click','#closeChanges', function(e){
		//window.location.href =  "http://localhost/myphpmvc/public/example/testSelect";
		location.reload();
	});

    //======================================================================================================================
	//Create example
    $("body").on('click','.create_crud',function(e){
    	refesh_example_info();
		document.getElementById('myExampleModalLabel').innerHTML ="CRUD Example - Create new example";
		document.getElementById('example_danger').innerHTML ="";
		
	});

	$("body").on('click','#submitChanges',function(e){
		e.preventDefault();
     	exampleIs.createExample();
    });  
	
	//======================================================================================================================
	// Delete example
	$("body").on('click','.delete_crud',function(e){
		e.preventDefault();
     	var example_id = $(this).attr("ide");
     	var example_name = $(this).attr("name");

     	var del_confirm = confirm("Are you sure you  want to delete this example: "+ example_id+" - "+example_name +" ?");
    	if (del_confirm) {
    		exampleIs.deleteExample(example_id);
    	};
    });  
	
    //======================================================================================================================
	// Update example functions
	// View detail example
	$("body").on('click','.update_crud',function(e){
		e.preventDefault();

     	$('#crud-example').modal('show');
     	refesh_example_info();

     	document.getElementById('myExampleModalLabel').innerHTML = "CRUD Example - Update Information";
     	$('#crudId').val($(this).attr('ide'));
     	$('#crudTitle').val($(this).attr('tit'));
     	$('#crudMessage').val($(this).attr('msg'));
     	$('#crudType').val($(this).attr('typ'));
     	
     	$('#submitChanges').addClass('hide');
     	$('#saveChanges').removeClass('hide');
    }); 

	// Update
	$("body").on('click','#saveChanges',function(e){
		e.preventDefault();
		exampleIs.updateExample();
    }); 
})