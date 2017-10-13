<?PHP
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Добро пожаловать на вебстраничку!');
$app->initLayout('Centered');

$label=$app->add('Label');
$label->set('Я label:D');
$label->icon='book';
$label->addClass('masive purple');

$button1=$app->add('Button');
$button1->set('обратно');
$button1->link('index.php');
$button1->addDetail('test');
