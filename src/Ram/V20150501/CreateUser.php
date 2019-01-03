<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateUser
 *
 * @method string getComments()
 * @method string getDisplayName()
 * @method string getMobilePhone()
 * @method string getEmail()
 * @method string getUserName()
 */
class CreateUser extends RpcRequest
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
    public $action = 'CreateUser';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withComments() instead.
     *
     * @param string $comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        return $this->withComments($comments);
    }

    /**
     * @param string $comments
     *
     * @return $this
     */
    public function withComments($comments)
    {
        $this->data['Comments'] = $comments;
        $this->options['query']['Comments'] = $comments;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDisplayName() instead.
     *
     * @param string $displayName
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        return $this->withDisplayName($displayName);
    }

    /**
     * @param string $displayName
     *
     * @return $this
     */
    public function withDisplayName($displayName)
    {
        $this->data['DisplayName'] = $displayName;
        $this->options['query']['DisplayName'] = $displayName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMobilePhone() instead.
     *
     * @param string $mobilePhone
     *
     * @return $this
     */
    public function setMobilePhone($mobilePhone)
    {
        return $this->withMobilePhone($mobilePhone);
    }

    /**
     * @param string $mobilePhone
     *
     * @return $this
     */
    public function withMobilePhone($mobilePhone)
    {
        $this->data['MobilePhone'] = $mobilePhone;
        $this->options['query']['MobilePhone'] = $mobilePhone;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEmail() instead.
     *
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        return $this->withEmail($email);
    }

    /**
     * @param string $email
     *
     * @return $this
     */
    public function withEmail($email)
    {
        $this->data['Email'] = $email;
        $this->options['query']['Email'] = $email;

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
