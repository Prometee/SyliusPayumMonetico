<?php

declare(strict_types=1);

namespace Tests\FluxSE\SyliusPayumMoneticoPlugin\Behat\Page\Monetico;

use FriendsOfBehat\PageObjectExtension\Page\SymfonyPageInterface;

interface MoneticoNotifyPageInterface extends SymfonyPageInterface
{
    public function getAbsoluteUrl(): string;
}
