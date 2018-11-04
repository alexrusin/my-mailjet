<?php

namespace Apr\MailJet\Transport;

use Illuminate\Mail\TransportManager;

class MailJetAddedTransportManager extends TransportManager
{
	protected function createMailjetDriver()
    {
        return new MailJetTransport;
    }
}