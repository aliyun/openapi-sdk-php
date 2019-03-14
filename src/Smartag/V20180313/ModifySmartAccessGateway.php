<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Rpc;

/**
 * Api ModifySmartAccessGateway
 *
 * @method array getSnatEntries()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getCity()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getSecurityLockThreshold()
 * @method string getName()
 * @method string getCidrBlock()
 * @method string getSmartAGId()
 */
class ModifySmartAccessGateway extends Rpc
{
    public $product = 'Smartag';

    public $version = '2018-03-13';

    public $method = 'POST';

    public $serviceCode = 'smartag';

    /**
     * @param array $snatEntries
     *
     * @return $this
     */
    public function withSnatEntries(array $snatEntries)
    {
        $this->data['SnatEntries'] = $snatEntries;
        foreach ($snatEntries as $i => $iValue) {
            $this->options['query']['SnatEntries.' . ($i + 1) . '.CidrBlock'] = $snatEntries[$i]['CidrBlock'];
            $this->options['query']['SnatEntries.' . ($i + 1) . '.SnatIp'] = $snatEntries[$i]['SnatIp'];
        }

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
     * @param string $city
     *
     * @return $this
     */
    public function withCity($city)
    {
        $this->data['City'] = $city;
        $this->options['query']['City'] = $city;

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
     * @param string $securityLockThreshold
     *
     * @return $this
     */
    public function withSecurityLockThreshold($securityLockThreshold)
    {
        $this->data['SecurityLockThreshold'] = $securityLockThreshold;
        $this->options['query']['SecurityLockThreshold'] = $securityLockThreshold;

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
     * @param string $cidrBlock
     *
     * @return $this
     */
    public function withCidrBlock($cidrBlock)
    {
        $this->data['CidrBlock'] = $cidrBlock;
        $this->options['query']['CidrBlock'] = $cidrBlock;

        return $this;
    }

    /**
     * @param string $smartAGId
     *
     * @return $this
     */
    public function withSmartAGId($smartAGId)
    {
        $this->data['SmartAGId'] = $smartAGId;
        $this->options['query']['SmartAGId'] = $smartAGId;

        return $this;
    }
}
