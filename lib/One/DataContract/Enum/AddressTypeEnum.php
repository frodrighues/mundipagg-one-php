<?php

namespace MundiPagg\One\DataContract\Enum;

/**
 * Class AddressTypeEnum
 * @package MundiPagg\One\DataContract\Enum
 */
abstract class AddressTypeEnum
{
    /**
     * @var string Endereço comercial
     */
    const COMMERCIAL = 'Comercial';

    /**
     * @var string Endereço residencial
     */
    const RESIDENTIAL = 'Residential';

    /**
     * @var string Endereço de cobrança
     */
    const BILLING = 'Billing';

    /**
     * @var string Endereço de entrega
     */
    const SHIPPING = 'Shipping';
}