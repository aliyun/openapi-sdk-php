<?php

namespace AlibabaCloud\Aiccs\V20191015;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddOuterAccount addOuterAccount(array $options = [])
 * @method AddSkillGroup addSkillGroup(array $options = [])
 * @method DeleteOuterAccount deleteOuterAccount(array $options = [])
 * @method DeleteSkillGroup deleteSkillGroup(array $options = [])
 * @method DescribeRecordData describeRecordData(array $options = [])
 * @method ListOutboundStrategies listOutboundStrategies(array $options = [])
 * @method ListOuterOrderedNumbers listOuterOrderedNumbers(array $options = [])
 * @method MakeCall makeCall(array $options = [])
 * @method QueryHotlineInQueue queryHotlineInQueue(array $options = [])
 * @method SendCcoSmartCall sendCcoSmartCall(array $options = [])
 * @method SendCcoSmartCallOperate sendCcoSmartCallOperate(array $options = [])
 * @method StartMicroOutbound startMicroOutbound(array $options = [])
 * @method UpdateOuterAccount updateOuterAccount(array $options = [])
 */
class AiccsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'aiccs';

    /** @var string */
    public $version = '2019-10-15';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'aiccs-service';
}

/**
 * @method string getExt()
 * @method $this withExt($value)
 * @method string getOuterAccountName()
 * @method $this withOuterAccountName($value)
 * @method string getOuterDepartmentId()
 * @method $this withOuterDepartmentId($value)
 * @method string getAvatar()
 * @method $this withAvatar($value)
 * @method string getOuterAccountType()
 * @method $this withOuterAccountType($value)
 * @method string getRealName()
 * @method $this withRealName($value)
 * @method string getOuterDepartmentType()
 * @method $this withOuterDepartmentType($value)
 * @method string getOuterGroupIds()
 * @method $this withOuterGroupIds($value)
 * @method string getOuterGroupType()
 * @method $this withOuterGroupType($value)
 * @method string getOuterAccountId()
 * @method $this withOuterAccountId($value)
 */
class AddOuterAccount extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOuterDepartmentType()
 * @method $this withOuterDepartmentType($value)
 * @method string getOuterGroupId()
 * @method $this withOuterGroupId($value)
 * @method string getOuterGroupType()
 * @method $this withOuterGroupType($value)
 * @method string getOuterDepartmentId()
 * @method $this withOuterDepartmentId($value)
 * @method string getOuterGroupName()
 * @method $this withOuterGroupName($value)
 */
class AddSkillGroup extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOuterAccountId()
 * @method $this withOuterAccountId($value)
 * @method string getOuterAccountType()
 * @method $this withOuterAccountType($value)
 */
class DeleteOuterAccount extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOuterGroupId()
 * @method $this withOuterGroupId($value)
 * @method string getOuterGroupType()
 * @method $this withOuterGroupType($value)
 */
class DeleteSkillGroup extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAcid()
 * @method $this withAcid($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getSecLevel()
 * @method $this withSecLevel($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRecordData extends Rpc
{
}

/**
 * @method string getBuId()
 * @method $this withBuId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListOutboundStrategies extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListOuterOrderedNumbers extends Rpc
{
}

/**
 * @method string getExtInfo()
 * @method $this withExtInfo($value)
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getCommandCode()
 * @method $this withCommandCode($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getOuterAccountId()
 * @method $this withOuterAccountId($value)
 * @method string getOuterAccountType()
 * @method $this withOuterAccountType($value)
 */
class MakeCall extends Rpc
{
}

/**
 * @method string getOuterGroupId()
 * @method $this withOuterGroupId($value)
 * @method string getOuterGroupType()
 * @method $this withOuterGroupType($value)
 */
class QueryHotlineInQueue extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVoiceCodeParam()
 * @method $this withVoiceCodeParam($value)
 * @method string getAsrVocabularyId()
 * @method $this withAsrVocabularyId($value)
 * @method string getEarlyMediaAsr()
 * @method $this withEarlyMediaAsr($value)
 * @method string getSpeed()
 * @method $this withSpeed($value)
 * @method string getAsrAlsAmId()
 * @method $this withAsrAlsAmId($value)
 * @method string getAsrBaseId()
 * @method $this withAsrBaseId($value)
 * @method string getSessionTimeout()
 * @method $this withSessionTimeout($value)
 * @method string getDynamicId()
 * @method $this withDynamicId($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getTtsSpeed()
 * @method $this withTtsSpeed($value)
 * @method string getVoiceCode()
 * @method $this withVoiceCode($value)
 * @method string getCalledShowNumber()
 * @method $this withCalledShowNumber($value)
 * @method string getActionCodeTimeBreak()
 * @method $this withActionCodeTimeBreak($value)
 * @method string getTtsConf()
 * @method $this withTtsConf($value)
 * @method string getActionCodeBreak()
 * @method $this withActionCodeBreak($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getPlayTimes()
 * @method $this withPlayTimes($value)
 * @method string getRecordFlag()
 * @method $this withRecordFlag($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTtsVolume()
 * @method $this withTtsVolume($value)
 * @method string getVolume()
 * @method $this withVolume($value)
 * @method string getMuteTime()
 * @method $this withMuteTime($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getAsrModelId()
 * @method $this withAsrModelId($value)
 * @method string getPauseTime()
 * @method $this withPauseTime($value)
 * @method string getTtsStyle()
 * @method $this withTtsStyle($value)
 */
class SendCcoSmartCall extends Rpc
{
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getParam()
 * @method $this withParam($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCommand()
 * @method $this withCommand($value)
 */
class SendCcoSmartCallOperate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getCommandCode()
 * @method $this withCommandCode($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getExtInfo()
 * @method $this withExtInfo($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 */
class StartMicroOutbound extends Rpc
{
}

/**
 * @method string getExt()
 * @method $this withExt($value)
 * @method string getOuterAccountName()
 * @method $this withOuterAccountName($value)
 * @method string getOuterDepartmentId()
 * @method $this withOuterDepartmentId($value)
 * @method string getAvatar()
 * @method $this withAvatar($value)
 * @method string getOuterAccountType()
 * @method $this withOuterAccountType($value)
 * @method string getRealName()
 * @method $this withRealName($value)
 * @method string getOuterDepartmentType()
 * @method $this withOuterDepartmentType($value)
 * @method string getOuterGroupIds()
 * @method $this withOuterGroupIds($value)
 * @method string getOuterGroupType()
 * @method $this withOuterGroupType($value)
 * @method string getOuterAccountId()
 * @method $this withOuterAccountId($value)
 */
class UpdateOuterAccount extends Rpc
{

    /** @var string */
    public $method = 'GET';
}
