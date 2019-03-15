<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getFormats()
 * @method $this withFormats($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getPlayerVersion()
 * @method $this withPlayerVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResultType()
 * @method $this withResultType($value)
 * @method string getRand()
 * @method $this withRand($value)
 * @method string getReAuthInfo()
 * @method $this withReAuthInfo($value)
 * @method string getPlayConfig()
 * @method $this withPlayConfig($value)
 * @method string getOutputType()
 * @method $this withOutputType($value)
 * @method string getDefinition()
 * @method $this withDefinition($value)
 * @method string getAuthTimeout()
 * @method $this withAuthTimeout($value)
 * @method string getAuthInfo()
 * @method $this withAuthInfo($value)
 */
class GetPlayInfo extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';
}
