<?php
	session_start();
	include "koneksi/ceksession.php";
?>
<html>
  <head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font/css/all.css">
    <link rel="icon" type="image/png" href="img/logo_bawas.png">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pesanhak.id</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
     <!-- Bootstrap Core CSS -->
    <link href="assets/cssa/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/cssa/modern-business.css" rel="stylesheet">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">

  </head>
  <body>
    <div class="wrapper">
      <?php include "header.php"; ?>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      	<!-- Carousel Indikator -->
        <ol class="carousel-indicators">
        	<li data-target="carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="carousel-example-generic" data-slide-to="1"></li>
        </ol>
        
        <!-- Wrapper for Slide -->
        <div class="carousel-inner">
        	<div class="item active">
            	<img src="images/ban1.jpg" alt="Slide 1">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
            	<img src="images/ban1.jpg" alt="Slide 1">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
        
        <!-- Control -->
        <a href="#carousel-example-generic" class="carousel-control left" data-slide="prev" role="button">
        	<span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#carousel-example-generic" class="carousel-control right" data-slide="next" role="button">
        	<span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
        <div class="container">
				<div class="row">
					<div class="col-md-12">
								<div class="col-lg-12">
									<div class="title-section style1">
										<h4 class="text-center" style="color:#333;"><b>Tiga Langkah Mudah</b></h4>
									</div>
									<div class="divider-item">
										<div class="divider-container">
											<div class="divider-line"></div>
										</div>
									</div>
								</div>
							<div class="col-md-4 col-sm-12 mb-6 text-center">
								<div class="card">
									<img src="images/1.jpg" class="card-img-top" alt="...">
						 
									<div class="card-body">
										<div class="card-title"><h4>Mudah Pesannya</h4></div>
									</div>
								</div>
							</div>
						 
							<div class="col-md-4 col-sm-6 mb-6 text-center">
								<div class="card">
									<img src="images/2.jpg" class="card-img-top" alt="...">
						 
									<div class="card-body">
										<div class="card-title"><h4>Cepat Antarnya</h4></div>
									</div>
								</div>
							</div>
						 
							<div class="col-md-4 col-sm-6 mb-6 text-center">
								<div class="card">
									<img src="images/3.jpg" class="card-img-top" alt="...">
						 
									<div class="card-body">
										<div class="card-title"><h4>Sesuai Pesanan</h4></div>
									</div>
							</div>
						</div>					
					</div>

        </div>
		</div>
      

      	<div class="container">
          <div class="row">
          <div class="col-md-6">
          	<div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Tentang Kami</h3>
                </div><!-- /.box-header -->
             	<div class="box-body">
                     
             		<table>
                     <tr>
                        <td>
                         <center> <a href="#"><img src="images/r.jpg" alt="Universitas Mulawarman"width='170'></a></center><br>
                        </td>
                        <td>
                        <p><strong>Kurir</strong> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </td>

                      </tr>
                      
	
                  </table>	
             	</div>
            </div>
			</div><!-- /.col -->
    
            <div class="col-md-6">
			              
              <!-- Custom Tabs (Pulled to the right) -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#tab_1-1" data-toggle="tab">Jemput</a></li>
                  <li><a href="#tab_2-2" data-toggle="tab">Antar</a></li>
                  <li><a href="#tab_3-2" data-toggle="tab">Sampai</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1-1">
                    <b>Jemput</b><br>
                    <img src="images/kr1.jpg" width="100%">
                    <p>Kurir akan mendatangi alamat dari pelanggan yang melakukan Order secepatnya setelah menerima order.</p>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2-2">
                    <b>Antar</b><br>
                    <img src="images/kr2.jpg" width="100%">
                    <p>Kurir akan mengantarkan barang pesanan anda sesuai dengan alamat tujuan yang tertera.</p>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3-2">
                    <b>Sampai</b><br>
                    <img src="images/kr3.jpg" width="100%">
                    <p>Barang yang telah dikirimkan melalui kurir kami akan sampai sesuai alamat tujuan dan tepat waktu.</p>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->
              
              
			</div><!-- /.col -->
    </div> <!-- /.row -->
  </div>
  <?php include "footer.php"; ?>

    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
  </body>
</html>
