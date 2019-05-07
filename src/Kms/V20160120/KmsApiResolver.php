<?php

namespace AlibabaCloud\Kms\V20160120;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method UpdateAlias updateAlias(array $options = [])
 * @method UntagResource untagResource(array $options = [])
 * @method TagResource tagResource(array $options = [])
 * @method ScheduleKeyDeletion scheduleKeyDeletion(array $options = [])
 * @method ListResourceTags listResourceTags(array $options = [])
 * @method ListKeys listKeys(array $options = [])
 * @method ListAliasesByKeyId listAliasesByKeyId(array $options = [])
 * @method ListAliases listAliases(array $options = [])
 * @method ImportKeyMaterial importKeyMaterial(array $options = [])
 * @method GenerateDataKey generateDataKey(array $options = [])
 * @method GetParametersForImport getParametersForImport(array $options = [])
 * @method Encrypt encrypt(array $options = [])
 * @method EnableKey enableKey(array $options = [])
 * @method DisableKey disableKey(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeKey describeKey(array $options = [])
 * @method DeleteKeyMaterial deleteKeyMaterial(array $options = [])
 * @method DeleteAlias deleteAlias(array $options = [])
 * @method Decrypt decrypt(array $options = [])
 * @method CreateKey createKey(array $options = [])
 * @method CreateAlias createAlias(array $options = [])
 * @method CancelKeyDeletion cancelKeyDeletion(array $options = [])
 */
class KmsApiResolver
{
    use ApiResolverTrait;
}

class V20160120Rpc extends Rpc
{
    /** @var string */
    public $product = 'Kms';

    /** @var string */
    public $version = '2016-01-20';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'kms';
}

/**
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class UpdateAlias extends V20160120Rpc
{
}

/**
 * @method string getTagKeys()
 * @method $this withTagKeys($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class UntagResource extends V20160120Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class TagResource extends V20160120Rpc
{
}

/**
 * @method string getPendingWindowInDays()
 * @method $this withPendingWindowInDays($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class ScheduleKeyDeletion extends V20160120Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class ListResourceTags extends V20160120Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListKeys extends V20160120Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListAliasesByKeyId extends V20160120Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListAliases extends V20160120Rpc
{
}

/**
 * @method string getImportToken()
 * @method $this withImportToken($value)
 * @method string getEncryptedKeyMaterial()
 * @method $this withEncryptedKeyMaterial($value)
 * @method string getKeyMaterialExpireUnix()
 * @method $this withKeyMaterialExpireUnix($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class ImportKeyMaterial extends V20160120Rpc
{
}

/**
 * @method string getEncryptionContext()
 * @method $this withEncryptionContext($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getKeySpec()
 * @method $this withKeySpec($value)
 * @method string getNumberOfBytes()
 * @method $this withNumberOfBytes($value)
 */
class GenerateDataKey extends V20160120Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getWrappingAlgorithm()
 * @method $this withWrappingAlgorithm($value)
 * @method string getWrappingKeySpec()
 * @method $this withWrappingKeySpec($value)
 */
class GetParametersForImport extends V20160120Rpc
{
}

/**
 * @method string getEncryptionContext()
 * @method $this withEncryptionContext($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getPlaintext()
 * @method $this withPlaintext($value)
 */
class Encrypt extends V20160120Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class EnableKey extends V20160120Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class DisableKey extends V20160120Rpc
{
}

class DescribeRegions extends V20160120Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class DescribeKey extends V20160120Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class DeleteKeyMaterial extends V20160120Rpc
{
}

/**
 * @method string getAliasName()
 * @method $this withAliasName($value)
 */
class DeleteAlias extends V20160120Rpc
{
}

/**
 * @method string getEncryptionContext()
 * @method $this withEncryptionContext($value)
 * @method string getCiphertextBlob()
 * @method $this withCiphertextBlob($value)
 */
class Decrypt extends V20160120Rpc
{
}

/**
 * @method string getKeyUsage()
 * @method $this withKeyUsage($value)
 * @method string getOrigin()
 * @method $this withOrigin($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class CreateKey extends V20160120Rpc
{
}

/**
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class CreateAlias extends V20160120Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class CancelKeyDeletion extends V20160120Rpc
{
}
