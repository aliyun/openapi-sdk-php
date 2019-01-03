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
     * @deprecated deprecated since version 2.0, Use withOrderersCount() instead.
     *
     * @param string $orderersCount
     *
     * @return $this
     */
    public function setOrderersCount($orderersCount)
    {
        return $this->withOrderersCount($orderersCount);
    }

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
     * @deprecated deprecated since version 2.0, Use withConsortiumName() instead.
     *
     * @param string $consortiumName
     *
     * @return $this
     */
    public function setConsortiumName($consortiumName)
    {
        return $this->withConsortiumName($consortiumName);
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
     * @deprecated deprecated since version 2.0, Use withSpecName() instead.
     *
     * @param string $specName
     *
     * @return $this
     */
    public function setSpecName($specName)
    {
        return $this->withSpecName($specName);
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
     * @deprecated deprecated since version 2.0, Use getOrganization() instead.
     *
     * @return array
     */
    public function getOrganizations()
    {
        return $this->getOrganization();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOrganization() instead.
     *
     * @param array $organizations
     *
     * @return $this
     */
    public function setOrganizations(array $organizations)
    {
        return $this->withOrganization($organizations);
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
     * @deprecated deprecated since version 2.0, Use withOrdererType() instead.
     *
     * @param string $ordererType
     *
     * @return $this
     */
    public function setOrdererType($ordererType)
    {
        return $this->withOrdererType($ordererType);
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
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
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
     * @deprecated deprecated since version 2.0, Use withOrdererDomain() instead.
     *
     * @param string $ordererDomain
     *
     * @return $this
     */
    public function setOrdererDomain($ordererDomain)
    {
        return $this->withOrdererDomain($ordererDomain);
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
     * @deprecated deprecated since version 2.0, Use withLocation() instead.
     *
     * @param string $location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        return $this->withLocation($location);
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
     * @deprecated deprecated since version 2.0, Use withPeersCount() instead.
     *
     * @param string $peersCount
     *
     * @return $this
     */
    public function setPeersCount($peersCount)
    {
        return $this->withPeersCount($peersCount);
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
     * @deprecated deprecated since version 2.0, Use withChannelPolicy() instead.
     *
     * @param string $channelPolicy
     *
     * @return $this
     */
    public function setChannelPolicy($channelPolicy)
    {
        return $this->withChannelPolicy($channelPolicy);
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
