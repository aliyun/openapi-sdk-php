<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method array getTag()
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceTypeFamily()
 * @method $this withInstanceTypeFamily($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getDemandStatus()
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeDemands extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

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
     * @param array $demandStatus
     *
     * @return $this
     */
    public function withDemandStatus(array $demandStatus)
    {
        $this->data['DemandStatus'] = $demandStatus;
        foreach ($demandStatus as $i => $iValue) {
            $this->options['query']['DemandStatus.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
