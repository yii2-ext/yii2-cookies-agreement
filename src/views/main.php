<?php

use proweb\CookiesAgreement\CookiesAgreementAsset;

/* @var $this \yii\web\View */
/* @var $url string */
/* @var $message string */

CookiesAgreementAsset::register($this);

?>

<div class="cookie-policy">
	<p><?= Yii::t('app', $message, ['href' => $url]) ?></p>
	<button type="button" class="cookie-policy-close">Хорошо</button>
</div>
