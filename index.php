<?php

class A
{

}

class B extends A
{
    public function __construct($a)
    {
        $this->a = $a;
    }

    protected $a;
}

class C extends B
{
    public function __construct($a, $b)
    {
        $this->b = $b;
        parent::__construct($a);
    }
   
    protected $b;
}


$a = new A();
$b1 = new B($a);
$b2 = new B($b1);
$c = new C($b2,$a);
$b3 = new C($c);
print_r ($b3);
