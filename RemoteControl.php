<?php
class RemoteControl {
	private $onCommands = [];
	private $offCommands = [];
	private $len = 7;

	public function __construct(){
		$noCommand = new NoCommand();
		for($i = o; $i < $this->len;$i++){
			$this->onCommands[$i] = $onCommand;
			$this->offCommands[$i] = $onCommand;
		}
	}

	public function setCommand($slot, $onCommand, $offCommand){
		$this->onCommands[$slot] = $onCommand;
		$this->offCommand[$slot] = $offCommand;
        }

	public function onButtonWasPushed($slot){
		$this->onCommands[$slot]->execute();
        }

	public function offButtonWasPushed($slot) {
		$this->offCommand[$slot]->execute();
	}

	public function toString(){
		$text = '<br>-----------------------------<br>';
		for($i = 0; $i < $this->len; $i++){
			$text .= '[slot'.$i.']';
			$text .= get_class($this->onCommands[$i]);
			$text .= '&ndsp;&nbsp;&nbsp';
			$text .= get_class($this->offCommands[$i]);
			$text .= '<br>'

		}
		return $text;
	}



}

?>
