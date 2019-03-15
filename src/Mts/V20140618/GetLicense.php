<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getData()
 * @method $this withData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getHeader()
 * @method $this withHeader($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getLicenseUrl()
 * @method $this withLicenseUrl($value)
 */
class GetLicense extends Rpc
{
    public $product = 'Mts';

    public $version = '2014-06-18';

    public $method = 'POST';

    public $serviceCode = 'mts';
}
