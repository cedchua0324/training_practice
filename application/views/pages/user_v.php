<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}
</style>
<title>TEST</title>
</head>
<div class="container">
<div class="row">

	<div class="page-header"> <h1>HEHEEHE</h1> </div>

		<?php// echo form_open('register/add_user') ?>
		 <form action="#" id="form" class="form-horizontal">
Firsname&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='firstName' id='firstName'><br>
Lastname&nbsp;&nbsp;&nbsp;<input type='text' name='lastName' id='lastName'><br>
Username&nbsp;&nbsp;<input type='text' name='userName' id='userName'><br>
Password&nbsp;&nbsp;&nbsp;<input type='text' name='password' id='password'><br>
 <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
<input type='submit' id='submit1' >


	<br>
	<br>
	<br>
	</form>
		<?php //echo form_close(); ?>


<div class="col-md-12">
			<div id='showinout'>
			<table class="table table striped" style>
			<thead>
				<tr>
					<th>ID</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Username</th>
					<th>Password</th>
					<th>Usertype</th>
					<th>Edit</th>
					<th>Delete</th>
					
				</tr>
			</thead>

			<tbody id='showdata'>
			<?php if (isset($users)) : foreach($users as $row) : ?>
				<tr>
				<?php  
					$id=$row->userId;
				?>

						<td><?php echo $row->userId; ?></td>
						<td><?php echo $row->firstName; ?></td>
						<td><?php echo $row->lastName; ?></td>
						<td><?php echo $row->userName; ?></td>
						<td><?php echo $row->password; ?></td>
						<td><?php echo $row->userType; ?></td>
					
						<td><?php echo anchor("register/edit_user/$row->userId",
					"<php echo '<div class='btn btn-primary'>Edit </div>"); ?></td>	

				
					 <td> <button class="btnupdate" id="<?php echo $row->userId; ?>">View</button></td>	

					<td><?php echo anchor("register/delete_user/$row->userId",
					"<php echo '<div class='btn btn-primary'>Delete </div>"); ?>			
					</td>	
					
				</tr>
			</tbody>
			<?php endforeach ?>
		</table>
			</div>
		
		
	
	<?php else : ?>
		<h2>No tickets were returned.</h2>
	<?php endif; ?>



	

</div>



</div>




<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js">
</script>

<script>
/*
    $(document).on('click','#submit1',function(){
      //alert();
      url = "<?php echo site_url('register/add_user')?>";

      var firstName=$('#firstName').val();
      var lastName=$('#lastname').val();
      var userName=$('#userName').val();
      var password=$('#password').val();
                
alert(firstName);
    $.ajax({
    url : url,
    type: "POST",
    data : {firstName:firstName, lastName:lastName, userName:userName, password:password},
    success: function(data)
    {
    	  alert(firstName);
    },
    error: function(data)
    {
    	alert("error");
    }

})

    });


*/
</script>


<script>
/*
function save()
{
   
        url = "<?php echo site_url('register/add_user')?>";
  
    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
 
           // alert('success');
            location.reload();
 	
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
          
 
        }
    });
}
 */
</script>

<p>This is a paragraph.</p>

<script>



$('#form').submit(function(e)
{
event.preventDefault();
  url = "<?php echo site_url('register/add_user')?>";

 $.ajax({
     type: 'POST',
     url: url,
     data: $("#form").serialize(),
     dataType: "JSON",
     success: function(data) {
     	 //$("p").append("<td><?php echo $row->userId; ?></td>");
     	 //$("p").append("<td><?php echo $row->firstName; ?></td>");
     	 	showAll();
     	 	//alert("aw");

     }
   });
});
</script><div id="display"></div>



<script>
url = "<?php echo site_url('register/add_user')?>";

	 $(document).on('click', '.btnTimeOut', function(){
    var id = $(this).attr('userId');
    $.ajax({
      url: url,
      type: 'POST',
      dataType: 'JSON',
      data: {'userId' : id},
      success: function(data){
          	//showAll();
      }
    });
  });



</script>



<script>
/*
function save()
{
   
        url = "<?php echo site_url('register/add_user')?>";
  
    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
 
           // alert('success');
            location.reload();
 	
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
          
 
        }
    });
}
 */


 $(function(){
 	showAll();

 	function showAll()
 	{

 		$.ajax({
 			type: 'ajax',
 			url: "<?php echo site_url('register/view_user_ajax')?>",
 			async: false,
 			dataType: 'json',
 			success: function(data){
 			//alert("success");
 			//alert(data.firstName);
 			 var html='';
 			for(var i=0;i<data.length;i++)
 			{
 				  $("p").append(data[i].userName);

 				 html+='<tr'+
 				 '<td>'+data[i].userId+'</td>'+
 				  '<td>'+data[i].firstName+'</td>'+
 				   '<td>'+data[i].lastname+'</td>'+
 				    '<td>'+data[i].userName+'</td>'+
 				     '<td>'+data[i].password+'</td>'+
 				     '< a href="">Edit</a>'

 				     '</tr>';
 		
 

 			}
 			},
 			error: function(){
 				alert("error");
 			}
 		});
 	}

 });
</script>