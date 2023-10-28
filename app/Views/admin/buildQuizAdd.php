<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jodit/3.11.2/jodit.es2018.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jodit/3.11.2/jodit.es2018.min.js"></script>

<?php

helper('form');
$style = [
    "css" => [
        //["path" => base_url()."/assets/css/uikit.min.css"],
        ["path" => base_url() . "/assets/css/jodit.es2018.min.css"],
        ["path" => base_url() . "/assets/css/bootstrap.min.css"],
        ["path" => base_url() . "/assets/css/font-awesome.min.css"],
        ["path" => base_url() . "/assets/css/animate.css"],
        ["path" => base_url() . "/assets/css/icofonts.css"],
        ["path" => base_url() . "/assets/css/owlcarousel.min.css"],
        ["path" => base_url() . "/assets/css/slick.css"],
        ["path" => base_url() . "/assets/css/navigation.css"],
        ["path" => base_url() . "/assets/css/magnific-popup.css"],
        ["path" => base_url() . "/assets/css/style.css"],
        ["path" => base_url() . "/assets/css/colors/color-0.css"],
        ["path" => base_url() . "/assets/css/responsive.css"],


    ],
];

$dataDefault = [
    "title" => "TiberioGeo - A Geografia Levada a Sério!",
    "favico" => base_url() . "/assets/img/logo/autor.png",

];
$javascript = [
    "js" => [
        ["path" => base_url() . "/assets/js/jodit.es2018.min.js"],
        //["path"=> base_url()."/assets/js/jquery.min.js"],
        //["path" => "//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"],
        ["path" => base_url() . "/assets/js/jquery-1.12.4.min.js"],
        ["path" => base_url() . "/assets/js/navigation.js"],
        //["path"=> base_url()."/assets/js/uikit.min.js"],
        //["path"=> base_url()."/assets/js/uikit-icons.js"],
        ["path" => base_url() . "/assets/js/popper.min.js"],
        ["path" => base_url() . "/assets/js/jquery.magnific-popup.min.js"],
        ["path" => base_url() . "/assets/js/bootstrap.min.js"],
        ["path" => base_url() . "/assets/js/owl-carousel.2.3.0.min.js"],
        ["path" => base_url() . "/assets/js/slick.min.js"],
        ["path" => base_url() . "/assets/js/smoothscroll.js"],
        ["path" => base_url() . "/assets/js/main.js"],
        ["path" => base_url() . "/assets/js/my.js"],
        ["path" => base_url() . "/assets/ckeditor/ckeditor.js"],


    ]
];
?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Basic Page Needs =====================================-->
    <meta charset="utf-8">
    <!-- Mobile Specific Metas ================================-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="<?= $dataDefault['favico']; ?>">
    <!-- Site Title- -->
    <title><?= $dataDefault['title']; ?></title>
    <!-- CSS   ==================================================== -->
    <!-- CSS here -->
    <?php
    foreach ($style['css'] as $path) : ?>
        <link rel="stylesheet" href="<?= $path['path']; ?>">
    <?php endforeach; ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]><script src="../../../oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="../../../oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="body-color">


    <?php //echo view("site/home/header-banner.php");
    ?>
    <?php //echo view("site/home/header.php");
    ?>
    <section class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-4 align-self-center">
                    <div class="header-logo">
                        <?= anchor('/', '<img src="' . base_url() . '/assets/images/logo/logo-topo.png" alt="" />'); ?>

                    </div>
                </div>
                <div class="col-md-8 align-self-center">
                    <div class="banner-imgr">
                        <a href="index.html">
                            <img class="img-fluid" src="<?= base_url(); ?>/assets/images/banner/banner-header.png" alt="">
                        </a>
                    </div>
                </div><!-- col end -->
            </div><!-- row  end -->
        </div><!-- container end -->
    </section>

    <section class="block-wrapper mt-15">
        <div class="container">
           
           

                <div class="row">
                    <div class="col-lg-12">

                        <?php if(session()->has('success')):
                            //dd(session()->get('success'));
                            ?>

                        <div class=" border-left-<?= session()->get('success')['alert'] ?> alert alert-show alert-<?= session()->get('success')['alert'] ?>">
                            <strong><?= session()->get('success')['message'] ?></strong>
                        </div>
                        <?php endif; session()->remove('success')?>    
                        <div class="contact-box ts-grid-box">
                            <div class="clearfix">
                                <h2 class="float-left"><span>CRIAR QUESTÃO SIMULADO :: <?= $idQuizMain; ?></span></h2>
                            </div>
                            <hr>

                            <?php
                            echo form_open('/buildQuiz/createQuestion', ['enctype' => 'multipart/form-data', 'role' => 'form', 'id' => 'contact-form']) ?>

                            <div class="error-container">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <input type="hidden" value="<?= $idQuizMain; ?>" name="idQuizMain" />

                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Pergunta ::</label>
                                            <textarea class="form-control form-control-message" name="question" id="question" placeholder="" rows="2"><?= old('question') ?></textarea>
                                        </div>
                                        <span style="color:red" class="font-italic font-weight-bold"><?php echo $erro !== '' ? $erro->getError('question') : ''; ?></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Complemento da Pergunta ::</label>
                                            <textarea class="form-control form-control-message" name="question-sub" id="question-sub" placeholder="" rows="2"><?= old('question-sub') ?></textarea>
                                        </div>
                                        <span style="color:red" class="font-italic font-weight-bold"><?php echo $erro !== '' ? $erro->getError('question-sub') : ''; ?></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Imagem principal (xx L x xxx A)</label>
                                            <input value="<?= old('image-main') ?>" class="form-control form-control-name" name="image-main" id="image-main" placeholder="Digite o nome do arquivo da imagem" type="text">
                                        </div>
                                        <span style="color:red" class="font-italic font-weight-bold"><?php echo $erro !== '' ? $erro->getError('image-main') : ''; ?></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Resposta Correta ::</label>
                                            <textarea class="form-control form-control-message" name="alternative-correct" id="alternative-correct" placeholder="" rows="2"><?= old('alternative-correct') ?></textarea>
                                        </div>
                                        <span style="color:red" class="font-italic font-weight-bold"><?php echo $erro !== '' ? $erro->getError('alternative-correct') : ''; ?></span>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Resposta 02 ::</label>
                                            <textarea class="form-control form-control-message" name="alternative-02" id="alternative-02" placeholder="" rows="2"><?= old('alternative-02') ?></textarea>
                                        </div>
                                        <span style="color:red" class="font-italic font-weight-bold"><?php echo $erro !== '' ? $erro->getError('alternative-02') : ''; ?></span>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Alternativa 03 ::</label>
                                            <textarea class="form-control form-control-message" name="alternative-03" id="alternative-03" placeholder="" rows="2"><?= old('alternative-03') ?></textarea>
                                        </div>
                                        <span style="color:red" class="font-italic font-weight-bold"><?php echo $erro !== '' ? $erro->getError('alternative-03') : ''; ?></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Resposta 04 ::</label>
                                            <textarea class="form-control form-control-message" name="alternative-04" id="alternative-04" placeholder="" rows="2"><?= old('alternative-04') ?></textarea>
                                        </div>
                                        <span style="color:red" class="font-italic font-weight-bold"><?php echo $erro !== '' ? $erro->getError('alternative-04') : ''; ?></span>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Alternativa 05 ::</label>
                                            <textarea class="form-control form-control-message" name="alternative-05" id="alternative-05" placeholder="" rows="2"><?= old('alternative-05') ?></textarea>
                                        </div>
                                        <span style="color:red" class="font-italic font-weight-bold"><?php echo $erro !== '' ? $erro->getError('alternative-05') : ''; ?></span>
                                    </div>
                                </div>



                                <div class="text-right"><br><button class="btn btn-primary solid blank" type="submit">Salvar</button></div>

                                <?= form_close() ?>
                            </div><!-- grid box end -->
                            <hr>
                            <div class="row">
                                
                    <div class="col-lg-12">
                        <div class="clear">
                            <h3>LISTAR QUESTÕES</h3>
                        </div>
                        <div class="row">
                            <div class="table">
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Ordem</th>
                                            <th>Pergunta</th>
                                            <th>Complemento</th>

                                            <th class="text-center" colspan="3">AÇÃO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //dd($data);

                                        foreach ($data as $item) : ?>
                                            <tr>

                                                <td><?= $item['position']; ?></td>
                                                <td><?= $item['question']; ?></td>
                                                <td><?= $item['question-sub']; ?></td>

                                                <td><?= anchor('buildQuiz/deleteQuestion/'.$item['id'].'/'.$idQuizMain, 'Excluir', ['class'=>'btn btn-primary']);?></td>
                                                <td>Editar</td>

                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                        </div><!-- col end-->
                        
                    </div><!-- row end-->
                </div><!-- container end-->

                
            
        </div>
    </section>




    <!-- newslater end -->
    <!-- footer start -->
    <footer class="ts-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-menu text-center">

                    </div>
                    <div class="copyright-text text-center">
                        <p>&copy; <?= date('Y'); ?>, Tiberiogeo. All rights</p>
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
    foreach ($javascript['js'] as $path) : ?>
        <script src="<?= $path['path']; ?>"></script>
    <?php endforeach; ?>



    <script>
        CKEDITOR.replace('text', {
            toolbar: [{
                    name: 'basicstyles',
                    items: ['Bold', '-', 'RemoveFormat']
                }, {
                    name: 'paragraph',
                    items: ['NumberedList', 'BulletedList']
                },
                {
                    name: 'styles',
                    items: ['Styles', 'Format']
                },
                {
                    name: 'document',
                    items: ['Source', '-', 'Undo', 'Redo']
                },

            ]
        });
        CKEDITOR.replace('text-second', {
            toolbar: [{
                    name: 'basicstyles',
                    items: ['Bold', '-', 'RemoveFormat']
                }, {
                    name: 'paragraph',
                    items: ['NumberedList', 'BulletedList']
                },
                {
                    name: 'styles',
                    items: ['Styles', 'Format']
                },
                {
                    name: 'document',
                    items: ['Source', '-', 'Undo', 'Redo']
                },

            ]
        });
    </script>

</body>

</html>