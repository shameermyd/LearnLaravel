<h1>{{$heading}}</h1>

@foreach($listing as $lists)
    <h3>{{$lists['title']}}</h3>
    <p>{{$lists['description']}}</p>
@endforeach
