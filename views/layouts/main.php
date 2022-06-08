<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\BaseUrl;


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link href="../content/img/favicon.png" rel="icon">
    <link href="../content/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../content/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../content/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../content/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../content/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../content/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../content/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../content/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../content/css/style.css" rel="stylesheet">


    <!-- =======================================================
    * Template Name: NiceAdmin - v2.2.2
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href='<?= BaseUrl::base()."/"?>' class="logo d-flex align-items-center">
                <img src="../content/img/logo.png" alt="">
                <span class="d-none d-lg-block">NEWS</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

    </header><!-- End Header -->


    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="<?= BaseUrl::base().'/site/index'?>">
                    <i class="bi bi-grid"></i>
                    <span>News</span>
                </a>
            </li><!-- End Dashboard Nav -->



            <?=
            Yii::$app->user->isGuest ? (
                '
                <li class="nav-item">
                    <a class="nav-link" href="'.BaseUrl::base().'/site/login">
                        <i class="bi bi-lock"></i>
                        <span>Login</span>
                    </a>
                </li>
                '
            ) : ('<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            );
            ?>

            <?= Yii::$app->user->isGuest ? ('') : '<li class="nav-item">
                    <a class="nav-link" href="'.BaseUrl::base().'/admin">
                        <i class="bi bi-person"></i>
                        <span>Admin</span>
                    </a>
                </li>';
            ?>

        </ul>

    </aside><!-- End Sidebar-->


    <main role="main" class="flex-shrink-0">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer class="footer mt-auto py-3 text-muted">
        <div class="container">
            <p class="float-left">&copy; Dirgantara <?= date('Y') ?></p>
            <p class="float-right"><?= Yii::powered() ?></p>
        </div>
    </footer>


    <!-- Vendor JS Files -->
    <script src="../content/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../content/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../content/vendor/chart.js/chart.min.js"></script>
    <script src="../content/vendor/echarts/echarts.min.js"></script>
    <script src="../content/vendor/quill/quill.min.js"></script>
    <script src="../content/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../content/vendor/tinymce/tinymce.min.js"></script>
    <script src="../content/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../content/js/main.js"></script>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>