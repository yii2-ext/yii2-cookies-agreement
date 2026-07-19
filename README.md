Cookies agreement panel
===================
Sticky footer panel widget, which lets your visitors to accept user policy agreement.

**Без зависимости от jQuery** — использует [js-cookie](https://github.com/js-cookie/js-cookie) и нативный JavaScript.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require proweb/yii2-cookies-agreement
```

or add

```
"proweb/yii2-cookies-agreement": "@stable"
```

to the require section of your `composer.json` file.


Usage
-----

### Минимальный вариант

```php
<?php
use proweb\CookiesAgreement\CookiesAgreement;
?>

<?= CookiesAgreement::widget([
    'url' => '/privacy-policy',
]) ?>
```

### С кастомным сообщением

```php
<?= CookiesAgreement::widget([
    'url' => '/privacy-policy',
    'message' => 'Мы используем файлы cookies для улучшения вашего опыта. <a href="{href}">Подробнее</a>',
]) ?>
```

### В шаблоне Layout

```php
<?php
use yii\helpers\Html;
use proweb\CookiesAgreement\CookiesAgreement;
?>

<?php $this->beginBody() ?>

    <!-- основной контент страницы -->
    <?= $content ?>

    <!-- баннер согласия на cookies -->
    <?= CookiesAgreement::widget([
        'url' => Yii::$app->request->baseUrl . '/privacy-policy',
    ]) ?>

<?php $this->endBody() ?>
```

### Свойства

| Свойство | Тип | Описание |
|----------|-----|----------|
| `url` | `string` | URL страницы политики конфиденциальности (подставляется вместо `{href}` в сообщении) |
| `message` | `string` | Текст сообщения (опционально, есть значение по умолчанию) |
