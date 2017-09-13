<?php
if(!Yii::$app->user->isGuest){
	$posts = Yii::$app->db->createCommand('SELECT *')
            ->queryAll();
}
?>