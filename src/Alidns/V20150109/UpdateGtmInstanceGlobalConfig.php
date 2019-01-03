<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateGtmInstanceGlobalConfig
 *
 * @method string getAlertGroup()
 * @method string getInstanceId()
 * @method string getInstanceName()
 * @method string getUserDomainName()
 * @method string getUserClientIp()
 * @method string getLbaStrategy()
 * @method string getLang()
 * @method string getTtl()
 */
class UpdateGtmInstanceGlobalConfig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Alidns';

    /**
     * @var string
     */
    public $version = '2015-01-09';

    /**
     * @var string
     */
    public $action = 'UpdateGtmInstanceGlobalConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'alidns';

    /**
     * @deprecated deprecated since version 2.0, Use withAlertGroup() instead.
     *
     * @param string $alertGroup
     *
     * @return $this
     */
    public function setAlertGroup($alertGroup)
    {
        return $this->withAlertGroup($alertGroup);
    }

    /**
     * @param string $alertGroup
     *
     * @return $this
     */
    public function withAlertGroup($alertGroup)
    {
        $this->data['AlertGroup'] = $alertGroup;
        $this->options['query']['AlertGroup'] = $alertGroup;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceName() instead.
     *
     * @param string $instanceName
     *
     * @return $this
     */
    public function setInstanceName($instanceName)
    {
        return $this->withInstanceName($instanceName);
    }

    /**
     * @param string $instanceName
     *
     * @return $this
     */
    public function withInstanceName($instanceName)
    {
        $this->data['InstanceName'] = $instanceName;
        $this->options['query']['InstanceName'] = $instanceName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserDomainName() instead.
     *
     * @param string $userDomainName
     *
     * @return $this
     */
    public function setUserDomainName($userDomainName)
    {
        return $this->withUserDomainName($userDomainName);
    }

    /**
     * @param string $userDomainName
     *
     * @return $this
     */
    public function withUserDomainName($userDomainName)
    {
        $this->data['UserDomainName'] = $userDomainName;
        $this->options['query']['UserDomainName'] = $userDomainName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserClientIp() instead.
     *
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        return $this->withUserClientIp($userClientIp);
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function withUserClientIp($userClientIp)
    {
        $this->data['UserClientIp'] = $userClientIp;
        $this->options['query']['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLbaStrategy() instead.
     *
     * @param string $lbaStrategy
     *
     * @return $this
     */
    public function setLbaStrategy($lbaStrategy)
    {
        return $this->withLbaStrategy($lbaStrategy);
    }

    /**
     * @param string $lbaStrategy
     *
     * @return $this
     */
    public function withLbaStrategy($lbaStrategy)
    {
        $this->data['LbaStrategy'] = $lbaStrategy;
        $this->options['query']['LbaStrategy'] = $lbaStrategy;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTtl() instead.
     *
     * @param string $ttl
     *
     * @return $this
     */
    public function setTtl($ttl)
    {
        return $this->withTtl($ttl);
    }

    /**
     * @param string $ttl
     *
     * @return $this
     */
    public function withTtl($ttl)
    {
        $this->data['Ttl'] = $ttl;
        $this->options['query']['Ttl'] = $ttl;

        return $this;
    }
}
