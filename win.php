<?PHP
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Добро пожаловать игрок!');
$app->initLayout('Centered');

$label=$app->add('Label');
$label->set('Ура! Ты победил!');
$label->addClass('massive green');

$button2=$app->add('Button');
$button2->set('Заново');
$button2->link(['index']);
$button2->addClass('massive blue');
