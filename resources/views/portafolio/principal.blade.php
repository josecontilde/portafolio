@extends('layout.template')

@section('title','JossDev')

@section('content')
{{-- inicio Nav --}}

<header>
    <div class="nav-mobile">
        <i class="fa-solid fa-bars"></i>
    </div>
    <ul class="nav">
        <li><a href="#inicio">Inicio</a></li>
        <li><a href="#sobre">Sobre mi</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#proyectos">Proyectos</a></li>
        <li><a href="#contactame">Contactame</a></li>
    </ul>
</header>

{{-- fin nav --}}
    {{-- inicio personal --}}
    <div class="content-personal" id="personal">
        <div class="img">
            <img src="{{ asset('img/jose-img.jfif') }}">
        </div>
        <div class="informacion">
            <span class="nombre"><span class="profesion-color">Jos</span>e Veliz</span>
            <span class="profesion"><span class="profesion-color">Dev</span>eloper</span>
            <div class="redes">
                <a href="https://github.com/josecontilde" id="github"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/jos%C3%A9-veliz-b76891280/" id="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                <a class="curriculum" href="{{ asset('pdf/JoseDEV - CV.pdf') }}" download="CV - jose veliz developer.pdf">
                    Descargar CV
                </a>

            </div>
        </div>
    </div>
    {{-- fin personal --}}

    {{-- <h1>Sobre mi</h1>
    <div class="info-sobre">
        Soy un desarrollador junior de aplicaciones de
        escritorio dedicado y aplicaciones web, con mucho manejo de
        algoritmos, también manejo BD en query y un buen
        mantenimiento de la misma, todo esto con un codigo limpio.
    </div> --}}

    {{-- inicio sobre mi --}}
    <div id="sobre"></div>
    <div class="content-sobre" >
        <div class="info-content desk">
            <div class="info">
                <h2 class="titulo">Software Developer</h2>
                <p>
                    Empece haciendo consultas sql con Java, ahi empezo mi pasion por el desarrollo
                    de apps en escritorio que puedas tener la comodidad de tener todo en un solo sitio
                    fue uno de mis inspiraciones para crear y diseñar. ╰ (▔∀▔) ╯<br>
                    Me encanta que las personas confien en mi codigo, tengo experiencia haciendo apps
                    de inventario y ventas a gran escala.
                </p>
            </div>
            <div class="img">
                <i class="fa-solid fa-desktop"></i>
            </div>
        </div>
        <div class="info-content web">
            <div class="img">
                <i class="fa-solid fa-globe"></i>
            </div>
            <div class="info">
                <h2 class="titulo">Back-End Developer</h2>
                <p>
                    Como se conectan las paginas y todo el proceso que se hace al realizar una compra
                    online, me volo la mente, tener todo el poder para hacer todo lo que imaginas en
                    una hoja en blanco fue un sueño.<br>
                    Tengo pocas experiencias como Backend pero las ganas y diciplina me ayudan para hacer
                    todo lo que me propongo.
                </p>
            </div>
        </div>
    </div>
    {{-- fin sobre mi --}}

    {{-- Inicio Skills --}}
    <div id="skills"></div>
    <div class="content-skills" >
        <h2>Mis Skills</h2>
        <div class="skills-img">
            <i class="fa-brands fa-laravel"></i>
            <i class="fa-brands fa-php"></i>
            <i class="fa-brands fa-java"></i>
            <i class="fa-brands fa-js"></i>
            <i class="fa-brands fa-python"></i>
        </div>
    </div>

    {{-- Fin Skills --}}

    {{-- inicio Proyecto --}}

    @include('proyecto.proyectos')

    {{-- Fin Proyecto --}}

    {{-- inicio contactame --}}

    <div class="content-contactame" id="contactame">
        <div class="title">
            <h2>Iniciar un proyecto</h2>
        </div>
        <div class="info">
            <p>
                ¿Interesado en trabajar juntos? No demorare en responder. Yo invito el café. <i
                    class="fa-solid fa-mug-hot"></i>
            </p>
        </div>
        <div class="link">
            <a href="{{ route('contactame')}}">
                <i class="fa-regular fa-handshake"></i>
                Vamos!
            </a>
        </div>
    </div>

    {{-- fin contactame --}}
@endsection
