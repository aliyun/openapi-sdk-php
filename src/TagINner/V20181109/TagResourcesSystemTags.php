<?php

namespace AlibabaCloud\TagINner\V20181109;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getTagOperator()
 * @method $this withTagOperator($value)
 * @method array getTag()
 * @method string getTagOwnerBid()
 * @method $this withTagOwnerBid($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class TagResourcesSystemTags extends Rpc
{
    public $product = 'Tag-Inner';

    public $version = '2018-11-09';

    public $method = 'POST';

    public $serviceCode = 'tag';

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $tag[$i]['Key'];
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $tag[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
