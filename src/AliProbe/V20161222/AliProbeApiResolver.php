<?php

namespace AlibabaCloud\AliProbe\V20161222;

use AlibabaCloud\ApiResolverTrait;

/**
 * @method UpdateTaskWithSecurityCheck updateTaskWithSecurityCheck(array $options = [])
 * @method QueryTasksRate queryTasksRate(array $options = [])
 * @method QueryWeeklySla queryWeeklySla(array $options = [])
 * @method QueryTasks queryTasks(array $options = [])
 * @method QueryTasksCurrentProbeStatus queryTasksCurrentProbeStatus(array $options = [])
 * @method QueryMonthlySla queryMonthlySla(array $options = [])
 * @method QueryIspAvailRate queryIspAvailRate(array $options = [])
 * @method QueryIspIndexData queryIspIndexData(array $options = [])
 * @method QueryIspAreaCity queryIspAreaCity(array $options = [])
 * @method QueryErrorRate queryErrorRate(array $options = [])
 * @method QueryDailySla queryDailySla(array $options = [])
 * @method QueryIndexData queryIndexData(array $options = [])
 * @method DeleteTask deleteTask(array $options = [])
 * @method GetTask getTask(array $options = [])
 * @method CreateTaskWithSecurityCheck createTaskWithSecurityCheck(array $options = [])
 * @method BatchDeleteTasks batchDeleteTasks(array $options = [])
 */
class AliProbeApiResolver
{
    use ApiResolverTrait;
}

class Rpc extends \AlibabaCloud\Rpc
{
    /** @var string */
    public $product = 'AliProbe';

    /** @var string */
    public $version = '2016-12-22';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class UpdateTaskWithSecurityCheck extends Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryTasksRate extends Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryWeeklySla extends Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryTasks extends Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryTasksCurrentProbeStatus extends Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryMonthlySla extends Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryIspAvailRate extends Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryIspIndexData extends Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryIspAreaCity extends Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryErrorRate extends Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryDailySla extends Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryIndexData extends Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class DeleteTask extends Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class GetTask extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class CreateTaskWithSecurityCheck extends Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class BatchDeleteTasks extends Rpc
{
}
