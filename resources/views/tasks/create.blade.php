@extends('layouts.main')

@section('content')

        <h1 class="text-center">Новая задача</h1>
        @if($errors->any())
            <div class="alert alert-danger" class="" role="alert" style="position: fixed; bottom: 20px; right: 20px; width: 500px">
                    @foreach($errors->all() as $error)
                       {{ $error }}
                    @endforeach
            </div>
        @endif

        <form method="post" action="/tasks" class="d-flex justify-content-between align-items-end">
            <div class="form-group w-100">
                @csrf
                <label for="description">Задача:</label>
                <input class="form-control @if($errors->any()) border-danger @endif" name="description"/>
            </div>
            <div class="form-group ">
                <button type="submit" class="btn btn-primary ms-2">Создать</button>
            </div>
        </form>

@endsection
