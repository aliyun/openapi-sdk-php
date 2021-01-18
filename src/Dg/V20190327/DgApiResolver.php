<?php

namespace AlibabaCloud\Dg\V20190327;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddDatabase addDatabase(array $options = [])
 * @method AddDatabaseList addDatabaseList(array $options = [])
 * @method ConnectDatabase connectDatabase(array $options = [])
 * @method CreateDatabaseAccessPoint createDatabaseAccessPoint(array $options = [])
 * @method CreateGateway createGateway(array $options = [])
 * @method CreateGatewayVerifyCode createGatewayVerifyCode(array $options = [])
 * @method DeleteDatabase deleteDatabase(array $options = [])
 * @method DeleteDatabaseAccessPoint deleteDatabaseAccessPoint(array $options = [])
 * @method DeleteGateway deleteGateway(array $options = [])
 * @method DeleteGatewayInstance deleteGatewayInstance(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DownloadGatewayProgram downloadGatewayProgram(array $options = [])
 * @method FindUserGatewayById findUserGatewayById(array $options = [])
 * @method GetUserDatabases getUserDatabases(array $options = [])
 * @method GetUserGatewayInstances getUserGatewayInstances(array $options = [])
 * @method GetUserGateways getUserGateways(array $options = [])
 * @method ListDatabaseAccessPoint listDatabaseAccessPoint(array $options = [])
 * @method ModifyDatabase modifyDatabase(array $options = [])
 * @method ModifyGateway modifyGateway(array $options = [])
 * @method RetryDatabase retryDatabase(array $options = [])
 * @method StopGateway stopGateway(array $options = [])
 */
class DgApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'dg';

    /** @var string */
    public $version = '2019-03-27';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'dg';
}

/**
 * @method string getClientToken()
 * @method string getHost()
 * @method string getDbUserName()
 * @method string getDbDescription()
 * @method string getGatewayId()
 * @method string getDbName()
 * @method string getPort()
 * @method string getDbPassword()
 * @method string getDbType()
 */
