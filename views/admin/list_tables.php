<section class="title">
	<h4><?php echo lang('pyrodb:db_tables'); ?></h4>
</section>

<section class="item">
	
	<?php echo form_open('admin/database/tables'); ?>
		
	<table class="table-list">
		<thead>
			<tr>
				<th width="15"><?php echo form_checkbox('tables_all', '', '', 'class="check-all"');?></th>
				<th><?php echo lang('pyrodb:table_name'); ?></th>
				<th><?php echo lang('pyrodb:engine'); ?></th>
				<th><?php echo lang('pyrodb:rows'); ?></th>
				<th><?php echo lang('pyrodb:size'); ?></th>
				<th><?php echo lang('pyrodb:comment'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($tables as $table): ?>
			<tr>
				<td><?php echo form_checkbox('action_to[]', $table->Name);?></td>
				<td><?php echo anchor('admin/database/tables/table/'.$table->Name, $table->Name); ?></td>
				<td><?php echo $table->Engine; ?></td>
				<td><?php echo number_format($table->Rows); ?></td>
				<td><?php echo byte_format($table->Data_length);?></td>
				<td><?php echo $table->Comment; ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
		
	<div class="table_action_buttons">

		<br>
		
		<button type="submit" name="repair" value="Repair Tables" class="btn blue" /><span>Repair Tables</span></button>
		<button type="submit" name="optimize" value="Optimize Tables" class="btn blue" /><span>Optimize Tables</span></button>
		
	</div><!--.table_action_buttons-->

	</form>

</section><!--.item-->
