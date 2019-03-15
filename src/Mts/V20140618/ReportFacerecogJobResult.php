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
 * @method string getFacerecog()
 * @method $this withFacerecog($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDetails()
 * @method $this withDetails($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReportFacerecogJobResult extends Rpc
{
    public $product = 'Mts';

    public $version = '2014-06-18';

    public $method = 'POST';

    public $serviceCode = 'mts';
}
