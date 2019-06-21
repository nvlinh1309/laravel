@extends('layouts.layoutsite')
@section('title','Trang chủ')
@section('content')
@include('frontend.sidebar-slideshow')
<section class=" clearfix maincontent ">
    <div class="container my-3">
        <div class="row">
            <div class="col-md-3">
                @include('frontend.sidebar-listcategory')
            </div>
            <div class="col-md-9">
                <h3 class="text-center text-danger">SẢN PHẨM MỚI</h3>
                <hr>
                <div class="row">
                        @foreach ($list as $row)
                            <div class="col-md-4">
                                <div class="card" style="width: 100%;">
                                    <img src="{{ asset('images/products/'.$row->imglink) }}" class="card-img-top" alt="Card image cap">
                                    <div class="card-body">
                                    <h5 class="card-title"><a href="{{ url($row->slug) }}">{{ $row->name }}</a></h5>
                                    <h6 class="text-danger text-center">Giá: {{ number_format($row->price) }} VNĐ</h6>
                                    <a href="#" class="btn btn-primary form-control">Thêm vào giỏ hàng</a>
                                </div>
                                </div>
                            </div>
                        @endforeach
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection