@extends('front.mainpage')
@section('content')

    <div class="container mt-2">

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="card card-block bg_bg ">
                    <a href="{{ route('renkler') }}">
                        <img class="image-cc" src="data:image/jpeg;base64,{{ base64_encode($table[0]->category_image) }}"
                            alt="{{ $table[0]->category_name_slug }}"> </a>
                    <h5 class="card-title mt-3 mb-3 category_text">{{ $table[0]->category_name }}</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 ">
                <div class="card card-block bg_bg ">
                    <a href="{{ route('boyutlar') }}">
                        <img class="image-cc" src="data:image/jpeg;base64,{{ base64_encode($table[1]->category_image) }}"
                            alt="{{ $table[1]->category_name_slug }}"> </a>
                    <h5 class="card-title mt-3 mb-3 category_text">{{ $table[1]->category_name }}</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card card-block bg_bg ">
                    <a href="{{ route('sekiller') }}">
                        <img class="image-cc" src="data:image/jpeg;base64,{{ base64_encode($table[2]->category_image) }}"
                            alt="{{ $table[2]->category_name_slug }}">
                    </a>

                    <h5 class="card-title mt-3 mb-3 category_text">{{ $table[2]->category_name }}</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card card-block bg_bg ">
                    <a href="{{ route('miktarlar') }}">
                        <img class="image-cc" src="data:image/jpeg;base64,{{ base64_encode($table[3]->category_image) }}"
                            alt="{{ $table[3]->category_name_slug }}">
                    </a>
                    <h5 class="card-title mt-3 mb-3 category_text">{{ $table[3]->category_name }}</h5>
                </div>
            </div>
        </div>

    </div>
    <div class="container mt-2">

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="card card-block bg_bg ">
                    <a href="{{ route('konumlar') }}">
                        <img class="image-cc" src="data:image/jpeg;base64,{{ base64_encode($table[4]->category_image) }}"
                            alt="{{ $table[4]->category_name_slug }}"> </a>
                    <h5 class="card-title mt-3 mb-3 category_text">{{ $table[4]->category_name }}</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card card-block bg_bg ">
                    <a href="{{ route('rakamlar') }}">
                        <img class="image-cc" src="data:image/jpeg;base64,{{ base64_encode($table[5]->category_image) }}"
                            alt="{{ $table[5]->category_name_slug }}"> </a>
                    <h5 class="card-title mt-3 mb-3 category_text">{{ $table[5]->category_name }}</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card card-block bg_bg ">
                    <a href="{{ route('duyular') }}">
                        <img class="image-cc" src="data:image/jpeg;base64,{{ base64_encode($table[6]->category_image) }}"
                            alt="{{ $table[6]->category_name_slug }}"> </a>
                    <h5 class="card-title mt-3 mb-3 category_text">{{ $table[6]->category_name }}</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card card-block bg_bg ">
                    <a href="{{ route('duygular') }}">
                        <img class="image-cc" src="data:image/jpeg;base64,{{ base64_encode($table[7]->category_image) }}"
                            alt="{{ $table[7]->category_name_slug }}"> </a>
                    <h5 class="card-title mt-3 mb-3 category_text">{{ $table[7]->category_name }}</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-2">

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="card card-block bg_bg ">
                    <a href="{{ route('karsilastirmalar') }}">
                        <img class="image-cc" src="data:image/jpeg;base64,{{ base64_encode($table[8]->category_image) }}"
                            alt="{{ $table[8]->category_name_slug }}"> </a>
                    <h5 class="card-title mt-3 mb-3 category_text">{{ $table[8]->category_name }}</h5>
                </div>
            </div>

        </div>

    </div>
@endsection
