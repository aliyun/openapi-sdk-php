<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getReportType()
 * @method $this withReportType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getReportEndDate()
 * @method $this withReportEndDate($value)
 * @method string getReportStartDate()
 * @method $this withReportStartDate($value)
 * @method string getRecipients()
 * @method $this withRecipients($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getSendTime()
 * @method $this withSendTime($value)
 * @method string getReportStatus()
 * @method $this withReportStatus($value)
 */
class SaveCustomizeReportConfig extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
