<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Michal Winiarski Page</title>
	<!-- <meta description= ""> -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/css/normalize.css">
	<link rel="stylesheet" href="vendors/css/grid.css">
	<link rel="stylesheet" href="vendors/css/ionicons.min.css">

	<link rel="stylesheet" href="resources/css/style.css">
	<link rel="stylesheet" href="resources/css/queries.css">
</head>
<body>
	<header id="header">
		<nav> 
			<div class="row">
				<ul class="main-nav">
					<li><a href="#profile">Profile</a></li>
					<li><a href="#skills">Skills</a></li>
					<li><a href="#contact">Contact me!</a></li>
				</ul>
			</div>
		</nav>
		<div class="main-text-box">	
			<div class="row">
				<h1>Hello on my side!</h1>
				<a class="btn btn-full js--scroll-to-profile" href="#profile">I want to meet you!</a>
				<a class="btn btn-ghost js--scroll-to-hobby" href="#hobby">my Hobbies</a>
			</div>
		</div>
		
	</header>
	<section class="section-profil js--section-profile" id="profile">
		<div class="row">
			<h2>My Profile</h2>
			<p class="profile-text">Hello, my name is <strong>Michal Winiarski</strong>. I come from Cracow. I have started my journey with frontend about one year ago and for last few months I have extended my knowledge about <strong>HTML5 - SASS, RWD, Bootstrap, CSS3</strong>. Continued in next months I'm improving my <strong>JS</strong> and <strong>jQuery</strong> skills.</p>
		</div>
		<div class="row">
			<div class="col span-1-of-3 profile">

				<figure class="my-photo">
					<img src="resources/images/avatar1.jpg" alt="My photo">
				</figure>
				
				<div class="profile-data">
					<i class="ion-android-person icon-small"></i>
					Michal Winiarski
				</div>
				<div class="profile-data">
					<i class="ion-ios-infinite icon-small"></i>
					06.04.1991
				</div>
				<div class="profile-data">
					<i class="fa fa-briefcase icon-small"></i>
					Junior Frontend Developer
				</div>
				<div class="profile-data">
					<i class="ion-social-twitter icon-small"></i>
					<a href="https://twitter.com/winiarski_mw">@winiarski_mw</a>
				</div>
				<div class=" profile-data">
					<i class="ion-social-linkedin icon-small"></i>
					<a href="https://pl.linkedin.com/pub/michał-winiarski/70/a/2aa">linkedin</a>	
				</div>
				
			
			</div>
			<div class="col span-2-of-3">
				<div class="profile-work">
					<h3>Work</h3>
					<div class=" profile-education-1 profile-education ">

						<div >
							<div class="profile-icon-on-right">
								<i class="fa fa-briefcase i-on-line icon-small"></i>
							</div>

							<div class="profile-education-text">
								<p><strong>Fitech 2014</strong></p>
								<p>As junior software engineer</p>
								<p>Java programming using Java Swing, Jenkins
								</p>
							</div>
						</div>
						<div></div>
					</div>
					<div class=" profile-education-2 profile-education-2-work profile-education">
					</div>
					<div class=" profile-education-3 profile-education">
						<div></div>
						<div>
							<div class="profile-icon-on-left">
								<i class="fa fa-briefcase i-on-line icon-small"></i>
							</div>
							<div class="profile-education-text">
								<p><strong>Fideltronik 2013</strong></p>
								<p>As trainee</p>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="profile-studies">
					<h3>Education</h3>
					<div class=" profile-education-1 profile-education">
						<div></div>
						<div >
							<div class="profile-icon-on-right">
								<i class="fa fa-graduation-cap i-on-line icon-small"></i>
							</div>
							<div class="profile-education-text">
								<p>Jagiellonian University</p> <p><strong>Electronic Information Processing</strong></p> <p>2013 - 2015</p>
							</div>
						</div>
						<div></div>
						<div>
							<div class="profile-icon-on-right">
								<i class="fa fa-graduation-cap i-on-line icon-small"></i>
							</div>
							<div class="profile-education-text">
								<p>Jagiellonian University</p>	 <p><strong>Applied Computer Science</strong></p> <p>2010 - 2013</p>
							</div>
						</div>
					</div>
					<div class=" profile-education-2 profile-education-2-education profile-education"></div>
					<div class=" profile-education-3 profile-education">
						
						<div>
							<div class="profile-icon-on-left">
								<i class="fa fa-graduation-cap i-on-line icon-small"></i>
							</div>
							<div class="profile-education-text">
								<p>Akademia Kodu</p>
								<p>Course: <strong>'Szkolenie Front-End'</strong> ('Training for Front-End') 
								</p>
								<p>2015 - until now</p>
							</div>
						</div>
						<div ></div>
						<div>
							<div class="profile-icon-on-left">
								<i class="fa fa-graduation-cap i-on-line icon-small"></i>
							</div>
							<div class="profile-education-text">
								<p>Sabre</p>
								<p>Course: <strong>'Projektowanie User Experience'</strong> ('User Experience Design') 
								</p>
								<p>2014</p>
							</div>
						</div>
					</div>	
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</section>
	<section class="section-skills " id="skills">
		<div class="row">
			<h2>Skills</h2>
		</div>
		<div class="row">
			<div class="languages-showcase  main-languages clearfix">
				
				<div class="col span-1-of-2">
					<figure class="language-image">
						<img src="resources/images/HTML5CSS3Logos1.jpg" alt="HTML">
					</figure>	
					<ul class="language-list-skills">
						<li><h4>RWD</h4></li>
						<li><h4>SASS</h4></li>
						<li><h4>Bootstrap</h4></li>
					</ul>						
				
				</div>
				<div class="col span-1-of-2">
					<figure class="language-image">
						<img src="resources/images/js.png" alt="JS">
					</figure>
					
					<p >
						I work with JS for short time. I'm improving my skills by learning jQuery.
					</p>
					
						
					
				</div>
			</div>
			<div class="languages-showcase other-languages">
				<ul>
					<li>
						<h4>Python</h4>
					</li>
					<li>
						<h4>UX Design</h4>
					</li>
					<li>
						<h4>Java</h4>
					</li>
				</ul>
			</div>
			<div class="languages-showcase other-skills">
				<h3>Others skills:</h3>
				<ul>
					<li>
						<h4>English: B2/B1</h4>
					</li>
					<li>
						<h4>Spanish: A2</h4>
					</li>
					<li>
						<h4>Driving License: B2</h4>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="section-hobbies js--section-hobby" id="hobby">
		<div class="row">
			<h2>Hobbies</h2>
			<div class="col span-1-of-3 hobby-col hobby-col-3">
				<div class="hobby hobby-3">
					<h4>My favourite dances</h4>
					<ul>
						<li>Salsa Cubana</li>
						<li>Bachata</li>
						<li>Kizomba</li>
					</ul>
				</div>
			</div>
			<div class="col span-1-of-3 hobby-col hobby-col-1">
				<div class="hobby hobby-1">
					<h4>My favourite places</h4>
					<ul>
						<li>Krynica</li>
						<li>Myślenice</li>
						<li>Alps</li>
					</ul>
					
				</div>
			</div> 
			<div class="col span-1-of-3 hobby-col hobby-col-2">
				<div class="hobby hobby-2">
					<h4>My favourite games</h4>
					<ul>
						<li>Risk (Ryzyko)</li>
						<li>Munchkin</li>
						<li>Hearthstone</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col span-1-of-3 ">
				<div class="hobby-text">
					<i class="fa fa-music icon-big"></i>
					<p>Except playing with code I like to attend to dance classes. I like the most <strong>Salsa Cubana</strong>. It's a dance which came from Cuba. It's so energetic and relaxing that during dancing you can forget about any issues.</p>
				</div>
			</div>	
			<div class="col span-1-of-3">
				<div class="hobby-text">
					<i class="fa fa-tree icon-big"></i>
					<p>Next interest is <strong>skiing</strong>. During the winter, my friends and me go to mountains for nice and fast skiing. I try mixing carving and old style which gives me fun.</p>
				</div>
			</div>	
			<div class="col span-1-of-3 ">
				<div class="hobby-text">
					<i class="fa fa-beer icon-big"></i>
					<p>
						After hard week I like played <strong>computer game</strong> named Heartstone or <strong>board/card games</strong> such as Munchkin, Risk, Carcassonne or I'm trying something new in game bar.  
					</p>
				</div>
			</div>	
		</div>
	</section>
	<section class="section-form" id="contact">
		<div class="row">
			<h2>Contact with me!</h2>
			<h3>Write to me if you have any question or maybe job offer. I will be pleased.</h3>
		</div>
		<div class="row">
			<form method="post" action="mailer.php" class="contact-form">
				<div class="row">
					<?php
						if($_GET['success'] == 1){echo "<div class=\"contact-form-messages success\"> Thank you! Your message has been sent!</div>";
						}
						if($_GET['success'] == -1){echo "<div class=\"contact-form-messages error\"> Oops! Something went wrong. Please, try it again.</div>";
						}
					?>
				</div>
				<input type="email" name="email" placeholder="Your e-mail" required>
				<textarea name="message" placeholder="Your message" cols="30" rows="10"></textarea>
				<input type="submit" value="Send it!">
				
				
			</form>
		</div>
	</section>
	<footer>
		<div class="row">
			<div class="footer-data">
				<ul>
					<li><a href="#header">Where am I? I want to back!</a></li>
					<li>Copyright &copy; 2015 by Michal Winiarski. All rights reserved.</li>
					<li>Created <time datetime="2013-04-01">October 2st, 2015</time></li>
				</ul>
				
				
			</div>
		</div>
		
		
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		
		<script src="vendors/js/jquery.waypoints.min.js"></script>
		<script src="resources/js/script.js"></script>

</body>
</html>