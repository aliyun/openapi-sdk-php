<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteLiveStreamTranscode
 *
 * @method string getApp()
 * @method string getTemplate()
 * @method string getSecurityToken()
 * @method string getDomain()
 * @method string getOwnerId()
 */
class DeleteLiveStreamTranscode extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'live';

    /**
     * @var string
     */
    public $version = '2016-11-01';

    /**
     * @var string
     */
    public $action = 'DeleteLiveStreamTranscode';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @param string $app
     *
     * @return $this
     */
    public function withApp($app)
    {
        $this->data['App'] = $app;
        $this->options['query']['App'] = $app;

        return $this;
    }

    /**
     * @param string $template
     *
     * @return $this
     */
    public function withTemplate($template)
    {
        $this->data['Template'] = $template;
        $this->options['query']['Template'] = $template;

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
     * @param string $domain
     *
     * @return $this
     */
    public function withDomain($domain)
    {
        $this->data['Domain'] = $domain;
        $this->options['query']['Domain'] = $domain;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }
}
