<section id="choose">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">WHY CHOOSE HT ACTIVE</h1>
                    <div class="separator"></div>
                    <p class="lead text-center">HT Active offers a great service in the design, development and programming of your website/application. We strive to offer the best solution for your business and impartial advice at an honest price. We are constantly investigating
                        new technologies and recommend them when they make sense.</p>
                    <div class="tabs  border-top">
                           <div class="row">
                               <div class="col-3 tabs-item">
                                   <div class="nav nav-cus flex-column nav-pills nav-pills-cus" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                       <?php foreach ($whyChoose as $key => $chooseItem) { ?>
                                           <a class="nav-link nav-link-cus <?php   if($key == '0') { echo 'active'; }  ?> " id="v-pills-home-tab<?php echo $key?>" data-toggle="pill" href="#v-pills-home<?php echo $key?>" role="tab" aria-controls="v-pills-home" aria-selected="true"><?php echo $chooseItem["title"]?></a>
                                       <?php }?>
                                   </div>
                               </div>
                               <div class="col-9">
                                   <div class="tab-content" id="v-pills-tabContent">
                                   <?php foreach ($whyChoose as $key => $chooseItem) { ?>
                                   <div class="tab-pane fade <?php if($key == '0') { echo 'show active'; }?>" id="v-pills-home<?php echo $key?>" role="tabpanel" aria-labelledby="v-pills-home-tab<?php echo $key?>">
                                       <h1 class="text-center"><?php echo $chooseItem["title"]?></h1>
                                       <div class="row">
                                           <div class="col-12">
                                               <p><?php echo $chooseItem["description"]?></p>
                                               <img class="img-why-choose" src="<?php echo $chooseItem["image"]?>" alt="">
                                           </div>
                                       </div>
                                   </div>
                                   <?php }?>
                                   </div>
                               </div>
                           </div>
                       </div>
                </div>
            </div>
        </div>
    </section>