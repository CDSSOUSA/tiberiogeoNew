<div class="col-lg-9 col-md-12">
    <div id="featured-slider" class="owl-carousel ts-overlay-style ts-featured">

        <div class="item" style="background-image:url(<?= base_url(); ?>/assets/img/world/<?= $dataWorld['image-main']; ?>); height:560px">
        <?=anchorCategory($dataWorld['category'], true);?>
            <?php //anchor('category/' . $dataWorld['category'], toCategory($dataWorld['category']), array('class' => 'post-cat ts-orange-bg')); ?>
            <div class="overlay-post-content">
                <div class="post-content">
                    <h2 class="post-title lg">                       
                        <?= anchorArticle($dataWorld['category'],$dataWorld['title'],$dataWorld['title']);?> 
                       
                    </h2>
                    <p class="text-white"><?= $dataWorld['resume']; ?></p>
                    <ul class="post-meta-info">
                        <li class="author"><a href="#"><img src="<?= base_url(); ?>/assets/images/avater/logo-avater.png" alt="">TiberioGeo</a></li>
                        <li><i class="fa fa-clock-o"></i> <?= toDatePost($dataWorld['date']); ?></li>
                        <li class="active"><i class="icon-fire"></i> 4887</li>
                    </ul>
                </div>
            </div>
            <!--/ Featured post end -->
        </div>
        <!-- Item 1 end -->
        <div class="item" style="background-image:url(<?= base_url(); ?>/assets/img/brazil/<?= $dataBrazil['image-main']; ?>)">

            <?=anchorCategory($dataBrazil['category'], true);?>
        
            <div class="overlay-post-content">
                <div class="post-content">
                    <h2 class="post-title lg">
                        <?= anchorArticle($dataBrazil['category'],$dataBrazil['title'],$dataBrazil['title']);?> 
                    </h2>
                    <p class="text-white"><?= $dataBrazil['resume']; ?></p>
                    <ul class="post-meta-info">
                        <li class="author">
                            <a href="#">
                                <img src="<?= base_url(); ?>/assets/images/avater/author1.jpg" alt="">Donald Ramos</a></li>
                        <li><i class="fa fa-clock-o"></i> March 21, 2019</li>
                        <li class="active"><i class="icon-fire"></i> 3,005</li>
                    </ul>
                </div>
            </div>
            <!--/ Featured post end -->
        </div>
        <!-- Item 2 end -->
        <div class="item" style="background-image:url(<?= base_url(); ?>/assets/images/news/travel/travel3.jpg)">
            
        <?=anchorCategory($dataGeography['category'], true);?>
        
            <div class="overlay-post-content">
                <div class="post-content">
                    <h2 class="post-title lg">
                        <?= anchorArticle($dataGeography['category'],$dataGeography['title'],$dataGeography['title']);?> 
                        </h2>
                    <ul class="post-meta-info">
                        <li class="author"><a href="#"><img src="<?= base_url(); ?>/assets/images/avater/author1.jpg" alt="">Donald Ramos</a></li>
                        <li><i class="fa fa-clock-o"></i> March 21, 2019</li>
                        <li class="active"><i class="icon-fire"></i> 3,005</li>
                    </ul>
                </div>
            </div>
            <!--/ Featured post end -->
        </div>
        <!-- Item 3 end -->
    </div>
    <!-- Featured owl carousel end-->
</div>