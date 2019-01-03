<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteEventTargets
 *
 * @method array getIds()
 * @method string getRuleName()
 */
class DeleteEventTargets extends RpcRequest
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
    public $action = 'DeleteEventTargets';

    /**
     * @var string
     */
    public $method = 'PUT';

    /**
     * @deprecated deprecated since version 2.0, Use getIds() instead.
     *
     * @return array
     */
    public function getIdss()
    {
        return $this->getIds();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIds() instead.
     *
     * @param array $idss
     *
     * @return $this
     */
    public function setIdss(array $idss)
    {
        return $this->withIds($idss);
    }

    /**
     * @param array $ids
     *
     * @return $this
     */
    public function withIds(array $ids)
    {
        $this->data['Ids'] = $ids;
        foreach ($ids as $i => $iValue) {
            $this->options['query']['Ids.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRuleName() instead.
     *
     * @param string $ruleName
     *
     * @return $this
     */
    public function setRuleName($ruleName)
    {
        return $this->withRuleName($ruleName);
    }

    /**
     * @param string $ruleName
     *
     * @return $this
     */
    public function withRuleName($ruleName)
    {
        $this->data['RuleName'] = $ruleName;
        $this->options['query']['RuleName'] = $ruleName;

        return $this;
    }
}
