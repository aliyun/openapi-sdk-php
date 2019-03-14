<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Rpc;

/**
 * Api SendTestByTemplate
 *
 * @method string getBirthday()
 * @method string getResourceOwnerId()
 * @method string getGender()
 * @method string getResourceOwnerAccount()
 * @method string getMobile()
 * @method string getOwnerId()
 * @method string getTemplateId()
 * @method string getAccountName()
 * @method string getNickName()
 * @method string getEmail()
 * @method string getUserName()
 */
class SendTestByTemplate extends Rpc
{
    public $product = 'Dm';

    public $version = '2015-11-23';

    public $method = 'POST';

    /**
     * @param string $birthday
     *
     * @return $this
     */
    public function withBirthday($birthday)
    {
        $this->data['Birthday'] = $birthday;
        $this->options['query']['Birthday'] = $birthday;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $gender
     *
     * @return $this
     */
    public function withGender($gender)
    {
        $this->data['Gender'] = $gender;
        $this->options['query']['Gender'] = $gender;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $mobile
     *
     * @return $this
     */
    public function withMobile($mobile)
    {
        $this->data['Mobile'] = $mobile;
        $this->options['query']['Mobile'] = $mobile;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $templateId
     *
     * @return $this
     */
    public function withTemplateId($templateId)
    {
        $this->data['TemplateId'] = $templateId;
        $this->options['query']['TemplateId'] = $templateId;

        return $this;
    }

    /**
     * @param string $accountName
     *
     * @return $this
     */
    public function withAccountName($accountName)
    {
        $this->data['AccountName'] = $accountName;
        $this->options['query']['AccountName'] = $accountName;

        return $this;
    }

    /**
     * @param string $nickName
     *
     * @return $this
     */
    public function withNickName($nickName)
    {
        $this->data['NickName'] = $nickName;
        $this->options['query']['NickName'] = $nickName;

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
