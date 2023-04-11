@extends('layouts.app')

@section('content')
    <div class="px-2 mt-4">
        <h1>Hello {{ Auth::user()->name }}</h1>
        <div class="row">
            <form action="">
              @csrf
              <div class="form-group">
                <input type="text" name="name_task" id="name" class="form-control" required>
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
            </form>
        </div>
    </div>
    
@endsection