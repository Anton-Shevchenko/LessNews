<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

<div class="row">
	<table id="results">
		<thead>
			<tr>
				<th>UID</th>
				<th>Name</th>
				<th>Age</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Gender</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($users as $user): ?>
			<tr>
				<td><?=$user['UID']?></td>
				<td><?=$user['Name']?></td>
				<td><?=$user['Age']?></td>
				<td><?=$user['Email']?></td>
				<td><?=$user['Phone']?></td>
				<td><?=$user['Gender']?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="../../../public/js/dataTable.js"></script>