<?php include('html_head_index_student.php')?>
		<!--tempate after head page ------->
		<title> ZFMS | Trainees Log-in </title>  
		</head>
		<!--tempate after head page ------->

<body>
<!--?php include ('nav_student.php')?------->
<section class="navigation">
<div class = "logo">
<img src="admin/css/img/tesda.jpeg" alt="logo" height = "80px" width = "80px">
    <img src="admin/css/img/zeal.jpg" alt="logo" height = "80px" width = "150px">
	</div>

  <div class="nav-container">
    <div class="brand">
      <a href="#!">File Management System</a>
    </div>
    <nav>
      <div class="nav-mobile">
        <a id="nav-toggle" href="#!"><span></span></a>
      </div>
      <ul class="nav-list">
        <!-- Setting the links to #! will ensure that no action takes place on click. -->
        <li><a href="index.php">Home</a></li>
        <li><a href="# about">About</a></li>
        
         <li><a href="#!">Tech-Voc Courses Offered</a>
          <ul class="nav-dropdown">
            <li><a href="coppy smaw .php !">SMAW NCII</a></li>
            <li><a href="coppy machine.php!">Machining NCII</a></li>
          </ul>
        </li>
        <li><a href="#!">Contact</a></li>
      </ul>
    </nav>
  </div>
</section>

<!--?php include ('login.php')?------->
<div id="login-form-wrap">
  <h2>Trainnees Log-in</h2>
  <form id="login-form" method="POST">
    <p>
    <input type="number" id="student no" name="stud_no" placeholder="Student Number" required><i class="validation"><span></span><span></span></i>
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
  

<?php include('admin/content.php')?>
<?php include ('admin/footer.php')?>
<script  src="admin/js/nav.js"></script>	
</body>

</html>

