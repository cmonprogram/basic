<?php
use yii\helpers\Html;
?>

<p>You have entered the following information:</p>

<ul>
    <li><label>Title</label>: <?= Html::encode($model->title) ?></li>
    <li><label>Text</label>: <?= Html::encode($model->text) ?></li>
    <li><label>Date</label>: <?= Html::encode($model->data) ?></li>
</ul>

<?php 
$reg1 = "/\{\+(?=)[\d]+\}/";
$reg2 = "/\{\-(?=)[\d]+\}/";
$reg3 = "/\{[\d]+\}/";

preg_match_all($reg1,  $model->text, $output1);
preg_match_all($reg2,  $model->text, $output2);
preg_match_all($reg3,  $model->text, $output3);

echo "<hr>";
print_r($output1[0]);
echo "<br>";
print_r($output2[0]);
echo "<br>";
print_r($output3[0]);
echo "<br>";
echo "<hr>";


function summ($mass){
$Total = 0;
foreach ($mass as $value) {
    $Total += (int) preg_replace('/\D/', '', $value);;
}
return $Total;
}


$varp = summ($output1[0]);
$varm = summ($output2[0]);
$var = summ($output3[0]);

echo "Total: $var + $varp - $varm = ".($var+$varp-$varm);
//echo $var+$varp-$varm;

?>