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
    margin-left: 10px;
}

.mainmenu--nav {
    display: table;
    text-align: center;
    width: 100%;
}

.mainmenu--nav a {
    color: white;
}

.mainmenu--nav span {
    display: table-cell;
    width: 25%;
}

.mainmenu--search {
    float: right;
}

.mainmenu--search a {
    margin-right: 10px;
}

@media (max-width: 767px) {
    #mainmenu {
        position: static;
    }
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

            <div class="mainmenu--search">
                <a href="#"><img src="holder.js/21x22" alt="Search" /></a>
                <a href="#"><img src="holder.js/21x22" alt="Settings" /></a>
            </div>

            <div class="span7">
                <div class="mainmenu--nav">
                    <span><a href="#">Blog</a></span>
                    <span><a href="#">Calandrier</a></span>
                    <span><a href="#">À Propos</a></span>
                    <span><a href="#">Commandite</a></span>
                </div>
            </div>


        </div>

    </nav>

</div>