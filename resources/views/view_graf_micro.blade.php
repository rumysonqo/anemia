@extends('layouts.main')
@section('content')
	<br>
	<br>
	<br>
	<div class="container-fluid">
	<div class="row">
  		<div class="col-xs-2">
  			<div style="width: 100%;">
	  			<div class="form-group">
	  				{{ Form::label('micro_red','Micro Red',null,['class'=>'form-control input-lg']) }}	
                    {{ Form::select('micro_red',$micro,null,['placeholder'=>'Selecciona...', 'class'=>'form-control input-md']) }}  

	  			</div>
  			</div>
  		</div>

  		<div class="col-xs-10">
  			<div class='panel panel-primary' style="width: 100%;">
	  			<div id="div_graf" style="min-width: 800px; height: 500px; margin: 0 auto"></div>
	  		</div>
  		</div>
	</div>
	</div>

@endsection 

@section('script')
<script>
	$("#micro_red").change(function(event){
	$.get("grf_mic/"+event.target.value+"", function(response, state){
		graf_mic(response);
	});
});



function graf_mic(datos)
{
	console.log(datos);

    var options ={
        chart:{
            renderTo:'div_graf',
            type:'column'
        },
        colors: ['#058DC7', '#CCB102','#FA2C3D', '#168603'],
        title:{
            text:'Anemia en Niños Menores de 3 Años en la Micro Red'+" "+$("#micro_red option:selected").text(),
        },
        subtitle: {
            text: 'Red de Servicios de Salud Cusco Norte 2014-2017'
        },
        xAxis:[],
        yAxis:[
             {
                title:{
                text: 'Numero de Niños'
                    },
                labels: {
                format: '{value}'
                },
                plotLines:[{
                    value:0,
                    width:1,
                    color:'#D91818'}]
            },
            {
                opposite:true,
                title: {
                text: 'Porcentaje de Anemia'
                    },
                
                labels: {
                format: '{value} %'
                }
            }
            ],


            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom',
                borderWidth: 1,
                backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                shadow: true
            },


        plotOptions:{
            column:{
                pointPadding:0.01,
                borderWidth:0
            },
            
        },
        credits: {
                enabled: false
                },

        dataLabels: {
            enabled: true,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        },


        series:[],
        }


        var xAxis={
            categories:[],
            title:{
                text:'Micro Redes'                
            },
            labels:{
                rotation:30,
                align:'rigth',
                style:{
                    fontSize:'12px',
                    fontFamily:'Verdana, sans-serif'
                }
            }
        };


        var seriesAnemia={
            data:[]
        };

        seriesAnemia.name='Niños con Anemia';
        
        var seriesNormal={
            data:[]
        };

        seriesNormal.name='Niños Normales';


        var seriesTotal={
            data:[]
        };

        seriesTotal.name='Total Niños Evaluados';
        


        var seriesPorcentaje={
            data:[]
        };
        seriesPorcentaje.name='Porcentaje de Anemia';
        seriesPorcentaje.type='line';
        seriesPorcentaje.yAxis=1;
        seriesPorcentaje.tooltip={valueSuffix:'%'};

        $.each(datos,function(i,n){
            xAxis.categories.push(n['year']);
        });

        $.each(datos,function(i,n){
            seriesAnemia.data.push(parseInt(n['anemia']));
        });

        $.each(datos,function(i,n){
            seriesNormal.data.push(parseInt(n['normal']));
        });

        $.each(datos,function(i,n){
            seriesPorcentaje.data.push(parseFloat(n['porcentaje']));
        });

        $.each(datos,function(i,n){
            seriesTotal.data.push(parseInt(n['total']));
        });


        options.xAxis.push(xAxis);
        options.series.push(seriesTotal);
        options.series.push(seriesAnemia);
        options.series.push(seriesNormal);
        options.series.push(seriesPorcentaje);

        var chart = new Highcharts.Chart(options);

    }

</script>

@endsection