<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddLiveStreamTranscode
 *
 * @method string getApp()
 * @method string getTemplate()
 * @method string getSecurityToken()
 * @method string getDomain()
 * @method string getOwnerId()
 */
class AddLiveStreamTranscode extends RpcRequest
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
    public $action = 'AddLiveStreamTranscode';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @deprecated deprecated since version 2.0, Use withApp() instead.
     *
     * @param string $app
     *
     * @return $this
     */
    public function setApp($app)
    {
        return $this->withApp($app);
    }

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
     * @deprecated deprecated since version 2.0, Use withTemplate() instead.
     *
     * @param string $template
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        return $this->withTemplate($template);
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
     * @deprecated deprecated since version 2.0, Use withSecurityToken() instead.
     *
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        return $this->withSecurityToken($securityToken);
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
     * @deprecated deprecated since version 2.0, Use withDomain() instead.
     *
     * @param string $domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        return $this->withDomain($domain);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
