<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getTransitId()
 * @method $this withTransitId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getToImageName()
 * @method $this withToImageName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getToRegionNoList()
 * @method string getToImageDesc()
 * @method $this withToImageDesc($value)
 * @method array getTag()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CopySystemImage extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param array $toRegionNoList
     *
     * @return $this
     */
    public function withToRegionNoList(array $toRegionNoList)
    {
        $this->data['ToRegionNoList'] = $toRegionNoList;
        foreach ($toRegionNoList as $i => $iValue) {
            $this->options['query']['ToRegionNoList.' . ($i + 1)] = $iValue;
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
