@extends('layouts.main')

@section('content')

    @foreach($tasks as $task)
        <div class="card @if($task->isCompleted()) border-success @endif mb-2">
            <div class="card-body ">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto ">
                        {{ $task->description }}
                    </div>
                    <div class="col-auto">
                        @if(!$task->isCompleted())
                            <form action="/tasks/{{ $task->id }}" method="POST">
                                @method('PATCH')
                                @csrf
                                <button class="btn btn-light btn-block" input="submit">Выполнить</button>
                            </form>
                        @else
                            <form action="/tasks/{{ $task->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-block" input="submit">Удалить</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <a href="/tasks/create" class="btn btn-primary w-100 mt-2">Новая задача</a>

@endsection
