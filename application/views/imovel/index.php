<html>
	<head>
		<title><?php echo $titulo; ?></title>
	</head>
	<body>
		<pre><?php print_r($imoveis)?></pre>

		<b><?php print_r($this->session->flashdata('naoExclusao')); ?></b>
	</body>
</html>