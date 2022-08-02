<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TrsRespon */

$this->title = 'Create Trs Respon';
$this->params['breadcrumbs'][] = ['label' => 'Trs Respons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trs-respon-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
