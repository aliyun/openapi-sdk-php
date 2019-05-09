<?php

namespace AlibabaCloud\OssAdmin\V20140326;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method StopOss stopOss(array $options = [])
 * @method RestartOss restartOss(array $options = [])
 */
class OssAdminApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'OssAdmin';

    /** @var string */
    public $version = '2014-03-26';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 */
class StopOss extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['region'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 */
class RestartOss extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['region'] = $value;

        return $this;
    }
}
