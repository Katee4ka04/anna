<?PHP
require 'vendor/autoload.php';
$app=new \atk4\ui\App(ПРИВЕТ');
$app->initLayout('Adimin');
require 'connection.php';
require 'visual.php';

$form=$app->add('Form');
$form->setModel(new Client($db));

