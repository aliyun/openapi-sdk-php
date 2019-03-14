<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api DescribeInvocations
 *
 * @method string getResourceOwnerId()
 * @method string getInvokeStatus()
 * @method string getCommandId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getInvokeId()
 * @method string getTimed()
 * @method string getCommandName()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getCommandType()
 * @method string getInstanceId()
 */
class DescribeInvocations extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

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
     * @param string $invokeStatus
     *
     * @return $this
     */
    public function withInvokeStatus($invokeStatus)
    {
        $this->data['InvokeStatus'] = $invokeStatus;
        $this->options['query']['InvokeStatus'] = $invokeStatus;

        return $this;
    }

    /**
     * @param string $commandId
     *
     * @return $this
     */
    public function withCommandId($commandId)
    {
        $this->data['CommandId'] = $commandId;
        $this->options['query']['CommandId'] = $commandId;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $invokeId
     *
     * @return $this
     */
    public function withInvokeId($invokeId)
    {
        $this->data['InvokeId'] = $invokeId;
        $this->options['query']['InvokeId'] = $invokeId;

        return $this;
    }

    /**
     * @param string $timed
     *
     * @return $this
     */
    public function withTimed($timed)
    {
        $this->data['Timed'] = $timed;
        $this->options['query']['Timed'] = $timed;

        return $this;
    }

    /**
     * @param string $commandName
     *
     * @return $this
     */
    public function withCommandName($commandName)
    {
        $this->data['CommandName'] = $commandName;
        $this->options['query']['CommandName'] = $commandName;

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
     * @param string $commandType
     *
     * @return $this
     */
    public function withCommandType($commandType)
    {
        $this->data['CommandType'] = $commandType;
        $this->options['query']['CommandType'] = $commandType;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }
}
