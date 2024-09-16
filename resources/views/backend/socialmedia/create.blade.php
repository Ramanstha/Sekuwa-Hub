@extends('backend.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-8">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Create Socialmedia</h6>
                @if(Session::has('message'))
                <span class="text-primary">{{Session::get('message')}}</span>
                @endif
                <form action="{{route('store.socialmedia')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="mb-1">Facebook</label>
                        <input class="form-control" type="text" name="facebook" value="{{old('facebook')}}">
                        @error('facebook')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="mb-1">Instagram</label>
                        <input class="form-control" type="text" name="instagram" value="{{old('instagram')}}">
                        @error('instagram')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="mb-1">Tiktok </label>
                        <input type="text" class="form-control" name="tiktok" value="{{old('tiktok')}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Media</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection