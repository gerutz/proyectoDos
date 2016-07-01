<form action="/actores/buscar" method="POST">
    {{--poner csrf por temas de seguridad de Laravel--}}
    {{csrf_field()}}
    <input type="text" name="nombre">
    <button type="submit">buscar</button>
</form>

<ul>
@foreach($actores as $actor)
        <li><a href="actor/detalle/{{$actor->id}}">{{$actor->nombre}}</a></li>
@endforeach
</ul>
