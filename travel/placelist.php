<?PHP
require '../vendor/autoload.php';
$app=new \atk4\ui\App('ПРИВЕТ');
$app->initLayout('Admin');
require 'connection.php';
require 'visual.php';

$place=new Places($db);
$place->load($_GET['id']);
$record= $place->ref('Client');
$record->setOrder('name');
$grid= $app->add('Grid');
$grid->setModel($record);
