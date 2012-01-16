      <div class="content">
        <div class="page-header">
          <h1>CI KickStart <small>CodeIgniter + Tank Auth + Bootstrap</small></h1>
        </div>
        <div class="row">
          <div class="span10">

<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = 'Email or login';
} else {
	$login_label = 'Email';
}
?>
<?php echo form_open($this->uri->uri_string()); ?>
<table>
	<tr>
		<td><?php echo form_label($login_label, $login['id']); ?></td>
		<td><?php echo form_input($login); ?></td>
		<td style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></td>
	</tr>
	<tr>
		<td></td><td><?php echo form_submit('reset', 'Get a new password'); ?></td><td></td>
	</tr>
</table>
<?php echo form_close(); ?>

          </div>
        </div>
      </div>
