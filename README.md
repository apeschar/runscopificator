# Runscopificator

A PHP class to generate Runscope URLs, given an API URL and a bucket key.

## Usage

```php
$url = 'https://www.yourapihere.com/get?fizz=buzz';
$r = new Runscopificator('abcd');
$new_url = $r->url($url);
// $new_url = 'https://www-yourapihere-com-abcd.runscope.net/get?fizz=buzz';
```
