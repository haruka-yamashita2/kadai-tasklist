@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $tasks->id }}</td>
        </tr>
            <th>タスク</th>
            <td>{{ $tasks->status }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $tasks->content }}</td>
        </tr>
    </table>

        {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $tasks->id]) !!}
        
        {!! Form::model($tasks, ['route' => ['tasks.destroy', $tasks->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除') !!}
        {!! Form::close() !!}

@endsection