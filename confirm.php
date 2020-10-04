<?php
    if(!$_POST){
        header('Location: ./index.php');
        exit;
    }

    // バリデーション
    include("validator.php");
    $fv = new FormValidator();
    $fv->requiredCheck($_POST['name1'], "会社名");

    // エラーがあればフォームにリダイレクト
    $_POST['error'] = $fv->errorMsg;
    if(isset($_POST['error'])){
        header('Location: ./index.php');
        exit;
    }

    // エスケープ処理
    function h($str){
        if(is_array($str)){
            return array_map("h", $str);
        }else{
            return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
        }
    }

    $CheckboxGroup2 = implode(", ", $_POST['CheckboxGroup2']);
    $renraku = implode(", ", $_POST['renraku']);
    $kikkake = implode(", ", $_POST['kikkake']);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>株式会社クラウドスミス</title>
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" type="text/css" href="css/base.css" />
        <link rel="stylesheet" type="text/css" href="css/set.css" />
        <link rel="stylesheet" type="text/css" href="css/font.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.0.0/velocity.min.js"></script> -->
        <!--↓↓スクロールアニメーションJS関連ファイル↓↓-->
        <script src="js/jquery.inview.js"></script>
        <!--↑↑スクロールアニメーションJS関連ファイル↑↑-->
        <!--↓↓ページ遷移エフェクトJS関連ファイル↓↓-->
        <link rel="stylesheet" href="css/animsition.min.css" />
        <script src="js/aimsition.js"></script>
        <!--↑↑ページ遷移エフェクトJS関連ファイル↑↑-->
        <!--↓↓SPヘッダ関連↓↓-->
        <link href="css/meanmenu.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.meanmenu.min.js" type="text/javascript"></script>
        <script>
            $(function () {
                $("#SPhead nav").meanmenu({
                    meanMenuContainer: "#SPhead", // メニューを表示させる位置
                    meanMenuOpen: "<span /><span /><span />", // 通常ボタン
                    meanScreenWidth: "768", // 折り畳みメニューを表示させるウィンドウサイズ
                });
            });
        </script>
        <!--↑↑SPヘッダ関連↑↑-->
        <script src="js/common.js"></script>
        <script src="js/smoothscroll.js"></script>
    </head>

    <?php
      print_r($_POST);
    ?>

    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript
            ><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGKWHZM" height="0" width="0" style="display: none; visibility: hidden;"></iframe
        ></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div class="animsition">
            <!--▼▼▼SPヘッダ▼▼▼-->
            <div id="SPhead">
                <nav>
                    <p id="SPlogo">
                        <a href="/"
                            ><img
                                src="/images/header_logo01.png"
                                width="226"
                                height="40"
                                alt="株式会社クラウドスミス-WEBシステム,WEBサイト/ホームページ制作,RPAによる業務効率化,アプリ開発,サーバー構築"
                        /></a>
                    </p>
                    <ul>
                        <li>
                            <a href="/service/" class="animsition-link">SERVICE</a>
                            <ul>
                                <li><a href="/service/web-application.html" class="animsition-link">WEBシステム開発</a></li>
                                <li><a href="/service/client-application.html" class="animsition-link">Windowsアプリ開発</a></li>
                                <li><a href="/service/iot.html" class="animsition-link">IoT開発</a></li>
                                <li><a href="/service/server.html" class="animsition-link">サーバー構築</a></li>
                                <li><a href="/service/web-creation.html" class="animsition-link">WEBサイト制作</a></li>
                                <li><a href="/service/cms-wordpress.html" class="animsition-link">CMS-WordPress</a></li>
                                <li><a href="/service/cms-movabletype.html" class="animsition-link">CMS-MovableType</a></li>
                                <li><a href="/service/rpa.html" class="animsition-link">RPAサービス</a></li>
                                <li><a href="/service/jutaku-development.html" class="animsition-link">受託開発</a></li>
                            </ul>
                        </li>
                        <li><a href="/works/" class="animsition-link">WORKS</a></li>
                        <li><a href="/recruit/" class="animsition-link">RECRUIT</a></li>
                        <li>
                            <a href="/company/" class="animsition-link">COMPANY</a>
                            <ul>
                                <li><a href="/company/vision.html" class="animsition-link">経営理念</a></li>
                                <li><a href="/company/about.html" class="animsition-link">会社概要</a></li>
                            </ul>
                        </li>
                        <!-- <li><a href="/blog/" target="_blank" class="animsition-link">BLOG</a></li> -->
                        <li><a href="/forms/contact/" class="animsition-link">CONTACT</a></li>
                    </ul>
                </nav>
            </div>
            <!--▲▲▲SPヘッダ▲▲▲-->

            <!-- ▼▼▼サイドメニュー▼▼▼ -->
            <aside id="sidebar">
                <h1 id="brand-logo">
                    <a href="/" class="animsition-link"><img src="/images/header_logo02.png" width="150" height="145" alt="株式会社クラウドスミス" /></a>
                </h1>
                <nav id="global-nav">
                    <ul>
                        <li class="sub-menu">
                            <a href="/service/" class="service animsition-link">SERVICE</a>
                            <ul class="sub-menu-nav">
                                <li class="mttl"><p>システム開発</p></li>
                                <li><a href="/service/web-application.html" class="animsition-link smenu">WEBシステム開発</a></li>
                                <li><a href="/service/client-application.html" class="animsition-link smenu">Windowsアプリ開発</a></li>
                                <li><a href="/service/iot.html" class="animsition-link smenu">IoT開発</a></li>
                                <li><a href="/service/server.html" class="animsition-link smenu">サーバー構築</a></li>
                                <li class="mttl"><p>WEBサイト構築</p></li>
                                <li><a href="/service/web-creation.html" class="animsition-link smenu">WEBサイト制作</a></li>
                                <li><a href="/service/cms-wordpress.html" class="animsition-link smenu">CMS-WordPress</a></li>
                                <li><a href="/service/cms-movabletype.html" class="animsition-link smenu">CMS-MovableType</a></li>
                                <li class="mttl"><p>クラウドサービス</p></li>
                                <li><a href="/service/rpa.html" class="animsition-link smenu">RPAサービス</a></li>
                                <li class="mttl mgb60px"><a href="/service/jutaku-development.html" class="animsition-link">受託開発</a></li>
                            </ul>
                        </li>
                        <li><a href="/works/" class="works animsition-link">WORKS</a></li>
                        <li><a href="/recruit/" class="recruit animsition-link">RECRUIT</a></li>
                        <li class="sub-menu">
                            <a href="/company/" class="company animsition-link">COMPANY</a>
                            <ul class="sub-menu-nav">
                                <li><a href="/company/vision.html" class="animsition-link">経営理念</a></li>
                                <li><a href="/company/about.html" class="animsition-link">会社概要</a></li>
                            </ul>
                        </li>
                        <!-- <li><a href="/blog/" target="_blank" class="blog animsition-link">BLOG</a></li> -->
                    </ul>
                </nav>
                <p class="global-navCONTACT">
                    <a href="/forms/contact/" class="animsition-link"><span>CONTACT</span></a>
                </p>
                <ul class="sideBNR">
                    <li>
                        <a href="/lp/rpa.html" target="_blank"><img src="/images/side_bnr01.jpg" width="210" height="66" alt="クラウド型RPA-RPA SMITH" /></a>
                    </li>
                </ul>
            </aside>
            <!-- ▲▲▲サイドメニュー▲▲▲ -->

            <!-- ▼▼▼メインコンテンツ▼▼▼ -->
            <div class="wrapper" id="1stPage">
                <!-- ▽▽▽ページタイトル▽▽▽ -->
                <div class="secTTL">
                    <h2>CONTACT<span>お問合せ</span></h2>
                </div>
                <!-- △△△ページタイトル△△△ -->

                <!--▽▽▽ページナビ▽▽▽-->
                <div id="pageNAVI">
                    <ul>
                        <li><a href="/">HOME</a></li>
                        <li>お問合せ</li>
                    </ul>
                </div>
                <!--△△△ページナビ△△△-->

                <!-- ▽▽▽ページコンテンツ▽▽▽ -->
                <div class="contents">
                    <div class="contactBOX">
                        <p class="infoBOX">入力内容をご確認ください。以下の内容で送信します。</p>

                        <form action="/thanks.php" name="search" method="post">
                            <dl>
                                <dt>ご希望の職種<span>必須</span></dt>
                                <dd>
                                    <p class="confirmation"><?php echo h($_POST['jobCategory']); ?></p>
                                </dd>
                                <dt>お問合せ内容<span>必須</span></dt>
                                <dd>
                                    <p class="confirmation"><?php echo h($CheckboxGroup2); ?></p>
                                </dd>
                                <dt>会社名<span>必須</span></dt>
                                <dd><p class="confirmation"><?php echo h($_POST['name1']); ?></p></dd>
                                <dt>URL</dt>
                                <dd><p class="confirmation"><?php echo h($_POST['url']); ?></p></dd>
                                <dt>お名前<span>必須</span></dt>
                                <dd><p class="confirmation"><?php echo h($_POST['name2']); ?></p></dd>
                                <dt>お名前(フリガナ)<span>必須</span></dt>
                                <dd><p class="confirmation"><?php echo h($_POST['name3']); ?></p></dd>
                                <dt>メールアドレス<span>必須</span></dt>
                                <dd><p class="confirmation"><?php echo h($_POST['mail']); ?></p></dd>
                                <dt>メールアドレス(確認)<span>必須</span></dt>
                                <dd><p class="confirmation"><?php echo h($_POST['mail2']); ?></p></dd>
                                <dt>電話番号<span>必須</span></dt>
                                <dd><p class="confirmation"><?php echo h($_POST['tel']); ?></p></dd>
                                <dt>弊社からのご連絡<span>必須</span></dt>
                                <dd><p class="confirmation"><?php echo h($renraku); ?></p></dd>
                                <dt>弊社を知ったきっかけ</dt>
                                <dd><p class="confirmation"><?php echo h($kikkake); ?></p></dd>
                                <dt>お問合せ内容</dt>
                                <dd>
                                    <p class="confirmation">
                                        <?php echo nl2br(h($_POST['request'])); ?>
                                    </p>
                                </dd>
                            </dl>

                            <input type="hidden" name="name1" value="<?=h($_POST['name1'])?>">

                            <div class="inqBTN">
                                <ul>
                                    <li><button type="submit" class="inqBTN02" formaction="/index.php">戻る</button></li>
                                    <li><button type="submit" class="inqBTN01">送信する</button></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- △△△ページコンテンツ△△△ -->

                <!-- ▽▽▽フッター▽▽▽ -->
                <footer class="section">
                    <div class="footer_inner">
                        <h2 class="sttl02 mgb50px">CONTACT</h2>
                        <p class="ft_contact">当社のサービスに関するご相談やお見積りのご依頼など、​<br class="pc" />お気軽にお問い合わせください</p>
                        <p class="ft_contactBTN inviewfadeInUp">
                            <a href="/forms/contact/"><span>お問い合わせ</span></a>
                        </p>
                        <p class="pagetopBTN">
                            <a href="#"><span>pagetop</span></a>
                        </p>
                        <div class="ft_bnr">
                            <ul>
                                <li class="inviewzoomIn">
                                    <a href="/lp/rpa.html" target="_blank"
                                        ><img src="/images/footer_bnr01.jpg" width="254" height="80" alt="クラウド型RPA-RPA SMITH" /></a
                                    >クラウド型のRPAサービス​「RPA SMITH」業務効率化をサポート！​
                                </li>
                                <li class="inviewzoomIn">
                                    <a href="https://www.sixapart.jp/pronet/partner/partner00929.html" target="_blank"
                                        ><img src="/images/mt/MT_224x80_white.jpg" width="224" height="80" alt="Movable TypeのProNetパートナー" /></a
                                    >Six Apart社「Movable Type」ProNetパートナーです。
                                </li>
                            </ul>
                        </div>
                        <div class="ft_logo">
                            <p>
                                <a href="/" class="animsition-link"
                                    ><img
                                        src="/images/footer_logo2.png"
                                        width="338"
                                        height="60"
                                        alt="株式会社クラウドスミス-WEBシステム,WEBサイト/ホームページ制作,RPAによる業務効率化,アプリ開発,サーバー構築"
                                /></a>
                            </p>
                            <ul>
                                <li><a href="/forms/contact/" class="animsition-link">お問い合わせ</a></li>
                                <li><a href="/privacy-policy.html" class="animsition-link">プライバシーポリシー</a></li>
                                <li><a href="/sitemap.html" class="animsition-link">サイトマップ</a></li>
                            </ul>
                        </div>
                        <p class="copyright">Copyright 2018 © CLOUD SMITH,Inc.</p>
                    </div>
                </footer>
                <!-- △△△フッター△△△ -->
            </div>
            <!-- ▲▲▲メインコンテンツ▲▲▲ -->
        </div>
    </body>
</html>
