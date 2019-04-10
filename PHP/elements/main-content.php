
<section id="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center title">SERVICE</h1>
                    <div class="separator"></div>
                    <p class="lead text-center">By using our services, you will get all of the great experience.</p>
                    <div class="row">
                        <?php foreach( $services as $service){ ?>
                           <div class="col-sm-4">
                           <div class="box-style-1" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
                            <i class="<?php echo $service["icon"] ?>"></i>
                           <h2><?php echo $service["title"] ?></h2>
                            <p><?php echo $service["content"] ?></p>
                           <a href="services" class="btn-default btn btn-main">Read More</a>
                            </div>
                            </div>
                       <?php } ?>
                        

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="call-to-action">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="title text-center">DON'T MISS OUT, CONTACT US NOW!</h2>
                        <p class="text-center">We will reply your message as soon as possible.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center button-contact">
                            <a href="/contact" class="btn btn-default btn-lg">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   