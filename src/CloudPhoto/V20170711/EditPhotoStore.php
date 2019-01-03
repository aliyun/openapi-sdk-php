<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of EditPhotoStore
 *
 * @method string getAutoCleanEnabled()
 * @method string getDefaultTrashQuota()
 * @method string getStoreName()
 * @method string getRemark()
 * @method string getDefaultQuota()
 * @method string getAutoCleanDays()
 */
class EditPhotoStore extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CloudPhoto';

    /**
     * @var string
     */
    public $version = '2017-07-11';

    /**
     * @var string
     */
    public $action = 'EditPhotoStore';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'cloudphoto';

    /**
     * @deprecated deprecated since version 2.0, Use withAutoCleanEnabled() instead.
     *
     * @param string $autoCleanEnabled
     *
     * @return $this
     */
    public function setAutoCleanEnabled($autoCleanEnabled)
    {
        return $this->withAutoCleanEnabled($autoCleanEnabled);
    }

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
     * @deprecated deprecated since version 2.0, Use withDefaultTrashQuota() instead.
     *
     * @param string $defaultTrashQuota
     *
     * @return $this
     */
    public function setDefaultTrashQuota($defaultTrashQuota)
    {
        return $this->withDefaultTrashQuota($defaultTrashQuota);
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
     * @deprecated deprecated since version 2.0, Use withStoreName() instead.
     *
     * @param string $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        return $this->withStoreName($storeName);
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
     * @deprecated deprecated since version 2.0, Use withRemark() instead.
     *
     * @param string $remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        return $this->withRemark($remark);
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
     * @deprecated deprecated since version 2.0, Use withDefaultQuota() instead.
     *
     * @param string $defaultQuota
     *
     * @return $this
     */
    public function setDefaultQuota($defaultQuota)
    {
        return $this->withDefaultQuota($defaultQuota);
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
     * @deprecated deprecated since version 2.0, Use withAutoCleanDays() instead.
     *
     * @param string $autoCleanDays
     *
     * @return $this
     */
    public function setAutoCleanDays($autoCleanDays)
    {
        return $this->withAutoCleanDays($autoCleanDays);
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
