<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api TaskConfigEnable
 *
 * @method array getIdList()
 * @method string getEnabled()
 */
class TaskConfigEnable extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

    /**
     * @param array $idList
     *
     * @return $this
     */
    public function withIdList(array $idList)
    {
        $this->data['IdList'] = $idList;
        foreach ($idList as $i => $iValue) {
            $this->options['query']['IdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $enabled
     *
     * @return $this
     */
    public function withEnabled($enabled)
    {
        $this->data['Enabled'] = $enabled;
        $this->options['query']['Enabled'] = $enabled;

        return $this;
    }
}
