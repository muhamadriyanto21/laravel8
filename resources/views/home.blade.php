@extends('layouts.app')

@section('content')
    <div class="px-2 mt-4">
        <h1>Hello {{ Auth::user()->name }}</h1>
        <div class="row">
            <ol>
                @if(count($list ?? '') > 0)
                    @foreach ($list ?? '' as $item) 
                        <li>{{ $item }}</li>
                    @endforeach
                @endif
            </ol>
        </div>
    </div>
    
@endsection