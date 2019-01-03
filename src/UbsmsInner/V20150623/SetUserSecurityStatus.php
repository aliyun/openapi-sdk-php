<?php

namespace AlibabaCloud\UbsmsInner\V20150623;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetUserSecurityStatus
 *
 * @method string getStatusKey10()
 * @method string getUid()
 * @method string getStatusValue1()
 * @method string getPassword()
 * @method string getStatusValue2()
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
class SetUserSecurityStatus extends RpcRequest
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
    public $action = 'SetUserSecurityStatus';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withStatusKey10() instead.
     *
     * @param string $statusKey10
     *
     * @return $this
     */
    public function setStatusKey10($statusKey10)
    {
        return $this->withStatusKey10($statusKey10);
    }

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
     * @deprecated deprecated since version 2.0, Use withStatusValue1() instead.
     *
     * @param string $statusValue1
     *
     * @return $this
     */
    public function setStatusValue1($statusValue1)
    {
        return $this->withStatusValue1($statusValue1);
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
     * @deprecated deprecated since version 2.0, Use withStatusValue2() instead.
     *
     * @param string $statusValue2
     *
     * @return $this
     */
    public function setStatusValue2($statusValue2)
    {
        return $this->withStatusValue2($statusValue2);
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
     * @deprecated deprecated since version 2.0, Use withStatusKey3() instead.
     *
     * @param string $statusKey3
     *
     * @return $this
     */
    public function setStatusKey3($statusKey3)
    {
        return $this->withStatusKey3($statusKey3);
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
     * @deprecated deprecated since version 2.0, Use withStatusValue3() instead.
     *
     * @param string $statusValue3
     *
     * @return $this
     */
    public function setStatusValue3($statusValue3)
    {
        return $this->withStatusValue3($statusValue3);
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
     * @deprecated deprecated since version 2.0, Use withStatusKey4() instead.
     *
     * @param string $statusKey4
     *
     * @return $this
     */
    public function setStatusKey4($statusKey4)
    {
        return $this->withStatusKey4($statusKey4);
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
     * @deprecated deprecated since version 2.0, Use withStatusValue4() instead.
     *
     * @param string $statusValue4
     *
     * @return $this
     */
    public function setStatusValue4($statusValue4)
    {
        return $this->withStatusValue4($statusValue4);
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
     * @deprecated deprecated since version 2.0, Use withStatusKey1() instead.
     *
     * @param string $statusKey1
     *
     * @return $this
     */
    public function setStatusKey1($statusKey1)
    {
        return $this->withStatusKey1($statusKey1);
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
     * @deprecated deprecated since version 2.0, Use withStatusValue5() instead.
     *
     * @param string $statusValue5
     *
     * @return $this
     */
    public function setStatusValue5($statusValue5)
    {
        return $this->withStatusValue5($statusValue5);
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
     * @deprecated deprecated since version 2.0, Use withStatusKey2() instead.
     *
     * @param string $statusKey2
     *
     * @return $this
     */
    public function setStatusKey2($statusKey2)
    {
        return $this->withStatusKey2($statusKey2);
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
     * @deprecated deprecated since version 2.0, Use withStatusValue6() instead.
     *
     * @param string $statusValue6
     *
     * @return $this
     */
    public function setStatusValue6($statusValue6)
    {
        return $this->withStatusValue6($statusValue6);
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
     * @deprecated deprecated since version 2.0, Use withStatusKey7() instead.
     *
     * @param string $statusKey7
     *
     * @return $this
     */
    public function setStatusKey7($statusKey7)
    {
        return $this->withStatusKey7($statusKey7);
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
     * @deprecated deprecated since version 2.0, Use withStatusValue7() instead.
     *
     * @param string $statusValue7
     *
     * @return $this
     */
    public function setStatusValue7($statusValue7)
    {
        return $this->withStatusValue7($statusValue7);
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
     * @deprecated deprecated since version 2.0, Use withStatusKey8() instead.
     *
     * @param string $statusKey8
     *
     * @return $this
     */
    public function setStatusKey8($statusKey8)
    {
        return $this->withStatusKey8($statusKey8);
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
     * @deprecated deprecated since version 2.0, Use withStatusValue8() instead.
     *
     * @param string $statusValue8
     *
     * @return $this
     */
    public function setStatusValue8($statusValue8)
    {
        return $this->withStatusValue8($statusValue8);
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
     * @deprecated deprecated since version 2.0, Use withStatusKey5() instead.
     *
     * @param string $statusKey5
     *
     * @return $this
     */
    public function setStatusKey5($statusKey5)
    {
        return $this->withStatusKey5($statusKey5);
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
     * @deprecated deprecated since version 2.0, Use withStatusValue9() instead.
     *
     * @param string $statusValue9
     *
     * @return $this
     */
    public function setStatusValue9($statusValue9)
    {
        return $this->withStatusValue9($statusValue9);
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
     * @deprecated deprecated since version 2.0, Use withStatusKey6() instead.
     *
     * @param string $statusKey6
     *
     * @return $this
     */
    public function setStatusKey6($statusKey6)
    {
        return $this->withStatusKey6($statusKey6);
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
     * @deprecated deprecated since version 2.0, Use withStatusValue10() instead.
     *
     * @param string $statusValue10
     *
     * @return $this
     */
    public function setStatusValue10($statusValue10)
    {
        return $this->withStatusValue10($statusValue10);
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
     * @deprecated deprecated since version 2.0, Use withStatusKey9() instead.
     *
     * @param string $statusKey9
     *
     * @return $this
     */
    public function setStatusKey9($statusKey9)
    {
        return $this->withStatusKey9($statusKey9);
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
