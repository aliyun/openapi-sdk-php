<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api ModifyWebLockCreateConfig
 *
 * @method string getLocalBackupDir()
 * @method string getSourceIp()
 * @method string getExclusiveFileType()
 * @method string getLang()
 * @method string getDir()
 * @method string getUuid()
 * @method string getExclusiveDir()
 */
class ModifyWebLockCreateConfig extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

    /**
     * @param string $localBackupDir
     *
     * @return $this
     */
    public function withLocalBackupDir($localBackupDir)
    {
        $this->data['LocalBackupDir'] = $localBackupDir;
        $this->options['query']['LocalBackupDir'] = $localBackupDir;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $exclusiveFileType
     *
     * @return $this
     */
    public function withExclusiveFileType($exclusiveFileType)
    {
        $this->data['ExclusiveFileType'] = $exclusiveFileType;
        $this->options['query']['ExclusiveFileType'] = $exclusiveFileType;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $dir
     *
     * @return $this
     */
    public function withDir($dir)
    {
        $this->data['Dir'] = $dir;
        $this->options['query']['Dir'] = $dir;

        return $this;
    }

    /**
     * @param string $uuid
     *
     * @return $this
     */
    public function withUuid($uuid)
    {
        $this->data['Uuid'] = $uuid;
        $this->options['query']['Uuid'] = $uuid;

        return $this;
    }

    /**
     * @param string $exclusiveDir
     *
     * @return $this
     */
    public function withExclusiveDir($exclusiveDir)
    {
        $this->data['ExclusiveDir'] = $exclusiveDir;
        $this->options['query']['ExclusiveDir'] = $exclusiveDir;

        return $this;
    }
}
