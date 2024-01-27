
<?php get_header();?>

<!-- キャプションありのカルーセル -->

  <div id="carouselExample" class="carousel slide carousel-fade carousel-section d-none d-lg-block" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="<?php echo get_template_directory_uri(); ?>/main-with-bird1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-lg-block">
          <h2>＊＊＊館ってどんなとこ？</h2>
          <p>**市子育て支援総合センター＊＊＊館は、少子化、核家族化、地域コミュニティの希薄化など、子どもたちを取り巻く環境が著しく変化する中、子育てに不安や悩みを持つ保護者の方々を支援し、安心して子どもを産み、育てることのできる環境を整備する施策の一環として、平成１１年１２月に開館しました。
          <!-- <br> 
            ＊＊＊館は、相談・研究・研修・情報発信・子育てネットワークの構築の５つの機能を柱に、保育所・幼稚園・認定こども園、私立・市立・国立の垣根を越えた「共同機構」としての取組を行う先進的な機能や規模を備え、多くの市民ボランティアの方々に各種事業にご参加いただくなど、市民との共汗を基本とした運営を行う「子育て支援の中核施設」です。
          <br>-->
            開館以来、気軽に集まり、交流し、相談や情報交換ができる施設として、毎日多くの市民の方々に利用され、親しまれています。
          </p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="<?php echo get_template_directory_uri(); ?>/main-with-bird2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-lg-block">
          <h2>＊＊＊館ってどんなとこ？</h2>
          <p>**市子育て支援総合センター＊＊＊館は、少子化、核家族化、地域コミュニティの希薄化など、子どもたちを取り巻く環境が著しく変化する中、子育てに不安や悩みを持つ保護者の方々を支援し、安心して子どもを産み、育てることのできる環境を整備する施策の一環として、平成１１年１２月に開館しました。
          <!-- <br> 
            ＊＊＊館は、相談・研究・研修・情報発信・子育てネットワークの構築の５つの機能を柱に、保育所・幼稚園・認定こども園、私立・市立・国立の垣根を越えた「共同機構」としての取組を行う先進的な機能や規模を備え、多くの市民ボランティアの方々に各種事業にご参加いただくなど、市民との共汗を基本とした運営を行う「子育て支援の中核施設」です。
          <br> -->
            開館以来、気軽に集まり、交流し、相談や情報交換ができる施設として、毎日多くの市民の方々に利用され、親しまれています。
          </p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="false"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- キャプションありのカルーセル ここまで-->

<!-- キャプションなしのカルーセル -->
<div id="carouselExample" class="carousel slide carousel-fade carousel-section d-lg-none d-xl-none" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="<?php echo get_template_directory_uri(); ?>/main-img-b1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-lg-block">
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="<?php echo get_template_directory_uri(); ?>/main-img-b2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-lg-block">
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="false"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- キャプションなしのカルーセル ここまで-->

