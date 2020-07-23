<?php

namespace AlibabaCloud\Dyplsapi\V20170525;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddAxnTrackNo addAxnTrackNo(array $options = [])
 * @method AddSecretBlacklist addSecretBlacklist(array $options = [])
 * @method BindAxb bindAxb(array $options = [])
 * @method BindAxg bindAxg(array $options = [])
 * @method BindAxn bindAxn(array $options = [])
 * @method BindAxnExtension bindAxnExtension(array $options = [])
 * @method BuySecretNo buySecretNo(array $options = [])
 * @method CreateAxgGroup createAxgGroup(array $options = [])
 * @method DeleteSecretBlacklist deleteSecretBlacklist(array $options = [])
 * @method GetSecretAsrDetail getSecretAsrDetail(array $options = [])
 * @method LockSecretNo lockSecretNo(array $options = [])
 * @method OperateAxgGroup operateAxgGroup(array $options = [])
 * @method OperateBlackNo operateBlackNo(array $options = [])
 * @method QueryCallStatus queryCallStatus(array $options = [])
 * @method QueryPhoneNoAByTrackNo queryPhoneNoAByTrackNo(array $options = [])
 * @method QueryRecordFileDownloadUrl queryRecordFileDownloadUrl(array $options = [])
 * @method QuerySecretNoRemain querySecretNoRemain(array $options = [])
 * @method QuerySubscriptionDetail querySubscriptionDetail(array $options = [])
 * @method QuerySubsId querySubsId(array $options = [])
 * @method ReleaseSecretNo releaseSecretNo(array $options = [])
 * @method UnbindSubscription unbindSubscription(array $options = [])
 * @method UnlockSecretNo unlockSecretNo(array $options = [])
 * @method UpdateSubscription updateSubscription(array $options = [])
 */
class DyplsapiApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Dyplsapi';

    /** @var string */
    public $version = '2017-05-25';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'dypls';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSubsId()
 * @method $this withSubsId($value)
 * @method string getPhoneNoX()
 * @method $this withPhoneNoX($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTrackNo()
 * @method string getPoolKey()
 * @method $this withPoolKey($value)
 */
class AddAxnTrackNo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTrackNo($value)
    {
        $this->data['TrackNo'] = $value;
        $this->options['query']['trackNo'] = $value;

        return $this;
    }
}

/**
 * @method string getBlackType()
 * @method $this withBlackType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPoolKey()
 * @method $this withPoolKey($value)
 * @method string getBlackNo()
 * @method $this withBlackNo($value)
 */
