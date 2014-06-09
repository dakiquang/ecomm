<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?> 
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => '<img src="img/logo_trans.png" width="90%" />', //ecomm',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top', //
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'Shop', 'url' => ['/site/shop']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; TSKMatrix <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>
<!--[if lt IE 9]>
    <script src="assets/js/respond.js"></script>
<![endif]-->
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
