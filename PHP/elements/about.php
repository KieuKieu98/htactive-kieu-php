<section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">ABOUT HT ACTIVE</h1>
                    <div class="separator"></div>
                    <p class="lead text-center ">HT Active is the team of Young &amp; Brilliant people. We will help and support all you need about Software Solutions. We’re developers, designers, support specialists and gamers. We have all you needs.</p>
                    <br>
                    <div class="team">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="title">Meet the team - HT Active</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="imgAboutus" src="images/section-image-2.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <p>We work on the services, product and comunication. We love what we do, and who we do it with. To HT Active, all customers are friends.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <p>HT Active wouldn’t be what it is without the incredible and loving contributions of our member. Thanks to everyone who’s put their heart and their energy into this community.</p>
                                    <a href="/about" class="btn btn-white">Read More</a>
                                </div>
                                <div class="space hidden-md hidden-lg"></div>
                            </div>
                            <div class="col-md-6">
                                <div id="accordion">
                                <?php foreach ($abouts as $key => $about) { ?>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#about-<?php echo $key?>" aria-expanded="true" aria-controls="<?php echo $key?>"><i class="<?php echo $about["icon"] ?>"></i>
                                            <?php echo $about["title"] ?>
                                            <span class="collapsed"><p class="colla"><b><i class="fa fa-plus" aria-hidden="true"></i></b></p></span>
                                        <span class="expanded"><p class="colla"><b><i class="fa fa-minus" aria-hidden="true"></i></b></p></span></a>
                                        </div>
                                        <div id="about-<?= $key ?>" class="collapse <?php if($key == 0 ) { echo 'show'; } ?>">
                                            <div class="card-body">
                                            <?php echo $about["description"] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div> <br>
                </div>
            </div>
        </div>
    </section>