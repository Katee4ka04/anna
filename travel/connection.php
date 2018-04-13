<?PHP
$db=new \atk4\data\Persistence_SQL('mysql:dbname=main;host=localhost','root','');

class Places extends \atk4\data\Model {
  public $table = 'places';
  function init () {
    parent::init();
    $this->addField('name');
$this->hasMany('Client', new Client);

 }
}

class Client extends \atk4\data\Model {
  public $table = 'records';
  function init () {
    parent::init();
    $this->addField('name');
    $this->addField('e_mail');
  $this->addField('phone_number');
$this->addField('departure_date',['type'=>'date']);
$this->addField('arrival_date',['type'=>'date']);
$this->hasOne('places_id', new Places) ->addTitle();

 }
}
