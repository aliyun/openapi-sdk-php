<?php

namespace AlibabaCloud\AliProbe\V20161222;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BatchDeleteTasks batchDeleteTasks(array $options = [])
 * @method CreateTaskWithSecurityCheck createTaskWithSecurityCheck(array $options = [])
 * @method GetTask getTask(array $options = [])
 * @method DeleteTask deleteTask(array $options = [])
 * @method QueryIndexData queryIndexData(array $options = [])
 * @method QueryDailySla queryDailySla(array $options = [])
 * @method QueryErrorRate queryErrorRate(array $options = [])
 * @method QueryIspAreaCity queryIspAreaCity(array $options = [])
 * @method QueryIspIndexData queryIspIndexData(array $options = [])
 * @method QueryIspAvailRate queryIspAvailRate(array $options = [])
 * @method QueryMonthlySla queryMonthlySla(array $options = [])
 * @method QueryTasksCurrentProbeStatus queryTasksCurrentProbeStatus(array $options = [])
 * @method QueryTasks queryTasks(array $options = [])
 * @method QueryWeeklySla queryWeeklySla(array $options = [])
 * @method QueryTasksRate queryTasksRate(array $options = [])
 * @method UpdateTaskWithSecurityCheck updateTaskWithSecurityCheck(array $options = [])
 */
class AliProbeApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
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
class BatchDeleteTasks extends Rpc
{
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
class GetTask extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
class QueryIndexData extends Rpc
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
class QueryErrorRate extends Rpc
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
class QueryIspIndexData extends Rpc
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
class QueryMonthlySla extends Rpc
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
class QueryTasks extends Rpc
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
class QueryTasksRate extends Rpc
{
}

/**
 * @method string getBody()
 * @method $this withBody($value)
 */
class UpdateTaskWithSecurityCheck extends Rpc
{
}
