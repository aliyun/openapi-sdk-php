<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateLoginProfile
 *
 * @method string getPassword()
 * @method string getPasswordResetRequired()
 * @method string getMFABindRequired()
 * @method string getUserName()
 */
class CreateLoginProfile extends RpcRequest
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
    public $action = 'CreateLoginProfile';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @param string $passwordResetRequired
     *
     * @return $this
     */
    public function withPasswordResetRequired($passwordResetRequired)
    {
        $this->data['PasswordResetRequired'] = $passwordResetRequired;
        $this->options['query']['PasswordResetRequired'] = $passwordResetRequired;

        return $this;
    }

    /**
     * @param string $mFABindRequired
     *
     * @return $this
     */
    public function withMFABindRequired($mFABindRequired)
    {
        $this->data['MFABindRequired'] = $mFABindRequired;
        $this->options['query']['MFABindRequired'] = $mFABindRequired;

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
