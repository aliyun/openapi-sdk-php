<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CallOnlinePrivacyNumber
 *
 * @method string getTelA()
 * @method string getTelB()
 * @method string getInstanceId()
 */
class CallOnlinePrivacyNumber extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CCC';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'CallOnlinePrivacyNumber';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use withTelA() instead.
     *
     * @param string $telA
     *
     * @return $this
     */
    public function setTelA($telA)
    {
        return $this->withTelA($telA);
    }

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
     * @deprecated deprecated since version 2.0, Use withTelB() instead.
     *
     * @param string $telB
     *
     * @return $this
     */
    public function setTelB($telB)
    {
        return $this->withTelB($telB);
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
}
