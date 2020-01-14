<?php

namespace AlibabaCloud\Cas\V20180713;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateDVOrderAudit createDVOrderAudit(array $options = [])
 * @method CreateUserCertificate createUserCertificate(array $options = [])
 * @method DeleteUserCertificate deleteUserCertificate(array $options = [])
 * @method DescribeDVOrderResult describeDVOrderResult(array $options = [])
 * @method DescribeOrderInstanceList describeOrderInstanceList(array $options = [])
 * @method DescribeUserCertificateDetail describeUserCertificateDetail(array $options = [])
 * @method DescribeUserCertificateList describeUserCertificateList(array $options = [])
 */
class CasApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'cas';

    /** @var string */
    public $version = '2018-07-13';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cas';
}

/**
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getProvince()
 * @method $this withProvince($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getDomainVerifyType()
 * @method $this withDomainVerifyType($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class CreateDVOrderAudit extends Rpc
{
}

/**
 * @method string getCert()
 * @method $this withCert($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class CreateUserCertificate extends Rpc
{
}

/**
 * @method string getCertId()
 * @method $this withCertId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteUserCertificate extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDVOrderResult extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStartIndex()
 * @method $this withStartIndex($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeOrderInstanceList extends Rpc
{
}

/**
 * @method string getCertId()
 * @method $this withCertId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeUserCertificateDetail extends Rpc
{
}

/**
 * @method string getShowSize()
 * @method $this withShowSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeUserCertificateList extends Rpc
{
}
