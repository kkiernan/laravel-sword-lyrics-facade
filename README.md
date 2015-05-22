# Laravel Facade for Sword Lyrics

A simple facade for getting random lyrics by The Sword.

## Installation

### Step 1

Grab it through Composer.

```js
"require": {
	"kkiernan/sword": "^1.1"
}
```


### Step 2

Add the SwordServiceProvider to the providers array in your config/app.php file.

```php
'providers' => [
	//...
	'Sword\SwordServiceProvider'
]
```

### Step 3

Add the Sword alias to your aliases in config/app.php.

```php
'aliases' => [
	//...
	'Sword' => 'Sword\SwordFacade',
]
```

## Usage

Right now there is just one method. Call it and you'll get a random Sword lyric. For example, you could use it in your template.

```html
<p>{{ Sword::lyric() }}</p>
```