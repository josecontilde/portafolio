@extends('layout.template')

@section('title','Contactame - JossDev')

@section('content-c')
    
    <form action="{{ route('enviarMensaje') }}" method="post">
        <div class="contacto-p">
            <div class="img">
                <img src="{{ asset('img/jose-img.jfif') }}">
            </div>
            <h2>Estoy emocionado de conocer tu proyecto. ¿Listo para comenzar?</h2>
        </div>
        @csrf
        <div class="datos">
            <div class="dato name">
                <p>Nombre:</p>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="dato correo">
                <p>Correo Electronico:</p>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="dato tipo">
                <p>Tipo de proyecto:</p>
                <select id="tipo_proyecto" name="tipo_proyecto">
                    <option value="Web">Desarrollo web</option>
                    <option value="Desk">Aplicacion de escritorio</option>
                </select>
            </div>
        </div>
        <div class="datos adicional">
            <p>Detalles adicionales:</p>
            <textarea id="detalles" name="detalles"></textarea>
        </div>
        <button type="submit">Enviar</button>
    </form>
@endsection
