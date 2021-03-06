<?php

namespace MundiPagg\One;

use MundiPagg\One\DataContract\Enum\CreditCardBrandEnum;
use MundiPagg\One\DataContract\Request\CreateSaleRequestData\CreditCard;
use MundiPagg\One\Helper\CreditCardHelper;

class CreditCardHelperTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateCreditCard_Failure()
    {
        $creditCard = CreditCardHelper::createCreditCard("", "", "", "");
        $this->assertFalse($creditCard);
    }

    public function testCreateCreditCard_Success()
    {
        $expected = new CreditCard();
        $expected->setCreditCardBrand(CreditCardBrandEnum::MASTERCARD);
        $expected->setCreditCardNumber("5555444433332222");
        $expected->setExpMonth(12);
        $expected->setExpYear(30);
        $expected->setHolderName("MUNDIPAGG");
        $expected->setSecurityCode("999");
        $creditCard = CreditCardHelper::createCreditCard(" 5555 4444 3333 2222 ", " MUNDIPAGG ", " 12/30 ", " 999 ");
        $this->assertEquals($expected, $creditCard);

        $expected->setExpYear(2030);
        $creditCard = CreditCardHelper::createCreditCard(" 5555 4444 3333 2222 ", " MUNDIPAGG ", " 12/2030 ", " 999 ");
        $this->assertEquals($expected, $creditCard);
    }
}