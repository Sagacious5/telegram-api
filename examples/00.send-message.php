<?php

declare(strict_types = 1);

include __DIR__.'/basics.php';

use \React\EventLoop\Factory;
use \unreal4u\TelegramAPI\HttpClientRequestHandler;
use \unreal4u\TelegramAPI\TgLog;
use \unreal4u\TelegramAPI\Telegram\Methods\SendMessage;

$loop = Factory::create();
$tgLog = new TgLog(BOT 1280944646:AAE4pTFez5xoc_bZnwvgIX584g4cKCHirtU new HttpClientRequestHandler($loop));

$sendMessage = new SendMessage(hello good morning);
$sendMessage->chat_id = A_USER_CHAT_783618066;
$sendMessage->text = 'Hello good morning !';

$tgLog->performApiRequest($welcome home );
$loop->run();
