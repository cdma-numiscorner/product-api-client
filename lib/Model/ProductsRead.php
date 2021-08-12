<?php
/**
 * ProductsRead
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  ProductApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * # Authentication  <!-- ReDoc-Inject: <security-definitions> -->
 *
 * The version of the OpenAPI document: 0.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ProductApi\Model;

use \ArrayAccess;
use \ProductApi\ObjectSerializer;

/**
 * ProductsRead Class Doc Comment
 *
 * @category Class
 * @package  ProductApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ProductsRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'products-Read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'sku' => 'string',
        'title' => 'string',
        'product_type' => '\ProductApi\Model\ProductTypeRead',
        'price' => 'string',
        'quantity' => 'int',
        'image_recto' => 'string',
        'image_verso' => 'string',
        'category' => '\ProductApi\Model\CategoriesRead',
        'is_available' => 'bool',
        'description' => 'string',
        'characteristics' => '\ProductApi\Model\CharacteristicRead[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'sku' => null,
        'title' => null,
        'product_type' => null,
        'price' => null,
        'quantity' => null,
        'image_recto' => null,
        'image_verso' => null,
        'category' => null,
        'is_available' => null,
        'description' => null,
        'characteristics' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'sku' => 'sku',
        'title' => 'title',
        'product_type' => 'productType',
        'price' => 'price',
        'quantity' => 'quantity',
        'image_recto' => 'imageRecto',
        'image_verso' => 'imageVerso',
        'category' => 'category',
        'is_available' => 'isAvailable',
        'description' => 'description',
        'characteristics' => 'characteristics'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sku' => 'setSku',
        'title' => 'setTitle',
        'product_type' => 'setProductType',
        'price' => 'setPrice',
        'quantity' => 'setQuantity',
        'image_recto' => 'setImageRecto',
        'image_verso' => 'setImageVerso',
        'category' => 'setCategory',
        'is_available' => 'setIsAvailable',
        'description' => 'setDescription',
        'characteristics' => 'setCharacteristics'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sku' => 'getSku',
        'title' => 'getTitle',
        'product_type' => 'getProductType',
        'price' => 'getPrice',
        'quantity' => 'getQuantity',
        'image_recto' => 'getImageRecto',
        'image_verso' => 'getImageVerso',
        'category' => 'getCategory',
        'is_available' => 'getIsAvailable',
        'description' => 'getDescription',
        'characteristics' => 'getCharacteristics'
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
        return self::$openAPIModelName;
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['product_type'] = $data['product_type'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['image_recto'] = $data['image_recto'] ?? null;
        $this->container['image_verso'] = $data['image_verso'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['is_available'] = $data['is_available'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['characteristics'] = $data['characteristics'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['image_recto'] === null) {
            $invalidProperties[] = "'image_recto' can't be null";
        }
        if ($this->container['image_verso'] === null) {
            $invalidProperties[] = "'image_verso' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku sku
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets product_type
     *
     * @return \ProductApi\Model\ProductTypeRead|null
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     *
     * @param \ProductApi\Model\ProductTypeRead|null $product_type product_type
     *
     * @return self
     */
    public function setProductType($product_type)
    {
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets image_recto
     *
     * @return string
     */
    public function getImageRecto()
    {
        return $this->container['image_recto'];
    }

    /**
     * Sets image_recto
     *
     * @param string $image_recto image_recto
     *
     * @return self
     */
    public function setImageRecto($image_recto)
    {
        $this->container['image_recto'] = $image_recto;

        return $this;
    }

    /**
     * Gets image_verso
     *
     * @return string
     */
    public function getImageVerso()
    {
        return $this->container['image_verso'];
    }

    /**
     * Sets image_verso
     *
     * @param string $image_verso image_verso
     *
     * @return self
     */
    public function setImageVerso($image_verso)
    {
        $this->container['image_verso'] = $image_verso;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \ProductApi\Model\CategoriesRead|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \ProductApi\Model\CategoriesRead|null $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets is_available
     *
     * @return bool|null
     */
    public function getIsAvailable()
    {
        return $this->container['is_available'];
    }

    /**
     * Sets is_available
     *
     * @param bool|null $is_available is_available
     *
     * @return self
     */
    public function setIsAvailable($is_available)
    {
        $this->container['is_available'] = $is_available;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets characteristics
     *
     * @return \ProductApi\Model\CharacteristicRead[]|null
     */
    public function getCharacteristics()
    {
        return $this->container['characteristics'];
    }

    /**
     * Sets characteristics
     *
     * @param \ProductApi\Model\CharacteristicRead[]|null $characteristics characteristics
     *
     * @return self
     */
    public function setCharacteristics($characteristics)
    {
        $this->container['characteristics'] = $characteristics;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


