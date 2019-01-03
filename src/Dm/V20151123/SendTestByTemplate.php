<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SendTestByTemplate
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
class SendTestByTemplate extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dm';

    /**
     * @var string
     */
    public $version = '2015-11-23';

    /**
     * @var string
     */
    public $action = 'SendTestByTemplate';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withBirthday() instead.
     *
     * @param string $birthday
     *
     * @return $this
     */
    public function setBirthday($birthday)
    {
        return $this->withBirthday($birthday);
    }

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
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
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
     * @deprecated deprecated since version 2.0, Use withGender() instead.
     *
     * @param string $gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        return $this->withGender($gender);
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
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
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
     * @deprecated deprecated since version 2.0, Use withMobile() instead.
     *
     * @param string $mobile
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        return $this->withMobile($mobile);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withTemplateId() instead.
     *
     * @param string $templateId
     *
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        return $this->withTemplateId($templateId);
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
     * @deprecated deprecated since version 2.0, Use withAccountName() instead.
     *
     * @param string $accountName
     *
     * @return $this
     */
    public function setAccountName($accountName)
    {
        return $this->withAccountName($accountName);
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
     * @deprecated deprecated since version 2.0, Use withNickName() instead.
     *
     * @param string $nickName
     *
     * @return $this
     */
    public function setNickName($nickName)
    {
        return $this->withNickName($nickName);
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
