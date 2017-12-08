<?PHP
require 'vendor/autoload.php';
require 'laima.php';
$app=new \atk4\ui\App('Добро пожаловать игрок!');
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

/*$button10=$app->add('Button');
$button10->set('Далее');
$button10->link(['test','name'=>'Анна','surname'=>'Колесникова']);

$button11=$app->add('Button');
$button11->set('1');
$button11->link(['test','number'=>'1']);
$button11->addClass('blue');

$button12=$app->add('Button');
$button12->set('2');
$button12->link(['test','number'=>'2']);
$button12->addClass('teal');


$text=$app->add(['Text','Ты попал в игру']);
$text->addParagraph('Чтобы начать играть, нажми на кнопку');

$button0990=$app->add('Button');
$button0990->set('Играть');
$button0990->link(['test','min'=>'0','max'=>'100']);
$button0990->addClass('big orange');
*/

$vaverite= new Laima();
$vaverite->name = 'Белочка';
$vaverite->cost = '4';
$vaverite->color = 'green';
$cost= $vaverite->AllPrise(5);
$label=$app->add(['Label',$vaverite->name.' Cena = '.$cost.'€',$vaverite->color.' massive','detail'=>$vaverite->cost.'€ за 1кг','image'=>'https://www.kontoriabi.ee/wp-content/uploads/2017/03/450-00381.jpg']);

$lukss= new Laima();
$lukss->name = 'Люкс';
$lukss->cost = '9';
$lukss->color = 'red';
$cost= $lukss->AllPrise(3);
$label=$app->add(['Label',$lukss->name.' Cena = '.$cost.'€',$lukss->color.' massive','detail'=>$lukss->cost.'€ за 1кг','image'=>'http://www.foodlatvia.com/uploads/product/2123/thumb-588ee5f089f29.jpg']);

$lacisi= new Laima();
$lacisi->name = 'Медвежонок';
$lacisi->cost = '5';
$lacisi->color = 'teal';
$cost= $lacisi->AllPrise(8);
$label=$app->add(['Label',$lacisi->name.' Cena = '.$cost.'€',$lacisi->color.' massive','detail'=>$lacisi->cost.'€ за 1кг','image'=>'http://www.laima.lv/wp-content/uploads/2016/05/4750001340235_L-C-TIS-epain-tis-2kg-konf-300x227.jpg']);

$serenade= new Laima();
$serenade->name = 'Серенада';
$serenade->cost = '8';
$cost= $serenade->AllPrise(2);
$serenade->color = 'blue';
$label=$app->add(['Label',$serenade->name.' Cena = '.$cost.'€',$serenade->color.' massive','detail'=>$serenade->cost.'€ за 1кг','image'=>'http://irecommend.ru/sites/default/files/product-images/106250/lxPXax0Rs3iAL2lKB1HUog.jpg']);
