<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BatchRobotSmartCall
 *
 * @method string getResourceOwnerId()
 * @method string getEarlyMediaAsr()
 * @method string getResourceOwnerAccount()
 * @method string getTaskName()
 * @method string getOwnerId()
 * @method string getDialogId()
 * @method string getCalledNumber()
 * @method string getScheduleTime()
 * @method string getCalledShowNumber()
 * @method string getCorpName()
 * @method string getScheduleCall()
 */
class BatchRobotSmartCall extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dyvmsapi';

    /**
     * @var string
     */
    public $version = '2017-05-25';

    /**
     * @var string
     */
    public $action = 'BatchRobotSmartCall';

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
     * @deprecated deprecated since version 2.0, Use withEarlyMediaAsr() instead.
     *
     * @param string $earlyMediaAsr
     *
     * @return $this
     */
    public function setEarlyMediaAsr($earlyMediaAsr)
    {
        return $this->withEarlyMediaAsr($earlyMediaAsr);
    }

    /**
     * @param string $earlyMediaAsr
     *
     * @return $this
     */
    public function withEarlyMediaAsr($earlyMediaAsr)
    {
        $this->data['EarlyMediaAsr'] = $earlyMediaAsr;
        $this->options['query']['EarlyMediaAsr'] = $earlyMediaAsr;

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
     * @deprecated deprecated since version 2.0, Use withTaskName() instead.
     *
     * @param string $taskName
     *
     * @return $this
     */
    public function setTaskName($taskName)
    {
        return $this->withTaskName($taskName);
    }

    /**
     * @param string $taskName
     *
     * @return $this
     */
    public function withTaskName($taskName)
    {
        $this->data['TaskName'] = $taskName;
        $this->options['query']['TaskName'] = $taskName;

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
     * @deprecated deprecated since version 2.0, Use withDialogId() instead.
     *
     * @param string $dialogId
     *
     * @return $this
     */
    public function setDialogId($dialogId)
    {
        return $this->withDialogId($dialogId);
    }

    /**
     * @param string $dialogId
     *
     * @return $this
     */
    public function withDialogId($dialogId)
    {
        $this->data['DialogId'] = $dialogId;
        $this->options['query']['DialogId'] = $dialogId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCalledNumber() instead.
     *
     * @param string $calledNumber
     *
     * @return $this
     */
    public function setCalledNumber($calledNumber)
    {
        return $this->withCalledNumber($calledNumber);
    }

    /**
     * @param string $calledNumber
     *
     * @return $this
     */
    public function withCalledNumber($calledNumber)
    {
        $this->data['CalledNumber'] = $calledNumber;
        $this->options['query']['CalledNumber'] = $calledNumber;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScheduleTime() instead.
     *
     * @param string $scheduleTime
     *
     * @return $this
     */
    public function setScheduleTime($scheduleTime)
    {
        return $this->withScheduleTime($scheduleTime);
    }

    /**
     * @param string $scheduleTime
     *
     * @return $this
     */
    public function withScheduleTime($scheduleTime)
    {
        $this->data['ScheduleTime'] = $scheduleTime;
        $this->options['query']['ScheduleTime'] = $scheduleTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCalledShowNumber() instead.
     *
     * @param string $calledShowNumber
     *
     * @return $this
     */
    public function setCalledShowNumber($calledShowNumber)
    {
        return $this->withCalledShowNumber($calledShowNumber);
    }

    /**
     * @param string $calledShowNumber
     *
     * @return $this
     */
    public function withCalledShowNumber($calledShowNumber)
    {
        $this->data['CalledShowNumber'] = $calledShowNumber;
        $this->options['query']['CalledShowNumber'] = $calledShowNumber;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCorpName() instead.
     *
     * @param string $corpName
     *
     * @return $this
     */
    public function setCorpName($corpName)
    {
        return $this->withCorpName($corpName);
    }

    /**
     * @param string $corpName
     *
     * @return $this
     */
    public function withCorpName($corpName)
    {
        $this->data['CorpName'] = $corpName;
        $this->options['query']['CorpName'] = $corpName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScheduleCall() instead.
     *
     * @param string $scheduleCall
     *
     * @return $this
     */
    public function setScheduleCall($scheduleCall)
    {
        return $this->withScheduleCall($scheduleCall);
    }

    /**
     * @param string $scheduleCall
     *
     * @return $this
     */
    public function withScheduleCall($scheduleCall)
    {
        $this->data['ScheduleCall'] = $scheduleCall;
        $this->options['query']['ScheduleCall'] = $scheduleCall;

        return $this;
    }
}
