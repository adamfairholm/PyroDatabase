<?php echo form_open(uri_string()); ?>

	<p><textarea id="html_editor" cols="150" rows="10" name="query_window"><?=$query_string;?></textarea></p>

<?php echo form_submit('query', 'Query'); ?>

<?php echo form_close(); ?>

<?php if( $query_run ): ?>

<br />

<section class="box">

	<header>
		<h3>Query Results</h3>
	</header>
	
	<table class="table-list">
		<?php if( $mysql_result_error ): ?>
		<tbody>
			<td><?php echo $mysql_result_error; ?></td>
		</tbody>
		<?php else: ?>
		<thead>
			<tr>
			<?php $keys = array(); foreach( $results[0] as $key => $result ): ?>
				<th><?php echo $keys[] = $key; ?></th>
			<?php endforeach; ?>
			</tr>
		</thead>
		<tbody>
			<?php foreach( $results as $result ): ?>
			<tr>
			<?php foreach( $keys  as $key ): ?>
				<td><?php echo $result[$key]; ?></td>
			<?php endforeach; ?>
			</tr>			
			<?php endforeach; ?>
		</tbody>
		<?php endif; ?>
	</table>
	
</section><!--box-->

<?php endif; ?>
