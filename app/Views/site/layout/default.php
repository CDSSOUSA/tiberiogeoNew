<!doctype html>
<html lang="pt-br">

<head>
   <!-- Basic Page Needs =====================================-->
   <meta charset="utf-8">
   <!-- Mobile Specific Metas ================================-->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="shortcut icon" type="image/x-icon" href="<?= $favico; ?>">
   <!-- Site Title- -->
   <title><?= $title; ?></title>
   <!-- CSS   ==================================================== -->
   <!-- CSS here -->
   <?php
   foreach ($css as $path) : ?>
      <link rel="stylesheet" href="<?= $path['path']; ?>">
   <?php endforeach; ?>
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]><script src="../../../oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="../../../oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="body-color">

   <?php echo view("site/header-temp.php"); ?>  
   <?php echo view("site/header.php"); ?>
   <?= $this->renderSection('content') ?>

   <?php echo view("site/banner-main.php"); ?>
   <!-- footer social list start-->
   <section class="ts-footer-social-list">
      <div class="container">
         <div class="row">
            <div class="col-lg-4">
               <div class="footer-logo"><a href="#"><img src="<?= base_url(); ?>/assets/images/logo/logo-footer.png" alt=""></a></div>
               <!-- footer logo end-->
            </div><!-- col end-->
            <div class="col-lg-8 align-self-center">
            
                       
               <ul class="footer-social">
                  <li class="ts-facebook"><?=defineSocial('facebook', getenv('FACEBOOK'),true);?></li>                  
                  <li class="ts-twitter"> <?=defineSocial('twitter', getenv('TWITTER'),true);?></li>                 
               </ul>
            </div><!-- col end-->
         </div>
      </div>
   </section><!-- footer social list end-->
   <!-- newslater end -->
   <!-- footer start -->
   <footer class="ts-footer">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="footer-menu text-center">
                  <ul>
                     <li><a href="#">Support</a></li>
                     <li><a href="#">Suggestion</a></li>
                     <li><a href="#">Privacy</a></li>
                     <li><a href="#">About</a></li>
                     <li><a href="#">Our Ads</a></li>
                     <li><a href="#">Terms</a></li>
                  </ul>
               </div>
               <div class="copyright-text text-center">
                  <p>&copy; 2018, Vinazine. All rights <a href="http://www.bootstrapmb.com/" title="bootstrapmb">Reserved</a></p>
               </div>
            </div>
            <!-- col end -->
         </div>
         <!-- row end -->
         <div id="back-to-top" class="back-to-top"><button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-up"></i></button></div>
         <!-- Back to top end -->
      </div>
      <!-- Container end-->
   </footer>
   <!-- footer end -->
   <!-- javaScript Files	=============================================================================-->
   <?php
   foreach ($js as $path) : ?>
      <script src="<?= $path['path']; ?>"></script>
   <?php endforeach; ?>
</body>

</html>