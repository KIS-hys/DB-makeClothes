@extends('brand.layout.template')

@section('main')
<div class="btn-group-vertical pt-5" role="group" aria-label="Vertical radio toggle button group">
    <input type="radio" class="btn-check" name="vbtn-radio" id="frontButton" autocomplete="off" checked>
    <label class="btn btn-outline-danger" for="frontButton">Front</label>
    <input type="radio" class="btn-check" name="vbtn-radio" id="backButton" autocomplete="off">
    <label class="btn btn-outline-danger" for="backButton">Back</label>
</div>

<div class="container">
    <div class="row row-cols-2">
        <div class="col">
            <img id="photo" src="{{ asset('storage/front.png') }}" alt="Photo" class="mt-3" style="height: 600px;">
        </div>

        <div class="border">
            <h1>アイテム</h1>
            <div class="container">
                <div class="row row-cols-3">
                    <div class="text-center">
                        <img src="{{ asset('storage/icon-1.jpeg') }}" class="rounded-circle img-thumbnail" style="height: 4cm">
                        <p>a</p>
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('storage/icon-2.jpeg') }}" class="rounded-circle img-thumbnail" style="height: 4cm">
                        <p>b</p>
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('storage/icon-1.jpeg') }}" class="rounded-circle img-thumbnail" style="height: 4cm">
                        <p>c</p>
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('storage/icon-2.jpeg') }}" class="rounded-circle img-thumbnail" style="height: 4cm">
                        <p>d</p>
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('storage/icon-1.jpeg') }}" class="rounded-circle img-thumbnail" style="height: 4cm">
                        <p>e</p>
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('storage/icon-2.jpeg') }}" class="rounded-circle img-thumbnail" style="height: 4cm">
                        <p>f</p>
                    </div>
                </div>
                <hr>
                <div class="dropdown center">
                        <a class="btn btn-secondary btn-lg dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            選択
                        </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" data-image-src="{{ asset('storage/icon-1.jpeg') }}">a</a></li>
                        <li><a class="dropdown-item" href="#" data-image-src="{{ asset('storage/icon-2.jpeg') }}">b</a></li>
                        <li><a class="dropdown-item" href="#" data-image-src="{{ asset('storage/icon-1.jpeg') }}">c</a></li>
                        <li><a class="dropdown-item" href="#" data-image-src="{{ asset('storage/icon-2.jpeg') }}">d</a></li>
                        <li><a class="dropdown-item" href="#" data-image-src="{{ asset('storage/icon-1.jpeg') }}">e</a></li>
                        <li><a class="dropdown-item" href="#" data-image-src="{{ asset('storage/icon-2.jpeg') }}">f</a></li>
                    </ul>
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