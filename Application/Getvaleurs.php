<?php
class Getvaleurs {
    static public function getValeursDeLInstance($instance,$propriete) {
        return $instance -> $propriete;
    }
}


// ne marche pas car les propriétés sont protégées dans la classe elfe mm en static on ne peut pas y accéder donc il faut faire un getteur dans elfe