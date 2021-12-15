Mostrar las listas de Empleados

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $empleados as $empleados)
        <tr>
            <td>{{ $empleados->id }}</td>

            <td>
                <img src="{{ asset('storeage').'/'.$empleados->Foto }}" alt="">
            </td>

            <td>{{ $empleados->Nombre }}</td>
            <td>{{ $empleados->ApellidoPaterno }}</td>
            <td>{{ $empleados->ApellidoMaterno }}</td>
            <td>{{ $empleados->Correo }}</td>
            <td>
            <a href="{{ url('/empleados/'.$empleados->id.'/edit') }}">
                Editar
            </a>

            |

            <form action="{{ url('/empleados/'.$empleados->id) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
