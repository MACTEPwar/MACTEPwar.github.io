<h2>Login</h2>
<?php 
    use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin();?>

<?= $form->field($login_model, "email")->textInput()?>
<?= $form->field($login_model, "password")->passwordInput()?>
<div>
    <button type="submit">Login</button>
</div>

<?php  $form = ActiveForm::end();?>