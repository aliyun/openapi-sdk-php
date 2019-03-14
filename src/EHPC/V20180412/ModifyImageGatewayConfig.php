<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api ModifyImageGatewayConfig
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
class ModifyImageGatewayConfig extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';

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
