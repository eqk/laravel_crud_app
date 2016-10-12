@extends('admin.admin-lte.dashboard')
@section('title', 'Добавить Post')

@section('content')
{!! Form::open(['url' => route('admin.posts.store')]) !!}
    
            @include('admin.posts.form')

{!! Form::close() !!}


@endsection