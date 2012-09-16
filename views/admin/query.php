<section class="title">
	<h4><?php echo lang('pyrodb:query'); ?></h4>
</section>

<section class="item">

<?php echo form_open(uri_string()); ?>

	<p><textarea id="html_editor" cols="150" rows="10" name="query_window"><?php echo $query_string;?></textarea></p>

	<div class="buttons">
		
		<button type="submit" name="query" value="Query" class="btn blue" /><span><?php echo lang('pyrodb:run_query'); ?></span></button>
		
	</div><!--.buttons-->

	</form>

<?php if( $query_run ): ?>

</section>

<section class="title">
	<h4><?php echo lang('pyrodb:query_results'); ?></h4>
</section>

<section class="item">
	
<?php if ($mysql_result_error): ?>	

<p><?php echo $mysql_result_error; ?></p>
	
<?php elseif( $results ): ?>
	
<table class="table-list">
	<thead>
		<tr>
		<?php $keys = array(); foreach( $results[0] as $key => $result ): ?>
			<th><?php echo $keys[] = $key; ?></th>
		<?php endforeach; ?>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($results as $result): ?>
		<tr>
		<?php foreach ($keys as $key): ?>
			<td><?php echo $result[$key]; ?></td>
		<?php endforeach; ?>
		</tr>			
		<?php endforeach; ?>
	</tbody>
</table>

<?php else: ?>
	<p><?php echo lang('pyrodb:no_results'); ?></p>
<?php endif; ?>
	
</section><!--item-->

<?php endif; ?>
