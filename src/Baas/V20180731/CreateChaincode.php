<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getOssUrl()
 * @method $this withOssUrl($value)
 * @method string getEndorsePolicy()
 * @method $this withEndorsePolicy($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class CreateChaincode extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';
}
