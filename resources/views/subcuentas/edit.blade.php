@foreach($catalogocuentas as $catalogocuenta)
    <x-adminlte-modal id="modaledit{{$catalogocuenta->id}}" title="Nueva Cuenta" theme="green" icon="fas fa-plus" >               
        <form method="POST" action="{{ route('Subcuentas.update', $catalogocuenta->id) }}"  role="form" enctype="multipart/form-data" >
            {{ method_field('PATCH') }}
            @csrf
                @include('subcuentas.form')
         </form>
    </x-adminlte-modal>

  


@endforeach

