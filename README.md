# PHP library to check if link is spam

[![Build Status](https://travis-ci.org/repat/limonte-spam-link-analyser.svg?branch=master)](https://travis-ci.org/repat/limonte-spam-link-analyser)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/repat/limonte-spam-link-analyser/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/repat/limonte-spam-link-analyser/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/repat/limonte-spam-link-analyser/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/repat/limonte-spam-link-analyser/?branch=master)

## Update:
The underlying `paquettg/php-html-parser` in `^1.7` wasn't PHP 7.3 ready so I forked the project, updated the dependency and reuploaded it.

## Installation:

`composer require repat/limonte-spam-link-analyser`

## Usage:

```php
$spamLinkAnalyser = new Limonte\SpamLinkAnalyser;

$status = $spamLinkAnalyser->check($url);

if ($status === SpamLinkAnalyser::OK) {
    // link is OK
} else {
    // link is suspicious
}

if ($status === SpamLinkAnalyser::GOOGLE_BOT_DIFFERENT_REDIRECT) {
    // link has different redirect locations for browser and for Google Bot
}

if ($status === SpamLinkAnalyser::TOO_MUCH_REDIRECTS) {
    // link has 3 or more redirects
}
```

## Related libraries:

- Google Safebrowsing PHP library: [limonte/google-safebrowsing](https://github.com/limonte/google-safebrowsing)
- McAfee SiteAdvisor PHP library: [limonte/mcafee-siteadvisor](https://github.com/limonte/mcafee-siteadvisor)
- PHP parser for Adblock Plus filters: [limonte/php-adblock-parser](https://github.com/limonte/php-adblock-parser)
