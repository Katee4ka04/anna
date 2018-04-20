<?PHP
require '../vendor/autoload.php';
require 'app.php';
$app=new App('public');

$form=$app->add('Form');
$form->setModel(new Client($db));
