<?php
include_once "./_header.php"
?>
  <main class="bz-main">
    <!-- main visual -->
    <section class="bz-sec position-relative">
      <div id="bzSlide" class="carousel slide">
        <ul class="carousel-inner">
          <li class="carousel-item active" data-bs-interval="5000">
            <img src="./assets/img/index-top-visual-m-1.png" alt="요빙빙 소개" class="w-100 top-visual-m">
            <img src="./assets/img/index-top-visual-1.png" alt="요빙빙 소개" class="w-100 top-visual">
          </li>
          <li class="carousel-item" data-bs-interval="5000">
            <img src="./assets/img/index-top-visual-m-2.png" alt="요빙빙 소개" class="w-100 top-visual-m">
            <img src="./assets/img/index-top-visual-2.png" alt="요빙빙 소개" class="w-100 top-visual">
          </li>
        </ul>
      </div>
      <a class="carousel-control-prev" type="button" data-bs-target="#bzSlide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" type="button" data-bs-target="#bzSlide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </section>
    <!-- menu 바로가기 -->
    <section class="bz-sec">
      <div class="container">
        <div class="row row-cols-1">
          <div class="col bz-tit-box">
            <h2 class="bz-tit">MENU</h2>
          </div>
          <div class="col bz-item-box">
            <div class="row row-cols-1 row-cols-lg-3">
              <div class="col">
                <div class="bz-tit-box">
                  <h3 class="bz-tit">요거트 아이스크림</h3>
                </div>
                <div class="bz-img-box">
                  <img src="./assets/img/index-menu-1.png" alt="요거트 아이스크림" class="img-fluid">
                </div>
              </div>
              <div class="col">
                <div class="bz-tit-box">
                  <h3 class="bz-tit">시그니처 메뉴</h3>
                </div>
                <div class="bz-img-box">
                  <img src="./assets/img/index-menu-2.png" alt="시그니처 메뉴" class="img-fluid">
                </div>
              </div>
              <div class="col">
                <div class="bz-tit-box">
                  <h3 class="bz-tit">토핑</h3>
                </div>
                <div class="bz-img-box">
                  <img src="./assets/img/index-menu-3.png" alt="토핑" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
          <div class="col bz-btn-box">
            <a href="./menu.php" class="btn btn-secondary bz-btn" type="button">자세히 보러가기<i class="bi bi-arrow-right-short"></i></a>
          </div>
        </div>
      </div>
    </section>
    <!-- franchise 바로가기 -->
    <section class="bz-sec index-fc">
      <div class="container">
        <div class="row row-cols-1">
          <div class="col bz-tit-box">
            <h2 class="bz-tit text-white">FRANCHISE</h2>
          </div>
          <div class="col bz-item-box">
            <div class="row row-cols-1 row-cols-lg-3 g-4">
              <div class="col">
                <div class="bz-tit-box bz-tit-lg-left">
                  <h3 class="bz-tit text-white">요거트 아이스크림 전문점 : 요빙빙</h3>
                </div>
                <div class="bz-txt-box">
                  <p class="bz-txt text-white">신선한 맛과 건강한 즐거움이 만나는 곳, 요빙빙에서 프리미엄 요거트 아이스크림의 세계로 여러분을 초대합니다.</p>
                </div>
                <div class="bz-btn-box bz-btn-lg-left">
                  <a href="./franchise.php" class="btn btn-light bz-btn" type="button">자세히 보러가기<i class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
              <div class="col">
                <div class="d-flex flex-column bz-card">
                  <div class="bz-icon-box text-center">
                    <i class="bi bi-1-square-fill bz-i-num-square"></i>
                  </div>
                  <div class="bz-icon-box text-center">
                    <img src="./assets/img/index-fc-icon-1.png" alt="" class="img-fluid">
                  </div>
                  <div class="bz-tit-box">
                    <h3 class="bz-tit">브랜드 특징</h3>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="d-flex flex-column bz-card">
                  <div class="bz-icon-box text-center">
                    <i class="bi bi-2-square-fill bz-i-num-square"></i>
                  </div>
                  <div class="bz-icon-box text-center">
                    <img src="./assets/img/index-fc-icon-2.png" alt="" class="img-fluid">
                  </div>
                  <div class="bz-tit-box">
                    <h3 class="bz-tit">안정적인 수익 구조</h3>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="d-flex flex-column bz-card">
                  <div class="bz-icon-box text-center">
                    <i class="bi bi-3-square-fill bz-i-num-square"></i>
                  </div>
                  <div class="bz-icon-box text-center">
                    <img src="./assets/img/index-fc-icon-3.png" alt="" class="img-fluid">
                  </div>
                  <div class="bz-tit-box">
                    <h3 class="bz-tit">인테리어</h3>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="d-flex flex-column bz-card">
                  <div class="bz-icon-box text-center">
                    <i class="bi bi-4-square-fill bz-i-num-square"></i>
                  </div>
                  <div class="bz-icon-box text-center">
                    <img src="./assets/img/index-fc-icon-4.png" alt="" class="img-fluid">
                  </div>
                  <div class="bz-tit-box">
                    <h3 class="bz-tit">창업 절차</h3>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="d-flex flex-column bz-card">
                  <div class="bz-icon-box text-center">
                    <i class="bi bi-5-square-fill bz-i-num-square"></i>
                  </div>
                  <div class="bz-icon-box text-center">
                    <img src="./assets/img/index-fc-icon-5.png" alt="" class="img-fluid">
                  </div>
                  <div class="bz-tit-box">
                    <h3 class="bz-tit">창업 비용</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- notice 바로가기 -->
    <section class="bz-sec">
      <div class="container">
        <div class="row row-cols-1">
          <div class="col bz-tit-box">
            <h2 class="bz-tit">요빙빙 소식</h2>
          </div>
          <div class="col bz-item-box">
            <ul class="row row-cols-1 row-cols-lg-3">
              <li class="col">
                <a href="./notice.php?id=3" class="notice-link">
                  <div class="bz-img-box">
                    <img src="./assets/img/no_img_rect_w.png" alt="창업 EVENT" class="img-fluid">
                  </div>
                  <div class="bz-tit-box bz-tit-left">
                    <h4 class="bz-tit">요빙빙, 하남점 OPEN</h4>
                  </div>
                  <div class="bz-txt-box">
                    <p class="bz-txt">요빙빙, 하남점 OPEN으로 이제 하남에서도 매일매일 상큼한 즐거움을 집 앞으로 배달할 수 있게 되었습니다!</p>
                  </div>
                </a>
              </li>
              <li class="col">
                <a href="./notice.php?id=2" class="notice-link">
                  <div class="bz-img-box">
                    <img src="./assets/img/no_img_rect_w.png" alt="시그니처 메뉴" class="img-fluid">
                  </div>
                  <div class="bz-tit-box bz-tit-left">
                    <h4 class="bz-tit">창업 EVENT 특별 추가 혜택!</h4>
                  </div>
                  <div class="bz-txt-box">
                    <p class="bz-txt">요빙빙 프랜차이즈 브랜드 출시 기념으로 5가지 특별한 혜택을 받으실 수 있습니다. 성공적인 창업을 위한 이벤트를 만나보세요.</p>
                  </div>
                </a>
              </li>
              <li class="col">
                <a href="./notice.php?id=1" class="notice-link">
                  <div class="bz-img-box">
                    <img src="./assets/img/no_img_rect_w.png" alt="토핑" class="img-fluid">
                  </div>
                  <div class="bz-tit-box bz-tit-left">
                    <h4 class="bz-tit">신선함과 달콤함이 만나는 곳, 요빙빙!</h4>
                  </div>
                  <div class="bz-txt-box">
                    <p class="bz-txt">신선함과 달콤함이 만나는 곳, 요빙빙이 매일매일 상큼한 즐거움을 드립니다! 요거트 아이스크림 전문점을 요빙빙을 만나러 오세요.</p>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
include_once "./_footer.php"
?>