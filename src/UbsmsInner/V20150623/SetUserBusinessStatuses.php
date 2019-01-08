<?php

namespace AlibabaCloud\UbsmsInner\V20150623;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetUserBusinessStatuses
 *
 * @method string getStatusKey10()
 * @method string getUid()
 * @method string getStatusValue1()
 * @method string getPassword()
 * @method string getStatusValue2()
 * @method string getServiceCode()
 * @method string getStatusKey3()
 * @method string getStatusValue3()
 * @method string getStatusKey4()
 * @method string getStatusValue4()
 * @method string getStatusKey1()
 * @method string getStatusValue5()
 * @method string getStatusKey2()
 * @method string getStatusValue6()
 * @method string getStatusKey7()
 * @method string getStatusValue7()
 * @method string getStatusKey8()
 * @method string getStatusValue8()
 * @method string getStatusKey5()
 * @method string getStatusValue9()
 * @method string getStatusKey6()
 * @method string getStatusValue10()
 * @method string getStatusKey9()
 */
class SetUserBusinessStatuses extends RpcRequest
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
    public $action = 'SetUserBusinessStatuses';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $statusKey10
     *
     * @return $this
     */
    public function withStatusKey10($statusKey10)
    {
        $this->data['StatusKey10'] = $statusKey10;
        $this->options['query']['StatusKey10'] = $statusKey10;

        return $this;
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
     * @param string $statusValue1
     *
     * @return $this
     */
    public function withStatusValue1($statusValue1)
    {
        $this->data['StatusValue1'] = $statusValue1;
        $this->options['query']['StatusValue1'] = $statusValue1;

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
     * @param string $statusValue2
     *
     * @return $this
     */
    public function withStatusValue2($statusValue2)
    {
        $this->data['StatusValue2'] = $statusValue2;
        $this->options['query']['StatusValue2'] = $statusValue2;

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
     * @param string $statusKey3
     *
     * @return $this
     */
    public function withStatusKey3($statusKey3)
    {
        $this->data['StatusKey3'] = $statusKey3;
        $this->options['query']['StatusKey3'] = $statusKey3;

        return $this;
    }

    /**
     * @param string $statusValue3
     *
     * @return $this
     */
    public function withStatusValue3($statusValue3)
    {
        $this->data['StatusValue3'] = $statusValue3;
        $this->options['query']['StatusValue3'] = $statusValue3;

        return $this;
    }

    /**
     * @param string $statusKey4
     *
     * @return $this
     */
    public function withStatusKey4($statusKey4)
    {
        $this->data['StatusKey4'] = $statusKey4;
        $this->options['query']['StatusKey4'] = $statusKey4;

        return $this;
    }

    /**
     * @param string $statusValue4
     *
     * @return $this
     */
    public function withStatusValue4($statusValue4)
    {
        $this->data['StatusValue4'] = $statusValue4;
        $this->options['query']['StatusValue4'] = $statusValue4;

        return $this;
    }

    /**
     * @param string $statusKey1
     *
     * @return $this
     */
    public function withStatusKey1($statusKey1)
    {
        $this->data['StatusKey1'] = $statusKey1;
        $this->options['query']['StatusKey1'] = $statusKey1;

        return $this;
    }

    /**
     * @param string $statusValue5
     *
     * @return $this
     */
    public function withStatusValue5($statusValue5)
    {
        $this->data['StatusValue5'] = $statusValue5;
        $this->options['query']['StatusValue5'] = $statusValue5;

        return $this;
    }

    /**
     * @param string $statusKey2
     *
     * @return $this
     */
    public function withStatusKey2($statusKey2)
    {
        $this->data['StatusKey2'] = $statusKey2;
        $this->options['query']['StatusKey2'] = $statusKey2;

        return $this;
    }

    /**
     * @param string $statusValue6
     *
     * @return $this
     */
    public function withStatusValue6($statusValue6)
    {
        $this->data['StatusValue6'] = $statusValue6;
        $this->options['query']['StatusValue6'] = $statusValue6;

        return $this;
    }

    /**
     * @param string $statusKey7
     *
     * @return $this
     */
    public function withStatusKey7($statusKey7)
    {
        $this->data['StatusKey7'] = $statusKey7;
        $this->options['query']['StatusKey7'] = $statusKey7;

        return $this;
    }

    /**
     * @param string $statusValue7
     *
     * @return $this
     */
    public function withStatusValue7($statusValue7)
    {
        $this->data['StatusValue7'] = $statusValue7;
        $this->options['query']['StatusValue7'] = $statusValue7;

        return $this;
    }

    /**
     * @param string $statusKey8
     *
     * @return $this
     */
    public function withStatusKey8($statusKey8)
    {
        $this->data['StatusKey8'] = $statusKey8;
        $this->options['query']['StatusKey8'] = $statusKey8;

        return $this;
    }

    /**
     * @param string $statusValue8
     *
     * @return $this
     */
    public function withStatusValue8($statusValue8)
    {
        $this->data['StatusValue8'] = $statusValue8;
        $this->options['query']['StatusValue8'] = $statusValue8;

        return $this;
    }

    /**
     * @param string $statusKey5
     *
     * @return $this
     */
    public function withStatusKey5($statusKey5)
    {
        $this->data['StatusKey5'] = $statusKey5;
        $this->options['query']['StatusKey5'] = $statusKey5;

        return $this;
    }

    /**
     * @param string $statusValue9
     *
     * @return $this
     */
    public function withStatusValue9($statusValue9)
    {
        $this->data['StatusValue9'] = $statusValue9;
        $this->options['query']['StatusValue9'] = $statusValue9;

        return $this;
    }

    /**
     * @param string $statusKey6
     *
     * @return $this
     */
    public function withStatusKey6($statusKey6)
    {
        $this->data['StatusKey6'] = $statusKey6;
        $this->options['query']['StatusKey6'] = $statusKey6;

        return $this;
    }

    /**
     * @param string $statusValue10
     *
     * @return $this
     */
    public function withStatusValue10($statusValue10)
    {
        $this->data['StatusValue10'] = $statusValue10;
        $this->options['query']['StatusValue10'] = $statusValue10;

        return $this;
    }

    /**
     * @param string $statusKey9
     *
     * @return $this
     */
    public function withStatusKey9($statusKey9)
    {
        $this->data['StatusKey9'] = $statusKey9;
        $this->options['query']['StatusKey9'] = $statusKey9;

        return $this;
    }
}
