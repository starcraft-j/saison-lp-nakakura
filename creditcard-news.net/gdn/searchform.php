<?php
$url = "https://xn--t8j4aa4n2hxa7duezbll2iyozhz284frwre.com/wp-content/themes/card/";

//スマホ表示分岐
function is_mobile(){
  $useragents = array(
  'iPhone', // iPhone
  'iPad', // iPod touch
  'Android.*Mobile', // 1.5+ Android *** Only mobile
  'Windows.*Phone', // *** Windows Phone
  'dream', // Pre 1.5 Android
  'CUPCAKE', // 1.5+ Android
  'blackberry9500', // Storm
  'blackberry9530', // Storm
  'blackberry9520', // Storm v2
  'blackberry9550', // Storm v2
  'blackberry9800', // Torch
  'webOS', // Palm Pre Experimental
  'incognito', // Other iPhone browser
  'webmate' // Other iPhone browser
  
  );
  $pattern = '/'.implode('|', $useragents).'/i';
  return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
  }
  
?>

<!-- 💎💎 SP -->
<?php if(is_mobile()) : ?>
<?php include 'searchform-sp.php'; ?>
<?php else : ?>

<!-- ✨✨ PC -->
<article id="search__box" class="pc">
    <h2 class="title__wrap">絞り込み検索</h2>
    <div class="search__wrap">

        <form method="get" id="searchform" action="https://xn--t8j4aa4n2hxa7duezbll2iyozhz284frwre.com/">

            <input type="hidden" name="s" />
            <div class="search__area__top pc">
                <h3>人気の条件から探す</h3>

                <div class="search__items">

                    <div class="search__item item1">
                        <label for="radio1">
                            <input type="checkbox" id="radio1" name="ninki" value="年会費無料">
                            <span></span>
                            年会費無料
                            <img src="<?php echo $url; ?>/images/contents/search__zero__icon.png" alt="">
                        </label>
                    </div>

                    <div class="search__item item2">
                        <label for="radio2">
                            <input type="checkbox" id="radio2" name="ninki" value="高還元率・ポイント貯めたい人">
                            <span></span>
                            高還元率・ポイント貯めたい人
                            <img src="<?php echo $url; ?>/images/contents/search__point__icon.png"
                                alt="">
                        </label>
                    </div>

                    <div class="search__item item3">
                        <label for="radio3">
                            <input type="checkbox" id="radio3" name="ninki" value="発行スピードが早い・審査も早い">
                            <span></span>
                            発行スピード・審査も早い
                            <img src="<?php echo $url; ?>/images/contents/search__speed__icon.png"
                                alt="">
                        </label>
                    </div>

                    <div class="search__item item4">
                        <label for="radio4">
                            <input type="checkbox" id="radio4" name="ninki" value="ETCカード対応・車によく乗る人">
                            <span></span>
                            ETCカード対応・車によく乗る人
                            
                            <img src="<?php echo $url; ?>/images/ranking/icon__07.png" alt="">
                        </label>
                    </div>

                    <div class="search__item item5">
                        <label for="radio5">
                            <input type="checkbox" id="radio5" name="ninki" value="マイルが貯まる・旅行や海外出張で">
                            <span></span>
                            マイルが貯まる・旅行や海外出張が多い
                            <img src="<?php echo $url; ?>/images/contents/search__mil__icon.png"
                                alt="">
                        </label>
                    </div>

                    <div class="search__item item6">
                        <label for="radio6">
                            <input type="checkbox" id="radio6" name="ninki" value="利用限度額が高い・カード支払い多い人">
                            <span></span>
                            利用限度額が高い人・カード支払いが多い人
                            <img src="<?php echo $url; ?>/images/contents/search__gendou__icon.png" alt="">
                        </label>
                    </div>

                </div>

            </div>

            <!-- .search__area__top END -->

            <div class="search__area__bottom pc">

                <h3>条件から探す</h3>

                <div class="search__items">

                    <div class="row type">

                        <div class="title__wrap">カードタイプ</div>

                        <div class="search__filter__wrap">

                            <div class="search__item">
                                <label for="type__00">
                                    <input type="radio" name="type" id="type__00" value="" checked>
                                    <span></span>
                                    指定なし
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="type__01">
                                    <input type="radio" name="type" id="type__01" value="一般カード">
                                    <span></span>
                                    一般カード
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="type__02">
                                    <input type="radio" name="type" id="type__02" value="ステータスカード">
                                    <span></span>ステータスカード
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="type__03">
                                    <input type="radio" name="type" id="type__03" value="学生がお得なカード">
                                    <span></span>
                                    学生がお得なカード
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="type__04">
                                    <input type="radio" name="type" id="type__04" value="法人・個人事業主">
                                    <span></span>
                                    法人・個人事業主
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="type__05">
                                    <input type="radio" name="type" id="type__05" value="リボ専用">
                                    <span></span>
                                    リボ専用
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="row price">

                        <div class="title__wrap">年会費</div>

                        <div class="search__filter__wrap">

                            <div class="search__item">
                                <label for="price__00">
                                    <input type="radio" name="price" id="price__00" value="" checked>
                                    <span></span>
                                    指定なし
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="price__01">
                                    <input type="radio" name="price" id="price__01" value="1">
                                    <span></span>
                                    初年無料
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="price__02">
                                    <input type="radio" name="price" id="price__02" value="2">
                                    <span></span>
                                    永年無料
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="price__03">
                                    <input type="radio" name="price" id="price__03" value="3">
                                    <span></span>
                                    5,000円以下
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="price__04">
                                    <input type="radio" name="price" id="price__04" value="4">
                                    <span></span>
                                    10,000円以下
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="price__05">
                                    <input type="radio" name="price" id="price__05" value="5">
                                    <span></span>
                                    10,000円以上
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="row brand">

                        <div class="title__wrap">国際ブランド</div>

                        <div class="search__filter__wrap">

                            <div class="search__item">
                                <label for="brand__01">
                                    <input type="checkbox" name="brand[]" id="brand__01" value="VISA">
                                    <span></span>
                                    <img class="brand__icon" src="<?php echo $url; ?>/images/contents/brand__visa.png" alt="">
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="brand__02">
                                    <input type="checkbox" name="brand[]" id="brand__02" value="JCB">
                                    <span></span>
                                    <img class="brand__icon" src="<?php echo $url; ?>/images/contents/brand__jcb.png" alt="">
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="brand__03">
                                    <input type="checkbox" name="brand[]" id="brand__03" value="Mastercard">
                                    <span></span>
                                    <img class="brand__icon" src="<?php echo $url; ?>/images/contents/brand__master.png" alt="">
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="brand__04">
                                    <input type="checkbox" name="brand[]" id="brand__04" value="American Express">
                                    <span></span>
                                    <img class="brand__icon" src="<?php echo $url; ?>/images/contents/brand__american.png" alt="">
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="brand__05">
                                    <input type="checkbox" name="brand[]" id="brand__05" value="Diners Club">
                                    <span></span>
                                    <img class="brand__icon" src="<?php echo $url; ?>/images/contents/brand__diners.png" alt="">
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="row point1">

                        <div class="title__wrap">ポイント還元率</div>

                        <div class="search__filter__wrap">

                            <div class="search__item">
                                <label for="point1__00">
                                    <input type="radio" name="point1" id="point1__00" value="" checked>
                                    <span></span>
                                    指定なし
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="point1__01">
                                    <input type="radio" name="point1" id="point1__01" value="50">
                                    <span></span>
                                    0.5%以上
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="point1__02">
                                    <input type="radio" name="point1" id="point1__02" value="100">
                                    <span></span>
                                    1.0%以上
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="point1__03">
                                    <input type="radio" name="point1" id="point1__03" value="200">
                                    <span></span>
                                    2.0%以上
                                </label>
                            </div>

                        </div>

                    </div>

                    <div class="row point2">

                        <div class="title__wrap">ポイント交換先</div>

                        <div class="search__filter__wrap">

                            <div class="search__item">
                                <label for="point2__01">
                                    <input type="checkbox" name="point2[]" id="point2__01" value="ANAマイレージ">
                                    <span></span>
                                    ANAマイレージ
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="point2__02">
                                    <input type="checkbox" name="point2[]" id="point2__02" value="JALマイレージ">
                                    <span></span>
                                    JALマイレージ
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="point2__03">
                                    <input type="checkbox" name="point2[]" id="point2__03" value="キャッシュバック">
                                    <span></span>
                                    キャッシュバック
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="point2__04">
                                    <input type="checkbox" name="point2[]" id="point2__04" value="Tポイント">
                                    <span></span>
                                    Tポイント
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="point2__05">
                                    <input type="checkbox" name="point2[]" id="point2__05" value="Amazon券">
                                    <span></span>
                                    Amazon券
                                </label>
                            </div>

                            <div class="search__item">
                                <label for="point2__06">
                                    <input type="checkbox" name="point2[]" id="point2__06" value="楽天スーパーポイント">
                                    <span></span>
                                    楽天スーパーポイント
                                </label>
                            </div>
                        </div>

                    </div>

                  
                </div>

            </div>
            <!-- .search__area__bottom END -->

            <div class="search__area__button">
                <div class="search__button">
                    <input type="submit" class="submit" value="この条件で検索する" form="searchform" />
                </div>
            </div>
        </form>

    </div>

</article>
<?php endif; ?>