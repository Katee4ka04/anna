<?PHP
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Добро пожаловать на вебстраничку!');
$app->initLayout('Centered');

$label=$app->add(['Label','Я label:D','massive purple','detail'=>'смешарики']);

$button1=$app->add('Button');
$button1->set('обратно');
$button1->link('index.php');

$img='http://www.kino-teatr.ru/news/3822/46263.jpg';
$icon=$app->add(['Image',$img]);

$label=>$app->add(['Label','Теперь ты','big pink','detal'=>'впал в детство']);

$img1='http://multsforkids.ru/data/uploads/personaji/kopatich/smeshariki-kopatich.png';
$img1=$app->add(['Image',$img]);
