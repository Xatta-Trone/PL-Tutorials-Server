<?php

return [
    /*
     * The webhook URLs that we'll use to send a message to Discord.
     */
    'webhook_urls' => [
        'default' => env('DISCORD_ALERT_WEBHOOK', 'https://discord.com/api/webhooks/1031628535225389127/JbSMe6B977Gg0C_NCVRzOTZ3SbNf3zdm-q-O66PnudTP8GsGIhpzcJW_ZYyRyQ4AOCoK'),
        'banCheck' => env('DISCORD_BAN_CHECK_ALERT_WEBHOOK', 'https://discord.com/api/webhooks/1031628977107902485/9IPk6KjfjVn5YM0HItLvAL-M-LZcjSzRTDWxCFmZvSLRXYIOTTuuv5Vkup2ZB_-TbxQa'),
    ],

    /*
     * This job will send the message to Discord. You can extend this
     * job to set timeouts, retries, etc...
     */
    'job' => Spatie\DiscordAlerts\Jobs\SendToDiscordChannelJob::class,
];