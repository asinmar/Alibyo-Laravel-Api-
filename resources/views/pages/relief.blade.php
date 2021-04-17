<h2>Relief</h2>

@foreach($reliefs as $relief)
    <p>{{$relief->id}}</p>
    <p>{{$relief->relief_name}}</p>
@endforeach