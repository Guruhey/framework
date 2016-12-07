<!DOCTYPE html>
<html>
<head>
	<title>Web-studio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo SERVER; ?>style/style.css" />
</head>
<body style="background-image:url(images/textura.png)";>
	<div class="headit">
		<div class="obsh container">
			<div class="icn"><img class="logo" src="<?php echo SERVER; ?>images/4k.png" /></div>

			<div class="devteam">
				<span>Dev Team</span>
				<p class="podstr">friends and co.</p>
			</div>
			<div class="menu">
			
				<div class="menu_head"><?php echo $menu;?></div>

			</div>
		</div>
	</div>
	<div class="cont">
		<div class="second">
			<div class="center container">
				<div class="taranin"><p>About</p></div>
				<div class="zagol"><p>About us...</p></div>
				<div class="line"></div><br><br>
			</div>
			<div style="margin-left:270px;" class="text container">
<?php
	$DB = Dbconnect::instance()->getConnect();
    $user = $DB->select('SELECT * FROM `article`');
foreach($user as $shit => $do)
{
	echo '<div class="aeticle">';
	echo ("<h2>$do[title]</h2>");
	echo("<h5>&#1057;&#1086;&#1079;&#1076;&#1072;&#1085;&#1086;: $do[created] | &#1048;&#1079;&#1084;&#1077;&#1085;&#1077;&#1085;&#1086;: $do[update]</h5>");
	echo ("<p>$do[description]</p>");
    echo '<div><br>';
}
?>
			</div>
		</div>
		
	</div>
</body>
</html>