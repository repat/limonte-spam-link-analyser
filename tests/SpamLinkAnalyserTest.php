<?php
namespace Limonte\Tests;

use Limonte\SpamLinkAnalyser;

class SpamLinkAnalyserTest extends \PHPUnit_Framework_TestCase
{
    private $checker;

    public function __construct()
    {
        $this->checker = new SpamLinkAnalyser;
    }

    public function testOk()
    {
        $this->assertEquals(SpamLinkAnalyser::OK, $this->checker->check('http://github.com'));
        $this->assertEquals(SpamLinkAnalyser::OK, $this->checker->check('http://trello.com'));
    }

    public function testOkWhitelist()
    {
        $this->assertEquals(SpamLinkAnalyser::OK, $this->checker->check('http://google.com'));
    }

    public function testGoogleBotDifferentRedirect()
    {
        // headers redirect
        $this->assertEquals(
            SpamLinkAnalyser::GOOGLE_BOT_DIFFERENT_REDIRECT,
            $this->checker->check('http://9nl.pw/e25y')
        );

        // meta refresh redirect
        $this->assertEquals(
            SpamLinkAnalyser::GOOGLE_BOT_DIFFERENT_REDIRECT,
            $this->checker->check('http://fyhjs.voluumtrk.com/e4d6bfe2-78c7-4e0b-9999-32723287cf81')
        );
    }

    public function testTooMuchRedirects()
    {
        // 2 redirects
        $this->assertEquals(
            SpamLinkAnalyser::OK,
            $this->checker->check('http://goo.gl/UWKdoh')
        );

        // 3 redirects
        $this->assertEquals(
            SpamLinkAnalyser::TOO_MUCH_REDIRECTS,
            $this->checker->check('http://bit.ly/1Un6o2q')
        );
    }

    /**
     * @expectedException Exception
     */
    public function testInvalidUrl()
    {
        $this->checker->check('invalid URL');
    }
}
