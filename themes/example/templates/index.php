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

        <!-- REMOVE THIS!!! -->
        <script src="https://raw.github.com/imsky/holder/master/holder.js"></script>
    </head>

    <body>

        <div id="wrapper">

            <header id="header">
                <?php include("nav.php"); ?>
            </header>

            <main id="content" aria-role="main">
                <?php include("home.php"); ?>
            </main>

            <footer id="footer">
                <?php include("footer.php"); ?>
            </footer>

        </div>

    </body>
</html>