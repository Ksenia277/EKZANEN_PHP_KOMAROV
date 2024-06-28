<?php

/** @var yii\web\View $this */
/** @var app\models\UsersApplication[] $applications */ // Убедитесь, что добавили эту строку для автодополнения в IDE
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>
<div class="site-index">
    <h1>Существующие заявки</h1>
    <?php if (!empty($applications)): ?>
        <table>
            <thead>
                <tr>
                    <th>ФИО</th>
                    <th>Описание</th>
                    <th>Тип услуги</th>
                    <th>Дата приёма</th>
                    <th>Цена</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($applications as $application): ?>
                    <tr>
                        <td><?= htmlspecialchars($application->fio) ?></td>
                        <td><?= htmlspecialchars($application->description) ?></td>
                        <td><?= htmlspecialchars($application->typeService->title) ?></td>
                        <td><?= htmlspecialchars($application->date_receipt) ?></td>
                        <td><?= htmlspecialchars($application->price) ?> руб.</td>
                        <td>
                            <?php if (!Yii::$app->user->isGuest): ?>
                                <?php if ($application->status === 'Выполнено'): ?>
                                    <?= Html::a('Выполнено', ['users-application/mark-as-completed', 'id' => $application->id], [
                                        'class' => 'btn btn-success',
                                        'role' => 'button',
                                        'aria-disabled' => 'true',
                                        'style' => 'pointer-events: none; opacity: 0.5;',
                                    ]) ?>
                                    <?= Html::a('Квитанция', "http://localhost/3%20himchistka/himchistka/web/index.php?r=users-application%2Fview&id={$application->id}", [
                                        'class' => 'btn btn-info',
                                        'target' => '_blank',
                                    ]) ?>
                                <?php else: ?>
                                    <?= Html::a('Отметить как выполнено', ['users-application/mark-as-completed', 'id' => $application->id], [
                                        'class' => 'btn btn-danger',
                                        'data' => [
                                            'confirm' => 'Вы уверены, что хотите изменить статус этой заявки на "Выполнено"?',
                                            'method' => 'post',
                                        ],
                                    ]) ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Заявок пока нет.</p>
    <?php endif; ?>
</div>