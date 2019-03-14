<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * Api CPFSCreateFileSystem
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
class CPFSCreateFileSystem extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $method = 'POST';

    public $serviceCode = 'nas';

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
