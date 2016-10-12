@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Post {{ $post->id }}
        <a href="{{ url('admin.posts/' . $post->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Post"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['admin.posts', $post->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete Post',
                    'onclick'=>'return confirm("Confirm delete?")'
            ))!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $post->id }}</td>
                </tr>
                <tr><th> String </th><td> {{ $post->string }} </td></tr><tr><th> Number </th><td> {{ $post->number }} </td></tr><tr><th> Text </th><td> {{ $post->text }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
