<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ProfileSet
 *
 * @method string getEnableInstallAgentNewECS()
 * @method string getEnableActiveAlert()
 * @method string getAutoInstall()
 * @method string getUserId()
 */
class ProfileSet extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'ProfileSet';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withEnableInstallAgentNewECS() instead.
     *
     * @param string $enableInstallAgentNewECS
     *
     * @return $this
     */
    public function setEnableInstallAgentNewECS($enableInstallAgentNewECS)
    {
        return $this->withEnableInstallAgentNewECS($enableInstallAgentNewECS);
    }

    /**
     * @param string $enableInstallAgentNewECS
     *
     * @return $this
     */
    public function withEnableInstallAgentNewECS($enableInstallAgentNewECS)
    {
        $this->data['EnableInstallAgentNewECS'] = $enableInstallAgentNewECS;
        $this->options['query']['EnableInstallAgentNewECS'] = $enableInstallAgentNewECS;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEnableActiveAlert() instead.
     *
     * @param string $enableActiveAlert
     *
     * @return $this
     */
    public function setEnableActiveAlert($enableActiveAlert)
    {
        return $this->withEnableActiveAlert($enableActiveAlert);
    }

    /**
     * @param string $enableActiveAlert
     *
     * @return $this
     */
    public function withEnableActiveAlert($enableActiveAlert)
    {
        $this->data['EnableActiveAlert'] = $enableActiveAlert;
        $this->options['query']['EnableActiveAlert'] = $enableActiveAlert;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAutoInstall() instead.
     *
     * @param string $autoInstall
     *
     * @return $this
     */
    public function setAutoInstall($autoInstall)
    {
        return $this->withAutoInstall($autoInstall);
    }

    /**
     * @param string $autoInstall
     *
     * @return $this
     */
    public function withAutoInstall($autoInstall)
    {
        $this->data['AutoInstall'] = $autoInstall;
        $this->options['query']['AutoInstall'] = $autoInstall;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserId() instead.
     *
     * @param string $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        return $this->withUserId($userId);
    }

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function withUserId($userId)
    {
        $this->data['UserId'] = $userId;
        $this->options['query']['UserId'] = $userId;

        return $this;
    }
}
