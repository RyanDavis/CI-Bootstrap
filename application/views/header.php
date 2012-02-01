<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=site_name()?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/bootstrap.extra.css" rel="stylesheet">
  </head>

  <body>
    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="/"><?=site_name()?></a>
          <ul class="nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/welcome/secure">Secure</a></li>
          </ul>

<?php if (!$this->tank_auth->is_logged_in()) { ?>
          <form action="/auth/login" method="post" class="pull-right">
            <input class="input-small" type="text" name="login" maxlength="30" placeholder="Username">
            <input class="input-small" type="password" name="password" placeholder="Password">
            <button class="btn" type="submit">Sign in</button>
          </form>
<?php }else{ ?>
          <div class="pull-right">
            <span style="color:#888;">Logged in as <a href="/user/profile/"><?=$this->tank_auth->get_username()?></a>, <a href="/auth/logout/">Logout</a></span>
          </div>
<?php } ?>
        </div>
      </div>
    </div>

    <div class="container">
