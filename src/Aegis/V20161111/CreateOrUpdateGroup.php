<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api CreateOrUpdateGroup
 *
 * @method string getRuleIds()
 * @method string getSourceIp()
 * @method string getMachineGroupIds()
 * @method string getDescription()
 * @method string getId()
 * @method string getLang()
 * @method string getGroupName()
 */
class CreateOrUpdateGroup extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

    /**
     * @param string $ruleIds
     *
     * @return $this
     */
    public function withRuleIds($ruleIds)
    {
        $this->data['RuleIds'] = $ruleIds;
        $this->options['query']['RuleIds'] = $ruleIds;

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
     * @param string $machineGroupIds
     *
     * @return $this
     */
    public function withMachineGroupIds($machineGroupIds)
    {
        $this->data['MachineGroupIds'] = $machineGroupIds;
        $this->options['query']['MachineGroupIds'] = $machineGroupIds;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function withId($id)
    {
        $this->data['Id'] = $id;
        $this->options['query']['Id'] = $id;

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
     * @param string $groupName
     *
     * @return $this
     */
    public function withGroupName($groupName)
    {
        $this->data['GroupName'] = $groupName;
        $this->options['query']['GroupName'] = $groupName;

        return $this;
    }
}
