<?php

namespace AlibabaCloud\Dcdn\V20180115;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BatchDeleteDcdnDomainConfigs
 *
 * @method string getFunctionNames()
 * @method string getSecurityToken()
 * @method string getDomainNames()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class BatchDeleteDcdnDomainConfigs extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'dcdn';

    /**
     * @var string
     */
    public $version = '2018-01-15';

    /**
     * @var string
     */
    public $action = 'BatchDeleteDcdnDomainConfigs';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'dcdn';

    /**
     * @param string $functionNames
     *
     * @return $this
     */
    public function withFunctionNames($functionNames)
    {
        $this->data['FunctionNames'] = $functionNames;
        $this->options['query']['FunctionNames'] = $functionNames;

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
     * @param string $domainNames
     *
     * @return $this
     */
    public function withDomainNames($domainNames)
    {
        $this->data['DomainNames'] = $domainNames;
        $this->options['query']['DomainNames'] = $domainNames;

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
}
