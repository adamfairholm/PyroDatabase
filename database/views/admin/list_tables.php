<section class="title">
	<h4><?php echo lang('pyrodb.db_tables'); ?></h4>
</section>

<section class="item">
	
	<?php echo form_open('admin/database/tables'); ?>
		
	<table class="table-list">
		<thead>
			<tr>
				<th width="15"><?php echo form_checkbox('tables_all', '', '', 'class="check-all"');?></th>
				<th><?php echo lang('pyrodb.table_name'); ?></th>
				<th><?php echo lang('pyrodb.engine'); ?></th>
				<th><?php echo lang('pyrodb.rows'); ?></th>
				<th><?php echo lang('pyrodb.size'); ?></th>
				<th><?php echo lang('pyrodb.comment'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach( $tables as $table ): ?>
			<tr>
				<td><?php echo form_checkbox('tables[]', $table->Name);?></td>
				<td><?php echo anchor('admin/database/table/'.$table->Name, $table->Name); ?></td>
				<td><?php echo $table->Engine; ?></td>
				<td><?php echo number_format($table->Rows); ?></td>
				<td><?php echo byte_format($table->Data_length);?></td>
				<td><?php echo $table->Comment; ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
		
	<div class="buttons float-right">
		
		<button type="submit" name="repair" value="Repair Tables" class="button" /><span>Repair Tables</span></button>
		<button type="submit" name="optimize" value="Optimize Tables" class="button" /><span>Optimize Tables</span></button>
		
	</div>

	</form>

</section><!--.item-->
