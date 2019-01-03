<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateConsortiumMember
 *
 * @method string getCode()
 * @method array getOrganization()
 * @method string getConsortiumId()
 */
class CreateConsortiumMember extends RpcRequest
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
    public $action = 'CreateConsortiumMember';

    /**
     * @var string
     */
    public $method = 'PUT';

    /**
     * @deprecated deprecated since version 2.0, Use withCode() instead.
     *
     * @param string $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        return $this->withCode($code);
    }

    /**
     * @param string $code
     *
     * @return $this
     */
    public function withCode($code)
    {
        $this->data['Code'] = $code;
        $this->options['query']['Code'] = $code;

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
            $this->options['query']['Organization.' . ($i + 1) . '.Id'] = $organization[$i]['Id'];
        }

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
