<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteSignature
 *
 * @method string getSecurityToken()
 * @method string getSignatureId()
 */
class DeleteSignature extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CloudAPI';

    /**
     * @var string
     */
    public $version = '2016-07-14';

    /**
     * @var string
     */
    public $action = 'DeleteSignature';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'apigateway';

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $signatureId
     *
     * @return $this
     */
    public function withSignatureId($signatureId)
    {
        $this->data['SignatureId'] = $signatureId;
        $this->options['query']['SignatureId'] = $signatureId;

        return $this;
    }
}
