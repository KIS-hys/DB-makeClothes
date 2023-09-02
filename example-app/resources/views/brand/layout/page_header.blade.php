<!--header-->
<body>
    <!--head-->
    <nav class="navbar navbar-expand-xl navbar-dark bg-primary p-3">
        <a class="navbar-brand" href="#">Make Clothes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headNavbars" aria-controls="headNavbars" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="headNavbars">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="{{route('brand.index')}}">ホーム</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">ブランド一覧</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ユーザーデザイン</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('brand.select')}}">作る</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">私たち</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">問い合わせ</a>
                </li>
                <li class="nav-item justify-content-lg-end">
                    <a class="nav-link" href="#">ログイン</a>
                </li>
            </ul>
        </div>
    </nav>