<?PHP
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Добро пожаловать на вебстраничку!');
$app->initLayout('Centered');
/*$button1=$app->add('Button');
$button1->set('Нажми :)');
$button1->icon='instagram';
$button1->link('https://www.instagram.com/');
$button1->addClass('big pink');

$button2=$app->add('Button');
$button2->set('Кликай :3');
$button2->icon='vk';
$button2->link('https://vk.com/');
$button2->addClass('big blue');

$button3=$app->add('Button');
$button3->set('Жми :0');
$button3->icon='facebook';
$button3->link('https://www.facebook.com/');
$button3->addClass('big violet');

$button4=$app->add('Button');
$button4->set('Черная дыра');
$button4->icon='youtube';
$button4->link('https://www.youtube.com/?hl=lv&gl=LV');
$button4->addClass('massive red');

$button5=$app->add(['Button','опасно','iconRight'=>'book']);
$button5->link('https://www.e-klase.lv/lv/');
$button5->addClass('mini black');

$button6=$app->add('Button');
$button6->set('Снапчат');
$button6->icon='snapchat';
$button6->link('https://www.snapchat.com/');
$button6->addClass('yellow');

$button7=$app->add('Button');
$button7->set('Позвони');
$button7->icon='skype';
$button7->link('https://www.skype.com/en/');
$button7->addClass('tiny teal');

$bar = $app->add(['ui'=>'vertical buttons']);

$bar->add(['Button','Всезнающая','icon'=>'google']);
$bar->add(['Button','Как дела','icon'=>'whatsapp']);
*/

/*$button8=$app->add('Button');
$button8->set('туда');
$button8->icon='book';
$button8->link('katee4ka.php');
$button8->addClass('massive orange');

$button9=$app->add('Button');
$button9->set('В черной дыре');
$button9->icon='youtube';
$button9->link('https://www.youtube.com/');
$button9->addClass('big red');
*/

$button10=$app->add('Button');
$button10->set('Далее');
$button10->link(['test','name'=>'Анна','surname'=>'Колесникова']);

$button11=$app->add('Button');
$button11->set('1');
$button11->link(['test','number'=>'1']);
