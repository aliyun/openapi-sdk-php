<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeChaincodeCollectionConfig
 *
 * @method string getChaincodeId()
 * @method string getLocation()
 */
class DescribeChaincodeCollectionConfig extends RpcRequest
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
    public $action = 'DescribeChaincodeCollectionConfig';

    /**
     * @var string
     */
    public $method = 'PUT';

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
