<?php
require_once('helper.php');

$messages =getMessages();
$count = count($messages);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $subtitle; ?>" />
	<meta name="keywords" content="<?php echo $subtitle; ?>" />
	<meta name="author" content="zuhriutama.com" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="<?php echo $title ?> <?php echo $subtitle ?>"/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<style>
		.title {
			font-family: "Sacramento", Arial, serif;
		}

		.disclaimer {
			font-size:0.6em;
		}
	</style>

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="index.php">Undangan<strong>.</strong></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li><a href="#fh5co-couple">Calon Mempelai</a></li>
						<li><a href="#fh5co-event">Acara Spesial</a></li>
						<li><a href="#fh5co-couple-story">Cerita Kami</a></li>
						<li><a href="#fh5co-gallery">Galeri</a></li>
						<li><a href="#fh5co-testimonial">Doa dan Ucapan</a></li>
						<li><a href="#fh5co-started">Buku Tamu</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover" role="banner" 
	style="background-image:url(<?php echo $hero['image'] ?>);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1><?php echo $hero['title'] ?></h1>
							<h2><?php echo $hero['desc'] ?></h2>
							<div class="simply-countdown simply-countdown-one"></div>
							<p><a href="<?php echo $hero['link_url'] ?>" target="_blank" class="btn btn-default btn-sm"><?php echo $hero['link_button'] ?></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-couple">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Bismillaahirrahmaanirrahiim!</h2>
					<h3>Assalaamu'alaikum Warahmatullaahi Wabarakaatuh</h3>
					<p>Perkenankanlah kami menikah:</p>
				</div>
			</div>
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="<?php echo $images['groom'] ?>" alt="groom" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3><?php echo $groom['name'] ?></h3>
						<p><?php echo $groom['desc'] ?></p>
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="<?php echo $images['bride'] ?>" alt="groom" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3><?php echo $bride['name'] ?></h3>
						<p><?php echo $bride['desc'] ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-event" class="fh5co-bg" 
	style="background-image:url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>hadiri dan doakan kami di:</span>
					<h2>Acara Spesial</h2>
				</div>
			</div>
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3><?php echo $event1['title']; ?></h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span><?php echo $event1['time']; ?></span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span><?php echo $event1['date']; ?></span>
									</div>
									<p><?php echo $event1['place']; ?></p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3><?php echo $event2['title']; ?></h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span><?php echo $event2['time']; ?></span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span><?php echo $event2['date']; ?></span>
									</div>
									<p><?php echo $event2['place']; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-counter" class="fh5co-bg animated" style="background-image:url(images/img_bg_5.jpg);">
		<div class="container">
			<div class="row">
					<div class="col-md-8 pt-4 col-md-offset-2 text-center fh5co-heading animate-box">
						<h2>Lokasi</h2>
					</div>
					<div class="col-12">
						<?php echo $google_map_embed_link ?>
					</div>
				</div>
		</div>
	</div>

	<div id="fh5co-couple-story">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>perjalanan ini</span>
					<h2>Cerita Kami</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline animate-box">
						<?php for($i=0;$i<count($timelines);$i++): ?>
						<li class="<?php echo $i%2==0?'timeline':'timeline-inverted' ?> animate-box">
							<div class="timeline-badge" 
							style="background-image:url('<?php echo $timelines[$i]['image'] ?>');"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title"><?php echo $timelines[$i]['title'] ?></h3>
									<span class="date"><?php echo $timelines[$i]['date'] ?></span>
								</div>
								<div class="timeline-body">
									<p><?php echo $timelines[$i]['desc'] ?></p>
								</div>
							</div>
						</li>
						<?php endfor; ?>
			    	</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-gallery" class="fh5co-section-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>Galeri</span>
					<h2>Momen Spesial</h2>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-gallery-list">
						<?php foreach($galleries as $gallery): ?>
						<li class="one-third animate-box" data-animate-effect="fadeIn" 
						style="background-image: url('<?php echo $gallery; ?>'); "> 
						</li>
						<?php endforeach; ?>
					</ul>		
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-testimonial">
		<div class="container">
			<div class="row">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<span>kumpulan pesan</span>
						<h2>Doa dan Ucapan</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="wrap-testimony">
							<div class="owl-carousel-fullwidth">
								<?php for($i=0;$i<$count;$i++){ ?>
								<div class="item">
									<div class="testimony-slide <?php echo $i==0?'active':'' ?> text-center">
										<h3><?php echo $messages[$i][1] ?>, <a class="twitter"><?php echo $messages[$i][2] ?></a></h3>
										<blockquote>
											<p>"<?php echo $messages[$i][3] ?>"</p>
										</blockquote>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<?php if(isset($_GET['message'])){ ?>
						<h2>Terima Kasih</h2>
						<p>doa dan ucapan anda sangat berarti bagi kami.</p>
					<?php }else{ ?>
						<h2>Buku Tamu</h2>
						<p>Silahkan kirimkan doa dan ucapan yang terbaik untuk kami.</p>
					<?php } ?>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-10 col-md-offset-1">
					<form class="form-inline" action="store.php" method="post">
						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label for="name" class="sr-only">Nama</label>
								<input type="text" class="form-control" name="name" placeholder="Nama" required>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label for="place" class="sr-only">Asal</label>
								<input type="text" class="form-control" name="place" placeholder="Asal/Tempat Kerja/Sekolah" required>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="place" class="sr-only">Ucapan</label>
								<textarea class="form-control" name="message" placeholder="Ucapan dan doa untuk kami" required></textarea>
							</div>
						</div>
						<div class="col-sm-12 text-center">
							<button type="submit" class="btn btn-default btn-block">Kirim</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<audio id="backsound" autoplay loop controls>
					<source src="<?php echo $backsound_music; ?>" type="audio/mp3">
					Your browser does not support the audio element.
					</audio>
					<p>
						<small class="block">&copy; 2022 Created by Zuhri Utama. All Rights Reserved.</small> 
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<div class="modal fade" id="modal" tabindex="-1" role="dialog" data-keyboard=false>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<?php if(isset($_GET['message'])): ?>
			<div class="modal-body text-center">
				<h1 class="title">Terima Kasih</h1>
				<h3>atas doa dan ucapan yang diberikan.</h3>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary mx-auto" data-dismiss="modal">Tutup</button>
			</div>
			<?php else: ?>
			<div class="modal-body text-center">
				<h1 class="title"><?php echo $title ?></h1>
				<h3 class="title"><?php echo $subtitle ?></h3>
				<?php if(isset($_GET['to']) && isset($_GET['place'])) { ?>
				<p><?php echo clean_text($_GET['to']) ?> <br/>di<br/> <?php echo clean_text($_GET['place']) ?></p>
				<p class="disclaimer">* mohon maaf jika ada kesalahan penulisan nama atau gelar</p>
				<?php } ?>
				<img src="<?php echo $images['popup'] ?>" class="img-responsive"/>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary mx-auto" data-dismiss="modal">Buka Undangan</button>
			</div>
			<?php endif; ?>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js?v=1.0.0"></script>

	<script>
		var d = new Date('<?php echo $countdown; ?>');

		// default example
		simplyCountdown('.simply-countdown-one', {
			year: d.getFullYear(),
			month: d.getMonth() + 1,
			day: d.getDate()
		});
	</script>
	<script>
		$( document ).ready(function() {
			$('#modal').modal('toggle')
		});

		$('#modal').on('hidden.bs.modal', function (e) {
			const audio = document.querySelector("audio");
			audio.volume = 0.5;
			audio.play();
		})
	</script>
	</body>
</html>

