<?PHP
require '../vendor/autoload.php';
$app=new \atk4\ui\App('ПРИВЕТ');
$app->initLayout('Admin');
require 'connection.php';
require 'visual.php';

$place=new Place($db);
$place->load($GET['id']);
$record= $place->ref('record');
$record->setOrder('name');
$grid= $app->add('Grid');
$grid->setModel($record);
