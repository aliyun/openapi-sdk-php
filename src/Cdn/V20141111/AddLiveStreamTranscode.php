<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddLiveStreamTranscode
 *
 * @method string getTemplate()
 * @method string getApp()
 * @method string getSecurityToken()
 * @method string getOwnerAccount()
 * @method string getDomain()
 * @method string getRecord()
 * @method string getOwnerId()
 * @method string getSnapshot()
 */
class AddLiveStreamTranscode extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2014-11-11';

    /**
     * @var string
     */
    public $action = 'AddLiveStreamTranscode';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

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
     * @deprecated deprecated since version 2.0, Use withRecord() instead.
     *
     * @param string $record
     *
     * @return $this
     */
    public function setRecord($record)
    {
        return $this->withRecord($record);
    }

    /**
     * @param string $record
     *
     * @return $this
     */
    public function withRecord($record)
    {
        $this->data['Record'] = $record;
        $this->options['query']['Record'] = $record;

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

    /**
     * @deprecated deprecated since version 2.0, Use withSnapshot() instead.
     *
     * @param string $snapshot
     *
     * @return $this
     */
    public function setSnapshot($snapshot)
    {
        return $this->withSnapshot($snapshot);
    }

    /**
     * @param string $snapshot
     *
     * @return $this
     */
    public function withSnapshot($snapshot)
    {
        $this->data['Snapshot'] = $snapshot;
        $this->options['query']['Snapshot'] = $snapshot;

        return $this;
    }
}
