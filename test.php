<?PHP
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Добро пожаловать на вебстраничку!');
$app->initLayout('Centered');

$name=$_GET['name'];
$surname=$_GET['surname'];

$label=$app->add(['Label',$name.' '.$surname]);
