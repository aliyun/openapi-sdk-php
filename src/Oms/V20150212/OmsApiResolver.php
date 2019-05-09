<?php

namespace AlibabaCloud\Oms\V20150212;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetDataOpenConfig getDataOpenConfig(array $options = [])
 * @method GetProductDefine getProductDefine(array $options = [])
 * @method GetUserData getUserData(array $options = [])
 */
class OmsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Oms';

    /** @var string */
    public $version = '2015-02-12';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getSiteBid()
 * @method $this withSiteBid($value)
 */
class GetDataOpenConfig extends Rpc
{
}

/**
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getSiteBid()
 */
class GetProductDefine extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSiteBid($value)
    {
        $this->data['SiteBid'] = $value;
        $this->options['query']['siteBid'] = $value;

        return $this;
    }
}

/**
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getMaxResult()
 * @method $this withMaxResult($value)
 */
class GetUserData extends Rpc
{
}
