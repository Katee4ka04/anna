<?PHP
require '../vendor/autoload.php';
$app=new \atk4\ui\App('ПРИВЕТ');
$app->initLayout('Admin');
require 'visual.php';
require 'connection.php';

$place= new Places($db);
$place->setOrder('name');
$grid=$app->add('Grid');
$grid->setModel($place);
$grid->addQuickSearch(['name']);
$grid->addDecorator('name', new \atk4\ui\TableColumn\Link('placelist.php?id={$id}'));
