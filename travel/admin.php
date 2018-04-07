<?PHP
require 'vendor/autoload.php';
$app=new \atk4\ui\App('ПРИВЕТ');
$app->initLayout('Adimin');
require 'visual.php';
require 'connection.php';

$place= new Place($db);
$place->setOrder('name');
$grid=$app->add('Grid');
$grid->setModel($place);
$grid->addQuickSearch(['name']);
$grid->addDecorator('name', new \atk4\ui\TableColum\Link('placelist.php?id={$id}'));
