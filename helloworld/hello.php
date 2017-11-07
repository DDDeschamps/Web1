<?php

echo "Hello World!\n";
class Moovie {
    public $name;
    public $description;
    public $lengh;
    
    
    function __construct($name = "")
    {
        $this->name = $name;
    }
    
    function getname()
    {
        echo "$this->name\n";
    }

    function getdescription()
    {
        echo "$this->description\n";
    }
    
    function getlengh ()
    {
        echo "$this->lengh\n";
    }
    function setname ($namae)
    {
        if ($namae != NULL){
        $this->name=$namae;
    }

    }
     function setdescription ($descript)
    {
        if ($descript != NULL){
        $this->description=$descript;
    }

    }
     function setlengh ($duree)
    {
        if ($duree != NULL){
        $this->lengh=$duree;
    }

    }
    
}
$moovie = new Moovie;
echo $moovie->name;
$moovie->name = 'oui';
$moovie->getname();
$moovie->setname('assasins de la polisse');
$moovie->getname();