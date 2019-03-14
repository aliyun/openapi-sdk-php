<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

/**
 * Api EditPhotoStore
 *
 * @method string getAutoCleanEnabled()
 * @method string getDefaultTrashQuota()
 * @method string getStoreName()
 * @method string getRemark()
 * @method string getDefaultQuota()
 * @method string getAutoCleanDays()
 */
class EditPhotoStore extends Rpc
{
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudphoto';

    /**
     * @param string $autoCleanEnabled
     *
     * @return $this
     */
    public function withAutoCleanEnabled($autoCleanEnabled)
    {
        $this->data['AutoCleanEnabled'] = $autoCleanEnabled;
        $this->options['query']['AutoCleanEnabled'] = $autoCleanEnabled;

        return $this;
    }

    /**
     * @param string $defaultTrashQuota
     *
     * @return $this
     */
    public function withDefaultTrashQuota($defaultTrashQuota)
    {
        $this->data['DefaultTrashQuota'] = $defaultTrashQuota;
        $this->options['query']['DefaultTrashQuota'] = $defaultTrashQuota;

        return $this;
    }

    /**
     * @param string $storeName
     *
     * @return $this
     */
    public function withStoreName($storeName)
    {
        $this->data['StoreName'] = $storeName;
        $this->options['query']['StoreName'] = $storeName;

        return $this;
    }

    /**
     * @param string $remark
     *
     * @return $this
     */
    public function withRemark($remark)
    {
        $this->data['Remark'] = $remark;
        $this->options['query']['Remark'] = $remark;

        return $this;
    }

    /**
     * @param string $defaultQuota
     *
     * @return $this
     */
    public function withDefaultQuota($defaultQuota)
    {
        $this->data['DefaultQuota'] = $defaultQuota;
        $this->options['query']['DefaultQuota'] = $defaultQuota;

        return $this;
    }

    /**
     * @param string $autoCleanDays
     *
     * @return $this
     */
    public function withAutoCleanDays($autoCleanDays)
    {
        $this->data['AutoCleanDays'] = $autoCleanDays;
        $this->options['query']['AutoCleanDays'] = $autoCleanDays;

        return $this;
    }
}
