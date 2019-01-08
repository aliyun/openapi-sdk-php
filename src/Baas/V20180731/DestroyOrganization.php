<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DestroyOrganization
 *
 * @method string getOrganizationId()
 */
class DestroyOrganization extends RpcRequest
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
    public $action = 'DestroyOrganization';

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
}
