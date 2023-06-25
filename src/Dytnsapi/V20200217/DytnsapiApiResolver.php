<?php

namespace AlibabaCloud\Dytnsapi\V20200217;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DescribeEmptyNumber describeEmptyNumber(array $options = [])
 * @method DescribePhoneNumberAnalysis describePhoneNumberAnalysis(array $options = [])
 * @method DescribePhoneNumberOnlineTime describePhoneNumberOnlineTime(array $options = [])
 * @method DescribePhoneNumberOperatorAttribute describePhoneNumberOperatorAttribute(array $options = [])
 * @method DescribePhoneTwiceTelVerify describePhoneTwiceTelVerify(array $options = [])
 * @method InvalidPhoneNumberFilter invalidPhoneNumberFilter(array $options = [])
 * @method PhoneNumberEncrypt phoneNumberEncrypt(array $options = [])
 * @method PhoneNumberStatusForAccount phoneNumberStatusForAccount(array $options = [])
 * @method PhoneNumberStatusForPublic phoneNumberStatusForPublic(array $options = [])
 * @method PhoneNumberStatusForReal phoneNumberStatusForReal(array $options = [])
 * @method PhoneNumberStatusForSms phoneNumberStatusForSms(array $options = [])
 * @method PhoneNumberStatusForVirtual phoneNumberStatusForVirtual(array $options = [])
 * @method PhoneNumberStatusForVoice phoneNumberStatusForVoice(array $options = [])
 * @method ThreeElementsVerification threeElementsVerification(array $options = [])
 * @method TwoElementsVerification twoElementsVerification(array $options = [])
 */
class DytnsapiApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Dytnsapi';

    /** @var string */
    public $version = '2020-02-17';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExtendFunction()
 * @method $this withExtendFunction($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getMask()
 * @method $this withMask($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAuthCode()
 * @method $this withAuthCode($value)
 * @method string getInputNumber()
 * @method $this withInputNumber($value)
 */
class DescribeEmptyNumber extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExtendFunction()
 * @method $this withExtendFunction($value)
 * @method string getRate()
 * @method $this withRate($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getMask()
 * @method $this withMask($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNumberType()
 * @method $this withNumberType($value)
 * @method string getAuthCode()
 * @method $this withAuthCode($value)
 * @method string getInputNumber()
 * @method $this withInputNumber($value)
 */
class DescribePhoneNumberAnalysis extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExtendFunction()
 * @method $this withExtendFunction($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getMask()
 * @method $this withMask($value)
 * @method string getOfferType()
 * @method $this withOfferType($value)
 * @method string getResultCount()
 * @method $this withResultCount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAuthCode()
 * @method $this withAuthCode($value)
 * @method string getInputNumber()
 * @method $this withInputNumber($value)
 * @method string getCarrier()
 * @method $this withCarrier($value)
 */
class DescribePhoneNumberOnlineTime extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExtendFunction()
 * @method $this withExtendFunction($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getMask()
 * @method $this withMask($value)
 * @method string getResultCount()
 * @method $this withResultCount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAuthCode()
 * @method $this withAuthCode($value)
 * @method string getInputNumber()
 * @method $this withInputNumber($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 */
class DescribePhoneNumberOperatorAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getExtendFunction()
 * @method $this withExtendFunction($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getMask()
 * @method $this withMask($value)
 * @method string getOfferType()
 * @method $this withOfferType($value)
 * @method string getResultCount()
 * @method $this withResultCount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAuthCode()
 * @method $this withAuthCode($value)
 * @method string getInputNumber()
 * @method $this withInputNumber($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 */
class DescribePhoneTwiceTelVerify extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMask()
 * @method $this withMask($value)
 * @method string getOfferType()
 * @method $this withOfferType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAuthCode()
 * @method $this withAuthCode($value)
 * @method string getInputNumber()
 * @method $this withInputNumber($value)
 */
class InvalidPhoneNumberFilter extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getMask()
 * @method $this withMask($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAuthCode()
 * @method $this withAuthCode($value)
 * @method string getInputNumber()
 * @method $this withInputNumber($value)
 */
class PhoneNumberEncrypt extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExtendFunction()
 * @method $this withExtendFunction($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getMask()
 * @method $this withMask($value)
 * @method string getResultCount()
 * @method $this withResultCount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAuthCode()
 * @method $this withAuthCode($value)
 * @method string getInputNumber()
 * @method $this withInputNumber($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 * @method string getPhoneStatusSceneCode()
 * @method $this withPhoneStatusSceneCode($value)
 */
class PhoneNumberStatusForAccount extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getMask()
 * @method $this withMask($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAuthCode()
 * @method $this withAuthCode($value)
 * @method string getInputNumber()
 * @method $this withInputNumber($value)
 */
class PhoneNumberStatusForPublic extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExtendFunction()
 * @method $this withExtendFunction($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getMask()
 * @method $this withMask($value)
 * @method string getResultCount()
 * @method $this withResultCount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAuthCode()
 * @method $this withAuthCode($value)
 * @method string getInputNumber()
 * @method $this withInputNumber($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 * @method string getPhoneStatusSceneCode()
 * @method $this withPhoneStatusSceneCode($value)
 */
class PhoneNumberStatusForReal extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExtendFunction()
 * @method $this withExtendFunction($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getMask()
 * @method $this withMask($value)
 * @method string getResultCount()
 * @method $this withResultCount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAuthCode()
 * @method $this withAuthCode($value)
 * @method string getInputNumber()
 * @method $this withInputNumber($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 * @method string getPhoneStatusSceneCode()
 * @method $this withPhoneStatusSceneCode($value)
 */
class PhoneNumberStatusForSms extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExtendFunction()
 * @method $this withExtendFunction($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getMask()
 * @method $this withMask($value)
 * @method string getResultCount()
 * @method $this withResultCount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAuthCode()
 * @method $this withAuthCode($value)
 * @method string getInputNumber()
 * @method $this withInputNumber($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 * @method string getPhoneStatusSceneCode()
 * @method $this withPhoneStatusSceneCode($value)
 */
class PhoneNumberStatusForVirtual extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExtendFunction()
 * @method $this withExtendFunction($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getMask()
 * @method $this withMask($value)
 * @method string getResultCount()
 * @method $this withResultCount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAuthCode()
 * @method $this withAuthCode($value)
 * @method string getInputNumber()
 * @method $this withInputNumber($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 * @method string getPhoneStatusSceneCode()
 * @method $this withPhoneStatusSceneCode($value)
 */
class PhoneNumberStatusForVoice extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExtendFunction()
 * @method $this withExtendFunction($value)
 * @method string getCertCode()
 * @method $this withCertCode($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getMask()
 * @method $this withMask($value)
 * @method string getResultCount()
 * @method $this withResultCount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAuthCode()
 * @method $this withAuthCode($value)
 * @method string getInputNumber()
 * @method $this withInputNumber($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 */
class ThreeElementsVerification extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExtendFunction()
 * @method $this withExtendFunction($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getMask()
 * @method $this withMask($value)
 * @method string getResultCount()
 * @method $this withResultCount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNumberType()
 * @method $this withNumberType($value)
 * @method string getAuthCode()
 * @method $this withAuthCode($value)
 * @method string getInputNumber()
 * @method $this withInputNumber($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 */
class TwoElementsVerification extends Rpc
{
}
