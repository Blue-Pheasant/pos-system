@extends('layouts.main')

@section('content')
<link href="{{ asset('css/store.css') }}" rel="stylesheet">
<h1>Thăm Buy me store chúng mình</h1>
<div class="store__listing">
    <div class="container">
        <div class="row g-5">
            @foreach ($stores as $store)
                <div class="col-xl-4 col-md-6 col-sm-6 col-xs-6">
                    <div class="item-card">
                        <img src=" {{$store->image_url}} " alt=""
                            class="item-image" />
                        <div class="item-info">
                            <div class="item-store-info">
                                <p class="item-status"><b>  {{$store->status ? "Đang hoạt động" : "Tạm đóng cửa"}} </b></p>
                                <p class="item-open_time"><b>Giờ mở cửa:</b> {{$store->open_time}} </p>
                            </div>
                            <p class="item-phone"><b>Số điện thoại:</b> {{$store->phone}} </p>
                            <div class="item-footer">
                                <p><b>Địa chỉ:</b> {{$store->address}} </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
