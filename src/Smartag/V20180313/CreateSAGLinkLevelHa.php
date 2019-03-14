<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Rpc;

/**
 * Api CreateSAGLinkLevelHa
 *
 * @method string getResourceOwnerId()
 * @method string getBackupLinkId()
 * @method string getResourceOwnerAccount()
 * @method string getHaType()
 * @method string getOwnerAccount()
 * @method string getMainLinkRegionId()
 * @method string getSmartAGId()
 * @method string getOwnerId()
 * @method string getMainLinkId()
 * @method string getBackupLinkRegionId()
 */
class CreateSAGLinkLevelHa extends Rpc
{
    public $product = 'Smartag';

    public $version = '2018-03-13';

    public $method = 'POST';

    public $serviceCode = 'smartag';

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
     * @param string $backupLinkId
     *
     * @return $this
     */
    public function withBackupLinkId($backupLinkId)
    {
        $this->data['BackupLinkId'] = $backupLinkId;
        $this->options['query']['BackupLinkId'] = $backupLinkId;

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
     * @param string $mainLinkRegionId
     *
     * @return $this
     */
    public function withMainLinkRegionId($mainLinkRegionId)
    {
        $this->data['MainLinkRegionId'] = $mainLinkRegionId;
        $this->options['query']['MainLinkRegionId'] = $mainLinkRegionId;

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
     * @param string $mainLinkId
     *
     * @return $this
     */
    public function withMainLinkId($mainLinkId)
    {
        $this->data['MainLinkId'] = $mainLinkId;
        $this->options['query']['MainLinkId'] = $mainLinkId;

        return $this;
    }

    /**
     * @param string $backupLinkRegionId
     *
     * @return $this
     */
    public function withBackupLinkRegionId($backupLinkRegionId)
    {
        $this->data['BackupLinkRegionId'] = $backupLinkRegionId;
        $this->options['query']['BackupLinkRegionId'] = $backupLinkRegionId;

        return $this;
    }
}
