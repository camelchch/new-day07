<?php
class Fighter{
public $fighter_type;

public function __construct($str){
$this->fighter_type = $str;
}

public function __toString()
{
	return $this->fighter_type;
}
}
?>
