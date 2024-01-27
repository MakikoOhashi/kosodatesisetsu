<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/9c9393e1a0.js" crossorigin="anonymous"></script>
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  
</head>
<body>
    <header>
        <div class="container">
        <nav class="navbar navbar-expand-sm bg-body-tertiary bg-opacity-10" id="navigation">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <i class="fa-solid fa-child-reaching fa-6x" style="color:blue;"></i>
              </a>
              <a class="navbar-brand" href="#">
                <h2>＊＊＊＊館</h2>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- ？？？JUSTIFY CONTENT ENDが効かない
                  ms-auto で解決　ナビゲーションバーの右よせ -->
                
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0  justify-content-end">
                  <li class="nav-item active">
                    <a class="nav-link" href="top.html">トップページ<br></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="support.html">子育て支援</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="consultation.html">相談</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="study.html">研究・研修</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="library.html">子育て図書館</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="meeting.html">レンタル会議室</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          

        </div>
    </header>

    <div class="carousel" id="carousel-section">
        <div><img src="istockphoto-674292156-1024x1024.jpg" style="width: 100%;" alt=""></div>
        <div><img src="istockphoto-674291410-1024x1024.jpg" style="width: 100%;" alt=""></div>
        <div><img src="istockphoto-1258724062-1024x1024.jpg" style="width: 100%;" alt=""></div>
    </div>


    <main>
        <div class="container">
          
          <div class="row mb-10">
            <div class="col-12 col-lg-10">
            <div class="col-12 mb-20 pb-10 text-center">
              <p >
                <h2>＊＊＊＊館ってどんなとこ？</h2>
                ＊＊市子育て支援総合センターこどもみらい館は、少子化、核家族化、地域コミュニティの希薄化など、子どもたちを取り巻く環境が著しく変化する中、子育てに不安や悩みを持つ保護者の方々を支援し、安心して子どもを産み、育てることのできる環境を整備する施策の一環として、平成１１年１２月に開館しました。
                <br>
                ＊＊＊＊館は、相談・研究・研修・情報発信・子育てネットワークの構築の５つの機能を柱に、保育所・幼稚園・認定こども園、私立・市立・国立の垣根を越えた「共同機構」としての取組を行う先進的な機能や規模を備え、多くの市民ボランティアの方々に各種事業にご参加いただくなど、市民との共汗を基本とした運営を行う「子育て支援の中核施設」です。
                <br>
                開館以来、気軽に集まり、交流し、相談や情報交換ができる施設として、毎日多くの市民の方々に利用され、親しまれています。
              </p>
            </div>

            <div class="py-5">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" 
                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">お知らせ</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" 
                data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">新着情報</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile2-tab" data-bs-toggle="tab" 
                data-bs-target="#profile2-tab-pane" type="button" role="tab" aria-controls="profile2-tab-pane" aria-selected="false">こどもみらい館へようこそ</button>
              </li>
            
            </ul>
            <div class="tab-content mb-10" id="myTabContent">
              <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                【年末年始休館日のお知らせ】
                １２月２８日（木）～１月４日（木）まで休館し、１月５日（金）から開館します。
                子育て図書館　年末年始の図書の返却期限はこちら
                
                【設備点検による＊＊＊＊館ホームページの閲覧停止】
                設備点検の実施に伴い、１２月２９日（金）午前９時から正午まで、こどもみらい館ホームページの閲覧ができなくなります。ご迷惑をおかけしますが、ご理解のほどよろしくお願いします。
                
                【子育て図書館臨時休館】
                子育て図書館は、蔵書点検に伴い、令和６年１月２９日（月）から同月３１日（水）まで臨時休館します。ご迷惑をおかけしますが、ご理解のほどよろしくお願いします。
                
                
                
                　
                【講座案内】ZOOM配信追加
                今こそ聞きたい！「非認知能力」を育む乳幼児・小学生の子育て講座
                12月１日～申込み開始！ぜひご参加ください！　詳細はこちら
                　　　　　　　　　　　　　　　　　　　 　　申込みはこちら
                （会場参加・託児の受付は終了しました。ZOOM配信のみ受付中）
               <hr>
                こどもみらい館の開館時間等の詳細はこちら
                
              </div>
              <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                  
                　➡　これまでの履歴はこちら　
              </div>
              <div class="tab-pane fade" id="profile2-tab-pane" role="tabpanel" aria-labelledby="profile2-tab" tabindex="0">
                ➡　こどもみらい館ってどんなとこ？

                　➡　永田萠館長ごあいさつ
                
                　➡　こどもみらい館の発行物・成果物
                
                　➡　Twitter　@kodomomirai_kan                
              </div>

            </div>
            </div> 
          </div>       

          <div class="col-12 col-lg-2 py-5 mx-8 text-center">
            <h4>カレンダー<hr></h4>
            <button type="button" class="btn btn-primary">こどもみらい館だより</button>
            <button type="button" class="btn btn-primary">イベント</button>
            <button type="button" class="btn btn-primary">健康相談</button>

            <h4>申し込み<hr></h4>
            <button type="button" class="btn btn-primary">こども元気ランド</button>
            <button type="button" class="btn btn-primary">子育て支援事業</button>
            <button type="button" class="btn btn-primary">共同機構研修</button>
            <button type="button" class="btn btn-primary">学生のための保育者養成講座</button>

            <h4>フロア案内<hr></h4>
            <button type="button" class="btn btn-info">B1</button>
            <button type="button" class="btn btn-info">1F</button>
            <button type="button" class="btn btn-info">2F</button>
            <button type="button" class="btn btn-info">3F</button>
            <button type="button" class="btn btn-info">4F</button>

            <h4>アクセス<hr></h4>
            <button type="button" class="btn btn-info">ACCESS</button>

          </div>





            <div class="col-sm-4 mb-3 mb-sm-0">
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">こどもみらい館について</h5>
                  <h6>About</h6>
                  <i class="fa-solid fa-children fa-5x"></i>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">子育て支援</h5>
                  <h6>Support</h6>
                  <i class="fa-solid fa-hands-holding-child fa-5x"></i>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="support.html" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">相談</h5>
                  <h6>Consultation</h6>
                  <i class="fa-solid fa-school-flag fa-5x"></i>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="consultation.html" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">研究・研修</h5>
                  <h6>Study</h6>
                  <i class="fa-solid fa-utensils fa-5x"></i>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="study.html" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">子育て図書館</h5>
                  <h6>Library</h6>
                  <i class="fa-regular fa-calendar-days fa-5x"></i>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="library.html" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">レンタル会議室</h5>
                  <h6>Rental Meeting Rooms</h6>
                  <i class="fa-solid fa-bed fa-5x "></i>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="meeting.html" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            
          </div> 

        </div>
    </main>

    <footer>
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 col-lg-6">
                  <h2><i class="fa-solid fa-child-reaching fa-4x"></i>
                     ＊＊＊＊館</h2>
                    <hr class="border border-danger border-2 opacity-50">
                    <p>〒000-0000 <br>
                      ＊＊市中京区間之町通竹屋町下る楠町601-1 <br>


                    <table class="table">
                        
                        <tbody>
                          <tr>
                            <th scope="row">種別</th>
                            <td>＊＊市子育て支援総合センター</td>
                          </tr>
                          <tr>
                            <th scope="row">休館日</th>
                            <td>毎週火曜日（祝日の場合は開館、翌平日休館）<br>
                              年末年始（12月28日~1月4日） <br></td>
                          </tr>
                          <tr>
                            <th scope="row">電話・FAX</th>
                            <td colspan="2">TEL.075-254-5001 <br>
                              FAX.075-212-9909 <br></td>
                          </tr>
                          <tr>
                            <th scope="row">実施事業</th>
                            <td colspan="2">地域交流・子育て支援</td>
                          </tr>
                         

                        </tbody>
                      </table>


                </div>

                <div class="col-12 col-lg-6">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6535.293652486511!2d135.761426!3d35.015545!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60010887d9882173%3A0x9fa9d0a8c1830faf!2z5Lqs6YO95biC5a2Q6IKy44Gm5pSv5o-057eP5ZCI44K744Oz44K_44O8IOOBk-OBqeOCguOBv-OCieOBhOmkqCDjgZPjganjgoLlhYPmsJfjg6njg7Pjg4k!5e0!3m2!1sja!2sjp!4v1703567563842!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>

        </div>

        <div class="text-center mt-5">
          <p>
            &copy; ＊＊＊＊KAN SAMPLE, All Rights Reserved.
          </p>
        </div>

    </footer>
    
    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- slick -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

   <!-- slickの読み込み -->
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="script.js"></script>
    <script>
        // カルーセル
   $('.carousel').slick({
     autoplay: true,
     dots: true,
     infinite: true,
     autoplaySpeed: 500,
     arrows: false,
     fade: true,
    cssEase: 'linear'
   });
        //ここにJavaScriptのコードを記述 scriptタグはbodyタグの最後に入れるようにしましょう。
    </script>
    <!-- slick ここまで -->

</body>
</html>