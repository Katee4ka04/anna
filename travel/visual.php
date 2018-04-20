<?PHP

 $layout=$app->layout;

$layout->leftMenu->addItem(['Main page','icon'=>'building'],['index']);
$layout->leftMenu->addItem(['Admin','icon'=>'book'],['admin']);
$layout->leftMenu->addItem(['Places','icon'=>'clipboard outline'],['places']);
require 'vendor/autoload.php';

$app=new \atk4\ui\App('ПРИВЕТ');
$app->initLayout('Admin');


 $layout=$app->layout;

 $layout->leftMenu->addItem(['Main page','icon'=>'building'],['index']);
