<?php
class UnholyFactory{
public $type_list = array();

public function absorb($aFighter)
{
	if ($aFighter instanceof Fighter)
	{
		if (!in_array($aFighter, $this->type_list))
		{
			echo "(Factory absorbed a fighter of type $aFighter)\n";
			array_push($this->type_list, $aFighter);
		}
		else
			echo "(Factory already absorbed a fighter of type $aFighter)\n";
	}
	else
	echo "(Factory can't absorb this, it's not a fighter)\n";
}

public function fabricate($rf)
{
if (in_array($rf, $this->type_list))
{
	echo "(Factory fabricates a fighter of type $rf)\n";
	return $this->type_list[array_search($rf, $this->type_list)];
}
echo "(Factory hasn't absorbed any fighter of type $rf)\n";
return null;
}
}
?>
