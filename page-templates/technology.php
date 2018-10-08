<?php
/**
 * Template Name: Technology
 * @package understrap
 */

get_header();
?>

<main>
	<section id="hero" class="section-tech">
		<div class="container" >
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<h1>ORICHALCOS TECHNOLOGY</h1>
					<p>
						ORICHALCOS는 플랫폼 자산 거래, 관리 및 사용자 분석 등 각종 트랜잭션에 대응하기 위하여  <br>두개의 토큰과 함께 별도의 허가형 블록체인을 운용합니다. 
					</p>
					<p>
						허가형 블록체인 플랫폼에서는 자산, 데이터, 히스토리 등을 안전하게 보관 및 관리하고,  <br>변동성이 없는 스테이블 토큰으로 플랫폼 경제 생태계를 운용합니다.
					</p>
					<p>
						이더리움 체인에 연동된 ERC-20 토큰을 발행하여, 플랫폼을 유틸리티화하고,  <br>플랫폼의 자산을 변환할 수 있게 함으로써, 사용자의 활동에 대해 다양하게 보상합니다.

					</p>
					<div class="diagram">
						

					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/diagram_technology.png" alt="">
					</div>
				</div>
				<div class="col-md-2"></div>

			</div><!-- .row -->
		</div><!--.container-->
	</section><!--section-->
	<section id="blockchain" class="section-tech">
		<div class="container" >
			<div class="row section-title">
			<div class="col-md-12">
				<h2>ORICHALCOS PLATFORM</h2>
				<h4>PERMITED PRIVATE BLOCK CHAIN</h4>
				<p class="kr">
					ORICHALCOS는 허가형 블록체인 플랫폼이므로 거래 승인에 참여하는 노드들의 합의 과정에 사용자의 추가적인 비용이 발생하지 않도록 설계되고 운영됩니다.  <br>	
					따라서 정확하고 신뢰성 있는 플랫폼으로 네트워크를 구성할 수 있으며, 공정성과 저비용 실현에 집중할 수 있습니다.<br>	
					플랫폼 서비스의  거버넌스를 최적화하면서도 효율성이 증대되는 결과를 창출해낼 수 있습니다.

				</p>
			</div>
			
			</div>
			<div class="row">
				<div class="col-md-5" style="padding-top:130px;">
					<h3 class="text-left kr">HCA 검증 및 합의</h3>
					<p class="kr">Raft와 PoET를 단계별로 처리하는 HCA방식의 합의알고리즘을 적용하여 노드의 안정성을 검토하면서, 정해진 주기마다 노드 그룹의 대표를 무작위로 선출하여 검증과 합의 과정의 인위적 개입을 최소화하고, 비잔틴 문제를 우회적으로 회피할 수 있으며, 에너지 절감 및 하드웨어의 지나친 투자 또한 자연스럽게 해결할 수 있습니다.</p>
					<p>
						*PoET : Proof of Elapsed Time <br>
						*HCA : Hierarchical Consensus Algorithm
					</p>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-6 diagram">
					
					<img style="width:90%;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/diagram_technology01.png" alt=""> 
					<ul class="diagram-icon">
						<li>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ic_blue.png" alt=""> 
							<span>Failure Node N+1
							</span>
							</li>
						<li>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ic_blue_circle.png" alt="">
							<span>Master N+1
							</span>
							</li>
						<li>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ic_red.png" alt="">
							<span>Master N
							
							</span>
						</li>
						<li>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ic_red_circle.png" alt="">
							<span>Failure Node N</span>
						</li>
					</ul>					

				</div>
			</div><!-- .row -->
		</div><!--.container-->
	</section><!--section-->
	
	<section id="dualchain"  class="section-tech">
		<div class="container" >
			<div class="row section-title">
				<div class="col-md-12">
					<h2>DUAL CHAIN</h2>
				</div>
				<div class="col-md-12">
					<p class="kr">
						DUAL CHAIN이란 플랫폼 내부에서 작동하는 프라이빗 체인과 외부의 이더리움 체인을 말합니다. <br>
						두 가지 특징적인 체인의 결합은 ORICHALCOS가 지양하는 커다란 목표와 관련 있습니다.

					</p>
					<ul>
						<li>플랫폼이 지원하는 서비스에 대한 높은 보안과 신뢰성, 그리고 속도</li>
						<li>블록 체인의 예상치 못한 훼손, 침입에 대응할 수 있는 데이터 베이스 구축</li>
						<li>개인의 디지털 자산 관리에 필요한 Dapp과 데이터 베이스 연결</li>
					</ul>
				</div>	
				<div class="col-md-12">
					<p>
						
						많은 양의 데이터 저장 및 처리에 현재의 블록체인은 용량과 처리 속도에 한계가 있습니다. <br>
						사용자 데이터 또는 게임 데이터  등 용량이 방대한 정보 중 저장될 필요가 있는 데이터는 블록체인에 저장하지 않고 분산 스토리지에 저장되어 관리됩니다. <br>
						사용자 데이터를 저장하는 영역이 생성되고, 데이터베이스의 위치를 나타내는 포인터를 블록의 데이터 영역에 저장함으로써 블록 전송 시간을 단축시키고 트랜잭션 처리를 가속화 시킬 수 있습니다.

					</p>
				</div>							
			</div>
			<div class="row">
				<div class="col-md-5">
					<h3 class="text-left">ALGORITHMIC CENTRAL BANK</h3>
					<p class="kr">
						오늘날 사용되는 법정 화폐와 달리 대부분의 암호화폐에는 구매력을 안정적으로 유지할 수 있는 메커니즘이 없습니다. 이것은 수요의 산발적인 변동이 가격에 막대한 변화를 일으킬 수 있다는 것을 의미합니다.

					</p>
					<p class="kr">
						플랫폼이 사용자에게 광범위하게 활용되고 사용자의 활동에 대한 가치가 시시각각 변하는 것을 방지하기 위하여 우리는 두 개의 체인에 두 개의 토큰을 분할 운영합니다.
					</p>	
					<p class="kr">
						이 두 개의 블록체인을 통해 유통되는 토큰을 위한 알고리즘 중앙은행(ACB)가 존재합니다. ACB는 내부 플랫폼의 가치 안정화를 위한 두 토큰의 환율에 대한 입금과 인출을 관리합니다. 
					</p>	
									
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-6 diagram">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/diagram_technology02.png" alt=""> 
				</div>
				<div class="col-md-12">
					<ul class="kr diagram-icon">
						<li>- 플랫폼 내부 체인에서 유통되는 ORIC STONE은 법정화폐 또는 화폐를 나타내는 지표와 연동하여 안정된 가격이 보장됩니다.</li>
						<li>- ORIC TOKEN은 이더리움 토큰으로 발행되어 유동적인 화폐 가치를 가집니다.</li>
						<li>- ACB는 토큰 환전 시 스마트 컨트랙트와 통화 정책에 의해  환전비율, 수수료 공제 등 다양한 기능을 수행합니다.</li>
						<li>- ACB는 CENTRAL TREASURY에 보관된 ORIC TOKEN의 잔고 현황을 실시간 감독하여 거래에 반영합니다.</li>
					</ul>						
				</div>
			</div><!-- .row -->
		</div><!--.container-->
	</section><!--section-->

	<section id="roadmap" class="section-tech">
		<div class="container" >
			<div class="row section-title">
				<div class="col-md-12">
					<h2>
						ROADMAP
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<ul class="roadmap-list">
						<li>
							 <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ic_time.png" alt="">
							<h4>Q1 2018</h4>
							<article>
								<p>Undertake white paper</p>
								<p>Recruitment</p>
							</article>
						</li>
						<li>
							 <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ic_time.png" alt="">
							<h4>Q2 2018</h4>
							<article>
								<p>Orichalcos Incorporation finalized</p>
								<p>Finalize and publish white paper</p>
								<p>Complete token generation system</p>
								<p>Private Sale</p>
							</article>
						</li>
						<li>
							 <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ic_time.png" alt="">				
							<h4>Q3 2018</h4>
							<article>
								<p>Private and pre-sale start</p>
								<p>KYC registration</p>
								<p>Completion of technical white paper</p>
							</article>
						</li>
						<li>
							 <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ic_time.png" alt="">			
							<h4>Q4 2018</h4>
							<article>
								<p>Crowdsale end</p>
								<p>Token Distribution Complete</p>
								<p> Exchange listing</p>
								<p>Blue Print complete</p>
							</article>
						</li>
					</ul>						
				</div>
				<div class="col-md-6">
					<ul class="roadmap-list">
						<li>	
							 <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ic_time.png" alt="">	
							<h4>Q1 2019</h4>
							<article>
								<p>Global Tour : Meetup</p>
								<p>Finalize blueprint for platform</p>
								<p> First game integration test</p>
						</li>
						<li>
							 <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ic_time.png" alt="">
							<h4>Q2 2019</h4>
							<article>
								<p>Most viable product (MVP) Beta</p>
								<p>Testnet launch for Oric stone</p>
								<p>First Beta game lauch on testnet</p>
							</article>	
						</li>
						<li>
							 <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ic_time.png" alt="">
							<h4>Q3 2019</h4>
							<article>
								<p>MVP initial release</p>
								<p>Community and Ads Testnet Launch</p>
								<p>API open</p>
							</article>
						</li>
						<li>
							 <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ic_time.png" alt="">
							<h4>Q4 2019</h4>
							<article>
								<p>Global permission site open</p>
								<p>Main-net deployment</p>
							</article>
						</li>
					</ul>
				</div>
			</div><!-- .row -->
		</div><!--.container-->
	</section><!--section-->
</main><!-- Wrapper end -->

<?php get_footer(); ?>
