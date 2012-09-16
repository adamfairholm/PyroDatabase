<section class="title">
	<h4>Export</h4>
</section>

<section class="item">

	<?php echo form_open('admin/database/export'); ?>

	<form action="<?php echo site_url('admin/database/export'); ?>" method="post">

	<table>

		<tr>
			<td><strong><?php echo lang('pyrodb:file_format'); ?></strong></td>
			<td><?php echo form_dropdown('format', $file_formats); ?></td>
		</tr>

		<tr>
			<td><strong><?php echo lang('pyrodb:filename'); ?></strong><br><small><?php echo lang('pryodb:filename_instructions'); ?><small></td>
			<td><input type="text" name="filename" /></td>
		</tr>

		<tr>
			<td><strong><?php echo lang('pyrodb:include_drop'); ?></strong></td>
			<td><?php echo form_dropdown('add_drop', $true_false); ?></td>
		</tr>

		<tr>
			<td><strong><?php echo lang('pyrodb:include_insert'); ?></strong></td>
			<td><?php echo form_dropdown('add_insert', $true_false); ?></td>
		</tr>		

		<tr>
			<td><strong><?php echo lang('pyrodb:newline'); ?></strong></td>
			<td><?php echo form_dropdown('newline', $newlines); ?></td>
		</tr>		

	</table>

	<h4><?php echo lang('pyrodb:tables'); ?></h4>

	<table class="table-list">
		<thead>
			<tr>
				<th><?php echo form_checkbox('tables_all', '', '', 'class="check-all"');?>&nbsp;&nbsp;<?php echo lang('pyrodb:table_name'); ?></th>
				<th><?php echo lang('pyrodb:rows'); ?></th>
				<th><?php echo lang('pyrodb:size'); ?></th>
				<th><?php echo lang('pyrodb:comment'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($tables as $table): ?>
			<tr>
				<td><label><?php echo form_checkbox('action_to[]', $table->Name);?>&nbsp;&nbsp;<?php echo $table->Name; ?></td>
				<td><?php echo number_format($table->Rows); ?></td>
				<td><?php echo byte_format($table->Data_length);?></td>
				<td><?php echo $table->Comment; ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<p><input type="submit" class="btn blue" value="<?php echo lang('pyrodb:export'); ?>" /></p>

	</form>

</section>