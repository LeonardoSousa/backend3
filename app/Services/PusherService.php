<?php

namespace App\Services;

use Exception;
use Pusher\Pusher;

class PusherService
{

    static function getPusher(): Pusher
    {
        return new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            [
                // 'host' => env('PUSHER_HOST'),
                // 'port' => env('PUSHER_PORT'),
                'cluster' => env('PUSHER_APP_CLUSTER')
            ]
        );
    }

    static function trigger(string $channel, string $event, mixed $data)
    {
        $pusher = static::getPusher();
        $pusher->trigger($channel, $event, $data);
    }
}
