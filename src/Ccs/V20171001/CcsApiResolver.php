<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method GetHotlineRecord getHotlineRecord(array $options = [])
 * @method QueryHotlineRecord queryHotlineRecord(array $options = [])
 * @method QueryServiceRecord queryServiceRecord(array $options = [])
 * @method GetServiceRecord getServiceRecord(array $options = [])
 * @method ProceedTicket proceedTicket(array $options = [])
 * @method QueryRobotSession queryRobotSession(array $options = [])
 * @method LastRobotSession lastRobotSession(array $options = [])
 * @method EvaluateRobotSession evaluateRobotSession(array $options = [])
 * @method CreateRobotSession createRobotSession(array $options = [])
 * @method CloseRobotSession closeRobotSession(array $options = [])
 * @method ChatRobotSession chatRobotSession(array $options = [])
 * @method AssumeOss assumeOss(array $options = [])
 * @method CheckInspectAudio checkInspectAudio(array $options = [])
 * @method CheckInspectText checkInspectText(array $options = [])
 * @method GetInspectResult getInspectResult(array $options = [])
 * @method CreateTicket createTicket(array $options = [])
 * @method QueryTicket queryTicket(array $options = [])
 */
class CcsApiResolver
{
    use ApiResolverTrait;
}
