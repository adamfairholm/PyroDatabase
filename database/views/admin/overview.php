<section class="title">
	<h4><?php echo lang('pyrodb.database'); ?></h4>
</section>

<section class="item">
		
	<table class="table-list">
		<tbody>
			<tr>
				<td><?php echo lang('pyrodb.mysql_version'); ?></td>
				<td><?php echo mysql_get_client_info(); ?></td>
			</tr>
			<tr>
				<td><?php echo lang('pyrodb.mysql_host'); ?></td>
				<td><?php echo mysql_get_host_info(); ?></td>
			</tr>
			<tr>
				<td><?php echo lang('pyrodb.db_encoding'); ?></td>
				<td><?php echo mysql_client_encoding(); ?></td>
			</tr>
			<tr>
				<td><?php echo lang('pyrodb.mysql_protocol'); ?></td>
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
	
</div><!--item-->