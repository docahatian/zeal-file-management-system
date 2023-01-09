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


<!--?php include ('admin/content.php')?------->
<div class = "content" >
	   <!-- Services Section -->
	   <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-screwdriver-wrench fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Service 3</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-gear fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Service 1</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-toolbox fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Service 2</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </section>
  
    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, omnis nemo reiciendis porro amet est sed ad eligendi possimus ex voluptate, numquam quam fugit hic ratione quod dolor optio enim.
			Laudantium explicabo tempore temporibus officia ipsum unde odio neque! Voluptates culpa dolor explicabo in velit pariatur officiis, ipsa hic voluptas blanditiis doloribus reiciendis soluta beatae corrupti deleniti. Officia, maiores ipsa?
			Omnis, architecto aut neque ipsum et rem eaque. Ad et tenetur, maxime sequi nobis quisquam possimus doloremque vitae, quis at reiciendis nihil magni voluptas suscipit repudiandae, molestias enim expedita. Quidem!
			Quae consectetur aliquam qui officiis nesciunt voluptate quis magni eligendi ut expedita. Similique soluta beatae doloremque dolor distinctio modi minus eius iure corporis. Nam temporibus molestias commodi quae. Veniam, sapiente!
			Unde repudiandae, debitis quas impedit dignissimos, saepe nobis optio expedita doloribus fugit perspiciatis nemo? Vel esse iure quia perspiciatis quis asperiores quo labore consectetur quos deserunt. Architecto cum nulla eius!
	   </p>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur omnis quo nesciunt! Pariatur veritatis, ut rem, non autem omnis ab in esse tempore dolorem enim? Eligendi libero numquam voluptates labore!
			Fugit magni atque reprehenderit aspernatur, alias placeat distinctio illo dolor optio animi nihil, doloremque ex nulla ipsam exercitationem eius dolorum deserunt officiis provident debitis tenetur enim et voluptatum. Vel, accusamus.
			Modi, praesentium eveniet minima pariatur at nihil quam ad ullam iure aut iusto sint inventore dolor. Voluptatibus porro sint nulla, id, dolores quisquam accusamus quae eveniet aliquam assumenda modi esse?
			Asperiores inventore eum praesentium officiis impedit optio! Quia a odio laudantium quae similique. Earum autem modi esse eius voluptates quis accusantium expedita sunt consequuntur molestias. Ipsum omnis itaque natus minus?
			Nisi hic illo magni itaque quos reiciendis numquam dicta neque dolor. Quis voluptates nulla facere sed quas tempora dolorem? Dolorum est eaque eius porro corporis eum soluta reiciendis. Itaque, nemo?
	    </p>
                </div>
            </div>
        </div>
    </section>
  
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
        </div>
    </section>
   
</div> 

<?php include ('admin/footer.php')?>
<script  src="admin/js/nav.js"></script>	
</body>

</html>

