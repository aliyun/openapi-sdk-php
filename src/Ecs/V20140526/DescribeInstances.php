<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method string getInnerIpAddresses()
 * @method $this withInnerIpAddresses($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getPrivateIpAddresses()
 * @method $this withPrivateIpAddresses($value)
 * @method string getHpcClusterId()
 * @method $this withHpcClusterId($value)
 * @method string getFilter2Value()
 * @method string getFilter4Value()
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getFilter4Key()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getLockReason()
 * @method $this withLockReason($value)
 * @method string getFilter1Key()
 * @method string getRdmaIpAddresses()
 * @method $this withRdmaIpAddresses($value)
 * @method string getDeviceAvailable()
 * @method $this withDeviceAvailable($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPublicIpAddresses()
 * @method $this withPublicIpAddresses($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method array getTag()
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getFilter3Value()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceTypeFamily()
 * @method $this withInstanceTypeFamily($value)
 * @method string getFilter1Value()
 * @method string getNeedSaleCycle()
 * @method $this withNeedSaleCycle($value)
 * @method string getFilter2Key()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getEipAddresses()
 * @method $this withEipAddresses($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getFilter3Key()
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeInstances extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param string $filter2Value
     *
     * @return $this
     */
    public function withFilter2Value($filter2Value)
    {
        $this->data['Filter2Value'] = $filter2Value;
        $this->options['query']['Filter.2.Value'] = $filter2Value;

        return $this;
    }

    /**
     * @param string $filter4Value
     *
     * @return $this
     */
    public function withFilter4Value($filter4Value)
    {
        $this->data['Filter4Value'] = $filter4Value;
        $this->options['query']['Filter.4.Value'] = $filter4Value;

        return $this;
    }

    /**
     * @param string $filter4Key
     *
     * @return $this
     */
    public function withFilter4Key($filter4Key)
    {
        $this->data['Filter4Key'] = $filter4Key;
        $this->options['query']['Filter.4.Key'] = $filter4Key;

        return $this;
    }

    /**
     * @param string $filter1Key
     *
     * @return $this
     */
    public function withFilter1Key($filter1Key)
    {
        $this->data['Filter1Key'] = $filter1Key;
        $this->options['query']['Filter.1.Key'] = $filter1Key;

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

    /**
     * @param string $filter3Value
     *
     * @return $this
     */
    public function withFilter3Value($filter3Value)
    {
        $this->data['Filter3Value'] = $filter3Value;
        $this->options['query']['Filter.3.Value'] = $filter3Value;

        return $this;
    }

    /**
     * @param string $filter1Value
     *
     * @return $this
     */
    public function withFilter1Value($filter1Value)
    {
        $this->data['Filter1Value'] = $filter1Value;
        $this->options['query']['Filter.1.Value'] = $filter1Value;

        return $this;
    }

    /**
     * @param string $filter2Key
     *
     * @return $this
     */
    public function withFilter2Key($filter2Key)
    {
        $this->data['Filter2Key'] = $filter2Key;
        $this->options['query']['Filter.2.Key'] = $filter2Key;

        return $this;
    }

    /**
     * @param string $filter3Key
     *
     * @return $this
     */
    public function withFilter3Key($filter3Key)
    {
        $this->data['Filter3Key'] = $filter3Key;
        $this->options['query']['Filter.3.Key'] = $filter3Key;

        return $this;
    }
}
