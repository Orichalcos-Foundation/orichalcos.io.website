<?php
/**
 * Template Name: Team
 * @package understrap
 */

get_header();
?>



<div id="toggle" style="display:none">Hello</div>

<main>
	<section id="hero">
		<div class="container" >
			<div class="row">
				<div class="col-md-12">
					<h1>TEAM</h1>
				
				</div>
			</div><!-- .row -->
		</div><!--.container-->
	</section><!--section-->

	<section id="leadership">
		<div class="container" >
			<div class="row section-title">
				<div class="col-md-12">
					<h2>Leadership</h2>
				</div>
			</div>

			<div class="row profile">
				<div class="col-md-4 ">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profile01.jpg" alt="">
					<h4>Sungho Kim, Ph.D. </h4>
					<h6>CEO and Founder</h6>
					<a href="https://www.linkedin.com/in/orichalcos/" target="_blank">
						<i class="fab fa-linkedin-in"></i>
					</a>
				</div>
				<div class="col-md-8">
					<p class="detail" id="detail01">
						He was the director of supercomputer development in KISTI, a government funded National institute. Former CEO of KESPER Inc., CTO of ZION Linux System CTO, VP of Crowngames and Innogrid Inc. He holds over 20 years of experience in HPC and Supercomputing, Cloud Computing, BigData, AI, Linux, decryption systems, software development and has accomplished many government issued national projects.  He also has hardware development experiences from semiconductor design, mobile devices, industrial computer(SBC) and high performance storage systems for supercomputers. Recently, during his time as VP for a gaming company he has obtained experience in the designing of game economy, marketing and ads, as well as the monetization for social casino games.
					</p>
					<p class="button-wrapper">
						<a class="more" id="button1" onclick="changeHeight1(this.id, 'detail01')">See More</a>
					</p>					
				</div>
			</div>


			<div class="row profile">
				<div class="col-md-4 profile">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profile02.jpg" alt="">
					<h4>Jae Hoon Kim</h4>
					<h6>CSO and Co-Founder</h6>
					<a href="https://www.linkedin.com/in/jae-hoon-kim-787420151/" target="_blank">
						<i class="fab fa-linkedin-in"></i>
					</a>
				</div>
				<div class="col-md-8">
					<p class="detail" id="detail02">
						Former CEO of GFew Interface Inc, a web agency. Former Senior Director of strategic business department at Hancom Inc.(PLC.).  Former COO of entertainment and technology company Prime Entertainment Inc.(PLC.) CEO of SNS based digital content creating & distribution service platform company Crepot Inc. As an entrepreneur and CEO with over 20 years under his belt, he holds a wide breadth experience through multiple positions (e.g. planning, development, marketing, strategy, invest and incubating, M&A and so on.) in the IT industry. He has been involved in various Windows application software businesses including Hangul, the biggest representative word processing program in Korea and office application programs. Jae Hoon did business planning and development of Internet portal YECA / DreamWiz and internet service such as Yeca Tour / Photojoy / LaCusine / VitaEdu. He supervised WiFi AP, VOIP Phone, Bluetooth Car Kit-Dongle-Ear Set-Speaker and CNS business. He led total entertainment business on the strategy for the integration of vertical chain such as investment-production-distribution and horizon chain such as Movie-Game-Drama-Musical of Culture Contents industry. He had set up and ran SNS-based mixed-media digital content creating & distribution platform business implemented by Flash / Flex technology and advanced to the global market. He Has been continuously challenging and experimenting Platform for Fair Profit Distribution in the Role of Market Participants with internet service for last years and is focusing on an ecosystem design that can be improved by blockchain technology.
					</p>	
					<p class="button-wrapper">
						<a class="more"  id="button2" onclick="changeHeight1(this.id, 'detail02')">See More</a>
					</p>									
				</div>
			</div>
			<div class="row profile">
				<div class="col-md-4">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profile03.webp" alt="">
					<h4>Hyun Chul Ryu </h4>
					<h6>CPD and Co-Founder</h6>
					<a href="https://www.linkedin.com/in/hyunchul-ryu-13a887165/" target="_blank">
						<i class="fab fa-linkedin-in"></i>
					</a>

				</div>
				<div class="col-md-8">
					<p class="detail" id="detail03">
						Hyun Chul is a game planning expert who has over 15 years experience as a PD. A veteran in the Korean game industry, he has lead teams in small and larger companies such as Lizard Interactive, NC Soft, Smile Gate and WeMade. In his first company, LIzard Interactive, he has seen a 70 times return in revenue growth while using an innovative F2P business model that was ahead of its time and is now widely adapted.
						Since then, Hyun Chul has continuously been successful with his pay-per-using model through in-game content tuning for Cronos and Cross Fire among other titles. In addition to development and planning, he is a game company director with a strong passion for casual and mobile games, with a keen eye for scouting indie developers with potential.
					</p>
					<p class="button-wrapper">
						<a class="more"  id="button3" onclick="changeHeight1(this.id, 'detail03')">See More</a>
					</p>									
				</div>
			</div>
		</div><!--.container-->
	</section><!--section-->




	<section id="advisors">
		<div class="container" >
			<div class="row section-title">
				<div class="col-md-12">
					<h2>Advisors</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 profile">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/advisor01.jpg" alt="">
					<h4>Okhyun Choi</h4>
					<h6>Fintech and Tokenomics Advisor</h6>
					<a href="https://www.linkedin.com/in/%EC%98%A5%ED%98%84-%EC%B5%9C-1a3aa462/" target="_blank">
						<i class="fab fa-linkedin-in"></i>
					</a>
				</div>
				<div class="col-md-3 profile">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/advisor02.jpg" alt="">
					<h4>Kweon Sik Seo</h4>
					<h6>Attorney at Law, Partner at DRAJU & lawdata</h6>
					<a href="" target="_blank">
						<i class="fab fa-linkedin-in"></i>
					</a>
				</div>
				<div class="col-md-3 profile">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/advisor03.jpg" alt="">
					<h4>S.D. Lee</h4>
					<h6>Cloud Computing Advisor</h6>
					<a href="http://orichalcos.io/#" target="_blank">
						<i class="fab fa-linkedin-in"></i>
					</a>
				</div>
				<div class="col-md-3 profile">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/advisor04.jpg" alt="">
					<h4>B. D. Kim</h4>
					<h6>Collaboration & Architecture Advisor</h6>
					<a href="https://www.linkedin.com/in/byoung-do-bd-kim-512a4aa8/" target="_blank">
						<i class="fab fa-linkedin-in"></i>
					</a>
				</div>
				<div class="col-md-3 profile">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/advisor05.jpg" alt="">
					<h4>Won il Seok</h4>
					<h6>Game Platform Advisor</h6>
					<a href="http://linkedin.com/in/" target="_blank">
						<i class="fab fa-linkedin-in"></i>
					</a>
				</div>
				<div class="col-md-3 profile">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/advisor06.jpg" alt="">
					<h4>Soon Jung Kwon</h4>
					<h6></h6>
					<a href="https://www.linkedin.com/in/soonjung-kwon-59b204160/" target="_blank">
						<i class="fab fa-linkedin-in"></i>
					</a>
				</div>
				<div class="col-md-3 profile">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/advisor07.jpg" alt="">
					<h4>Sangwha Lee</h4>
					<h6>Art & UX Advisor</h6>
					<a href="http://orichalcos.io/#" target="_blank">
						<i class="fab fa-linkedin-in"></i>
					</a>
				</div>
			</div><!-- .row -->	
		</div><!--.container-->
	</section><!--section-->


	<section id="member">
		<div class="container" >
			<div class="row section-title">
				<div class="col-md-12">
					<h2>Member</h2>
				</div>
			</div>			
			<div class="row">
				<div class="col-md-3 profile">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profile04.jpg" alt="">
					<h4>Kyung Hwan Kim</h4>
					<h6>Planning Leader</h6>
					<p>With 9+ of experience, Kyung Hwan leads Orichalcos’ planning department.  He is endorsed by clients and co-workers for his extraordinary skills in game planning and design for MMORPG’s and shooters, to Mobile games succesfully published on Kakao Games.</p>
					<a href="http://orichalcos.io/#" target="_blank">
						<i class="fab fa-linkedin-in"></i>
					</a>		
				</div>
				<div class="col-md-3 profile">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profile05.jpg" alt="">
					<h4>Steve Park</h4>
					<h6>Global Marketing Manager</h6>
					<p>Steve designed and implemented Social media marketing strategies in the IT industry. His strengths include UA, localization and content promotion. He undertook a real-estate app project at LianSoft and previously was the driving force in partner management with renown marketing agencies Bidalgo and DAU-UP.</p>
					<a href="https://www.linkedin.com/in/steveparkoricha" target="_blank">
						<i class="fab fa-linkedin-in"></i>
					</a>		
				</div>
				<div class="col-md-3 profile">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profile06.jpg" alt="">
					<h4>Kevin Joël Pompilio</h4>
					<h6>Global Business Development</h6>
					<p>Kevin brings experience in strategic partnerships with the aim of globalization throughout the game industry. Prior to joining, Kevin held ownership to a marketing SME and has worked on development for titles published by Sid Meiers, FlatOut and NHN Entertainment.</p>
					<a href="https://www.linkedin.com/in/kevinpompilio/" target="_blank">
						<i class="fab fa-linkedin-in"></i>
					</a>		
				</div>
				<div class="col-md-3 profile">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profile07.jpg" alt="">
					<h4>Song Seung Kwan</h4>
					<h6>Art Leader</h6>
					<p>Song Seung is a veteran Art Director in the Korean game industry and has lead a wide variety of games genres from MMORPG to Mobiel. He has a 20+ year long carreer in leading teams throughout the industry and has launched countless of games under his name.</p>
					<a href="http://orichalcos.io/#" target="_blank">
						<i class="fab fa-linkedin-in"></i>
					</a>		
				</div>
				<div class="col-md-3 profile">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profile08.jpg" alt="">
					<h4>Duk Jin Jeong</h4>
					<h6>Operation Leader</h6>
					<p>With over 15 years of experience under his belt he blossomed early in the Korean game industry as a designer. Duk Jin is a professor, project manager and a published author. His cultural interest and knowledge has been of great assistance to the globalization of various game titles.</p>
					<a href="http://orichalcos.io/#" target="_blank">
						<i class="fab fa-linkedin-in"></i>
					</a>		
				</div>				
				<div class="col-md-3 profile">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profile09.jpg" alt="">
					<h4>Kaily You</h4>
					<h6>Marketing Manager</h6>
					<p>Kaily has 10+ years of Product planning experience for South-Korean industry giants such as GS and LG Electronics. She graduated from KAIST university with an ICC Master and excels in data analytics and user acquisition.</p>
					<a href="https://www.linkedin.com/in/kwangsuk-you-44464010a/" target="_blank">
						<i class="fab fa-linkedin-in"></i>
					</a>		
				</div>

				<div class="col-md-3 profile">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profile10.jpg" alt="">
					<h4>Sungsoo Hwang</h4>
					<h6>Marketing and Community</h6>
					<p>He is a marketer and Korean community manager.</p>	
				</div>
			</div>
		</div><!--.container-->
	</section><!--section-->

	<section id="partners">
		<div class="container" >
			<div class="row section-title">
				<div class="col-md-12">
					<h2>Partners & Supporters</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 partner">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/partner01.png" alt="">
				</div>
				<div class="col-md-4 partner">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/partner02.png" alt="">
				</div>
				<div class="col-md-4 partner">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/partner03.png" alt="">
				</div>
				<div class="col-md-3"></div>
				<div class="col-md-3 partner">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/partner04.png" alt="">
				</div>
				<div class="col-md-3 partner">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/partner05.png" alt="">
				</div>
				<div class="col-md-3"></div>

			</div><!-- .row -->
		</div><!--.container-->
	</section><!--section-->

</main><!-- Wrapper end -->
<script type="text/javascript">
	function changeHeight1(clicked_button, paragraph) {
		var button = document.getElementById(clicked_button);
		var paragraph = document.getElementById(paragraph);


		if(document.getElementById(clicked_button).innerText == "See More"){
		    paragraph.style.height = "auto";
		    button.innerText = "Close";
		}else{
		    paragraph.style.height = "135px";
		    button.innerText = "See More";
		}
	}	
</script>

<?php get_footer(); ?>
