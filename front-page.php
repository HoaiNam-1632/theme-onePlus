<?php get_header()  ?>
<?php 
        $featured_post = get_field('post_object');
?>
    <section class="section viral-section">
        <div class="wrapper">
            <div class="inner">
                <div class="viral">
                    <div class="viral-left">
                        <h1><?php echo $featured_post->post_title ?></h1>
                        <ul class="dateList">
                            <li class="dateList__item">
                                <?php
                                    $datePost = new DateTime($featured_post->post_date);
                                    echo $datePost->format('Y')."年".$datePost->format('m')."月".$datePost->format('d')."日";
                                ?>
                            </li>
                            <li>
                                <a href="">DX</a>,
                                <a href="">納品書</a>
                            </li>
                            <li>
                                <a href="">DX</a>,
                                <a href="">インボイス</a>,
                                <a href="">コスト削減</a>,
                                <a href="">会計</a>,
                                <a href="">業務効率化</a>,
                                <a href="">納品書</a>,
                                <a href="">請求書</a>
                            </li>
                        </ul>
                    </div>
                    <div class="viral-right">
                        <div class="viral-img">
                            <!-- <img src="<?php echo $viral['img']; ?>" alt="360x202"> -->
                            <?php echo get_the_post_thumbnail($featured_post, 'full') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section wider-section">
        <div class="wrapper">
            <div class="inner">
                <div class="wider">
                    <ul>
                        <li>HOME</li>
                        <li>DX</li>
                        <li>納品書の電子化とは？電子化のメリットと注意点、選び方も解説</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- L-MAIN -->
    <section class=" section section-l-main">
        <div class="l-main-wrapper">
            <div class="l-main-inner">
                <main class="main">
                    <!-- SOCIAL TOP -->
                    <section class="section section-social-top">
                        <div class="wrapper">
                            <div class="inner">
                                <div class="social-top">
                                    <ul>
                                        <li><a href="" id="fb">fb</a></li>
                                        <li><a href="" id="x">x</a></li>
                                        <li><a href="" id="b">b</a></li>
                                        <li><a href="" id="pocket">p</a></li>
                                        <li><a href="" id="line">l</a></li>
                                        <li><a href="" id="linkedin">in</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- BANNER -->
                    <?php $banner = get_field('banner'); ?>
                    <section class="section section-banner">
                        <div class="wrapper">
                            <div class="inner">
                                <div class="banner">
                                    <div class="title">
                                        <h2>Title Category</h2>
                                    </div>
                                    <div class="banner-img">
                                        <img src="<?php echo $banner['img']; ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- CONTENTS -->
                    <section class="section section-contents">
                        <div class="wrapper">
                            <div class="inner">
                                <div class="contents">
                                    <div class="contents-one">
                                        <p>
                                            2022年1月に施行された電子帳簿保存法の改正や、2023年10月に迫っているインボイス制度等、
                                            <strong>納品書をはじめとした帳簿書類の電子化を行う必要性</strong>が高まっています。
                                        </p>
                                        <p>ですが、<br>「納品書の電子化を行ってもいいのかわからない」<br>「電子化や法律に詳しくないけれど、簡単に納品書の電子化を行いたい」<br>「システムを導入するなら、業務効率が上がるシステムを導入したい」<br>等の、悩みや問題を抱えてないでしょうか。
                                        </p>
                                        <p>結論から言うと、<strong>納品書の電子化は可能</strong>です。<br>また、納品書の電子化を簡単かつスムーズに行いたいなら、クラウド型の納品書受領システムの導入がおすすめです。
                                        </p>
                                        <p>この記事では、以下の流れで、</p>

                                        <ul>
                                            <li>納品書の電子化とは</li>
                                            <li>納品書受領システムを導入するメリットとは</li>
                                            <li>納品書受領システム導入による注意点とは</li>
                                            <li>納品書受領システムの選び方とは</li>
                                        </ul>

                                        <p>
                                            納品書の電子化から納品書受領システムの選び方について、ご紹介します。
                                        </p>
                                    </div>

                                    <div class="outline">
                                        <div class="outline-inner">
                                            <span class="outline__title">目次 </span>
                                            <label class="outline_switch" for="outline__switch" id="outline-click">
                                                開く
                                            </label>
                                            <ul class="outline__list outline__list-2">
                                                <li class="outline__item"><a class="outline__link" href=""><span
                                                            class="outline__number">1</span>
                                                        納品書の電子化とは</a></li>
                                                <li class="outline__item"><a class="outline__link" href=""><span
                                                            class="outline__number">2</span>
                                                        電子化のために納品書受領システムを導入するメリットとは</a>
                                                    <ul class="outline__list outline__list-3">
                                                        <li class="outline__item"><a class="outline__link" href=""><span
                                                                    class="outline__number">2.1</span>
                                                                発行されたその日に受領が可能</a>
                                                        </li>
                                                        <li class="outline__item"><a class="outline__link" href=""><span
                                                                    class="outline__number">2.2</span> 返送の手間とコストの削減</a>
                                                        </li>
                                                        <li class="outline__item"><a class="outline__link" href=""><span
                                                                    class="outline__number">2.3</span> 業務の効率化が図れる</a>
                                                        </li>
                                                        <li class="outline__item"><a class="outline__link" href=""><span
                                                                    class="outline__number">2.4</span> 紛失の防止になる</a></li>
                                                        <li class="outline__item"><a class="outline__link" href=""><span
                                                                    class="outline__number">2.5</span> 劣化を防げる</a></li>
                                                    </ul>
                                                </li>
                                                <li class="outline__item"><a class="outline__link"
                                                        href="#outline_1__3"><span class="outline__number">3</span>
                                                        電子化のため納品書受領システムを導入する際の注意点とは</a>
                                                    <ul class="outline__list outline__list-3">
                                                        <li class="outline__item"><a class="outline__link" href=""><span
                                                                    class="outline__number">3.1</span> 導入・運用コストがかかる</a>
                                                        </li>
                                                        <li class="outline__item"><a class="outline__link" href=""><span
                                                                    class="outline__number">3.2</span>
                                                                紙での納品書を継続希望する取引先が一定数残る</a></li>
                                                    </ul>
                                                </li>
                                                <li class="outline__item"><a class="outline__link" href=""><span
                                                            class="outline__number">4</span>
                                                        納品書受領を電子化するためのシステムの選び方とは</a>
                                                    <ul class="outline__list outline__list-3">
                                                        <li class="outline__item"><a class="outline__link" href=""><span
                                                                    class="outline__number">4.1</span>
                                                                電子化の業務負荷をどこまで減らしたいか</a></li>
                                                        <li class="outline__item"><a class="outline__link" href=""><span
                                                                    class="outline__number">4.2</span>
                                                                自社の会計システムに適合できる仕訳データを出力できるか</a></li>
                                                        <li class="outline__item"><a class="outline__link" href=""><span
                                                                    class="outline__number">4.3</span>
                                                                会計システムとの連携の精度が高いか</a>
                                                        </li>
                                                        <li class="outline__item"><a class="outline__link" href=""><span
                                                                    class="outline__number">4.4</span>
                                                                請求書・見積書等の国税関係書類にも法対応できているか</a></li>
                                                    </ul>
                                                </li>
                                                <li class="outline__item"><a class="outline__link" href=""><span
                                                            class="outline__number">5</span> まとめ</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- OUTLINE 1 -->
                                    <div class="outline_1">
                                        <h2 class="title main-block-title">
                                            納品書の電子化とは
                                        </h2>
                                        <div class="outline_block__img">
                                            <img src="<?php echo get_theme_file_uri(); ?>/img/main-four.jpeg" alt="" class="main-block-img">
                                        </div>
                                        <div class="content">
                                            <p>
                                                納品書をはじめとした国税関係帳簿書類には、
                                                <strong>法人税法により7年間の保存義務</strong>
                                                があります。
                                            </p>
                                            <div class="outline_1__block">
                                                <p>
                                                    1 帳簿書類等の保存期間
                                                    法人は、帳簿(注1)を備え付けてその取引を記録するとともに、その帳簿と取引等に関して作成または受領した書類(注1)を、その事業年度の確定申告書の提出期限の翌日から7年間(注2)保存しなければなりません。
                                                </p>
                                            </div>
                                            <div class="outline-text-align-right">
                                                <p>
                                                    出典：国税庁「
                                                    <a href="">
                                                        No.5930 帳簿書類等の保存期間
                                                    </a>
                                                    」より
                                                </p>
                                            </div>
                                            <p>
                                                ですが、「電子計算機を使用して作成する国税関係帳簿書類の保存方法等の特例に関する法律（平成10年法律第25号）」、通称「電子帳簿保存法」で定められた条件を満たしている場合に限り、紙で保存していた国税関係帳簿書類のデータ保存が認められるようになりました。<br>そのため、納品書の電子化は税法上で認められています。
                                            </p>
                                            <p>
                                                2021年12月末までは、データで受け取った納品書の出力保存が認められていました。<br>ですが、2022年1月の「電子帳簿保存法」改正が施行されたことにより、2024年1月からはデータで受け取った書類(電子取引書類)の出力保存が認められなくなります。<br>そのため、<strong
                                                    class="has-text-red-color">納品書の電子化は必須となる</strong>と言ってもいいでしょう。
                                            </p>
                                            <p>
                                                納品書の電子化を行う方法は、大きく分けて自社でシステムを組むか、外部の納品書作成システムを導入するかの二択になるでしょう。<br>ですが、自社でシステムを組むには、サーバの費用や運用コストを考えると現実的ではありません。<br>納品書受領システムの導入を選択することとなります。<br>さらに、<strong>クラウド型であればテレワークにも対応できるため、クラウド型の納品書受領システムの導入が最適</strong>だといえます。
                                            </p>
                                        </div>

                                    </div>
                                    <!-- OUTLINE 2 -->
                                    <div class="outline_2">
                                        <div class="main-block-title">
                                            <h2>
                                                電子化のために納品書受領システムを導入するメリットとは
                                            </h2>
                                        </div>
                                        <div class="outline_block__img">
                                            <img class="main-block-img" src="<?php echo get_theme_file_uri(); ?>/img/post-two.jpeg" alt="" srcset="">
                                        </div>
                                        <p>
                                            納品書の電子化は、発行する側の企業だけでなく、<strong>受け取る側の企業</strong>にとってもメリットがあります。<br>電子納品書を受領する側の主なメリットは以下の通りです。
                                        </p>
                                        <!-- outline 2 content 1 -->
                                        <div class="outline_2__contents">
                                            <div class="main-block-sub-title">
                                                <h3>発行されたその日に受領が可能</h3>
                                            </div>
                                            <p>
                                                従来の紙ベースの納品書は、発行・郵送から到着までにタイムラグが発生してしまいます。<br>また、届いた納品書は、オフィスに出社して確認しなければなりません。<br>さらに、届いた納品書に誤りがあった場合は、再発行・再送を待つ必要があります。
                                            </p>
                                            <p>
                                                電子納品書であれば、<strong>発行したその日に受領することができ、もしも記載事項に誤りがあった場合でも速やかに修正版を発行してもらうことができます。</strong>
                                            </p>
                                        </div>

                                        <!-- outline 2 content 2 -->
                                        <div class="outline_2__contents">
                                            <div class="main-block-sub-title">
                                                <h3>返送の手間とコストの削減</h3>
                                            </div>
                                            <p>
                                                取引先や取引内容によっては、納品書の発行前後に発注書や受領書に問題が発生するケースがあります。
                                            </p>
                                            <p>
                                                発注書や受領書等の帳票も専用WEBページにアップロードすることができるので、<strong>紙の文書を返送してもらう手間やコストを削減する</strong>ことができます。
                                            </p>
                                        </div>

                                        <!-- outline 3 content 3 -->
                                        <div class="outline_2__contents">
                                            <div class="main-block-sub-title">
                                                <h3>業務の効率化が図れる</h3>
                                            </div>
                                            <p>
                                                納品書は税法上で7年の保管義務があり、過去の取引で生じた書類を保管し続けていると膨大な量になります。<br>たとえ適切にファイリングしていたとしても、多くの書類群の中から特定の書類を見つけ出すのには多くの手間と時間がかかってしまいます。
                                            </p>
                                            <p>
                                                納品書を電子化して保存することで、データベースを検索するだけで参照したい<strong>納品書をすぐに見つけ出すことができるようになります。</strong>
                                            </p>
                                        </div>

                                        <!-- outline 4 content 4 -->
                                        <div class="outline_2__contents">
                                            <div class="main-block-sub-title">
                                                <h3>紛失の防止になる</h3>
                                            </div>
                                            <p>
                                                紙の場合は、書類を誤って紛失してしまう可能性もあります。<br>特に保管する納品書の数が増えれば増えるほど、ほかの書類に紛れたり等することによって、なくしやすくなるでしょう。<br>仮に大事な納品書を紛失してしまうと、大変な事態になりかねません。
                                            </p>
                                            <p>
                                                紙の納品書を電子に置き換えるだけで、<strong>紛失のリスクを大幅に削減する</strong>ことができます。
                                            </p>
                                        </div>
                                        <!-- outline 5 content 5 -->
                                        <div class="outline_2__contents">
                                            <div class="main-block-sub-title">
                                                <h3>劣化を防げる</h3>
                                            </div>
                                            <p>
                                                紙の書類だと、年数が経つにつれ、色褪せたり汚れたりすることで劣化してしまいます。
                                                紙質が古いだけで、触るのも億劫になってしまうでしょう。
                                            </p>
                                            <p>
                                                紙の納品書を電子化し保管をすれば、そのような劣化の心配がありません。<br>書類を電子化することで、<strong>いつまでも読みやすい状態で保管しておける点もメリット</strong>です。
                                            </p>
                                        </div>
                                    </div>

                                    <!-- OUTLINE 3 -->
                                    <div class="outline_3">
                                        <div class="main-block-title">
                                            <h2>
                                                電子化のため納品書受領システムを導入する際の注意点とは
                                            </h2>
                                        </div>
                                        <div class="outline_block__img">
                                            <img class="main-block-img" src="<?php echo get_theme_file_uri(); ?>/img/main-three.jpeg" alt="" srcset="">
                                        </div>
                                        <p>
                                            納品書の電子化にあたって納品書受領システムを導入する場合は、導入・運用コストが発生します。
                                            また、紙での納品書の送付を希望する取引先が一定数は存在し、完全な納品書の電子化は難しいケースもあり得ます。
                                        </p>
                                        <!-- outline 3 content 1 -->
                                        <div class="outline_3__contents">
                                            <div class="main-block-sub-title">
                                                <h3>導入・運用コストがかかる</h3>
                                            </div>
                                            <p>
                                                納品書を電子化するために納品書受領システムを導入する場合は、システムの導入コストや月々の運用コストがかかることがデメリットです。<br>ただし、納品書の電子化によって、<strong>納品書受領業務が軽減できる</strong>ことから、削減できる人件費を踏まえると、トータルではコスト削減につながる可能性があります。
                                            </p>
                                        </div>

                                        <!-- outline 3 content 2 -->
                                        <div class="outline_3__contents">
                                            <div class="main-block-sub-title">
                                                <h3>紙での納品書を継続希望する取引先が一定数残る</h3>
                                            </div>
                                            <p>
                                                納品書の電子化を進めても、紙での納品書の送付を希望する取引先が一定数あることが想定され、完全な電子化を行うことは難しい場合もあります。<br>指定のフォーマットによる納品書の郵送を求める企業もあります。<br>とはいえ、大半の取引先の納品書を電子化できれば、大幅な業務削減が図ることが可能です。
                                            </p>
                                        </div>


                                    </div>

                                    <!-- OUTLINE 4 -->
                                    <div class="outline_4">
                                        <div class="main-block-title">
                                            <h2>
                                                納品書受領を電子化するためのシステムの選び方とは
                                            </h2>
                                        </div>
                                        <div class="outline_block__img">
                                            <img class="main-block-img" src="<?php echo get_theme_file_uri(); ?>/img/main-one.jpeg" alt="" srcset="">
                                        </div>
                                        <p>
                                            会社に納品書の電子化を行うとなった際に、どのような基準でシステムを選べばいいのか、迷ってしまいがちです。<br />
                                            ここでは<strong class="has-text-red-color">おすすめの納品書受領システムの選び方</strong>について解説します。
                                        </p>
                                        <!-- outline 4 content 1 -->
                                        <div class="outline_4__contents">
                                            <div class="main-block-sub-title">
                                                <h3>電子化の業務負荷をどこまで減らしたいか</h3>
                                            </div>
                                            <p>
                                                納品書受領サービスにおける納品書の電子化の仕組みは、<strong>機械による自動電子化</strong>と、<strong>オペレーターによる人力電子化</strong>の2つに分類されます。
                                            </p>
                                            <p>
                                                前者では、経理担当者がスキャンした納品書画像から、システムが有する<strong>AI</strong>（人工知能）や<strong>OCR</strong>（光学文字認識）で自動的に電子化します。<br><strong>スキャン後間もなく電子化できる</strong>点がメリットです。<br>一方、現在の技術では100%の精度ではないため、電子化完了後に、経理担当者が確認する必要がある点はデメリットといえるでしょう。
                                            </p>
                                            <p>
                                                後者では、各ベンダー選任のオペレーターが手入力で電子化を行います。<br>時間は多少かかるものの、<strong>高精度の電子化</strong>が期待できるため、電子化完了後の確認は不要となります。
                                            </p>
                                            <p>
                                                スピードと精度の比較で単純に優劣をつけるのではなく、自社の経理担当の業務負荷をどこまで減らしたいかを考え、選定を進めることが重要です。
                                            </p>
                                        </div>

                                        <!-- outline 4 content 2 -->
                                        <div class="outline_4__contents">
                                            <div class="main-block-sub-title">
                                                <h3>自社の会計システムに適合できる仕訳データを出力できるか</h3>
                                            </div>
                                            <p>
                                                納品データを会計システムへ取り込む際には、<strong
                                                    class="has-text-red-color">APIを利用する方法</strong>と、<strong
                                                    class="has-text-red-color">出力したCSVファイルをインポートする方法</strong>があります。
                                            </p>
                                            <p>
                                                APIを利用するメリットは、経理担当者がデータを直接触ることなく、自動的にシステム間で連携ができる点にあります。<br>したがって、納品データを月に何度も会計システムに取り込む必要がある場合は、APIによる直接連携が可能なサービスを検討すべきでしょう。
                                            </p>
                                            <p>
                                                ただし、2021年11月現在、APIリリース実績が各社ともに不十分であるため、<strong>CSVファイル経由のデータ連携が主流</strong>です。<br>会計システム毎に、出力するCSVファイルの形式をカスタマイズできる納品書受領サービスも存在するので、検討の際にはCSV負担を大きく捉えずに済むかもしれません。
                                            </p>
                                            <p>
                                                納品書受領サービスが自社の会計システムに適した仕訳データを出力できるか否かは、必ず確認しましょう。
                                            </p>
                                        </div>

                                        <!-- outline 4 content 3 -->
                                        <div class="outline_4__contents">
                                            <div class="main-block-sub-title">
                                                <h3>会計システムとの連携の精度が高いか</h3>
                                            </div>
                                            <p>
                                                納品書受領サービスを導入したものの、自社の会計システムとの連携がスムーズにいかず、無駄な手間が生じてしまったり、場合によってはトラブルになってしまう場合があります。<br>そのような状況に陥らないために、単に自社の会計システムに連携しているかだけでなく、連携の精度に信頼がおけるかを確認することがとても重要です。
                                            </p>
                                            <p>
                                                一方で、会計システムとの連携の精度がどれくらい高いかというのは、実際のところ利用してみなければわかりません。<br>企業によって導入している会計システムは異なるため、サービスの口コミが良いからと言っても、必ずしも自社の会計システムとの連携がスムーズにいくとは限りません。
                                            </p>
                                            <p>
                                                しかし、連携精度が高いシステムを選ぶための一つの方法として、<strong>「経理向けサービスの提供実績がある会社のサービスを選ぶ」</strong>というものがあります。<br>このような会社は、経理業務や会計システムに関するノウハウを十分に有しており、それゆえ提供するサービスは、会計ソフトと高精度で連携する可能性が高いと考えられます。
                                            </p>
                                        </div>

                                        <!-- outline 4 content 4 -->
                                        <div class="outline_4__contents">
                                            <div class="main-block-sub-title">
                                                <h3>請求書・見積書等の国税関係書類にも法対応できているか</h3>
                                            </div>
                                            <p>
                                                <strong
                                                    class="has-text-red-color">電子帳簿保存法</strong>は、切っても切り離せないものですが、実は<strong>電子帳簿保存法の対象範囲</strong>は納品書や領収書に限らず、<strong>請求書や見積書、検収書等を含んだあらゆる国税関係書類</strong>なのです。<br>そのため、「納品書」だけに対応するサービスを利用してしまうと、例えば請求書や見積書を別の方法で対応せざるを得ないため、完全な効率化は実現しないでしょう。
                                            </p>
                                            <p>
                                                したがって、すべての国税関係書類を受領・電子化できるサービスを選ぶことが重要です。
                                            </p>
                                        </div>

                                    </div>

                                    <!-- OUTLINE 5 -->
                                    <div class="outline_5">
                                        <div class="main-block-title">
                                            <h2>
                                                まとめ
                                            </h2>
                                        </div>
                                        <div class="outline_block__img">
                                            <img class="main-block-img" src="<?php echo get_theme_file_uri();?>/img/post-three.jpeg" alt="" srcset="">
                                        </div>
                                        <p>
                                            <strong>DX</strong>(デジタルトランスフォーメーション)の推進や、新型コロナウイルスの影響によるテレワーク等、企業のデジタル化が求められています。<br>2022年1月の「電子帳簿保存法」改正により、2024年1月からはデータで受け取った書類(電子取引書類)の出力保存が認められなくなります。
                                        </p>
                                        <p>
                                            自社で電子化を行うには、サーバやシステムに関する高い専門性が要求されるため、納品書発行システムの導入をおすすめします。<br>クラウド型の納品書受領システムであれば、<strong>オンラインで作業が完結したり、会計システムとの連携が行える等、多くのメリット</strong>があり、業務効率化にもつながるでしょう。
                                        </p>
                                        <p>
                                            oneplatでも、本日お話しした「会計システムとの連携」や2022年1月改正電子帳簿保存法とインボイス制度に対応している「納品書・請求書クラウドサービス」を提供しています。<br><strong>納品書の電子化だけでなく、財務・経理部門の業務コスト削減にも興味のある方は、お気軽にお問い合わせください。</strong>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>


                    <!-- SOCIAL BOTTOM -->
                    <section class="section section-social-bottom">
                        <div class="wrapper">
                            <div class="inner">
                                <div class="social-bottom">
                                    <ul>
                                        <li><a href="" id="fb">fb</a></li>
                                        <li><a href="" id="x">x</a></li>
                                        <li><a href="" id="b">b</a></li>
                                        <li><a href="" id="pocket">p</a></li>
                                        <li><a href="" id="line">l</a></li>
                                        <li><a href="" id="linkedin">in</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- CONTENT POST CTA-->
                    <section class="section section-post-cta">
                        <div class="wrapper">
                            <div class="inner">
                                <div class="post-cta">
                                    <p>
                                        この記事を読んだ方で<strong>「受け取る」納品書や請求書を「電子化」する</strong>ことに興味がある方はいませんか？
                                    </p>
                                    <p>
                                        <strong>
                                            <a href="http://" class="has-text-red-color">oneplat</a>
                                            は、納品書や請求書をデータで受け取れるサービスです。
                                        </strong>
                                    </p>
                                    <p>
                                        会社組織の財務・経理部門や、支店・店舗・工場などの、 管理業務における下記の課題解決にoneplatは大きく貢献できます。
                                    </p>
                                    <ul>
                                        <li>会計/販売管理システムとの連携で仕訳入力が不要に</li>
                                        <li>取りまとめたデータを自動で取り込み</li>
                                        <li>総合振込データの作成や仕訳の消込も自動入力</li>
                                    </ul>
                                    <p>
                                        導入後は複雑なデータ入力業務に時間を奪われることなく、本来の業務へ時間とコストを割くことが可能です。
                                    </p>
                                    <p>
                                        このウェブサイトでは、他にも
                                        <strong
                                            class="has-bg-yellow-color has-text-red-color">コスト削減・業務効率化に役立つ資料を無料で配布</strong>しておりますので、
                                        是非、この機会に一度
                                        <a href="" class="has-text-red-color">資料ダウンロード</a>
                                        をしてみください。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- MAIN PROFILE -->
                    <?php $mainProfile = get_field('main_profile'); ?>
                    <section class="section section-main-profile">
                        <div class="wrapper">
                            <div class="inner">
                                <div class="main-profile">
                                    <div class="profile-top">
                                        <div class="profile-img">
                                            <img src="<?php echo $mainProfile['logo']; ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="profile-bottom">
                                        <div class="profile-author">
                                            <h4>
                                                <?php 
                                                     echo get_the_author_meta('display_name', $featured_post->post_author);
                                                ?>
                                            </h4>
                                        </div>
                                        <div class="profile-title">
                                            <h3>この記事の執筆者</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- NEW POST --->
                    <?php $newPost = get_field('new_post');  ?>
                    <section class="section section-new-post">
                        <div class="wrapper">
                            <div class="inner">
                                <div class="new-post">
                                    <div class="new-post-top">
                                        <div class="new-post-left">
                                            <div class="new-post-img zoom-in">
                                                <?php echo get_the_post_thumbnail($newPost, 'full') ?>
                                            </div>
                                        </div>
                                        <div class="new-post-right">
                                            <div class="tags">
                                                <span class="icon-tag">
                                                    <img src="<?php echo get_theme_file_uri(); ?>/img/icon-tag.png" alt="">
                                                </span>
                                                <ul>
                                                    <?php $newPostTags = get_the_tags($newPost);
                                                            if($newPostTags){
                                                                foreach($newPostTags as $tag){
                                                                    echo '<li><a href="">'.$tag->name.'</a></li>';
                                                                }
                                                            }
                                                    ?>
                                                </ul>
                                            </div>
                                            <div class="link-next">
                                                <a class="btn-next" href="">
                                                    次の記事を読む
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="new-post-bottom">
                                        <h4>
                                            <?php echo $newPost->post_title;?>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- MAIN LIST POSTS --->
                    <section class="section section-main-list-posts">
                        <div class="wrapper">
                            <div class="inner">
                                <div class="main-list-posts">
                                    <div class="title">
                                        <h2>関連する記事</h2>
                                    </div>
                                    <div class="main-posts-content">
                                        <?php
                                            $postsRandom =  get_posts(array(
                                                'posts_per_page'    => 3,
                                                'post_type'         => 'post',
                                                ));
                                            if($postsRandom){
                                                echo "<ul>";
                                                foreach($postsRandom as $post){
                                                    echo '
                                                    <li class="item-post-content">
                                                    <div class="item-post-left">
                                                        <div class="item-post-img zoom-in">
                                                            '.get_the_post_thumbnail($post, 'full').'
                                                        </div>
                                                    </div>
                                                    <div class="item-post-right">
                                                        <div class="post-right-top">
                                                            <ul>
                                                                <li>
                                                                    2023年05月02日
                                                                </li>
                                                                <li>
                                                                    2023年12月13日
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="post-right-middle">
                                                            <ul>
                                                               ';
                                                                $getTags = get_the_tags($post);
                                                                if($getTags){
                                                                foreach($getTags as $tag){
                                                                    if($tag->name == "Uncategorized"){
                                                                        continue;
                                                                    }
                                                                    echo '<li> <a href="">'
                                                                            .$tag->name.
                                                                            '</a></li>';
                                                                }
                                                            }
                                                               echo '
                                                            </ul>
                                                        </div>
                                                        <div class="post-right-bottom">
                                                            <h2>
                                                                <a href="">
                                                                    '.$post->post_title.'
                                                                </a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </li>
                                                        ';
                                                }
                                                echo"</ul>";
                                            }
                                        ?>
                                        <!-- <ul>
                                            <li class="item-post-content">
                                                <div class="item-post-left">
                                                    <div class="item-post-img">
                                                        <img src="./img/post-one.jpeg" alt="" srcset="">
                                                    </div>
                                                </div>
                                                <div class="item-post-right">
                                                    <div class="post-right-top">
                                                        <ul>
                                                            <li>
                                                                2023年05月02日
                                                            </li>
                                                            <li>
                                                                2023年12月13日
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="post-right-middle">
                                                        <ul>
                                                            <li>
                                                                <a href="">
                                                                    インボイス
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    コスト削減
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    ペーパーレス
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    業務効率化
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    納品書
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="http://">
                                                                    請求書
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="post-right-bottom">
                                                        <h2>
                                                            <a href="">
                                                                OCRでPDFを利用できる範囲とは？利用すべきケースまで徹底解説！
                                                            </a>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="item-post-content">
                                                <div class="item-post-left">
                                                    <div class="item-post-img">
                                                        <img src="./img/post-four.jpeg" alt="" srcset="">
                                                    </div>
                                                </div>
                                                <div class="item-post-right">
                                                    <div class="post-right-top">
                                                        <ul>
                                                            <li>
                                                                2023年05月02日
                                                            </li>
                                                            <li>
                                                                2023年12月13日
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="post-right-middle">
                                                        <ul>
                                                            <li>
                                                                <a href="">
                                                                    インボイス
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    コスト削減
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    ペーパーレス
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    業務効率化
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    納品書
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="http://">
                                                                    請求書
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="post-right-bottom">
                                                        <h2>
                                                            <a href="">
                                                                OCRでPDFを利用できる範囲とは？利用すべきケースまで徹底解説！
                                                            </a>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="item-post-content">
                                                <div class="item-post-left">
                                                    <div class="item-post-img">
                                                        <img src="./img/main-two.jpeg" alt="" srcset="">
                                                    </div>
                                                </div>
                                                <div class="item-post-right">
                                                    <div class="post-right-top">
                                                        <ul>
                                                            <li>
                                                                2023年05月02日
                                                            </li>
                                                            <li>
                                                                2023年12月13日
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="post-right-middle">
                                                        <ul>
                                                            <li>
                                                                <a href="">
                                                                    インボイス
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    コスト削減
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    ペーパーレス
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    業務効率化
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    納品書
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="http://">
                                                                    請求書
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="post-right-bottom">
                                                        <h2>
                                                            <a href="">
                                                                OCRでPDFを利用できる範囲とは？利用すべきケースまで徹底解説！
                                                            </a>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- L-CTA -->
                    <section class="section section-l-cta">
                        <div class="wrapper">
                            <div class="inner">
                                <div class="l-cta">
                                    <div class="sub-title">
                                        <p>最短5分</p>
                                    </div>
                                    <div class="title">
                                        <h2>
                                            財務・経理部門における<br/>
                                            DXのお問い合わせやご相談についてはこちら
                                        </h2>
                                    </div>
                                    <div class="btn-cta">
                                        <a href="">お問い合わせ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
                <!-- SIDEBAR  -->
                <section class="section section-sidebar">
                    <div class="sidebar-wrapper">
                        <div class="sidebar-inner">
                            <div class="sidebar">
                                <div class="search">
                                    <input type="text" name="" id="" placeholder="キーワードを入力">
                                </div>
                                <div class="featured">
                                    <div class="title-sidebar">
                                        <h2>注目の記事</h2>
                                    </div>
                                    <div class="content">
                                        <p>
                                            対象期間のランキングデータが1件も見つかりませんでした。
                                        </p>
                                    </div>
                                </div>
                                <div class="sidebar-posts">
                                    <div class="title-sidebar">
                                        <h2>お役立ち資料</h2>
                                    </div>
                                    <div class="list-posts">
                                        <?php 
                                          $posts =  get_posts(array(
                                            'posts_per_page'    => 4,
                                            'post_type'         => 'post'
                                            ));
                                            if($posts){
                                                echo "<ul>";
                                                foreach($posts as $post){
                                                    setup_postdata( $post );
                                                    echo '
                                                    <li>
                                                    <div class="post-img zoom-in">
                                                        <a href="'.the_permalink().'">
                                                        '. get_the_post_thumbnail($post, 'full').'
                                                        </a>
                                                    </div>
                                                    <div class="title-post">
                                                        <p>
                                                            '.$post->post_title.'
                                                        </p>
                                                    </div>
                                                </li>
                                                    ';
                                                }
                                                echo "</ul>";
                                                wp_reset_postdata();
                                            }
                                        ?>
                                        <!-- <ul>
                                            <li>
                                                <div class="post-img">
                                                    <img src="./img/main-one.jpeg" alt="">
                                                </div>
                                                <div class="title-post">
                                                    <p>
                                                        資料ダウンロード_oneplatの導入事例から見る納付書のペーパーレス・自動化資料ダウンロード
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post-img">
                                                    <img src="./img/item-2.jpeg" alt="">
                                                </div>
                                                <div class="title-post">
                                                    <p>
                                                        資料ダウンロード_oneplatの導入事例から見る納付書のペーパーレス・自動化資料ダウンロード
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post-img">
                                                    <img src="./img/item-3.jpeg" alt="">
                                                </div>
                                                <div class="title-post">
                                                    <p>
                                                        資料ダウンロード_oneplatの導入事例から見る納付書のペーパーレス・自動化資料ダウンロード
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post-img">
                                                    <img src="./img/item-4.jpeg" alt="">
                                                </div>
                                                <div class="title-post">
                                                    <p>
                                                        資料ダウンロード_oneplatの導入事例から見る納付書のペーパーレス・自動化資料ダウンロード
                                                    </p>
                                                </div>
                                            </li>
                                        </ul> -->
                                    </div>
                                </div>

                                <div class="categories">
                                    <div class="title-sidebar">
                                        <h2>お役立ち資料</h2>
                                    </div>
                                    <div class="list-categories">
                                        <ul>
                                            <li><a href="">
                                                    リアルタイム経営
                                                </a></li>
                                            <li><a href="">
                                                    ペーパーレス 業務効率化
                                                </a></li>
                                            <li><a href="">
                                                    電帳法・インボイス対応
                                                </a></li>
                                            <li><a href="">
                                                    その他のカテゴリ
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="email">
                                    <div class="title-sidebar">
                                        <h2>メルマガ</h2>
                                        <input type="email" name="" id="" placeholder="メールアドレス">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>

    </section>

    <!-- CATEGORY POST -->
    <?php
         $postsByCategory =  get_posts(array(
            'posts_per_page'    => -1,
            'post_type'         => 'post',
            'category' => 'dx',
            ));
    ?>
    <section class="section section-categories-post">
        <div class="wrapper">
            <div class="inner">
                <div class="categories-post">
                    <div class="title">
                        <h2>
                            <i class="fa-solid fa-folder"></i>DX<span>の最新記事</span>
                        </h2>
                    </div>
                    <div class="grid-container">
                        <?php
                            if($postsByCategory){
                                foreach($postsByCategory as $post){
                                    echo '
                                    <div class="grid-item">
                                    <div class="categories-post__img zoom-in">
                                        '.get_the_post_thumbnail($post, 'full').'
                                    </div>
                                    <div class="categories-post__date">
                                        <p>2023年5月2日</p>
                                    </div>
                                    <div class="categories-post__title">
                                        <a href="">'.$post->post_title.'</a>
                                    </div>
                                </div>
                                        ';
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer() ?>