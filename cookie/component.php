<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arResult["BACKGROUND"] = $arParams["BACKGROUND"] ? $arParams["BACKGROUND"] : "#FFFFFF";
$arResult["BTN_BACKGROUND"] = $arParams["BTN_BACKGROUND"] ? $arParams["BACKGROUND"] : "#e30613";
$arResult["BTN_COLOR"] = $arParams["BTN_COLOR"] ? $arParams["BACKGROUND"] : "#FFFFFF";
$arResult["BUTTON"] = $arParams["BUTTON"] ? $arParams["BACKGROUND"] : "Соглашаюсь";
$arResult["COLOR"] = $arParams["COLOR"] ? $arParams["BACKGROUND"] : "#FFFFFF";
$arResult["NAME"] = $arParams["NAME"] ? $arParams["BACKGROUND"] : "Безопасность персональных данных";

$this->IncludeComponentTemplate();
?>