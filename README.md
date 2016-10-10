# PHP library to check if link is spam

[![Build Status](https://travis-ci.org/limonte/spam-link-analyser.svg?branch=master)](https://travis-ci.org/limonte/spam-link-analyser)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/limonte/spam-link-analyser/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/limonte/spam-link-analyser/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/limonte/spam-link-analyser/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/limonte/spam-link-analyser/?branch=master)

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
