<?php
namespace Ebanx\Benjamin\Models\Configs;

use Ebanx\Benjamin\Models\BaseModel;
use Ebanx\Benjamin\Models\Currency;

class Config extends BaseModel implements AddableConfig
{
    const IOF = 0.0038;

    /**
     * Live integration key.
     *
     * @var string
     */
    public $integrationKey;

    /**
     * Sandbox integration key.
     *
     * @var string
     */
    public $sandboxIntegrationKey;

    /**
     * Determines if connection should be made using the sandbox environment settings.
     *
     * @var bool
     */
    public $isSandbox = true;

    /**
     * Sets the site default currency ISO code.
     * (BRL, USD, EUR, COP, MXN, CLP, PEN)
     *
     * @var string
     */
    public $baseCurrency = Currency::USD;

    /**
     * IOF Brazilian tax.
     *
     * @var float
     */
    public $iof = self::IOF;

    /**
     * The URL to send notifications to.
     *
     * @var string
     */
    public $notificationUrl = null;
}