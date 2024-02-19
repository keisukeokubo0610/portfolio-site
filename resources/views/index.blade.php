<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keisuke Ohkubo -ポートフォリオサイト-</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sawarabi+Gothic&display=swap"
        rel="stylesheet">
    <!-- reset.css ress -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    {{-- 背景 --}}
    <link href="https://unpkg.com/pattern.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.21/jquery.scrollify.js"
        integrity="sha512-2rSKyHme2mrplfIGsA8bFYAYddQ66qR+Dh71OrNZsZOtMdCYa8V1lJvl2mr/qzwcMIs20ddYz4JLiBmwS2K7Iw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>


    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/56c73b0e02.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>

    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    {{-- <div class="opening-container"></div> --}}
    <canvas id="canvas"></canvas>

    <section class="section-0 js-section" data-section-name="Top">
        <div class="scene">
            <div class="scene-container">
                <div class="scroll-group" id="scrollButton">
                    <button class="star"><i class="fa-solid fa-paw"></i></button>
                    <p>Touch Me!</p>
                </div>
                <h1>Keisuke Ohkubo</h1>
                <div class="magic"></div>
            </div>
        </div>
    </section>
    <div id="targetElement" class="layout">
        <main class="main">
            <section class="section section-profile js-section" data-section-name="Profile">
                <div class="section-container">
                    <div class="top-container">
                        <div class="top-container__name">
                            <h2>オオクボケイスケ</h2>
                            <span>WEB ENGINEER</span>
                        </div>
                        <div class="top-container__button">
                            <a href="#" class="btn-circle-stitch">お仕事のご依頼</a>
                        </div>

                        <div class="top-container__skills">
                            <div class="top-container__skills--main">
                                <h4><i class="fa-solid fa-circle"></i>メインスキル</h4>
                                <div class="skill-container main-skill">
                                    <ul>
                                        <li><button class="php"><i
                                                    class="fa-brands fa-php"></i><span>PHP</span></button>
                                        </li>
                                        <li><button class="laravel"><i
                                                    class="fa-brands fa-laravel"></i><span>Laravel</span></button>
                                        </li>
                                        <li><button class="html"><i
                                                    class="fa-brands fa-html5"></i><span>HTML</span></button>
                                        </li>
                                        <li><button class="css"><i
                                                    class="fa-brands fa-css3-alt"></i><span>CSS</span></button></li>
                                        </li>
                                        <li><button class="js"><i
                                                    class="fa-brands fa-js"></i><span>JavaScript</span></button>
                                        </li>
                                        <li><button class="jquery"><i
                                                    class="fa-brands fa-square-js"></i><span>jQuery</span></button>
                                        </li>
                                        <li><button class="wp"><i
                                                    class="fa-brands fa-wordpress"></i><span>WordPress</span></button>
                                        <li><button class="mysql"><i
                                                    class="fa-solid fa-database"></i><span>mySQL</span></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="top-container__skills--sub">
                                <h4><i class="fa-solid fa-circle-half-stroke"></i>サブスキル</h4>
                                <div class="skill-container sub-skill">
                                    <ul>
                                        <li><button class="react"><i
                                                    class="fa-brands fa-react"></i><span>React</span></button>
                                        </li>
                                        <li><button class="python"><i
                                                    class="fa-brands fa-python"></i><span>Python</span></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="top-container__skills--other">
                                <h4><i class="fa-regular fa-circle"></i>その他スキル</h4>
                                <div class="skill-container other-skill">
                                    <ul>
                                        <li><button class="docker"><i
                                                    class="fa-brands fa-docker"></i><span>Docker</span></button>
                                        </li>
                                        <li><button class="linux"><i
                                                    class="fa-brands fa-linux"></i><span>Linux</span></button>
                                        </li>
                                        <li><button class="git"><i
                                                    class="fa-brands fa-git"></i><span>Git</span></button>
                                        </li>
                                        <li><button class="github"><i
                                                    class="fa-brands fa-github"></i><span>Github</span></button>
                                        </li>
                                        <li><button class="aws"><i
                                                    class="fa-brands fa-aws"></i><span>AWS</span></button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section section-2 js-section" data-section-name="Skill">
                <div class="s1ection-container skill">

                    <div class="title-container">
                        <h3><i class="fa-solid fa-code"></i>Skills <span>- 保有スキル -</span></h3>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>言語・ツール等</th>
                                <th>経験年数</th>
                                <th>保有レベル</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- メインスキル --}}
                            <tr>
                                <th>PHP</th>
                                <td>2年</td>
                                <td>実務レベルで自由に駆使し、実装できるレベル</td>
                            </tr>
                            <tr>
                                <th>Laravel</th>
                                <td>2年</td>
                                <td>実務レベルで自由に駆使し、実装できるレベル</td>
                            </tr>
                            <tr>
                                <th>HTML/CSS</th>
                                <td>2年</td>
                                <td>デザインに沿って作成できる。レスポンシブも対応可能</td>
                            </tr>
                            <tr>
                                <th>JavaScript</th>
                                <td>2年</td>
                                <td>実務レベルで自由に駆使し、実装できるレベル</td>
                            </tr>

                            <tr>
                                <th>jQuery</th>
                                <td>2年</td>
                                <td>実務レベルで自由に駆使し、実装できるレベル</td>
                            </tr>
                            <tr>
                                <th>WordPress</th>
                                <td>2ヶ月程度</td>
                                <td>テーマやプラグインを使ってEC機能やメール機能を作成できるレベル。</td>
                            </tr>
                            <tr>
                                <th>mySQL</th>
                                <td>2年</td>
                                <td>実務レベルで自由に駆使し、小規模であれば設計から実装までできるレベル</td>
                            </tr>

                            {{-- サブスキル --}}
                            <tr>
                                <th>React</th>
                                <td>2ヶ月程度</td>
                                <td>実務で数ヶ月以上使用しているがもう少し習熟が必要。<br>
                                    Reactを使ってリクルートサイトを作成した経験あり</td>
                            </tr>
                            <tr>
                                <th>Python</th>
                                <td>3ヶ月程度</td>
                                <td>実務で数ヶ月以上使用しているがもう少し習熟が必要。<br>
                                    LaravelにてAPIを作成し、Flaskを使いバックエンド処理の実装経験あり</td>
                            </tr>
                            {{-- その他スキル --}}
                            <tr>
                                <th>Docker</th>
                                <td>1年</td>
                                <td>実務で1年程度使用している。小規模の開発にて使用</td>
                            </tr>
                            <tr>
                                <th>Linux</th>
                                <td>1年</td>
                                <td>Linuxコマンドを使ってCUIでの作業も可能</td>
                            </tr>
                            <tr>
                                <th>Git</th>
                                <td>1年</td>
                                <td>実務で1年程度使用している。小規模の開発にて使用経験</td>
                            </tr>
                            <tr>
                                <th>Github</th>
                                <td>1年</td>
                                <td>実務で1年程度使用している。小規模の開発にて使用経験</td>
                            </tr>
                            <tr>
                                <th>AWS</th>
                                <td>2ヶ月程度</td>
                                <td>実務で数ヶ月以上使用しているがもう少し習熟が必要。<br>
                                    EC2,Route 53を使用し、Laravelアプリのデプロイに使用</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section class="section section-3 js-section" data-section-name="Work">
                <div class="section-container work">

                    <div class="title-container">
                        <h3><i class="fa-solid fa-list-ul"></i></i>Work<span> - 制作物一覧 -</span></h2>
                    </div>
                    <div class="work-container">
                        <div class="carousel">
                            <input type="radio" name="slides" checked="checked" id="slide-1">
                            <input type="radio" name="slides" id="slide-2">
                            <input type="radio" name="slides" id="slide-3">
                            <input type="radio" name="slides" id="slide-4">
                            <input type="radio" name="slides" id="slide-5">
                            {{-- <input type="radio" name="slides" id="slide-6"> --}}
                            <ul class="carousel__slides">
                                <li class="carousel__slide">
                                    <figure>
                                        <div>
                                            <img src="{{ asset('storage/images/株式会社FEDELTA.webp') }}"
                                                alt="株式会社FEDELTA様HP">
                                        </div>
                                        <figcaption>
                                            <h4><i class="fa-solid fa-desktop"></i>株式会社FEDELTA様 HP</h4>
                                            <p>フロントエンド<br>
                                                HTML,CSS,SCSS,JavaScript,jQuery</p>
                                            <p>バックエンド<br>
                                                PHP(Laravel)</p>
                                            <p>機能<br>
                                                <i class="fa-solid fa-stop"></i>メール送信機能<br>
                                                <i class="fa-solid fa-stop"></i>トピックス管理（CMS）機能
                                            </p>
                                            <a href="https://fedeltaonline.com/" class="credit">URL<br>
                                                <span>https://fedeltaonline.com/</span></a>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="carousel__slide">
                                    <figure>
                                        <div>
                                            <img src="{{ asset('storage/images/FEDELTA-リクルート-.webp') }}"
                                                alt="株式会社FEDELTA様リクルートサイト">
                                        </div>
                                        <figcaption>
                                            <h4><i class="fa-solid fa-desktop"></i>株式会社FEDELTA様 リクルートサイト</h4>
                                            <p>フロントエンド<br>HTML,CSS,SCSS,JavaScript,React</p>
                                            <p>バックエンド<br>
                                                -</p>
                                            <p>機能<br>
                                                <i class="fa-solid fa-stop"></i>メール送信機能
                                            </p>
                                            <a href="https://recruit.fedeltaonline.com/" class="credit">URL
                                                <br> <span>https://recruit.fedeltaonline.com/</span></a>
                                        </figcaption>
                                    </figure>
                                </li>
                                {{-- <li class="carousel__slide">
                                    <figure>
                                        <div>
                                            <img src="{{ asset('storage/images/株式会社FEDELTA-サービスサイト-.webp') }}"
                                                alt="株式会社FEDELTA様サービスサイト">
                                        </div>
                                        <figcaption>
                                            <h4>株式会社FEDELTA様 サービスサイト</h4>
                                            <p>フロントエンド<br>
                                                HTML,CSS,SCSS,JavaScript,jQuery</p>
                                            <p>バックエンド<br>
                                                PHP</p>
                                            <p>機能<br>
                                                ・メール送信機能
                                            </p>
                                            <a href="https://service.fedeltaonline.com/"
                                                class="credit">URL:https://service.fedeltaonline.com/</a>
                                        </figcaption>
                                    </figure>
                                </li> --}}
                                <li class="carousel__slide">
                                    <figure>
                                        <div>
                                            <img src="{{ asset('storage/images/WebCreate.webp') }}"
                                                alt="WebCreate（プログラミング研修サイト）">
                                        </div>
                                        <figcaption>
                                            <h4><i class="fa-solid fa-desktop"></i>プログラミング研修サイト</h4>
                                            <p>フロントエンド<br>
                                                HTML,CSS,SCSS,JavaScript,jQuery</p>
                                            <p>バックエンド
                                                <br>PHP(Laravel),Slack API,MySQL
                                            </p>

                                            <p>機能<br>
                                                <i class="fa-solid fa-stop"></i>認証機能（一般、管理者）<br>
                                                <i class="fa-solid fa-stop"></i>エラー監視ログ<br>
                                                <i class="fa-solid fa-stop"></i>問い合わせ機能<br>
                                                <i class="fa-solid fa-stop"></i>ユーザー追加時のSlack自動化<br>
                                                (チャンネル作成,講師招待,テンプレートメッセージ送信)<br>
                                                <i class="fa-solid fa-stop"></i>管理画面（CMS）<br>
                                            </p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="carousel__slide">
                                    <figure>
                                        <div>
                                            <img src="{{ asset('storage/images/WebCreate研修進捗管理アプリ.webp') }}"
                                                alt="研修進捗管理アプリ">
                                        </div>
                                        <figcaption>
                                            <h4><i class="fa-solid fa-desktop"></i>研修進捗管理アプリ</h4>
                                            <p>フロントエンド<br>
                                                HTML,CSS,SCSS,JavaScript,jQuery</p>
                                            <p>バックエンド<br>
                                                PHP(Laravel),Slack API,MySQL</p>
                                            <p>機能<br>
                                                <i class="fa-solid fa-stop"></i>認証機能<br>
                                                <i class="fa-solid fa-stop"></i>進捗表示機能<br>
                                                <i class="fa-solid fa-stop"></i>検索、並び替え機能<br>
                                                <i class="fa-solid fa-stop"></i>削除申請機能(使用者→管理者)<br>
                                            </p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="carousel__slide">
                                    <figure>
                                        <div>
                                            <img src="{{ asset('storage/images/boat.webp') }}" alt="業務システムアプリ">
                                        </div>
                                        <figcaption>
                                            <h4><i class="fa-solid fa-desktop"></i>業務システムアプリ</h4>
                                            <p>フロントエンド<br>
                                                HTML,CSS,SCSS,JavaScript,jQuery</p>
                                            <p>バックエンド<br>
                                                PHP(Laravel),Python(Flask),MySQL,Docker</p>

                                            <p>機能<br>
                                                <i class="fa-solid fa-stop"></i>CRUD処理(作成、読み取り、更新、削除)<br>
                                                <i class="fa-solid fa-stop"></i>PDFの登録やCSV取り込み<br>
                                                <i class="fa-solid fa-stop"></i>ユーザーの仮登録→登録<br>
                                                <i class="fa-solid fa-stop"></i>検索やフィルター<br>
                                                <i class="fa-solid fa-stop"></i>投稿の固定やページネーション<br>
                                                <i class="fa-solid fa-stop"></i>クリップボードへのコピー<br>
                                                <i class="fa-solid fa-stop"></i>メール抽出→DB登録の非同期処理機能<br>
                                            </p>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>

                            <ul class="carousel__thumbnails">
                                <li>
                                    <label for="slide-1">
                                        <img src="{{ asset('storage/images/株式会社FEDELTA.webp') }}"
                                            alt="株式会社FEDELTA様HP">
                                    </label>
                                </li>
                                <li>
                                    <label for="slide-2">
                                        <img src="{{ asset('storage/images/FEDELTA-リクルート-.webp') }}"
                                            alt="株式会社FEDELTA様リクルートサイト">
                                    </label>
                                </li>
                                {{-- <li>
                                    <label for="slide-3"><img
                                            src="{{ asset('storage/images/株式会社FEDELTA-サービスサイト-.webp') }}"
                                            alt="株式会社FEDELTA様サービスサイト"></label>
                                </li> --}}
                                <li>
                                    <label for="slide-3"><img src="{{ asset('storage/images/WebCreate.webp') }}"
                                            alt="WebCreate（プログラミング研修サイト）"></label>
                                </li>
                                <li>
                                    <label for="slide-4"><img
                                            src="{{ asset('storage/images/WebCreate研修進捗管理アプリ.webp') }}"
                                            alt="研修進捗管理アプリ"></label>
                                </li>
                                <li>
                                    <label for="slide-5"><img src="{{ asset('storage/images/boat.webp') }}"
                                            alt="業務システムアプリ"></label>
                                </li>
                            </ul>
                        </div>
                    </div>
            </section>


            {{-- 
            <section class="section section-4 js-section" data-section-name="Contact">
                <div class="title">Contact</div>
            </section> --}}
            <ul class="pager" id="js-pager"></ul>
        </main>
    </div>
</body>


</html>
