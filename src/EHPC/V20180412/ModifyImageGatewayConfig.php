<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyImageGatewayConfig
 *
 * @method string getDefaultRepoLocation()
 * @method string getDBPassword()
 * @method array getRepo()
 * @method string getDBType()
 * @method string getDBUsername()
 * @method string getDBServerInfo()
 * @method string getPullUpdateTimeout()
 * @method string getClusterId()
 * @method string getImageExpirationTimeout()
 */
class ModifyImageGatewayConfig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EHPC';

    /**
     * @var string
     */
    public $version = '2018-04-12';

    /**
     * @var string
     */
    public $action = 'ModifyImageGatewayConfig';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use withDefaultRepoLocation() instead.
     *
     * @param string $defaultRepoLocation
     *
     * @return $this
     */
    public function setDefaultRepoLocation($defaultRepoLocation)
    {
        return $this->withDefaultRepoLocation($defaultRepoLocation);
    }

    /**
     * @param string $defaultRepoLocation
     *
     * @return $this
     */
    public function withDefaultRepoLocation($defaultRepoLocation)
    {
        $this->data['DefaultRepoLocation'] = $defaultRepoLocation;
        $this->options['query']['DefaultRepoLocation'] = $defaultRepoLocation;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDBPassword() instead.
     *
     * @param string $dBPassword
     *
     * @return $this
     */
    public function setDBPassword($dBPassword)
    {
        return $this->withDBPassword($dBPassword);
    }

    /**
     * @param string $dBPassword
     *
     * @return $this
     */
    public function withDBPassword($dBPassword)
    {
        $this->data['DBPassword'] = $dBPassword;
        $this->options['query']['DBPassword'] = $dBPassword;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getRepo() instead.
     *
     * @return array
     */
    public function getRepos()
    {
        return $this->getRepo();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRepo() instead.
     *
     * @param array $repos
     *
     * @return $this
     */
    public function setRepos(array $repos)
    {
        return $this->withRepo($repos);
    }

    /**
     * @param array $repo
     *
     * @return $this
     */
    public function withRepo(array $repo)
    {
        $this->data['Repo'] = $repo;
        foreach ($repo as $i => $iValue) {
            $this->options['query']['Repo.' . ($i + 1) . '.Auth'] = $repo[$i]['Auth'];
            $this->options['query']['Repo.' . ($i + 1) . '.Location'] = $repo[$i]['Location'];
            $this->options['query']['Repo.' . ($i + 1) . '.URL'] = $repo[$i]['URL'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDBType() instead.
     *
     * @param string $dBType
     *
     * @return $this
     */
    public function setDBType($dBType)
    {
        return $this->withDBType($dBType);
    }

    /**
     * @param string $dBType
     *
     * @return $this
     */
    public function withDBType($dBType)
    {
        $this->data['DBType'] = $dBType;
        $this->options['query']['DBType'] = $dBType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDBUsername() instead.
     *
     * @param string $dBUsername
     *
     * @return $this
     */
    public function setDBUsername($dBUsername)
    {
        return $this->withDBUsername($dBUsername);
    }

    /**
     * @param string $dBUsername
     *
     * @return $this
     */
    public function withDBUsername($dBUsername)
    {
        $this->data['DBUsername'] = $dBUsername;
        $this->options['query']['DBUsername'] = $dBUsername;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDBServerInfo() instead.
     *
     * @param string $dBServerInfo
     *
     * @return $this
     */
    public function setDBServerInfo($dBServerInfo)
    {
        return $this->withDBServerInfo($dBServerInfo);
    }

    /**
     * @param string $dBServerInfo
     *
     * @return $this
     */
    public function withDBServerInfo($dBServerInfo)
    {
        $this->data['DBServerInfo'] = $dBServerInfo;
        $this->options['query']['DBServerInfo'] = $dBServerInfo;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPullUpdateTimeout() instead.
     *
     * @param string $pullUpdateTimeout
     *
     * @return $this
     */
    public function setPullUpdateTimeout($pullUpdateTimeout)
    {
        return $this->withPullUpdateTimeout($pullUpdateTimeout);
    }

    /**
     * @param string $pullUpdateTimeout
     *
     * @return $this
     */
    public function withPullUpdateTimeout($pullUpdateTimeout)
    {
        $this->data['PullUpdateTimeout'] = $pullUpdateTimeout;
        $this->options['query']['PullUpdateTimeout'] = $pullUpdateTimeout;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClusterId() instead.
     *
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        return $this->withClusterId($clusterId);
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function withClusterId($clusterId)
    {
        $this->data['ClusterId'] = $clusterId;
        $this->options['query']['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withImageExpirationTimeout() instead.
     *
     * @param string $imageExpirationTimeout
     *
     * @return $this
     */
    public function setImageExpirationTimeout($imageExpirationTimeout)
    {
        return $this->withImageExpirationTimeout($imageExpirationTimeout);
    }

    /**
     * @param string $imageExpirationTimeout
     *
     * @return $this
     */
    public function withImageExpirationTimeout($imageExpirationTimeout)
    {
        $this->data['ImageExpirationTimeout'] = $imageExpirationTimeout;
        $this->options['query']['ImageExpirationTimeout'] = $imageExpirationTimeout;

        return $this;
    }
}
