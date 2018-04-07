<?PHP
require 'vendor/autoload.php';
$app=new \atk4\ui\App('ПРИВЕТ');
$app->initLayout('Adimin');


 $layout=$app->layout;

 $layout->leftMenu->addItem(['Main page','icon'=>'building'],['inde]);
