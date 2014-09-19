<?php
	$meta = array(
		'desc' => "acts2fellowship is a Christian college fellowship with chapters in UC Berkeley, UC Los Angeles, University of Southern California, UC Irvine, UC Riverside, Cal State Pomona, UC San Diego, San Diego State University, UC Santa Barbara, University of Minnesota.",
		'keywords' => "berkeley, los angeles, la, southern california, sc, irvine, riverside, pomona, cpp, san diego, sd, minnesota, college, christian fellowship"
	);

	$est = array(
		'2014' => array(
			array(
				'title'=>'Irvine', 
				'prefix'=>'University of California', 
				'website'=>'http://www.a2firvine.org/', 
				'facebook'=>'', 
				'photo'=>'https://farm3.staticflickr.com/2924/14644552605_0681b0cc92_k.jpg',
				'offset' => 'top1'
			),
			array(
				'title'=>'San Diego', 
				'prefix'=>'State University', 
				'website'=>'http://www.a2fsdsu.org/#upcomingevents', 
				'facebook'=>'https://www.facebook.com/acts2fellowshipSDSU', 
				'photo'=>'https://farm4.staticflickr.com/3901/14943968890_d38176475d_k.jpg',
				'offset' => 'top2'
			),
			array(
				'title'=>'Santa Barbara', 
				'prefix'=>'University of California', 
				'website'=>'http://ucsb.acts2fellowship.org/', 
				'facebook'=>'', 
				'photo'=>'https://farm4.staticflickr.com/3873/15182180071_46f887453a_k.jpg',
				'offset' => 'top1'
			),
			array(
				'title'=>'Southern California', 
				'prefix'=>'University of', 
				'website'=>'https://www.facebook.com/Acts2FellowshipUSC', 
				'facebook'=>'', 
				'photo'=>'https://farm4.staticflickr.com/3918/14999363919_7d9dd96f15_k.jpg',
				'offset' => 'top2'
			),
			array(
				'title'=>'Pomona', 
				'prefix'=>'Cal Poly', 
				'website'=>'http://acts2fellowship.org/pomona/', 
				'facebook'=>'', 
				'photo'=>'https://farm4.staticflickr.com/3915/14801153827_c1c4153f48_k.jpg',
				'offset' => 'top1'
			)
		),
		'2013' => array(
			array(
				'title'=>'Los Angeles', 
				'prefix'=>'University of California', 
				'website'=>'http://acts2fellowship.org/losangeles/', 
				'facebook'=>'https://www.facebook.com/a2fucla', 
				'photo'=>'https://farm4.staticflickr.com/3916/14601630840_3699580005_k.jpg'
			)
		),
		'2010' => array(
			array(
				'title'=>'Minnesota', 
				'prefix'=>'University of', 
				'website'=>'http://minnesota.acts2fellowship.org/', 
				'facebook'=>'https://www.facebook.com/a2fminnesota', 
				'photo'=>'https://farm6.staticflickr.com/5192/14407164315_c08c02af87_k.jpg',
				'offset' => 'top2'
			),
			array(
				'title'=>'Riverside', 
				'prefix'=>'University of California', 
				'website'=>'http://www.acts2fellowship.org/riverside/', 
				'facebook'=>'https://www.facebook.com/a2friverside', 
				'photo'=>'https://farm8.staticflickr.com/7164/13987907292_fd2afa61d4_k.jpg',
				'offset' => 'top1'
			),
			array(
				'title'=>'San Diego', 
				'prefix'=>'University of California', 
				'website'=>'http://www.acts2fellowship.org/sandiego/', 
				'facebook'=>'https://www.facebook.com/acts2fellowshipUCSD', 
				'photo'=>'https://farm4.staticflickr.com/3878/14394389512_ce7aafbde4_k.jpg',
				'offset' => 'top1'
			)
		),
		'2006' => array(
			array(
				'title'=>'Berkeley', 
				'prefix'=>'University of California', 
				'website'=>'http://www.a2fberkeley.org/#welcome-to-acts2fellowship', 
				'facebook'=>'https://www.facebook.com/acts2fellowship', 
				'photo'=>'https://farm4.staticflickr.com/3878/15132433821_543cb8be13_k.jpg',
				'offset' => 'top2'
			)
		)
	);

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favicon.ico" />
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,400italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link href="favicon.ico" rel="shortcut icon">

	<meta name="description" content="<?php echo $meta['desc'] ?>" /> 
	<meta name="keywords" content="<?php echo $meta['keywords'] ?>" />

	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-97361-8']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

	<title>Welcome to acts2fellowship</title>
  
</head>

<body>

	<aside>
		<!-- @todo need @2x logo / retina -->
		<div class="logo">&nbsp;</div>
			<?php
			foreach($est as $year => $church) {
			?>
				<div class="box">
					<p class="year">Est. <?php echo $year?></p>
					<?php	
					foreach($church as $value) {
					?>
						<!-- @todo need to properly hash it; create function	 -->
						<a href="#<?php echo $value['prefix']?><?php echo $value['title']?>">
							<p class="prefix"><?php echo $value['prefix']?></p>
							<p class="title"><?php echo $value['title']?></p>
						</a>
					<?php
					}
					?>
		</div>
			<?php
			}
			?>
	</aside>

	<section>
		<div class="banner">
			<h1>Acts2Fellowship</h1>
			<hr />
			<p class="description">
				We're a Christian fellowship, a home-away-from-home, a place to forge life-long friendships and learn more about God.
				<br />We may be at a college campus near you!
			</p>
			<img src='https://farm3.staticflickr.com/2910/14694528234_31fc45754d_k.jpg'>
			
		</div>
		<?php
		foreach($est as $year => $church) {
			foreach($church as $value) {
		?>
				<div class="box" id="<?php echo $value['prefix']?><?php echo $value['title']?>">
					<img src="<?php echo $value['photo']?>" class="<?php echo $value['offset'] ?>">
					<div class="slide">
						<div class="cover">
							<h3><?php echo $value['prefix']?></h3>
							<h2><?php echo $value['title']?></h2>
						</div>
						<hr />
						
						<?php
						if (!empty($value['website'])) {
						?>
							<a href="<?php echo $value['website']?>">
							<div class="button website">
								Visit website
							</div>
							</a>
						<?php
						} else {
						?>
							<div class="coming-soon">
								<p>COMING SOON!</p>
							</div>
						<?php
						}
						if (!empty($value['facebook'])) {
						?>
							<a href="<?php echo $value['facebook']?>">
							<div class="button facebook">
								Visit facebook
							</div>
							</a>
						<?php
						}
						?>

					</div>
				</div>
			<?php
				}
			}
			?>
	</section>

<!-- <div class="container">


</div> -->
</body>
</html>