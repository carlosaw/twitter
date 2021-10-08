<html>
	<head>
		<title>Twitter</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="assets/css/template.css" type="text/css" />
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/script.js"></script>
	</head>

<body>
	<div class="topo">
		<div class="topoint">
			<div class="topoleft">Twitter</div>
			<div class="toporight">Olá: <?php echo $viewData['nome']; ?> - <a href="/twitter/login/sair" style="color:#00FF7F;">Sair</a>
			<div class="clear:both;"></div>
			</div>
		</div>
	</div>

	<div class="container">
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</div> 

</body>
</html>