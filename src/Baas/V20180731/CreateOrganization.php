<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateOrganization
 *
 * @method string getDomain()
 * @method string getSpecName()
 * @method string getName()
 * @method string getDescription()
 * @method string getLocation()
 */
class CreateOrganization extends RpcRequest
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
    public $action = 'CreateOrganization';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $domain
     *
     * @return $this
     */
    public function withDomain($domain)
    {
        $this->data['Domain'] = $domain;
        $this->options['query']['Domain'] = $domain;

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
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

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
