<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Галерея");
?>

    <!-- Content -->
    <div class="col-md-8"> 
      <div class="page-content">
        
        <!-- content must goes here -->

        <h2 class="title">На катемаране</h2>
        <a href="#" class="desc">Смотреть описание</a>

        <div class="content clearfix">
          <img src="<?= SITE_TEMPLATE_PATH . "/../.default/" ?>img/sharj-big.png" alt="" class="big">

          <div class="vertical-slider">
            <a href="#" class="vtarrow"><span class="glyphicon glyphicon-chevron-up"></span></a>
            <a href="#" class="vbarrow"><span class="glyphicon glyphicon-chevron-down"></span></a>
            <div class="slick-vertical">
              <div class="item">
                <img src="<?= SITE_TEMPLATE_PATH . "/../.default/" ?>img/vertical-slider-item.png" alt="">
                <div class="greyout"></div>
              </div>
              <div class="item active">
                <img src="<?= SITE_TEMPLATE_PATH . "/../.default/" ?>img/vertical-slider-item.png" alt="">
                <div class="greyout"></div>
              </div>
              <div class="item">
                <img src="<?= SITE_TEMPLATE_PATH . "/../.default/" ?>img/vertical-slider-item.png" alt="">
                <div class="greyout"></div>
              </div>
              <div class="item">
                <img src="<?= SITE_TEMPLATE_PATH . "/../.default/" ?>img/vertical-slider-item.png" alt="">
                <div class="greyout"></div>
              </div>
              <div class="item">
                <img src="<?= SITE_TEMPLATE_PATH . "/../.default/" ?>img/vertical-slider-item.png" alt="">
                <div class="greyout"></div>
              </div>
              <div class="item">
                <img src="<?= SITE_TEMPLATE_PATH . "/../.default/" ?>img/vertical-slider-item.png" alt="">
                <div class="greyout"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="characteristics">
          <div class="technique"><span>Техника:</span>В стиле акварель</div>
          <div class="size"><span>Размер:</span>А3 (297 х 420 мм)</div>
        </div>

      </div>
    </div>
  </div>

  <div class="row row4">
    <div class="col-md-12">
      <div class="order-with-topic center">
        <button class="button active big">Заказать с сюжетом</button>
      </div>
    </div>
  </div>

</div>
</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
