<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arResult["BACKGROUND"] = isset($arParams["BACKGROUND"]) ? $arParams["BACKGROUND"] : "#FFFFFF";
$arResult["BACKGROUND"] = str_replace(["\"","<",">"],"",$arResult["BACKGROUND"]);

$arResult["BTN_BACKGROUND"] = isset($arParams["BTN_BACKGROUND"]) ? $arParams["BTN_BACKGROUND"] : "#e30613";
$arResult["BTN_BACKGROUND"] = str_replace(["\"","<",">"],"",$arResult["BTN_BACKGROUND"]);

$arResult["BTN_COLOR"] = isset($arParams["BTN_COLOR"]) ? $arParams["BTN_COLOR"] : "#FFFFFF";
$arResult["BTN_COLOR"] = str_replace(["\"","<",">"],"",$arResult["BTN_COLOR"]);

$arResult["BUTTON"] = isset($arParams["BUTTON"]) ? $arParams["BUTTON"] : "Соглашаюсь";
$arResult["BUTTON"] = str_replace(["\"","<",">"],"",$arResult["BUTTON"]);

$arResult["COLOR"] = isset($arParams["COLOR"]) ? $arParams["COLOR"] : "#FFFFFF";
$arResult["COLOR"] = str_replace(["\"","<",">"],"",$arResult["COLOR"]);

$arResult["NAME"] = isset($arParams["NAME"]) ? $arParams["NAME"] : "Безопасность персональных данных";
$arResult["NAME"] = str_replace(["\"","<",">"],"",$arResult["NAME"]);

$this->IncludeComponentTemplate();
?>