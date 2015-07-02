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
        'YaBot' => 'YandexBot',
        'YaImages' => 'YandexImages',
        'YaMedia' => 'YandexMedia',
        'YaBlogs' => 'YandexBlogs',
        'YaAddUrl' => 'YandexAddurl',
        'YaDirect' => 'YandexDirect',
        'YaMetrika' => 'YandexMetrika',
        'YaNews' => 'YandexNews',
        'YaCatalog' => 'YandexCatalog',
        'YaWebmaster' => 'YandexWebmaster',
        'YaPagechecker' => 'YandexPagechecker',
        'YaDyatel' => 'YandexSitelinks',
        'YaAntivirus' => 'YandexAntivirus',
        'YaMobile' => 'YandexImageResizer',
        'YaZakladki' => 'YandexZakladki',
        'YaFavicons' => 'YandexFavicons',
        'YaAdNet' => 'YandexAdNet',
        'Rambler' => 'StackRamber',
        'Yahoo' => 'Yahoo',
        'MailRu' => 'Mail.RU_Bot',
        'MSN' => 'msnbot',
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
