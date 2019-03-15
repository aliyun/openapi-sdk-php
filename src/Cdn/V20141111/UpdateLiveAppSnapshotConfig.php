<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getTimeInterval()
 * @method $this withTimeInterval($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getSequenceOssObject()
 * @method $this withSequenceOssObject($value)
 * @method string getOverwriteOssObject()
 * @method $this withOverwriteOssObject($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateLiveAppSnapshotConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';
}
