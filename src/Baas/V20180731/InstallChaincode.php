<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InstallChaincode
 *
 * @method string getOrganizationId()
 * @method string getChaincodeId()
 * @method string getLocation()
 */
class InstallChaincode extends RpcRequest
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
    public $action = 'InstallChaincode';

    /**
     * @var string
     */
    public $method = 'PUT';

    /**
     * @deprecated deprecated since version 2.0, Use withOrganizationId() instead.
     *
     * @param string $organizationId
     *
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {
        return $this->withOrganizationId($organizationId);
    }

    /**
     * @param string $organizationId
     *
     * @return $this
     */
    public function withOrganizationId($organizationId)
    {
        $this->data['OrganizationId'] = $organizationId;
        $this->options['query']['OrganizationId'] = $organizationId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withChaincodeId() instead.
     *
     * @param string $chaincodeId
     *
     * @return $this
     */
    public function setChaincodeId($chaincodeId)
    {
        return $this->withChaincodeId($chaincodeId);
    }

    /**
     * @param string $chaincodeId
     *
     * @return $this
     */
    public function withChaincodeId($chaincodeId)
    {
        $this->data['ChaincodeId'] = $chaincodeId;
        $this->options['query']['ChaincodeId'] = $chaincodeId;

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
}
