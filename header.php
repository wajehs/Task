<?php 
	$arr = explode("/",$_SERVER['REQUEST_URI']); 
?>
<header>
	<div>
		<div class="text-background padding-div">
			<div class="padding-null row">
				<div class="col-md-8 col-sm-8 offset-md-1 padding-null">
					MO - DO: 08:00 - 12:00 und 13:00 - 17:00, FR: 8:00 - 13:00 Uhr 
				</div>
				<div class="col-md-3 col-sm-3">
					Sie erreichen uns unter: +43 (0)4585 / 24567
				</div>
			</div>
		</div>
		<div class="padding-logo-div row">
			<div class="col-md-4 col-sm-4 col-5 offset-md-1 padding-null">
				<a href="index.php"><img src="assets/img/logo.svg" alt="logo" class="logo" /></a>
			</div>
			<div class="col-md-7 col-sm-7 col-7 text-right">
				<ul class ="menu-list">
					<li class="menu-items"><a href="#" class="nav-link">Leistungen</a></li>
					<li class="menu-items" style="<?php if($arr[count($arr)-1] == 'books.php')echo "color:#fff !important;background:#017dc5 !important"; ?>"><a href="books.php" class="nav-link"  style="<?php if($arr[count($arr)-1] == 'books.php')echo "color:#fff !important;"; ?>">Bucher</a></li>
					<li class="menu-items"><a href="#" class="nav-link">Uber uns</a></li>
					<li class="menu-items"><a href="#" class="nav-link">Referenzen</a></li>
					<li class="menu-items"><a href="#" class="nav-link">Kontakt</a></li>
				</ul>
				<div class="mobile-view-menu">
					<div class='menu-icon' onclick="$('.mobile-menu-list').toggle();"><i class="fa fa-bars"></i></div>
					<ul class ="mobile-menu-list">
						<li class="mobile-menu-items"><a href="#" class="mobile-nav-link">Leistungen</a></li>
						<li class="mobile-menu-items" style="<?php if($arr[count($arr)-1] == 'books.php')echo "color:#017dc5 !important;background:#fff !important"; ?>"><a href="books.php" class="mobile-nav-link" style="<?php if($arr[count($arr)-1] == 'books.php')echo "color:#017dc5 !important;"; ?>">Bucher</a></li>
						<li class="mobile-menu-items"><a href="#" class="mobile-nav-link">Uber uns</a></li>
						<li class="mobile-menu-items"><a href="#" class="mobile-nav-link">Referenzen</a></li>
						<li class="mobile-menu-items"><a href="#" class="mobile-nav-link">Kontakt</a></li>
					</ul>
				<div>
				</div>
			</div>
		</div>
	</div>
</header>