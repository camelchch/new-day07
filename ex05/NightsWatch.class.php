<?php
class NightsWatch{
private $members = array();

function recruit($someOne)
{
if ($someOne instanceof IFighter)
	array_push($this->members, $someOne);
}

function fight(){
foreach($this->members as $member)
	$member->fight();
}
}
?>
