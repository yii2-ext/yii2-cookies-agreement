<?php

namespace proweb\CookiesAgreement;

use Yii;
use yii\base\Widget;

class CookiesAgreement extends Widget
{
	public $url;
	public $message;
	public $buttonText = 'cookie_button_ok';

    public function init()
    {
        $this->registerTranslations();

        if (!$this->message) {
            $this->message = 'cookie_message';
        }

        $this->buttonText = Yii::t('proweb/cookies-agreement', $this->buttonText);
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