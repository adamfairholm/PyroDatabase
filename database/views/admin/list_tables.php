<section class="box">

	<header>
		<h3>Database Tables</h3>
	</header>
	
	<?php echo form_open('admin/database/tables'); ?>
		
	<table class="table-list">
		<thead>
			<tr>
				<th width="15"><?php echo form_checkbox('tables_all', '', '', 'class="check-all"');?></th>
				<th>Table Name</th>
				<th>Engine</th>
				<th>Rows</th>
				<th>Size</th>
				<th>Comment</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach( $tables as $table ): ?>
			<tr>
				<th><?php echo form_checkbox('tables[]', $table->Name);?></th>
				<td><?php echo anchor('admin/database/table/'.$table->Name, $table->Name); ?></td>
				<td><?php echo $table->Engine; ?></td>
				<td><?php echo $table->Rows; ?></td>
				<td><?php echo byte_format($table->Data_length);?></td>
				<td><?php echo $table->Comment; ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
	<?php echo form_submit('repair', 'Repair Tables'); ?> <?php echo form_submit('optimize', 'Optimize Tables'); ?>
	
	</form>
	
</section><!--box-->