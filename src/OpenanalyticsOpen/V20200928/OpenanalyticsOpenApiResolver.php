<?php

namespace AlibabaCloud\OpenanalyticsOpen\V20200928;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddPartitions addPartitions(array $options = [])
 * @method AlterDatabase alterDatabase(array $options = [])
 * @method AlterTable alterTable(array $options = [])
 * @method CreateDatabase createDatabase(array $options = [])
 * @method CreateTable createTable(array $options = [])
 * @method DropDatabase dropDatabase(array $options = [])
 * @method DropPartition dropPartition(array $options = [])
 * @method DropTable dropTable(array $options = [])
 * @method GetAllDatabases getAllDatabases(array $options = [])
 * @method GetAllTables getAllTables(array $options = [])
 * @method GetDatabase getDatabase(array $options = [])
 * @method GetPartition getPartition(array $options = [])
 * @method GetPartitions getPartitions(array $options = [])
 * @method GetTable getTable(array $options = [])
 * @method GrantPrivileges grantPrivileges(array $options = [])
 * @method RevokePrivileges revokePrivileges(array $options = [])
 */
class OpenanalyticsOpenApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'openanalytics-open';

    /** @var string */
    public $version = '2020-09-28';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'openanalytics';
}

/**
 * @method string getPartition()
 * @method $this withPartition($value)
 */
class AddPartitions extends Rpc
{
}

/**
 * @method string getOldDbName()
 * @method $this withOldDbName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getLocationUri()
 * @method $this withLocationUri($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class AlterDatabase extends Rpc
{
}

/**
 * @method string getNewTableName()
 * @method $this withNewTableName($value)
 * @method string getCol()
 * @method $this withCol($value)
 * @method string getOldTableName()
 * @method $this withOldTableName($value)
 * @method string getOldDbName()
 * @method $this withOldDbName($value)
 * @method string getNewDbName()
 * @method $this withNewDbName($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class AlterTable extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getLocationUri()
 * @method $this withLocationUri($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class CreateDatabase extends Rpc
{
}

/**
 * @method string getTableType()
 * @method $this withTableType($value)
 * @method string getViewOriginalText()
 * @method $this withViewOriginalText($value)
 * @method string getStorageDescriptor()
 * @method $this withStorageDescriptor($value)
 * @method string getPartitionKeys()
 * @method $this withPartitionKeys($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getViewExpandedText()
 * @method $this withViewExpandedText($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class CreateTable extends Rpc
{
}

/**
 * @method string getCascade()
 * @method $this withCascade($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DropDatabase extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getPartValues()
 * @method $this withPartValues($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class DropPartition extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class DropTable extends Rpc
{
}

class GetAllDatabases extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 */
class GetAllTables extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class GetDatabase extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getValues()
 * @method $this withValues($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class GetPartition extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getMaxParts()
 * @method $this withMaxParts($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class GetPartitions extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class GetTable extends Rpc
{
}

/**
 * @method string getPrivilegeBag()
 * @method $this withPrivilegeBag($value)
 */
class GrantPrivileges extends Rpc
{
}

/**
 * @method string getPrivilegeBag()
 * @method $this withPrivilegeBag($value)
 */
class RevokePrivileges extends Rpc
{
}
