Formulacion de creacion empleado

<form action="{{ url('/empleados') }}" method="post" enctype="multipart/form-data">

    @csrf
    @include('empleados.form');

</form>
