<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TrsReply */

$this->title = 'Create Trs Reply';
$this->params['breadcrumbs'][] = ['label' => 'Trs Replies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trs-reply-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
