<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateSmartAccessGateway
 *
 * @method string getMaxBandWidth()
 * @method string getResourceOwnerId()
 * @method string getDescription()
 * @method string getReceiverTown()
 * @method string getSslConnectionSpec()
 * @method string getReceiverDistrict()
 * @method string getReceiverAddress()
 * @method string getInstanceType()
 * @method string getBuyerMessage()
 * @method string getHardWareSpec()
 * @method string getReceiverEmail()
 * @method string getReceiverState()
 * @method string getReceiverCity()
 * @method string getPeriod()
 * @method string getAutoPay()
 * @method string getReceiverMobile()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getReceiverPhone()
 * @method string getReceiverName()
 * @method string getHaType()
 * @method string getName()
 * @method string getReceiverCountry()
 * @method string getChargeType()
 * @method string getReceiverZip()
 */
class CreateSmartAccessGateway extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Smartag';

    /**
     * @var string
     */
    public $version = '2018-03-13';

    /**
     * @var string
     */
    public $action = 'CreateSmartAccessGateway';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'smartag';

    /**
     * @param string $maxBandWidth
     *
     * @return $this
     */
    public function withMaxBandWidth($maxBandWidth)
    {
        $this->data['MaxBandWidth'] = $maxBandWidth;
        $this->options['query']['MaxBandWidth'] = $maxBandWidth;

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
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @param string $receiverTown
     *
     * @return $this
     */
    public function withReceiverTown($receiverTown)
    {
        $this->data['ReceiverTown'] = $receiverTown;
        $this->options['query']['ReceiverTown'] = $receiverTown;

        return $this;
    }

    /**
     * @param string $sslConnectionSpec
     *
     * @return $this
     */
    public function withSslConnectionSpec($sslConnectionSpec)
    {
        $this->data['SslConnectionSpec'] = $sslConnectionSpec;
        $this->options['query']['SslConnectionSpec'] = $sslConnectionSpec;

        return $this;
    }

    /**
     * @param string $receiverDistrict
     *
     * @return $this
     */
    public function withReceiverDistrict($receiverDistrict)
    {
        $this->data['ReceiverDistrict'] = $receiverDistrict;
        $this->options['query']['ReceiverDistrict'] = $receiverDistrict;

        return $this;
    }

    /**
     * @param string $receiverAddress
     *
     * @return $this
     */
    public function withReceiverAddress($receiverAddress)
    {
        $this->data['ReceiverAddress'] = $receiverAddress;
        $this->options['query']['ReceiverAddress'] = $receiverAddress;

        return $this;
    }

    /**
     * @param string $instanceType
     *
     * @return $this
     */
    public function withInstanceType($instanceType)
    {
        $this->data['InstanceType'] = $instanceType;
        $this->options['query']['InstanceType'] = $instanceType;

        return $this;
    }

    /**
     * @param string $buyerMessage
     *
     * @return $this
     */
    public function withBuyerMessage($buyerMessage)
    {
        $this->data['BuyerMessage'] = $buyerMessage;
        $this->options['query']['BuyerMessage'] = $buyerMessage;

        return $this;
    }

    /**
     * @param string $hardWareSpec
     *
     * @return $this
     */
    public function withHardWareSpec($hardWareSpec)
    {
        $this->data['HardWareSpec'] = $hardWareSpec;
        $this->options['query']['HardWareSpec'] = $hardWareSpec;

        return $this;
    }

    /**
     * @param string $receiverEmail
     *
     * @return $this
     */
    public function withReceiverEmail($receiverEmail)
    {
        $this->data['ReceiverEmail'] = $receiverEmail;
        $this->options['query']['ReceiverEmail'] = $receiverEmail;

        return $this;
    }

    /**
     * @param string $receiverState
     *
     * @return $this
     */
    public function withReceiverState($receiverState)
    {
        $this->data['ReceiverState'] = $receiverState;
        $this->options['query']['ReceiverState'] = $receiverState;

        return $this;
    }

    /**
     * @param string $receiverCity
     *
     * @return $this
     */
    public function withReceiverCity($receiverCity)
    {
        $this->data['ReceiverCity'] = $receiverCity;
        $this->options['query']['ReceiverCity'] = $receiverCity;

        return $this;
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function withPeriod($period)
    {
        $this->data['Period'] = $period;
        $this->options['query']['Period'] = $period;

        return $this;
    }

    /**
     * @param string $autoPay
     *
     * @return $this
     */
    public function withAutoPay($autoPay)
    {
        $this->data['AutoPay'] = $autoPay;
        $this->options['query']['AutoPay'] = $autoPay;

        return $this;
    }

    /**
     * @param string $receiverMobile
     *
     * @return $this
     */
    public function withReceiverMobile($receiverMobile)
    {
        $this->data['ReceiverMobile'] = $receiverMobile;
        $this->options['query']['ReceiverMobile'] = $receiverMobile;

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
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

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
     * @param string $receiverPhone
     *
     * @return $this
     */
    public function withReceiverPhone($receiverPhone)
    {
        $this->data['ReceiverPhone'] = $receiverPhone;
        $this->options['query']['ReceiverPhone'] = $receiverPhone;

        return $this;
    }

    /**
     * @param string $receiverName
     *
     * @return $this
     */
    public function withReceiverName($receiverName)
    {
        $this->data['ReceiverName'] = $receiverName;
        $this->options['query']['ReceiverName'] = $receiverName;

        return $this;
    }

    /**
     * @param string $haType
     *
     * @return $this
     */
    public function withHaType($haType)
    {
        $this->data['HaType'] = $haType;
        $this->options['query']['HaType'] = $haType;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @param string $receiverCountry
     *
     * @return $this
     */
    public function withReceiverCountry($receiverCountry)
    {
        $this->data['ReceiverCountry'] = $receiverCountry;
        $this->options['query']['ReceiverCountry'] = $receiverCountry;

        return $this;
    }

    /**
     * @param string $chargeType
     *
     * @return $this
     */
    public function withChargeType($chargeType)
    {
        $this->data['ChargeType'] = $chargeType;
        $this->options['query']['ChargeType'] = $chargeType;

        return $this;
    }

    /**
     * @param string $receiverZip
     *
     * @return $this
     */
    public function withReceiverZip($receiverZip)
    {
        $this->data['ReceiverZip'] = $receiverZip;
        $this->options['query']['ReceiverZip'] = $receiverZip;

        return $this;
    }
}
