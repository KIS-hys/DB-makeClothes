@extends('brand.layout.template')

@section('main')
    <!--about us-->
<div class="p-5 mb-4 bg-body-tertiary rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">About Us</h1>
        <p class="col-md-8 fs-4">
            This is the website about creating own clothes.
        </p>
        <button class="btn btn-primary btn-lg" type="button">詳しく</button>
    </div>
</div>


<div class="container text-center">
    <div class="row g-2">
        <div class="card col-6">
            <img src="card-img" src="/example-app/photo-1.png" alt="">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <h1>ブランド</h1>
                <p>
                    ブランドについてはこちら。
                </p>
                <button class="btn btn-outline-light" type="button">詳しく</button>
            </div>
        </div>
        <div class="col-6">
            <div class="h-100 p-5 text-bg-primary rounded-3">
                <h2>ユーザーデザイン</h2>
                <p>
                    ユーザーデザインについてはこちら。
                </p>
                <button class="btn btn-outline-light" type="button">詳しく</button>
            </div>
        </div>
        <div class="col-6">
            <div class="h-100 p-5 text-bg-success rounded-3">
                <h2>作る</h2>
                <p>
                    自分の服を作りたい方はこちら。
                </p>
                <a class="btn btn-outline-light" href="{{route('brand.select')}}" role="button">
                    詳しく
                </a>
            </div>
        </div>
        <div class="col-6">
            <div class="h-100 p-5 text-bg-secondary rounded-3">
                <h2>私たち</h2>
                <p>
                    私たちは。。。。
                    <br>
                    詳しくはボタンを。
                </p>
                <button class="btn btn-outline-light" type="button">詳しく</button>
            </div>
        </div>
    </div>
</div>
@endsection


<!--
<div class="container">
    <div class="row g-2">
        <div class="col-6 mb-auto">
            <div class="card shadow border-0 h-50">
                <img class="img-fluid card-img-top" src="/example-app/public/photo-1.png" alt="...">
                <div class="card-body"><a class="text-uppercase text-muted text-sm letter-spacing-2" href="#">Travel </a>
                    <h5 class="my-2"><a class="text-dark" href="post.html">Autumn fashion tips and tricks          </a></h5>
                    <p class="text-gray-500 text-sm my-3"><i class="far fa-clock me-2"></i>January 16, 2016</p>
                    <p class="my-2 text-muted text-sm">Pellentesque habitant morbi tristique senectus. Vestibulum tortor quam, feugiat vitae, ultricies ege...</p><a class="btn btn-link ps-0" href="post.html">Read more<i class="fa fa-long-arrow-alt-right ms-2"></i></a>
                </div>
            </div>
          </div>

          <div class="col-6 mb-auto">
            <div class="card shadow border-0 h-50"><a href="post.html"><img class="img-fluid card-img-top" src="https://d19m59y37dris4.cloudfront.net/directory/2-0-2/img/photo/photo-1522771739844-6a9f6d5f14af.jpg" alt="..."></a>
              <div class="card-body"><a class="text-uppercase text-muted text-sm letter-spacing-2" href="#">Living </a>
                <h5 class="my-2"><a class="text-dark" href="post.html">Newest photo apps          </a></h5>
                <p class="text-gray-500 text-sm my-3"><i class="far fa-clock me-2"></i>January 16, 2016</p>
                <p class="my-2 text-muted text-sm">ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibu...</p><a class="btn btn-link ps-0" href="post.html">Read more<i class="fa fa-long-arrow-alt-right ms-2"></i></a>
              </div>
            </div>
          </div>
    </div>

</div>
-->