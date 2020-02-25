@extends('admin.layout.admin')
@section('title', 'Quản lý người dùng')
@section('content')
    <div class="create-form-user">
        <div class="title-form">
            <h4>{{ __('Create Role') }}</h4>
        </div>
        <form method="POST" action="{{ route('admin\role\store') }}">
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="name" class="col-lg-2 control-label">{{ __('Name') }}</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                </div>
                @error('name')
                    <div class="col-lg-6">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $error }}</strong>
                        </span>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="permissions" class="col-lg-2 control-label">{{ __('Permissions') }}</label>
                <div class="col-lg-6">
                    <select multiple="multiple" name="permissions[]" id="permissions">
                        @foreach ($permissions as $permission)
                            <option value={{$permission->id}}>{{$permission->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-warning" >
                        {{ __('Update') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection