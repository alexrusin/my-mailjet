<?php

namespace Apr\MailJet;

use Apr\MailJet;
use Apr\MailJet\Transport\MailJetAddedTransportManager;
use Illuminate\Mail\MailServiceProvider;
use Illuminate\Support\ServiceProvider;

class MailJetServiceProvider extends MailServiceProvider
{

	public function boot()
    {
        $this->publishes([
            __DIR__.'/config/mailjet.php' => config_path('mailjet.php')
        ], 'mjconfig');
    }

	protected function registerSwiftTransport()
    {
        $this->app->singleton('swift.transport', function ($app) {
            return new MailJetAddedTransportManager($app);
        });
    }
}