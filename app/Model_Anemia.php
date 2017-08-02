<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Model_Anemia extends Model
{
    //
    protected $table='anemia';

    public function scopeProv_data($query, $yea)
    {
		return $query->select(DB::raw('provincia, distrito, eess, anemia, normal, anemia+normal as total, anemia/(anemia+normal)*100 as porcentaje'))->where('year','=',$yea);
    }

    public function scopeMicro_data($query, $yea)
    {
		return $query->select(DB::raw('micro_red, eess, anemia, normal, anemia+normal as total, anemia/(anemia+normal)*100 as porcentaje'))->where('year','=',$yea);
    }

    public function scopeProv_graf($query, $yea)
    {
		return $query->select(DB::raw('provincia, sum(anemia) as anemia, sum(normal) as normal, sum(anemia)+sum(normal) as total, round(sum(anemia)/(sum(anemia)+sum(normal))*100,1) as porcentaje'))->groupBy('provincia')->where('year','=',$yea)->orderBy('porcentaje','desc');
    }

    public function scopeMicro_graf($query, $yea)
    {
		return $query->select(DB::raw('micro_red, sum(anemia) as anemia, sum(normal) as normal, sum(anemia)+sum(normal) as total, round(sum(anemia)/(sum(anemia)+sum(normal))*100,1) as porcentaje'))->groupBy('micro_red')->where('year','=',$yea)->orderBy('porcentaje','desc');
    }

    //odometros
    public function scopePorc_graf($query)
    {
        return $query->select(DB::raw('year, round(sum(anemia)/(sum(normal)+sum(anemia))*100,1) as porcentaje'))->groupBy('year');
    }

    public function scopeMicro_graf_year($query, $mr)
    {
        return $query->select(DB::raw('year, sum(anemia) as anemia, sum(normal) as normal, sum(anemia)+sum(normal) as total, round(sum(anemia)/(sum(anemia)+sum(normal))*100,1) as porcentaje'))->where('id_micro','=',$mr)->groupBy('year');
    }

    public function scopeEstab($query, $mr)
    {
        return $query->select(DB::raw('distinct(id_eess), eess'))->where('id_micro','=',$mr);
    }

    public function scopeEstab_graf_year($query, $estab)
    {
        return $query->select(DB::raw('year, sum(anemia) as anemia, sum(normal) as normal, sum(anemia)+sum(normal) as total, round(sum(anemia)/(sum(anemia)+sum(normal))*100,1) as porcentaje'))->where('id_eess','=',$estab)->groupBy('year');
    }



}
