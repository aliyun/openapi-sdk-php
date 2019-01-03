<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of TaskConfigEnable
 *
 * @method array getIdList()
 * @method string getEnabled()
 */
class TaskConfigEnable extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'TaskConfigEnable';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use getIdList() instead.
     *
     * @return array
     */
    public function getIdLists()
    {
        return $this->getIdList();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIdList() instead.
     *
     * @param array $idLists
     *
     * @return $this
     */
    public function setIdLists(array $idLists)
    {
        return $this->withIdList($idLists);
    }

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
     * @deprecated deprecated since version 2.0, Use withEnabled() instead.
     *
     * @param string $enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        return $this->withEnabled($enabled);
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
