@extends('admin.layout.admin')
@section('title', 'Quản lý role')

@section('content')

<div class="action-bar">
    <form method="GET" action="{{ route('admin\role\index') }}">
        <div class="form-group search-form">
            <div class="cover-input-search">
                <input class="input-search" type="text" name="keyword" placeholder="{{ __('Type name') }}"/>
            </div>
            <button class="btn-search btn-primary"> {{ __('Search') }}</button>
        </div>
    </form>
    <button class="btn btn-danger btn-add"><a href="{{ route('admin\role\create') }}">{{ __('Add') }}</a></button>
</div>



<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">{{ __('Order') }}</th>
      <th scope="col">{{ __('Name') }}</th>
      <th scope="col">{{ __('CreatedDate') }}</th>
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

    @foreach($roles as $key => $role)
        <tr key="{{$role->id}}">
            <td>{{$key+1}}</td>
            <td>{{$role->name}}</td>
            <td>{{$role->created_at}}</td>
            <td>
                @foreach($role->rolePermission as $permission)
                    {{$permission->permission->name}}
                @endforeach
            </td>
            <!-- <td></td> -->
            <td>
                <div style="display:flex">
                    <form method="get" action="{{ action('Admin\RoleController@edit', $role->id) }}" class="float-left mr-2">
                        <div>
                            <button type="submit" class="btn btn-primary">{{ __('Edit') }}</button>
                        </div>
                    </form>
                    <!-- <form method="post" action="{{ action('Admin\RoleController@delete', $role->id) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div>
                            <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                        </div>
                    </form> -->
                </div>   
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
{!! $roles->links() !!}
@endsection

@section('javascript')
    <script>

    </script>
@endsection