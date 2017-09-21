<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CCECOMP UEFS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Favicon -->
    <link rel="icon" type="images/png" sizes="32x32" href="images/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<?php require_once("header.php") ?>

<body>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contato
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Contato</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDwzm6uxj4QMLcdn46d1RM7qX2pLr6J4AU&v=3.exp'></script>
                <div style='overflow:hidden;height:440px;width:700px;'>
                    <div id='gmap_canvas' style='height:440px;width:700px;'></div>
                    <div><small><a href="http://www.googlemapsgenerator.com/pt/">Incorporar um mapa do Google em seu site</a></small></div>
                    <div><small><a href="https://termsandconditionsgenerator.com/">termsandconditionsgenerator.com</a></small></div>
                    <style>
                        #gmap_canvas img {
                            max-width: none!important;
                            background: none!important
                        }
                    </style>
                </div>
                <script type='text/javascript'>
                    function init_map() {
                        var myOptions = {
                            zoom: 16,
                            center: new google.maps.LatLng(-12.1981876, -38.97188540000002),
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };
                        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                        marker = new google.maps.Marker({
                            map: map,
                            position: new google.maps.LatLng(-12.1981876, -38.97188540000002)
                        });
                        infowindow = new google.maps.InfoWindow({
                            content: '<strong>CCECOMP UEFS</strong><br>Labotec 3 UEFS<br>'
                        });
                        google.maps.event.addListener(marker, 'click', function () {
                            infowindow.open(map, marker);
                        });
                        infowindow.open(map, marker);
                    }
                    google.maps.event.addDomListener(window, 'load', init_map);
                </script>
                <!-- Embedded Google Map -->
                <!-- <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe> -->
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contato</h3>
                <p><i class="fa fa-map-marker"></i>
                    <b>Endereço</b>: </br>
                    Colegiado do Curso de Engenharia de Computação </br>
                    LABOTEC III - SALA I8, UEFS </br>
                    Av. Transnordestina, S/N </br>
                    Bairro: Novo Horizonte </br>
                    CEP: 44036-900 </br>
                    Feira de Santana/BA </br>
                </p>
                <p><i class="fa fa-phone"></i>
                    <b>Tel/Fax</b>: +55 75 3161-8385</p>
                <p><i class="fa fa-envelope-o"></i>
                    <b>Email</b>: <a href="mailto:ccecomp@ecomp.uefs.br">ccecomp@ecomp.uefs.br</a>
                </p>
                <p><i class="fa fa-clock-o"></i>
                    <b>Horários de Funcionamento</b>: </br>
                    Segundas-Feiras das 13:00 às 19:00. </br>
                    Terças-Feiras das 7:00 às 13:00. </br>
                    Quartas-Feiras das 13:00 às 19:00. </br>
                    Quintas-Feiras das 7:00 às 13:00. </br>
                    Sextas-Feiras das 7:00 às 13:00. </br>
                </p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="http://www.facebook.com/ecompuefs"><i  class="fa fa-facebook-square fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-3x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
          	<section style="background-color:#f0ad4e;border-radius:10px;padding:10px;"  id="footer">

				<div class="inner " >
					<header>
						<h2 style="color:white">Deixe-nos uma mensagem</h2>
					</header>
					<form method="post" action="#">
						<div class="field half first">
							<label style="color:white"for="name">Nome</label>
							<input class="form-control" type="text" name="name" id="name" />
						</div>
						<div class="field half">
							<label style="color:white" for="email">Email</label>
							<input  class="form-control"type="text" name="email" id="email" />
						</div>
						<div class="field">
							<label style="color:white" for="message">Mensagem</label>
							<textarea class="form-control"rows="20"name="message" id="message" rows="6"></textarea>
						</div>
						<ul class="actions">
							<li><input class="btn btn-primary" type="submit" value="Enviar Mensagem" class="alt" /></li>
						</ul>
					</form>
				</div>
			</section>

        <!-- /.row -->

        <hr>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <?php require_once("footer.php") ?>

</body>

</html>
