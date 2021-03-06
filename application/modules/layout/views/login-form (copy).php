<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sutrixmedia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
  <body>
    <form class="form-horizontal form-login" action="<?php print $action;?>" method="post">
      <fieldset>
        <legend>System Login</legend>
        <div class="control-group">
          <div class="controls">
            <div class="input-prepend">
              <span class="add-on"><i class="icon-envelope"></i></span><input class="span3" id="frm-login-email" type="text" placeholder="Email">
            </div>
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <div class="input-prepend">
              <span class="add-on"><i class="icon-lock"></i></span><input class="span3" id="frm-login-password" type="password" placeholder="Password" >
            </div>
          </div>
        </div>                 
      </fieldset>
      <div class="form-actions">
        <button type="submit" class="btn btn-primary" data-loading-text="loading..." id="form-login-btnLogin">Login</button>
      </div>      
    </form>
    <script src="assets/js/jquery-1.7.2.min.js"></script>    
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
      $('.form-login').css({
        'margin-left':-($('.form-login').outerWidth()/2),
        'margin-top':-($('.form-login').outerHeight()/2)
      });
      $(window).resize(function () {
        $('.form-login').css({
          'margin-left':-($('.form-login').outerWidth()/2),
          'margin-top':-($('.form-login').outerHeight()/2)
        });
      });      
      $('#form-login-btnLogin')
      .click(function () {
        var btn = $(this)
        btn.button('loading');
        setTimeout(function () {                 
          btn.button('reset');
        }, 3000)
      });
    </script>    
  </body>
</html>
