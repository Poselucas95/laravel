@extends('master.home')

@section('contenido')
	<form method="post">
		@csrf
		<label>Nombre: </label><input type="text" name="nombre"><br>
		<label>Precio: </label><input type="text" name="precio"><br>
		<label>Stock: </label><input type="text" name="stock"><br>
		<input type="submit" name="agregarProducto" value="Agregar">
	</form>
@endsection

@section('agregado')
	<table>
		<tr>
			@if(isset($productoAgregado))
			@foreach ($productoAgregado as $producto)
		        <td>{{ $producto->nombre }}</td>
		        <td>{{ $producto->precio }}</td>
		       	<td>{{ $producto->stock }}</td>
	       	@endforeach
	       	@endif
	    </tr>
	</table>    
@endsection

@section('error')
	@if($errors->any())
		<div>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</div>
	@endif
@endsection