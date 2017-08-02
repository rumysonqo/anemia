@extends('layouts.main')
@section('content')
<br>
<br>
<br>
<center>
<h1>Seguimiento de Anemia en Niños Menores de 3 Años</h1>
<h1>Red Cusco Norte 2014-2017</h1>
</center>

<div class="row">
  <div class="col-xs-6"><div id="chart_2017" style="width: 100%; height: 500px;"></div></div>
  <div class="col-xs-6"><div id="chart_2016" style="width: 100%; height: 450px;"></div></div>
</div>

<div class="row">
  <div class="col-md-6"><div id="chart_2015" style="width: 100%; height: 450px;"></div></div>
  <div class="col-md-6"><div id="chart_2014" style="width: 100%; height: 450px;"></div></div>
</div>

@endsection

@section('script')

<script>
	$.get("grf_porc_2017", function(response, state){
       graf_porc(response);
    });
	
	function graf_porc(datos) {
	  var chart_2017 = AmCharts.makeChart("chart_2017", {
	  "theme": "light",
	  "type": "gauge",
	  "axes": [{
	    "topTextFontSize": 30,
	    "topTextYOffset": 70,
	    "axisColor": "#C1AB09",
	    "axisThickness": 1,
	    "endValue": 100,
	    "gridInside": true,
	    "inside": true,
	    "radius": "50%",
	    "valueInterval": 10,
	    "tickColor": "#AE9506",
	    "startAngle": -160,
	    "endAngle": 160,
	    "unit": "%",
	    "bandOutlineAlpha": 0,
	    "bands": [{
	      "color": "#BC1B2E",
	      "endValue": 100,
	      "innerRadius": "105%",
	      "radius": "170%",
	      "gradientRatio": [0.5, 0, -0.5],
	      "startValue": 0
	    }, {
	      "color": "#F7E84B",
	      "endValue": 0,
	      "innerRadius": "105%",
	      "radius": "170%",
	      "gradientRatio": [0.5, 0, -0.5],
	      "startValue": 0
	    }]
	  }],
	  "titles":[{
	    "text":"% de Anemia Enero-Marzo 2017",
	    "size":20
	  }],
	  "arrows": [{
	    "alpha": 1,
	    "innerRadius": "35%",
	    "nailRadius": 0,
	    "radius": "170%"
	  }],
	  "creditsPosition" : "bottom-right"
	});


	  var chart_2016 = AmCharts.makeChart("chart_2016", {
	  "theme": "light",
	  "type": "gauge",
	  "axes": [{
	    "topTextFontSize": 20,
	    "topTextYOffset": 70,
	    "axisColor": "#31d6ea",
	    "axisThickness": 1,
	    "endValue": 100,
	    "gridInside": true,
	    "inside": true,
	    "radius": "50%",
	    "valueInterval": 10,
	    "tickColor": "#67b7dc",
	    "startAngle": -160,
	    "endAngle": 160,
	    "unit": "%",
	    "bandOutlineAlpha": 0,
	    "bands": [{
	      "color": "#0080ff",
	      "endValue": 100,
	      "innerRadius": "105%",
	      "radius": "170%",
	      "gradientRatio": [0.5, 0, -0.5],
	      "startValue": 0
	    }, {
	      "color": "#3cd3a3",
	      "endValue": 0,
	      "innerRadius": "105%",
	      "radius": "170%",
	      "gradientRatio": [0.5, 0, -0.5],
	      "startValue": 0
	    }]
	  }],
	  "titles":[{
	    "text":"% de Anemia 2016",
	    "size":20
	  }],
	  "arrows": [{
	    "alpha": 1,
	    "innerRadius": "35%",
	    "nailRadius": 0,
	    "radius": "170%"
	  }],
	  "creditsPosition" : "bottom-right"
	});


var chart_2015 = AmCharts.makeChart("chart_2015", {
	  "theme": "light",
	  "type": "gauge",
	  "axes": [{
	    "topTextFontSize": 20,
	    "topTextYOffset": 70,
	    "axisColor": "#31d6ea",
	    "axisThickness": 1,
	    "endValue": 100,
	    "gridInside": true,
	    "inside": true,
	    "radius": "50%",
	    "valueInterval": 10,
	    "tickColor": "#67b7dc",
	    "startAngle": -160,
	    "endAngle": 160,
	    "unit": "%",
	    "bandOutlineAlpha": 0,
	    "bands": [{
	      "color": "#0080ff",
	      "endValue": 100,
	      "innerRadius": "105%",
	      "radius": "170%",
	      "gradientRatio": [0.5, 0, -0.5],
	      "startValue": 0
	    }, {
	      "color": "#3cd3a3",
	      "endValue": 0,
	      "innerRadius": "105%",
	      "radius": "170%",
	      "gradientRatio": [0.5, 0, -0.5],
	      "startValue": 0
	    }]
	  }],
	  "titles":[{
	    "text":"% de Anemia 2015",
	    "size":20
	  }],
	  "arrows": [{
	    "alpha": 1,
	    "innerRadius": "35%",
	    "nailRadius": 0,
	    "radius": "170%"
	  }],
	  "creditsPosition" : "bottom-right"
	});


	var chart_2014 = AmCharts.makeChart("chart_2014", {
	  "theme": "light",
	  "type": "gauge",
	  "axes": [{
	    "topTextFontSize": 20,
	    "topTextYOffset": 70,
	    "axisColor": "#31d6ea",
	    "axisThickness": 1,
	    "endValue": 100,
	    "gridInside": true,
	    "inside": true,
	    "radius": "50%",
	    "valueInterval": 10,
	    "tickColor": "#67b7dc",
	    "startAngle": -160,
	    "endAngle": 160,
	    "unit": "%",
	    "bandOutlineAlpha": 0,
	    "bands": [{
	      "color": "#0080ff",
	      "endValue": 100,
	      "innerRadius": "105%",
	      "radius": "170%",
	      "gradientRatio": [0.5, 0, -0.5],
	      "startValue": 0
	    }, {
	      "color": "#3cd3a3",
	      "endValue": 0,
	      "innerRadius": "105%",
	      "radius": "170%",
	      "gradientRatio": [0.5, 0, -0.5],
	      "startValue": 0
	    }]
	  }],
	  "titles":[{
	    "text":"% de Anemia 2014",
	    "size":20
	  }],
	  "arrows": [{
	    "alpha": 1,
	    "innerRadius": "35%",
	    "nailRadius": 0,
	    "radius": "170%"
	  }],
	  "creditsPosition" : "bottom-right"
	});

	chart_2017.arrows[0].setValue(parseFloat(datos[3].porcentaje));
	chart_2017.axes[0].setTopText(parseFloat(datos[3].porcentaje) + " %");
	chart_2017.axes[0].bands[1].setEndValue(parseFloat(datos[3].porcentaje));


	chart_2016.arrows[0].setValue(parseFloat(datos[2].porcentaje));
	chart_2016.axes[0].setTopText(parseFloat(datos[2].porcentaje) + " %");
	chart_2016.axes[0].bands[1].setEndValue(parseFloat(datos[2].porcentaje));

	chart_2015.arrows[0].setValue(parseFloat(datos[1].porcentaje));
	chart_2015.axes[0].setTopText(parseFloat(datos[1].porcentaje) + " %");
	chart_2015.axes[0].bands[1].setEndValue(parseFloat(datos[1].porcentaje));

	chart_2014.arrows[0].setValue(parseFloat(datos[0].porcentaje));
	chart_2014.axes[0].setTopText(parseFloat(datos[0].porcentaje) + " %");
	chart_2014.axes[0].bands[1].setEndValue(parseFloat(datos[0].porcentaje));	

};
</script>
@endsection