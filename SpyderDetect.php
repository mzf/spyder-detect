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
    protected $user_agent;

    public function __construct($user_agent = null)
    {
        if (empty($user_agent)) {
            $user_agent = !empty($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
        }
        $this->setUserAgent($user_agent);
    }

    public function setUserAgent($user_agent)
    {
        $this->user_agent = $user_agent;
    }

    static public function isBot()
    {
        foreach (static::$searchBots as $bot => $marker) {
            if (strpos(strtoupper($this->user_agent), strtoupper($marker)) !== false) {
                return $bot;
            }
        }

        return false;
    }

}
