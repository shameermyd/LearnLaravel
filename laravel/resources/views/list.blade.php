@extends('layout')
@section('content')
    
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    
    @unless(count($listing) == 0)
        @foreach($listing as $lists)
        <div class="bg-gray-50 border border-gray-200 rounded p-6">
            <div class="flex">
                <img class="hidden w-48 mr-6 md:block" src="{{asset('images/no-image.png')}}"alt="" />
                <div>
                    <h3 class="text-2xl">
                        <a href="/lists/{{$lists->id}}">{{$lists->title}}</a>
                    </h3>
                    <div class="text-xl font-bold mb-4">{{$lists->company}}</div>
                    <ul class="flex">
                        <li
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                        >
                            <a href="#">Laravel</a>
                        </li>
                        <li
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                        >
                            <a href="#">API</a>
                        </li>
                        <li
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                        >
                            <a href="#">Backend</a>
                        </li>
                        <li
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                        >
                            <a href="#">Vue</a>
                        </li>
                    </ul>
                    <div class="text-lg mt-4">
                        <i class="fa-solid fa-location-dot"></i> {{$lists->location}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @else
        <h4>No listing data is found</h4>
    @endunless
</div>
@endsection
