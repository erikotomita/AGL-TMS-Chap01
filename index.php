<?php include_once "_config/nav.php"?>


<!doctype html>
	<html lang="ja" itemscope itemtype="http://schema.org/WebSite" prefix="og: http://ogp.me/ns#">
	<head prefix="og: http://ogp.me/ns#">
		<?=$HTML['pageHeaderJsCss'];?>
		<link href="<?=$pas;?>app/css/style.css?<?=$time;?>" rel="stylesheet" type="text/css">
	</head>

	<body id="body">
		<div class="wrapper">
			<main id="main">
        <section class="mainv">
					<p>test</p>
        </section>
      </main>

			<?php include($pas . '_config/footer.php');?>

		</div>
		<?=$HTML['pageFooterJs'];?>
	</body>
</html>
