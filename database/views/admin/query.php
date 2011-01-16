<?php echo form_open(uri_string()); ?>

	<p><textarea id="html_editor" cols="150" rows="10" name="query_window"></textarea></p>

<?php $this->load->view('admin/partials/buttons', array('buttons' => array('query') )); ?>

<?php echo form_close(); ?>