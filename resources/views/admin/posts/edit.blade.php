@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Create post
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('posts.index') }}">Posts</a>
                </span>
            </div>
            <div class="card-body">
                {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method'=>'PATCH']) !!}
                    {{-- <div class="form-group">
                        <strong>Title:</strong>
                        {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Body:</strong>
                        {!! Form::textarea('body', null, array('placeholder' => 'Body','class' => 'form-control')) !!}
                    </div> --}}

                    @foreach(config('translatable.locales') as $locale)

                    <div class="mt-4">
                        <label for="title_{{ $locale }}">Title ({{ strtoupper($locale) }})</label>

                        <input type="text" name="{{ $locale }}[title]" id="title_{{ $locale }}"
                               value="{{ $post->translate($locale)->title }}"
                               class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autofocus />
                    </div>

                    <div class="mt-4">
                        <label for="content_{{ $locale }}">Content ({{ strtoupper($locale) }})</label>

                        <textarea name="{{ $locale }}[content]" id="content_{{ $locale }}" rows="5"
                                  class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{$post->translate($locale)->content}}</textarea>
                    </div>
                    @endforeach

                    <button type="submit" class="btn btn-primary">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
