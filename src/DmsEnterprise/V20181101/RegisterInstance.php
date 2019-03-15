<?php

namespace AlibabaCloud\DmsEnterprise\V20181101;

use AlibabaCloud\Rpc;

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
class RegisterInstance extends Rpc
{
    public $product = 'dms-enterprise';

    public $version = '2018-11-01';

    public $method = 'POST';

    public $serviceCode = 'dmsenterprise';
}
