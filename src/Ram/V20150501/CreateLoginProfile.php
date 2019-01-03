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
     * @deprecated deprecated since version 2.0, Use withPasswordResetRequired() instead.
     *
     * @param string $passwordResetRequired
     *
     * @return $this
     */
    public function setPasswordResetRequired($passwordResetRequired)
    {
        return $this->withPasswordResetRequired($passwordResetRequired);
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
     * @deprecated deprecated since version 2.0, Use withMFABindRequired() instead.
     *
     * @param string $mFABindRequired
     *
     * @return $this
     */
    public function setMFABindRequired($mFABindRequired)
    {
        return $this->withMFABindRequired($mFABindRequired);
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
     * @deprecated deprecated since version 2.0, Use withUserName() instead.
     *
     * @param string $userName
     *
     * @return $this
     */
    public function setUserName($userName)
    {
        return $this->withUserName($userName);
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
