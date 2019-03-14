<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api UninstallSoftware
 *
 * @method string getApplication()
 * @method string getClusterId()
 */
class UninstallSoftware extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';

    /**
     * @param string $application
     *
     * @return $this
     */
    public function withApplication($application)
    {
        $this->data['Application'] = $application;
        $this->options['query']['Application'] = $application;

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
}
