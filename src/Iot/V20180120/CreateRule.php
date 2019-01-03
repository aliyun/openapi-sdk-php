<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateRule
 *
 * @method string getSelect()
 * @method string getRuleDesc()
 * @method string getDataType()
 * @method string getName()
 * @method string getWhere()
 * @method string getProductKey()
 * @method string getTopicType()
 * @method string getShortTopic()
 */
class CreateRule extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'CreateRule';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withSelect() instead.
     *
     * @param string $select
     *
     * @return $this
     */
    public function setSelect($select)
    {
        return $this->withSelect($select);
    }

    /**
     * @param string $select
     *
     * @return $this
     */
    public function withSelect($select)
    {
        $this->data['Select'] = $select;
        $this->options['query']['Select'] = $select;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRuleDesc() instead.
     *
     * @param string $ruleDesc
     *
     * @return $this
     */
    public function setRuleDesc($ruleDesc)
    {
        return $this->withRuleDesc($ruleDesc);
    }

    /**
     * @param string $ruleDesc
     *
     * @return $this
     */
    public function withRuleDesc($ruleDesc)
    {
        $this->data['RuleDesc'] = $ruleDesc;
        $this->options['query']['RuleDesc'] = $ruleDesc;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDataType() instead.
     *
     * @param string $dataType
     *
     * @return $this
     */
    public function setDataType($dataType)
    {
        return $this->withDataType($dataType);
    }

    /**
     * @param string $dataType
     *
     * @return $this
     */
    public function withDataType($dataType)
    {
        $this->data['DataType'] = $dataType;
        $this->options['query']['DataType'] = $dataType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withWhere() instead.
     *
     * @param string $where
     *
     * @return $this
     */
    public function setWhere($where)
    {
        return $this->withWhere($where);
    }

    /**
     * @param string $where
     *
     * @return $this
     */
    public function withWhere($where)
    {
        $this->data['Where'] = $where;
        $this->options['query']['Where'] = $where;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProductKey() instead.
     *
     * @param string $productKey
     *
     * @return $this
     */
    public function setProductKey($productKey)
    {
        return $this->withProductKey($productKey);
    }

    /**
     * @param string $productKey
     *
     * @return $this
     */
    public function withProductKey($productKey)
    {
        $this->data['ProductKey'] = $productKey;
        $this->options['query']['ProductKey'] = $productKey;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTopicType() instead.
     *
     * @param string $topicType
     *
     * @return $this
     */
    public function setTopicType($topicType)
    {
        return $this->withTopicType($topicType);
    }

    /**
     * @param string $topicType
     *
     * @return $this
     */
    public function withTopicType($topicType)
    {
        $this->data['TopicType'] = $topicType;
        $this->options['query']['TopicType'] = $topicType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withShortTopic() instead.
     *
     * @param string $shortTopic
     *
     * @return $this
     */
    public function setShortTopic($shortTopic)
    {
        return $this->withShortTopic($shortTopic);
    }

    /**
     * @param string $shortTopic
     *
     * @return $this
     */
    public function withShortTopic($shortTopic)
    {
        $this->data['ShortTopic'] = $shortTopic;
        $this->options['query']['ShortTopic'] = $shortTopic;

        return $this;
    }
}
