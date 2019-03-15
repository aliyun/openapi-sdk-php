<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMediaMetadata()
 * @method $this withMediaMetadata($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getTimeline()
 * @method $this withTimeline($value)
 * @method string getProduceConfig()
 * @method $this withProduceConfig($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ProduceEditingProjectVideo extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';
}
