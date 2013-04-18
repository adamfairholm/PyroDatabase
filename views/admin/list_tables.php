<section class="title">
	<h4><?php echo lang('pyrodb:db_tables'); ?></h4>
</section>

<section class="item">
	<div class="content">
	
	<?php echo form_open('admin/database/tables'); ?>
		
	<table class="table-list" cellpadding="0" cellspacing="0">
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
		
		<button type="submit" name="repair" value="<?php echo lang('pyrodb:button_repair'); ?>" class="btn blue" /><span><?php echo lang('pyrodb:button_repair'); ?></span></button>
		<button type="submit" name="optimize" value="<?php echo lang('pyrodb:button_optimize'); ?>" class="btn blue" /><span><?php echo lang('pyrodb:button_optimize'); ?></span></button>
		
	</div><!--.table_action_buttons-->

	</form>

	</div>
</section><!--.item-->
