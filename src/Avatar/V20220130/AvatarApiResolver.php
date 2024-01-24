<?php

namespace AlibabaCloud\Avatar\V20220130;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CancelVideoTask cancelVideoTask(array $options = [])
 * @method ClientAuth clientAuth(array $options = [])
 * @method ClientStart clientStart(array $options = [])
 * @method ClientUnbindDevice clientUnbindDevice(array $options = [])
 * @method CloseTimedResetOperate closeTimedResetOperate(array $options = [])
 * @method ConfirmAvatar2dTrain confirmAvatar2dTrain(array $options = [])
 * @method Create2dAvatar create2dAvatar(array $options = [])
 * @method DeleteAvatar deleteAvatar(array $options = [])
 * @method DuplexDecision duplexDecision(array $options = [])
 * @method GetVideoTaskInfo getVideoTaskInfo(array $options = [])
 * @method LicenseAuth licenseAuth(array $options = [])
 * @method QueryAvatar queryAvatar(array $options = [])
 * @method QueryAvatarList queryAvatarList(array $options = [])
 * @method QueryRunningInstance queryRunningInstance(array $options = [])
 * @method QueryTimedResetOperateStatus queryTimedResetOperateStatus(array $options = [])
 * @method QueryVideoTaskInfo queryVideoTaskInfo(array $options = [])
 * @method Render3dAvatar render3dAvatar(array $options = [])
 * @method SendCommand sendCommand(array $options = [])
 * @method SendMessage sendMessage(array $options = [])
 * @method SendText sendText(array $options = [])
 * @method SendVaml sendVaml(array $options = [])
 * @method StartInstance startInstance(array $options = [])
 * @method StartTimedResetOperate startTimedResetOperate(array $options = [])
 * @method StopInstance stopInstance(array $options = [])
 * @method SubmitAudioTo2DAvatarVideoTask submitAudioTo2DAvatarVideoTask(array $options = [])
 * @method SubmitAudioTo3DAvatarVideoTask submitAudioTo3DAvatarVideoTask(array $options = [])
 * @method SubmitAvatarVideoTask submitAvatarVideoTask(array $options = [])
 * @method SubmitTextTo2DAvatarVideoTask submitTextTo2DAvatarVideoTask(array $options = [])
 * @method SubmitTextTo3DAvatarVideoTask submitTextTo3DAvatarVideoTask(array $options = [])
 * @method Update2dAvatar update2dAvatar(array $options = [])
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
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getDeviceType()
 * @method $this withDeviceType($value)
 * @method string getLicense()
 * @method $this withLicense($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getDeviceInfo()
 * @method $this withDeviceInfo($value)
 */
class ClientAuth extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 */
class ClientStart extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class ClientUnbindDevice extends Rpc
{

    /** @var string */
    public $scheme = 'https';
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
 * @method string getConfirm()
 * @method $this withConfirm($value)
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 */
class ConfirmAvatar2dTrain extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getImage()
 * @method $this withImage($value)
 * @method string getOrientation()
 * @method $this withOrientation($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getVideo()
 * @method $this withVideo($value)
 * @method string getPortrait()
 * @method $this withPortrait($value)
 * @method string getExtParams()
 * @method $this withExtParams($value)
 * @method string getTransparent()
 * @method $this withTransparent($value)
 * @method string getCallbackParams()
 * @method $this withCallbackParams($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getExtParamsCLS()
 * @method string getCallback()
 * @method $this withCallback($value)
 * @method string getCallbackParamsCLS()
 */
class Create2dAvatar extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtParamsCLS($value)
    {
        $this->data['ExtParamsCLS'] = $value;
        $this->options['query']['ExtParams_CLS'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallbackParamsCLS($value)
    {
        $this->data['CallbackParamsCLS'] = $value;
        $this->options['query']['CallbackParams_CLS'] = $value;

        return $this;
    }
}

/**
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getExtParamsCLS()
 * @method string getExtParams()
 * @method $this withExtParams($value)
 */
class DeleteAvatar extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtParamsCLS($value)
    {
        $this->data['ExtParamsCLS'] = $value;
        $this->options['query']['ExtParams_CLS'] = $value;

        return $this;
    }
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
 * @method string getLicense()
 * @method $this withLicense($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 */
class LicenseAuth extends Rpc
{
}

/**
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getExtParamsCLS()
 * @method string getExtParams()
 * @method $this withExtParams($value)
 */
class QueryAvatar extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtParamsCLS($value)
    {
        $this->data['ExtParamsCLS'] = $value;
        $this->options['query']['ExtParams_CLS'] = $value;

        return $this;
    }
}

/**
 * @method string getModelType()
 * @method $this withModelType($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getExtParamsCLS()
 * @method string getExtParams()
 * @method $this withExtParams($value)
 */
class QueryAvatarList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtParamsCLS($value)
    {
        $this->data['ExtParamsCLS'] = $value;
        $this->options['query']['ExtParams_CLS'] = $value;

        return $this;
    }
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
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getOrderById()
 * @method $this withOrderById($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskUuid()
 * @method $this withTaskUuid($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryVideoTaskInfo extends Rpc
{
}

/**
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 */
class Render3dAvatar extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getFeedback()
 * @method $this withFeedback($value)
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getUniqueCode()
 * @method $this withUniqueCode($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getContent()
 * @method $this withContent($value)
 */
class SendCommand extends Rpc
{
}

/**
 * @method string getFeedback()
 * @method $this withFeedback($value)
 * @method string getStreamExtension()
 * @method $this withStreamExtension($value)
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
 * @method string getFeedback()
 * @method $this withFeedback($value)
 * @method string getUniqueCode()
 * @method $this withUniqueCode($value)
 * @method string getStreamExtension()
 * @method $this withStreamExtension($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getInterrupt()
 * @method $this withInterrupt($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getText()
 * @method $this withText($value)
 */
class SendText extends Rpc
{
}

/**
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getVaml()
 * @method $this withVaml($value)
 */
class SendVaml extends Rpc
{
}

/**
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getTextRequest()
 * @method $this withTextRequest($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
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
 * @method string getAudioInfo()
 * @method $this withAudioInfo($value)
 * @method string getAvatarInfo()
 * @method $this withAvatarInfo($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getExtParams()
 * @method $this withExtParams($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 * @method string getVideoInfo()
 * @method $this withVideoInfo($value)
 * @method string getCallbackParams()
 * @method $this withCallbackParams($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getCallback()
 * @method $this withCallback($value)
 * @method string getExtParamsCLS()
 * @method string getCallbackParamsCLS()
 */
class SubmitAudioTo2DAvatarVideoTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtParamsCLS($value)
    {
        $this->data['ExtParamsCLS'] = $value;
        $this->options['query']['ExtParams_CLS'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallbackParamsCLS($value)
    {
        $this->data['CallbackParamsCLS'] = $value;
        $this->options['query']['CallbackParams_CLS'] = $value;

        return $this;
    }
}

/**
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getAudioInfo()
 * @method $this withAudioInfo($value)
 * @method string getAvatarInfo()
 * @method $this withAvatarInfo($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getExtParams()
 * @method $this withExtParams($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 * @method string getVideoInfo()
 * @method $this withVideoInfo($value)
 * @method string getCallbackParams()
 * @method $this withCallbackParams($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getCallback()
 * @method $this withCallback($value)
 * @method string getExtParamsCLS()
 * @method string getCallbackParamsCLS()
 */
class SubmitAudioTo3DAvatarVideoTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtParamsCLS($value)
    {
        $this->data['ExtParamsCLS'] = $value;
        $this->options['query']['ExtParams_CLS'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallbackParamsCLS($value)
    {
        $this->data['CallbackParamsCLS'] = $value;
        $this->options['query']['CallbackParams_CLS'] = $value;

        return $this;
    }
}

/**
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getCallbackParams()
 * @method $this withCallbackParams($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getVideoParams()
 * @method $this withVideoParams($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getExtParams()
 * @method $this withExtParams($value)
 * @method string getVideoParamsCLS()
 * @method string getCallback()
 * @method $this withCallback($value)
 * @method string getExtParamsCLS()
 * @method string getCallbackParamsCLS()
 */
class SubmitAvatarVideoTask extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoParamsCLS($value)
    {
        $this->data['VideoParamsCLS'] = $value;
        $this->options['query']['VideoParams_CLS'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtParamsCLS($value)
    {
        $this->data['ExtParamsCLS'] = $value;
        $this->options['query']['ExtParams_CLS'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallbackParamsCLS($value)
    {
        $this->data['CallbackParamsCLS'] = $value;
        $this->options['query']['CallbackParams_CLS'] = $value;

        return $this;
    }
}

/**
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getAudioInfo()
 * @method $this withAudioInfo($value)
 * @method string getAvatarInfo()
 * @method $this withAvatarInfo($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getExtParams()
 * @method $this withExtParams($value)
 * @method string getVideoInfo()
 * @method $this withVideoInfo($value)
 * @method string getCallbackParams()
 * @method $this withCallbackParams($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getCallback()
 * @method $this withCallback($value)
 * @method string getExtParamsCLS()
 * @method string getText()
 * @method $this withText($value)
 * @method string getCallbackParamsCLS()
 */
class SubmitTextTo2DAvatarVideoTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtParamsCLS($value)
    {
        $this->data['ExtParamsCLS'] = $value;
        $this->options['query']['ExtParams_CLS'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallbackParamsCLS($value)
    {
        $this->data['CallbackParamsCLS'] = $value;
        $this->options['query']['CallbackParams_CLS'] = $value;

        return $this;
    }
}

/**
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getAudioInfo()
 * @method $this withAudioInfo($value)
 * @method string getAvatarInfo()
 * @method $this withAvatarInfo($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getExtParams()
 * @method $this withExtParams($value)
 * @method string getVideoInfo()
 * @method $this withVideoInfo($value)
 * @method string getCallbackParams()
 * @method $this withCallbackParams($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getCallback()
 * @method $this withCallback($value)
 * @method string getExtParamsCLS()
 * @method string getText()
 * @method $this withText($value)
 * @method string getCallbackParamsCLS()
 */
class SubmitTextTo3DAvatarVideoTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtParamsCLS($value)
    {
        $this->data['ExtParamsCLS'] = $value;
        $this->options['query']['ExtParams_CLS'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallbackParamsCLS($value)
    {
        $this->data['CallbackParamsCLS'] = $value;
        $this->options['query']['CallbackParams_CLS'] = $value;

        return $this;
    }
}

/**
 * @method string getImage()
 * @method $this withImage($value)
 * @method string getOrientation()
 * @method $this withOrientation($value)
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getVideo()
 * @method $this withVideo($value)
 * @method string getPortrait()
 * @method $this withPortrait($value)
 * @method string getExtParams()
 * @method $this withExtParams($value)
 * @method string getTransparent()
 * @method $this withTransparent($value)
 * @method string getCallbackParams()
 * @method $this withCallbackParams($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getExtParamsCLS()
 * @method string getCallback()
 * @method $this withCallback($value)
 * @method string getCallbackParamsCLS()
 */
class Update2dAvatar extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtParamsCLS($value)
    {
        $this->data['ExtParamsCLS'] = $value;
        $this->options['query']['ExtParams_CLS'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallbackParamsCLS($value)
    {
        $this->data['CallbackParamsCLS'] = $value;
        $this->options['query']['CallbackParams_CLS'] = $value;

        return $this;
    }
}
