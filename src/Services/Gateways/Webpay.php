<?php
namespace Ebanx\Benjamin\Services\Gateways;

use Ebanx\Benjamin\Models\Payment;
use Ebanx\Benjamin\Models\Country;
use Ebanx\Benjamin\Models\Currency;
use Ebanx\Benjamin\Services\Adapters\PaymentAdapter;

class Webpay extends BaseGateway
{
    protected static function getEnabledCountries()
    {
        return [Country::CHILE];
    }
    protected static function getEnabledCurrencies()
    {
        return [
            Currency::CLP,
            Currency::USD,
            Currency::EUR,
        ];
    }

    protected function getPaymentData(Payment $payment)
    {
        $payment->type = "webpay";

        $adapter = new PaymentAdapter($payment, $this->config);
        return $adapter->transform();
    }
}
