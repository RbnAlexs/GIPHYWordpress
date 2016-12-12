<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
	<title><?php wp_title('&raquo;','true','right'); ?><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="fb:app_id" content="1791072814463207" />
	<link rel="profile" href="http://gmpg.org/xfn/11"> 
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- Hoja de estilo -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css">
	<!-- Bootstrap 4 alpha -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
	<!-- JQuert 2.2 -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory');?>/js/p5.min.js"></script>
	<script src="<?php bloginfo('template_directory');?>/js/p5.sound.js"></script>
	<script src="<?php bloginfo('template_directory');?>/js/p5.dom.js"></script>

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?> >

	

	<header id="home" class="header container" data-toggle="sticky-onscroll">

		<div class="row">

				<div class="col-xs-3 col-md-1 logo_header ">
					<?php
					echo '<div class="logo_header"><a href="'.esc_url( home_url( '/' ) ).'">';
						echo '<h1>PRUEBA TV</h1>';
					echo '</a></div>'; 
					?>
				</div>

				<div class="col-md-5 col-md-push-6 hidden-md-down upload">
					
					<a href="" style="background-color: #93f;">Subir GIF</a>
					<a href="" style="    background-color: #4c197f;">Crear</a>
					<a href="" style="        background-color: #5c5c5c;    padding: 0 15px;    margin-left: 14px;"><i class="fa fa-user" aria-hidden="true" style="background: #212121;padding: 12px 14px; margin: 0 -16px;"></i><span style="    margin: 0 15px;"> Ingresar</span></a>

				</div>

				<div class="row">

					<div class="col-xs-12">
					
						<nav> 
							<?php
							$i = 0;
							foreach(get_categories('exclude = 1') as $categorias) {
								//condicional para class 'active'
								if ($i == 0)
									$first_item = 0;
								else
									$first_item = 1;
								//categoria x ID
								$categoria_id = $categorias->cat_ID;
								//categoria x Slug
								$categoria_slug = $categorias->slug;
								home_tabs ($categoria_id, $categoria_slug, $first_item);
								$i++;
							}

							function home_tabs($id_categoria, $slug_categoria, $item_first){
									echo '<a href="'.esc_url( home_url( '/' ) ).'category/'.$slug_categoria.'" ><span style="z-index: 1;">'.get_cat_name($id_categoria).'</span> <div style="background-image: url('.z_taxonomy_image_url($id_categoria).')"></div> </a>';
							}
							?>

						</nav>
					</div>

				</div>

				<div class="col-md-4"></div>

				
				<div class="row">
					<div class="col-xs-12">
						<form class="navbar-form buscar_content" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
							<div class="form-group">
								<div class="input-group">
									<input class="form-control buscar" placeholder="Buscar en todos los gifs" type="text" value="" name="s" id="s">
				    				<div class="input-group-btn">
				    					<button class="btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				    				</div>
								</div>
							</div>
						</form>
					</div>
				</div>

		</div>

	</header> 








