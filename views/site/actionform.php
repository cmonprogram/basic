<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="col-md-6 col-md-offset-3">
<h1 style="text-align: center;">Test task for 2ch</h1>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'text')->textarea() ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
</div>

<style type="text/css">
	#actionform-text
	{
	max-width: 100%;
	height: 40vh;
    min-height: 120px;
	}
</style>