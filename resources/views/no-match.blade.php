@extends('master')
@section('content')
<div class="ht__breadcrumb__area bg-image--4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__inner text-center">
                    <h2 class="breadcrumb-title">Search</h2>
                    <nav class="breadcrumb-content">
                        <a class="breadcrumb_item" href="{{ url('/') }}">Home</a>
                        <span class="brd-separator">/</span>
                        <span class="breadcrumb_item active">Books</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="wn__checkout__area section-padding--lg bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 style="color: red">No Match Found!!</h3>
            </div>
        </div>
    </div>
</section>
@endsection
