@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <form class="needs-validation" action="/p" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row ">
                <div class="col-md-7 col-lg-8">
                    <h4 class="m-10">Upload New Book</h4>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" autocomplete="title">
                            @if($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$errors->first('title')}}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="" autocomplete="description">
                            @if($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$errors->first('description')}}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label for="image" class="form-label">Cover Image</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                            @if($errors->has('image'))
                            <strong>{{$errors->first('image')}}</strong>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label for="pdf" class="form-label">PDF</label>
                            <input type="file" class="form-control-file" id="pdf" name="pdf">
                            @if($errors->has('pdf'))
                            <strong>{{$errors->first('pdf')}}</strong>
                            @endif
                        </div>
                        <hr class="my-4">
                        <div class="col-md-4">
                            <button class=" btn btn-primary btn-lg " type="submit">Upload</button>
                        </div>
        </form>
    </div>
    </div>
    </div>
</main>
@endsection