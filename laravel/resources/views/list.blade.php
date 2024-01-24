<h1>{{$heading}}</h1>

@unless(count($listing) == 0)
    @foreach($listing as $lists)
        <h3>{{$lists['title']}}</h3>
        <p>{{$lists['description']}}</p>
    @endforeach
@else
    <h4>No listing data is found</h4>
@endunless
