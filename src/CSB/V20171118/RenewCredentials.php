<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * Api RenewCredentials
 *
 * @method string getCredentialId()
 */
class RenewCredentials extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

    public $scheme = 'https';

    public $method = 'POST';

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
