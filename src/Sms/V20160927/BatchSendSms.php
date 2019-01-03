<?php

namespace AlibabaCloud\Sms\V20160927;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BatchSendSms
 *
 * @method string getResourceOwnerId()
 * @method string getSmsResourceOwnerId()
 * @method string getData()
 * @method string getResourceOwnerAccount()
 * @method string getMessageID()
 * @method string getOwnerId()
 * @method string getRegion()
 * @method string getVersion()
 */
class BatchSendSms extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Sms';

    /**
     * @var string
     */
    public $version = '2016-09-27';

    /**
     * @var string
     */
    public $action = 'BatchSendSms';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withSmsResourceOwnerId() instead.
     *
     * @param string $smsResourceOwnerId
     *
     * @return $this
     */
    public function setSmsResourceOwnerId($smsResourceOwnerId)
    {
        return $this->withSmsResourceOwnerId($smsResourceOwnerId);
    }

    /**
     * @param string $smsResourceOwnerId
     *
     * @return $this
     */
    public function withSmsResourceOwnerId($smsResourceOwnerId)
    {
        $this->data['SmsResourceOwnerId'] = $smsResourceOwnerId;
        $this->options['query']['SmsResourceOwnerId'] = $smsResourceOwnerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withData() instead.
     *
     * @param string $data
     *
     * @return $this
     */
    public function setData($data)
    {
        return $this->withData($data);
    }

    /**
     * @param string $data
     *
     * @return $this
     */
    public function withData($data)
    {
        $this->data['Data'] = $data;
        $this->options['query']['Data'] = $data;

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
     * @deprecated deprecated since version 2.0, Use withMessageID() instead.
     *
     * @param string $messageID
     *
     * @return $this
     */
    public function setMessageID($messageID)
    {
        return $this->withMessageID($messageID);
    }

    /**
     * @param string $messageID
     *
     * @return $this
     */
    public function withMessageID($messageID)
    {
        $this->data['MessageID'] = $messageID;
        $this->options['query']['MessageID'] = $messageID;

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
     * @deprecated deprecated since version 2.0, Use withRegion() instead.
     *
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        return $this->withRegion($region);
    }

    /**
     * @param string $region
     *
     * @return $this
     */
    public function withRegion($region)
    {
        $this->data['Region'] = $region;
        $this->options['query']['Region'] = $region;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVersion() instead.
     *
     * @param string $version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        return $this->withVersion($version);
    }

    /**
     * @param string $version
     *
     * @return $this
     */
    public function withVersion($version)
    {
        $this->data['Version'] = $version;
        $this->options['query']['Version'] = $version;

        return $this;
    }
}
