<?php

/**
 * Description of Spyder_Detect
 *
 * @author web777
 */
class SpyderDetect
{

    protected static $searchBots = [
        'Google' => 'GoogleBot',
        'Yandex' => 'YandexBot',
        'YandexImages' => 'YandexImages',
        'YandexMedia' => 'YandexMedia',
        'YandexBlogs' => 'YandexBlogs',
        'YandexAddUrl' => 'YandexAddurl',
        'YandexDirect' => 'YandexDirect',
        'YandexMetrika' => 'YandexMetrika',
        'YandexNews' => 'YandexNews',
        'YandexCatalog' => 'YandexCatalog',
        'YandexWebmaster' => 'YandexWebmaster',
        'YandexPagechecker' => 'YandexPagechecker',
        'YandexDyatel' => 'YandexSitelinks',
        'YandexAntivirus' => 'YandexAntivirus',
        'YandexMobile' => 'YandexImageResizer',
        'YandexZakladki' => 'YandexZakladki',
        'YandexFavicons' => 'YandexFavicons',
        'YandexAdNet' => 'YandexAdNet',
        'Rambler' => 'StackRamber',
        'Yahoo' => 'Yahoo',
        'MailRu' => 'Mail.RU_Bot',
        'Bing' => 'msnbot',
    ];

    static public function isBot($user_agent = null)
    {
        if (empty($user_agent)) {
            $user_agent = !empty($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
        }

        foreach (static::$searchBots as $bot => $marker) {
            if (strpos(strtoupper($user_agent), strtoupper($marker)) !== false) {
                return $bot;
            }
        }

        return false;
    }

}
