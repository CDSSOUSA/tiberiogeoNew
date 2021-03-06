<section class="header-middle">
    <div class="container">
        <div class="row">
            <div class="col-md-4 align-self-center">
                <div class="header-logo">
                    <?php
                    $img = [
                        'src' => base_url() . '/assets/images/logo/logo-topo.png',
                        'class' => 'img-fluid'
                    ];
                    echo anchor('/', img($img));

                    ?>

                </div>
            </div>
            <div class="col-md-8 align-self-center">
                <div class="banner-imgr">
                    <?php
                    $dir = '././assets/images/banner/banner-top/';

                    $banner = [];

                    if (is_dir($dir)) {
                        if ($dh = opendir($dir)) {

                            while (($file = readdir($dh)) !== false) {
                                if ($file != "." && $file != "..") {
                                    $banner[] = $file;
                                }
                            }
                            closedir($dh);
                        }
                    }
                    shuffle($banner);

                    if (!isset($_COOKIE['banner'])) {
                        setcookie(
                            "banner",
                            end($banner),
                            time() + (60 * 10),
                            "",
                            "",
                            true,
                            true
                        );
                    }
                    ?>
                    <img class="img-fluid" src="<?= base_url(); ?>/assets/images/banner/banner-top/<?= isset($_COOKIE['banner']) ? $_COOKIE['banner'] : "banner-header.png" ?>" alt="">
                </div>
            </div><!-- col end -->
        </div><!-- row  end -->
    </div><!-- container end -->
</section>