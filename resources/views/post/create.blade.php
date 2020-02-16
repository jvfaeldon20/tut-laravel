@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <form action="/post" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <div class="col-3">
                <label for="caption" class="col-form-label text-md-right">{{ __('Caption') }}</label>
                </div>
                
                <div class="col-9">
                    <input id="caption" 
                        type="caption" 
                        class="form-control @error('caption') is-invalid @enderror" 
                        name="caption" value="{{ old('caption') }}" autocomplete="caption">

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-3">
                    <label for="caption" class="col-form-label text-md-right">{{ __('Image') }}</label>
                </div>
                
                <div class="col-9">
                    <input id="image" 
                        type="file" 
                        class="file-control @error('image') is-invalid @enderror" 
                        name="image" value="{{ old('image') }}" autocomplete="image">

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <input type="submit" value="Create Post" class="btn btn-primary">
            </div>

        </form>
    </div>
</div>
@endsection
