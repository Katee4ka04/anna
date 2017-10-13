<?PHP
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Добро пожаловать на вебстраничку!');
$app->initLayout('Centered');

$label=$app->add('Label');
$label->set('Я label:D');

$button1=>add('Button');
$button1->set('обратно');
$button1->link('index.php');
