<style>
body { padding: 0px; }
#content {
    display: block;
    margin-top: 96px;
}

.homepage {}

.homepage--snakes {
    background-color: #f3f2ee;
    text-align: center;
}

.homepage--menu {

}

.hexagon {
    width: 100px;
    height: 55px;
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
</style>




<div class="homepage">

    <div class="homepage--snakes">
        <div class="container">
            <img src="<?php echo $SITE_URL; ?>/static/img/home/snakes.png" alt="Snakes" style="width: 1024px; max-width: 100%;">
        </div>
    </div>

    <div class="homepage--menu container">

        <div class="span3 offset1 text-center">
            <div class="hexagon blue">
                Oi ?
            </div>

            <h4>Événements</h4>

            <p>Tous les activités</p>
        </div>

        <div class="span3 text-center">
            <div class="hexagon yellow">
                Oi ?
            </div>

            <h4>Événements</h4>

            <p>Tous les activités</p>
        </div>

        <div class="span3 text-center">
            <a class="hexagon red">
                Oi ?
            </a>

            <h4>Événements</h4>

            <p>Tous les activités</p>
        </div>
    </div>

</div>