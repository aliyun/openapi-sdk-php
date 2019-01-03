<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateScheduledTask
 *
 * @method string getLaunchTime()
 * @method string getScheduledAction()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getRecurrenceValue()
 * @method string getLaunchExpirationTime()
 * @method string getRecurrenceEndTime()
 * @method string getScheduledTaskName()
 * @method string getTaskEnabled()
 * @method string getRecurrenceType()
 */
class CreateScheduledTask extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ess';

    /**
     * @var string
     */
    public $version = '2014-08-28';

    /**
     * @var string
     */
    public $action = 'CreateScheduledTask';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

    /**
     * @deprecated deprecated since version 2.0, Use withLaunchTime() instead.
     *
     * @param string $launchTime
     *
     * @return $this
     */
    public function setLaunchTime($launchTime)
    {
        return $this->withLaunchTime($launchTime);
    }

    /**
     * @param string $launchTime
     *
     * @return $this
     */
    public function withLaunchTime($launchTime)
    {
        $this->data['LaunchTime'] = $launchTime;
        $this->options['query']['LaunchTime'] = $launchTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScheduledAction() instead.
     *
     * @param string $scheduledAction
     *
     * @return $this
     */
    public function setScheduledAction($scheduledAction)
    {
        return $this->withScheduledAction($scheduledAction);
    }

    /**
     * @param string $scheduledAction
     *
     * @return $this
     */
    public function withScheduledAction($scheduledAction)
    {
        $this->data['ScheduledAction'] = $scheduledAction;
        $this->options['query']['ScheduledAction'] = $scheduledAction;

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
     * @deprecated deprecated since version 2.0, Use withRecurrenceValue() instead.
     *
     * @param string $recurrenceValue
     *
     * @return $this
     */
    public function setRecurrenceValue($recurrenceValue)
    {
        return $this->withRecurrenceValue($recurrenceValue);
    }

    /**
     * @param string $recurrenceValue
     *
     * @return $this
     */
    public function withRecurrenceValue($recurrenceValue)
    {
        $this->data['RecurrenceValue'] = $recurrenceValue;
        $this->options['query']['RecurrenceValue'] = $recurrenceValue;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLaunchExpirationTime() instead.
     *
     * @param string $launchExpirationTime
     *
     * @return $this
     */
    public function setLaunchExpirationTime($launchExpirationTime)
    {
        return $this->withLaunchExpirationTime($launchExpirationTime);
    }

    /**
     * @param string $launchExpirationTime
     *
     * @return $this
     */
    public function withLaunchExpirationTime($launchExpirationTime)
    {
        $this->data['LaunchExpirationTime'] = $launchExpirationTime;
        $this->options['query']['LaunchExpirationTime'] = $launchExpirationTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRecurrenceEndTime() instead.
     *
     * @param string $recurrenceEndTime
     *
     * @return $this
     */
    public function setRecurrenceEndTime($recurrenceEndTime)
    {
        return $this->withRecurrenceEndTime($recurrenceEndTime);
    }

    /**
     * @param string $recurrenceEndTime
     *
     * @return $this
     */
    public function withRecurrenceEndTime($recurrenceEndTime)
    {
        $this->data['RecurrenceEndTime'] = $recurrenceEndTime;
        $this->options['query']['RecurrenceEndTime'] = $recurrenceEndTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScheduledTaskName() instead.
     *
     * @param string $scheduledTaskName
     *
     * @return $this
     */
    public function setScheduledTaskName($scheduledTaskName)
    {
        return $this->withScheduledTaskName($scheduledTaskName);
    }

    /**
     * @param string $scheduledTaskName
     *
     * @return $this
     */
    public function withScheduledTaskName($scheduledTaskName)
    {
        $this->data['ScheduledTaskName'] = $scheduledTaskName;
        $this->options['query']['ScheduledTaskName'] = $scheduledTaskName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTaskEnabled() instead.
     *
     * @param string $taskEnabled
     *
     * @return $this
     */
    public function setTaskEnabled($taskEnabled)
    {
        return $this->withTaskEnabled($taskEnabled);
    }

    /**
     * @param string $taskEnabled
     *
     * @return $this
     */
    public function withTaskEnabled($taskEnabled)
    {
        $this->data['TaskEnabled'] = $taskEnabled;
        $this->options['query']['TaskEnabled'] = $taskEnabled;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRecurrenceType() instead.
     *
     * @param string $recurrenceType
     *
     * @return $this
     */
    public function setRecurrenceType($recurrenceType)
    {
        return $this->withRecurrenceType($recurrenceType);
    }

    /**
     * @param string $recurrenceType
     *
     * @return $this
     */
    public function withRecurrenceType($recurrenceType)
    {
        $this->data['RecurrenceType'] = $recurrenceType;
        $this->options['query']['RecurrenceType'] = $recurrenceType;

        return $this;
    }
}
