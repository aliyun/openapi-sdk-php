<?php

namespace AlibabaCloud\IdaasDoraemon\V20210520;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateAuthenticatorRegistration createAuthenticatorRegistration(array $options = [])
 * @method CreateUserAuthenticateOptions createUserAuthenticateOptions(array $options = [])
 * @method DeregisterAuthenticator deregisterAuthenticator(array $options = [])
 * @method FetchAccessToken fetchAccessToken(array $options = [])
 * @method GetAuthenticator getAuthenticator(array $options = [])
 * @method ListAuthenticationLogs listAuthenticationLogs(array $options = [])
 * @method ListAuthenticatorOpsLogs listAuthenticatorOpsLogs(array $options = [])
 * @method ListAuthenticators listAuthenticators(array $options = [])
 * @method ListCostUnitOrders listCostUnitOrders(array $options = [])
 * @method ListOrderConsumeStatisticRecords listOrderConsumeStatisticRecords(array $options = [])
 * @method ListPwnedPasswords listPwnedPasswords(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method QuerySmsReports querySmsReports(array $options = [])
 * @method QuerySmsUps querySmsUps(array $options = [])
 * @method RegisterAuthenticator registerAuthenticator(array $options = [])
 * @method ServiceInvoke serviceInvoke(array $options = [])
 * @method UpdateAuthenticatorAttribute updateAuthenticatorAttribute(array $options = [])
 * @method VerifyIdToken verifyIdToken(array $options = [])
 * @method VerifyUserAuthentication verifyUserAuthentication(array $options = [])
 */
class IdaasDoraemonApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'idaas-doraemon';

    /** @var string */
    public $version = '2021-05-20';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'idaasauth';
}

/**
 * @method string getClientExtendParamsJson()
 * @method $this withClientExtendParamsJson($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getUserDisplayName()
 * @method $this withUserDisplayName($value)
 * @method string getServerExtendParamsJson()
 * @method $this withServerExtendParamsJson($value)
 * @method string getRegistrationContext()
 * @method $this withRegistrationContext($value)
 * @method string getAuthenticatorType()
 * @method $this withAuthenticatorType($value)
 * @method string getClientExtendParamsJsonSign()
 * @method $this withClientExtendParamsJsonSign($value)
 * @method string getApplicationExternalId()
 * @method $this withApplicationExternalId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class CreateAuthenticatorRegistration extends Rpc
{
}

/**
 * @method string getClientExtendParamsJson()
 * @method $this withClientExtendParamsJson($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getBindHashBase64()
 * @method $this withBindHashBase64($value)
 * @method string getServerExtendParamsJson()
 * @method $this withServerExtendParamsJson($value)
 * @method string getAuthenticatorType()
 * @method $this withAuthenticatorType($value)
 * @method string getClientExtendParamsJsonSign()
 * @method $this withClientExtendParamsJsonSign($value)
 * @method string getApplicationExternalId()
 * @method $this withApplicationExternalId($value)
 */
class CreateUserAuthenticateOptions extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getAuthenticatorUuid()
 * @method $this withAuthenticatorUuid($value)
 * @method string getApplicationExternalId()
 * @method $this withApplicationExternalId($value)
 */
class DeregisterAuthenticator extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getXClientIp()
 * @method $this withXClientIp($value)
 * @method string getMobileExtendParamsJsonSign()
 * @method $this withMobileExtendParamsJsonSign($value)
 * @method string getServerExtendParamsJson()
 * @method $this withServerExtendParamsJson($value)
 * @method string getMobileExtendParamsJson()
 * @method $this withMobileExtendParamsJson($value)
 * @method string getApplicationExternalId()
 * @method $this withApplicationExternalId($value)
 */
class FetchAccessToken extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getAuthenticatorUuid()
 * @method $this withAuthenticatorUuid($value)
 * @method string getApplicationExternalId()
 * @method $this withApplicationExternalId($value)
 */
class GetAuthenticator extends Rpc
{
}

/**
 * @method string getToTime()
 * @method $this withToTime($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getLogTag()
 * @method $this withLogTag($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCredentialId()
 * @method $this withCredentialId($value)
 * @method string getFromTime()
 * @method $this withFromTime($value)
 * @method string getAuthenticatorUuid()
 * @method $this withAuthenticatorUuid($value)
 * @method string getAuthenticatorType()
 * @method $this withAuthenticatorType($value)
 * @method string getApplicationExternalId()
 * @method $this withApplicationExternalId($value)
 */
class ListAuthenticationLogs extends Rpc
{
}

