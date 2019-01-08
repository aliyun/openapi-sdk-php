<?php

namespace AlibabaCloud\Cloudauth\V20180916;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetVerifyToken
 *
 * @method string getUserData()
 * @method string getResourceOwnerId()
 * @method string getBiz()
 * @method string getSourceIp()
 * @method string getBinding()
 * @method string getVerifyConfigs()
 * @method string getTicketId()
 */
class GetVerifyToken extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cloudauth';

    /**
     * @var string
     */
    public $version = '2018-09-16';

    /**
     * @var string
     */
    public $action = 'GetVerifyToken';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'cloudauth';

    /**
     * @param string $userData
     *
     * @return $this
     */
    public function withUserData($userData)
    {
        $this->data['UserData'] = $userData;
        $this->options['query']['UserData'] = $userData;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $biz
     *
     * @return $this
     */
    public function withBiz($biz)
    {
        $this->data['Biz'] = $biz;
        $this->options['query']['Biz'] = $biz;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $binding
     *
     * @return $this
     */
    public function withBinding($binding)
    {
        $this->data['Binding'] = $binding;
        $this->options['query']['Binding'] = $binding;

        return $this;
    }

    /**
     * @param string $verifyConfigs
     *
     * @return $this
     */
    public function withVerifyConfigs($verifyConfigs)
    {
        $this->data['VerifyConfigs'] = $verifyConfigs;
        $this->options['query']['VerifyConfigs'] = $verifyConfigs;

        return $this;
    }

    /**
     * @param string $ticketId
     *
     * @return $this
     */
    public function withTicketId($ticketId)
    {
        $this->data['TicketId'] = $ticketId;
        $this->options['query']['TicketId'] = $ticketId;

        return $this;
    }
}
