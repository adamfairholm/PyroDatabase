<section class="box">

	<header>
		<h3>Database Processes</h3>
	</header>
	
	<table class="table-list">
		<thead>
			<tr>
				<th>User</th>
				<th>Host</th>
				<th>Command</th>
				<th>Time</th>
				<th>State</th>
				<th>Info</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach( $processes as $process ): ?>
			<tr>
				<td><?php echo $process->User; ?></td>
				<td><?php echo $process->Host; ?></td>
				<td><?php echo $process->Command; ?></td>
				<td><?php echo gmdate("H:i:s", $process->Time); ?></td>
				<td><?php echo $process->State; ?></td>
				<td><?php echo $process->Info; ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
</section><!--box-->

