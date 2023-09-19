<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/**
 * @var string $componentPath
 * @var string $componentName
 * @var array $arCurrentValues
 * */

use Bitrix\Main\Loader;


$arComponentParameters = [
    "GROUPS" => [
        "SETTINGS" => [
            "NAME" => "Настройки",
            "SORT" => 1,
        ],
    ],
    "PARAMETERS" => [
        "NAME" => [
            "PARENT" => "SETTINGS",
            "NAME" => "Заголовок",
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "DEFAULT" => "Безопасность персональных данных",
            "COLS" => 125
        ],
        "BUTTON" => [
            "PARENT" => "SETTINGS",
            "NAME" => "Текст кнопки",
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "DEFAULT" => "Соглашаюсь",
            "COLS" => 325
        ],
        "BACKGROUND" => [
            "PARENT" => "SETTINGS",
            "NAME" => "HTML",
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "DEFAULT" => "#FFFFFF",
            "COLS" => 425
        ],
        "COLOR" => [
            "PARENT" => "SETTINGS",
            "NAME" => "HTML",
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "DEFAULT" => "#000000",
            "COLS" => 525
        ],
        "BTN_BACKGROUND" => [
            "PARENT" => "SETTINGS",
            "NAME" => "HTML",
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "DEFAULT" => "#e30613",
            "COLS" => 625
        ],
        "BTN_COLOR" => [
            "PARENT" => "SETTINGS",
            "NAME" => "HTML",
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "DEFAULT" => "#FFFFFF",
            "COLS" => 725
        ],
    ]
];
