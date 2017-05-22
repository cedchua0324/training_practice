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
</head>
<div class="container">
<div class="row">
	<div class="page-header"> <h1>HEHEEHE</h1> </div>


<div class="col-md-12">
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

			<tbody>
			<?php if (isset($users)) : foreach($users as $row) : ?>
				<tr>
						<td><?php echo $row->userId; ?></td>
						<td><?php echo $row->firstName; ?></td>
						<td><?php echo $row->lastName; ?></td>
						<td><?php echo $row->userName; ?></td>
						<td><?php echo $row->password; ?></td>
						<td><?php echo $row->userType; ?></td>
					
				</tr>
			</tbody>
			<?php endforeach ?>
		</table>

		
		
	
	<?php else : ?>
		<h2>No tickets were returned.</h2>
	<?php endif; ?>



	

</div>



</div>



