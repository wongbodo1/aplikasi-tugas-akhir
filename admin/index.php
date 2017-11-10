<?php
ERROR_REPORTING(0);
include "../koneksi.php"; //koneksi ke database

session_start();
if(isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "") {
}
else{

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
    <link href="../assets/js/dataTables/css/dataTables.bootstrap.css" rel="stylesheet">	
    <link href="../assets/css/datepicker.min.css" rel="stylesheet">	
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
	<style type="text/css">
      body {
        padding-top: 10px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

  
  </head>

  <body >
 
    <div class="container well" style="width: 1200px"

     

        <!-- Carousel
        ================================================== -->
         
		 <div id="myCarousel" class="carousel slide">
          <div class="carousel-inner">
            <div class="item active" style="height:250px;">
              <img src="../assets/img/examples/slide-01.jpg" alt="">
              <div class="container">
                <div class="carousel-caption">
                  
                  
                </div>
              </div>
            </div>
            <div class="item" style="height:250px;">
              <img src="../assets/img/examples/slide-02.jpg" alt="">
              <div class="container">
                <div class="carousel-caption">
                  <!--
					  <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					  <a class="btn btn-large btn-primary" href="#">Learn more</a>-->
				 
                </div>
              </div>
            </div>
            <div class="item" style="height:250px;">
              <img src="../assets/img/examples/slide-03.jpg" alt="">
              <div class="container">
                <div class="carousel-caption">
                  
                  <!-- 
					  <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					  <a class="btn btn-large btn-primary" href="#">Learn more</a> -->
				 
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
		
		<!-- /.carousel -->
         <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="navbar navbar-inverse ">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
				<li><a href="./?lihat=input-judul"><img src="../assets/img/icons/essen/32/archives.png" alt="archives">Pendaftaran Judul TA</a></li><li>
				<li><a href="./?lihat=input-proposal"><img src="../assets/img/icons/essen/32/archives.png" alt="archives">Pendaftaran Proposal TA</a></li><li>
					<a href="./?link=kelompokredo">
						<img src="../assets/img/d.png" alt="Nama kelompok">
						<span>Daftar Kelompok</span>
					</a>
				</li> 
				
					<li>
					<a href="logout.php">
						<img src="../assets/img/o.png" alt="">
						<span>Logout </span>
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
					if($_GET['lihat']=='input-judul'){
						include "pages/input-judul.php";
					}elseif($_GET['lihat']=='input-proposal'){
						include "pages/input-proposal.php";
					}
					elseif($_GET['link']=='bukuredo'){
						include "modul/bukutamu.php";
					}elseif($_GET['link']=='kelompokredo'){
						include "modul/daftar.php";
					}else{
						echo "
						<legend>Selamat Datang $_SESSION[nama]</legend>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam quis turpis eu libero varius vestibulum. In feugiat. Sed et turpis ac risus aliquet rhoncus. Nam cursus molestie metus. Aliquam ac neque nec leo condimentum lobortis.Donec mollis congue mauris. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent sagittis. In porttitor elit sit amet tellus.Pellentesque dignissim iaculis augue. Aenean magna.</p>   
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam quis turpis eu libero varius vestibulum. In feugiat. Sed et turpis ac risus aliquet rhoncus. Nam cursus molestie metus. Aliquam ac neque nec leo condimentum lobortis.Donec mollis congue mauris. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent sagittis. In porttitor elit sit amet tellus.Pellentesque dignissim iaculis augue. Aenean magna.</p>          
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam quis turpis eu libero varius vestibulum. In feugiat. Sed et turpis ac risus aliquet rhoncus. Nam cursus molestie metus. Aliquam ac neque nec leo condimentum lobortis.Donec mollis congue mauris. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent sagittis. In porttitor elit sit amet tellus.Pellentesque dignissim iaculis augue. Aenean magna.</p>          
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam quis turpis eu libero varius vestibulum. In feugiat. Sed et turpis ac risus aliquet rhoncus. Nam cursus molestie metus. Aliquam ac neque nec leo condimentum lobortis.Donec mollis congue mauris. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent sagittis. In porttitor elit sit amet tellus.Pellentesque dignissim iaculis augue. Aenean magna.</p>          
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam quis turpis eu libero varius vestibulum. In feugiat. Sed et turpis ac risus aliquet rhoncus. Nam cursus molestie metus. Aliquam ac neque nec leo condimentum lobortis.Donec mollis congue mauris. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent sagittis. In porttitor elit sit amet tellus.Pellentesque dignissim iaculis augue. Aenean magna.</p>";
					}
				?>
			         
			</div>		
        </div>        
      </div>


      <footer class="well">

		<div><center>Copyright: SMA Negeri QMC &copy; 2013.</div>
      </footer>
    
</div> <!-- /container -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
    <script src="../assets/js/dataTables/js/jquery.dataTables.js"></script>
    <script src="../assets/js/dataTables/js/dataTables.bootstrap.js"></script>
    <script src="../assets/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript">
      $(function () {

        //datepicker plugin
        $('.date-picker').datepicker({
          autoclose: true,
          todayHighlight: true
        });

        // toolip
        $('[data-toggle="tooltip"]').tooltip();

        // datatables
        $('#dataTables-example').dataTable( {
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "pageLength": 10
        } );
      })
    </script>

  </body>
</html>

<?php
}
?>