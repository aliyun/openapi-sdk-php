<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RenewCredentials
 *
 * @method string getCredentialId()
 */
class RenewCredentials extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CSB';

    /**
     * @var string
     */
    public $version = '2017-11-18';

    /**
     * @var string
     */
    public $action = 'RenewCredentials';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withCredentialId() instead.
     *
     * @param string $credentialId
     *
     * @return $this
     */
    public function setCredentialId($credentialId)
    {
        return $this->withCredentialId($credentialId);
    }

    /**
     * @param string $credentialId
     *
     * @return $this
     */
    public function withCredentialId($credentialId)
    {
        $this->data['CredentialId'] = $credentialId;
        $this->options['query']['CredentialId'] = $credentialId;

        return $this;
    }
}
