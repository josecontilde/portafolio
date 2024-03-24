
    {{-- <h2 style="color: white">OLAAAAAAAAAAAAAAAAAAAA {{ $proyecto->nombre }} </h2> --}}
<div class="content-proyectos" id="proyectos">
    <h2>Proyectos</h2>
    @foreach ($proyectos as $proyecto)
    <div class="proyecto">
        <div class="img">
            <img src="{{asset($proyecto->imagen)}}" alt="agendar-citas-en-java">
        </div>
        <div class="info">
            <h2>{{ $proyecto->nombre }}</h2>
            <p>
                <br>{{ $proyecto->descripcion }}
            </p>
        </div>
    </div>
    @endforeach
</div>
