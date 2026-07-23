<?php

use proweb\CookiesAgreement\CookiesAgreementAsset;

/* @var $this \yii\web\View */
/* @var $url string */
/* @var $message string */
/* @var $buttonText string */

CookiesAgreementAsset::register($this);
?>

<div class="cookie-policy">
	<p><?= Yii::t('proweb/cookies-agreement', $message, ['href' => $url]) ?></p>
	<button type="button" class="cookie-policy-close"><?= $buttonText ?></button>
</div>
