<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * Api UpdateUser
 *
 * @method string getNewUserName()
 * @method string getNewDisplayName()
 * @method string getNewMobilePhone()
 * @method string getNewComments()
 * @method string getNewEmail()
 * @method string getUserName()
 */
class UpdateUser extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

    public $method = 'POST';

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
