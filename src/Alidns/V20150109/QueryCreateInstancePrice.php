<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryCreateInstancePrice
 *
 * @method string getMonth()
 * @method string getUserClientIp()
 * @method string getLang()
 * @method string getInstanceVersion()
 * @method string getOwnerId()
 */
class QueryCreateInstancePrice extends RpcRequest
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
    public $action = 'QueryCreateInstancePrice';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'alidns';

    /**
     * @param string $month
     *
     * @return $this
     */
    public function withMonth($month)
    {
        $this->data['Month'] = $month;
        $this->options['query']['Month'] = $month;

        return $this;
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
     * @param string $instanceVersion
     *
     * @return $this
     */
    public function withInstanceVersion($instanceVersion)
    {
        $this->data['InstanceVersion'] = $instanceVersion;
        $this->options['query']['InstanceVersion'] = $instanceVersion;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }
}
