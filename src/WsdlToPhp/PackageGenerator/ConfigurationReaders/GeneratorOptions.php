<?php

namespace WsdlToPhp\PackageGenerator\ConfigurationReaders;

class GeneratorOptions extends AbstractYamlReader
{
    /**
     * Common values used as option's value
     */
    const
        VALUE_START = 'start',
        VALUE_END   = 'end',
        VALUE_NONE  = 'none',
        VALUE_CAT   = 'cat',
        VALUE_TRUE  = true,
        VALUE_FALSE = false;
    /**
     * Possible option keys
     * @var string
     */
    const
        CATEGORY                    = 'category',
        SUB_CATEGORY                = 'sub_category',
        ADD_COMMENTS                = 'add_comments',
        GATHER_METHODS              = 'gather_methods',
        GENERATE_WSDL_CLASS         = 'generate_wsdl_class',
        GENERATE_TUTORIAL_FILE      = 'generate_tutorial_file',
        GENERATE_AUTOLOAD_FILE      = 'generate_autoload_file',
        SEND_ARRAY_AS_PARAMETER     = 'send_array_as_parameter',
        GENERIC_CONSTANTS_NAME      = 'generic_constants_names',
        GET_RESPONSE_AS_WSDL_OBJECT = 'response_as_wsdl_object',
        INHERITS_FROM_IDENTIFIER    = 'inherits_from_identifier',
        SEND_PARAMETERS_AS_ARRAY    = 'send_parameters_as_array';
    /**
     * @param string options's file to parse
     * @return GeneratorOptions
     */
    public static function instance($filename = null)
    {
        return parent::instance(empty($filename) ? dirname(__FILE__) . '/../Resources/config/generator_options.yml' : $filename);
    }
    /**
     * Get category option value
     * @return string
     */
    public function getCategory()
    {
        return $this->getOptionValue(self::CATEGORY);
    }
    /**
     * Set current category option value
     * @throws \InvalidArgumentException
     * @param string $category
     * @return GeneratorOptions
     */
    public function setCategory($category)
    {
        return $this->setOptionValue(self::CATEGORY, $category);
    }
    /**
     * Get subcategory option value
     * @return string
     */
    public function getSubCategory()
    {
        return $this->getOptionValue(self::SUB_CATEGORY);
    }
    /**
     * Set current subcategory option value
     * @throws \InvalidArgumentException
     * @param string $subCategory
     * @return GeneratorOptions
     */
    public function setSubCategory($subCategory)
    {
        return $this->setOptionValue(self::SUB_CATEGORY, $subCategory);
    }
    /**
     * Get add comments option value
     * @return string
     */
    public function getAddComments()
    {
        return $this->getOptionValue(self::ADD_COMMENTS);
    }
    /**
     * Set current add comments option value
     * @throws \InvalidArgumentException
     * @param array $addComments
     * @return GeneratorOptions
     */
    public function setAddComments(array $addComments = array())
    {
        return $this->setOptionValue(self::ADD_COMMENTS, $addComments);
    }
    /**
     * Get gather methods option value
     * @return string
     */
    public function getGatherMethods()
    {
        return $this->getOptionValue(self::GATHER_METHODS);
    }
    /**
     * Set current gather methods option value
     * @throws \InvalidArgumentException
     * @param string $gatherMethods
     * @return GeneratorOptions
     */
    public function setGatherMethods($gatherMethods)
    {
        return $this->setOptionValue(self::GATHER_METHODS, $gatherMethods);
    }
    /**
     * Get generate wsdl class option value
     * @return bool
     */
    public function getGenerateWsdlClass()
    {
        return $this->getOptionValue(self::GENERATE_WSDL_CLASS);
    }
    /**
     * Set current generate wsdl class option value
     * @throws \InvalidArgumentException
     * @param bool $generateWsdlClass
     * @return GeneratorOptions
     */
    public function setGenerateWsdlClass($generateWsdlClass)
    {
        return $this->setOptionValue(self::GENERATE_WSDL_CLASS, $generateWsdlClass);
    }
    /**
     * Get generate autoload file option value
     * @return bool
     */
    public function getGenerateAutoloadFile()
    {
        return $this->getOptionValue(self::GENERATE_AUTOLOAD_FILE);
    }
    /**
     * Set current generate autoload file option value
     * @throws \InvalidArgumentException
     * @param bool $generateAutoloadFile
     * @return GeneratorOptions
     */
    public function setGenerateAutoloadFile($generateAutoloadFile)
    {
        return $this->setOptionValue(self::GENERATE_AUTOLOAD_FILE, $generateAutoloadFile);
    }
    /**
     * Get generate tutorial file option value
     * @return bool
     */
    public function getGenerateTutorialFile()
    {
        return $this->getOptionValue(self::GENERATE_TUTORIAL_FILE);
    }
    /**
     * Set current generate tutorial file option value
     * @throws \InvalidArgumentException
     * @param bool $generateTutorialFile
     * @return GeneratorOptions
     */
    public function setGenerateTutorialFile($generateTutorialFile)
    {
        return $this->setOptionValue(self::GENERATE_TUTORIAL_FILE, $generateTutorialFile);
    }
    /**
     * Get send array as parameter option value
     * @return bool
     */
    public function getSendArrayAsParameter()
    {
        return $this->getOptionValue(self::SEND_ARRAY_AS_PARAMETER);
    }
    /**
     * Set current send array as parameter option value
     * @throws \InvalidArgumentException
     * @param bool $sendParameterAsArray
     * @return GeneratorOptions
     */
    public function setSendArrayAsParameter($sendParameterAsArray)
    {
        return $this->setOptionValue(self::SEND_ARRAY_AS_PARAMETER, $sendParameterAsArray);
    }
    /**
     * Get generic constants name option value
     * @return bool
     */
    public function getGenericConstantsName()
    {
        return $this->getOptionValue(self::GENERIC_CONSTANTS_NAME);
    }
    /**
     * Set current generic constants name option value
     * @throws \InvalidArgumentException
     * @param bool $genericConstantsName
     * @return GeneratorOptions
     */
    public function setGenericConstantsName($genericConstantsName)
    {
        return $this->setOptionValue(self::GENERIC_CONSTANTS_NAME, $genericConstantsName);
    }
    /**
     * Get get response as wsdl object option value
     * @return bool
     */
    public function getGetResponseAsWsdlObject()
    {
        return $this->getOptionValue(self::GET_RESPONSE_AS_WSDL_OBJECT);
    }
    /**
     * Set current get response as wsdl object option value
     * @throws \InvalidArgumentException
     * @param bool $getResponseAsWsdlObject
     * @return GeneratorOptions
     */
    public function setGetResponseAsWsdlObject($getResponseAsWsdlObject)
    {
        return $this->setOptionValue(self::GET_RESPONSE_AS_WSDL_OBJECT, $getResponseAsWsdlObject);
    }
    /**
     * Get inherits from identifier option value
     * @return string
     */
    public function getInheritsFromIdentifier()
    {
        return $this->getOptionValue(self::INHERITS_FROM_IDENTIFIER);
    }
    /**
     * Set current inherits from identifier option value
     * @throws \InvalidArgumentException
     * @param string $inheritsFromIdentifier
     * @return GeneratorOptions
     */
    public function setInheritsFromIdentifier($inheritsFromIdentifier)
    {
        return $this->setOptionValue(self::INHERITS_FROM_IDENTIFIER, $inheritsFromIdentifier);
    }
    /**
     * Get send parameters as array option value
     * @return bool
     */
    public function getSendParametersAsArray()
    {
        return $this->getOptionValue(self::SEND_PARAMETERS_AS_ARRAY);
    }
    /**
     * Set current send parameters as array option value
     * @throws \InvalidArgumentException
     * @param bool $category
     * @return GeneratorOptions
     */
    public function setSendParametersAsArray($sendParametersAsArray)
    {
        return $this->setOptionValue(self::SEND_PARAMETERS_AS_ARRAY, $sendParametersAsArray);
    }
}
