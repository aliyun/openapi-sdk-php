<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeOrganizationUserCerts
 *
 * @method string getOrganizationId()
 * @method string getUsername()
 */
class DescribeOrganizationUserCerts extends RpcRequest
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
    public $action = 'DescribeOrganizationUserCerts';

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
     * @deprecated deprecated since version 2.0, Use withUsername() instead.
     *
     * @param string $username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        return $this->withUsername($username);
    }

    /**
     * @param string $username
     *
     * @return $this
     */
    public function withUsername($username)
    {
        $this->data['Username'] = $username;
        $this->options['query']['Username'] = $username;

        return $this;
    }
}
