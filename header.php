<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BlogTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- FontAwesome Icons -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/fontawesome-free/fontawesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">

	<?php wp_head(); ?>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blog_theme' ); ?></a>

	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<a class="navbar-brand" href="#"><img src="/logo.png" alt="Blog posts Magdaleny" height="72"></a>
      
      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        	<span class="navbar-toggler-icon"></span>
      	</button>
			
		<?php
			wp_nav_menu( array(
				'theme_location'	=> 'primary',
				'container'			=> 'nav',
				'container_class'	=> 'collapse navbar-collapse',
				'menu_class'		=> 'nav navbar-nav navbar-right'	
			) );
		?>

		<!--<form class="form-inline mt-2 mt-md-0 ">
          <input class="form-control mr-sm-2" type="text" placeholder="* Szukaj..." aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Szukaj</button>
        </form> -->
	</nav>

	<!-- <div class="collapse navbar-collapse" id="navbarCollapse">
        	<ul class="navbar-nav mr-auto">
          		<li class="nav-item active">
            		<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          		</li>
          		<li class="nav-item">
            		<a class="nav-link" href="#">Ogród - wiosną</a>
          		</li>
          		<li class="nav-item">
            		<a class="nav-link disabled" href="#">W trakcie</a>
          		</li>
          		<li class="nav-item dropdown">
            		<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Środki ochronne</a>
            		<div class="dropdown-menu" aria-labelledby="dropdown01">
              			<a class="dropdown-item" href="#">Ocet</a>
              			<a class="dropdown-item" href="#">Nawozy</a>
            		</div>
          		</li>
        	</ul>
        	<form class="form-inline mt-2 mt-md-0">
          		<input class="form-control mr-sm-2" type="text" placeholder="* Wpisz tu coś..." aria-label="Search">
          		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Szukaj</button>
       		</form>
      	</div> 
    </nav>-->