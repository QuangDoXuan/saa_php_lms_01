@extends('admin.layout.admin')
@section('title', 'Quản lý người dùng')

@section('content')

<div class="action-bar">
    <form method="GET" action="{{ route('admin\user\search') }}">
        <div class="form-group search-form">
            <div class="cover-input-search">
                <input class="input-search" type="text" name="keyword" placeholder="{{ __('Type name') }}"/>
            </div>
            <select id="role_id" name="role_id">
                <option value=1>Super admin</option>
                <option value=3>Moderator</option>
            </select>
            <button type="submit" class="btn-search btn-primary"> {{ __('Search') }}</button>
        </div>
    </form>

    <button class="btn btn-warning btn-export"><a href="{{ route('admin\user\export') }}">{{ __('Export') }}</a></button>

    <button class="btn btn-danger btn-add"><a href="{{ route('admin\user\create') }}">{{ __('Add') }}</a></button>
</div>



<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">{{ __('Order') }}</th>
      <th scope="col">{{ __('Name') }}</th>
      <th scope="col">{{ __('Email') }}</th>
      <th scope="col">{{ __('Role') }}</th>
      <th scope="col">{{ __('Action') }}</th>
    </tr>
  </thead>
  <tbody>
    <!-- <tr>
        <td></td>
        <td>
        </td>
        <td></td>
        <td></td>
        <td></td>
    </tr> -->

    @foreach($users as $key => $user)
        <tr key="{{$user->id}}">
            <td>{{$key+1}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->name}}</td>
            <td>
                <!-- <a  style="margin-right:8px" ><i class="fas fa-trash-alt"></i></a>
                <a><i class="far fa-edit"></i></a> -->
                <div style="display:flex">
                    <form method="get" action="{{ action('Admin\UserController@edit', $user->id) }}" class="float-left mr-2">
                        <div>
                            <button type="submit" class="btn btn-primary">{{ __('Edit') }}</button>
                        </div>
                    </form>
                    <form method="post" action="{{ action('Admin\UserController@delete', $user->id) }}">
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
{!! $users->links() !!}
@endsection

@section('javascript')
    <script>

    </script>
@endsection