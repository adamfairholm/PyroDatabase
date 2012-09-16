<section class="title">
	<h4><a href="<?php echo site_url('admin/database/tables'); ?>"><?php echo lang('pyrodb:tables'); ?></a> &rarr; <?php echo $table_name; ?></h4>
</section>

<section class="item">

<table class="table-list">
	<thead>
		<tr>
			<th><?php echo lang('pyrodb.col_name'); ?></th>
			<th><?php echo lang('pyrodb.col_type'); ?></th>
			<th><?php echo lang('pyrodb.constraint'); ?></th>
			<th><?php echo lang('pyrodb.notes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($fields as $field): ?>
		<tr>
			<td><?php echo $field->name; ?></td>
			<td><?php echo $field->type; ?></td>
			<td><?php echo $field->max_length; ?></td>
			<td><?php if($field->primary_key == "1") { echo lang('pyrodb.primary_key'); } ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
	
</section><!--.item-->