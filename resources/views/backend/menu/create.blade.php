@extends('backend.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-8">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Create Menu</h6>
                @if(Session::has('message'))
                <span class="text-primary">{{Session::get('message')}}</span>
                @endif
                <form action="{{route('store.menu')}}" method="POST">
                    @csrf
                    
                    <div class="row d-flex">
                        <div class="col-lg-4 col-sm-12 mb-3">
                            <label class="form-label">Category<span class="text-danger">*</span></label>
                            <select name="category_id" class="form-control" id="category">
                                <option value="">------Select Category------</option>
                                @foreach ($category as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-lg-4 col-sm-12 mb-3 mx-5">
                            <label class="form-label">SubCategory<span class="text-danger">*</span></label>
                            <select name="subcategory_id" class="form-control" id="subcategory">
                                <option value="">---Select SubCategory---</option>
                                @foreach ($subcategory as $subcategory)
                                <option value="{{$subcategory->id}}">{{$subcategory->title}}</option>
                                @endforeach
                            </select>
                            @error('subcategory_id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="mb-1">Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="name" value="{{old('name')}}">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="mb-1">Description <span class="text-danger">*</span></label>
                        <textarea class="form-control" type="text" style="height: 150px;" name="description"
                            value="{{old('description')}}"></textarea>
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="mb-1">Price <span class="text-danger">*</span></label>
                        <input class="form-control" type="number" name="price" value="{{old('price')}}">
                        @error('price')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Add Menu</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection