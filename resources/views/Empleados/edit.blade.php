Formulario de edicion de empleado

<form action="{{ url('/empleados/'.$empleado->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    {{ method_field('PATCH') }}

    @include('empleados.form')
</form>

