<!-- 
Following Tania Ruscia's tutorial on creating your own responsive dropdown navigation bar. https://www.taniarascia.com/responsive-dropdown-navigation-bar/
-->
<?php 
				$query = mysqli_query($conn, "SELECT * FROM `user` WHERE `user_id` = '$_SESSION[user]'") or die(mysqli_error());
				$fetch = mysqli_fetch_array($query);
?>

<section class="navigation">
   <div class = "logo">
    <img src="css/img/tesda.jpeg" alt="logo" height = "80px" width = "80px">
    <img src="css/img/zeal.jpg" alt="logo" height = "80px" width = "150px">
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
        <li><a href="home.php">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#!">Tech-Voc Courses Offered</a>
          <ul class="nav-dropdown">
            <li><a href="smaw.php">SMAW NCII</a></li>
            <li><a href="machine.php">Machining NCII</a></li>
          </ul>
        </li>
         <li><a href="#!">Account</a>
          <ul class="nav-dropdown">
            <li><a href="user.php">User</a></li>
            <li><a href="student.php">Student</a></li>
            <li><a href="files.php">Files</a></li>
          </ul>
        </li>
        <li><a href="#!">
		      <?php 
			     echo $fetch['firstname']." ".$fetch['lastname'];
		      ?>
		    </a>
	          <ul class="nav-dropdown">
                  <li><a href="logout.php">Logout</a></li>
            </ul>
        </li>
      </ul>
    </nav>
  </div>
</section>