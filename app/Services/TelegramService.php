<?php

namespace App\Services;

use Longman\TelegramBot\Request;
use Longman\TelegramBot\Telegram;

class TelegramService
{
    public function __construct()
    {
        new Telegram(env('TELEGRAM_BOT_API_TOKEN'), env('TELEGRAM_BOT_USERNAME'));
    }

    /**
     * Send message telegram.
     *
     * @param  int $chatId
     * @param  string $text
     *
     * @throws TelegramException
     *
     * @return void
     */
    public function sendMessage(int $chatId, string $text): void
    {
        try {
            Request::sendMessage([
                'chat_id'   => $chatId,
                'text'      => $text
            ]);
        } catch (\Longman\TelegramBot\Exception\TelegramException $error) {
            throw $error;
        }
    }
}
