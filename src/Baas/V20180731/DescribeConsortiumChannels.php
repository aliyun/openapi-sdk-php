<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeConsortiumChannels
 *
 * @method string getLocation()
 * @method string getConsortiumId()
 */
class DescribeConsortiumChannels extends RpcRequest
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
    public $action = 'DescribeConsortiumChannels';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withConsortiumId() instead.
     *
     * @param string $consortiumId
     *
     * @return $this
     */
    public function setConsortiumId($consortiumId)
    {
        return $this->withConsortiumId($consortiumId);
    }

    /**
     * @param string $consortiumId
     *
     * @return $this
     */
    public function withConsortiumId($consortiumId)
    {
        $this->data['ConsortiumId'] = $consortiumId;
        $this->options['query']['ConsortiumId'] = $consortiumId;

        return $this;
    }
}
