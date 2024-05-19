<?php session_start(); ?>
<?php if (file_exists('./logicals/' . $keres['fajl'] . '.php')) {
	include("./logicals/{$keres['fajl']}.php");
} ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>
	<script defer>
		<?php
		$js = file_get_contents('script.js');
		echo $js;
		?>
	</script>
	<style type="text/css">
		<?php
		$css = file_get_contents('css/styles.css');
		echo $css;
		?>
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>

<body class="container-fluid full-height d-flex flex-column">
	<header class="header">
		<div class="header-info">
			<img class="logo" src="./media/<?= $header['imgsrc'] ?>" alt="<?= $header['imgalt'] ?>">
			<h1 class="heading"><?= $header['title'] ?></h1>

			<?php if (isset($_SESSION['login'])) { ?> <div>Bejlentkezve: <strong><?= $_SESSION['lname'] . " " . $_SESSION['fname'] . " (" . $_SESSION['login'] . ")" ?></strong> </div><?php } ?>

		</div>
		<nav class="header-nav">
			<ul class="menu">
				<?php foreach ($pages as $url => $oldal) { ?>
					<?php if (!isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
						<li <?= (($oldal == $keres) ? ' class="active menu_item"' : ' class="menu_item"') ?>>
							<a href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
								<?= $oldal['szoveg'] ?></a>
						</li>
					<?php } ?>
				<?php } ?>
			</ul>
		</nav>
	</header>

	<div class="flex-fill">

		<?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
	</div>


	<footer class="footer">
		<?php if (isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
	&nbsp;
	<?php if (isset($lablec['company'])) { ?><?= $lablec['company']; ?><?php } ?>
	</footer>
</body>

</html>