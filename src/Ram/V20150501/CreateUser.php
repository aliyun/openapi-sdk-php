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
