<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Rpc;

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImages()
 * @method $this withImages($value)
 * @method string getTexts()
 * @method $this withTexts($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVideo()
 * @method $this withVideo($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCensorConfig()
 * @method $this withCensorConfig($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitMCJob extends Rpc
{
    public $product = 'Mts';

    public $version = '2014-06-18';

    public $method = 'POST';

    public $serviceCode = 'mts';
}
