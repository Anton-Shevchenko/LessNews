<div class="row">
	<table>
		<tr>
			<th>Uid</th>
			<th>Name</th>
			<th>Age</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Gender</th>
		</tr>
		<?php if ($users): ?>
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
		<?php else: ?>
			<tr>
				<th colspan="6">No data available in table</th>
			</tr>
		<?php endif; ?>
	</table>
</div>
