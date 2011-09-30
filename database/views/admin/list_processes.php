<section class="title">
	<h4><?php echo lang('pyrodb.db_processes'); ?></h4>
</section>
	
<section class="item">

	<table class="table-list">
		<thead>
			<tr>
				<th><?php echo lang('pyrodb.user');?></th>
				<th><?php echo lang('pyrodb.host');?></th>
				<th><?php echo lang('pyrodb.command');?></th>
				<th><?php echo lang('pyrodb.time');?></th>
				<th><?php echo lang('pyrodb.state');?></th>
				<th><?php echo lang('pyrodb.info');?></th>
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
	
</section><!--.item-->

