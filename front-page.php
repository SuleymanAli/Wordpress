<!-- <?= 'home' ?>
<br>
Front Page (Home) - <?= is_front_page(); ?>
<br>
Blog Home (Blog) - <?= is_home(); ?> -->
<?php get_header(); ?>

<?php get_template_part('template-parts/slider') ?>

<!-- Blog -->
<div id="blog">
  <div class="container">
    <div class="row border-bottom pb-4 mb-4">
      <div class="col-lg-9">
        <h4 class="breaking-news mt-5 mb-5 pl-3">Breaking News</h4>
        <div class="row">
          <div class="col-lg-4 border-right">
            <!-- <div class="blog-box">
              <img src="<?= AQUILA_BUILD_IMG_URI ?>/Photography/photograpy1.jpeg" class="img">
              <div class="blog-box-detail">
                <div class="blog-box-hashtag">
                  #photodaily
                </div>
                <h5 class="blog-box-heading">
                  Lorem ipsum dolor sit amet, consectetur.
                </h5>
                <div class="blog-box-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatem quaerat corporis minus
                  quibusdam provident maiores facilis ducimus expedita.
                </div>
              </div>
            </div> -->
            <?php get_template_part('template-parts/card') ?>
          </div>
          <div class="col-lg-4 border-right">
            <div class="blog-box">
              <img src="<?= AQUILA_BUILD_IMG_URI ?>/Photography/photograpy2.jpeg" class="img">
              <div class="blog-box-detail">
                <div class="blog-box-hashtag">
                  #makeportraits
                </div>
                <h5 class="blog-box-heading">
                  Lorem ipsum dolor sit amet, consectetur.
                </h5>
                <div class="blog-box-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatem quaerat corporis minus
                  quibusdam provident maiores facilis ducimus expedita.
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 border-right">
            <div class="blog-box">
              <img src="<?= AQUILA_BUILD_IMG_URI ?>/Photography/photograpy3.jpeg" class="img">
              <div class="blog-box-detail">
                <div class="blog-box-hashtag">
                  #photo-art
                </div>
                <h5 class="blog-box-heading">
                  Lorem ipsum dolor sit amet, consectetur.
                </h5>
                <div class="blog-box-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatem quaerat corporis minus
                  quibusdam provident maiores facilis ducimus expedita.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <h4 class="popular-post mt-5 mb-5 pl-3">Popular Post</h4>
        <div class="row">
          <div class="col-lg-12">
            <img src="<?= AQUILA_BUILD_IMG_URI ?>/sidebar1.png" class="img mb-2">
            <img src="<?= AQUILA_BUILD_IMG_URI ?>/sidebar2.png" class="img mb-2">
            <img src="<?= AQUILA_BUILD_IMG_URI ?>/sidebar3.png" class="img mb-2">
            <div class="list-group">
              <div class="list-group-item py-2 rounded-0">
                <a href="#"># Social media</a>
              </div>
              <div class="list-group-item py-2">
                <a href="#"># Careers</a>
              </div>
              <div class="list-group-item py-2">
                <a href="#"># Health</a>
              </div>
              <div class="list-group-item py-2">
                <a href="#"># Blogging</a>
              </div>
              <div class="list-group-item py-2">
                <a href="#"># Book</a>
              </div>
              <div class="list-group-item py-2">
                <a href="#"># Fitness</a>
              </div>
              <div class="list-group-item py-2 rounded-0">
                <a href="#"># Marketing</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row border-bottom pb-4 mb-4">
      <div class="col-lg-3 border-right">
        <div class="blog-box">
          <img src="<?= AQUILA_BUILD_IMG_URI ?>/Fashion/fashion1.jpeg" class="img">
          <div class="blog-box-detail">
            <div class="blog-box-hashtag">
              #beautytips
            </div>
            <h5 class="blog-box-heading">
              Lorem ipsum dolor sit amet, consectetur.
            </h5>
            <div class="blog-box-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatem quaerat corporis minus
              quibusdam provident maiores facilis ducimus expedita.
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 border-right">
        <div class="blog-box">
          <img src="<?= AQUILA_BUILD_IMG_URI ?>/Fashion/fashion2.jpeg" class="img">
          <div class="blog-box-detail">
            <div class="blog-box-hashtag">
              #fashion
            </div>
            <h5 class="blog-box-heading">
              Lorem ipsum dolor sit amet, consectetur.
            </h5>
            <div class="blog-box-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatem quaerat corporis minus
              quibusdam provident maiores facilis ducimus expedita.
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 border-right">
        <div class="blog-box">
          <img src="<?= AQUILA_BUILD_IMG_URI ?>/Fashion/fashion3.jpeg" class="img">
          <div class="blog-box-detail">
            <div class="blog-box-hashtag">
              #mode
            </div>
            <h5 class="blog-box-heading">
              Lorem ipsum dolor sit amet, consectetur.
            </h5>
            <div class="blog-box-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatem quaerat corporis minus
              quibusdam provident maiores facilis ducimus expedita.
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <img class"img" src="<?= AQUILA_BUILD_IMG_URI ?>/Fashion/fashion4.jpeg">
      </div>
    </div>
    <div class="row pb-4 mb-4">
      <div class="col-lg-9">
        <div class="row border-bottom pb-4 mb-4">
          <div class="col-lg-4 border-right">
            <div class="blog-box">
              <img src="<?= AQUILA_BUILD_IMG_URI ?>/Cooking/cooking1.jpeg" class="img">
              <div class="blog-box-detail">
                <div class="blog-box-hashtag">
                  #cooking
                </div>
                <h5 class="blog-box-heading">
                  Lorem ipsum dolor sit amet, consectetur.
                </h5>
                <div class="blog-box-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatem quaerat corporis minus
                  quibusdam provident maiores facilis ducimus expedita.
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 border-right">
            <div class="blog-box">
              <img src="<?= AQUILA_BUILD_IMG_URI ?>/Cooking/cooking2.jpeg" class="img">
              <div class="blog-box-detail">
                <div class="blog-box-hashtag">
                  #recipes
                </div>
                <h5 class="blog-box-heading">
                  Lorem ipsum dolor sit amet, consectetur.
                </h5>
                <div class="blog-box-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatem quaerat corporis minus
                  quibusdam provident maiores facilis ducimus expedita.
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 border-right">
            <div class="blog-box">
              <img src="<?= AQUILA_BUILD_IMG_URI ?>/Cooking/cooking3.jpeg" class="img">
              <div class="blog-box-detail">
                <div class="blog-box-hashtag">
                  #chicken
                </div>
                <h5 class="blog-box-heading">
                  Lorem ipsum dolor sit amet, consectetur.
                </h5>
                <div class="blog-box-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatem quaerat corporis minus
                  quibusdam provident maiores facilis ducimus expedita.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 border-right">
            <div class="blog-box">
              <img src="<?= AQUILA_BUILD_IMG_URI ?>/Travel/travel1.jpeg" class="img">
              <div class="blog-box-detail">
                <div class="blog-box-hashtag">
                  #travel
                </div>
                <h5 class="blog-box-heading">
                  Lorem ipsum dolor sit amet, consectetur.
                </h5>
                <div class="blog-box-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatem quaerat corporis minus
                  quibusdam provident maiores facilis ducimus expedita.
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 border-right">
            <div class="blog-box">
              <img src="<?= AQUILA_BUILD_IMG_URI ?>/Travel/travel2.jpeg" class="img">
              <div class="blog-box-detail">
                <div class="blog-box-hashtag">
                  #sight seeing
                </div>
                <h5 class="blog-box-heading">
                  Lorem ipsum dolor sit amet, consectetur.
                </h5>
                <div class="blog-box-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatem quaerat corporis minus
                  quibusdam provident maiores facilis ducimus expedita.
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 border-right">
            <div class="blog-box">
              <img src="<?= AQUILA_BUILD_IMG_URI ?>/Travel/travel3.jpeg" class="img">
              <div class="blog-box-detail">
                <div class="blog-box-hashtag">
                  #tourism
                </div>
                <h5 class="blog-box-heading">
                  Lorem ipsum dolor sit amet, consectetur.
                </h5>
                <div class="blog-box-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatem quaerat corporis minus
                  quibusdam provident maiores facilis ducimus expedita.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="row">
          <div class="col-lg-12">
            <div class="blog-box" style="padding: 15px">
              <h5 class="popular-post-second pl-3 mb-3">Popular Posts</h5>
              <img sc="<?= AQUILA_BUILD_IMG_URI ?>/populeryazilar1.png" class="img">
              <div class="blog-box-heading py-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet?
              </div>
              <img sc="<?= AQUILA_BUILD_IMG_URI ?>/populeryazilar2.png" class="img">
              <div class="blog-box-heading py-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet?
              </div>
              <img sc="<?= AQUILA_BUILD_IMG_URI ?>/populeryazilar3.png" class="img">
              <div class="blog-box-heading py-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet?
              </div>
              <img sc="<?= AQUILA_BUILD_IMG_URI ?>/populeryazilar4.png" class="img">
              <div class="blog-box-heading py-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet?
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Dijitolog TV -->
<div id="tv">
  <div class="container">
    <div class="row">
      <h3 class="tv pl-3 mb-5">Our TV</h3>
      <div class="row border-bottom pb-5 mb-5">
        <div class="col-lg-3 border-right">
          <div class="tv-box mx-lg-2 border-0 text-white">
            <img class="img rounded-0" src=" <?= AQUILA_BUILD_IMG_URI ?>/OurTV/tv1.jpg">
            <i class="far fa-play-circle"></i>
            <h5 class="tv-box-heading">Lorem ipsum dolor.</h5>
          </div>
        </div>
        <div class="col-lg-3 border-right">
          <div class="tv-box mx-lg-2 border-0 text-white">
            <img class="img rounded-0" src=" <?= AQUILA_BUILD_IMG_URI ?>/OurTV/tv2.jpeg">
            <i class="far fa-play-circle"></i>
            <h5 class="tv-box-heading">Lorem ipsum dolor.</h5>
          </div>
        </div>
        <div class="col-lg-3 border-right">
          <div class="tv-box mx-lg-2 border-0 text-white">
            <img class="img rounded-0" src=" <?= AQUILA_BUILD_IMG_URI ?>/OurTV/tv3.jpeg">
            <i class="far fa-play-circle"></i>
            <h5 class="tv-box-heading">Lorem ipsum dolor.</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="tv-box mx-lg-2 border-0 text-white">
            <img class="img rounded-0" src=" <?= AQUILA_BUILD_IMG_URI ?>/OurTV/tv4.jpeg">
            <i class="far fa-play-circle"></i>
            <h5 class="tv-box-heading">Lorem ipsum dolor.</h5>
          </div>
        </div>
      </div>
      <div class="row pb-5">
        <div class="col-lg-3 border-right">
          <div class="blog-box">
            <img src="<?= AQUILA_BUILD_IMG_URI ?>/Business/business1.jpeg" class="img">
            <div class="blog-box-detail">
              <div class="blog-box-hashtag">
                #business
              </div>
              <h5 class="blog-box-heading">
                Lorem ipsum dolor sit amet, consectetur.
              </h5>
              <div class="blog-box-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatem quaerat corporis minus
                quibusdam provident maiores facilis ducimus expedita.
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 border-right">
          <div class="blog-box">
            <img src="<?= AQUILA_BUILD_IMG_URI ?>/Business/business2.jpeg" class="img">
            <div class="blog-box-detail">
              <div class="blog-box-hashtag">
                #management
              </div>
              <h5 class="blog-box-heading">
                Lorem ipsum dolor sit amet, consectetur.
              </h5>
              <div class="blog-box-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatem quaerat corporis minus
                quibusdam provident maiores facilis ducimus expedita.
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 border-right">
          <div class="blog-box">
            <img src="<?= AQUILA_BUILD_IMG_URI ?>/Business/business3.jpg" class="img">
            <div class="blog-box-detail">
              <div class="blog-box-hashtag">
                #profits
              </div>
              <h5 class="blog-box-heading">
                Lorem ipsum dolor sit amet, consectetur.
              </h5>
              <div class="blog-box-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatem quaerat corporis minus
                quibusdam provident maiores facilis ducimus expedita.
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="blog-box">
            <img src="<?= AQUILA_BUILD_IMG_URI ?>/Business/business4.jpeg" class="img">
            <div class="blog-box-detail">
              <div class="blog-box-hashtag">
                #sales
              </div>
              <h5 class="blog-box-heading">
                Lorem ipsum dolor sit amet, consectetur.
              </h5>
              <div class="blog-box-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatem quaerat corporis minus
                quibusdam provident maiores facilis ducimus expedita.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row pb-5">
      <div class="col-lg-12 p-4 border">
        <div class="learn-more">
          <a href="#">Watch Learn More</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>