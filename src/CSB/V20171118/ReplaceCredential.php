<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * Api ReplaceCredential
 *
 * @method string getCredentialId()
 */
class ReplaceCredential extends Rpc
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
