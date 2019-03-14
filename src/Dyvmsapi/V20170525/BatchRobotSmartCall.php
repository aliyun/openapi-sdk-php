<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\Rpc;

/**
 * Api BatchRobotSmartCall
 *
 * @method string getResourceOwnerId()
 * @method string getEarlyMediaAsr()
 * @method string getResourceOwnerAccount()
 * @method string getTtsParamHead()
 * @method string getTaskName()
 * @method string getTtsParam()
 * @method string getOwnerId()
 * @method string getDialogId()
 * @method string getCalledNumber()
 * @method string getScheduleTime()
 * @method string getCalledShowNumber()
 * @method string getCorpName()
 * @method string getScheduleCall()
 * @method string getIsSelfLine()
 */
class BatchRobotSmartCall extends Rpc
{
    public $product = 'Dyvmsapi';

    public $version = '2017-05-25';

    public $method = 'POST';

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
     * @param string $ttsParamHead
     *
     * @return $this
     */
    public function withTtsParamHead($ttsParamHead)
    {
        $this->data['TtsParamHead'] = $ttsParamHead;
        $this->options['query']['TtsParamHead'] = $ttsParamHead;

        return $this;
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
     * @param string $ttsParam
     *
     * @return $this
     */
    public function withTtsParam($ttsParam)
    {
        $this->data['TtsParam'] = $ttsParam;
        $this->options['query']['TtsParam'] = $ttsParam;

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

    /**
     * @param string $isSelfLine
     *
     * @return $this
     */
    public function withIsSelfLine($isSelfLine)
    {
        $this->data['IsSelfLine'] = $isSelfLine;
        $this->options['query']['IsSelfLine'] = $isSelfLine;

        return $this;
    }
}
