<section class="box">

	<header>
		<h3>Database</h3>
	</header>
		
	<table class="table-list">
		<tbody>
			<tr>
				<td>MySQL Version</td>
				<td><?php echo mysql_get_client_info(); ?></td>
			</tr>
			<tr>
				<td>MySQL Host</td>
				<td><?php echo mysql_get_host_info(); ?></td>
			</tr>
			<tr>
				<td>Database Encoding</td>
				<td><?php echo mysql_client_encoding(); ?></td>
			</tr>
			<tr>
				<td>MySQL Protocol</td>
				<td><?php echo mysql_get_proto_info(); ?></td>
			</tr>
			<?php foreach( $stats as $stat => $value ): ?>
			<tr>
				<td><?php echo $stat; ?></td>
				<td><?php echo $stat == 'Uptime' ? gmdate("H:i:s", $value) : $value; ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
</div><!--box-->