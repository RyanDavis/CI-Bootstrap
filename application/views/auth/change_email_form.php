      <div class="content">
        <div class="page-header">
          <h1>CI KickStart <small>CodeIgniter + Tank Auth + Bootstrap</small></h1>
        </div>
        <div class="row">
          <div class="span10">

<?php
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
);
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
?>
<?php echo form_open($this->uri->uri_string()); ?>
<table>
	<tr>
		<td><?php echo form_label('Password', $password['id']); ?></td>
		<td><?php echo form_password($password); ?></td>
		<td style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></td>
	</tr>
	<tr>
		<td><?php echo form_label('New email address', $email['id']); ?></td>
		<td><?php echo form_input($email); ?></td>
		<td style="color: red;"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></td>
	</tr>
	<tr>
		<td></td><td><?php echo form_submit('change', 'Send confirmation email'); ?></td><td></td>
	</tr>
</table>

<?php echo form_close(); ?>

          </div>
        </div>
      </div>
