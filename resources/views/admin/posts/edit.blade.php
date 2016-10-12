@extends('admin.admin-lte.dashboard')
@section('title', 'Редактировать Post')

@section('content')
{!! Form::model($post, ['url' => route('admin.posts.update', $post->id), 'method' => 'PUT']) !!}
    
            @include('admin.posts.form')

{!! Form::close() !!}


@endsection