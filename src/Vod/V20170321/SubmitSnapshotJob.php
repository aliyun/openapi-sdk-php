<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCount()
 * @method $this withCount($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpecifiedOffsetTime()
 * @method $this withSpecifiedOffsetTime($value)
 * @method string getWidth()
 * @method $this withWidth($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getSpriteSnapshotConfig()
 * @method $this withSpriteSnapshotConfig($value)
 * @method string getSnapshotTemplateId()
 * @method $this withSnapshotTemplateId($value)
 * @method string getHeight()
 * @method $this withHeight($value)
 */
class SubmitSnapshotJob extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';
}
