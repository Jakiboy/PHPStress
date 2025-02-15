<?php
/**
 * Copyright 2019 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */
namespace Jakiboy\paapi5\lib;

use \ArrayAccess;
use \Jakiboy\paapi5\inc\ObjectSerializer;

/**
 * RentalOfferListing Class Doc Comment
 *
 * @category Class
 * @package  Amazon\ProductAdvertisingAPI\v1
 * @author   Product Advertising API team
 */
class RentalOfferListing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RentalOfferListing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'availability' => '\Jakiboy\paapi5\lib\OfferAvailability',
        'basePrice' => '\Jakiboy\paapi5\lib\DurationPrice',
        'condition' => '\Jakiboy\paapi5\lib\OfferCondition',
        'deliveryInfo' => '\Jakiboy\paapi5\lib\OfferDeliveryInfo',
        'id' => 'string',
        'merchantInfo' => '\Jakiboy\paapi5\lib\OfferMerchantInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'availability' => null,
        'basePrice' => null,
        'condition' => null,
        'deliveryInfo' => null,
        'id' => null,
        'merchantInfo' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'availability' => 'Availability',
        'basePrice' => 'BasePrice',
        'condition' => 'Condition',
        'deliveryInfo' => 'DeliveryInfo',
        'id' => 'Id',
        'merchantInfo' => 'MerchantInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'availability' => 'setAvailability',
        'basePrice' => 'setBasePrice',
        'condition' => 'setCondition',
        'deliveryInfo' => 'setDeliveryInfo',
        'id' => 'setId',
        'merchantInfo' => 'setMerchantInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'availability' => 'getAvailability',
        'basePrice' => 'getBasePrice',
        'condition' => 'getCondition',
        'deliveryInfo' => 'getDeliveryInfo',
        'id' => 'getId',
        'merchantInfo' => 'getMerchantInfo'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null;
        $this->container['basePrice'] = isset($data['basePrice']) ? $data['basePrice'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['deliveryInfo'] = isset($data['deliveryInfo']) ? $data['deliveryInfo'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['merchantInfo'] = isset($data['merchantInfo']) ? $data['merchantInfo'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets availability
     *
     * @return \Jakiboy\paapi5\lib\OfferAvailability
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param \Jakiboy\paapi5\lib\OfferAvailability $availability availability
     *
     * @return $this
     */
    public function setAvailability($availability)
    {
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets basePrice
     *
     * @return \Jakiboy\paapi5\lib\DurationPrice
     */
    public function getBasePrice()
    {
        return $this->container['basePrice'];
    }

    /**
     * Sets basePrice
     *
     * @param \Jakiboy\paapi5\lib\DurationPrice $basePrice basePrice
     *
     * @return $this
     */
    public function setBasePrice($basePrice)
    {
        $this->container['basePrice'] = $basePrice;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return \Jakiboy\paapi5\lib\OfferCondition
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param \Jakiboy\paapi5\lib\OfferCondition $condition condition
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets deliveryInfo
     *
     * @return \Jakiboy\paapi5\lib\OfferDeliveryInfo
     */
    public function getDeliveryInfo()
    {
        return $this->container['deliveryInfo'];
    }

    /**
     * Sets deliveryInfo
     *
     * @param \Jakiboy\paapi5\lib\OfferDeliveryInfo $deliveryInfo deliveryInfo
     *
     * @return $this
     */
    public function setDeliveryInfo($deliveryInfo)
    {
        $this->container['deliveryInfo'] = $deliveryInfo;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets merchantInfo
     *
     * @return \Jakiboy\paapi5\lib\OfferMerchantInfo
     */
    public function getMerchantInfo()
    {
        return $this->container['merchantInfo'];
    }

    /**
     * Sets merchantInfo
     *
     * @param \Jakiboy\paapi5\lib\OfferMerchantInfo $merchantInfo merchantInfo
     *
     * @return $this
     */
    public function setMerchantInfo($merchantInfo)
    {
        $this->container['merchantInfo'] = $merchantInfo;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


