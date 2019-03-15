<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTemplateGroupId()
 * @method $this withTemplateGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegisterMetadatas()
 * @method $this withRegisterMetadatas($value)
 * @method string getWorkFlowId()
 * @method $this withWorkFlowId($value)
 */
class RegisterMedia extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';
}
