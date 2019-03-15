<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Rpc;

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 * @method string getDetail()
 * @method $this withDetail($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReportPornJobResult extends Rpc
{
    public $product = 'Mts';

    public $version = '2014-06-18';

    public $method = 'POST';

    public $serviceCode = 'mts';
}
