<!DOCTYPE html>
<html lang="en">
<?php
    include "conn.php";
    include "register.php";
    include "contactus.php";
?>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Teknack 2016">
    <meta name="author" content="ACM DBIT">
    <meta name="keyword" content="Teknack, Online Festival, Technical,DBIT, Games">
    <link rel="shortcut icon" href="img/imgg.gif" >

    <title>Teknack 2016</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jquery.fullpage.css" />
	<link href="css/business-casual.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/form-elements.css">
    <link rel="stylesheet" href="css/contact_style.css">
    <link rel="stylesheet" href="css/bootstrap-horizon.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    </head>

	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
	  fjs.parentNode.insertBefore(js, fjs);
	  }(document, 'script', 'facebook-jssdk'));
	</script>
	
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
  	  <div id="preloader">
    	<div id="status">&nbsp;</div>
	</div>

	<div id="fullpage">

    		<div class="section parallaxx pageone">

				<div class="brand wow animate slideInDown" id="home" data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1">
					<img src="img/logo1.png" align="middle" width="700px">
				</div>

			    <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
			        <div class="container">
			            <!-- Brand and toggle get grouped for better mobile display -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			                    <span class="sr-only">Toggle navigation</span>
			                    <span class="icon-bar"></span>
			                    <span class="icon-bar"></span>
			                    <span class="icon-bar"></span>
			                </button>
			                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
			                <a class="navbar-brand" href="index.html">TEKNACK '16</a>
			            </div>
			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse animate infinite shake" id="bs-example-navbar-collapse-1">
			                <ul class="nav navbar-nav">
			                    <li>
			                        <a href="#home">Home</a>
			                    </li>
			                    <li>
			                        <a href="#dash">Statistics</a>
			                    </li>
			                    <li>
			                        <a href="#events">Events</a>
			                    </li>
			                    <li>
			                        <a href="#Sponsors">Sponsors</a>
			                    </li>
			                    <li>
			                        <a href="#register">Register</a>
			                    </li>
			                    <li>
			                        <a href="#contact">Contact</a>
			                    </li>
			                    
			                </ul>
			            </div>
			            <!-- /.navbar-collapse -->
			        </div>
			        <!-- /.container -->
			    </nav>
			    <!-- <h3 class="wow animate jello livetext text-center"><b>Destruction Imminent</b></h3> -->
			    <div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="space"></div>
					</div>
			    </div>
			    <h1 style="font-size:72px;" class="wow animate jello livetext text-center"><b>Apocalypse in ...</b></h1>
			    
			    <div class="clockboxx">
				    <section class="count-down-wrapper fade-down wow animate zoomInDown" data-wow-delay="0.5s">
						<ul class="row count-down">                       
							<li class="col-md-3 col-sm-6">   
								<input class="knob days" data-readonly=true data-min="0" data-max="365" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#34aadc" data-bgColor="#e1e2e6" data-angleOffset="180">
								<span id="days-title">days</span>
							</li>    
							<li class="col-md-3 col-sm-6"> 
								<input class="knob hour" data-readonly=true data-min="0" data-max="24" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#4cd964" data-bgColor="#e1e2e6" data-angleOffset="180">
								<span id="hours-title">hours</span>
							</li>    
							<li class="col-md-3 col-sm-6"> 
								<input class="knob minute" data-readonly=true data-min="0" data-max="60" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#ff9500" data-bgColor="#e1e2e6" data-angleOffset="180">
								<span id="mins-title">minutes</span>
							</li>    
							<li class="col-md-3 col-sm-6"> 
								<input class="knob second" data-readonly=true data-min="0" data-max="60" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#ff3b30" data-bgColor="#e1e2e6" data-angleOffset="180">
								<span id="secs-title">seconds</span>
							</li>                
						</ul>              
					</section>
				</div>
									

							<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<div class="space"></div>
							</div>
							</div>	

							<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<div class="space"></div>
							</div>
							</div>								

	        </div>


    		<div class="section parallaxx pagetwo" id="dash">
    			
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="space"></div>
				</div>
				</div>
				<h2 class="wow animate jello livetext text-center"><b>Statistics</b></h2>	
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="space"></div>
				</div>
				</div>

				<div class="container">
					<div class="row" data-wow-delay="1s">
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 wow animate bounceInLeft">
							<div class="info-box blue-bg">
								<i class="fa fa-user"></i>
								<div class="count">890</div>
								<div class="title">Users</div>						
							</div><!--/.info-box-->			
						</div><!--/.col-->
				
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 wow animate bounceInLeft">
							<div class="info-box brown-bg">
								<i class="fa fa-users"></i>
								<div class="count">10</div>
								<div class="title">Countries</div>						
							</div><!--/.info-box-->			
						</div><!--/.col-->
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 wow animate bounceInRight">
							<div class="info-box dark-bg">
								<i class="fa fa-eye"></i>
								<div class="count">7,335</div>
								<div class="title">Page Views</div>						
							</div><!--/.info-box-->			
						</div><!--/.col-->
				
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 wow animate bounceInRight">
							<div class="info-box green-bg card-container">
								<i class="fa fa-clock-o"></i>
								<div class="count">1,839</div>					  
								
								<div class="title">Sessions</div>						
							</div><!--/.info-box-->			
						</div><!--/.col-->
					    <!-- <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 wow animate bounceInRight">
								<div class="fb-page" data-href="https://www.facebook.com/Teknack" data-tabs="timeline" data-width="600" data-height="442" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/Teknack"><a href="https://www.facebook.com/Teknack">Teknack</a></blockquote></div></div>
						</div> --><!--/.col-->	
					</div><!--/.row-->
					<div class="row" data-wow-delay="1s">	
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow animate bounceInRight">
							<div style="width:100%;height:300px;">
								<iframe width="100%" height="100%" src="https://www.youtube.com/embed/A2fMSrlO5Qc" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow animate bounceInRight">
							<div style="background:#FFF;height:300px;">
								<div style="width:500px;margin-left:auto;margin-right:auto;height:inherit;">
									<div class="fb-page" data-href="https://www.facebook.com/Teknack" data-width="500px" data-height="300px" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
										<div class="fb-xfbml-parse-ignore">
											<blockquote cite="https://www.facebook.com/Teknack">
												<a href="https://www.facebook.com/Teknack">
													Teknack
												</a>
											</blockquote>
										</div>
									</div>
								</div>
							</div>
							
							
						</div>			
						
				    </div><!--/.row-->
							<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<div class="space"></div>
							</div>
							</div>	
							<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<div class="space"></div>
							</div>
							</div>	
							<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<div class="space"></div>
							</div>
							</div>
							</div>

							<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<div class="space"></div>
							</div>
							</div>

							<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<div class="space"></div>
							</div>
							</div>
				</div>

			</div>

			<div class="section parallaxx pagethree" id="events">



				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="space"></div>
				</div>
				</div>

				<h2 class="wow animate jello livetext text-center"><b>Events</b></h2>	

				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="space"></div>
				</div>
				</div>
				

				<div class="container">
					<div class="row wow animate bounceInLeft">
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 card-container">
							<div class="info-box card side event1 shakeit">
								
								<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 side back">
									<div class="evebox">
									
										<div class="event-name">Mugshot</div>						
									</div>
								</div>						
							</div><!--/.info-box-->

						</div><!--/.col-->
						
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 card-container">
							<div class="info-box card side event2 shakeit">
								
								<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 side back">
									<div class="evebox">
									
										<div class="event-name">Reflex</div>						
									</div>
								</div>						
							</div><!--/.info-box-->

						</div><!--/.col-->	
						
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 card-container">
							<div class="info-box card side event3 shakeit">
								
								<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 side back">
									<div class="evebox">
									
										<div class="event-name">60 seconds</div>						
									</div>
								</div>						
							</div><!--/.info-box-->

						</div><!--/.col-->
						
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 card-container">
							<div class="info-box card side event4 shakeit">
								
								<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 side back">
									<div class="evebox">
									
										<div class="event-name">camouflage</div>						
									</div>
								</div>						
							</div><!--/.info-box-->

						</div><!--/.col-->
					
					</div>

					<div class="row wow animate bounceInRight">
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 card-container">
							<div class="info-box card side event5 shakeit">
								
								<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 side back">
									<div class="evebox">
									
										<div class="event-name">Auction It</div>						
									</div>
								</div>						
							</div><!--/.info-box-->

						</div><!--/.col-->
						
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 card-container">
							<div class="info-box card side event6 shakeit">
								
								<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 side back">
									<div class="evebox">
									
										<div class="event-name">Snake</div>						
									</div>
								</div>						
							</div><!--/.info-box-->

						</div><!--/.col-->	
						
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 card-container">
							<div class="info-box card side event7 shakeit">
								
								<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 side back">
									<div class="evebox">
									
										<div class="event-name">Follow The Route</div>						
									</div>
								</div>						
							</div><!--/.info-box-->

						</div><!--/.col-->
						
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 card-container">
							<div class="info-box card side event8 shakeit">
								
								<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 side back">
									<div class="evebox">
									
										<div class="event-name">Virtual Stock Market</div>						
									</div>
								</div>						
							</div><!--/.info-box-->

						</div><!--/.col-->
						
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 card-container wow animate bounceInLeft">
							<div class="info-box card side event9 shakeit">
								<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 side back">
									<div class="evebox">
									
										<div class="event-name">Acoustica</div>						
									</div>
								</div>						
							</div><!--/.info-box-->

						</div><!--/.col-->
						
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 card-container wow animate bounceInLeft">
							<div class="info-box card side event10 shakeit">
								
								<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 side back">
									<div class="evebox">
									
										<div class="event-name">Antivirus</div>						
									</div>
								</div>						
							</div><!--/.info-box-->

						</div><!--/.col-->	
						
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 card-container wow animate bounceInLeft">
							<div class="info-box card side event11 shakeit">
								<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 side back">
									<div class="evebox">
									
										<div class="event-name">Treasure Hunt</div>						
									</div>
								</div>						
							</div><!--/.info-box-->

						</div><!--/.col-->
						
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 card-container wow animate bounceInLeft">
							<div class="info-box card side event12 shakeit">
								<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 side back">
									<div class="evebox">
									
										<div class="event-name">Mega Event</div>						
									</div>
								</div>						
							</div><!--/.info-box-->

						</div><!--/.col-->
					</div>
					
				</div>

              

              <!--/col-->
              	<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="space"></div>
				</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="space"></div>
				</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="space"></div>
				</div>
				</div>
				
				

			</div>


