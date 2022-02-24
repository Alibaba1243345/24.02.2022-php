<?php 
require_once "Light.php"
require_once "NoCommand.php"
require_once "LightOnCommand.php"
require_once "LightOffCommand.php"
require_once "RemoteControl.php"

$kitchenLight = new Light ("Кухня");
$kitchenLightOn = new LightOnCommand($kitchenLight);
$kitchenLightOff = new LightOffCommand($kitchenLight);

$remoteControl = new RemoteContorol();
$remoteControl ->setCommand(0, $kitchenLightOn, $kitchenLightoff);
echo $remoteControl->toString();

$remoteControl->onButtonWasPushe(0);
$remoteControl->offButtonWasPushed(0);


?>
