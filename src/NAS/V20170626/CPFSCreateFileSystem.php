<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CPFSCreateFileSystem
 *
 * @method string getFsSpec()
 * @method string getVSwitchId()
 * @method string getBandwidth()
 * @method string getVpcId()
 * @method string getZoneId()
 * @method string getNetworkType()
 * @method string getFsDesc()
 * @method string getSquashType()
 * @method string getCapacity()
 */
class CPFSCreateFileSystem extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'NAS';

    /**
     * @var string
     */
    public $version = '2017-06-26';

    /**
     * @var string
     */
    public $action = 'CPFSCreateFileSystem';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'nas';

    /**
     * @deprecated deprecated since version 2.0, Use withFsSpec() instead.
     *
     * @param string $fsSpec
     *
     * @return $this
     */
    public function setFsSpec($fsSpec)
    {
        return $this->withFsSpec($fsSpec);
    }

    /**
     * @param string $fsSpec
     *
     * @return $this
     */
    public function withFsSpec($fsSpec)
    {
        $this->data['FsSpec'] = $fsSpec;
        $this->options['query']['FsSpec'] = $fsSpec;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVSwitchId() instead.
     *
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        return $this->withVSwitchId($vSwitchId);
    }

    /**
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function withVSwitchId($vSwitchId)
    {
        $this->data['VSwitchId'] = $vSwitchId;
        $this->options['query']['VSwitchId'] = $vSwitchId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withBandwidth() instead.
     *
     * @param string $bandwidth
     *
     * @return $this
     */
    public function setBandwidth($bandwidth)
    {
        return $this->withBandwidth($bandwidth);
    }

    /**
     * @param string $bandwidth
     *
     * @return $this
     */
    public function withBandwidth($bandwidth)
    {
        $this->data['Bandwidth'] = $bandwidth;
        $this->options['query']['Bandwidth'] = $bandwidth;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVpcId() instead.
     *
     * @param string $vpcId
     *
     * @return $this
     */
    public function setVpcId($vpcId)
    {
        return $this->withVpcId($vpcId);
    }

    /**
     * @param string $vpcId
     *
     * @return $this
     */
    public function withVpcId($vpcId)
    {
        $this->data['VpcId'] = $vpcId;
        $this->options['query']['VpcId'] = $vpcId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withZoneId() instead.
     *
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        return $this->withZoneId($zoneId);
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function withZoneId($zoneId)
    {
        $this->data['ZoneId'] = $zoneId;
        $this->options['query']['ZoneId'] = $zoneId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNetworkType() instead.
     *
     * @param string $networkType
     *
     * @return $this
     */
    public function setNetworkType($networkType)
    {
        return $this->withNetworkType($networkType);
    }

    /**
     * @param string $networkType
     *
     * @return $this
     */
    public function withNetworkType($networkType)
    {
        $this->data['NetworkType'] = $networkType;
        $this->options['query']['NetworkType'] = $networkType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFsDesc() instead.
     *
     * @param string $fsDesc
     *
     * @return $this
     */
    public function setFsDesc($fsDesc)
    {
        return $this->withFsDesc($fsDesc);
    }

    /**
     * @param string $fsDesc
     *
     * @return $this
     */
    public function withFsDesc($fsDesc)
    {
        $this->data['FsDesc'] = $fsDesc;
        $this->options['query']['FsDesc'] = $fsDesc;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSquashType() instead.
     *
     * @param string $squashType
     *
     * @return $this
     */
    public function setSquashType($squashType)
    {
        return $this->withSquashType($squashType);
    }

    /**
     * @param string $squashType
     *
     * @return $this
     */
    public function withSquashType($squashType)
    {
        $this->data['SquashType'] = $squashType;
        $this->options['query']['SquashType'] = $squashType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCapacity() instead.
     *
     * @param string $capacity
     *
     * @return $this
     */
    public function setCapacity($capacity)
    {
        return $this->withCapacity($capacity);
    }

    /**
     * @param string $capacity
     *
     * @return $this
     */
    public function withCapacity($capacity)
    {
        $this->data['Capacity'] = $capacity;
        $this->options['query']['Capacity'] = $capacity;

        return $this;
    }
}
