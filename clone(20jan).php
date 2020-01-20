<?php
    

    class Classe {
    
        public static $howManyClones = 0;
    
        public function __clone() {
            ++self::$howManyClones;
        }
    
        public static function howManyClones() {
            return static::$howManyClones;
        }
    
        public function __destruct() {
            --static::$howManyClones;
        }
    }
    
    $a = new Classe;
    #creation of clone of object a
    $b = clone $a;

    #creation of clone of object b
    $c = clone $b;

    #creation of clone of object c
    $d = clone $c;
    

    #print the no. of clones created
    echo 'Clones:' . Classe::howManyClones() ;
    
    unset($d);
    
    #print the no. of clones created
    echo 'Clones:' . Classe::howManyClones() ;




?>