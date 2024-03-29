@extends('layouts.main')

@section('content')
<link href="{{ asset('css/menu.css') }}" rel="stylesheet">
<div class="menu">
    <div class="menu__header">
        <img class="menu-image" src="{{ url('/images/menu.png') }}" alt="menu-image" />
        <h3>Thực đơn của chúng mình</h3>
    </div>

    <div class="menu__search">
        <form accept-charset="utf-8" class="search-form" method="POST" action="">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-10">
                        <div class="form-floating mb-3">
                            <input type="text" name="keyword" class="form-control" id="floatingInput"
                                placeholder="Tìm kiếm theo tên sản phẩm bạn quan tâm" aria-describedby="button-addon1">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <button class="btn btn-outline-secondary search-button" type="submit"
                            id="button-addon1">Tìm</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="menu__options">
        <a class="option" href="/menu">
            <div class="option-image-block">
                <img src="{{ url('/images/grid.png') }}" alt="grid" class="option-image" />
            </div>
            <h6>
                Tất cả sản phẩm
            </h6>
        </a>
        <a class="option" href="/menu/category/1">
            <div class="option-image-block">
                <img src="{{ url('/images/coffee-cup.png') }}" alt="coffee-cup" class="option-image" />
            </div>
            <h6>
                Cà phê
            </h6>
        </a>
        <a class="option" href="/menu/category/5">
            <div class="option-image-block">
                <img src="{{ url('/images/milk-tea.png') }}" alt="milk-tea" class="option-image" />
            </div>
            <h6>
                Trà trái cây - Trà sửa
            </h6>
        </a>
        <a class="option" href="/menu/category/2">
            <div class="option-image-block">
                <img src="{{ url('/images/milkshake.png') }}" alt="milkshake" class="option-image" />
            </div>
            <h6>
                Đá xay
            </h6>
        </a>
        <a class="option" href="/menu/category/18">
            <div class="option-image-block">
                <img src="{{ url('/images/coffee.png') }}" alt="coffee" class="option-image" />
            </div>
            <h6>
                Thưởng thức tại nhà
            </h6>
        </a>
        <a class="option" href="/menu/category/20">
            <div class="option-image-block">
                <img src="{{ url('/images/glass.png') }}" alt="glass" class="option-image" />
            </div>
            <h6>
                Tumbler collection
            </h6>
        </a>
    </div>

    <div class="menu__listing">
        <div class="container">
             @if (count($products) == 0)
                <div class="not-found">
                    <h3>Không tìm thấy sản phẩm !</h3>
                </div>
            @endif
            <div class="row g-5">
                @foreach ($products as $product)
                    <div class="col-xl-2 col-md-3 col-sm-4 col-xs-6">
                        <a href="/product/{{ $product->id }}">
                            <div class="item-card">
                                <img src=" {{ $product->image_url }}" alt=""
                                    class="item-image" />
                                <div class="item-info">
                                    <p class="item-name"> {{ $product->name }}</p>
                                    <div class="item-footer">
                                        <p> {{ number_format($product->price, 0, ',', '.') }}đ</p>
                                        <div class="item-button">
                                            <img class="item-button-image"
                                                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNiAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTYuODU3MTQgNi44NTcxNFYwSDkuMTQyODZWNi44NTcxNEgxNlY5LjE0Mjg2SDkuMTQyODZWMTZINi44NTcxNFY5LjE0Mjg2SDBWNi44NTcxNEg2Ljg1NzE0WiIgZmlsbD0id2hpdGUiLz4KPC9zdmc+Cg=="
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection