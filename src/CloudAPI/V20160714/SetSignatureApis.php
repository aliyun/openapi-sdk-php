<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetSignatureApis
 *
 * @method string getStageName()
 * @method string getSecurityToken()
 * @method string getGroupId()
 * @method string getSignatureId()
 * @method string getApiIds()
 */
class SetSignatureApis extends RpcRequest
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
    public $action = 'SetSignatureApis';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'apigateway';

    /**
     * @param string $stageName
     *
     * @return $this
     */
    public function withStageName($stageName)
    {
        $this->data['StageName'] = $stageName;
        $this->options['query']['StageName'] = $stageName;

        return $this;
    }

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
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

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

    /**
     * @param string $apiIds
     *
     * @return $this
     */
    public function withApiIds($apiIds)
    {
        $this->data['ApiIds'] = $apiIds;
        $this->options['query']['ApiIds'] = $apiIds;

        return $this;
    }
}
