<!-- Navigation Bar-->
<header id="topdfnav">
	<nav class="navbar navbar-expand-lg navbar-inverse navbar-static-top bg-light">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="<?php echo $_SESSION['user']['level'] == 10?'completed-leads':'dashboard' ?>" class="navbar-brand logo"><img width="150" style="margin-bottom:10px;margin-left:30px;min-height:auto;" src="<?php echo  Config::WEBSITE_URL . "/assets/img/logo.png" ?>" alt="Logo"></a>
			</div>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php if($_SESSION['user']["level"] == 10){ ?>
				<ul class="nav navbar-nav">
					<li class="dropdown <?php echo in_array($page, array('agent_lead', 'completed-leads', 'partial-leads', 'address-capture', 'tasks'))?'active':''; ?>">
						<a href="completed-leads" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="md md-contacts"></i>
							<?php echo $tr['leads'] ." (" . $stats['completed'] . ")" ?><span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li class="<?php echo $page == 'completed-leads'?'active':''; ?>"><a href="completed-leads">
									<?php echo $tr['completed_leads'] ." (" . $stats['completed'] . ")" ?></a></li>
							<li class="<?php echo $page == 'partial-leads'?'active':''; ?>"><a href="partial-leads">
									<?php echo $tr['partial_leads'] ." (" . $stats['partial'] . ")" ?></a></li>
							<?php if($_SESSION['user']['agent_slug'] == 'advertiser'): ?>
							<li class="<?php echo $page == 'address-capture'?'active':''; ?>"><a href="address-capture">
									<?php echo $tr['address_capture'] ." (" . $stats['address'] . ")" ?></a></li>
							<li class="<?php echo $page == 'tasks'?'active':''; ?>"><a href="tasks">
									<?php echo $tr['task'] . " (".COUNT($db->getUpcomingTasks()).")" ?></a></li>
							<?php endif ?>
						</ul>
					</li>
					<li class="<?php echo $page == 'landing-page'?'active':''; ?>">
						<a href="landing-page"><i class="md md-extension"></i>
							<?php echo $tr['landing_page'] ?></a>
					</li>
					<li class="<?php echo $page == 'funnels'?'active':''; ?>">
						<a href="funnels"><i class="md md-description"></i>
							<?php echo $tr['funnels'] ?></a>
					</li>

					<?php if($_SESSION['user']['agent_slug'] == 'advertiser'): ?>
					<li class="<?php echo $page == 'evaluation'?'active':''; ?>">
						<a href="evaluation"><i class="md md-receipt"></i>
							<?php echo $tr['evaluation'] ?></a>
					</li>
					<?php endif ?>

					<li class="<?php echo $page == 'settings'?'active':''; ?>">
						<a href="settings"><i class="md md-settings"></i>
							<?php echo $tr['settings'] ?></a>
					</li>
					<li>
						<a href="<?php echo isset($_SESSION['admin'])?'?backAdmin':'logout' ?>"><i class="md md-exit-to-app"></i>
							<?php echo $tr['log_out'] ?></a>
					</li>
				</ul>
				<?php $areas = $db->getOtherAreas($_SESSION['user']['user_id'], $_SESSION['user']['area_id']); ?>
				<?php if(!empty($areas)){ ?>
				<div class="btn-group pull-right" style="margin: 30px 10px 0 0">
					<button type="button" class="btn btn-success" disabled style="opacity: 0.85;">
						<?php echo $tr['switch_area'] ?></button>
					<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
						<span class="caret"></span>
					</button>

					<ul class="dropdown-menu" role="menu">
						<?php

							foreach ($areas as $value) {
								if ($value['agent_slug'] == "subscriber")
									$bull = 'b';
								else if ($value['agent_slug'] == "advertiser")
									$bull = 's';
								if($value['agent_id'] != $_SESSION['user']['agent_id'])
									echo '<li><a href="?switchAccount='.IDObfuscator::encode($value['agent_id']).'"><img style="width: 20px;" src="assets/img/button_'. $bull .'.png" alt="buyer">'.explode(",", $value['area_name'])[0].'</a></li>';
						}?>
						<li><a data-toggle="modal" data-target="#requestNewArea" style="cursor: pointer"><span class="text-danger"><strong>
										<?php echo $tr['new_area'] ?></strong></span></a></li>
					</ul>
				</div>
				<?php }else{ ?>
				<a class="btn btn-success pull-right" data-toggle="modal" data-target="#requestNewArea" style="cursor: pointer; margin: 30px 10px 0 0"><strong>
						<?php echo $tr['new_area'] ?></strong></a>
				<?php } ?>

				<?php }else if($_SESSION['user']["level"] == 20){ ?>
				<ul class="nav navbar-nav">
					<li class="<?php echo $page == 'leads'?'active':''; ?>">
						<a href="leads"><i class="md md-contacts"></i>Leads</a>
					</li>

					<li class="<?php echo $page == 'areas'?'active':''; ?>">
						<a href="areas"><i class="md md-my-location"></i>Areas</a>
					</li>
					<li class="<?php echo $page == 'agents'?'active':''; ?>">
						<a href="agents"><i class="md md-perm-identity"></i>Customer</a>
					</li>
					<li>
						<a href="logout"><i class="md md-exit-to-app"></i>Log Out</a>
					</li>
				</ul>
				<?php }else{ ?>
				<ul class="nav navbar-nav">
					<li class="<?php echo $page == 'leads'?'active':''; ?>">
						<a href="leads"><i class="md md-contacts"></i>Leads</a>
					</li>

					<li class="<?php echo $page == 'areas'?'active':''; ?>">
						<a href="areas"><i class="md md-my-location"></i>Areas</a>
					</li>
					<li class="<?php echo $page == 'agents'?'active':''; ?>">
						<a href="agents"><i class="md md-perm-identity"></i>Customer</a>
					</li>
					<li class="dropdown <?php echo in_array($page, array('agent_buyer_budget', 'agent_seller_budget'))?'active':''; ?>" id="dropdownMenu1">
						<a href="agent_seller_budget"><i class="md md-shopping-basket"></i>Budgets</a>
						<!-- <ul class="dropdown-menu">
							<li><a href="agent_buyer_budget"><img style="width: 20px;" src="assets/img/sub.png" alt="buyer"> Subscriber</a></li>
							<li><a href="agent_seller_budget"><img style="width: 20px;" src="assets/img/sub.png" alt="buyer"> Advertiser</a></li>
						</ul> -->
					</li>
					<?php if($_SESSION['user']["level"] != 0): ?>
					<li class="<?php echo in_array($page, array('invoices', 'paypal', 'reccurent_overview', 'subscriptions', 'any_payment'))?'active':''; ?>">
						<a href="invoices"><i class="md md-credit-card"></i>Invoices</a>
					</li>
					<?php endif ?>
					<li class="dropdown <?php echo in_array($page, array('buyer_landings', 'seller_landings'))?'active':''; ?>">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="md md-extension"></i>Landing Pages <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="buyer_landings">Subscriber</a></li>
							<li><a href="seller_landings">Advertiser</a></li>
						</ul>
					</li>
					<li class="<?php echo $page == 'emails' || $page == " templates" || $page=="groups" ?'active':''; ?>">
						<a href="emails"><i class="md md-description"></i>Emails</a>
					</li>
					<li class="<?php echo $page == 'funnels'?'active':''; ?>">
						<a href="funnels"><i class="md md-assignment"></i>Funnels</a>
					</li>

					<?php if($_SESSION['user']["level"] != 0): ?>
					<li class="<?php echo $page == 'users'?'active':''; ?>">
						<a href="users"><i class="md md-account-child"></i>Users</a>
					</li>
					<?php endif ?>
					<li>
						<a href="logout"><i class="md md-exit-to-app"></i>Log Out</a>
					</li>
				</ul>
				<?php } ?>
				<!-- End navigation menu        -->
			</div>
		</div>
	</nav>
</header>
<div class="wrapper_info container">
	<div class="row">
		<div class="col-sm-12">
			<?php if($_SESSION['user']["level"] == 10){
				$bull = 's';
				if ($_SESSION['user']['agent_slug'] == "subscriber")
					$bull = 'b';
				else if ($_SESSION['user']['agent_slug'] == "advertiser")
					$bull = 's';
			?>
			<div class="avatar" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo $tr['add_avatar'] ?>" style="background-image: url(uploads/avatars/<?php echo trim($_SESSION['user']['agent_avatar']) ?>)"></div>
			<h1 class="text-danger m-b-0">
				<?php echo $_SESSION['user']['agent_name'] ?>
			</h1>
			<h3 class="m-t-0">
				<?php echo $_SESSION['user']['area_name'] ?>
			</h3>
			<h4 class=""><img style="width: 30px;" src="assets/img/button_<?php echo $bull ?>.png" alt="subscriber">
				<?php echo $tr[$_SESSION['user']["agent_slug"]] ?>
			</h4>
			<?php } ?>
		</div>
	</div>
</div>
<!-- End Navigation Bar-->
