<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/..");
$dotenv->load(__DIR__."/..");


$provider = new \Wohali\OAuth2\Client\Provider\Discord([
    'clientId' => $_ENV['DISCORD_clientId'],
    'clientSecret' => $_ENV['DISCORD_clientSecret'],
    'redirectUri' => (empty($_SERVER['HTTPS']) ? 'http://' : 'https://'). $_SERVER['HTTP_HOST']. "/concordiaPanel/oauth2/discord.php"
]);
$options = [
    'scope' => ['identify']
];

if(!isset($_GET['code'])){
    $authUrl = $provider->getAuthorizationUrl($options);
    $_SESSION['oauth2state'] = $provider->getState();
    header('Location: ' . $authUrl);
}elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
    unset($_SESSION['oauth2state']);
    exit('Invalid state');
}else{
    $token = $provider->getAccessToken('authorization_code', [
        'code' => $_GET['code']
    ]);
    $user = $provider->getResourceOwner($token);
    $_SESSION['servise'] = 'Discord';
    $_SESSION['oauth2_response'] = $user->toArray();
    $_SESSION['token'] = $token;
    header('Location: '.$_SESSION['pagetitle']);
}