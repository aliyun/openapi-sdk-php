<?php

namespace AlibabaCloud\DmsEnterprise\V20181101;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method EnableUser enableUser(array $options = [])
 * @method DisableUser disableUser(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method RegisterUser registerUser(array $options = [])
 * @method GetOpLog getOpLog(array $options = [])
 * @method RegisterInstance registerInstance(array $options = [])
 */
class DmsEnterpriseApiResolver
{
    use ApiResolverTrait;
}

class V20181101Rpc extends Rpc
{
    /** @var string */
    public $product = 'dms-enterprise';

    /** @var string */
    public $version = '2018-11-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'dmsenterprise';
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class EnableUser extends V20181101Rpc
{
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class DisableUser extends V20181101Rpc
{
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class DeleteUser extends V20181101Rpc
{
}

/**
 * @method string getRoleNames()
 * @method $this withRoleNames($value)
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getUserNick()
 * @method $this withUserNick($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class RegisterUser extends V20181101Rpc
{
}

/**
 * @method string getModule()
 * @method $this withModule($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetOpLog extends V20181101Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getEcsInstanceId()
 * @method $this withEcsInstanceId($value)
 * @method string getEcsRegion()
 * @method $this withEcsRegion($value)
 * @method string getExportTimeout()
 * @method $this withExportTimeout($value)
 * @method string getDatabasePassword()
 * @method $this withDatabasePassword($value)
 * @method string getInstanceAlias()
 * @method $this withInstanceAlias($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getSid()
 * @method $this withSid($value)
 * @method string getDatabaseUser()
 * @method $this withDatabaseUser($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getInstanceSource()
 * @method $this withInstanceSource($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getHost()
 * @method $this withHost($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getQueryTimeout()
 * @method $this withQueryTimeout($value)
 * @method string getDbaUid()
 * @method $this withDbaUid($value)
 * @method string getSafeRule()
 * @method $this withSafeRule($value)
 */
class RegisterInstance extends V20181101Rpc
{
}
