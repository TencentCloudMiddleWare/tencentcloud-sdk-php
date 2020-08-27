<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTelCdr请求参数结构体
 *
 * @method integer getInstanceId() 获取实例 ID
 * @method void setInstanceId(integer $InstanceId) 设置实例 ID
 * @method integer getStartTimeStamp() 获取起始时间戳，Unix 时间戳
 * @method void setStartTimeStamp(integer $StartTimeStamp) 设置起始时间戳，Unix 时间戳
 * @method integer getEndTimeStamp() 获取结束时间戳，Unix 时间戳
 * @method void setEndTimeStamp(integer $EndTimeStamp) 设置结束时间戳，Unix 时间戳
 * @method integer getLimit() 获取返回记录条数
 * @method void setLimit(integer $Limit) 设置返回记录条数
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 */
class DescribeTelCdrRequest extends AbstractModel
{
    /**
     * @var integer 实例 ID
     */
    public $InstanceId;

    /**
     * @var integer 起始时间戳，Unix 时间戳
     */
    public $StartTimeStamp;

    /**
     * @var integer 结束时间戳，Unix 时间戳
     */
    public $EndTimeStamp;

    /**
     * @var integer 返回记录条数
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @param integer $InstanceId 实例 ID
     * @param integer $StartTimeStamp 起始时间戳，Unix 时间戳
     * @param integer $EndTimeStamp 结束时间戳，Unix 时间戳
     * @param integer $Limit 返回记录条数
     * @param integer $Offset 偏移量
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTimeStamp",$param) and $param["StartTimeStamp"] !== null) {
            $this->StartTimeStamp = $param["StartTimeStamp"];
        }

        if (array_key_exists("EndTimeStamp",$param) and $param["EndTimeStamp"] !== null) {
            $this->EndTimeStamp = $param["EndTimeStamp"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
