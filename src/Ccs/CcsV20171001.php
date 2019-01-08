<?php

namespace AlibabaCloud\Ccs;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Ccs based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Ccs
 *
 * @method static V20171001\AssumeOss assumeOss(array $options = [])
 * @method static V20171001\ChatRobotSession chatRobotSession(array $options = [])
 * @method static V20171001\CheckInspectAudio checkInspectAudio(array $options = [])
 * @method static V20171001\CheckInspectText checkInspectText(array $options = [])
 * @method static V20171001\CloseRobotSession closeRobotSession(array $options = [])
 * @method static V20171001\CreateRobotSession createRobotSession(array $options = [])
 * @method static V20171001\CreateTicket createTicket(array $options = [])
 * @method static V20171001\EvaluateRobotSession evaluateRobotSession(array $options = [])
 * @method static V20171001\GetHotlineRecord getHotlineRecord(array $options = [])
 * @method static V20171001\GetInspectResult getInspectResult(array $options = [])
 * @method static V20171001\GetServiceRecord getServiceRecord(array $options = [])
 * @method static V20171001\LastRobotSession lastRobotSession(array $options = [])
 * @method static V20171001\ProceedTicket proceedTicket(array $options = [])
 * @method static V20171001\QueryHotlineRecord queryHotlineRecord(array $options = [])
 * @method static V20171001\QueryRobotSession queryRobotSession(array $options = [])
 * @method static V20171001\QueryServiceRecord queryServiceRecord(array $options = [])
 * @method static V20171001\QueryTicket queryTicket(array $options = [])
 */
class CcsV20171001
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Ccs\\V20171001';
}
