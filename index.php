<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('SnowwA!');
$app->initLayout("Centered");
/*


/*$db=new
\atk4\data\Persistence_SQL('mysql:dbname=fdb;host=localhost','root','');
class Friends extends \atk4\data\Model {
  public $table = 'friends';
  function init () {
    parent::init();
    $this->addField('name');
    $this->addField('surname');
  $this->addField('phone_number');
    $this->addField('email');
      $this->addField('birthday',['type'=>'date']);
   $this->addField('notes',['type'=>'text']);
 }
}

$form=$app->layout->add('Form');
$form->setModel(new Friends($db));
$form->onSubmit(function ($form) {
  $form->model->save();
  return $form->success('Record uptated');
});

$grid = $app->layout->add('Grid');
$grid->setModel(new Friends($db));

$crud = $app->layout->add('CRUD');
$crud->setModel(new Friends($db));
*/


$menu=$app->add('Menu');

$clothes=$menu->addMenu(['Clothes','blue']);
$toys=$menu->addMenu('Toys');
$electronics=$menu->addMenu('Electronics');

$clothes->addItem('Shirts','https://www.dhresource.com/albu_302740708_00-1.0x0/long-sleeve-plaid-shirts-for-men-turn-down.jpg');
$clothes->addItem('Hoodies','http://i.ebayimg.com/images/i/281912640312-0-1/s-l1000.jpg');
$clothes->addItem('Jeans','http://www.everytimefashion.com/images/1/Jeans-Modern.jpg');
$clothes->addItem('Shoes','http://h3group.ca/wpfiles/wp-content/uploads/2016/04/kid-LED-shoes-SILVER-model-1-K7L9.jpg');
$clothes->addItem('Caps','https://sc02.alicdn.com/kf/HTB1KSBSKVXXXXcbXpXXq6xXFXXXe/Custom-sublimation-blank-trucker-cap.jpg');
$clothes->addItem('Socks','https://images-na.ssl-images-amazon.com/images/I/61KHxR02e6L._SL1005_.jpg');

$toys->addItem('Lego','http://englishbookgeorgia.com/blogebg/wp-content/uploads/2015/01/Lego.jpg');
$toys->addItem('Dolls','https://i.pinimg.com/736x/40/3d/dd/403ddd434828cdea7d1b516371d398e3--anime-dolls-bjd-dolls.jpg');
$toys->addItem('Teddy toys','https://www.dhresource.com/0x0s/f2-albu-g1-M00-B6-45-rBVaGVZdFHCACn94AAFKNT-j3uc089.jpg/teddy-bears-plush-toys-gifts-stuffed-plush.jpg');
$toys->addItem('Transformers','https://images-na.ssl-images-amazon.com/images/I/81PoVVc04-L._SY355_.jpg');
$toys->addItem('Cars','https://images-na.ssl-images-amazon.com/images/M/MV5BMTg5NzY0MzA2MV5BMl5BanBnXkFtZTYwNDc3NTc2._V1_UY1200_CR90,0,630,1200_AL_.jpg');

$electronics->addItem('Phones','https://cdn.pocket-lint.com/r/s/1200x/assets/images/120309-phones-buyer-s-guide-best-smartphones-image1-cnxvifjlms.jpg');
$electronics->addItem('Tabs','https://keddr.com/wp-content/uploads/2014/05/a495652f89a266e1c964aeee80f8d726.jpg');
$electronics->addItem('Computers','http://aropa.co.uk/wp-content/uploads/2016/08/hd-wallpaper-computer-hdv1.jpg');
$electronics->addItem('Cases','https://www.dhresource.com/0x0s/f2-albu-g5-M01-24-F0-rBVaI1j9qNSAGu_OAAEGnIPvUr4725.jpg/for-samsung-s7edge-phone-cases-surface-screen.jpg');
$electronics->addItem('Mouses','https://images-na.ssl-images-amazon.com/images/I/817L8yUzMgL._SL1500_.jpg');
$electronics->addItem('USB','https://mochieng.files.wordpress.com/2013/09/usb-stick-1280px-922px0.jpg');