class AddDatabase extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHost($value)
    {
        $this->data['Host'] = $value;
        $this->options['form_params']['Host'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbUserName($value)
    {
        $this->data['DbUserName'] = $value;
        $this->options['form_params']['DbUserName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbDescription($value)
    {
        $this->data['DbDescription'] = $value;
        $this->options['form_params']['DbDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGatewayId($value)
    {
        $this->data['GatewayId'] = $value;
        $this->options['form_params']['GatewayId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPort($value)
    {
        $this->data['Port'] = $value;
        $this->options['form_params']['Port'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbPassword($value)
    {
        $this->data['DbPassword'] = $value;
        $this->options['form_params']['DbPassword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbType($value)
    {
        $this->data['DbType'] = $value;
        $this->options['form_params']['DbType'] = $value;

        return $this;
    }
}

/**
 * @method string getDatabaseString()
 * @method string getClientToken()
 */
class AddDatabaseList extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabaseString($value)
    {
        $this->data['DatabaseString'] = $value;
        $this->options['form_params']['DatabaseString'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getDbName()
 * @method string getPort()
 * @method string getDbPassword()
 * @method string getHost()
 * @method string getDbType()
 * @method string getDbUserName()
 * @method string getGatewayId()
 */
class ConnectDatabase extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPort($value)
    {
        $this->data['Port'] = $value;
        $this->options['form_params']['Port'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbPassword($value)
    {
        $this->data['DbPassword'] = $value;
        $this->options['form_params']['DbPassword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHost($value)
    {
        $this->data['Host'] = $value;
        $this->options['form_params']['Host'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbType($value)
    {
        $this->data['DbType'] = $value;
        $this->options['form_params']['DbType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbUserName($value)
    {
        $this->data['DbUserName'] = $value;
        $this->options['form_params']['DbUserName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGatewayId($value)
    {
        $this->data['GatewayId'] = $value;
        $this->options['form_params']['GatewayId'] = $value;

        return $this;
    }
}

/**
 * @method string getVpcAZone()
 * @method string getClientToken()
 * @method string getDbInstanceId()
 * @method string getVpcRegionId()
 * @method string getVSwitchId()
 * @method string getVpcId()
 */
class CreateDatabaseAccessPoint extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcAZone($value)
    {
        $this->data['VpcAZone'] = $value;
        $this->options['form_params']['VpcAZone'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbInstanceId($value)
    {
        $this->data['DbInstanceId'] = $value;
        $this->options['form_params']['DbInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcRegionId($value)
    {
        $this->data['VpcRegionId'] = $value;
        $this->options['form_params']['VpcRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVSwitchId($value)
    {
        $this->data['VSwitchId'] = $value;
        $this->options['form_params']['VSwitchId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['form_params']['VpcId'] = $value;

        return $this;
    }
}

/**
 * @method string getGatewayDesc()
 * @method string getGatewayName()
 */
class CreateGateway extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGatewayDesc($value)
    {
        $this->data['GatewayDesc'] = $value;
        $this->options['form_params']['GatewayDesc'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGatewayName($value)
    {
        $this->data['GatewayName'] = $value;
        $this->options['form_params']['GatewayName'] = $value;

        return $this;
    }
}

/**
 * @method string getGatewayId()
 */
class CreateGatewayVerifyCode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGatewayId($value)
    {
        $this->data['GatewayId'] = $value;
        $this->options['form_params']['GatewayId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class DeleteDatabase extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getVpcAZone()
 * @method string getVpcRegionId()
 * @method string getVSwitchId()
 * @method string getVpcId()
 * @method string getDbInstanceId()
 */
class DeleteDatabaseAccessPoint extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcAZone($value)
    {
        $this->data['VpcAZone'] = $value;
        $this->options['form_params']['VpcAZone'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcRegionId($value)
    {
        $this->data['VpcRegionId'] = $value;
        $this->options['form_params']['VpcRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVSwitchId($value)
    {
        $this->data['VSwitchId'] = $value;
        $this->options['form_params']['VSwitchId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['form_params']['VpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbInstanceId($value)
    {
        $this->data['DbInstanceId'] = $value;
        $this->options['form_params']['DbInstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getGatewayId()
 */
class DeleteGateway extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGatewayId($value)
    {
        $this->data['GatewayId'] = $value;
        $this->options['form_params']['GatewayId'] = $value;

        return $this;
    }
}

/**
 * @method string getGatewayInstanceId()
 * @method string getGatewayId()
 */
class DeleteGatewayInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGatewayInstanceId($value)
    {
        $this->data['GatewayInstanceId'] = $value;
        $this->options['form_params']['GatewayInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGatewayId($value)
    {
        $this->data['GatewayId'] = $value;
        $this->options['form_params']['GatewayId'] = $value;

        return $this;
    }
}

class DescribeRegions extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getUserOS()
 * @method string getDgVersion()
 */
class DownloadGatewayProgram extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserOS($value)
    {
        $this->data['UserOS'] = $value;
        $this->options['form_params']['UserOS'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDgVersion($value)
    {
        $this->data['DgVersion'] = $value;
        $this->options['form_params']['DgVersion'] = $value;

        return $this;
    }
}

/**
 * @method string getGatewayId()
 */
class FindUserGatewayById extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGatewayId($value)
    {
        $this->data['GatewayId'] = $value;
        $this->options['form_params']['GatewayId'] = $value;

        return $this;
    }
}

/**
 * @method string getSearchKey()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getHost()
 * @method string getGatewayId()
 * @method string getInstanceId()
 * @method string getPort()
 * @method string getDbType()
 */
class GetUserDatabases extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKey($value)
    {
        $this->data['SearchKey'] = $value;
        $this->options['form_params']['SearchKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHost($value)
    {
        $this->data['Host'] = $value;
        $this->options['form_params']['Host'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGatewayId($value)
    {
        $this->data['GatewayId'] = $value;
        $this->options['form_params']['GatewayId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPort($value)
    {
        $this->data['Port'] = $value;
        $this->options['form_params']['Port'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbType($value)
    {
        $this->data['DbType'] = $value;
        $this->options['form_params']['DbType'] = $value;

        return $this;
    }
}

/**
 * @method string getGatewayId()
 */
class GetUserGatewayInstances extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGatewayId($value)
    {
        $this->data['GatewayId'] = $value;
        $this->options['form_params']['GatewayId'] = $value;

        return $this;
    }
}

/**
 * @method string getSearchKey()
 * @method string getPageNumber()
 * @method string getPageSize()
 */
class GetUserGateways extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKey($value)
    {
        $this->data['SearchKey'] = $value;
        $this->options['form_params']['SearchKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getSearchKey()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getHost()
 * @method string getDbInstanceId()
 * @method string getGatewayId()
 * @method string getPort()
 * @method string getVpcId()
 */
class ListDatabaseAccessPoint extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKey($value)
    {
        $this->data['SearchKey'] = $value;
        $this->options['form_params']['SearchKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHost($value)
    {
        $this->data['Host'] = $value;
        $this->options['form_params']['Host'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbInstanceId($value)
    {
        $this->data['DbInstanceId'] = $value;
        $this->options['form_params']['DbInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGatewayId($value)
    {
        $this->data['GatewayId'] = $value;
        $this->options['form_params']['GatewayId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPort($value)
    {
        $this->data['Port'] = $value;
        $this->options['form_params']['Port'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['form_params']['VpcId'] = $value;

        return $this;
    }
}

/**
 * @method string getHost()
 * @method string getDbUserName()
 * @method string getDbDescription()
 * @method string getInstanceId()
 * @method string getDbName()
 * @method string getPort()
 * @method string getDbPassword()
 * @method string getDbType()
 */
class ModifyDatabase extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHost($value)
    {
        $this->data['Host'] = $value;
        $this->options['form_params']['Host'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbUserName($value)
    {
        $this->data['DbUserName'] = $value;
        $this->options['form_params']['DbUserName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbDescription($value)
    {
        $this->data['DbDescription'] = $value;
        $this->options['form_params']['DbDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPort($value)
    {
        $this->data['Port'] = $value;
        $this->options['form_params']['Port'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbPassword($value)
    {
        $this->data['DbPassword'] = $value;
        $this->options['form_params']['DbPassword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbType($value)
    {
        $this->data['DbType'] = $value;
        $this->options['form_params']['DbType'] = $value;

        return $this;
    }
}

/**
 * @method string getGatewayDesc()
 * @method string getGatewayName()
 * @method string getGatewayId()
 */
class ModifyGateway extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGatewayDesc($value)
    {
        $this->data['GatewayDesc'] = $value;
        $this->options['form_params']['GatewayDesc'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGatewayName($value)
    {
        $this->data['GatewayName'] = $value;
        $this->options['form_params']['GatewayName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGatewayId($value)
    {
        $this->data['GatewayId'] = $value;
        $this->options['form_params']['GatewayId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getHost()
 * @method string getDbUserName()
 * @method string getDbDescription()
 * @method string getGatewayId()
 * @method string getDbName()
 * @method string getPort()
 * @method string getDbPassword()
 * @method string getDbType()
 */
class RetryDatabase extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHost($value)
    {
        $this->data['Host'] = $value;
        $this->options['form_params']['Host'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbUserName($value)
    {
        $this->data['DbUserName'] = $value;
        $this->options['form_params']['DbUserName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbDescription($value)
    {
        $this->data['DbDescription'] = $value;
        $this->options['form_params']['DbDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGatewayId($value)
    {
        $this->data['GatewayId'] = $value;
        $this->options['form_params']['GatewayId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPort($value)
    {
        $this->data['Port'] = $value;
        $this->options['form_params']['Port'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbPassword($value)
    {
        $this->data['DbPassword'] = $value;
        $this->options['form_params']['DbPassword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbType($value)
    {
        $this->data['DbType'] = $value;
        $this->options['form_params']['DbType'] = $value;

        return $this;
    }
}

/**
 * @method string getGatewayInstanceId()
 * @method string getGatewayId()
 */
class StopGateway extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGatewayInstanceId($value)
    {
        $this->data['GatewayInstanceId'] = $value;
        $this->options['form_params']['GatewayInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGatewayId($value)
    {
        $this->data['GatewayId'] = $value;
        $this->options['form_params']['GatewayId'] = $value;

        return $this;
    }
}
