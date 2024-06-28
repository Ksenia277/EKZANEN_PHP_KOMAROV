<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\User $model */

$this->title = $model->id;

\yii\web\YiiAsset::register($this);
?>
<h1>Мои заявки на книги</h1>

<ul>
    <?php foreach ($orders as $order):?>
        <li>
        <?php if ($order->status == 0):?>
            <?= 'Отсутствует'?>
        <?php elseif ($order->status == 1):?>
            <?= 'Книгу можно забрать'?>
        <?php endif;?>
            (Заявка на книгу: <?= $order->book->name?> - <?= $order->book->author?>, Цена: <?= $order->book->price?>)
        </li>
    <?php endforeach;?>
</ul>

<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success">
        <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>

</div>