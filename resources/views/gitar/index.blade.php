@extends('layout.main')
@section('title', 'Web')

{{-- @yield('container') --}}

@section('container')
<!-- Begin Main Content Area -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1919x388.jpg">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="breadcrumb-heading">Katalog Gitar</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>Katalog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-topbar">
                        <ul>
                            <li class="page-count">
                                <span>12</span> Product Found of <span>30</span>
                            </li>
                            <li class="product-view-wrap">
                                <ul class="nav" role="tablist">
                                    <li class="grid-view" role="presentation">
                                        <a class="active" id="grid-view-tab" data-bs-toggle="tab" href="#grid-view"
                                            role="tab" aria-selected="true">
                                            <i class="fa fa-th"></i>
                                        </a>
                                    </li>
                                    <li class="list-view" role="presentation">
                                        <a id="list-view-tab" data-bs-toggle="tab" href="#list-view" role="tab"
                                            aria-selected="true">
                                            <i class="fa fa-th-list"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="short">
                                <select class="nice-select">
                                    <option value="1">Sort by Default</option>
                                    <option value="2">Sort by Popularity</option>
                                    <option value="3">Sort by Rated</option>
                                    <option value="4">Sort by Latest</option>
                                    <option value="5">Sort by High Price</option>
                                    <option value="6">Sort by Low Price</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="grid-view" role="tabpanel"
                            aria-labelledby="grid-view-tab">
                            <div class="product-grid-view row g-y-20">
                                @foreach ( $gitar as $g )
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <a href="{{url("/gitar/detail/".$g->id_gitar)}}">
                                                <img class="primary-img"
                                                    src="file_upload/img/{{$g->gambar}}"
                                                    alt="Product Images">
                                                <img class="secondary-img"
                                                    src="file_upload/img/{{$g->gambar}}"
                                                    alt="Product Images">
                                            </a>
                                            <div class="product-add-action">
                                                <ul>
                                                    {{-- <li>
                                                        <a href="wishlist.html" data-tippy="Add to wishlist"
                                                            data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-like"></i>
                                                        </a>
                                                    </li> --}}
                                                    <li class="quuickview-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickModal">
                                                        <a href="{{url("/gitar/detail/".$g->id_gitar)}}" data-tippy="Quickview" data-tippy-inertia="true"
                                                            data-tippy-animation="shift-away" data-tippy-delay="50"
                                                            data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-look"></i>
                                                        </a>
                                                    </li>
                                                    {{-- <li>
                                                        <a href="cart.html" data-tippy="Add to cart"
                                                            data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                    </li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="single-product-variable.html">{{$g->nama}}</a>
                                            <div class="price-box pb-1">
                                                {{-- <span class="new-price">{{rupiah($g->harga)}}</span> --}}
                                            </div>
                                            {{-- <div class="rating-box">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination-area">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">&raquo;</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    </div>
    </div>
</main>
@endsection

@section('container')
<div class="container">
    <div class="row">
        <div class="col-l0">
            <h1 class="mt-3">Ini Daftar Gitar!</h1>

            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Merk</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $gitar as $g )
                    <tr>
                        <td scope="row">{{$loop->iteration}}</td>
                        <td scope="row">{{$g->nama}}</td>
                        <td scope="row">{{$g->merk}}</td>
                        <td scope="row">{{$g->jenis}}</td>
                        <td scope="row">{{$g->harga}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection