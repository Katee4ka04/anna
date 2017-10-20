<?PHP
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Добро пожаловать на вебстраничку!');
$app->initLayout('Centered');

$label=$app->add(['Label','Я label:D','massive purple','detail'=>'смешарики']);

$button1=$app->add('Button');
$button1->set('обратно');
$button1->link('index.php');
$button1->addClass('big teal');

$img='http://www.kino-teatr.ru/news/3822/46263.jpg';
$icon=$app->add(['Image',$img]);

$label=$app->add(['Label','Теперь ты','big pink','detail'=>'впал в детство']);

$img1='https://i.ytimg.com/vi/oWfOqQkM5JM/hqdefault.jpg';
$icon=$app->add(['Image',$img1]);

$text=$app->add(['Text','Молоко полезно']);
$text->addParagraph('Видишь каким стал Ёжик?');
$text->addParagraph('Это он молока выпил');

$a=-3;
if($a>0) {
  echo'Молодец';
}else {
  echo'Олодец';}
