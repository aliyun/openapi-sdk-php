<?php

namespace AlibabaCloud\Sms\V20160927;

use AlibabaCloud\Rpc;

/**
 * Api BatchSendSms
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
class BatchSendSms extends Rpc
{
    public $product = 'Sms';

    public $version = '2016-09-27';

    public $method = 'POST';

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
