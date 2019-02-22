<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateOrganizationUser
 *
 * @method string getOrganizationId()
 * @method string getPassword()
 * @method string getUsername()
 */
class CreateOrganizationUser extends RpcRequest
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
    public $action = 'CreateOrganizationUser';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @param string $password
     *
     * @return $this
     */
    public function withPassword($password)
    {
        $this->data['Password'] = $password;
        $this->options['query']['Password'] = $password;

        return $this;
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
