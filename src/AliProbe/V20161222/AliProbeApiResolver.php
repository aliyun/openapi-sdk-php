<?php

namespace AlibabaCloud\AliProbe\V20161222;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
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

class V20161222Rpc extends Rpc
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
class UpdateTaskWithSecurityCheck extends V20161222Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryTasksRate extends V20161222Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryWeeklySla extends V20161222Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryTasks extends V20161222Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryTasksCurrentProbeStatus extends V20161222Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryMonthlySla extends V20161222Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryIspAvailRate extends V20161222Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryIspIndexData extends V20161222Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryIspAreaCity extends V20161222Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryErrorRate extends V20161222Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryDailySla extends V20161222Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class QueryIndexData extends V20161222Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class DeleteTask extends V20161222Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class GetTask extends V20161222Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class CreateTaskWithSecurityCheck extends V20161222Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class BatchDeleteTasks extends V20161222Rpc
{
}
