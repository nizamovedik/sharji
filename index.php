<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Шаржи");
?>
      <div class="content-wrapper2">
        <div class="container">
          <div class="row row6">
            <div class="col-md-12">
              <h2>Выбор сюжета</h2>

              <div class="topics" id="topics">
                <?$APPLICATION->IncludeComponent(
                	"slide:slick", 
                	".default", 
                	array(
                		"ACTIVE_DATE_FORMAT" => "d.m.Y",
                		"ADD_SECTIONS_CHAIN" => "N",
                		"AJAX_MODE" => "N",
                		"AJAX_OPTION_ADDITIONAL" => "",
                		"AJAX_OPTION_HISTORY" => "N",
                		"AJAX_OPTION_JUMP" => "N",
                		"AJAX_OPTION_STYLE" => "Y",
                		"CACHE_FILTER" => "N",
                		"CACHE_GROUPS" => "Y",
                		"CACHE_TIME" => "36000000",
                		"CACHE_TYPE" => "A",
                		"CHECK_DATES" => "Y",
                		"DETAIL_URL" => "",
                		"DISPLAY_BOTTOM_PAGER" => "N",
                		"DISPLAY_DATE" => "N",
                		"DISPLAY_NAME" => "Y",
                		"DISPLAY_PICTURE" => "Y",
                		"DISPLAY_PREVIEW_TEXT" => "N",
                		"DISPLAY_TOP_PAGER" => "N",
                		"FIELD_CODE" => array(
                			0 => "",
                			1 => "",
                		),
                		"FILTER_NAME" => "",
                		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
                		"IBLOCK_ID" => "13",
                		"IBLOCK_TYPE" => "images",
                		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                		"MESSAGE_404" => "",
                		"NEWS_COUNT" => "20",
                		"PAGER_BASE_LINK_ENABLE" => "N",
                		"PAGER_DESC_NUMBERING" => "N",
                		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                		"PAGER_SHOW_ALL" => "N",
                		"PAGER_SHOW_ALWAYS" => "N",
                		"PAGER_TEMPLATE" => ".default",
                		"PAGER_TITLE" => "Новости",
                		"PARENT_SECTION" => "98",
                		"PARENT_SECTION_CODE" => "",
                		"PREVIEW_TRUNCATE_LEN" => "",
                		"PROPERTY_CODE" => array(
                			0 => "",
                			1 => "",
                		),
                		"SET_STATUS_404" => "N",
                		"SET_TITLE" => "N",
                		"SHOW_404" => "N",
                		"SORT_BY1" => "SORT",
                		"SORT_BY2" => "ACTIVE_FROM",
                		"SORT_ORDER1" => "ASC",
                		"SORT_ORDER2" => "ASC",
                		"COMPONENT_TEMPLATE" => ".default",
                		"SLICK_TIME" => "3000",
                		"SLICK_AUTOPLAY" => "Y",
                		"SLICK_SLIDES_TO_SHOW" => "6",
                		"SLICK_SLIDES_TO_SCROLL" => "2",
                		"SLICK_DOTS" => "N"
                	),
                	false
                );?><br>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="content-wrapper3">
        <div class="container">
          <div class="row row7">
            <div class="col-md-12">
              <div class="videos">
                <div class="larrow"><a href=""></a></div>
                <div class="rarrow"><a href=""></a></div>
                <div class="slick-slider-videos">
                  <div class="item">
                    <div class="video">
                  
                    </div>
                    <div class="name">Процесс создания черно белого шаржа</div>
                  </div>
                  <div class="item">
                    <div class="video">
                  
                    </div>
                    <div class="name">Процесс создания черно белого шаржа</div>
                  </div>
                  <div class="item">
                    <div class="video">
                  
                    </div>
                    <div class="name">Процесс создания черно белого шаржа</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="content-wrapper4">
        <div class="container">
          <div class="row row7">
            <div class="col-md-12">

              <div class="how-to-order" id="how-to-order">
                <h2>Как заказать шарж</h2>
                <div class="row">
                  <div class="col-md-3 item">
                    <img src="<?= SITE_TEMPLATE_PATH . "/../.default/" ?>img/order1.png" alt="" class="img-responsive">
                    <div class="text">Позвонить<br>или оставить заявочку на сайте</div>
                  </div>
                  <div class="col-md-3 item">
                    <img src="<?= SITE_TEMPLATE_PATH . "/../.default/" ?>img/order2.png" alt="" class="img-responsive">
                    <div class="text">Наш менеджер придет вам на помощь</div>
                  </div>
                  <div class="col-md-3 item">
                    <img src="<?= SITE_TEMPLATE_PATH . "/../.default/" ?>img/order3.png" alt="" class="img-responsive">
                    <div class="text">Художник нарисует ваш шедевр за 4-5 дней</div>
                  </div>
                  <div class="col-md-3 item">
                    <img src="<?= SITE_TEMPLATE_PATH . "/../.default/" ?>img/order4.png" alt="" class="img-responsive">
                    <div class="text">Шарж готов! Доставка по МСК, доставка по РФ.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="content-wrapper5">
        <div class="container">
          <div class="row row8">
            <div class="col-md-12">
              <div class="price" id="price">

                <h2>Расчет стоимости</h2>

                <div class="types">
                  <div href="#" class="item item-1 active">
                    <div class="img"></div>
                    <div class="name">Черно-белый шарж</div>
                    <div class="desc"><a href="#">подробно</a></div>
                  </div>
                  <div href="#" class="item item-2">
                    <div class="img"></div>
                    <div class="name">Цветной шарж</div>
                    <div class="desc"><a href="#">подробно</a></div>
                  </div>
                  <div href="#" class="item item-3">
                    <div class="img"></div>
                    <div class="name">Коллективный шарж</div>
                    <div class="desc"><a href="#">подробно</a></div>
                  </div>
                  <div href="#" class="item item-4">
                    <div class="img"></div>
                    <div class="name">Шарж сувениры</div>
                    <div class="desc"><a href="#">подробно</a></div>
                  </div>
                </div>

                <div class="calc">
                  <form action="/" enctype="application/www-urlencoded" method="post">
                    <div class="row">
                      <div class="form-group col-md-3">
                        <label for="num-persons">Количество лиц</label>
                        <select class="form-control" name="num-persons">
                          <option value="1">1 чел</option>
                          <option value="2">2 чел</option>
                          <option value="3">3 чел</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="size">Размер</label>
                        <select class="form-control" name="sze">
                          <option value="1">А4</option>
                          <option value="2">А3</option>
                          <option value="3">А1</option>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="detail">Уровень детализации</label>
                        <select class="form-control" name="detail">
                          <option value="1">Бюджетный</option>
                          <option value="2">А3</option>
                          <option value="3">А1</option>
                        </select>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-md-12">
                        <label for="">Получить готовый шарж</label>
                        <div class="radio-group">
                          <button class="form-control active">В рамке</button>
                          <button class="form-control">Без рамки</button>
                          <button class="form-control">Файлом</button>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label for="">Доставка по МСК и в регионы России</label>
                        <div class="radio-group">
                          <button class="form-control active">Доставка</button>
                          <button class="form-control">Самовывоз</button>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="form-group col-md-4 promokod">
                        <label for="promokod">Укажите промокод и получите скидку 10%</label>
                        <input type="text" class="form-control" name="promokod">
                      </div>

                      <div class="form-group col-md-8 links">
                        <a href="#" class="get-promokod">Как получить промокод?</a>
                        <a href="#" class="extended-calc" data-toggle="modal" data-target="#price-modal"><span class="glyphicon glyphicon-arrow-down"></span>Расширенный расчет</a>
                      </div>
                    </div>

                    <div class="hr"></div>

                    <div class="row subitms">
                      <div class="form-group col-md-2"><button class="form-control">10 490 руб.</button></div>
                      <div class="form-group col-md-2"><button class="button active">Заказать</button></div>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="content-wrapper6">
        <div class="container">
          <div class="row row9">
            <div class="col-md-12">
              <div class="reviews">
                <h2>Ваши улыбки для нас лучший отзыв!</h2>

                <a href="#" class="button white big center">Оставить отзыв</a>


                <div class="slider">
                  <a href="#" class="larrow"></a>
                  <a href="#" class="rarrow"></a>

                  <div class="slick-slider-reviews">
                    <div class="item center">
                      <div class="img"><img src="<?= SITE_TEMPLATE_PATH . "/../.default/" ?>img/review-img.png"></div>
                      <div class="text">
                        <p><b>Виктоория Швец</b></p>
                        <p>                        
                          Спасибо большое, очень хороший получился шарж, руководителю очень понравилосьи коллегам, спасибо за вашу работу!
                        </p>
                      </div>
                    </div>
                    <div class="item center">
                      <div class="img"><img src="<?= SITE_TEMPLATE_PATH . "/../.default/" ?>img/review-img.png"></div>
                      <div class="text">
                        <p><b>Виктоория Швец</b></p>
                        <p>                        
                          Спасибо большое, очень хороший получился шарж, руководителю очень понравилосьи коллегам, спасибо за вашу работу!
                        </p>
                      </div>
                    </div>
                    <div class="item center">
                      <div class="img"><img src="<?= SITE_TEMPLATE_PATH . "/../.default/" ?>img/review-img.png"></div>
                      <div class="text">
                        <p><b>Виктоория Швец</b></p>
                        <p>                        
                          Спасибо большое, очень хороший получился шарж, руководителю очень понравилосьи коллегам, спасибо за вашу работу!
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>

              </div>
            </div>
          </div>
        </div>
      </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>