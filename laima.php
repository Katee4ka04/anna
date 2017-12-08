<?PHP
Class Laima {
  public $name;
  public $cost;
  public $color;
  public function AllPrise($weight) {
    $answer = $this->cost * $weight;
    return $answer;
  }
}
