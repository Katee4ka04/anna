<?PHP

require 'conection.php';
$app = new \atk4\ui\App('АДминка');
$app->initLayout("Centered");

$label=$app->add(['Label',$_SESSION['nick']]);
