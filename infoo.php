<?PHP
require 'vendor/autoload.php';
$app = new \atk4\ui\App('SnowwA!');
$app->initLayout("Centered");

$msg=$app->add(['Message','Лунтик начинается, иди смотри!', 'type'=>'info','icon'=>'loading alk outline']);
