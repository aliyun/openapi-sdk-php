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
