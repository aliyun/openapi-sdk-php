<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api UpdateMyGroupMembers
 *
 * @method string getReaders()
 * @method string getGroupId()
 * @method string getMasters()
 */
class UpdateMyGroupMembers extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

    /**
     * @param string $readers
     *
     * @return $this
     */
    public function withReaders($readers)
    {
        $this->data['Readers'] = $readers;
        $this->options['query']['Readers'] = $readers;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $masters
     *
     * @return $this
     */
    public function withMasters($masters)
    {
        $this->data['Masters'] = $masters;
        $this->options['query']['Masters'] = $masters;

        return $this;
    }
}
