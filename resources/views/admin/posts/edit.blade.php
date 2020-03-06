@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.post.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.posts.update", [$post->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <label class="required" for="title">{{ trans('cruds.post.fields.title') }}</label>
                            <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $post->title) }}" required>
                            @if($errors->has('title'))
                                <span class="help-block" role="alert">{{ $errors->first('title') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.post.fields.title_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                            <label class="required" for="body">{{ trans('cruds.post.fields.body') }}</label>
                            <textarea class="form-control" name="body" id="body" required>{{ old('body', $post->body) }}</textarea>
                            @if($errors->has('body'))
                                <span class="help-block" role="alert">{{ $errors->first('body') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.post.fields.body_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection