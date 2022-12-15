<div id="login-form-wrap">
  <h2>Administrator</h2>
  <form id="login-form" method="POST">
    <p>
    <input type="text" id="username" name="username" placeholder="Username" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="text" id="password" name="password" placeholder="Password" required><i class="validation"><span></span><span></span></i>
    </p>
	<?php include 'login_query.php'?>
    <p>
    <input type="submit" id="login" name = "login" value="Login">
    </p>
  </form>
  <div id="create-account-wrap">
    
  </div><!--create-account-wrap-->
</div><!--login-form-wrap-->
<!-- partial -->
  
</body>
</html>









