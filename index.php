<?PHP
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Добро пожаловать на вебстраничку!');
$app->initLayout('Centered');
$button1=$app->add('Button');
$button1->set('Нажми :)');
$button1->icon='instagram';
$button1->link('https://www.instagram.com/');
$button1->addClass('big red');

$button2=$app->add('Button');
$button2->set('Кликай :3');
$button2->icon='vk';
$button2->link('https://vk.com/');
$button2->addClass('big orange');

$button3=$app->add('Button');
$button3->set('Жми :0');
$button3->icon='facebook';
$button3->link('https://www.facebook.com/');
$button3->addClass('big yellow');

$button4=$app->add('Button');
$button4->set('Черная дыра');
$button4->icon='youtube';
$button4->link('https://www.youtube.com/?hl=lv&gl=LV');
$button4->addClass('massive red');

$button5=$app->add(['Button','опасно','iconRight'=>'book']);
$button5->link('https://www.e-klase.lv/lv/');
$button5->addClass('mini black');

$bar=$app->add(['ui'=>'vertical buttons']);
$bar->add(['Button','Я все знаю','icon'=>'google']);
$bar->add(['Button','Как дела','icon',=>'whatsapp']);
