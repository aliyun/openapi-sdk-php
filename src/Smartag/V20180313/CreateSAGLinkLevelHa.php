<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateSAGLinkLevelHa
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
class CreateSAGLinkLevelHa extends RpcRequest
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
    public $action = 'CreateSAGLinkLevelHa';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'smartag';

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
     * @deprecated deprecated since version 2.0, Use withBackupLinkId() instead.
     *
     * @param string $backupLinkId
     *
     * @return $this
     */
    public function setBackupLinkId($backupLinkId)
    {
        return $this->withBackupLinkId($backupLinkId);
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
     * @deprecated deprecated since version 2.0, Use withMainLinkRegionId() instead.
     *
     * @param string $mainLinkRegionId
     *
     * @return $this
     */
    public function setMainLinkRegionId($mainLinkRegionId)
    {
        return $this->withMainLinkRegionId($mainLinkRegionId);
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
     * @deprecated deprecated since version 2.0, Use withSmartAGId() instead.
     *
     * @param string $smartAGId
     *
     * @return $this
     */
    public function setSmartAGId($smartAGId)
    {
        return $this->withSmartAGId($smartAGId);
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
     * @deprecated deprecated since version 2.0, Use withMainLinkId() instead.
     *
     * @param string $mainLinkId
     *
     * @return $this
     */
    public function setMainLinkId($mainLinkId)
    {
        return $this->withMainLinkId($mainLinkId);
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
     * @deprecated deprecated since version 2.0, Use withBackupLinkRegionId() instead.
     *
     * @param string $backupLinkRegionId
     *
     * @return $this
     */
    public function setBackupLinkRegionId($backupLinkRegionId)
    {
        return $this->withBackupLinkRegionId($backupLinkRegionId);
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
