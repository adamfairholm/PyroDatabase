<section class="title">
	<h4>Export</h4>
</section>

<section class="item">

	<?php echo form_open('admin/database/export'); ?>

	<form action="<?php echo site_url('admin/database/export'); ?>" method="post">

	<table>

		<tr>
			<td><strong>File Format</strong></td>
			<td><?php echo form_dropdown('format', $file_formats); ?></td>
		</tr>

		<tr>
			<td><strong>Filename</strong><br><small>Only needed if you are exporting to zip.<small></td>
			<td><input type="text" name="filename" /></td>
		</tr>

		<tr>
			<td><strong>Include DROP TABLE statements</strong></td>
			<td><?php echo form_dropdown('add_drop', $true_false); ?></td>
		</tr>

		<tr>
			<td><strong>Include INSERT statements</strong></td>
			<td><?php echo form_dropdown('add_insert', $true_false); ?></td>
		</tr>		

		<tr>
			<td><strong>Newline</strong></td>
			<td><?php echo form_dropdown('newline', $newlines); ?></td>
		</tr>		

	</table>

	<h4>Tables</h4>

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

	<p><input type="submit" class="btn blue" value="Export" /></p>

	</form>

</section>