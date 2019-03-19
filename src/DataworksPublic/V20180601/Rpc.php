<?php

namespace AlibabaCloud\DataworksPublic\V20180601;

use AlibabaCloud\Rpc;

class V20180601Rpc extends Rpc
{
    /** @var string */
    public $product = 'dataworks-public';

    /** @var string */
    public $version = '2018-06-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'dataworks-public';
}

/**
 * @method array getResourceId()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ListTagResources extends V20180601Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withResourceId(array $value)
    {
        $this->data['ResourceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTag(array $value)
    {
        $this->data['Tag'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method array getTagKey()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class UnTagResources extends V20180601Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withResourceId(array $value)
    {
        $this->data['ResourceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTagKey(array $value)
    {
        $this->data['TagKey'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['TagKey.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getResourceId()
 * @method array getTag()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class TagResources extends V20180601Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withResourceId(array $value)
    {
        $this->data['ResourceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTag(array $value)
    {
        $this->data['Tag'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getDagId()
 * @method $this withDagId($value)
 */
class SearchManualDagNodeInstance extends V20180601Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getBizdate()
 * @method $this withBizdate($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 * @method string getDagPara()
 * @method $this withDagPara($value)
 * @method string getNodePara()
 * @method $this withNodePara($value)
 */
class CreateManualDag extends V20180601Rpc
{
}
