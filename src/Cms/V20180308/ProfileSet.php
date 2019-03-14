<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api ProfileSet
 *
 * @method string getEnableInstallAgentNewECS()
 * @method string getEnableActiveAlert()
 * @method string getAutoInstall()
 * @method string getUserId()
 */
class ProfileSet extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

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
