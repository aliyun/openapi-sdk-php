<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeAxtTask
 *
 * @method string getResourceOwnerId()
 * @method string getCommandId()
 * @method string getPageNumber()
 * @method string getTaskStatus()
 * @method string getPageSize()
 * @method string getTaskId()
 * @method string getTimed()
 * @method string getCommandName()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getInstanceExecuteStatus()
 * @method string getOwnerId()
 * @method string getCommandType()
 * @method string getInstanceId()
 */
class DescribeAxtTask extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ecs';

    /**
     * @var string
     */
    public $version = '2014-05-26';

    /**
     * @var string
     */
    public $action = 'DescribeAxtTask';

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
     * @deprecated deprecated since version 2.0, Use withCommandId() instead.
     *
     * @param string $commandId
     *
     * @return $this
     */
    public function setCommandId($commandId)
    {
        return $this->withCommandId($commandId);
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
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
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
     * @deprecated deprecated since version 2.0, Use withTaskStatus() instead.
     *
     * @param string $taskStatus
     *
     * @return $this
     */
    public function setTaskStatus($taskStatus)
    {
        return $this->withTaskStatus($taskStatus);
    }

    /**
     * @param string $taskStatus
     *
     * @return $this
     */
    public function withTaskStatus($taskStatus)
    {
        $this->data['TaskStatus'] = $taskStatus;
        $this->options['query']['TaskStatus'] = $taskStatus;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
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
     * @deprecated deprecated since version 2.0, Use withTaskId() instead.
     *
     * @param string $taskId
     *
     * @return $this
     */
    public function setTaskId($taskId)
    {
        return $this->withTaskId($taskId);
    }

    /**
     * @param string $taskId
     *
     * @return $this
     */
    public function withTaskId($taskId)
    {
        $this->data['TaskId'] = $taskId;
        $this->options['query']['TaskId'] = $taskId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTimed() instead.
     *
     * @param string $timed
     *
     * @return $this
     */
    public function setTimed($timed)
    {
        return $this->withTimed($timed);
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
     * @deprecated deprecated since version 2.0, Use withCommandName() instead.
     *
     * @param string $commandName
     *
     * @return $this
     */
    public function setCommandName($commandName)
    {
        return $this->withCommandName($commandName);
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
     * @deprecated deprecated since version 2.0, Use withInstanceExecuteStatus() instead.
     *
     * @param string $instanceExecuteStatus
     *
     * @return $this
     */
    public function setInstanceExecuteStatus($instanceExecuteStatus)
    {
        return $this->withInstanceExecuteStatus($instanceExecuteStatus);
    }

    /**
     * @param string $instanceExecuteStatus
     *
     * @return $this
     */
    public function withInstanceExecuteStatus($instanceExecuteStatus)
    {
        $this->data['InstanceExecuteStatus'] = $instanceExecuteStatus;
        $this->options['query']['InstanceExecuteStatus'] = $instanceExecuteStatus;

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
     * @deprecated deprecated since version 2.0, Use withCommandType() instead.
     *
     * @param string $commandType
     *
     * @return $this
     */
    public function setCommandType($commandType)
    {
        return $this->withCommandType($commandType);
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
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
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
