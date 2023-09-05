@extends('brand.layout.template')

@section('main')


@if (session('status'))
<div class="flash_message">
    {{ session('status') }}
</div>
@endif



<div class="btn-group-vertical pt-5" role="group" aria-label="Vertical radio toggle button group">
    <input type="radio" class="btn-check" name="vbtn-radio" id="frontButton" autocomplete="off" checked>
    <label class="btn btn-outline-danger" for="frontButton">Front</label>
    <input type="radio" class="btn-check" name="vbtn-radio" id="backButton" autocomplete="off">
    <label class="btn btn-outline-danger" for="backButton">Back</label>
</div>

<div class="container">
    <div class="row row-cols-2">
        <div class="col col-lg-6 col-sm-5 col-4 mx-auto">
            <div class="container position-relative">
                <img id="photo" src="{{ asset('storage/front.png') }}" alt="ftontPhoto" class="mt-3" style="height: 600px;">
                <div class="overlay" id="overlayFront"></div>
                <div class="overlay" id="overlayBack"></div>
            </div>
        </div>

        <div class="col col-lg-6 col-sm-5 col-4">
            <div class="border">
                <div class="overflow-scroll">
                    <h1>アイテム</h1>
                    <div class="container">
                        <div class="row row-cols-3" style="max-height: 400px; overflow-y: auto;">
                            <div class="text-center ">
                                <img src="{{ asset('storage/icon-1.jpeg') }}" class="rounded-circle img-thumbnail">
                                <p>a</p>
                            </div>
                            <div class="text-center">
                                <img src="{{ asset('storage/icon-2.jpeg') }}" class="rounded-circle img-thumbnail">
                                <p>b</p>
                            </div>
                            <div class="text-center">
                                <img src="{{ asset('storage/icon-3.jpeg') }}" class="rounded-circle img-thumbnail">
                                <p>c</p>
                            </div>
                            <div class="text-center">
                                <img src="{{ asset('storage/icon-1.jpeg') }}" class="rounded-circle img-thumbnail">
                                <p>d</p>
                            </div>
                            <div class="text-center">
                                <img src="{{ asset('storage/icon-2.jpeg') }}" class="rounded-circle img-thumbnail">
                                <p>e</p>
                            </div>
                            <div class="text-center">
                                <img src="{{ asset('storage/icon-3.jpeg') }}" class="rounded-circle img-thumbnail">
                                <p>f</p>
                            </div>
                            <div class="text-center">
                                <img src="{{ asset('storage/icon-1.jpeg') }}" class="rounded-circle img-thumbnail">
                                <p>a</p>
                            </div>
                            <div class="text-center">
                                <img src="{{ asset('storage/icon-2.jpeg') }}" class="rounded-circle img-thumbnail">
                                <p>b</p>
                            </div>
                            <div class="text-center">
                                <img src="{{ asset('storage/icon-3.jpeg') }}" class="rounded-circle img-thumbnail">
                                <p>c</p>
                            </div>
                        </div>
                        <hr>

                        <div class="dropdown center" id="dropdown">
                                <a class="btn btn-secondary btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    View
                                </a>
                            <ul class="dropdown-menu" id="dropdown">
                                <li><a class="dropdown-item" href="#" data-image-src="{{ asset('storage/icon-1.jpeg') }}">a</a></li>
                                <li><a class="dropdown-item" href="#" data-image-src="{{ asset('storage/icon-2.jpeg') }}">b</a></li>
                                <li><a class="dropdown-item" href="#" data-image-src="{{ asset('storage/icon-3.jpeg') }}">c</a></li>
                                <li><a class="dropdown-item" href="#" data-image-src="{{ asset('storage/icon-1.jpeg') }}">d</a></li>
                                <li><a class="dropdown-item" href="#" data-image-src="{{ asset('storage/icon-2.jpeg') }}">e</a></li>
                                <li><a class="dropdown-item" href="#" data-image-src="{{ asset('storage/icon-3.jpeg') }}">f</a></li>
                                <li><a class="dropdown-item" href="#" data-image-src="{{ asset('storage/icon-1.jpeg') }}">a</a></li>
                                <li><a class="dropdown-item" href="#" data-image-src="{{ asset('storage/icon-2.jpeg') }}">b</a></li>
                                <li><a class="dropdown-item" href="#" data-image-src="{{ asset('storage/icon-3.jpeg') }}">c</a></li>
                            </ul>
                        </div>

                        <form action="{{ route('brand.store') }}" method="post">
                            <h2>デザイン選択</h2>
                            @csrf
                            <div class="row row-cols-4 m-auto">
                                <div class="col col-lg-3 col-sm-6">
                                    <select class="form-select m-auto" name="front" aria-label="デザインを選択">
                                        <option value="{{ asset('storage/icon-1.jpeg') }}">デザインA</option>
                                        <option value="{{ asset('storage/icon-2.jpeg') }}">デザインB</option>
                                        <option value="{{ asset('storage/icon-3.jpeg') }}">デザインC</option>
                                    </select>
                                </div>
                                <div class="col col-lg-3 col-sm-6">
                                    <select class="form-select m-auto" name="back" aria-label="デザインを選択">
                                        <option value="{{ asset('storage/icon-1.jpeg') }}">デザインA</option>
                                        <option value="{{ asset('storage/icon-2.jpeg') }}">デザインB</option>
                                        <option value="{{ asset('storage/icon-3.jpeg') }}">デザインC</option>
                                    </select>
                                </div>
                                <div class="col col-lg-3 col-sm-6">
                                    <select class="form-select m-auto" name="size" aria-label="サイズを選択">
                                        <option value="S">Sサイズ</option>
                                        <option value="M">Mサイズ</option>
                                        <option value="L">Lサイズ</option>
                                    </select>
                                </div>
                                <div class="col col-lg-3 col-sm-6">
                                    <select class="form-select m-auto" name="color" aria-label="色を選択">
                                        <option value="white">白</option>
                                    </select>
                                </div>
                            </div>

                            <div class="center">
                                <button type="submit" class="btn btn-danger m-auto">作る</button>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    const frontImageSrc = "{{ asset('storage/front.png') }}";
    const backImageSrc = "{{ asset('storage/back.png') }}";
</script>
@endsection