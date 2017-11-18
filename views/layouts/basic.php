<?php 
    use app\assets\AppAsset;
    
    AppAsset::register($this);
?>

<?php $this->beginPage()?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="veiwport" content="width-device-width initial-scale=1">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <script type="text/javascript">
            function golink()
            {
                    document.location.href = "index.php?r=site/registration";
            }
            function gotolink()
            {   
                    document.location.href = "index.php?r=site/autoris";
            }
	</script>
        <?php $this->head()?>
</head>
<body>
    <?php $this->beginBody()?>
	<div class="header">
		<img src="css/image/bg1.png" class="bg1">
		<img src="css/image/bg2.png" class="bg2">
	</div>
	<div class="menu">
		<ul>
			<li><a href="index.php?r=site/"><img src="css/image/main.png"></a></li>
			<li><a href="#"><img src="css/image/main.png"></a></li>
			<li>
				<a href="index.php?r=site/autoris"><img src="css/image/main.png" class="li-menu-hov"></a>
				<ul class="inList">
					<li><a href="#">Мои рецепты</a></li>
					<li><a href="#">Хочу приготовить</a></li>
					<li><a href="#">Турнир</a></li>
					<li><a href="#">Мой профиль</a></li>
					<li><a href="#">Настройки профиля</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="middle">
		
			<?= $content?>
		
		<div class="rightMenu">
			<img src="css/image/btn_r.png" id="rightmenubar" class="imger">
			<ul class="ulet">
				<li><a href="#">Первое</a></li>
				<li><a href="#">Второе</a></li>
				<li><a href="#">Десерт</a></li>
				<li><a href="#">Салат</a></li>
			</ul>
		</div>
	</div>
	<div class="footer">
	</div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this-> endPage()?>