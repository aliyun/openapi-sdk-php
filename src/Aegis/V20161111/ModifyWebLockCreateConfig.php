<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyWebLockCreateConfig
 *
 * @method string getLocalBackupDir()
 * @method string getSourceIp()
 * @method string getExclusiveFileType()
 * @method string getLang()
 * @method string getDir()
 * @method string getUuid()
 * @method string getExclusiveDir()
 */
class ModifyWebLockCreateConfig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'aegis';

    /**
     * @var string
     */
    public $version = '2016-11-11';

    /**
     * @var string
     */
    public $action = 'ModifyWebLockCreateConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @deprecated deprecated since version 2.0, Use withLocalBackupDir() instead.
     *
     * @param string $localBackupDir
     *
     * @return $this
     */
    public function setLocalBackupDir($localBackupDir)
    {
        return $this->withLocalBackupDir($localBackupDir);
    }

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
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
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
     * @deprecated deprecated since version 2.0, Use withExclusiveFileType() instead.
     *
     * @param string $exclusiveFileType
     *
     * @return $this
     */
    public function setExclusiveFileType($exclusiveFileType)
    {
        return $this->withExclusiveFileType($exclusiveFileType);
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
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
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
     * @deprecated deprecated since version 2.0, Use withDir() instead.
     *
     * @param string $dir
     *
     * @return $this
     */
    public function setDir($dir)
    {
        return $this->withDir($dir);
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
     * @deprecated deprecated since version 2.0, Use withUuid() instead.
     *
     * @param string $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        return $this->withUuid($uuid);
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
     * @deprecated deprecated since version 2.0, Use withExclusiveDir() instead.
     *
     * @param string $exclusiveDir
     *
     * @return $this
     */
    public function setExclusiveDir($exclusiveDir)
    {
        return $this->withExclusiveDir($exclusiveDir);
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
