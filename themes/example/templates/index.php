<?php
$SITE_URL = 'http://localhost/mtlpyweb/themes/example';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Put the title here =D</title>
        <meta charset="utf-8" />

        <link rel="stylesheet" href="<?php echo $SITE_URL; ?>/static/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $SITE_URL; ?>/static/css/bootstrap-responsive.min.css" type="text/css" />
        <!--[if lt IE9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>

        <div id="wrapper" class="container">

            <header id="header">


                <?php include("nav.php"); ?>

            </header>

            <main id="content" aria-role="main">

            </main>

            <footer id="footer">

            </footer>

        </div>

    </body>
</html>