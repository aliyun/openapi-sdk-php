<?php

namespace AlibabaCloud\Retailcloud\V20180313;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DeleteDatabase deleteDatabase(array $options = [])
 * @method DeleteRdsAccount deleteRdsAccount(array $options = [])
 * @method GetRdsBackUp getRdsBackUp(array $options = [])
 * @method DescribeDatabases describeDatabases(array $options = [])
 * @method CreateDb createDb(array $options = [])
 * @method GrantDbToAccount grantDbToAccount(array $options = [])
 * @method DescribeRdsAccounts describeRdsAccounts(array $options = [])
 * @method ResourceStatusNotify resourceStatusNotify(array $options = [])
 * @method GetInstTransInfo getInstTransInfo(array $options = [])
 */
class RetailcloudApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'retailcloud';

    /** @var string */
    public $version = '2018-03-13';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'retailcloud';
}

/**
 * @method string getDBName()
 * @method string getDBInstanceId()
 */
class DeleteDatabase extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBName($value)
    {
        $this->data['DBName'] = $value;
        $this->options['form_params']['DBName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBInstanceId($value)
    {
        $this->data['DBInstanceId'] = $value;
        $this->options['form_params']['DBInstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getAccountName()
 * @method string getDbInstanceId()
 */
class DeleteRdsAccount extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

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
 * @method string getBackupId()
 * @method string getPageSize()
 * @method string getDbInstanceId()
 * @method string getBackupType()
 * @method string getPageNumber()
 */
class GetRdsBackUp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBackupId($value)
    {
        $this->data['BackupId'] = $value;
        $this->options['form_params']['BackupId'] = $value;

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
    public function withBackupType($value)
    {
        $this->data['BackupType'] = $value;
        $this->options['form_params']['BackupType'] = $value;

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
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeDatabases extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDbName()
 * @method string getDbInstanceId()
 * @method string getDbDescription()
 * @method string getCharacterSetName()
 */
class CreateDb extends Rpc
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
    public function withCharacterSetName($value)
    {
        $this->data['CharacterSetName'] = $value;
        $this->options['form_params']['CharacterSetName'] = $value;

        return $this;
    }
}

/**
 * @method string getAccountName()
 * @method string getDbName()
 * @method string getDbInstanceId()
 * @method string getAccountPrivilege()
 */
class GrantDbToAccount extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

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
    public function withAccountPrivilege($value)
    {
        $this->data['AccountPrivilege'] = $value;
        $this->options['form_params']['AccountPrivilege'] = $value;

        return $this;
    }
}

/**
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDbInstanceId()
 * @method $this withDbInstanceId($value)
 */
class DescribeRdsAccounts extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getData()
 */
class ResourceStatusNotify extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['data'] = $value;

        return $this;
    }
}

/**
 * @method string getAliyunUid()
 * @method string getAliyunEquipId()
 * @method string getAliyunCommodityCode()
 */
class GetInstTransInfo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliyunUid($value)
    {
        $this->data['AliyunUid'] = $value;
        $this->options['form_params']['aliyunUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliyunEquipId($value)
    {
        $this->data['AliyunEquipId'] = $value;
        $this->options['form_params']['aliyunEquipId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliyunCommodityCode($value)
    {
        $this->data['AliyunCommodityCode'] = $value;
        $this->options['form_params']['aliyunCommodityCode'] = $value;

        return $this;
    }
}
