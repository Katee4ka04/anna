<?PHP
require 'vendor/autoload.php';
$app = new \atk4\ui\App('SnowwA!');
$app->initLayout("Centered");

$msg=$app->add(['Message','Лунтик начинаеться, иди смотри!', 'type'=>'succes','icon'=>'loading loud download']);
