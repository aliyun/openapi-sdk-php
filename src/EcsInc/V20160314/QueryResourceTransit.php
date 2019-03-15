<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getResourceStatusList()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method array getResourceTypeList()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getFromRegionNo()
 * @method $this withFromRegionNo($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceTransitId()
 * @method $this withResourceTransitId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getDbId()
 * @method $this withDbId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceName()
 * @method $this withResourceName($value)
 * @method array getTag()
 */
class QueryResourceTransit extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param array $resourceStatusList
     *
     * @return $this
     */
    public function withResourceStatusList(array $resourceStatusList)
    {
        $this->data['ResourceStatusList'] = $resourceStatusList;
        foreach ($resourceStatusList as $i => $iValue) {
            $this->options['query']['ResourceStatusList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $resourceTypeList
     *
     * @return $this
     */
    public function withResourceTypeList(array $resourceTypeList)
    {
        $this->data['ResourceTypeList'] = $resourceTypeList;
        foreach ($resourceTypeList as $i => $iValue) {
            $this->options['query']['ResourceTypeList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $tag[$i]['Value'];
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $tag[$i]['Key'];
        }

        return $this;
    }
}
