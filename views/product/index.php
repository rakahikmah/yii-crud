<?php


echo "Hallo ini index product"."<br>";

echo Yii::$app->params['var1']."<br>";

echo Yii::$app->session->get('username');

?>
<?= $this->render('menu');?>