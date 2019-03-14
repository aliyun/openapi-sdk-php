<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api CallOnlinePrivacyNumber
 *
 * @method string getTelA()
 * @method string getTelB()
 * @method string getInstanceId()
 */
class CallOnlinePrivacyNumber extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

    /**
     * @param string $telA
     *
     * @return $this
     */
    public function withTelA($telA)
    {
        $this->data['TelA'] = $telA;
        $this->options['query']['TelA'] = $telA;

        return $this;
    }

    /**
     * @param string $telB
     *
     * @return $this
     */
    public function withTelB($telB)
    {
        $this->data['TelB'] = $telB;
        $this->options['query']['TelB'] = $telB;

        return $this;
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
}
