
@extends('admin.layouts.admin')



@section('content')

<div class="page-content-inner">


    <nav id="breadcrumbs" class="mb-3">
        <ul>
            <li><a href="#"> <i class="uil-home-alt"></i> </a></li>
            <li> Catagories </li>

        </ul>
    </nav>

    <div class="d-flex justify-content-between mb-3">
        <h3> Catagories (14) </h3>

        <div>
            <a href="#" class="btn btn-default">
                <i class="uil-plus"> </i> New Catagories
            </a>
        </div>
    </div>


    <nav class="responsive-tab style-1 ">
        <ul>
            <li class="uk-active"><a href="#">All</a></li>
            <li><a href="#">Operasi</a></li>
            <li><a href="#">Penjualan</a></li>
            <li><a href="#">Jasa Kurir</a></li>
            <li><a href="#">Akhlak</a></li>
            <li><a href="#">Jasa Keuangan</a></li>
            <li><a href="#">Umum</a></li>
        </ul>
    </nav>

    <ul class="uk-pagination my-5 uk-flex-center" uk-margin>
        <li class="uk-active"><span>1</span></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li class="uk-disabled"><span>...</span></li>
        <li><a href="#"><span uk-pagination-next></span></a></li>
    </ul>





</div>


@endsection
