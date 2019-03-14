<?php

namespace AlibabaCloud\Ots\V20160620;

use AlibabaCloud\Rpc;

/**
 * Api UnbindInstance2Vpc
 *
 * @method string getAccessKeyId()
 * @method string getInstanceVpcName()
 * @method string getResourceOwnerId()
 * @method string getInstanceName()
 * @method string getRegionNo()
 */
class UnbindInstance2Vpc extends Rpc
{
    public $product = 'Ots';

    public $version = '2016-06-20';

    public $method = 'POST';

    public $serviceCode = 'ots';

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

    /**
     * @param string $instanceVpcName
     *
     * @return $this
     */
    public function withInstanceVpcName($instanceVpcName)
    {
        $this->data['InstanceVpcName'] = $instanceVpcName;
        $this->options['query']['InstanceVpcName'] = $instanceVpcName;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $instanceName
     *
     * @return $this
     */
    public function withInstanceName($instanceName)
    {
        $this->data['InstanceName'] = $instanceName;
        $this->options['query']['InstanceName'] = $instanceName;

        return $this;
    }

    /**
     * @param string $regionNo
     *
     * @return $this
     */
    public function withRegionNo($regionNo)
    {
        $this->data['RegionNo'] = $regionNo;
        $this->options['query']['RegionNo'] = $regionNo;

        return $this;
    }
}
