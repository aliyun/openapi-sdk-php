<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * Api DescribeAvailableRecoveryTime
 *
 * @method string getBackupId()
 */
class DescribeAvailableRecoveryTime extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

    public $serviceCode = 'rds';

    /**
     * @param string $backupId
     *
     * @return $this
     */
    public function withBackupId($backupId)
    {
        $this->data['BackupId'] = $backupId;
        $this->options['query']['BackupId'] = $backupId;

        return $this;
    }
}
