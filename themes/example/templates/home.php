<style>
body { padding: 0px; }
#content {
    display: block;
}

.homepage {}

.homepage--snakes {
    background-color: #f3f2ee;
    text-align: center;
    padding-top: 100px;
}

.homepage--menu {

}

.hexagon {
    width: 100px;
    line-height: 55px;
    background: red;
    position: relative;
    display: block;
    cursor: pointer;

    margin: -15px auto 50px auto;
}
.hexagon:before {
    content: "";
    position: absolute;
    top: -25px;
    left: 0;
    width: 0;
    height: 0;
    border-left: 50px solid transparent;
    border-right: 50px solid transparent;
    border-bottom: 25px solid red;
}
.hexagon:after {
    content: "";
    position: absolute;
    bottom: -25px;
    left: 0;
    width: 0;
    height: 0;
    border-left: 50px solid transparent;
    border-right: 50px solid transparent;
    border-top: 25px solid red;
}

.hexagon.blue { background-color: #73cfdd; }
.hexagon.blue:before { border-bottom-color: #73cfdd; }
.hexagon.blue:after { border-top-color: #73cfdd; }


.hexagon.yellow { background-color: #f5cf51; }
.hexagon.yellow:before { border-bottom-color: #f5cf51; }
.hexagon.yellow:after { border-top-color: #f5cf51; }


.hexagon.red { background-color: #ea756c; }
.hexagon.red:before { border-bottom-color: #ea756c; }
.hexagon.red:after { border-top-color: #ea756c; }


@media (max-width: 767px) {
    #content {
        margin-top: 0px;
    }

    .hexagon:not(.blue) {
        margin: 50px auto 50px auto;
    }
}

/* Separator */
.spacer,
.spacer:empty,
.separator,
.separator:empty {
    display: block;
    clear: both;
    background-color: #e6e5e3;
    margin-top: 25px;
    margin-bottom: 25px;
    height: 10px;
}

.spacer,
.spacer:empty {
    background-color: transparent;
}
</style>




<div class="homepage">

    <div class="homepage--snakes">
        <div class="container">
            <img src="<?php echo $SITE_URL; ?>/static/img/home/snakes.png" alt="Snakes" style="width: 1024px; max-width: 100%;">
        </div>
    </div>


    <div class="container">

        <div class="row homepage--menu">

            <div class="span3 offset1 text-center">
                <div class="hexagon blue">
                    <img src="<?php echo $SITE_URL; ?>/static/img/home/icon_events.png" alt="Events" width="40" height="25" />
                </div>

                <h4>Événements</h4>

                <p>Tous les activités</p>
            </div>

            <div class="span3 text-center">
                <div class="hexagon yellow">
                    <img src="<?php echo $SITE_URL; ?>/static/img/home/icon_community.png" alt="Community" width="40" height="35" />
                </div>

                <h4>Communauté</h4>

                <p>Partager votre passion</p>
            </div>

            <div class="span3 text-center">
                <a class="hexagon red">
                    <img src="<?php echo $SITE_URL; ?>/static/img/home/icon_blog.png" alt="Blogue" width="29" height="21" />
                </a>

                <h4>Blogue</h4>

                <p>Des articles, des vidéos...</p>
            </div>
        </div>

        <div class="separator"></div>

        <ul class="thumbnails">

            <li class="span1"></li>

            <li class="span3">
                <div class="thumbnail">
                    <img src="holder.js/279x156" alt="" />

                    <div class="text">
                        <p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rho.</p>
                        <p><a href="#">En savoir plus</a></p>
                    </div>
                </div>
            </li>

            <li class="span3">
                <div class="thumbnail">
                    <img src="holder.js/279x156" alt="" />

                    <div class="text">
                        <p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rho.</p>
                        <p><a href="#">En savoir plus</a></p>
                    </div>
                </div>
            </li>

            <li class="span3">
                <div class="thumbnail">
                    <img src="holder.js/279x156" alt="" />

                    <div class="text">
                        <p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rho.</p>
                        <p><a href="#">En savoir plus</a></p>
                    </div>
                </div>
            </li>

        </ul>

        <div class="separator"></div>

        <div class="row">
            <div class="span12 text-center muted">
                <i>- Nos commanditaires -</i>
            </div>

            <div class="span12">
                <img src="holder.js/100%x200" alt="">
            </div>
        </div>


        <div class="spacer"></div>

    </div>

</div>