/**
 * @method string getToTime()
 * @method $this withToTime($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFromTime()
 * @method $this withFromTime($value)
 * @method string getAuthenticatorUuid()
 * @method $this withAuthenticatorUuid($value)
 * @method string getAuthenticatorType()
 * @method $this withAuthenticatorType($value)
 * @method string getApplicationExternalId()
 * @method $this withApplicationExternalId($value)
 */
class ListAuthenticatorOpsLogs extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAuthenticatorType()
 * @method $this withAuthenticatorType($value)
 * @method string getApplicationExternalId()
 * @method $this withApplicationExternalId($value)
 */
class ListAuthenticators extends Rpc
{
}

/**
 * @method string getBeginDate()
 * @method $this withBeginDate($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFinalDate()
 * @method $this withFinalDate($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListCostUnitOrders extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getStatisticTimeMin()
 * @method $this withStatisticTimeMin($value)
 * @method string getAliOrderCode()
 * @method $this withAliOrderCode($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method string getStatisticTimeMax()
 * @method $this withStatisticTimeMax($value)
 * @method string getApplicationExternalId()
 * @method $this withApplicationExternalId($value)
 */
class ListOrderConsumeStatisticRecords extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getPrefixHexPasswordSha1Hash()
 * @method $this withPrefixHexPasswordSha1Hash($value)
 */
class ListPwnedPasswords extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getApplicationExternalId()
 * @method $this withApplicationExternalId($value)
 */
class ListUsers extends Rpc
{
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class QuerySmsReports extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /** @var string */
    public $method = 'GET';
}

class QuerySmsUps extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getLogParams()
 * @method $this withLogParams($value)
 * @method string getClientExtendParamsJson()
 * @method $this withClientExtendParamsJson($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getServerExtendParamsJson()
 * @method $this withServerExtendParamsJson($value)
 * @method string getRegistrationContext()
 * @method $this withRegistrationContext($value)
 * @method string getAuthenticatorName()
 * @method $this withAuthenticatorName($value)
 * @method string getRequireChallengeBase64()
 * @method $this withRequireChallengeBase64($value)
 * @method string getAuthenticatorType()
 * @method $this withAuthenticatorType($value)
 * @method string getClientExtendParamsJsonSign()
 * @method $this withClientExtendParamsJsonSign($value)
 * @method string getUserSourceIp()
 * @method $this withUserSourceIp($value)
 * @method string getApplicationExternalId()
 * @method $this withApplicationExternalId($value)
 */
class RegisterAuthenticator extends Rpc
{
}

/**
 * @method string getXClientIp()
 * @method $this withXClientIp($value)
 * @method string getMobileExtendParamsJsonSign()
 * @method $this withMobileExtendParamsJsonSign($value)
 * @method string getServerExtendParamsJson()
 * @method $this withServerExtendParamsJson($value)
 * @method string getDoraemonAction()
 * @method $this withDoraemonAction($value)
 * @method string getMobileExtendParamsJson()
 * @method $this withMobileExtendParamsJson($value)
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method string getTestModel()
 * @method $this withTestModel($value)
 * @method string getApplicationExternalId()
 * @method $this withApplicationExternalId($value)
 */
class ServiceInvoke extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getAuthenticatorName()
 * @method $this withAuthenticatorName($value)
 * @method string getAuthenticatorUuid()
 * @method $this withAuthenticatorUuid($value)
 * @method string getApplicationExternalId()
 * @method $this withApplicationExternalId($value)
 */
class UpdateAuthenticatorAttribute extends Rpc
{
}

/**
 * @method string getJwtIdToken()
 * @method $this withJwtIdToken($value)
 * @method string getApplicationExternalId()
 * @method $this withApplicationExternalId($value)
 */
class VerifyIdToken extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getLogParams()
 * @method $this withLogParams($value)
 * @method string getClientExtendParamsJson()
 * @method $this withClientExtendParamsJson($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getLogTag()
 * @method $this withLogTag($value)
 * @method string getServerExtendParamsJson()
 * @method $this withServerExtendParamsJson($value)
 * @method string getRequireBindHashBase64()
 * @method $this withRequireBindHashBase64($value)
 * @method string getAuthenticationContext()
 * @method $this withAuthenticationContext($value)
 * @method string getRequireChallengeBase64()
 * @method $this withRequireChallengeBase64($value)
 * @method string getAuthenticatorType()
 * @method $this withAuthenticatorType($value)
 * @method string getClientExtendParamsJsonSign()
 * @method $this withClientExtendParamsJsonSign($value)
 * @method string getUserSourceIp()
 * @method $this withUserSourceIp($value)
 * @method string getApplicationExternalId()
 * @method $this withApplicationExternalId($value)
 */
class VerifyUserAuthentication extends Rpc
{
}
