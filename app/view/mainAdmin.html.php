<html>
<!doctype html>
<html lang="en">
	<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="/myStyle.css">
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
    <title>Отели для вашего спокойного отдыха</title>
	</head>
	<body>
		<div class = "container-fluid " style = "padding-right: 0px; padding-left: 0px;">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="/">
					<img src="/img/logo.png" class="" alt="logo" width="175" height="auto" >
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="/">Домашняя страница<span class="sr-only">(current)</span></a>
						</li>
					
						<li class="nav-item">
							<a class="nav-link" href="/admin/admin.php?admin=list">Удаление</a>
						</li>
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Добавление
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="/admin/admin.php">Добавление отеля</a>
								<a class="dropdown-item" href="/admin/adminArticle.php">Добавление блока</a>
								<a class="dropdown-item" href="/admin/adminConfig.php">Конфигурации</a>
								<a class="dropdown-item" href="/admin/feedBacks.php">Отзыв</a>
								<a class="dropdown-item" href="/admin/prevew.php">Превью</a>
								<div class="dropdown-divider">
								</div>
								
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Реклама
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="/ads/GAdsAdmin.php">Сегодня</a>
						
								<div class="dropdown-divider">
								</div>
								
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href = "/admin/login.php">Выйти</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>

<div class = "row">
		<div class = "col-12 col-sm-12 col-md-12 col-lg-12">
			<?=$err?>
			<?=$content?>
			<?=$articles?>
			<?=$fb?>
			<?=$listForDel?>
		</div>
</div>
<div class = "row">
		<div class = "col-12 col-sm-12 col-md-12 col-lg-12">
			<img class = "create_site" src = "http://2kompa.ru/files/Create_site.png" style = "width:100%">
		</div>
</div>


</body>
</html>