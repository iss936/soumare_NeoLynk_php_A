<?php

class Dentifrices {
    private $name;
    private $reference;
    //code spécifique aux Dentifrices
}
class Shampooings{
    private $name;
    private $reference;
    //code spécifique aux Shampooings
}
class Farines {
    private $name;
    private $reference;
    //code spécifique aux Farines
}

class CataloguesFactory {
    public static function create (){
        return new Catalogues(new Dentifrices(), new Shampooings(), new Farines());
    }
}
class Catalogues {

    private $dentifrices;
    private $shampooings;
    private $farines;

    public function __construct(Dentifrices $dentifrices, Shampooings $shampooings, Farines $farines) {
        $this->dentifrices = $dentifrices;
        $this->shampooings = $shampooings;
        $this->farines = $farines;
    }

    // code specifique
}
 
$catalogue = CataloguesFactory::create();
