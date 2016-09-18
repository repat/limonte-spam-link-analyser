[![Build Status](https://semaphoreci.com/api/v1/limonte/spam-link-analyser/branches/master/badge.svg)](https://semaphoreci.com/limonte/spam-link-analyser)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/limonte/spam-link-analyser/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/limonte/spam-link-analyser/?branch=master)
[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE)

# PHP library to check if link is spam

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
