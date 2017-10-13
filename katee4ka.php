<?PHP
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Добро пожаловать на вебстраничку!');
$app->initLayout('Centered');

$label=$app->add(['Label','Я label:D','massive purple','detail'=>'ква']);

$button1=$app->add('Button');
$button1->set('обратно');
$button1->link('index.php');
