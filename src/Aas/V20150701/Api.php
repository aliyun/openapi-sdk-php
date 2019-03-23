<?php

namespace AlibabaCloud\Aas\V20150701;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method GenerateAccountLoginToken generateAccountLoginToken(array $options = [])
 * @method VerifyAccountLoginToken verifyAccountLoginToken(array $options = [])
 * @method CreateIntlAliyunAccount createIntlAliyunAccount(array $options = [])
 * @method CreateShortTermAccessKeyForAccount createShortTermAccessKeyForAccount(array $options = [])
 * @method GetAliyunAccountWithBindTaobaoHid getAliyunAccountWithBindTaobaoHid(array $options = [])
 * @method CreateAliyunAccountWithBindHid createAliyunAccountWithBindHid(array $options = [])
 * @method GetAliyunAccountWithBindHid getAliyunAccountWithBindHid(array $options = [])
 * @method GetShortTermAccessKeyForAccount getShortTermAccessKeyForAccount(array $options = [])
 * @method ListAliyunAccount listAliyunAccount(array $options = [])
 * @method UpdateStatusForAccount updateStatusForAccount(array $options = [])
 * @method GetBasicInfoForAccount getBasicInfoForAccount(array $options = [])
 * @method ListAccessKeysForAccount listAccessKeysForAccount(array $options = [])
 * @method UpdateAccessKeyStatusForAccount updateAccessKeyStatusForAccount(array $options = [])
 * @method UpdatePasswordForAccount updatePasswordForAccount(array $options = [])
 * @method CreateAccessKeyForAccount createAccessKeyForAccount(array $options = [])
 * @method CreateAliyunAccount createAliyunAccount(array $options = [])
 * @method DeleteAccessKeyForAccount deleteAccessKeyForAccount(array $options = [])
 */
class AasApiResolver
{
    use ApiResolverTrait;
}

class V20150701Rpc extends Rpc
{
    /** @var string */
    public $product = 'Aas';

    /** @var string */
    public $version = '2015-07-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getTargetPk()
 * @method $this withTargetPk($value)
 */
class GenerateAccountLoginToken extends V20150701Rpc
{
}

/**
 * @method string getLoginToken()
 * @method $this withLoginToken($value)
 */
class VerifyAccountLoginToken extends V20150701Rpc
{
}

/**
 * @method string getNationalityCode()
 * @method $this withNationalityCode($value)
 */
class CreateIntlAliyunAccount extends V20150701Rpc
{
}

/**
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getIsMfaPresent()
 * @method $this withIsMfaPresent($value)
 * @method string getPK()
 * @method $this withPK($value)
 */
class CreateShortTermAccessKeyForAccount extends V20150701Rpc
{
}

/**
 * @method string getHavanaId()
 * @method $this withHavanaId($value)
 */
class GetAliyunAccountWithBindTaobaoHid extends V20150701Rpc
{
}

/**
 * @method string getInnerAccountHid()
 * @method $this withInnerAccountHid($value)
 */
class CreateAliyunAccountWithBindHid extends V20150701Rpc
{
}

/**
 * @method string getInnerAccountHid()
 * @method $this withInnerAccountHid($value)
 */
class GetAliyunAccountWithBindHid extends V20150701Rpc
{
}

/**
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getIsMfaPresent()
 * @method $this withIsMfaPresent($value)
 * @method string getPK()
 * @method $this withPK($value)
 */
class GetShortTermAccessKeyForAccount extends V20150701Rpc
{
}

/**
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 */
class ListAliyunAccount extends V20150701Rpc
{
}

/**
 * @method string getAccountStatus()
 * @method $this withAccountStatus($value)
 * @method string getPK()
 * @method $this withPK($value)
 */
class UpdateStatusForAccount extends V20150701Rpc
{
}

/**
 * @method string getAliyunId()
 * @method $this withAliyunId($value)
 */
class GetBasicInfoForAccount extends V20150701Rpc
{
}

/**
 * @method string getAKType()
 * @method $this withAKType($value)
 * @method string getAKStatus()
 * @method $this withAKStatus($value)
 * @method string getPK()
 * @method $this withPK($value)
 */
class ListAccessKeysForAccount extends V20150701Rpc
{
}

/**
 * @method string getAKStatus()
 * @method $this withAKStatus($value)
 * @method string getAKId()
 * @method $this withAKId($value)
 * @method string getPK()
 * @method $this withPK($value)
 */
class UpdateAccessKeyStatusForAccount extends V20150701Rpc
{
}

/**
 * @method string getPK()
 * @method $this withPK($value)
 * @method string getNewPassword()
 * @method $this withNewPassword($value)
 */
class UpdatePasswordForAccount extends V20150701Rpc
{
}

/**
 * @method string getAKSecret()
 * @method $this withAKSecret($value)
 * @method string getPK()
 * @method $this withPK($value)
 */
class CreateAccessKeyForAccount extends V20150701Rpc
{
}

/**
 * @method string getAliyunId()
 * @method $this withAliyunId($value)
 */
class CreateAliyunAccount extends V20150701Rpc
{
}

/**
 * @method string getAKId()
 * @method $this withAKId($value)
 * @method string getPK()
 * @method $this withPK($value)
 */
class DeleteAccessKeyForAccount extends V20150701Rpc
{
}
