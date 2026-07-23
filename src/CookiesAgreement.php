<?php

namespace proweb\CookiesAgreement;

use Yii;
use yii\base\Widget;

class CookiesAgreement extends Widget
{
	public $url;
	public $message;
	public $buttonText = 'Хорошо';

    public function init()
    {
        $this->registerTranslations();

        if (!$this->message) {
            $this->message = Yii::t('proweb/cookies-agreement', 'Продолжая использовать наш сайт, вы даете согласие на обработку файлов Cookies и других пользовательских данных, в соответствии с настоящим уведомлением об их использовании. Если вы не согласны с этими условиями, пожалуйста, отключите файлы cookies. Подробнее о <a href="{href}">политике конфиденциальности</a>.');
        }
        parent::init();
    }

    public function registerTranslations()
    {
        $i18n = Yii::$app->i18n;
        $i18n->translations['proweb/cookies-agreement'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'ru-RU',
            'basePath' => __DIR__ . '/messages',
            'fileMap' => [
                'proweb/cookies-agreement' => 'messages.php',
            ],
        ];
    }

    public function run()
	{
		return $this->render('main', [
            'message' => $this->message,
            'url' => $this->url,
            'buttonText' => $this->buttonText,
        ]);
	}
}