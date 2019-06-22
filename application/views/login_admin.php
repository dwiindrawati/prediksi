<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Form Login</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="<?php echo base_url()."template_login/";?>css/style.css">
</head>

<body>
  <div class="container">
  <div class="login">
    <h1 class="login-heading">
      <strong>Welcome.</strong> Please login.</h1>
      <form method="post" action="<?php echo base_url('/Clogin_admin/aksi_login');?>">
        <input type="text" name="username" placeholder="Username" required="required" class="input-txt" />
          <input type="password" name="password" placeholder="Password" required="required" class="input-txt" />
          <div class="login-footer">
             <a href="#" class="lnk">
              <span class="icon icon--min"></span> 
              
            </a>
            <button type="submit" class="btn btn--right">Sign in  </button>
    
          </div>
      </form>
  </div>
</div>
  
    <script src="<?php echo base_url()."template_login/"; ?>js/index.js"></script>

</body>
</html>
