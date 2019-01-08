<?php

namespace AlibabaCloud\RKvstore\V20150101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeParameterTemplates
 *
 * @method string getResourceOwnerId()
 * @method string getSecurityToken()
 * @method string getResourceOwnerAccount()
 * @method string getEngine()
 * @method string getOwnerAccount()
 * @method string getEngineVersion()
 * @method string getOwnerId()
 * @method string getCharacterType()
 */
class DescribeParameterTemplates extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'R-kvstore';

    /**
     * @var string
     */
    public $version = '2015-01-01';

    /**
     * @var string
     */
    public $action = 'DescribeParameterTemplates';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'redisa';

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
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

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
     * @param string $engine
     *
     * @return $this
     */
    public function withEngine($engine)
    {
        $this->data['Engine'] = $engine;
        $this->options['query']['Engine'] = $engine;

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
     * @param string $engineVersion
     *
     * @return $this
     */
    public function withEngineVersion($engineVersion)
    {
        $this->data['EngineVersion'] = $engineVersion;
        $this->options['query']['EngineVersion'] = $engineVersion;

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
     * @param string $characterType
     *
     * @return $this
     */
    public function withCharacterType($characterType)
    {
        $this->data['CharacterType'] = $characterType;
        $this->options['query']['CharacterType'] = $characterType;

        return $this;
    }
}
