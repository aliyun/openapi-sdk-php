<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * Api CreateRule
 *
 * @method string getSelect()
 * @method string getRuleDesc()
 * @method string getDataType()
 * @method string getIotInstanceId()
 * @method string getName()
 * @method string getWhere()
 * @method string getProductKey()
 * @method string getTopicType()
 * @method string getShortTopic()
 */
class CreateRule extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';

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
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function withIotInstanceId($iotInstanceId)
    {
        $this->data['IotInstanceId'] = $iotInstanceId;
        $this->options['query']['IotInstanceId'] = $iotInstanceId;

        return $this;
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
