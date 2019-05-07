<?php

namespace AlibabaCloud\Ubsms\V20150623;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method DescribeBusinessStatus describeBusinessStatus(array $options = [])
 * @method NotifyUserBusinessCommand notifyUserBusinessCommand(array $options = [])
 * @method SetUserBusinessStatus setUserBusinessStatus(array $options = [])
 */
class UbsmsApiResolver
{
    use ApiResolverTrait;
}

class V20150623Rpc extends Rpc
{
    /** @var string */
    public $product = 'Ubsms';

    /** @var string */
    public $version = '2015-06-23';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getCallerBid()
 */
class DescribeBusinessStatus extends V20150623Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBid($value)
    {
        $this->data['CallerBid'] = $value;
        $this->options['query']['callerBid'] = $value;

        return $this;
    }
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCmd()
 * @method $this withCmd($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class NotifyUserBusinessCommand extends V20150623Rpc
{
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getStatusValue()
 * @method $this withStatusValue($value)
 * @method string getService()
 * @method $this withService($value)
 * @method string getStatusKey()
 * @method $this withStatusKey($value)
 */
class SetUserBusinessStatus extends V20150623Rpc
{
}
