<?PHP
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Добро пожаловать на вебстраничку!');
$app->initLayout('Centered');

/*$name=$_GET['name'];
$surname=$_GET['surname'];
$number=$_GET['number'];

$label=$app->add(['Label',$name.' '.$surname]);

$label=$app->add(['Label',$number,'massive blue']);

$label=$app->add(['Label',$number,'massive teal']);*/

$min=$_GET['min'];
$max=$_GET['max'];

$mid=round(($min+$max)/2);
