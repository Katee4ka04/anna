<?PHP
require '../vendor/autoload.php';
$app=new \atk4\ui\App('ПРИВЕТ');
$app->initLayout('Admin');
require 'connection.php';

$places= new Places($db);
$crud=$app->add('Crud');
$crud->setModel($places);
