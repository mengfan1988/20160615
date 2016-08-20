<?php
namespace NS1 {//命名空间NS1

    class A {

        public $name = 'NS1 A';

    }

    $a = new A;
    echo $a->name;
}

namespace NS2 {//命名空间NS2

    class A {

        public $name = 'NS2 A';

    }

    $a = new A;
    echo $a->name;
    $a1=new \NS1\A;//访问其他命名空间
    echo $a1->name;
}
        
   