class AddSecretBlacklist extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCallDisplayType()
 * @method $this withCallDisplayType($value)
 * @method string getPhoneNoX()
 * @method $this withPhoneNoX($value)
 * @method string getRingConfig()
 * @method $this withRingConfig($value)
 * @method string getASRStatus()
 * @method $this withASRStatus($value)
 * @method string getPhoneNoB()
 * @method $this withPhoneNoB($value)
 * @method string getPhoneNoA()
 * @method $this withPhoneNoA($value)
 * @method string getExpectCity()
 * @method $this withExpectCity($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOutOrderId()
 * @method $this withOutOrderId($value)
 * @method string getPoolKey()
 * @method $this withPoolKey($value)
 * @method string getExpiration()
 * @method $this withExpiration($value)
 * @method string getIsRecordingEnabled()
 * @method $this withIsRecordingEnabled($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getASRModelId()
 * @method $this withASRModelId($value)
 * @method string getCallRestrict()
 * @method $this withCallRestrict($value)
 */
class BindAxb extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCallDisplayType()
 * @method $this withCallDisplayType($value)
 * @method string getPhoneNoX()
 * @method $this withPhoneNoX($value)
 * @method string getRingConfig()
 * @method $this withRingConfig($value)
 * @method string getASRStatus()
 * @method $this withASRStatus($value)
 * @method string getPhoneNoB()
 * @method $this withPhoneNoB($value)
 * @method string getPhoneNoA()
 * @method $this withPhoneNoA($value)
 * @method string getExpectCity()
 * @method $this withExpectCity($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOutOrderId()
 * @method $this withOutOrderId($value)
 * @method string getPoolKey()
 * @method $this withPoolKey($value)
 * @method string getExpiration()
 * @method $this withExpiration($value)
 * @method string getIsRecordingEnabled()
 * @method $this withIsRecordingEnabled($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getASRModelId()
 * @method $this withASRModelId($value)
 */
class BindAxg extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCallDisplayType()
 * @method $this withCallDisplayType($value)
 * @method string getPhoneNoX()
 * @method $this withPhoneNoX($value)
 * @method string getRingConfig()
 * @method $this withRingConfig($value)
 * @method string getASRStatus()
 * @method $this withASRStatus($value)
 * @method string getPhoneNoB()
 * @method $this withPhoneNoB($value)
 * @method string getPhoneNoA()
 * @method $this withPhoneNoA($value)
 * @method string getExpectCity()
 * @method $this withExpectCity($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOutOrderId()
 * @method $this withOutOrderId($value)
 * @method string getPoolKey()
 * @method $this withPoolKey($value)
 * @method string getExpiration()
 * @method $this withExpiration($value)
 * @method string getIsRecordingEnabled()
 * @method $this withIsRecordingEnabled($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getNoType()
 * @method $this withNoType($value)
 * @method string getASRModelId()
 * @method $this withASRModelId($value)
 */
class BindAxn extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExtension()
 * @method $this withExtension($value)
 * @method string getCallDisplayType()
 * @method $this withCallDisplayType($value)
 * @method string getPhoneNoX()
 * @method $this withPhoneNoX($value)
 * @method string getRingConfig()
 * @method $this withRingConfig($value)
 * @method string getASRStatus()
 * @method $this withASRStatus($value)
 * @method string getPhoneNoB()
 * @method $this withPhoneNoB($value)
 * @method string getPhoneNoA()
 * @method $this withPhoneNoA($value)
 * @method string getExpectCity()
 * @method $this withExpectCity($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOutOrderId()
 * @method $this withOutOrderId($value)
 * @method string getPoolKey()
 * @method $this withPoolKey($value)
 * @method string getExpiration()
 * @method $this withExpiration($value)
 * @method string getIsRecordingEnabled()
 * @method $this withIsRecordingEnabled($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getASRModelId()
 * @method $this withASRModelId($value)
 */
class BindAxnExtension extends Rpc
{
}

/**
 * @method string getSpecId()
 * @method $this withSpecId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getSecretNo()
 * @method $this withSecretNo($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDisplayPool()
 * @method $this withDisplayPool($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPoolKey()
 * @method $this withPoolKey($value)
 */
class BuySecretNo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNumbers()
 * @method $this withNumbers($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPoolKey()
 * @method $this withPoolKey($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateAxgGroup extends Rpc
{
}

/**
 * @method string getBlackType()
 * @method $this withBlackType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPoolKey()
 * @method $this withPoolKey($value)
 * @method string getBlackNo()
 * @method $this withBlackNo($value)
 */
class DeleteSecretBlacklist extends Rpc
{
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallTime()
 * @method $this withCallTime($value)
 * @method string getPoolKey()
 * @method $this withPoolKey($value)
 */
class GetSecretAsrDetail extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPoolKey()
 * @method $this withPoolKey($value)
 * @method string getSecretNo()
 * @method $this withSecretNo($value)
 */
class LockSecretNo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNumbers()
 * @method $this withNumbers($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPoolKey()
 * @method $this withPoolKey($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 */
class OperateAxgGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTips()
 * @method $this withTips($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPoolKey()
 * @method $this withPoolKey($value)
 * @method string getBlackNo()
 * @method $this withBlackNo($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 */
class OperateBlackNo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSubsId()
 * @method $this withSubsId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCallNo()
 * @method $this withCallNo($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPoolKey()
 * @method $this withPoolKey($value)
 */
class QueryCallStatus extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTrackNo()
 * @method string getPhoneNoX()
 * @method $this withPhoneNoX($value)
 */
class QueryPhoneNoAByTrackNo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTrackNo($value)
    {
        $this->data['TrackNo'] = $value;
        $this->options['query']['trackNo'] = $value;

        return $this;
    }
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallTime()
 * @method $this withCallTime($value)
 * @method string getPoolKey()
 * @method $this withPoolKey($value)
 */
class QueryRecordFileDownloadUrl extends Rpc
{
}

/**
 * @method string getSpecId()
 * @method $this withSpecId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getSecretNo()
 * @method $this withSecretNo($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QuerySecretNoRemain extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getSubsId()
 * @method $this withSubsId($value)
 * @method string getPhoneNoX()
 * @method $this withPhoneNoX($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPoolKey()
 * @method $this withPoolKey($value)
 */
class QuerySubscriptionDetail extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPoolKey()
 * @method $this withPoolKey($value)
 * @method string getPhoneNoX()
 * @method $this withPhoneNoX($value)
 */
class QuerySubsId extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPoolKey()
 * @method $this withPoolKey($value)
 * @method string getSecretNo()
 * @method $this withSecretNo($value)
 */
class ReleaseSecretNo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getSubsId()
 * @method $this withSubsId($value)
 * @method string getSecretNo()
 * @method $this withSecretNo($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPoolKey()
 * @method $this withPoolKey($value)
 */
class UnbindSubscription extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPoolKey()
 * @method $this withPoolKey($value)
 * @method string getSecretNo()
 * @method $this withSecretNo($value)
 */
class UnlockSecretNo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCallDisplayType()
 * @method $this withCallDisplayType($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getSubsId()
 * @method $this withSubsId($value)
 * @method string getPhoneNoX()
 * @method $this withPhoneNoX($value)
 * @method string getRingConfig()
 * @method $this withRingConfig($value)
 * @method string getASRStatus()
 * @method $this withASRStatus($value)
 * @method string getPhoneNoB()
 * @method $this withPhoneNoB($value)
 * @method string getPhoneNoA()
 * @method $this withPhoneNoA($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPoolKey()
 * @method $this withPoolKey($value)
 * @method string getExpiration()
 * @method $this withExpiration($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getIsRecordingEnabled()
 * @method $this withIsRecordingEnabled($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 * @method string getASRModelId()
 * @method $this withASRModelId($value)
 * @method string getCallRestrict()
 * @method $this withCallRestrict($value)
 */
class UpdateSubscription extends Rpc
{
}
