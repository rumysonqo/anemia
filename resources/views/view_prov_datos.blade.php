@extends('layouts.main')
@section('content')
<br>
<div class="panel-body">
<center><h3>Anemia en Niños Menores de 3 Años de la Red Cusco Norte {{ $yea }}</h3></center>
	<table class="pretty cell-border compact" cellspacing="0" cellpadding="0" id="mitabla">
		<thead>
			<th>Provincia</th>
			<th>Distrito</th>
			<th>Establecimiento</th>
			<th>Anemia</th>
			<th>Normal</th>
			<th>Total Controlados</th>
			<th>Grafico de % de Anemia</th>
			<th>% de Anemia</th>

		</thead>
		<tbody>
			@foreach($pro_tabla as $anm)
			<tr>
				<td>{{ $anm->provincia }}</td>
				<td>{{ $anm->distrito }}</td>
				<td>{{ $anm->eess }}</td>
				<td align='right'>{{ $anm->anemia }}</td>
				<td align='right'>{{ $anm->normal }}</td>
				<td align='right'>{{ $anm->total }}</td>
				<td>
					<div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-danger" style="width:{{ round($anm->porcentaje,1).'%' }}" ></div>
                    </div>
				</td>
				@if($anm->porcentaje <= 20)
				<td align='center'><span class='badge bg-green'> {{ round($anm->porcentaje,1)."%" }} </span></td>
				@endif
				@if($anm->porcentaje > 20 && $anm->porcentaje <= 30 )
				<td align='center'><span class='badge bg-yellow'> {{ round($anm->porcentaje,1)."%" }} </span></td>
				@endif
				@if($anm->porcentaje > 30)
				<td align='center'><span class='badge bg-red'> {{ round($anm->porcentaje,1)."%" }} </span></td>
				@endif
				
				
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection

@section('script')
<script>
        $(document).ready(function(){
        $('#mitabla').DataTable({

      	//"dom": 'T<"clear">lfrtip',
       	//"sDom": "T<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
       	"pagingType": "simple_numbers",
       	//Actualizo las etiquetas de mi tabla para mostrarlas en español
       	"language": {
		"lengthMenu": "Mostrar _MENU_ registros por página.",
        "zeroRecords": "No se encontró registro.",
        "info": "  _START_ de _END_ (_TOTAL_ registros totales).",
        "infoEmpty": "0 de 0 de 0 registros",
        "infoFiltered": "(Encontrado de _MAX_registros)",
        "search": "Buscar: ",
        "processing": "Procesando la información",
        "paginate": {
        "first": " |< ",
        "previous": "Anterior",
        "next": "Siguiente",
        "last": " >| "
        }
        }
        });
        });
</script>

@endsection