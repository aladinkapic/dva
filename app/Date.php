<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model{
    public static function get_month_name($index){
        if($index == 1) return "Januar";
        else if($index == 2) return "Februar";
        else if($index == 3) return "Mart";
        else if($index == 4) return "April";
        else if($index == 5) return "Maj";
        else if($index == 6) return "Juni";
        else if($index == 7) return "Juli";
        else if($index == 8) return "August";
        else if($index == 9) return "Septembar";
        else if($index == 10) return "Oktobar";
        else if($index == 11) return "Novembar";
        else if($index == 12) return "Decembar";
    }
}
