<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model_Anemia;
use App\Model_Micro;
//use DB;

class Ctrl_Anemia extends Controller
{
    //controladores 2017
	public function prov_datos($yea)
    {
        $pro_tabla=Model_Anemia::Prov_data($yea)->get();
        return view('view_prov_datos')->with('pro_tabla',$pro_tabla)->with('yea',$yea); 
    }	

    public function mic_datos($yea)
    {
        $mic_tabla=Model_Anemia::Micro_data($yea)->get();
        return view('view_mic_datos')->with('mic_tabla',$mic_tabla)->with('yea',$yea); 
    }

    public function prov_graf_2017()
    {
        return view('view_graf_prov_2017');
    }

    public function dat_graf_prov_2017(Request $request)
    {
    	if($request->ajax())
    	{
    		$prov_graf_2017=Model_Anemia::Prov_graf(2017)->get();
    		return response()->json($prov_graf_2017);
    	}
    }


	public function mic_graf_2017()
    {
        return view('view_graf_mic_2017');
    }    

    public function dat_graf_mic_2017(Request $request)
    {
    	if($request->ajax())
    	{
    		$mic_graf=Model_Anemia::Micro_graf(2017)->get();
    		return response()->json($mic_graf);
    	}
    }


    public function prov_graf_2016()
    {
        return view('view_graf_prov_2016');
    }

    public function dat_graf_prov_2016(Request $request)
    {
        if($request->ajax())
        {
            $prov_graf_2016=Model_Anemia::Prov_graf(2016)->get();
            return response()->json($prov_graf_2016);
        }
    }


    public function mic_graf_2016()
    {
        return view('view_graf_mic_2016');
    }    

    public function dat_graf_mic_2016(Request $request)
    {
        if($request->ajax())
        {
            $mic_graf=Model_Anemia::Micro_graf(2016)->get();
            return response()->json($mic_graf);
        }
    }



    public function prov_graf_2015()
    {
        return view('view_graf_prov_2015');
    }

    public function dat_graf_prov_2015(Request $request)
    {
        if($request->ajax())
        {
            $prov_graf_2015=Model_Anemia::Prov_graf(2015)->get();
            return response()->json($prov_graf_2015);
        }
    }


    public function mic_graf_2015()
    {
        return view('view_graf_mic_2015');
    }    

    public function dat_graf_mic_2015(Request $request)
    {
        if($request->ajax())
        {
            $mic_graf=Model_Anemia::Micro_graf(2015)->get();
            return response()->json($mic_graf);
        }
    }

    public function prov_graf_2014()
    {
        return view('view_graf_prov_2014');
    }

    public function dat_graf_prov_2014(Request $request)
    {
        if($request->ajax())
        {
            $prov_graf_2014=Model_Anemia::Prov_graf(2014)->get();
            return response()->json($prov_graf_2014);
        }
    }


    public function mic_graf_2014()
    {
        return view('view_graf_mic_2014');
    }    

    public function dat_graf_mic_2014(Request $request)
    {
        if($request->ajax())
        {
            $mic_graf=Model_Anemia::Micro_graf(2014)->get();
            return response()->json($mic_graf);
        }
    }


    //odometro 2017
    public function dat_graf_porc_2017(Request $request)
    {
        if($request->ajax())
        {
            $porc_graf_2017=Model_Anemia::Porc_graf()->get();
            return response()->json($porc_graf_2017);
        }
    }    

    public function graf_micro()
    {
        $mic=Model_Micro::pluck('nombre','id');
        return view('view_graf_micro')->with('micro',$mic); 
    }

    public function datos_graf_micro(Request $request, $mr)
    {
        if($request->ajax())
        {
            $datmic=Model_Anemia::Micro_graf_year($mr)->get();
            return response()->json($datmic);
        }
    }

    public function graf_estab()
    {
        $mic=Model_Micro::pluck('nombre','id');
        return view('view_graf_estab')->with('micro',$mic); 
    }

    public function datos_eess(Request $request, $mr)
    {
        if($request->ajax())
        {
            $dateess=Model_Anemia::Estab($mr)->get();
            return response()->json($dateess);
        }
    }

    public function datos_graf_eess(Request $request, $estab)
    {
        if($request->ajax())
        {
            $graf_eess=Model_Anemia::Estab_graf_year($estab)->get();
            return response()->json($graf_eess);
        }
    }


    
}
