<form action="/actores/buscar" method="POST">
    {{--poner csrf por temas de seguridad de Laravel--}}
    {{csrf_field()}}
    <input type="text" name="nombre">
    <button type="submit">buscar</button>
</form>

<ul>

    @foreach($actores as $actor)

        <li><a href="actor/detalle/{{$actor->id}}">{{$actor->nombre}}</a></li>
        <form action="/actores/eliminar/{{$actor->id}}" method="post">
            {{csrf_field()}}
            <button type="submit"><a href="/actores/eliminar/{{$actor->id}}" >Eliminar</a></button>
        </form>

    @endforeach
</ul>
