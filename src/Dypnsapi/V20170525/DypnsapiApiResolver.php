<?php

namespace AlibabaCloud\Dypnsapi\V20170525;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateVerifyScheme createVerifyScheme(array $options = [])
 * @method DeleteVerifyScheme deleteVerifyScheme(array $options = [])
 * @method DescribeVerifyScheme describeVerifyScheme(array $options = [])
 * @method GetAuthorizationUrl getAuthorizationUrl(array $options = [])
 * @method GetAuthToken getAuthToken(array $options = [])
 * @method GetCertifyResult getCertifyResult(array $options = [])
 * @method GetMobile getMobile(array $options = [])
 * @method GetSmsAuthTokens getSmsAuthTokens(array $options = [])
 * @method QueryGateVerifyBillingPublic queryGateVerifyBillingPublic(array $options = [])
 * @method QueryGateVerifyStatisticPublic queryGateVerifyStatisticPublic(array $options = [])
 * @method VerifyMobile verifyMobile(array $options = [])
 * @method VerifyPhoneWithToken verifyPhoneWithToken(array $options = [])
 * @method VerifySmsCode verifySmsCode(array $options = [])
 */
class DypnsapiApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Dypnsapi';

    /** @var string */
    public $version = '2017-05-25';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBundleId()
 * @method $this withBundleId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPackSign()
 * @method $this withPackSign($value)
 * @method string getPackName()
 * @method $this withPackName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOsType()
 * @method $this withOsType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSchemeName()
 * @method $this withSchemeName($value)
 */
class CreateVerifyScheme extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSchemeCode()
 * @method $this withSchemeCode($value)
 * @method string getCustomerId()
 * @method $this withCustomerId($value)
 */
class DeleteVerifyScheme extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSchemeCode()
 * @method $this withSchemeCode($value)
 * @method string getCustomerId()
 * @method $this withCustomerId($value)
 */
class DescribeVerifyScheme extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSchemeId()
 * @method $this withSchemeId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPhoneNo()
 * @method $this withPhoneNo($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 */
class GetAuthorizationUrl extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOrigin()
 * @method $this withOrigin($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 */
class GetAuthToken extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class GetCertifyResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAccessToken()
 * @method $this withAccessToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 */
class GetMobile extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getBundleId()
 * @method $this withBundleId($value)
 * @method string getSignName()
 * @method $this withSignName($value)
 * @method string getSceneCode()
 * @method $this withSceneCode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSmsCodeExpire()
 * @method $this withSmsCodeExpire($value)
 * @method string getPackageName()
 * @method $this withPackageName($value)
 * @method string getOsType()
 * @method $this withOsType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmsTemplateCode()
 * @method $this withSmsTemplateCode($value)
 * @method string getExpire()
 * @method $this withExpire($value)
 */
class GetSmsAuthTokens extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAuthenticationType()
 * @method $this withAuthenticationType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMonth()
 * @method $this withMonth($value)
 */
class QueryGateVerifyBillingPublic extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAuthenticationType()
 * @method $this withAuthenticationType($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getSceneCode()
 * @method $this withSceneCode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getOsType()
 * @method $this withOsType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 */
class QueryGateVerifyStatisticPublic extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getAccessCode()
 * @method $this withAccessCode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 */
class VerifyMobile extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpToken()
 * @method $this withSpToken($value)
 */
class VerifyPhoneWithToken extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSmsToken()
 * @method $this withSmsToken($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmsCode()
 * @method $this withSmsCode($value)
 */
class VerifySmsCode extends Rpc
{
}
