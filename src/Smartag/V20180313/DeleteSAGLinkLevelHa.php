<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getHaType()
 * @method $this withHaType($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteSAGLinkLevelHa extends Rpc
{
    public $product = 'Smartag';

    public $version = '2018-03-13';

    public $method = 'POST';

    public $serviceCode = 'smartag';
}
