<?php

namespace chumakov;

Class Lineynoe
{
    protected $x;

    public function solveLine ($a, $b)
    {
		if ($a == 0)
		{
		  return null;
		}
		return $this->x= array(-$b / $a);
	}
}
