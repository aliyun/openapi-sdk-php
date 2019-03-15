<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getLocalBackupDir()
 * @method $this withLocalBackupDir($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getExclusiveFileType()
 * @method $this withExclusiveFileType($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDir()
 * @method $this withDir($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getExclusiveDir()
 * @method $this withExclusiveDir($value)
 */
class ModifyWebLockUpdateConfig extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
