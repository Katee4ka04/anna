<?PHP
require 'vendor/autoload.php';
echo 'by katee4ka';
$app=new \atk4\ui\App('Добро пожаловать на вебстраничку!');
$app->initLayout('Centered');
$button=$app->add('Button');
$button->set('Нажми :)');
$button->icon='instagram';
$button->link('https://www.instagram.com/');
$button=$app->add('Button');
$button->set('Кликай :3');
$button->icon='vk';
$button->link('https://vk.com/');
$button=$app->add('Button');
$button->set('Жми :0');
$button->icon='facebook';
$button->link('https://m.facebook.com');
