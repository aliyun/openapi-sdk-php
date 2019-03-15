<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getDefaultRepoLocation()
 * @method $this withDefaultRepoLocation($value)
 * @method string getDBPassword()
 * @method $this withDBPassword($value)
 * @method array getRepo()
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBUsername()
 * @method $this withDBUsername($value)
 * @method string getDBServerInfo()
 * @method $this withDBServerInfo($value)
 * @method string getPullUpdateTimeout()
 * @method $this withPullUpdateTimeout($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getImageExpirationTimeout()
 * @method $this withImageExpirationTimeout($value)
 */
class ModifyImageGatewayConfig extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';

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
}
