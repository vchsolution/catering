<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .sidebar {
            min-height: 100vh;
            background: #fff;
            border-right: 1px solid #ddd;
        }
        .sidebar .nav-link {
            color: #333;
        }
        .sidebar .nav-link.active {
            background: #e9ecef;
            font-weight: bold;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>
<?php $this->beginBody() ?>

<!-- Top Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">Catering App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" 
                       id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://ui-avatars.com/api/?name=Admin&background=random" 
                             class="rounded-circle me-2" width="32" height="32">
                        <?= Html::encode(Yii::$app->user->identity->username ?? 'Administrator') ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <?= Html::a('Logout', ['/site/logout'], ['class' => 'dropdown-item', 'data-method' => 'post']) ?>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 d-none d-md-block sidebar p-3">
            <h6 class="text-muted">Menu</h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <?= Html::a('Dashboard', ['/site/index'], ['class' => 'nav-link']) ?>
                </li>
                <li class="nav-item">
                    <?= Html::a('Master Data', ['/master/index'], ['class' => 'nav-link']) ?>
                </li>
                <li class="nav-item">
                    <?= Html::a('Produk', ['/product/index'], ['class' => 'nav-link']) ?>
                </li>
                <li class="nav-item">
                    <?= Html::a('Transaksi', ['/transaction/index'], ['class' => 'nav-link']) ?>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="col-md-10 ms-sm-auto col-lg-10 content">
            <?= Breadcrumbs::widget([
                'links' => $this->params['breadcrumbs'] ?? [],
            ]) ?>

            <!-- Konten dinamis dari view -->
            <?= $content ?>
        </main>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
