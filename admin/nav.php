<!-- 
Following Tania Ruscia's tutorial on creating your own responsive dropdown navigation bar. https://www.taniarascia.com/responsive-dropdown-navigation-bar/
-->
<section class="navigation">
<div class = "logo">
    <img src="css/img/zeal.jpg" alt="logo" height = "80px" width = "200px">
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
        <li><a href="#!">About</a></li>
        <li><a href="#!">Courses Offered</a>
          <ul class="nav-dropdown">
            <li><a href="#!">SMAW NCII</a></li>
            <li><a href="#!">Machining NCII</a></li>
          </ul>
        </li>
         
        <li><a href="#!">Contact</a></li>
      </ul>
    </nav>
  </div>
</section>