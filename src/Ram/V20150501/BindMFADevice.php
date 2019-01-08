<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BindMFADevice
 *
 * @method string getSerialNumber()
 * @method string getAuthenticationCode2()
 * @method string getAuthenticationCode1()
 * @method string getUserName()
 */
class BindMFADevice extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ram';

    /**
     * @var string
     */
    public $version = '2015-05-01';

    /**
     * @var string
     */
    public $action = 'BindMFADevice';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $serialNumber
     *
     * @return $this
     */
    public function withSerialNumber($serialNumber)
    {
        $this->data['SerialNumber'] = $serialNumber;
        $this->options['query']['SerialNumber'] = $serialNumber;

        return $this;
    }

    /**
     * @param string $authenticationCode2
     *
     * @return $this
     */
    public function withAuthenticationCode2($authenticationCode2)
    {
        $this->data['AuthenticationCode2'] = $authenticationCode2;
        $this->options['query']['AuthenticationCode2'] = $authenticationCode2;

        return $this;
    }

    /**
     * @param string $authenticationCode1
     *
     * @return $this
     */
    public function withAuthenticationCode1($authenticationCode1)
    {
        $this->data['AuthenticationCode1'] = $authenticationCode1;
        $this->options['query']['AuthenticationCode1'] = $authenticationCode1;

        return $this;
    }

    /**
     * @param string $userName
     *
     * @return $this
     */
    public function withUserName($userName)
    {
        $this->data['UserName'] = $userName;
        $this->options['query']['UserName'] = $userName;

        return $this;
    }
}
