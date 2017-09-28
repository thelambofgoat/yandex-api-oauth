<?php
namespace Yandex\OAuth;

use Guzzle\Http;

class OAuthProvider
{
    protected $oauthServer = "oauth.yandex.ru";

    protected $responseType = "token";

    protected $callbackUri = "/get-token";

    public function __construct($clientId)
    {
        $client = new Client;
    }
}