<?php
class Lannister{

public $name = "cercie";
public function sleepWith($someOne)
{
if ($someOne->name)
{
if ($this->name == "jam" && $someOne->name == "cercie")
echo "With pleasure, but only in a tower in Winterfell, then.\n";
else
echo "Not even if I'm drunk !\n";
}
else
echo "Let's do this.\n";
}
}

?>
