@extends('brand.layout.template')


@section('main')
<div class="container">
    <!-- Heading -->
    <h2 class="mb-4 text-center">Choose your brand</h2>

    <!--card-->
    <div class="row row-cols-3 g-4">
        @foreach ($brands as $brand)
        <div class="col">
            <div class="card h-100">
                <img src="{{asset($brand->icon)}}" class="card-img-top" alt="..." style="height: 300px; width: 100%;">
                <div class="card-body" >
                    <h5 class="card-title">{{$brand->name}}</h5>
                    <p class="card-text">ブランドの説明文。今後これをデータベースに入れる</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-primary" href="{{route('brand.create',['name'=>$brand->name])}}" role="button" style="color: black" >作る</a>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
