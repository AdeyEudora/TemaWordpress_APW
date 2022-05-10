<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>O WP TITLE TÁ DANDO ERRO</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>
<body>
	<div class="container geral">
		<div class="row headd">
			<div class="col-md-3 logo">
                <center class="center">
                    <a href="<?php echo site_url(); ?>">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/skull.png" class="logo">
                    </a>
                </center>
			</div>
		</div>
	</div>

	<?php wp_head();?>
</body>
</html>
