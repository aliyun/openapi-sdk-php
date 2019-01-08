<?php

namespace AlibabaCloud\UbsmsInner\V20150623;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeBusinessStatusOfUser
 *
 * @method string getUid()
 * @method string getPassword()
 * @method string getServiceCode()
 * @method array getStatusKey()
 * @method string getCallerBid()
 */
class DescribeBusinessStatusOfUser extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ubsms-inner';

    /**
     * @var string
     */
    public $version = '2015-06-23';

    /**
     * @var string
     */
    public $action = 'DescribeBusinessStatusOfUser';

    /**
     * @var string
     */
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
     * @param array $statusKey
     *
     * @return $this
     */
    public function withStatusKey(array $statusKey)
    {
        $this->data['StatusKey'] = $statusKey;
        foreach ($statusKey as $i => $iValue) {
            $this->options['query']['StatusKey.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $callerBid
     *
     * @return $this
     */
    public function withCallerBid($callerBid)
    {
        $this->data['CallerBid'] = $callerBid;
        $this->options['query']['callerBid'] = $callerBid;

        return $this;
    }
}
