<?php
namespace FakerProvider;
 
class FakerGenerator
{
    protected static $formats = array(
           "{{firstName}} {{lastName}}",
    );
    protected static $firstName = array("John", "Jane");
    protected static $lastName = array("Doe");
 
    public function name() {
           $format = static::randomElement(static::$formats);
        return $this->generator->parse($format);
    }
 
    public static function firstName() {
        return static::randomElement(static::$firstName);
    }
}