<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * Api ModifyScheduledTask
 *
 * @method string getLaunchTime()
 * @method string getResourceOwnerId()
 * @method string getScheduledAction()
 * @method string getMaxValue()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getRecurrenceValue()
 * @method string getLaunchExpirationTime()
 * @method string getRecurrenceEndTime()
 * @method string getMinValue()
 * @method string getScheduledTaskName()
 * @method string getTaskEnabled()
 * @method string getScheduledTaskId()
 * @method string getRecurrenceType()
 */
class ModifyScheduledTask extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';

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
     * @param string $maxValue
     *
     * @return $this
     */
    public function withMaxValue($maxValue)
    {
        $this->data['MaxValue'] = $maxValue;
        $this->options['query']['MaxValue'] = $maxValue;

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
     * @param string $minValue
     *
     * @return $this
     */
    public function withMinValue($minValue)
    {
        $this->data['MinValue'] = $minValue;
        $this->options['query']['MinValue'] = $minValue;

        return $this;
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
     * @param string $scheduledTaskId
     *
     * @return $this
     */
    public function withScheduledTaskId($scheduledTaskId)
    {
        $this->data['ScheduledTaskId'] = $scheduledTaskId;
        $this->options['query']['ScheduledTaskId'] = $scheduledTaskId;

        return $this;
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
