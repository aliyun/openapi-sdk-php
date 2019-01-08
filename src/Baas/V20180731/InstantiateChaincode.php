<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InstantiateChaincode
 *
 * @method string getOrganizationId()
 * @method string getChaincodeId()
 * @method string getCollectionConfig()
 * @method string getEndorsePolicy()
 * @method string getLocation()
 */
class InstantiateChaincode extends RpcRequest
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
    public $action = 'InstantiateChaincode';

    /**
     * @var string
     */
    public $method = 'PUT';

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
     * @param string $collectionConfig
     *
     * @return $this
     */
    public function withCollectionConfig($collectionConfig)
    {
        $this->data['CollectionConfig'] = $collectionConfig;
        $this->options['query']['CollectionConfig'] = $collectionConfig;

        return $this;
    }

    /**
     * @param string $endorsePolicy
     *
     * @return $this
     */
    public function withEndorsePolicy($endorsePolicy)
    {
        $this->data['EndorsePolicy'] = $endorsePolicy;
        $this->options['query']['EndorsePolicy'] = $endorsePolicy;

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
}