<!--_______________________________________________________________________________________________-->


		<div class="section parallaxx pagefive" id="Sponsors">

				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="space"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="space"></div>
					</div>
				</div>

				

				<h2 class="wow animate jello livetext text-center"><b>Sponsors</b></h2>	


				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="space"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="space"></div>
					</div>
				</div>

			<div class="container">
				<div class="row wow animate flipInX">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 card-container wow animate bounceInLeft">
							<div class="info-box card sp1 side shakeit">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 side back">
									
								</div>						
							</div><!--/.info-box-->

						</div><!--/.col-->

						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 card-container wow animate bounceInLeft">
							<div class="info-box card sp2 side shakeit">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 side back">
									
								</div>						
							</div><!--/.info-box-->

						</div><!--/.col-->

						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 card-container wow animate bounceInLeft">
							<div class="info-box card sp3 side shakeit">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 side back">
									
								</div>						
							</div><!--/.info-box-->

						</div>

				</div>	<!--/.col-->
				</div>		
              <!--/col-->
              	<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="space"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="space"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="space"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="space"></div>
					</div>
				</div>
			    <div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="space"></div>
					</div>
				</div>

			</div>
		</div>

	<!--_______________________________________________________________________________________________-->

		<div class="section parallaxx pageseven" id="register">


					 <div class="row wow animate zoomInUp" data-wow-delay="0.1s">
                        <div class="col-sm-6 col-md-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Register</h3>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom contact-form">
			                    <form name="register" action="" method="POST" class="popup-form" onsubmit="return validateForm()">
					<input name="pname" type="text" class="form-control form-white" placeholder="Full Name" required>
					<input name="pemail" type="text" class="form-control form-white" placeholder="Email Address" required>
					<input name="ptelnum" type="tel" class="form-control form-white" placeholder="Mobile Number" required>
					<input name="ptkcode" type="text" class="form-control form-white" placeholder="Teknack Code" required>
					<input name="ppass" type="password" class="form-control form-white" placeholder="Enter Password" required>
					<input name="prepass" type="password" class="form-control form-white" placeholder="Re-enter Password" required>
					<button type="submit" name="register" id="register" class="btn btn-submit">Submit</button>
				</form>
				<p style="color:white">Don't have a Code?<br><a style="color:yellow" href="#">Contact Us</a> to get one!</p>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="space"></div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="space"></div>
					</div>
				</div>
                 </div>

	<!--_______________________________________________________________________________________________-->

		<div class="section parallaxx pagesix" id="contact">


					 <div class="row wow animate zoomInUp" data-wow-delay="0.1s">
                        <div class="col-sm-6 col-md-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Contact us</h3>
                            		<p>Fill in the form below to send us a message:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-envelope"></i>
                        		</div>
                            </div>
                            <div class="form-bottom contact-form">
			                    <form role="form" method="post" onsubmit="return validateForm()">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="contact-name">Name</label>
			                        	<input type="text" name="email" placeholder="Name" class="contact-email form-control" id="contact-email">
			                        </div>
			                    	<div class="form-group">
			                    		<label class="sr-only" for="contact-email">Email</label>
			                        	<input type="text" name="email" placeholder="Email" class="contact-email form-control" id="contact-email">
			                        </div>
			                        <div class="form-group">
			                    		<label class="sr-only" for="contact-email">Mobile Number</label>
			                        	<input type="tel" name="email" placeholder="Mobile Number" class="contact-email form-control" id="contact-email">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="contact-subject">Subject</label>
			                        	<input type="text" name="subject" placeholder="Subject" class="contact-subject form-control" id="contact-subject">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="contact-message">Message</label>
			                        	<textarea name="message" placeholder="Message" class="contact-message form-control" id="contact-message"></textarea>
			                        </div>
			                        <button type="submit" class="btn">Send message</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="space"></div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="space"></div>
					</div>
				</div>
                 </div>



	<!--_______________________________________________________________________________________________-->

		<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i style="font-size: 30px;" class="icon_close_alt2"></i></a>
				<h3 class="white">Register</h3>
				<form name="register" action="" method="POST" class="popup-form" onsubmit="return validateForm()">
					<input name="pname" type="text" class="form-control form-white" placeholder="Full Name" required>
					<input name="pemail" type="text" class="form-control form-white" placeholder="Email Address" required>
					<input name="ptelnum" type="tel" class="form-control form-white" placeholder="Mobile Number" required>
					<input name="ptkcode" type="text" class="form-control form-white" placeholder="Teknack Code" required>
					<input name="ppass" type="password" class="form-control form-white" placeholder="Enter Password" required>
					<input name="prepass" type="password" class="form-control form-white" placeholder="Re-enter Password" required>
					<?php /*<!--
					<div class="dropdown">
						<button id="dLabel" class="form-control form-white dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pricing Plan
						</button>

						<ul class="dropdown-menu animated fadeIn" role="menu" aria-labelledby="dLabel">
							<li class="animated lightSpeedIn"><a href="#">1 month membership ($150)</a></li>
							<li class="animated lightSpeedIn"><a href="#">3 month membership ($350)</a></li>
							<li class="animated lightSpeedIn"><a href="#">1 year membership ($1000)</a></li>
							<li class="animated lightSpeedIn"><a href="#">Free trial class</a></li>
						</ul>
					</div>
				-->
				<!--
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="None" id="squaredOne" name="check" />
							<label for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
				--> */?>
					<button type="submit" name="register" id="register" class="btn btn-submit">Submit</button>
				</form>
				<p style="color:white">Don't have a Code?<br><a style="color:yellow" href="#">Contact Us</a> to get one!</p>
			</div>
		</div>
	</div>

	<!--_______________________________________________________________________________________________-->
		

			<div class="section parallaxx pageseven">
				<footer class="text-center">
			        <div class="footer-above ">
			            <div class="container" >
			                <div class="row">
			                    <div class="footer-col col-md-4 wow animate slideInLeft" data-wow-delay="0.1s">
			                        <h3>Location</h3>
			                        <p>Don Bosco Institute Of Technology Premier Automobiles Road, Opp. Fiat Company, Kurla (W), Mumbai- 400 070</p>
			                    </div>
			                    <div class="footer-col col-md-4 wow animate slideInUp" data-wow-delay="0.1s">
			                        <h3>Around the Web</h3>
			                        	<a class="sicons" href="http://www.facebook.com/Teknack"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
										<a class="sicons" href="http://www.twitter.com/teknackdbit"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
										<a class="sicons" href="https://plus.google.com/TeknackDBIT"><i class="fa fa-google-plus"></i></a>
							    </div>
			                    <div class="footer-col col-md-4 wow animate slideInRight" data-wow-delay="0.1s">
			                        <h3></h3>
			                        <div class="text-center">
										<br>
										<div class="col-sm-6 text-center">
											<img src="img/acm_dbit_white_vector.png" height="80px" width="80px">
										</div>
										<div class="col-sm-6 text-center">
											<img src="img/dbit_white_vector.png" height="80px" width="80px">
										</div>
									</div>
			                    </div>
			                </div>
			            </div>
			        </div>
    			</footer>
            </div>
        </div>
    </body>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $(window).load(function() {
            $('#status').fadeOut();
            $('#preloader').delay(350).fadeOut('slow');
            $('body').delay(350).css({'overflow':'visible'});
        })
	</script>
	<script type="text/javascript">
		$(window).scroll(function() {
		if ($(this).scrollTop() > 150){  
		    $('navbar').addClass('posi');
		  }
		  else{
		    $('navbar').removeClass('posi');
		  }
		});
	</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
    	var wow = new WOW(
		  {
		    boxClass:     'wow',      // animated element css class (default is wow)
		    animateClass: 'animated', // animation css class (default is animated)
		    offset:       70,          // distance to the element when triggering the animation (default is 0)
		    mobile:       false,       // trigger animations on mobile devices (default is true)
		    live:         true,       // act on asynchronously loaded content (default is true)
		  }
		);
		wow.init();
    </script>
    <script type="text/javascript">
    $(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
    </script>
	<script src="js/jquery.knob.js"></script>
	<script src="js/jquery.ccountdown.js"></script>
	<script src="js/init.js"></script>
	<script src="js/general.js"></script>
	<script src="js/regvalid.js"></script>
</html>