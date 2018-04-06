<?PHP
require 'vendor/autoload.php';
session_start();
$db=new \atk4\data\Persistence_SQL('mysql:dbname=fdb;host=localhost','root','');

class Places extends \atk4\data\Model {
  public $table = 'friends';
  function init () {
    parent::init();
    $this->addField('name');
$this->hasMany('Client', new Client');
	
 }
}

class Client extends \atk4\data\Model {
  public $table = 'friends';
  function init () {
    parent::init();
    $this->addField('name');
    $this->addField('e-mail');
  $this->addField('phone');
$this->addField('departure_date',['type'=>'date']);
$this->addField('arrival_date',['type'=>'date']);
this->hasOne('places_id', new PLace) ->addTitle();

 }
}


