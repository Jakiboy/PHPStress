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
 * GetVariationsRequest Class Doc Comment
 *
 * @category Class
 * @package  Amazon\ProductAdvertisingAPI\v1
 * @author   Product Advertising API team
 */
class GetVariationsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetVariationsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aSIN' => 'string',
        'condition' => '\Jakiboy\paapi5\lib\Condition',
        'currencyOfPreference' => 'string',
        'languagesOfPreference' => 'string[]',
        'marketplace' => 'string',
        'merchant' => '\Jakiboy\paapi5\lib\Merchant',
        'offerCount' => '\Jakiboy\paapi5\lib\OfferCount',
        'partnerTag' => 'string',
        'partnerType' => '\Jakiboy\paapi5\lib\PartnerType',
        'properties' => '\Jakiboy\paapi5\lib\Properties',
        'resources' => '\Jakiboy\paapi5\lib\GetVariationsResource[]',
        'variationCount' => 'int',
        'variationPage' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aSIN' => null,
        'condition' => null,
        'currencyOfPreference' => null,
        'languagesOfPreference' => null,
        'marketplace' => null,
        'merchant' => null,
        'offerCount' => null,
        'partnerTag' => null,
        'partnerType' => null,
        'properties' => null,
        'resources' => null,
        'variationCount' => 'int32',
        'variationPage' => 'int32'
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
        'aSIN' => 'ASIN',
        'condition' => 'Condition',
        'currencyOfPreference' => 'CurrencyOfPreference',
        'languagesOfPreference' => 'LanguagesOfPreference',
        'marketplace' => 'Marketplace',
        'merchant' => 'Merchant',
        'offerCount' => 'OfferCount',
        'partnerTag' => 'PartnerTag',
        'partnerType' => 'PartnerType',
        'properties' => 'Properties',
        'resources' => 'Resources',
        'variationCount' => 'VariationCount',
        'variationPage' => 'VariationPage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aSIN' => 'setASIN',
        'condition' => 'setCondition',
        'currencyOfPreference' => 'setCurrencyOfPreference',
        'languagesOfPreference' => 'setLanguagesOfPreference',
        'marketplace' => 'setMarketplace',
        'merchant' => 'setMerchant',
        'offerCount' => 'setOfferCount',
        'partnerTag' => 'setPartnerTag',
        'partnerType' => 'setPartnerType',
        'properties' => 'setProperties',
        'resources' => 'setResources',
        'variationCount' => 'setVariationCount',
        'variationPage' => 'setVariationPage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aSIN' => 'getASIN',
        'condition' => 'getCondition',
        'currencyOfPreference' => 'getCurrencyOfPreference',
        'languagesOfPreference' => 'getLanguagesOfPreference',
        'marketplace' => 'getMarketplace',
        'merchant' => 'getMerchant',
        'offerCount' => 'getOfferCount',
        'partnerTag' => 'getPartnerTag',
        'partnerType' => 'getPartnerType',
        'properties' => 'getProperties',
        'resources' => 'getResources',
        'variationCount' => 'getVariationCount',
        'variationPage' => 'getVariationPage'
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
        $this->container['aSIN'] = isset($data['aSIN']) ? $data['aSIN'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['currencyOfPreference'] = isset($data['currencyOfPreference']) ? $data['currencyOfPreference'] : null;
        $this->container['languagesOfPreference'] = isset($data['languagesOfPreference']) ? $data['languagesOfPreference'] : null;
        $this->container['marketplace'] = isset($data['marketplace']) ? $data['marketplace'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['offerCount'] = isset($data['offerCount']) ? $data['offerCount'] : null;
        $this->container['partnerTag'] = isset($data['partnerTag']) ? $data['partnerTag'] : null;
        $this->container['partnerType'] = isset($data['partnerType']) ? $data['partnerType'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['variationCount'] = isset($data['variationCount']) ? $data['variationCount'] : null;
        $this->container['variationPage'] = isset($data['variationPage']) ? $data['variationPage'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['aSIN'] === null) {
            $invalidProperties[] = "'aSIN' can't be null";
        }
        if ($this->container['partnerTag'] === null) {
            $invalidProperties[] = "'partnerTag' can't be null";
        }
        if ($this->container['partnerType'] === null) {
            $invalidProperties[] = "'partnerType' can't be null";
        }
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

        if ($this->container['aSIN'] === null) {
            return false;
        }
        if ($this->container['partnerTag'] === null) {
            return false;
        }
        if ($this->container['partnerType'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets aSIN
     *
     * @return string
     */
    public function getASIN()
    {
        return $this->container['aSIN'];
    }

    /**
     * Sets aSIN
     *
     * @param string $aSIN aSIN
     *
     * @return $this
     */
    public function setASIN($aSIN)
    {
        $this->container['aSIN'] = $aSIN;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return \Jakiboy\paapi5\lib\Condition
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param \Jakiboy\paapi5\lib\Condition $condition condition
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets currencyOfPreference
     *
     * @return string
     */
    public function getCurrencyOfPreference()
    {
        return $this->container['currencyOfPreference'];
    }

    /**
     * Sets currencyOfPreference
     *
     * @param string $currencyOfPreference currencyOfPreference
     *
     * @return $this
     */
    public function setCurrencyOfPreference($currencyOfPreference)
    {
        $this->container['currencyOfPreference'] = $currencyOfPreference;

        return $this;
    }

    /**
     * Gets languagesOfPreference
     *
     * @return string[]
     */
    public function getLanguagesOfPreference()
    {
        return $this->container['languagesOfPreference'];
    }

    /**
     * Sets languagesOfPreference
     *
     * @param string[] $languagesOfPreference languagesOfPreference
     *
     * @return $this
     */
    public function setLanguagesOfPreference($languagesOfPreference)
    {
        $this->container['languagesOfPreference'] = $languagesOfPreference;

        return $this;
    }

    /**
     * Gets marketplace
     *
     * @return string
     */
    public function getMarketplace()
    {
        return $this->container['marketplace'];
    }

    /**
     * Sets marketplace
     *
     * @param string $marketplace marketplace
     *
     * @return $this
     */
    public function setMarketplace($marketplace)
    {
        $this->container['marketplace'] = $marketplace;

        return $this;
    }

    /**
     * Gets merchant
     *
     * @return \Jakiboy\paapi5\lib\Merchant
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     *
     * @param \Jakiboy\paapi5\lib\Merchant $merchant merchant
     *
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets offerCount
     *
     * @return \Jakiboy\paapi5\lib\OfferCount
     */
    public function getOfferCount()
    {
        return $this->container['offerCount'];
    }

    /**
     * Sets offerCount
     *
     * @param \Jakiboy\paapi5\lib\OfferCount $offerCount offerCount
     *
     * @return $this
     */
    public function setOfferCount($offerCount)
    {
        $this->container['offerCount'] = $offerCount;

        return $this;
    }

    /**
     * Gets partnerTag
     *
     * @return string
     */
    public function getPartnerTag()
    {
        return $this->container['partnerTag'];
    }

    /**
     * Sets partnerTag
     *
     * @param string $partnerTag partnerTag
     *
     * @return $this
     */
    public function setPartnerTag($partnerTag)
    {
        $this->container['partnerTag'] = $partnerTag;

        return $this;
    }

    /**
     * Gets partnerType
     *
     * @return \Jakiboy\paapi5\lib\PartnerType
     */
    public function getPartnerType()
    {
        return $this->container['partnerType'];
    }

    /**
     * Sets partnerType
     *
     * @param \Jakiboy\paapi5\lib\PartnerType $partnerType partnerType
     *
     * @return $this
     */
    public function setPartnerType($partnerType)
    {
        $this->container['partnerType'] = $partnerType;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return \Jakiboy\paapi5\lib\Properties
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \Jakiboy\paapi5\lib\Properties $properties properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets resources
     *
     * @return \Jakiboy\paapi5\lib\GetVariationsResource[]
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     *
     * @param \Jakiboy\paapi5\lib\GetVariationsResource[] $resources resources
     *
     * @return $this
     */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;

        return $this;
    }

    /**
     * Gets variationCount
     *
     * @return int
     */
    public function getVariationCount()
    {
        return $this->container['variationCount'];
    }

    /**
     * Sets variationCount
     *
     * @param int $variationCount variationCount
     *
     * @return $this
     */
    public function setVariationCount($variationCount)
    {
        $this->container['variationCount'] = $variationCount;

        return $this;
    }

    /**
     * Gets variationPage
     *
     * @return int
     */
    public function getVariationPage()
    {
        return $this->container['variationPage'];
    }

    /**
     * Sets variationPage
     *
     * @param int $variationPage variationPage
     *
     * @return $this
     */
    public function setVariationPage($variationPage)
    {
        $this->container['variationPage'] = $variationPage;

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


