<?
 <? if (have_rows('kejsantikejs')) : ?>
    <div class="cases itc-slider" data-slider="itc-slider">
      <div class="districts__title districts__title_black">Кейсы и антикейсы</div>

      <div class="cases__buttons">
        <button type="button" class="itc-slider-btn itc-slider-btn-prev"></button>
        <button type="button" class="itc-slider-btn itc-slider-btn-next"></button>
      </div>
      <div class="itc-slider-wrapper">
        <div class="itc-slider-items kejsantikejs">
          <? while (have_rows('kejsantikejs')) : the_row(); ?>
            <div class="cases__block itc-slider-item ">
              <? $imagess = get_sub_field('fotografii_ne_bolee_4h_sht'); ?>
              <div class="cases__img-block">
                <? foreach ($imagess as $imagee) : ?>
                  <img src="<?= $imagee; ?>" alt="наша работа" />
                <? endforeach; ?>
              </div>
              <div class="cases__info-block cases__info-block_full">
                <div class="cases__text-block cases__text-block_full">
                  <div class="cases__text-block conteiner">
                    <div class="title-ticket">Задача <svg xmlns="http://www.w3.org/2000/svg" width="147" height="8" viewBox="0 0 147 8" fill="none">
                        <path d="M146.354 4.24419C146.549 4.04893 146.549 3.73235 146.354 3.53708L143.172 0.355104C142.976 0.159841 142.66 0.159841 142.464 0.355104C142.269 0.550366 142.269 0.866948 142.464 1.06221L145.293 3.89064L142.464 6.71906C142.269 6.91433 142.269 7.23091 142.464 7.42617C142.66 7.62143 142.976 7.62143 143.172 7.42617L146.354 4.24419ZM-4.37114e-08 4.39062L146 4.39064L146 3.39064L4.37114e-08 3.39062L-4.37114e-08 4.39062Z" fill="white" />
                      </svg>
                    </div>
                    <? the_sub_field('zadacha'); ?>
                  </div>
                  <div class="cases__text-block conteiner">
                    <div class="title-solution">Решение</div>
                    <? the_sub_field('reshenie'); ?>
                  </div>
                  <div>
                  </div>
                </div>
                <div class="cases__text-block">
                  <button type="button" class="districts__button form01-open">
                    Хочу такой же
                  </button>
                  <button type="button" class="districts__button districts__button_light form01-open">
                    Консультация
                  </button>
                </div>
              </div>
            </div>
          <? endwhile ?>
        </div>
      </div>
    </div>
  <? endif ?>
?>