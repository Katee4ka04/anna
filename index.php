<?PHP
require 'vendor/autoload.php';
echo 'by katee4ka';
$app=new \atk4\ui\App('Добро пожаловать на вебстраничку!');
$app->initLayout('Centered');
$button=$app->add('Button');
$button->set('Нажми :)');
$button->icon='book';
$button->link('https://www.instagram.com/');
