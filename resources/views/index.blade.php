<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
<h1>Listado de Productos </h1>

<p>informatica Trayecto 2 Seccion 1</p>
<p style="color: blue;">Jorge Tovar 31.811.103 <br>Alberto Gutiérrez 31.758.635 </p>


<table border="2" cellpadding="2">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Descripción</th>
    </tr>

    @forelse ($productos as $producto)
        <tr>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->precio }}</td>
            <td>{{ $producto->stock }}</td>
            <td>{{ $producto->descripcion }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="2">No se encontraron registros en el sistema</td>
        </tr>
    @endforelse
</table>
