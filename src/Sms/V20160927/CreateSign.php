<?php

namespace AlibabaCloud\Sms\V20160927;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateSign
 *
 * @method string getResourceOwnerId()
 * @method string getSignName()
 * @method string getResourceOwnerAccount()
 * @method string getFileNames()
 * @method string getRemark()
 * @method string getSignType()
 * @method string getFromType()
 * @method string getOwnerId()
 * @method string getType()
 */
class CreateSign extends RpcRequest
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
    public $action = 'CreateSign';

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
     * @deprecated deprecated since version 2.0, Use withSignName() instead.
     *
     * @param string $signName
     *
     * @return $this
     */
    public function setSignName($signName)
    {
        return $this->withSignName($signName);
    }

    /**
     * @param string $signName
     *
     * @return $this
     */
    public function withSignName($signName)
    {
        $this->data['SignName'] = $signName;
        $this->options['query']['SignName'] = $signName;

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
     * @deprecated deprecated since version 2.0, Use withFileNames() instead.
     *
     * @param string $fileNames
     *
     * @return $this
     */
    public function setFileNames($fileNames)
    {
        return $this->withFileNames($fileNames);
    }

    /**
     * @param string $fileNames
     *
     * @return $this
     */
    public function withFileNames($fileNames)
    {
        $this->data['FileNames'] = $fileNames;
        $this->options['query']['FileNames'] = $fileNames;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRemark() instead.
     *
     * @param string $remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        return $this->withRemark($remark);
    }

    /**
     * @param string $remark
     *
     * @return $this
     */
    public function withRemark($remark)
    {
        $this->data['Remark'] = $remark;
        $this->options['query']['Remark'] = $remark;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSignType() instead.
     *
     * @param string $signType
     *
     * @return $this
     */
    public function setSignType($signType)
    {
        return $this->withSignType($signType);
    }

    /**
     * @param string $signType
     *
     * @return $this
     */
    public function withSignType($signType)
    {
        $this->data['SignType'] = $signType;
        $this->options['query']['SignType'] = $signType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFromType() instead.
     *
     * @param string $fromType
     *
     * @return $this
     */
    public function setFromType($fromType)
    {
        return $this->withFromType($fromType);
    }

    /**
     * @param string $fromType
     *
     * @return $this
     */
    public function withFromType($fromType)
    {
        $this->data['FromType'] = $fromType;
        $this->options['query']['FromType'] = $fromType;

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
     * @deprecated deprecated since version 2.0, Use withType() instead.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        return $this->withType($type);
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }
}
