      <div class="content">
        <div class="page-header">
          <h1>My Profile <small> Registered User</small></h1>
        </div>
        <div class="row">
          <div class="span10">
            <p>Hi, <strong><?=$username?></strong>! Welcome to your personal profile page.</p>
            <p>Check the right sidebar for your account information.</p>
            <h2>My Feed</h2>
            <ul>
              <li>10/24/2011 - Account Created</li>
              <li>10/25/2011 - First Post</li>
            </ul>
          </div>
          <div class="span2">
            <h3>My Account</h3>
            <ul>
              <li><strong>Gravatar: </strong></li><li style="list-style:none;"><?=gravatar_image( $email )?></li>
              <li><strong>Username: </strong><?=$username?></li>
              <li><strong>User Id: </strong><?=$user_id?></li>
              <li><strong>Account Type: </strong><?=$role?></li>
              <li><strong>Email: </strong><?=$email?></li>
              <li style="list-style:none;"><?php echo anchor('/user/edit_profile/', 'Edit Profile'); ?></li>
              <li style="list-style:none;"><?php echo anchor('/auth/change_password/', 'Change Password'); ?></li>
              <li style="list-style:none;"><?php echo anchor('/auth/logout/', 'Logout'); ?></li>
            </ul>
          </div>
        </div>
      </div>

