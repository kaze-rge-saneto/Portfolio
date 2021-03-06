<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://img.icons8.com/carbon-copy/100/000000/track-and-field.png">
    <meta name="discription" content="松橋采音斗のポートフォリオ">
    <link rel="stylesheet" href="/Portfolio/css/style.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <title>Portfolio</title>

    <!--jQuery-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script>
        //リンククリックで自動スクロール
        $(function(){
        // #で始まるアンカーをクリックした場合に処理
        $('a[href^=#]').click(function() {
            // スクロールの速度
            var speed = 700; // ミリ秒
            // アンカーの値取得
            var href= $(this).attr("href");
            // 移動先を取得
            var target = $(href == "#" || href == "" ? 'html' : href);
            // 移動先を数値で取得
            var position = target.offset().top;
            // スムーススクロール
            $('body,html').animate({scrollTop:position}, speed, 'swing');
            return false;
        });
        });
    </script>

</head>
<body>
    <div class="portfolio">

        <!--1ページ目-->
        <div class="first" id="first">
            <!--リスト-->
                <nav class="item-list">
                    <ul>
                        <li><a href="#second">About</a></li>
                        <li><a href="#third">Project</a></li>
                        <li><a href="#fourth">Contacts</a></li>
                    </ul>
                </nav>
            <!--コンテンツ-->
            <div class="content">

                <!--ローマ字名前-->
                <div class="name-roma">
                    <!--名-->
                    <div class="mei">
                        Saneto                        
                    </div>
                    <!--姓-->
                    <div class="sei">
                        Matsuhashi
                    </div>
                </div>

                <!--漢字名前-->
                <div class="name">
                    松橋 采音斗
                </div>
                
                <!--自分の紹介-->
                <div class="me">
                    Web Application Developer
                </div>

                <!--アイコン-->
                <div class="MyImage">
                    <!--<img src="/Portfolio/image/myimage.JPG" alt="采音斗の画像">-->
                </div>
            </div>

        </div>

        <!--2ページ目-->
        <div class="second" id="second">

            <!--コンテンツ-->
            <div class="content">

                <!--About-->
                <div class="about">
                    <h2>About</h2>
                    <p>HTML / CSS /  PHP / Laravel / JavaScript</p>
                </div>
                <!--自己紹介-->
                <div class="intro">
                    <h4>自己紹介文</h4>
                    <div class="myself">
                        <p>ホームページを制作したいという気持ちをきっかけに、初めはProgateで学習を始め、本格的にプログラミングを勉強したいと思いプログラミングスクールに通うことを決めました。0からものを作れる人材になり、企業のホームページの制作、Webアプリケーションを開発していきたいと考えています。</p>
                    </div>
                    
                </div>
                <!--メール-->
                <div class="email">
                    <a href="mailto:kaze.rge@icloud.com">kaze.rge@icloud.com</a>
                </div>

                <!--プログラミングイメージ-->
                <div class="program">
                    <img src="/Portfolio/image/programing.jpg" alt="プログラミングのイメージ">
                </div>

                <!--github-->
                <div class="github">
                    <a href="https://github.com/kaze-rge-saneto"><img src="/Portfolio/image/githubicon.png" alt="github"></a>
                </div>
            </div>
        </div>

        <!--3ページ目-->
        <div class="third" id="third">

            <!--コンテンツ-->
            <div class="content">

                <!--プロジェクト-->
                <div class="Project">
                    <h2>Projects</h2>
                </div>

                <div class="project-list">
                    <!--TwitterClone-->
                    <div class="twitterclone">
                        <h3>Twitterクローン</h3>
                        <p>Twitterの複製アプリです。ツイートを投稿できます。PHP / MySQLを利用しています。</p>
                        <div class="twitterclone-image">
                            <img src="/Portfolio/image/twitterclone.png" alt="twitterclone">
                        </div>
                    </div>

                    <!--Assemble-->
                    <div class="Assemble">
                        <h3>Assemble</h3>
                        <p>音楽バンド向けマッチングアプリを開発中です。PHP / Laravel / phpmyadminを利用しています。</p>
                        <div class="Assemble-image">
                            <a href="https://music-assemble.com"><img src="/Portfolio/image/Assemble.png" alt="Assemble"></a>
                        </div>
                        <div class="test">
                            <h4>テストアカウント</h4>
                            <p>Email:test@icloud.com(個人)<br>test-band@icloud.com(バンド)</p>
                            <p>Pass:123456</p>
                        </div>
                    </div>

                    <!--wordpress-->
                    <div class="wordpress">
                        <h3>Wordpress</h3>
                        <p>Wordpressでサイト制作を行いました。</p>
                        <div class="wordpress-image">
                            <img src="/Portfolio/image/wordpress.png" alt="wordpressでサイト制作">
                        </div>
                    </div>

                    <!--開発中のもの模写したもの-->
                    <div class="project-footer">
                        <!--模写コーディング-->
                        <div class="copy">
                            <a href="/Portfolio/copy.php">模写コーディング</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--4ページ目-->
        <div class="fourth" id="fourth">
            <!--コンテンツ-->
            <div class="content">

                <div class="contact">
                    <h2>Contacts</h2>
                </div>

                <!--電話番号-->
                <div class="tel">
                <i class="fas fa-mobile"></i>
                    <a href="tel:+81-80-1551-4244">080-1551-4244</a>
                </div>

                <!--メールアドレス-->
                <div class="email">
                <i class="far fa-envelope-open"></i>
                    <a href="mailto:address">kaze.rge@icloud.com</a>
                </div>

            </div>
        </div>
        
    </div>
    
    <!--トップへ-->
    <div class="restart">
        <a href="#first">Topへ</a>
    </div>
</body>
</html>