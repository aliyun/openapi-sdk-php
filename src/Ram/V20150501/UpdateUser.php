<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateUser
 *
 * @method string getNewUserName()
 * @method string getNewDisplayName()
 * @method string getNewMobilePhone()
 * @method string getNewComments()
 * @method string getNewEmail()
 * @method string getUserName()
 */
class UpdateUser extends RpcRequest
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
    public $action = 'UpdateUser';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withNewUserName() instead.
     *
     * @param string $newUserName
     *
     * @return $this
     */
    public function setNewUserName($newUserName)
    {
        return $this->withNewUserName($newUserName);
    }

    /**
     * @param string $newUserName
     *
     * @return $this
     */
    public function withNewUserName($newUserName)
    {
        $this->data['NewUserName'] = $newUserName;
        $this->options['query']['NewUserName'] = $newUserName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNewDisplayName() instead.
     *
     * @param string $newDisplayName
     *
     * @return $this
     */
    public function setNewDisplayName($newDisplayName)
    {
        return $this->withNewDisplayName($newDisplayName);
    }

    /**
     * @param string $newDisplayName
     *
     * @return $this
     */
    public function withNewDisplayName($newDisplayName)
    {
        $this->data['NewDisplayName'] = $newDisplayName;
        $this->options['query']['NewDisplayName'] = $newDisplayName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNewMobilePhone() instead.
     *
     * @param string $newMobilePhone
     *
     * @return $this
     */
    public function setNewMobilePhone($newMobilePhone)
    {
        return $this->withNewMobilePhone($newMobilePhone);
    }

    /**
     * @param string $newMobilePhone
     *
     * @return $this
     */
    public function withNewMobilePhone($newMobilePhone)
    {
        $this->data['NewMobilePhone'] = $newMobilePhone;
        $this->options['query']['NewMobilePhone'] = $newMobilePhone;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNewComments() instead.
     *
     * @param string $newComments
     *
     * @return $this
     */
    public function setNewComments($newComments)
    {
        return $this->withNewComments($newComments);
    }

    /**
     * @param string $newComments
     *
     * @return $this
     */
    public function withNewComments($newComments)
    {
        $this->data['NewComments'] = $newComments;
        $this->options['query']['NewComments'] = $newComments;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNewEmail() instead.
     *
     * @param string $newEmail
     *
     * @return $this
     */
    public function setNewEmail($newEmail)
    {
        return $this->withNewEmail($newEmail);
    }

    /**
     * @param string $newEmail
     *
     * @return $this
     */
    public function withNewEmail($newEmail)
    {
        $this->data['NewEmail'] = $newEmail;
        $this->options['query']['NewEmail'] = $newEmail;

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
