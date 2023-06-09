@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach($wallpapers as $wallpaper)

        <div class="col-md-10 mt-4">
            <div class="card">
                <div class="card-header">{{$wallpaper->title}}</div>

                <div class="card-body">
                    <p>{{$wallpaper->description}}</p>
                    <p>
                        <img src="/uploads/800x600/{{$wallpaper->file}}" class="img-thumbnail" style="width: 100%;">
                    </p>
                </div>
            </div>

        </div>
         <div class="col-md-2 mt-4">
            <h3> Download</h3>

            <p>

            @if(Auth::check())
            <form action="{{route('download2',[$wallpaper->id])}}" method="post">@csrf
                <button class="btn btn-primary" type="submit">1280x1024</button>
            </form>

            @elseif (!Auth::check())
            <form action="{{route('login')}}">@csrf
                <button class="btn btn-primary" type="submit">1280x1024</button>
            </form>
            @endif

                {{-- <form action="{{route('download2',[$wallpaper->id])}}" method="post">@csrf
                    <button class="btn btn-primary" type="submit">1280x1024</button>
                </form> --}}

            </p>

            <p>
                @if(Auth::check())
                <form action="{{route('download1',[$wallpaper->id])}}" method="post">@csrf
                    <button class="btn btn-primary" type="submit">800x600</button>
                </form>

                @elseif (!Auth::check())
                <form action="{{route('login')}}">@csrf
                    <button class="btn btn-primary" type="submit">800x600</button>
                </form>
                @endif

                {{-- <form action="{{route('download1',[$wallpaper->id])}}" method="post">@csrf
                    <button class="btn btn-primary" type="submit"> 800x600</button>
                </form> --}}
            </p>

            <p>
                @if(Auth::check())
                <form action="{{route('download3',[$wallpaper->id])}}" method="post">@csrf
                    <button class="btn btn-primary" type="submit">316x255</button>
                </form>

                @elseif (!Auth::check())
                <form action="{{route('login')}}">@csrf
                    <button class="btn btn-primary" type="submit">316x255</button>
                </form>
                @endif

                {{-- <form action="{{route('download3',[$wallpaper->id])}}" method="post">@csrf
                    <button class="btn btn-primary" type="submit">316x255</button>
                </form> --}}

            </p>

            <p>

                @if(Auth::check())
                <form action="{{route('download4',[$wallpaper->id])}}" method="post">@csrf
                    <button class="btn btn-primary" type="submit">118x95</button>
                </form>

                @elseif (!Auth::check())
                <form action="{{route('login')}}">@csrf
                    <button class="btn btn-primary" type="submit">118x95</button>
                </form>
                @endif

                {{-- <form action="{{route('download4',[$wallpaper->id])}}" method="post">@csrf
                    <button class="btn btn-primary" type="submit">118x95</button>
                </form> --}}

            </p>
        </div>
        @endforeach
{{$wallpapers->links()}}

    </div>
</div>
@endsection
