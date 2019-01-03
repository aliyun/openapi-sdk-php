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
 * @method string getReceiverDistrict()
 * @method string getReceiverAddress()
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
     * @deprecated deprecated since version 2.0, Use withMaxBandWidth() instead.
     *
     * @param string $maxBandWidth
     *
     * @return $this
     */
    public function setMaxBandWidth($maxBandWidth)
    {
        return $this->withMaxBandWidth($maxBandWidth);
    }

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
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
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
     * @deprecated deprecated since version 2.0, Use withReceiverTown() instead.
     *
     * @param string $receiverTown
     *
     * @return $this
     */
    public function setReceiverTown($receiverTown)
    {
        return $this->withReceiverTown($receiverTown);
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
     * @deprecated deprecated since version 2.0, Use withReceiverDistrict() instead.
     *
     * @param string $receiverDistrict
     *
     * @return $this
     */
    public function setReceiverDistrict($receiverDistrict)
    {
        return $this->withReceiverDistrict($receiverDistrict);
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
     * @deprecated deprecated since version 2.0, Use withReceiverAddress() instead.
     *
     * @param string $receiverAddress
     *
     * @return $this
     */
    public function setReceiverAddress($receiverAddress)
    {
        return $this->withReceiverAddress($receiverAddress);
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
     * @deprecated deprecated since version 2.0, Use withBuyerMessage() instead.
     *
     * @param string $buyerMessage
     *
     * @return $this
     */
    public function setBuyerMessage($buyerMessage)
    {
        return $this->withBuyerMessage($buyerMessage);
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
     * @deprecated deprecated since version 2.0, Use withHardWareSpec() instead.
     *
     * @param string $hardWareSpec
     *
     * @return $this
     */
    public function setHardWareSpec($hardWareSpec)
    {
        return $this->withHardWareSpec($hardWareSpec);
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
     * @deprecated deprecated since version 2.0, Use withReceiverEmail() instead.
     *
     * @param string $receiverEmail
     *
     * @return $this
     */
    public function setReceiverEmail($receiverEmail)
    {
        return $this->withReceiverEmail($receiverEmail);
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
     * @deprecated deprecated since version 2.0, Use withReceiverState() instead.
     *
     * @param string $receiverState
     *
     * @return $this
     */
    public function setReceiverState($receiverState)
    {
        return $this->withReceiverState($receiverState);
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
     * @deprecated deprecated since version 2.0, Use withReceiverCity() instead.
     *
     * @param string $receiverCity
     *
     * @return $this
     */
    public function setReceiverCity($receiverCity)
    {
        return $this->withReceiverCity($receiverCity);
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
     * @deprecated deprecated since version 2.0, Use withPeriod() instead.
     *
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        return $this->withPeriod($period);
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
     * @deprecated deprecated since version 2.0, Use withAutoPay() instead.
     *
     * @param string $autoPay
     *
     * @return $this
     */
    public function setAutoPay($autoPay)
    {
        return $this->withAutoPay($autoPay);
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
     * @deprecated deprecated since version 2.0, Use withReceiverMobile() instead.
     *
     * @param string $receiverMobile
     *
     * @return $this
     */
    public function setReceiverMobile($receiverMobile)
    {
        return $this->withReceiverMobile($receiverMobile);
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
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
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
     * @deprecated deprecated since version 2.0, Use withReceiverPhone() instead.
     *
     * @param string $receiverPhone
     *
     * @return $this
     */
    public function setReceiverPhone($receiverPhone)
    {
        return $this->withReceiverPhone($receiverPhone);
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
     * @deprecated deprecated since version 2.0, Use withReceiverName() instead.
     *
     * @param string $receiverName
     *
     * @return $this
     */
    public function setReceiverName($receiverName)
    {
        return $this->withReceiverName($receiverName);
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
     * @deprecated deprecated since version 2.0, Use withHaType() instead.
     *
     * @param string $haType
     *
     * @return $this
     */
    public function setHaType($haType)
    {
        return $this->withHaType($haType);
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
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
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
     * @deprecated deprecated since version 2.0, Use withReceiverCountry() instead.
     *
     * @param string $receiverCountry
     *
     * @return $this
     */
    public function setReceiverCountry($receiverCountry)
    {
        return $this->withReceiverCountry($receiverCountry);
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
     * @deprecated deprecated since version 2.0, Use withChargeType() instead.
     *
     * @param string $chargeType
     *
     * @return $this
     */
    public function setChargeType($chargeType)
    {
        return $this->withChargeType($chargeType);
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
     * @deprecated deprecated since version 2.0, Use withReceiverZip() instead.
     *
     * @param string $receiverZip
     *
     * @return $this
     */
    public function setReceiverZip($receiverZip)
    {
        return $this->withReceiverZip($receiverZip);
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
