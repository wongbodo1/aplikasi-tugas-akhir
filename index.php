<?php
include "koneksi.php";
ERROR_REPORTING(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sistem Informasi Tugas Akhir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sister Informasi Tugas Akhir">
    <meta name="author" content="Cahyo, Arizqi">

    <!-- Le styles -->
	
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	<style type="text/css">
      body {
		padding-top: 10px;
        padding-bottom: 40px;
      }
		.sidebar-nav {
        padding: 9px 0;
      }
		.dropdown {
		position: relative;
		display: inline-block;
	}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 260px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}

		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
		}

		.dropdown-content a:hover {background-color: #f1f1f1}

		.dropdown:hover .dropdown-content {
			display: block;
		}

		.dropdown:hover .dropbtn {
			background-color: #3e8e41;
		}
</style>
  
  </head>

  <body >
 
    <div class="container well" style="width: 1200px">

     

        <!-- Carousel
        ================================================== -->
         
		 <div id="myCarousel" class="carousel slide">
          <div class="carousel-inner">
            <div class="item active" style="height:250px;">
              <img src="assets/img/examples/slide-01.jpg" alt="">
              <div class="container">
                <div class="carousel-caption">
                  
                  
                </div>
              </div>
            </div>
            <div class="item" style="height:250px;">
              <img src="assets/img/examples/slide-02.jpg" alt="">
              <div class="container">
                <div class="carousel-caption">
				 
                </div>
              </div>
            </div>
            <div class="item" style="height:250px;">
              <img src="assets/img/examples/slide-03.jpg" alt="">
              <div class="container">
                <div class="carousel-caption">
                  
				 
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
		
      <div class="navbar navbar-inverse ">
          <div class="navbar-inner">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->            
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li >
					<a href="index.php" >
						<img src="assets/img/r.png" alt="Beranda">
						<span>Beranda</span>
					</a>
				</li>

			  <li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn"><img src="assets/img/icons/essen/32/archives.png" alt="archives">Informasi</a>
					<div class="dropdown-content">
						<a href="./?lihat=judul"><img src="assets/img/icons/essen/32/archives.png" alt="archives">Judul TA</a>
						<a href="./?lihat=proposal"><img src="assets/img/icons/essen/32/archives.png" alt="archives">Proposal TA</a>
						<a href="./?lihat=progress"><img src="assets/img/icons/essen/32/archives.png" alt="archives">Progress TA</a>
						<a href="./?lihat=jadwal"><img src="assets/img/icons/essen/32/archives.png" alt="archives">Jawal Sidang TA</a>
						<a href="./?lihat=kelulusan"><img src="assets/img/icons/essen/32/archives.png" alt="archives">Kelulusan TA</a>
					</div>
			  </li>

              
				<li>
					<a href="./?lihat=tentang">
						<img src="assets/img/icons/essen/32/consulting.png" alt="Tentang">
						<span>Tentang</span>
					</a>
				</li>  
				
					<li>
					<a href="login.php">
						<img src="assets/img/o.png" alt="">
						<span>Login</span>
					</a>
				</li>  
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->
      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span12">			
			<div class="span12 wellwhite">
			<?php
					if($_GET['lihat']=='judul'){
						include "pages/judul.php";
					}elseif($_GET['lihat']=='proposal'){
						include "pages/proposal.php";
					}elseif($_GET['lihat']=='progress'){
						include "pages/progress.php";
					}elseif($_GET['lihat']=='jadwal'){
						include "pages/jadwal.php";
					}elseif($_GET['lihat']=='kelulusan'){
						include "pages/kelulusan.php";
					}else{
						echo "asy";
					}
				?>         
			</div>		
        </div>        
      </div>


<footer id="ftr" style="position:fixed; left:0px; right:0px; bottom:0px; background:transparent); text-align:right;">
<font size="3" face="courier">&copy; Cahyo&Arizqi</a></font></footer>
    
</div> <!-- /container -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script> 
	<script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
