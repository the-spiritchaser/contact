<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>株式会社クラウドスミス</title>
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" type="text/css" href="css/base.css" />
        <link rel="stylesheet" type="text/css" href="css/set.css" />
        <link href="https://fonts.googleapis.comcss?family=Noto+Sans+JP:400,500,700,900&amp;subset=japanese" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.0.0/velocity.min.js"></script>
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

    <body>
        <div class="animsition">
            <!--▼▼▼SPヘッダ▼▼▼-->
            <div id="SPhead">
                <nav>
                    <p id="SPlogo">
                        <a href="/"><img src="images/header_logo01.png" width="226" height="40" alt="株式会社クラウドスミス" /></a>
                    </p>
                    <ul>
                        <li>
                            <a href="/service/" class="animsition-link">SERVICE</a>
                            <ul>
                                <li><a href="/service/#secproduct_s01" class="animsition-link">システム開発</a></li>
                                <li><a href="/service/#secproduct_s02" class="animsition-link">WEBサイト構築</a></li>
                                <li><a href="/service/#secproduct_s03" class="animsition-link">クラウドサービス</a></li>
                            </ul>
                        </li>
                        <li><a href="/works/" class="animsition-link">WORKS</a></li>
                        <li><a href="/recruit/" class="animsition-link">RECRUIT</a></li>
                        <li>
                            <a href="/company/" class="animsition-link">COMPANY</a>
                            <ul>
                                <li><a href="/company/message.html" class="animsition-link">経営理念</a></li>
                                <li><a href="/company/about.html" class="animsition-link">会社概要</a></li>
                            </ul>
                        </li>
                        <li><a href="/blog/" target="_blank" class="animsition-link">BLOG</a></li>
                        <li><a href="/forms/contact/" class="animsition-link">CONTACT</a></li>
                    </ul>
                </nav>
            </div>
            <!--▲▲▲SPヘッダ▲▲▲-->

            <!-- ▼▼▼サイドメニュー▼▼▼ -->
            <aside id="sidebar">
                <h1 id="brand-logo">
                    <a href="/" class="animsition-link"><img src="images/header_logo02.png" width="150" height="145" alt="株式会社クラウドスミス" /></a>
                </h1>
                <nav id="global-nav">
                    <ul>
                        <li class="sub-menu">
                            <a href="/service/" class="service animsition-link">SERVICE</a>
                            <ul class="sub-menu-nav">
                                <li><a href="/service/#secproduct_s01" class="animsition-link">システム開発</a></li>
                                <li><a href="/service/#secproduct_s02" class="animsition-link">WEBサイト構築</a></li>
                                <li><a href="/service/#secproduct_s03" class="animsition-link">クラウドサービス</a></li>
                            </ul>
                        </li>
                        <li><a href="/works/" class="works animsition-link">WORKS</a></li>
                        <li><a href="/recruit/" class="recruit animsition-link">RECRUIT</a></li>
                        <li class="sub-menu">
                            <a href="/company/" class="company animsition-link">COMPANY</a>
                            <ul class="sub-menu-nav">
                                <li><a href="/company/message.html" class="animsition-link">経営理念</a></li>
                                <li><a href="/company/about.html" class="animsition-link">会社概要</a></li>
                            </ul>
                        </li>
                        <li><a href="/blog/" target="_blank" class="blog animsition-link">BLOG</a></li>
                    </ul>
                </nav>
                <p class="global-navCONTACT">
                    <a href="/forms/contact/" class="animsition-link"><span>CONTACT</span></a>
                </p>
                <ul class="sideBNR">
                    <li>
                        <a href="/lp/rpa.html" target="_blank"><img src="images/side_bnr01.jpg" width="210" height="66" alt="" /></a>
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
                        <form action="/confirm.php" name="search" method="post">
                            <!-- <p class="errorBOX">正しく入力されていない項目があります。内容を確認のうえ、もう一度ご入力ください。</p> -->
                            <dl>
                                <dt>ご希望の職種<span>必須</span></dt>
                                <dd class="form-select">
                                    <select name="jobCategory" required="required">
                                        <option value="">選択してください</option>
                                        <option value="1">マネージャー、フルスタックエンジニア</option>
                                        <option value="2">オープン系システムエンジニア、プログラマー</option>
                                        <option value="3">WEB系エンジニア、プログラマー</option>
                                        <option value="4">フロントエンドエンジニア、デザイナー</option>
                                    </select>
                                </dd>

                                <dt>お問合せ内容<span>必須</span></dt>
                                <dd id="form_select">
                                    <input type="checkbox" name="CheckboxGroup2" value="チェックボックス" id="Group1_1" class="checkbox01" /><label
                                        for="Group1_1"
                                        class="check_label"
                                        >システム開発</label
                                    >
                                    <input type="checkbox" name="CheckboxGroup2" value="チェックボックス" id="Group1_2" class="checkbox01" /><label
                                        for="Group1_2"
                                        class="check_label"
                                        >WEBサイト構築</label
                                    >
                                    <input type="checkbox" name="CheckboxGroup2" value="チェックボックス" id="Group1_3" class="checkbox01" /><label
                                        for="Group1_3"
                                        class="check_label"
                                        >RPAサービス</label
                                    >
                                    <input type="checkbox" name="CheckboxGroup2" value="チェックボックス" id="Group1_4" class="checkbox01" /><label
                                        for="Group1_4"
                                        class="check_label"
                                        >サーバー構築</label
                                    >
                                    <input type="checkbox" name="CheckboxGroup2" value="チェックボックス" id="Group1_5" class="checkbox01" /><label
                                        for="Group1_5"
                                        class="check_label"
                                        >その他</label
                                    >
                                </dd>
                                <dt>会社名<span>必須</span></dt>
                                <dd>
                                    <input
                                        type="text"
                                        name="name1"
                                        id="name1"
                                        class="inqTYPE01"
                                        maxlength="50"
                                        value=""
                                        placeholder="株式会社クラウドスミス"
                                        required
                                    />
                                    <!-- <p class="errorTXT">会社名を入力してください</p> -->
                                    <!-- <input class="inqTYPE01 error"> -->
                                </dd>
                                <dt>URL</dt>
                                <dd>
                                    <input type="url" name="url" id="url" class="inqTYPE01" maxlength="50" value="" placeholder="cloud@〇〇〇.jp" required />
                                </dd>
                                <dt>お名前<span>必須</span></dt>
                                <dd>
                                    <input type="text" name="name2" id="name2" class="inqTYPE01" maxlength="50" value="" placeholder="蔵人　スミス" required />
                                </dd>
                                <dt>お名前(フリガナ)<span>必須</span></dt>
                                <dd>
                                    <input
                                        type="text"
                                        name="name3"
                                        id="name3"
                                        class="inqTYPE01"
                                        maxlength="50"
                                        value=""
                                        placeholder="クラウド　スミス"
                                        required
                                    />
                                </dd>
                                <dt>メールアドレス<span>必須</span></dt>
                                <dd>
                                    <input
                                        type="email"
                                        name="mail"
                                        id="mail"
                                        class="inqTYPE01"
                                        maxlength="50"
                                        value=""
                                        placeholder="kuraudo@〇〇〇.jp"
                                        required
                                    />
                                </dd>
                                <dt>メールアドレス(確認)<span>必須</span></dt>
                                <dd>
                                    <input
                                        type="text"
                                        name="mail2"
                                        id="mail2"
                                        class="inqTYPE01"
                                        maxlength="50"
                                        value=""
                                        placeholder="kuraudo@〇〇〇.jp"
                                        required
                                    />
                                </dd>
                                <dt>電話番号<span>必須</span></dt>
                                <dd><input type="tel" name="tel" id="tel" class="inqTYPE01" maxlength="50" value="" placeholder="0000-456-7890" required /></dd>
                                <dt>弊社からのご連絡<span>必須</span></dt>
                                <dd class="checkboxDD">
                                    <label><input type="checkbox" name="renraku" value="1" />&nbsp;お電話でのご連絡</label><br />
                                    <label><input type="checkbox" name="renraku" value="2" />&nbsp;メールでのご連絡</label>
                                </dd>
                                <dt>弊社を知ったきっかけ</dt>
                                <dd class="checkboxDD">
                                    <label><input type="checkbox" name="kikkake" value="1" />&nbsp;WEB検索</label><br />
                                    <label><input type="checkbox" name="kikkake" value="2" />&nbsp;ブログ記事</label><br />
                                    <label><input type="checkbox" name="kikkake" value="2" />&nbsp;ご紹介</label><br />
                                    <label><input type="checkbox" name="kikkake" value="2" />&nbsp;その他</label>
                                </dd>
                                <dt>お問合せ内容</dt>
                                <dd><textarea name="request" id="request" class="inqTYPE01 mgb05" cols="40" rows="4"></textarea></dd>
                            </dl>
                            <p class="mgb15px">
                                当社の<a href="/privacy-policy.html" class="animsition-link">「プライバシーポリシー」</a
                                >に同意の上ご利用ください。同意していただける場合は下の[同意する]をクリックしてください。
                            </p>
                            <div class="position_radio">
                                <input type="radio" name="radio1" value="1" onclick="" id="formDisagree" checked />
                                <label for="formDisagree">&nbsp;同意しない</label>
                                <input type="radio" name="radio1" value="0" onclick="" id="formAgree" />
                                <label for="formAgree">&nbsp;同意する</label>
                            </div>
                            <div class="inqBTN">
                                <ul>
                                    <li><button type="reset" class="inqBTN02" href="#">リセット</button></li>
                                    <li><button type="submit" class="inqBTN01">確認画面へ</button></li>
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
                        <p class="ft_contact">まずは、お気軽にご連絡ください。</p>
                        <p class="ft_contactBTN inviewfadeInUp">
                            <a href="/forms/contact/"><span>CONTACT US</span></a>
                        </p>
                        <p class="pagetopBTN">
                            <a href="#1stPage"><span>pagetop</span></a>
                        </p>
                        <div class="ft_bnr">
                            <ul>
                                <li class="inviewzoomIn">
                                    <a href="/lp/rpa.html" target="_blank"><img src="images/footer_bnr01.jpg" width="254" height="80" alt="" /></a
                                    >クラウド型のRPAサービス​「RPA SMITH」業務効率化をサポート！​
                                </li>
                            </ul>
                        </div>
                        <div class="ft_logo">
                            <p>
                                <a href="/" class="animsition-link"
                                    ><img src="images/footer_logo2.png" width="338" height="60" alt="株式会社クラウドスミス"
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
