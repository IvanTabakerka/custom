<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<div class="cookies" id="cookies" style="background: <?=$arResult['BACKGROUND']?>; color:  <?=$arResult['COLOR']?>;">
    <h4><?=$arResult['NAME']?></h4>
    <div class="cookies__row">
        <p class="cookies__text">
            На сайте используются куки сетевых служб Яндекс и Google. Продолжая просмотр сайта Вы выражаете своё согласие с <a href="/privacy/">Политикой безопасности хранения и обработки персональных данных, разработанной в соответствии с требованиями 152-ФЗ РФ</a> и <a href="/privacy/">Политикой использования файлов куки нашего сайта</a>.
        </p>
        <a class="btn_custom close-cookes" style="background: <?=$arParams['BTN_BACKGROUND']?>; color:  <?=$arParams['BTN_COLOR']?>;"><?=$arResult['BUTTON']?></a>
    </div>
</div>