<!-- 狭幅の場合　カルーセル下にナビゲーションを移動 -->
<nav class="navbar navbar-expand-xxl d-lg-none d-xl-none bottom-nav" id="navigation">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarSupportedContent1">
                <div class="offcanvas-header">
                <h5 class="offcanvas-title text-center" id="offcanvasNavbarLabel">＊＊＊館</h5>
              </div>                
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0  justify-content-end">
                  <li>
                  <img class="logo_img" src="<?php echo get_template_directory_uri(); ?>/1194.png" alt="">                  
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="/"><button type="button" class="btn btn-outline-primary">トップページ</button></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo home_url(); ?>/support"><button type="button" class="btn btn-outline-primary">子育て支援</button></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo home_url(); ?>/consultation"><button type="button" class="btn btn-outline-primary">相談</button></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo home_url(); ?>/study"><button type="button" class="btn btn-outline-primary">研究・研修</button></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo home_url(); ?>/library"><button type="button" class="btn btn-outline-primary">子育て図書館</button></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo home_url(); ?>/meeting"><button type="button" class="btn btn-outline-primary">レンタル会議室</button></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
 <!-- 狭幅の場合　カルーセル下にナビゲーションを移動 ここまで-->

    <main>
        <div class="container">
          
          <div class="row mb-10 back-image-parent">
            <!-- 狭幅でキャプション表示できない時　下に説明表示する -->
            <div style="margin-top:30px;" class="col-12 col-lg-12 px-5 py-5 d-lg-none d-xl-none">
              <div class="col-12 text-center">
                <p>
                  <h2 class="out-caption"><p>＊＊＊館って</p>どんなとこ？</h2>
                  <div class="text-start">
                  <p>**市子育て支援総合センター***館は、少子化、核家族化、地域コミュニティの希薄化など、子どもたちを取り巻く環境が著しく変化する中、</p> <p>子育てに不安や悩みを持つ保護者の方々を支援し、安心して子どもを産み、育てることのできる環境を整備する施策の一環として、平成１１年１２月に開館しました。
                  </p><!-- <br>
                  ＊＊＊館は、相談・研究・研修・情報発信・子育てネットワークの構築の５つの機能を柱に、保育所・幼稚園・認定こども園、私立・市立・国立の垣根を越えた「共同機構」としての取組を行う先進的な機能や規模を備え、多くの市民ボランティアの方々に各種事業にご参加いただくなど、市民との共汗を基本とした運営を行う「子育て支援の中核施設」です。
                  <br>-->
                  開館以来、気軽に集まり、交流し、相談や情報交換ができる施設として、<p> 毎日多くの市民の方々に利用され、親しまれています。</p>
                </p></div>
              </div>
            </div>
            <!-- 狭幅でキャプション表示できない時　下に説明表示する ここまで-->

            <div class="col-12 col-lg-10 mt-5 back-image-z">
              <div class="py-5 px-5">
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
                      data-bs-target="#profile2-tab-pane" type="button" role="tab" aria-controls="profile2-tab-pane" aria-selected="false">＊＊＊館へようこそ</button>
                    </li>
                </ul>
                <div class="tab-content mb-10" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                      
                      <?php
                        $args = array(
                          'post_type'   =>'post',
                          'category_name' =>'notice',
                          'posts_per_page' => 5,
                        );
                        $posts = get_posts($args);
                      ?>
                    
                      <?php foreach($posts as $post): ?>
                      <?php setup_postdata($post); ?>

                      <div class="pt-2"></div>
                      <p class="">
                        <?php echo get_the_date(); ?>
                      </p>

                  
                      <a class="fs-5" href="<?php echo home_url(); ?>/category/notice">
                        <?php the_title(); ?>
                      </a>

                      
                      <div class="pb-5"></div>

                      <?php endforeach; ?>
                      <?php wp_reset_postdata(); ?>

                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                      <?php
                        $args = array(
                          'post_type'   =>'post',
                          'category_name' =>'news',
                          'posts_per_page' => 5,
                        );
                        $posts = get_posts($args);
                      ?>
                      
                      <?php foreach($posts as $post): ?>
                      <?php setup_postdata($post); ?>

                      <div class="pt-2"></div>
                      <p>
                        <?php echo get_the_date(); ?>
                      </p>


                      <a class="fs-5" href="<?php echo home_url(); ?>/category/news">
                        <?php the_title(); ?>
                      </a>

                      
                      <div class="pb-5"></div>

                      <?php endforeach; ?>
                      <?php wp_reset_postdata(); ?>

                        <br>　➡　これまでの履歴はこちら　
                    </div>
                    <div class="tab-pane fade" id="profile2-tab-pane" role="tabpanel" aria-labelledby="profile2-tab" tabindex="0">
                      <?php
                        $args = array(
                          'post_type'   =>'page',
                          'category_name' =>'welcome',
                          'posts_per_page' => 4,
                        );
                        $posts = get_posts($args);
                      ?>
                      
                      <?php foreach($posts as $post): ?>
                      <?php setup_postdata($post); ?>
                      <br><br>
                      <a class="fs-5" href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                      </a>
                      <div class="pb-5"></div>
                      <?php endforeach; ?>
                      <?php wp_reset_postdata(); ?>
                        
                    </div>

                </div>

              </div> 
            </div>
            
            <div class="col-12 col-lg-10 back-image">
              <img src="<?php echo get_template_directory_uri(); ?>/13326_color.png"></img>
            </div>

          <div class="col-12 col-lg-2 py-5 mx-8 text-center side-bar">
           <?php get_sidebar(); ?>
          </div>

            <div class="col-sm-4 mb-3 mb-sm-0 ">
              <div class="card text-center">
                <div class="card-body bg-primary-subtle">
                  <h5 class="card-title">＊＊＊館について</h5>
                  <h6 class="card-title">About</h6>
                  <a style="text-decoration:none;" href="">
                  <img class="card-img-b mx-0" src="<?php echo get_template_directory_uri()?>/1151.png" alt="">
                  </a>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mb-3">
              <div class="card text-center">
                <div class="card-body bg-primary-subtle">
                  <h5 class="card-title">子育て支援</h5>
                  <h6 class="card-title">Support</h6>
                  <a style="text-decoration:none;" href="">
                  <img class="card-img-b mx-0" src="<?php echo get_template_directory_uri()?>/20.png" alt="">
                  </a>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mb-3">
              <div class="card text-center">
                <div class="card-body bg-primary-subtle">
                  <h5 class="card-title">相談</h5>
                  <h6 class="card-title">Consultation</h6>
                  <a style="text-decoration:none;" href="">
                  <img class="card-img-b mx-0" src="<?php echo get_template_directory_uri()?>/580.png" alt="">
                  </a>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mb-3">
              <div class="card text-center">
                <div class="card-body bg-primary-subtle">
                  <h5 class="card-title">研究・研修</h5>
                  <h6 class="card-title">Study</h6>
                  <a style="text-decoration:none;" href="">
                  <img class="card-img-b mx-0" src="<?php echo get_template_directory_uri()?>/1455.png" alt="">
                  </a>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mb-3">
              <div class="card text-center">
                <div class="card-body bg-primary-subtle">
                  <h5 class="card-title">子育て図書館</h5>
                  <h6 class="card-title">Library</h6>
                  <a style="text-decoration:none;" href="">
                  <img class="card-img-b mx-0" src="<?php echo get_template_directory_uri()?>/799.png" alt="">
                  </a>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mb-3">
              <div class="card text-center">
                <div class="card-body bg-primary-subtle">
                  <h5 class="card-title">レンタル会議室</h5>
                  <h6 class="card-title">Rental Meeting Rooms</h6>
                  <a style="text-decoration:none;" href="">
                  <img class="card-img-b mx-0" src="<?php echo get_template_directory_uri()?>/1410.png" alt="">
                  </a>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
            
          </div> 

        </div>
    </main>

    <?php get_footer();?>