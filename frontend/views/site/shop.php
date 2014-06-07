<?php
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 */
$this->title = 'Shop';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the Shop page. We added a public method to our controller to render this page.</p>
    <p>Now we need to add tables to our database and add code to our new method to pass the required data to the page.</p>
    <p>You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
