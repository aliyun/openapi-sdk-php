<?php

namespace AlibabaCloud\Ots\V20160620;

use AlibabaCloud\Rpc;

class V20160620Rpc extends Rpc
{
    /** @var string */
    public $product = 'Ots';

    /** @var string */
    public $version = '2016-06-20';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'ots';
}

/**
 * @method string getAccessKeyId()
 * @method string getInstanceVpcName()
 * @method $this withInstanceVpcName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 */
class UnbindInstance2Vpc extends V20160620Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getNetwork()
 * @method $this withNetwork($value)
 */
class UpdateInstance extends V20160620Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method array getTagInfo()
 */
class InsertTags extends V20160620Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTagInfo(array $value)
    {
        $this->data['TagInfo'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['TagInfo.' . ($i + 1) . '.TagValue'] = $value[$i]['TagValue'];
            $this->options['query']['TagInfo.' . ($i + 1) . '.TagKey'] = $value[$i]['TagKey'];
        }

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class ListClusterType extends V20160620Rpc
{
    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method array getTagInfo()
 */
class ListInstance extends V20160620Rpc
{
    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTagInfo(array $value)
    {
        $this->data['TagInfo'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['TagInfo.' . ($i + 1) . '.TagValue'] = $value[$i]['TagValue'];
            $this->options['query']['TagInfo.' . ($i + 1) . '.TagKey'] = $value[$i]['TagKey'];
        }

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method array getTagInfo()
 */
class ListTags extends V20160620Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTagInfo(array $value)
    {
        $this->data['TagInfo'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['TagInfo.' . ($i + 1) . '.TagValue'] = $value[$i]['TagValue'];
            $this->options['query']['TagInfo.' . ($i + 1) . '.TagKey'] = $value[$i]['TagKey'];
        }

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class ListVpcInfoByInstance extends V20160620Rpc
{
    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method array getTagInfo()
 */
class ListVpcInfoByVpc extends V20160620Rpc
{
    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTagInfo(array $value)
    {
        $this->data['TagInfo'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['TagInfo.' . ($i + 1) . '.TagValue'] = $value[$i]['TagValue'];
            $this->options['query']['TagInfo.' . ($i + 1) . '.TagKey'] = $value[$i]['TagKey'];
        }

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 */
class DeleteInstance extends V20160620Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method array getTagInfo()
 */
class DeleteTags extends V20160620Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTagInfo(array $value)
    {
        $this->data['TagInfo'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['TagInfo.' . ($i + 1) . '.TagValue'] = $value[$i]['TagValue'];
            $this->options['query']['TagInfo.' . ($i + 1) . '.TagKey'] = $value[$i]['TagKey'];
        }

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 */
class GetInstance extends V20160620Rpc
{
    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getTagInfo()
 * @method string getNetwork()
 * @method $this withNetwork($value)
 */
class InsertInstance extends V20160620Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTagInfo(array $value)
    {
        $this->data['TagInfo'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['TagInfo.' . ($i + 1) . '.TagValue'] = $value[$i]['TagValue'];
            $this->options['query']['TagInfo.' . ($i + 1) . '.TagKey'] = $value[$i]['TagKey'];
        }

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getInstanceVpcName()
 * @method $this withInstanceVpcName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getVirtualSwitchId()
 * @method $this withVirtualSwitchId($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 * @method string getNetwork()
 * @method $this withNetwork($value)
 */
class BindInstance2Vpc extends V20160620Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}
