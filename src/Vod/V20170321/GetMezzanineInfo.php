<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getPreviewSegment()
 * @method $this withPreviewSegment($value)
 * @method string getOutputType()
 * @method $this withOutputType($value)
 * @method string getAdditionType()
 * @method $this withAdditionType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAuthTimeout()
 * @method $this withAuthTimeout($value)
 */
class GetMezzanineInfo extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';
}
