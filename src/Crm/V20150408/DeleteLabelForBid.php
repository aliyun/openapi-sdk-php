<?php

namespace AlibabaCloud\Crm\V20150408;

use AlibabaCloud\Rpc;

/**
 * @method string getLabelSeries()
 * @method $this withLabelSeries($value)
 * @method string getPK()
 * @method $this withPK($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 */
class DeleteLabelForBid extends Rpc
{
    public $product = 'Crm';

    public $version = '2015-04-08';

    public $method = 'POST';

    public $serviceCode = 'crm';
}
