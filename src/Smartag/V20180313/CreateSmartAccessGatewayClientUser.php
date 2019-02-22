<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateSmartAccessGatewayClientUser
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getBandwidth()
 * @method string getOwnerAccount()
 * @method string getUserMail()
 * @method string getOwnerId()
 * @method string getIsStaticIp()
 * @method string getClientIp()
 * @method string getIsSharedUser()
 * @method string getSmartAGId()
 * @method string getUserName()
 */
class CreateSmartAccessGatewayClientUser extends RpcRequest
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
    public $action = 'CreateSmartAccessGatewayClientUser';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
     * @param string $bandwidth
     *
     * @return $this
     */
    public function withBandwidth($bandwidth)
    {
        $this->data['Bandwidth'] = $bandwidth;
        $this->options['query']['Bandwidth'] = $bandwidth;

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
     * @param string $userMail
     *
     * @return $this
     */
    public function withUserMail($userMail)
    {
        $this->data['UserMail'] = $userMail;
        $this->options['query']['UserMail'] = $userMail;

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
     * @param string $isStaticIp
     *
     * @return $this
     */
    public function withIsStaticIp($isStaticIp)
    {
        $this->data['IsStaticIp'] = $isStaticIp;
        $this->options['query']['IsStaticIp'] = $isStaticIp;

        return $this;
    }

    /**
     * @param string $clientIp
     *
     * @return $this
     */
    public function withClientIp($clientIp)
    {
        $this->data['ClientIp'] = $clientIp;
        $this->options['query']['ClientIp'] = $clientIp;

        return $this;
    }

    /**
     * @param string $isSharedUser
     *
     * @return $this
     */
    public function withIsSharedUser($isSharedUser)
    {
        $this->data['IsSharedUser'] = $isSharedUser;
        $this->options['query']['IsSharedUser'] = $isSharedUser;

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
