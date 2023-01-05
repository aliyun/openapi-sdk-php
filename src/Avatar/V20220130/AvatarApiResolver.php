<?php

namespace AlibabaCloud\Avatar\V20220130;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CancelVideoTask cancelVideoTask(array $options = [])
 * @method CloseTimedResetOperate closeTimedResetOperate(array $options = [])
 * @method DuplexDecision duplexDecision(array $options = [])
 * @method GetVideoTaskInfo getVideoTaskInfo(array $options = [])
 * @method QueryRunningInstance queryRunningInstance(array $options = [])
 * @method QueryTimedResetOperateStatus queryTimedResetOperateStatus(array $options = [])
 * @method SendMessage sendMessage(array $options = [])
 * @method StartInstance startInstance(array $options = [])
 * @method StartTimedResetOperate startTimedResetOperate(array $options = [])
 * @method StopInstance stopInstance(array $options = [])
 * @method SubmitTextTo2DAvatarVideoTask submitTextTo2DAvatarVideoTask(array $options = [])
 * @method SubmitTextTo3DAvatarVideoTask submitTextTo3DAvatarVideoTask(array $options = [])
 * @method SubmitTextToSignVideoTask submitTextToSignVideoTask(array $options = [])
 */
class AvatarApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'avatar';

    /** @var string */
    public $version = '2022-01-30';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getTaskUuid()
 * @method $this withTaskUuid($value)
 */
class CancelVideoTask extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 */
class CloseTimedResetOperate extends Rpc
{
}

/**
 * @method string getInterruptType()
 * @method $this withInterruptType($value)
 * @method string getCustomKeywords()
 * @method $this withCustomKeywords($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getDialogStatus()
 * @method $this withDialogStatus($value)
 * @method string getDialogContext()
 * @method $this withDialogContext($value)
 * @method string getCallTime()
 * @method $this withCallTime($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getText()
 * @method $this withText($value)
 * @method string getBizRequestId()
 * @method $this withBizRequestId($value)
 */
class DuplexDecision extends Rpc
{
}

/**
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getTaskUuid()
 * @method $this withTaskUuid($value)
 */
class GetVideoTaskInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 */
class QueryRunningInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 */
class QueryTimedResetOperateStatus extends Rpc
{
}

/**
 * @method string getTextRequest()
 * @method $this withTextRequest($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getVAMLRequest()
 * @method $this withVAMLRequest($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 */
class SendMessage extends Rpc
{
}

/**
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getCommandRequest()
 * @method $this withCommandRequest($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class StartInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 */
class StartTimedResetOperate extends Rpc
{
}

/**
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 */
class StopInstance extends Rpc
{
}

/**
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getVideoInfo()
 * @method $this withVideoInfo($value)
 * @method string getAudioInfo()
 * @method $this withAudioInfo($value)
 * @method string getAvatarInfo()
 * @method $this withAvatarInfo($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getText()
 * @method $this withText($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 */
class SubmitTextTo2DAvatarVideoTask extends Rpc
{
}

/**
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getVideoInfo()
 * @method $this withVideoInfo($value)
 * @method string getAvatarInfo()
 * @method $this withAvatarInfo($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getText()
 * @method $this withText($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 */
class SubmitTextTo3DAvatarVideoTask extends Rpc
{
}

/**
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getVideoInfo()
 * @method $this withVideoInfo($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getText()
 * @method $this withText($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 */
class SubmitTextToSignVideoTask extends Rpc
{
}
