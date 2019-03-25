<?php

namespace AlibabaCloud\Ots\V20160620;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method UnbindInstance2Vpc unbindInstance2Vpc(array $options = [])
 * @method UpdateInstance updateInstance(array $options = [])
 * @method InsertTags insertTags(array $options = [])
 * @method ListClusterType listClusterType(array $options = [])
 * @method ListInstance listInstance(array $options = [])
 * @method ListTags listTags(array $options = [])
 * @method ListVpcInfoByInstance listVpcInfoByInstance(array $options = [])
 * @method ListVpcInfoByVpc listVpcInfoByVpc(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DeleteTags deleteTags(array $options = [])
 * @method GetInstance getInstance(array $options = [])
 * @method InsertInstance insertInstance(array $options = [])
 * @method BindInstance2Vpc bindInstance2Vpc(array $options = [])
 */
class OtsApiResolver
{
    use ApiResolverTrait;
}

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
     * @param array $tagInfo
     *
     * @return $this
     */
    public function withTagInfo(array $tagInfo)
    {
        $this->data['TagInfo'] = $tagInfo;
        foreach ($tagInfo as $depth1 => $depth1Value) {
            $this->options['query']['TagInfo.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
            $this->options['query']['TagInfo.' . ($depth1 + 1) . '.TagKey'] = $depth1Value['TagKey'];
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
     * @param array $tagInfo
     *
     * @return $this
     */
    public function withTagInfo(array $tagInfo)
    {
        $this->data['TagInfo'] = $tagInfo;
        foreach ($tagInfo as $depth1 => $depth1Value) {
            $this->options['query']['TagInfo.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
            $this->options['query']['TagInfo.' . ($depth1 + 1) . '.TagKey'] = $depth1Value['TagKey'];
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
     * @param array $tagInfo
     *
     * @return $this
     */
    public function withTagInfo(array $tagInfo)
    {
        $this->data['TagInfo'] = $tagInfo;
        foreach ($tagInfo as $depth1 => $depth1Value) {
            $this->options['query']['TagInfo.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
            $this->options['query']['TagInfo.' . ($depth1 + 1) . '.TagKey'] = $depth1Value['TagKey'];
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
     * @param array $tagInfo
     *
     * @return $this
     */
    public function withTagInfo(array $tagInfo)
    {
        $this->data['TagInfo'] = $tagInfo;
        foreach ($tagInfo as $depth1 => $depth1Value) {
            $this->options['query']['TagInfo.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
            $this->options['query']['TagInfo.' . ($depth1 + 1) . '.TagKey'] = $depth1Value['TagKey'];
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
     * @param array $tagInfo
     *
     * @return $this
     */
    public function withTagInfo(array $tagInfo)
    {
        $this->data['TagInfo'] = $tagInfo;
        foreach ($tagInfo as $depth1 => $depth1Value) {
            $this->options['query']['TagInfo.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
            $this->options['query']['TagInfo.' . ($depth1 + 1) . '.TagKey'] = $depth1Value['TagKey'];
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
     * @param array $tagInfo
     *
     * @return $this
     */
    public function withTagInfo(array $tagInfo)
    {
        $this->data['TagInfo'] = $tagInfo;
        foreach ($tagInfo as $depth1 => $depth1Value) {
            $this->options['query']['TagInfo.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
            $this->options['query']['TagInfo.' . ($depth1 + 1) . '.TagKey'] = $depth1Value['TagKey'];
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
