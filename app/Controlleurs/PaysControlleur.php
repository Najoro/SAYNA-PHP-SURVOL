<?php 

namespace app\Controlleurs;

use app\Models\Pays;
use \Kernel\View;

class PaysControlleur{

    public function index(){
        $pays = Pays::all();

        return new \Kernel\View("pays/index.php", ["pays"=> $pays]);
    }
}
?>