<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateEcosphere
 *
 * @method string getOrderersCount()
 * @method string getConsortiumName()
 * @method string getSpecName()
 * @method array getOrganization()
 * @method string getZoneId()
 * @method string getOrdererType()
 * @method string getDescription()
 * @method string getOrdererDomain()
 * @method string getLocation()
 * @method string getPeersCount()
 * @method string getChannelPolicy()
 */
class CreateEcosphere extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Baas';

    /**
     * @var string
     */
    public $version = '2018-07-31';

    /**
     * @var string
     */
    public $action = 'CreateEcosphere';

    /**
     * @var string
     */
    public $method = 'PUT';

    /**
     * @param string $orderersCount
     *
     * @return $this
     */
    public function withOrderersCount($orderersCount)
    {
        $this->data['OrderersCount'] = $orderersCount;
        $this->options['query']['OrderersCount'] = $orderersCount;

        return $this;
    }

    /**
     * @param string $consortiumName
     *
     * @return $this
     */
    public function withConsortiumName($consortiumName)
    {
        $this->data['ConsortiumName'] = $consortiumName;
        $this->options['query']['ConsortiumName'] = $consortiumName;

        return $this;
    }

    /**
     * @param string $specName
     *
     * @return $this
     */
    public function withSpecName($specName)
    {
        $this->data['SpecName'] = $specName;
        $this->options['query']['SpecName'] = $specName;

        return $this;
    }

    /**
     * @param array $organization
     *
     * @return $this
     */
    public function withOrganization(array $organization)
    {
        $this->data['Organization'] = $organization;
        foreach ($organization as $i => $iValue) {
            $this->options['query']['Organization.' . ($i + 1) . '.Domain'] = $organization[$i]['Domain'];
            $this->options['query']['Organization.' . ($i + 1) . '.Name'] = $organization[$i]['Name'];
            $this->options['query']['Organization.' . ($i + 1) . '.Description'] = $organization[$i]['Description'];
        }

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
     * @param string $ordererType
     *
     * @return $this
     */
    public function withOrdererType($ordererType)
    {
        $this->data['OrdererType'] = $ordererType;
        $this->options['query']['OrdererType'] = $ordererType;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @param string $ordererDomain
     *
     * @return $this
     */
    public function withOrdererDomain($ordererDomain)
    {
        $this->data['OrdererDomain'] = $ordererDomain;
        $this->options['query']['OrdererDomain'] = $ordererDomain;

        return $this;
    }

    /**
     * @param string $location
     *
     * @return $this
     */
    public function withLocation($location)
    {
        $this->data['Location'] = $location;
        $this->options['query']['Location'] = $location;

        return $this;
    }

    /**
     * @param string $peersCount
     *
     * @return $this
     */
    public function withPeersCount($peersCount)
    {
        $this->data['PeersCount'] = $peersCount;
        $this->options['query']['PeersCount'] = $peersCount;

        return $this;
    }

    /**
     * @param string $channelPolicy
     *
     * @return $this
     */
    public function withChannelPolicy($channelPolicy)
    {
        $this->data['ChannelPolicy'] = $channelPolicy;
        $this->options['query']['ChannelPolicy'] = $channelPolicy;

        return $this;
    }
}
