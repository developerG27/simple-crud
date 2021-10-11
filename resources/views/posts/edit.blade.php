@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{route('posts.update', $post)}}" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Title *</label>
                                <input
                                        type="text"
                                        name="title"
                                        class="form-control"
                                        required
                                        value="{{old('title', $post->title)}}">
                            </div>

                            <div class="form-group">
                                <label>Image *</label>
                                <input
                                        type="file"
                                        name="title">
                            </div>

                            <div class="form-group">
                                <label>Content *</label>
                                <textarea name="body" rows="6" class="form-control" required>{{ old('body', $body->body) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Content *</label>
                                <textarea name="iframe" rows="6" class="form-control" required>{{ old('iframe', $body->iframe) }}</textarea>
                            </div>

                            <div class="form-group">
                                @csrf
                                @method('PUT')
                                <input type="submit" value="Update" class="btn btn-sm btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
