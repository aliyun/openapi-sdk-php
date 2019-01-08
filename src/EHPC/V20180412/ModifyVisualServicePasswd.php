<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyVisualServicePasswd
 *
 * @method string getPasswd()
 * @method string getClusterId()
 */
class ModifyVisualServicePasswd extends RpcRequest
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
    public $action = 'ModifyVisualServicePasswd';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @param string $passwd
     *
     * @return $this
     */
    public function withPasswd($passwd)
    {
        $this->data['Passwd'] = $passwd;
        $this->options['query']['Passwd'] = $passwd;

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
