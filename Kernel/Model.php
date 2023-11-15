<?php 

namespace Kernel;

class Model{
    protected static string $table;

    public static function all(){
        $query = "SELECT * FROM ".self::getTable();
        return connexion::query($query);
    }
    public static function getTable(){

        #rechercher la class fille qui appel la classe parent
        $class = get_called_class();
        return $class::$table;
    }
}
