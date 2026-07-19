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
		'js/js.cookie.min.js?v3.0.5',
		'js/cookie-policy.js',
	];
	public $depends = [];

}
