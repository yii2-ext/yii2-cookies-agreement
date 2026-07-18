<?php

namespace proweb\CookiesAgreement;

use yii\web\AssetBundle;

class CookiesAgreementAsset extends AssetBundle
{
	public $sourcePath = '@proweb/CookiesAgreement/web';
	public $css = [
		'css/cookie-policy.css',
	];
	public $js = [
		'js/jquery.cookie.js?v1.4.1',
		'js/cookie-policy.js',
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];
}
