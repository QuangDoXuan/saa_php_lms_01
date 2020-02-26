@extends('admin.layout.admin')
@section('title', 'Quản lý người dùng')

@section('content')
<div class="action-bar">
    <form method="GET" action="{{ route('admin\book\search') }}">
        <div class="form-group search-form">
            <div class="cover-input-search">
                <input class="input-search" type="text" name="keyword" placeholder="{{ __('Type name') }}"/>
            </div>
            <button type="submit" class="btn-search btn-primary"> {{ __('Search') }}</button>
        </div>
    </form>
    <button class="btn btn-danger btn-add"><a href="{{ route('admin\book\create') }}">{{ __('Add') }}</a></button>
</div>



<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">{{ __('Order') }}</th>
      <th scope="col">{{ __('Title') }}</th>
      <th scope="col">{{ __('Description') }}</th>
      <th scope="col">{{ __('Thumbnail') }}</th>
      <th scope="col">{{ __('Publisher') }}</th>
      <th scope="col">{{ __('Action') }}</th>
    </tr>
  </thead>
  <tbody>
    @foreach($books as $key => $book)
        <tr key="{{$book->id}}">
            <td>{{$key+1}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->Description}}</td>
            <td>

                <img style="width:200px; height:200px; object-fit:cover" src="{{ asset('storage/uploads/'.$book->thumbnail) }}"/>
            </td>
            <td>{{$book->publisher->name}}</td>
            <td>
                <div style="display:flex">
                    <form method="get" action="{{ action('Admin\BookController@edit', $book->id) }}" class="float-left mr-2">
                        <div>
                            <button type="submit" class="btn btn-primary">{{ __('Edit') }}</button>
                        </div>
                    </form>
                    <form method="post" action="{{ action('Admin\BookController@delete', $book->id) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div>
                            <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                        </div>
                    </form>
                </div>   
            </td>
        </tr>
    @endforeach
  </tbody>
</table> 
{!! $books->links() !!}


@endsection

@section('javascript')
    <script>

    </script>
@endsection 