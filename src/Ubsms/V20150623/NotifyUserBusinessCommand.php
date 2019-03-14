<?php

namespace AlibabaCloud\Ubsms\V20150623;

use AlibabaCloud\Rpc;

/**
 * Api NotifyUserBusinessCommand
 *
 * @method string getUid()
 * @method string getPassword()
 * @method string getInstanceId()
 * @method string getServiceCode()
 * @method string getClientToken()
 * @method string getCmd()
 * @method string getRegion()
 */
class NotifyUserBusinessCommand extends Rpc
{
    public $product = 'Ubsms';

    public $version = '2015-06-23';

    public $method = 'POST';

    /**
     * @param string $uid
     *
     * @return $this
     */
    public function withUid($uid)
    {
        $this->data['Uid'] = $uid;
        $this->options['query']['Uid'] = $uid;

        return $this;
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function withPassword($password)
    {
        $this->data['Password'] = $password;
        $this->options['query']['Password'] = $password;

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

    /**
     * @param string $serviceCode
     *
     * @return $this
     */
    public function withServiceCode($serviceCode)
    {
        $this->data['ServiceCode'] = $serviceCode;
        $this->options['query']['ServiceCode'] = $serviceCode;

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $cmd
     *
     * @return $this
     */
    public function withCmd($cmd)
    {
        $this->data['Cmd'] = $cmd;
        $this->options['query']['Cmd'] = $cmd;

        return $this;
    }

    /**
     * @param string $region
     *
     * @return $this
     */
    public function withRegion($region)
    {
        $this->data['Region'] = $region;
        $this->options['query']['Region'] = $region;

        return $this;
    }
}
