<?PHP
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Загадай число от 1 до 100');
$app->initLayout('Centered');

/*$name=$_GET['name'];
$surname=$_GET['surname'];
$number=$_GET['number'];

$label=$app->add(['Label',$name.' '.$surname]);

$label=$app->add(['Label',$number,'massive blue']);

$label=$app->add(['Label',$number,'massive teal']);*/

$min=$_GET['min'];
$max=$_GET['max'];

if(($max-$min==1)and (isset($_GET['key']))){
  $text=$app->add(['Text','Ой, ты ошибся! Сыграй еще раз!']);
$button=$app->add(['Button','Попробуй сначала','big red']);
$button->link(['index']);
$img='http://99px.ru/sstorage/56/2011/05/10705111544492950.jpg';
$icon=$app->add(['Image',$img]);
}else{
  $mid=round(($min+$max)/2);

  $label=$app->add(['Label','Ваше число больше '.$mid.'?','massive purple']);

$button1=$app->add('Button');
$button1->set('Мое число больше');
$button1->addClass('big olive');
$button1->link(['test','min'=>$mid,'max'=>$max,'key'=>'key']);

$button2=$app->add('Button');
$button2->set('Moe число меньше');
$button2->addClass('big pink');
$button2->link(['test','min'=>$min,'max'=>$mid,'key'=>'key']);

$button3=$app->add('Button');
$button3->set('Это оно');
$button3->addClass('massive blue');
$button3->link(['win']);}
