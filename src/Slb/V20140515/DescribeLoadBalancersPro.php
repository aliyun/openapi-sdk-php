<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\Rpc;

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getMasterZoneId()
 * @method $this withMasterZoneId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getLoadBalancerName()
 * @method $this withLoadBalancerName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAddressType()
 * @method $this withAddressType($value)
 * @method string getSlaveZoneId()
 * @method $this withSlaveZoneId($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getServerId()
 * @method $this withServerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getServerIntranetAddress()
 * @method $this withServerIntranetAddress($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getFilterFuzzyMode()
 * @method $this withFilterFuzzyMode($value)
 */
class DescribeLoadBalancersPro extends Rpc
{
    public $product = 'Slb';

    public $version = '2014-05-15';

    public $method = 'POST';

    public $serviceCode = 'slb';

    /**
     * @param string $accessKeyId
     *
     * @return $this
     */
    public function withAccessKeyId($accessKeyId)
    {
        $this->data['AccessKeyId'] = $accessKeyId;
        $this->options['query']['access_key_id'] = $accessKeyId;

        return $this;
    }
}
