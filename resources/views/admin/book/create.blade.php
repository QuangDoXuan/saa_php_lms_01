@extends('admin.layout.admin')
@section('title', 'Quản lý sách')
@section('content')
    <!-- <div class="row"> -->
        <!-- <div class="col-md-8"> -->
            <div class="create-form-user">
                <div class="title-form">
                    <h4>{{ __('Create Book') }}</h4>
                </div>
                <form method="POST" action="{{ route('admin\book\store') }}" enctype="multipart/form-data" >
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!-- <div class="form-group">
                        <label for="name" class="col-lg-2 control-label">{{ __('Name') }}</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="name"  name="name">
                        </div>
                    </div> -->

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">{{ __('Title') }}</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-lg-2 control-label">{{ __('Description') }}</label>
                        <div class="col-lg-6">
                            <textarea class="form-control" id="description" name="description"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="publisher" class="col-lg-2 control-label">{{ __('Publisher') }}</label>
                        <div class="col-lg-6">
                            <select name="publisher" id="publisher">
                                @foreach($publishers as $publisher)
                                    <option value={{$publisher->id}}>{{$publisher->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-lg-2 control-label">{{ __('Category') }}</label>
                        <div class="col-lg-6">
                            <select multiple="multiple" name="categories[]" id="categories-select">
                                @foreach($categories as $category)
                                    <option value={{$category->id}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="permissions" class="col-lg-2 control-label">{{ __('Authors') }}</label>
                        <div class="col-lg-6">
                            <select multiple="multiple" name="authors[]" id="authors-select">
                                @foreach($authors as $author)
                                    <option value={{$author->id}}>{{$author->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="file" class="col-lg-2 control-label">{{ __('Thumbnail') }}</label>
                        <div class="col-lg-6">
                            <input type="file" name="file" id="thumbnail-ip"/>
                        </div>
                    </div>
                    <div class="image-preview">
                        <img src="#" id="blah"/>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-danger" >
                                {{ __('Add') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        <!-- </div> -->
        <!-- <div class="col-md-4">
            <div class="image-preview">
                <img src="#" id="blah"/>
            </div>
        </div> -->
    <!-- </div> -->
    
@endsection

@section('javascript')
    <script>
        $(document).ready(function(){
            console.log(1);
            function readURL(input) {
                if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
                }
            }
      
        $("#thumbnail-ip").change(function() {
            readURL(this);
        });
    })
    </script>
@endsection