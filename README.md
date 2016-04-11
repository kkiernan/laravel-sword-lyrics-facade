# Sword Lyrics

Get a random lyric by The Sword. This is a very simple facade I used to learn how to set up a facade in Laravel.

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->


- [Instructions](#instructions)
    - [Install](#install)
    - [Add the Service Provider](#add-the-service-provider)
    - [Add the Alias](#add-the-alias)
    - [Use](#use)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

## Instructions

### Install

Grab it through Composer.

```js
composer require kkiernan/sword
```

### Add the Service Provider

Add the service provider to your config/app.php file in the providers array.

```php
'providers' => [

	//...

	Sword\SwordServiceProvider::class

]
```

### Add the Alias

Add the Sword alias to your aliases in config/app.php.

```php
'aliases' => [

	//...

	'Sword' => Sword\SwordFacade::class

]
```

### Use

Call the lyric method to get a random lyric. For example, you could use it in a blade template.

```html
<p>{{ Sword::lyric() }}</p>
```
