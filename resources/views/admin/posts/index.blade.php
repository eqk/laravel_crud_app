@extends('admin.admin-lte.dashboard')

@section('title', 'Posts')

@section('header-buttons')
    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary btn-flat "><span class="glyphicon glyphicon-plus" aria-hidden="true"/> add</a>
@endsection

@section('content')

    <div class="box box-primary">
        <div class="box-body no-padding">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>id</th><th> String </th><th> Number </th><th> Text </th><th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($posts as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->string }}</td><td>{{ $item->number }}</td><td>{{ $item->text }}</td>
                        <td class="text-right">
                
                            <a href="{{ route('admin.posts.edit', $item->id) }}" class="btn btn-primary btn-xs" title="Edit Post"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                            {!! Form::open([
                                'method'=>'DELETE',
                                'route' => ['admin.posts.destroy', $item->id],
                                'style' => 'display:inline'
                            ]) !!}
                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Post" />', array(
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-xs',
                                        'title' => 'Delete Post',
                                        'onclick'=>'return confirm("Confirm delete?")'
                                )) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pagination-wrapper"> {!! $posts->render() !!} </div>
        </div>
      </div>


@endsection
