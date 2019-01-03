<?php

namespace AlibabaCloud\UbsmsInner\V20150623;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeUserBusinessStatus
 *
 * @method string getUid()
 * @method string getPassword()
 * @method string getServiceCode()
 * @method string getCallerBid()
 */
class DescribeUserBusinessStatus extends RpcRequest
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
    public $action = 'DescribeUserBusinessStatus';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withUid() instead.
     *
     * @param string $uid
     *
     * @return $this
     */
    public function setUid($uid)
    {
        return $this->withUid($uid);
    }

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
     * @deprecated deprecated since version 2.0, Use withPassword() instead.
     *
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        return $this->withPassword($password);
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
     * @deprecated deprecated since version 2.0, Use withServiceCode() instead.
     *
     * @param string $serviceCode
     *
     * @return $this
     */
    public function setServiceCode($serviceCode)
    {
        return $this->withServiceCode($serviceCode);
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
     * @deprecated deprecated since version 2.0, Use withCallerBid() instead.
     *
     * @param string $callerBid
     *
     * @return $this
     */
    public function setcallerBid($callerBid)
    {
        return $this->withCallerBid($callerBid);
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
