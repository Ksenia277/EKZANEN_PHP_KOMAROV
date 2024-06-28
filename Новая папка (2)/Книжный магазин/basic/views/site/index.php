<?php
use yii\helpers\Html;
use app\models\Orders;
/** @var yii\web\View $this */

$this->title = 'Books';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1>Книжный магазин</h1>
    </div>

    <div class="body-content">

    

    <?php foreach ($books as $book) { ?>
    <div>
        <h2><?= $book->name ?></h2>
        <p>Автор: <?= $book->author ?></p>
        <p>Издательство: <?= $book->publisher ?></p>
        <p>Дата издания: <?= $book->publish_date ?></p>
        <p>Цена: <?= $book->price ?></p>
        <p>Количество: <?= $book->quantity ?></p>
        <p><?php
            $order = Orders::findOne(['book_id' => $book->id, 'user_id' => Yii::$app->user->id]);
            if ($order) {
                echo Html::a('Отменить заказ', ['/books/order', 'id' => $book->id], ['class' => 'btn btn-outline-warning']);
            } elseif (!Yii::$app->user->isGuest){
                echo Html::a('Заказать', ['/books/order', 'id' => $book->id], ['class' => 'btn btn-outline-primary']);
            } else {
                echo Html::a('Войдите чтобы заказать книгу', ['/site/login'], ['class' => 'btn btn-outline-primary']);
            }
        ?></p>
    </div>
    <hr>
<?php } ?>

    </div>
</div>
