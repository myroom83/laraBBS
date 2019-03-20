<?php

namespace App\Providers;

use Overtrue\EasySms\EasySms;
use Illuminate\Support\ServiceProvider;

class EasySmsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(EasySms::class, function($app) {
           return new EasySms(config('easysms'));
        });

        $this->app->alias(EasySms::class, 'easysms');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
try {
    $sms->send(18616646655, [
        'content'  => '【Lbbs社区】您的验证码是1234。如非本人操作，请忽略本短信',
    ]);
} catch (\Overtrue\EasySms\Exceptions\NoGatewayAvailableException $exception) {
    $message = $exception->getException('aliyun')->getMessage();
    dd($message);
}
