<style>
#mainmenu {
    background-color: #4b4b4b;

    line-height: 96px;

    position: fixed;
    top: 0;
    left: 0;
    right: 0;
}

#logo {

}

.mainmenu--nav {
    display: table;
    text-align: center;
    width: 100%;
}

.mainmenu--nav a {
    color: white;
    display: table-cell;
    width: 25%;
}
</style>

<div id="mainmenu">

    <nav class="container" aria-role="navigation">
        <div class="row">
            <div class="span3">
                <a id="logo" href="<?php echo $SITE_URL; ?>" class="pull-left">
                    <img src="<?php echo $SITE_URL; ?>/static/img/logo.png" />
                </a>
            </div>

            <div class="span7">
                <div class="mainmenu--nav">
                    <a href="#">Blog</a>
                    <a href="">Calandrier</a>
                    <a href="">À Propos</a>
                    <a href="">Commandite</a>
                </div>
            </div>

            <div class="span2">

            </div>
        </div>



    </nav>

</div>