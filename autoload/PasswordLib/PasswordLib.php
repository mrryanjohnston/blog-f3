<?php
/**
 * Bootstrap the library.  This registers a simple autoloader for autoloading
 * classes
 *
 * If you are using this library inside of another that uses a similar
 * autoloading system, you can use that autoloader instead of this file.
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Core
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://opensource.org/licenses/bsd-license.php New BSD License
 * @license    http://www.gnu.org/licenses/lgpl-2.1.html LGPL v 2.1
 */

namespace PasswordLib;

\Phar::mapPhar('PasswordLib.phar');
\Phar::interceptFileFuncs();

require_once 'phar://PasswordLib.phar/PasswordLib/Core/AutoLoader.php';

$autoloader = new \PasswordLib\Core\AutoLoader(__NAMESPACE__, 'phar://PasswordLib.phar');

$autoloader->register();

__HALT_COMPILER(); ?>
�
  +           -   a:1:{s:7:"version";s:17:"${version.number}";}   package.xmlG  .��OG  �E�׶         PasswordLib/bootstrap.php�  .��O�  ��8�      $   PasswordLib/Core/AbstractFactory.php<
  .��O<
  �\0��         PasswordLib/Core/AutoLoader.php�	  .��O�	  �ݓ��      "   PasswordLib/Core/BaseConverter.php�  .��O�  =J�'�      #   PasswordLib/Core/BigMath/BCMath.php�  .��O�  =Y���          PasswordLib/Core/BigMath/GMP.php  .��O  ��N��      $   PasswordLib/Core/BigMath/PHPMath.php  .��O  !��˶         PasswordLib/Core/BigMath.php  .��O  �-P~�         PasswordLib/Core/Enum.php�  .��O�  I�a�         PasswordLib/Core/Strength.php�  .��O�  }�Ӷ         PasswordLib/Hash/Hash.php,)  .��O,)  )�P��      1   PasswordLib/Key/Derivation/AbstractDerivation.php  .��O  �c!��      +   PasswordLib/Key/Derivation/PBKDF/PBKDF2.php�  .��O�  ��+V�      $   PasswordLib/Key/Derivation/PBKDF.php}  .��O}  `IMt�         PasswordLib/Key/Factory.php�
  .��O�
  �Z�          PasswordLib/Password/Factory.php�  .��O�  �y�ض      ,   PasswordLib/Password/Implementation/APR1.php�  .��O�  �V���      0   PasswordLib/Password/Implementation/Blowfish.php�  .��O�  �],��      -   PasswordLib/Password/Implementation/Crypt.phpt  .��Ot  z�<A�      .   PasswordLib/Password/Implementation/Drupal.php  .��O  ���      ,   PasswordLib/Password/Implementation/Hash.php�  .��O�  Zw��      .   PasswordLib/Password/Implementation/Joomla.php�  .��O�  ���^�      +   PasswordLib/Password/Implementation/MD5.php  .��O  �F�H�      -   PasswordLib/Password/Implementation/PBKDF.php�  .��O�  �#&ж      .   PasswordLib/Password/Implementation/PHPASS.php�  .��O�  �Ub��      -   PasswordLib/Password/Implementation/PHPBB.php  .��O  �S?�      .   PasswordLib/Password/Implementation/SHA256.php;  .��O;  3P� �      .   PasswordLib/Password/Implementation/SHA512.php;  .��O;  ���϶      !   PasswordLib/Password/Password.phpe  .��Oe  ��b��         PasswordLib/PasswordLib.phpp  .��Op  WSr��      $   PasswordLib/Random/AbstractMixer.php�  .��O�  P���         PasswordLib/Random/Factory.phpd  .��Od  �+2[�          PasswordLib/Random/Generator.php�  .��O�  .����      !   PasswordLib/Random/Mixer/Hash.php{
  .��O{
  V�ڟ�         PasswordLib/Random/Mixer.phpJ  .��OJ  :���      %   PasswordLib/Random/Source/CAPICOM.php�  .��O�  =$��      '   PasswordLib/Random/Source/MicroTime.php   .��O   ��x��      $   PasswordLib/Random/Source/MTRand.php�  .��O�  �����      "   PasswordLib/Random/Source/Rand.php�  .��O�  ��V�      $   PasswordLib/Random/Source/UniqID.php   .��O   �!�¶      %   PasswordLib/Random/Source/URandom.php[  .��O[  \
�ζ         PasswordLib/Random/Source.php�  .��O�  ��Ͷ      <?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE package SYSTEM "http://pear.php.net/dtd/package-1.0">
<package version="1.0" packagerversion="1.9.3">
 <name>PasswordLib</name>
 <summary>A Cryptography Library for PHP</summary>
 <description>A Cryptography Library for PHP
 </description>
 <maintainers>
  <maintainer>
   <user>ircmaxell</user>
   <name>Anthony Ferrara</name>
   <email>ircmaxell@ircmaxell.com</email>
   <role>lead</role>
  </maintainer>
  </maintainers>
 <release>
  <version>0.0.1a1</version>
  <date>2012-04-14</date>
  <license>PHP License</license>
  <state>alpha</state>
  <notes>Release Notes
  </notes>
  <provides type="class" name="URandom" />
  <provides type="function" name="URandom::getStrength" />
  <provides type="function" name="URandom::generate" />
  <filelist>
   <dir name="PasswordLib">
    <dir name="Core">
     <dir name="BigMath">
      <file role="php" baseinstalldir="PasswordLib" name="BCMath.php"/>
      <file role="php" baseinstalldir="PasswordLib" name="GMP.php"/>
      <file role="php" baseinstalldir="PasswordLib" name="PHPMath.php"/>
     </dir> <!-- /PasswordLib/Core/BigMath -->
     <file role="php" baseinstalldir="PasswordLib" name="AbstractFactory.php"/>
     <file role="php" baseinstalldir="PasswordLib" name="AutoLoader.php"/>
     <file role="php" baseinstalldir="PasswordLib" name="BaseConverter.php"/>
     <file role="php" baseinstalldir="PasswordLib" name="BigMath.php"/>
     <file role="php" baseinstalldir="PasswordLib" name="Enum.php"/>
     <file role="php" baseinstalldir="PasswordLib" name="Strength.php"/>
    </dir> <!-- /PasswordLib/Core -->
    <dir name="Hash">
     <file role="php" baseinstalldir="PasswordLib" name="Hash.php"/>
    </dir> <!-- /PasswordLib/Hash -->
    <dir name="Key">
     <dir name="Derivation">
      <dir name="PBKDF">
       <file role="php" baseinstalldir="PasswordLib" name="PBKDF2.php"/>
      </dir> <!-- /PasswordLib/Key/Derivation/PBKDF -->
      <file role="php" baseinstalldir="PasswordLib" name="AbstractDerivation.php"/>
      <file role="php" baseinstalldir="PasswordLib" name="PBKDF.php"/>
     </dir> <!-- /PasswordLib/Key/Derivation -->
     <file role="php" baseinstalldir="PasswordLib" name="Factory.php"/>
    </dir> <!-- /PasswordLib/Key -->
    <dir name="Password">
     <dir name="Implementation">
      <file role="php" baseinstalldir="PasswordLib" name="APR1.php"/>
      <file role="php" baseinstalldir="PasswordLib" name="Blowfish.php"/>
      <file role="php" baseinstalldir="PasswordLib" name="Crypt.php"/>
      <file role="php" baseinstalldir="PasswordLib" name="Drupal.php"/>
      <file role="php" baseinstalldir="PasswordLib" name="Hash.php"/>
      <file role="php" baseinstalldir="PasswordLib" name="Joomla.php"/>
      <file role="php" baseinstalldir="PasswordLib" name="MD5.php"/>
      <file role="php" baseinstalldir="PasswordLib" name="PBKDF.php"/>
      <file role="php" baseinstalldir="PasswordLib" name="PHPASS.php"/>
      <file role="php" baseinstalldir="PasswordLib" name="PHPBB.php"/>
      <file role="php" baseinstalldir="PasswordLib" name="SHA256.php"/>
      <file role="php" baseinstalldir="PasswordLib" name="SHA512.php"/>
     </dir> <!-- /PasswordLib/Password/Implementation -->
     <file role="php" baseinstalldir="PasswordLib" name="Factory.php"/>
     <file role="php" baseinstalldir="PasswordLib" name="Password.php"/>
    </dir> <!-- /PasswordLib/Password -->
    <dir name="Random">
     <dir name="Mixer">
      <file role="php" baseinstalldir="PasswordLib" name="Hash.php"/>
     </dir> <!-- /PasswordLib/Random/Mixer -->
     <dir name="Source">
      <file role="php" baseinstalldir="PasswordLib" name="CAPICOM.php"/>
      <file role="php" baseinstalldir="PasswordLib" name="MicroTime.php"/>
      <file role="php" baseinstalldir="PasswordLib" name="MTRand.php"/>
      <file role="php" baseinstalldir="PasswordLib" name="Rand.php"/>
      <file role="php" baseinstalldir="PasswordLib" name="UniqID.php"/>
      <file role="php" baseinstalldir="PasswordLib" name="URandom.php"/>
     </dir> <!-- /PasswordLib/Random/Source -->
     <file role="php" baseinstalldir="PasswordLib" name="AbstractMixer.php"/>
     <file role="php" baseinstalldir="PasswordLib" name="Factory.php"/>
     <file role="php" baseinstalldir="PasswordLib" name="Generator.php"/>
     <file role="php" baseinstalldir="PasswordLib" name="Mixer.php"/>
     <file role="php" baseinstalldir="PasswordLib" name="Source.php"/>
    </dir> <!-- /PasswordLib/Random -->
    <file role="php" baseinstalldir="PasswordLib" name="bootstrap.php"/>
    <file role="php" baseinstalldir="PasswordLib" name="PasswordLib.php"/>
   </dir> <!-- /PasswordLib -->
  </filelist>
 </release>
 <changelog>
   <release>
    <version>0.0.1a1</version>
    <date>2012-04-14</date>
    <license>PHP License</license>
    <state>alpha</state>
    <notes>Release Notes
    </notes>
   </release>
 </changelog>
</package>
<?php
/**
 * Bootstrap the library.  This registers a simple autoloader for autoloading
 * classes
 *
 * If you are using this library inside of another that uses a similar
 * autoloading system, you can use that autoloader instead of this file.
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Core
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib;

require_once __DIR__ . '/Core/AutoLoader.php';

$autoloader = new Core\AutoLoader(__NAMESPACE__, dirname(__DIR__));

$autoloader->register();<?php
/**
 * The base abstract factory used by all PasswordLib factories
 *
 * PHP version 5.3
 *
 * @category  PHPPasswordLib
 * @package   Core
 * @author    Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright 2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version   Build ${version.number}
 */

namespace PasswordLib\Core;

/**
 * The base abstract factory used by all PasswordLib factories
 *
 * @category PHPPasswordLib
 * @package  Core
 * @author   Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
abstract class AbstractFactory {

    /**
     * Register a type with the factory by name
     *
     * This is an internal method to check if a provided class name implements
     * an interface, and if it does to append that class to an internal array
     * by name.
     *
     * @param string  $type        The name of the variable to store the class
     * @param string  $implements  The interface to validate against
     * @param string  $name        The name of this particular class
     * @param string  $class       The fully qualified class name
     * @param boolean $instantiate Should the class be stored instantiated
     *
     * @return void
     * @throws InvalidArgumentException If class does not implement interface
     */
    protected function registerType(
        $type,
        $implements,
        $name,
        $class,
        $instantiate = false
    ) {
        $name = strtolower($name);
        $refl = new \ReflectionClass($class);
        if (!$refl->implementsInterface($implements)) {
            $message = sprintf('Class must implement %s', $implements);
            throw new \InvalidArgumentException($message);
        }
        if ($instantiate) {
            $class = new $class;
        }

        $this->{$type}[$name] = $class;
    }

    /**
     * Load a set of classes from a directory into the factory
     *
     * @param string $directory The directory to search for classes in
     * @param string $namespace The namespace prefix for any found classes
     * @param string $callback  The callback with which to register the class
     *
     * @return void
     */
    protected function loadFiles($directory, $namespace, $callback) {
        foreach (new \DirectoryIterator($directory) as $file) {
            $filename = $file->getBasename();
            if ($file->isFile() && substr($filename, -4) == '.php') {
                $name  = substr($filename, 0, -4);
                $class = $namespace . $name;
                call_user_func($callback, $name, $class);
            }
        }
    }

}
<?php
/**
 * An implementation of the PSR-0 Autoloader.  This can be replaced at will with
 * other implementations if necessary.
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Core
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Core;

/**
 * An implementation of the PSR-0 Autoloader.  This can be replaced at will with
 * other implementations if necessary.
 *
 * @category   PHPPasswordLib
 * @package    Core
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class AutoLoader {

    /**
     * @var string The namespace prefix for this instance.
     */
    protected $namespace = '';

    /**
     * @var string The filesystem prefix to use for this instance
     */
    protected $path = '';

    /**
     * Build the instance of the autoloader
     *
     * @param string $namespace The prefixed namespace this instance will load
     * @param string $path      The filesystem path to the root of the namespace
     *
     * @return void
     */
    public function __construct($namespace, $path) {
        $this->namespace = ltrim($namespace, '\\');
        $this->path      = rtrim($path, '/\\') . DIRECTORY_SEPARATOR;
    }

    /**
     * Try to load a class
     *
     * @param string $class The class name to load
     *
     * @return boolean If the loading was successful
     */
    public function load($class) {
        $class = ltrim($class, '\\');
        if (strpos($class, $this->namespace) === 0) {
            $nsparts   = explode('\\', $class);
            $class     = array_pop($nsparts);
            $nsparts[] = '';
            $path      = $this->path . implode(DIRECTORY_SEPARATOR, $nsparts);
            $path     .= str_replace('_', DIRECTORY_SEPARATOR, $class) . '.php';
            if (file_exists($path)) {
                require $path;
                return true;
            }
        }
        return false;
    }

    /**
     * Register the autoloader to PHP
     *
     * @return boolean The status of the registration
     */
    public function register() {
        return spl_autoload_register(array($this, 'load'));
    }

    /**
     * Unregister the autoloader to PHP
     *
     * @return boolean The status of the unregistration
     */
    public function unregister() {
        return spl_autoload_unregister(array($this, 'load'));
    }

}<?php

/**
 * A Utility class for converting between raw binary strings and a given
 * list of characters
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Core
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Core;

/**
 * A Utility class for converting between raw binary strings and a given
 * list of characters
 *
 * @category   PHPPasswordLib
 * @package    Core
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class BaseConverter {

    /**
     * Convert from a raw binary string to a string of characters
     *
     * @param string $string     The string to convert from
     * @param string $characters The list of characters to convert to
     *
     * @return string The converted string
     */
    public static function convertFromBinary($string, $characters) {
        if ($string === '' || empty($characters)) {
            return '';
        }
        $string   = str_split($string);
        $callback = function($str) {
                return ord($str);
            };
        $string    = array_map($callback, $string);
        $converted = static::baseConvert($string, 256, strlen($characters));
        $callback  = function ($num) use ($characters) {
                return $characters[$num];
            };
        $ret = implode('', array_map($callback, $converted));
        return $ret;
    }

    /**
     * Convert to a raw binary string from a string of characters
     *
     * @param string $string     The string to convert from
     * @param string $characters The list of characters to convert to
     *
     * @return string The converted string
     */
    public static function convertToBinary($string, $characters) {
        if (empty($string) || empty($characters)) {
            return '';
        }
        $string   = str_split($string);
        $callback = function($str) use ($characters) {
                return strpos($characters, $str);
            };
        $string    = array_map($callback, $string);
        $converted = static::baseConvert($string, strlen($characters), 256);
        $callback  = function ($num) {
                return chr($num);
            };
        return implode('', array_map($callback, $converted));
    }

    /**
     * Convert an array of input blocks to another numeric base
     *
     * This function was modified from an implementation found on StackOverflow.
     * Special Thanks to @KeithRandall for supplying the implementation.
     *
     * @param int[] $source  The source number, as an array
     * @param int   $srcBase The source base as an integer
     * @param int   $dstBase The destination base as an integer
     *
     * @see http://codegolf.stackexchange.com/questions/1620/arb/1626#1626
     * @return int[] An array of integers in the encoded base
     */
    public static function baseConvert(array $source, $srcBase, $dstBase) {
        if ($dstBase < 2) {
            $message = sprintf('Invalid Destination Base: %d', $dstBase);
            throw new \InvalidArgumentException($message);
        }
        $result = array();
        $count  = count($source);
        while ($count) {
            $itMax     = $count;
            $remainder = $count = $loop = 0;
            while($loop < $itMax) {
                $dividend  = $source[$loop++] + $remainder * $srcBase;
                $remainder = $dividend % $dstBase;
                $res       = ($dividend - $remainder) / $dstBase;
                if ($count || $res) {
                    $source[$count++] = $res;
                }
            }
            $result[] = $remainder;
        }
        return array_reverse($result);
    }

}
<?php
/**
 * A class for arbitrary precision math functions implemented using bcmath
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Core
 * @subpackage BigMath
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */
namespace PasswordLib\Core\BigMath;

/**
 * A class for arbitrary precision math functions implemented using bcmath
 *
 * @category   PHPPasswordLib
 * @package    Core
 * @subpackage BigMath
 */
class BCMath extends \PasswordLib\Core\BigMath {

    /**
     * Add two numbers together
     * 
     * @param string $left  The left argument
     * @param string $right The right argument
     * 
     * @return A base-10 string of the sum of the two arguments
     */
    public function add($left, $right) {
        return bcadd($left, $right, 0);
    }

    /**
     * Subtract two numbers
     * 
     * @param string $left  The left argument
     * @param string $right The right argument
     * 
     * @return A base-10 string of the difference of the two arguments
     */
    public function subtract($left, $right) {
        return bcsub($left, $right);
    }

}<?php
/**
 * A class for arbitrary precision math functions implemented using GMP
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Core
 * @subpackage BigMath
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */
namespace PasswordLib\Core\BigMath;

/**
 * A class for arbitrary precision math functions implemented using GMP
 *
 * @category   PHPPasswordLib
 * @package    Core
 * @subpackage BigMath
 */
class GMP extends \PasswordLib\Core\BigMath {

    /**
     * Add two numbers together
     * 
     * @param string $left  The left argument
     * @param string $right The right argument
     * 
     * @return A base-10 string of the sum of the two arguments
     */
    public function add($left, $right) {
        return gmp_strval(gmp_add($left, $right));
    }

    /**
     * Subtract two numbers
     * 
     * @param string $left  The left argument
     * @param string $right The right argument
     * 
     * @return A base-10 string of the difference of the two arguments
     */
    public function subtract($left, $right) {
        return gmp_strval(gmp_sub($left, $right));
    }

}<?php
/**
 * A class for arbitrary precision math functions implemented in PHP
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Core
 * @subpackage BigMath
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */
namespace PasswordLib\Core\BigMath;

use PasswordLib\Core\BaseConverter;

/**
 * A class for arbitrary precision math functions implemented in PHP
 *
 * @category   PHPPasswordLib
 * @package    Core
 * @subpackage BigMath
 */
class PHPMath extends \PasswordLib\Core\BigMath {

    /**
     * Add two numbers together
     *
     * @param string $left  The left argument
     * @param string $right The right argument
     *
     * @return A base-10 string of the sum of the two arguments
     */
    public function add($left, $right) {
        if (empty($left)) {
            return $right;
        } elseif (empty($right)) {
            return $left;
        }
        $negative = '';
        if ($left[0] == '-' && $right[0] == '-') {
            $negative = '-';
            $left     = substr($left, 1);
            $right    = substr($right, 1);
        } elseif ($left[0] == '-') {
            return $this->subtract($right, substr($left, 1));
        } elseif ($right[0] == '-') {
            return $this->subtract($left, substr($right, 1));
        }
        $left   = $this->normalize($left);
        $right  = $this->normalize($right);
        $result = BaseConverter::convertFromBinary(
            $this->addBinary($left, $right),
            '0123456789'
        );
        return $negative . $result;
    }

    /**
     * Subtract two numbers
     *
     * @param string $left  The left argument
     * @param string $right The right argument
     *
     * @return A base-10 string of the difference of the two arguments
     */
    public function subtract($left, $right) {
        if (empty($left)) {
            return $right;
        } elseif (empty($right)) {
            return $left;
        } elseif ($right[0] == '-') {
            return $this->add($left, substr($right, 1));
        } elseif ($left[0] == '-') {
            return '-' . $this->add(ltrim($left, '-'), $right);
        }
        $left    = $this->normalize($left);
        $right   = $this->normalize($right);
        $results = $this->subtractBinary($left, $right);
        $result  = BaseConverter::convertFromBinary($results[1], '0123456789');
        return $results[0] . $result;
    }

    /**
     * Add two binary strings together
     *
     * @param string $left  The left argument
     * @param string $right The right argument
     *
     * @return string The binary result
     */
    protected function addBinary($left, $right) {
        $len    = max(strlen($left), strlen($right));
        $left   = str_pad($left, $len, chr(0), STR_PAD_LEFT);
        $right  = str_pad($right, $len, chr(0), STR_PAD_LEFT);
        $result = '';
        $carry  = 0;
        for ($i = 0; $i < $len; $i++) {
            $sum     = ord($left[$len - $i - 1])
                 + ord($right[$len - $i - 1])
                 + $carry;
            $result .= chr($sum % 256);
            $carry   = $sum >> 8;
        }
        while ($carry) {
            $result .= chr($carry % 256);
            $carry >>= 8;
        }
        return strrev($result);
    }

    /**
     * Subtract two binary strings using 256's compliment
     *
     * @param string $left  The left argument
     * @param string $right The right argument
     *
     * @return string The binary result
     */
    protected function subtractBinary($left, $right) {
        $len    = max(strlen($left), strlen($right));
        $left   = str_pad($left, $len, chr(0), STR_PAD_LEFT);
        $right  = str_pad($right, $len, chr(0), STR_PAD_LEFT);
        $right  = $this->compliment($right);
        $result = $this->addBinary($left, $right);
        if (strlen($result) > $len) {
            // Positive Result
            $carry  = substr($result, 0, -1 * $len);
            $result = substr($result, strlen($carry));
            return array(
                '',
                $this->addBinary($result, $carry)
            );
        }
        return array('-', $this->compliment($result));
    }

    /**
     * Take the 256 base compliment
     *
     * @param string $string The binary string to compliment
     *
     * @return string The complimented string
     */
    protected function compliment($string) {
        $result = '';
        $len    = strlen($string);
        for ($i = 0; $i < $len; $i++) {
            $result .= chr(255 - ord($string[$i]));
        }
        return $result;
    }

    /**
     * Transform a string number into a binary string using base autodetection
     *
     * @param string $string The string to transform
     *
     * @return string The binary transformed number
     */
    protected function normalize($string) {
        return BaseConverter::convertToBinary(
            $string,
            '0123456789'
        );
    }

}<?php
/**
 * A class for arbitrary precision math functions
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Core
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */
namespace PasswordLib\Core;

/**
 * A class for arbitrary precision math functions
 *
 * @category   PHPPasswordLib
 * @package    Core
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
abstract class BigMath {

    /**
     * Get an instance of the big math class
     *
     * This is NOT a singleton.  It simply loads the proper strategy
     * given the current server configuration
     *
     * @return \PasswordLib\Core\BigMath A big math instance
     */
    public static function createFromServerConfiguration() {
        //@codeCoverageIgnoreStart
        if (extension_loaded('bcmath')) {
            return new \PasswordLib\Core\BigMath\BCMath();
        } elseif (extension_loaded('gmp')) {
            return new \PasswordLib\Core\BigMath\GMP();
        } else {
            return new \PasswordLib\Core\BigMath\PHPMath();
        }
        //@codeCoverageIgnoreEnd
    }

    /**
     * Add two numbers together
     *
     * @param string $left  The left argument
     * @param string $right The right argument
     *
     * @return A base-10 string of the sum of the two arguments
     */
    abstract public function add($left, $right);

    /**
     * Subtract two numbers
     *
     * @param string $left  The left argument
     * @param string $right The right argument
     *
     * @return A base-10 string of the difference of the two arguments
     */
    abstract public function subtract($left, $right);

}<?php
/**
 * The Enum base class for Enum functionality
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Core
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */
namespace PasswordLib\Core;

use \ReflectionObject;

/**
 * The Enum base class for Enum functionality
 *
 * This is based off of the SplEnum class implementation (which is only available
 * as a PECL extension in 5.3)
 *
 * @see        http://www.php.net/manual/en/class.splenum.php
 * @category   PHPPasswordLib
 * @package    Core
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
abstract class Enum {

    /**
     * A default value of null is provided.  Override this to set your own default
     */
    const __DEFAULT = null;

    /**
     * @var string The name of the constant this instance is using
     */
    protected $name = '';

    /**
     * @var scalar The value of the constant this instance is using.
     */
    protected $value = '';

    /**
     * Creates a new value of the Enum type
     *
     * @param mixed   $value  The value this instance represents
     * @param boolean $strict Not Implemented at this time
     *
     * @return void
     * @throws UnexpectedValueException If the value is not a constant
     */
    public function __construct($value = null, $strict = false) {
        if (is_null($value)) {
            $value = static::__DEFAULT;
        }
        $validValues = $this->getConstList();
        $this->name  = array_search($value, $validValues);
        if (!$this->name) {
            throw new \UnexpectedValueException(
                'Value not a const in enum ' . get_class($this)
            );
        }
        $this->value = $value;
    }

    /**
     * Cast the current object to a string and return its value
     *
     * @return mixed the current value of the instance
     */
    public function __toString() {
        return (string) $this->value;
    }

    /**
     * Compare two enums using numeric comparison
     *
     * @param Enum $arg The enum to compare this instance to
     *
     * @return int 0 if same, 1 if the argument is greater, -1 else
     */
    public function compare(Enum $arg) {
        if ($this->value == $arg->value) {
            return 0;
        } elseif ($this->value > $arg->value) {
            return -1;
        } else {
            return 1;
        }
    }

    /**
     * Returns all constants (including values) as an associative array
     *
     * @param boolean $include_default Include the __default magic value?
     *
     * @return array All of the constants found against this instance
     */
    public function getConstList($include_default = false) {
        static $constCache = array();
        $class             = get_class($this);
        if (!isset($constCache[$class])) {
            $reflector          = new ReflectionObject($this);
            $constCache[$class] = $reflector->getConstants();
        }
        if (!$include_default) {
            $constants = $constCache[$class];
            unset($constants['__DEFAULT']);
            return $constants;
        }
        return $constCache[$class];
    }

}<?php
/**
 * The strength FlyweightEnum class
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Core
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Core;

/**
 * The strength FlyweightEnum class
 *
 * All mixing strategies must extend this class
 *
 * @category   PHPPasswordLib
 * @package    Core
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class Strength extends Enum {

    /**
     * We provide a default value of VeryLow so that we don't accidentally over
     * state the strength if we forget to pass in a value...
     */
    const __DEFAULT = self::VERYLOW;

    /**
     * This represents Non-Cryptographic strengths.  It should not be used any time
     * that security or confidentiality is at stake
     */
    const VERYLOW = 1;

    /**
     * This represents the bottom line of Cryptographic strengths.  It may be used
     * for low security uses where some strength is required.
     */
    const LOW = 3;

    /**
     * This is the general purpose Cryptographical strength.  It should be suitable
     * for all uses except the most sensitive.
     */
    const MEDIUM = 5;

    /**
     * This is the highest strength available.  It should not be used unless the
     * high strength is needed, due to hardware constraints (and entropy
     * limitations).
     */
    const HIGH = 7;

}
<?php
/**
 * A hash utility data mapper class
 * 
 * This class's purpose is to store information about hash algorithms that is
 * otherwise unavailable during runtime.  Some information is available (such 
 * as the output size), but is included anyway for performance and completeness
 * reasons.
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Hash
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */
namespace PasswordLib\Hash;

/**
 * A hash utility data mapper class
 * 
 * This class's purpose is to store information about hash algorithms that is
 * otherwise unavailable during runtime.  Some information is available (such 
 * as the output size), but is included anyway for performance and completeness
 * reasons.
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Hash
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class Hash {

    /**
     * This array contains information about each hash function available to PHP
     * at the present time.  Block sizes are not available from functions, so they
     * must be hard coded.
     * 
     * The "secure" indicates the strength of the hash and whether or not any known
     * cryptographic attacks exist for the hash function. This will only apply when
     * using the hash functions for situations that require cryptographic strength
     * such as message signing.  For other uses the insecure ones can have valid
     * uses.
     * 
     * @var array An array of information about each supported hash function 
     */
    protected static $hashInfo = array(
        'md2' => array(
            'HashSize'  => 128,
            'BlockSize' => 128,
            'secure'    => false,
        ),
        'md4' => array(
            'HashSize'  => 128,
            'BlockSize' => 512,
            'secure'    => false,
        ),
        'md5' => array(
            'HashSize'  => 128,
            'BlockSize' => 512,
            'secure'    => false,
        ),
        'sha1' => array(
            'HashSize'  => 160,
            'BlockSize' => 512,
            'secure'    => false,
        ),
        'sha224' => array(
            'HashSize'  => 224,
            'BlockSize' => 512,
            'secure'    => true,
        ),
        'sha256' => array(
            'HashSize'  => 256,
            'BlockSize' => 512,
            'secure'    => true,
        ),
        'sha384' => array(
            'HashSize'  => 384,
            'BlockSize' => 1024,
            'secure'    => true,
        ),
        'sha512' => array(
            'HashSize'  => 512,
            'BlockSize' => 1024,
            'secure'    => true,
        ),
        'ripemd128' => array(
            'HashSize'  => 128,
            'BlockSize' => 512,
            'secure'    => true,
        ),
        'ripemd160' => array(
            'HashSize'  => 160,
            'BlockSize' => 512,
            'secure'    => true,
        ),
        'ripemd256' => array(
            'HashSize'  => 256,
            'BlockSize' => 512,
            'secure'    => true,
        ),
        'ripemd320' => array(
            'HashSize'  => 320,
            'BlockSize' => 512,
            'secure'    => true,
        ),
        'whirlpool' => array(
            'HashSize'  => 512,
            'BlockSize' => 512,
            'secure'    => true,
        ),
        'tiger128,3' => array(
            'HashSize'  => 128,
            'BlockSize' => 512,
            'secure'    => true,
        ),
        'tiger160,3' => array(
            'HashSize'  => 160,
            'BlockSize' => 512,
            'secure'    => true,
        ),
        'tiger192,3' => array(
            'HashSize'  => 192,
            'BlockSize' => 512,
            'secure'    => true,
        ),
        'tiger128,4' => array(
            'HashSize'  => 128,
            'BlockSize' => 512,
            'secure'    => true,
        ),
        'tiger160,4' => array(
            'HashSize'  => 160,
            'BlockSize' => 512,
            'secure'    => true,
        ),
        'tiger192,4' => array(
            'HashSize'  => 192,
            'BlockSize' => 512,
            'secure'    => true,
        ),
        'snefru' => array(
            'HashSize'  => 256,
            'BlockSize' => 512,
            'secure'    => false,
        ),
        'snefru256' => array(
            'HashSize'  => 256,
            'BlockSize' => 512,
            'secure'    => false,
        ),
        'gost' => array(
            'HashSize'  => 256,
            'BlockSize' => 256,
            'secure'    => false,
        ),
        'adler32' => array(
            'HashSize'  => 32,
            'BlockSize' => 16,
            'secure'    => false,
        ),
        'crc32' => array(
            'HashSize'  => 32,
            'BlockSize' => 32,
            'secure'    => false,
        ),
        'crc32b' => array(
            'HashSize'  => 32,
            'BlockSize' => 32,
            'secure'    => false,
        ),
        'salsa10' => array(
            'HashSize'  => 512,
            'BlockSize' => 512,
            'secure'    => true,
        ),
        'salsa20' => array(
            'HashSize'  => 512,
            'BlockSize' => 512,
            'secure'    => true,
        ),
        'haval128,3' => array(
            'HashSize'  => 128,
            'BlockSize' => 1024,
            'secure'    => false,
        ),
        'haval160,3' => array(
            'HashSize'  => 160,
            'BlockSize' => 1024,
            'secure'    => false,
        ),
        'haval192,3' => array(
            'HashSize'  => 192,
            'BlockSize' => 1024,
            'secure'    => false,
        ),
        'haval224,3' => array(
            'HashSize'  => 224,
            'BlockSize' => 1024,
            'secure'    => false,
        ),
        'haval256,3' => array(
            'HashSize'  => 256,
            'BlockSize' => 1024,
            'secure'    => false,
        ),
        'haval128,4' => array(
            'HashSize'  => 128,
            'BlockSize' => 1024,
            'secure'    => false,
        ),
        'haval160,4' => array(
            'HashSize'  => 160,
            'BlockSize' => 1024,
            'secure'    => false,
        ),
        'haval192,4' => array(
            'HashSize'  => 192,
            'BlockSize' => 1024,
            'secure'    => false,
        ),
        'haval224,4' => array(
            'HashSize'  => 224,
            'BlockSize' => 1024,
            'secure'    => false,
        ),
        'haval256,4' => array(
            'HashSize'  => 256,
            'BlockSize' => 1024,
            'secure'    => false,
        ),
        'haval128,5' => array(
            'HashSize'  => 128,
            'BlockSize' => 1024,
            'secure'    => false,
        ),
        'haval160,5' => array(
            'HashSize'  => 160,
            'BlockSize' => 1024,
            'secure'    => false,
        ),
        'haval192,5' => array(
            'HashSize'  => 192,
            'BlockSize' => 1024,
            'secure'    => false,
        ),
        'haval224,5' => array(
            'HashSize'  => 224,
            'BlockSize' => 1024,
            'secure'    => false,
        ),
        'haval256,5' => array(
            'HashSize'  => 256,
            'BlockSize' => 1024,
            'secure'    => false,
        ),
        'joaat' => array(
            'HashSize'  => 32,
            'BlockSize' => 64,
            'secure'    => false,
        ),
        'fnv132' => array(
            'HashSize'  => 32,
            'BlockSize' => 32,
            'secure'    => false,
        ),
        'fnv164' => array(
            'HashSize'  => 64,
            'BlockSize' => 64,
            'secure'    => false,
        ),
    );

    /**
     * Get the block size of the specified function in bytes
     *
     * @param string $hash The hash function to look up
     * 
     * @return int The number of bytes in the block function
     */
    public static function getBlockSize($hash) {
        return static::getBlockSizeInBits($hash) / 8;
    }

    /**
     * Get the block size of the specified function in bits
     *
     * @param string $hash The hash function to look up
     * 
     * @return int The number of bits in the block function
     */
    public static function getBlockSizeInBits($hash) {
        if (isset(static::$hashInfo[$hash]['BlockSize'])) {
            return static::$hashInfo[$hash]['BlockSize'];
        }
        return 0;
    }

    /**
     * Get the output size of the specified function in bytes
     *
     * @param string $hash The hash function to look up
     * 
     * @return int The number of bytes outputted by the hash function
     */
    public static function getHashSize($hash) {
        return static::getHashSizeInBits($hash) / 8;
    }

    /**
     * Get the output size of the specified function in bits
     *
     * @param string $hash The hash function to look up
     * 
     * @return int The number of bits outputted by the hash function
     */
    public static function getHashSizeInBits($hash) {
        if (isset(static::$hashInfo[$hash]['HashSize'])) {
            return static::$hashInfo[$hash]['HashSize'];
        }
        return 0;
    }

    /**
     * Check to see if the hash function specified is available
     *
     * @param string $hash The hash function to look up
     * 
     * @return boolean If the hash function is available in this version of PHP
     */
    public static function isAvailable($hash) {
        return in_array($hash, hash_algos());
    }

    /**
     * Check to see if the specified hash function is secure enough for 
     * cryptographic uses
     * 
     * The "secure" indicates the strength of the hash and whether or not any known
     * cryptographic attacks exist for the hash function. This will only apply when
     * using the hash functions for situations that require cryptographic strength
     * such as message signing.  For other uses the insecure ones can have valid
     * uses.
     * 
     * @param string $hash The hash function to look up
     * 
     * @return bolean If the function is secure
     */
    public static function isSecure($hash) {
        if (isset(static::$hashInfo[$hash])) {
            return static::$hashInfo[$hash]['secure'];
        }
        return false;
    }

}<?php
/**
 * An abstract implementation of some standard key derivation needs
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Key
 * @subpackage Derivation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Key\Derivation;

/**
 * An abstract implementation of some standard key derivation needs
 *
 * @category   PHPPasswordLib
 * @package    Key
 * @subpackage Derivation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
abstract class AbstractDerivation {

    /**
     * @var Hash A hashing algorithm to use for the derivation
     */
    protected $hash = null;

    /**
     * @var array An array of options for the key derivation function
     */
    protected $options = array(
        'hash'        => 'sha512',
    );

    /**
     * Construct the derivation instance
     *
     * @param array $options An array of options to set for this instance
     *
     * @return void
     */
    public function __construct(array $options = array()) {
        $this->options = $options + $this->options;
        $this->hash    = $this->options['hash'];
    }

}
<?php
/**
 * An implementation of the RFC 2898 PBKDF2 Standard key derivation function
 *
 * PHP version 5.3
 *
 * @see        http://www.ietf.org/rfc/rfc2898.txt
 * @category   PHPPasswordLib
 * @package    Key
 * @subpackage Derivation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Key\Derivation\PBKDF;

use PasswordLib\Hash\Hash;

/**
 * An implementation of the RFC 2898 PBKDF2 Standard key derivation function
 *
 * @see        http://www.ietf.org/rfc/rfc2898.txt
 * @category   PHPPasswordLib
 * @package    Key
 * @subpackage Derivation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class PBKDF2
    extends \PasswordLib\Key\Derivation\AbstractDerivation
    implements \PasswordLib\Key\Derivation\PBKDF
{

    /**
     * Derive a key from the supplied arguments
     *
     * @param string $password   The password to derive from
     * @param string $salt       The salt string to use
     * @param int    $iterations The number of iterations to use
     * @param int    $length     The size of the string to generate
     *
     * @return string The derived key
     */
    public function derive($password, $salt, $iterations, $length) {
        $size   = Hash::getHashSize($this->hash);
        $len    = ceil($length / $size);
        $result = '';
        for ($i = 1; $i <= $len; $i++) {
            $tmp = hash_hmac(
                $this->hash,
                $salt . pack('N', $i),
                $password,
                true
            );
            $res = $tmp;
            for ($j = 1; $j < $iterations; $j++) {
                $tmp  = hash_hmac($this->hash, $tmp, $password, true);
                $res ^= $tmp;
            }
            $result .= $res;
        }
        return substr($result, 0, $length);
    }

    /**
     * Get the signature for this implementation
     *
     * This should include all information needed to build the same isntance
     * later.
     *
     * @return string The signature for this instance
     */
    public function getSignature() {
        return 'pbkdf2-' . $this->hash;
    }

}

<?php
/**
 * The core PBKDF interface (Password Based Key Derivation Function)
 *
 * This interface must be used to describe all derivation functions that take a
 * password as input and produce a key or hash as output 
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Key
 * @subpackage Derivation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Key\Derivation;

/**
 * The core PBKDF interface (Password Based Key Derivation Function)
 *
 * This interface must be used to describe all derivation functions that take a
 * password as input and produce a key or hash as output
 *
 * @category   PHPPasswordLib
 * @package    Key
 * @subpackage Derivation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @codeCoverageIgnore
 */
interface PBKDF {

    /**
     * Derive a key from the supplied arguments
     *
     * @param string $password   The password to derive from
     * @param string $salt       The salt string to use
     * @param int    $iterations The number of iterations to use
     * @param int    $length     The size of the string to generate
     *
     * @return string The derived key
     */
    public function derive($passkey, $salt, $iterations, $klen);

    /**
     * Get the signature for this implementation
     *
     * This should include all information needed to build the same isntance
     * later.
     *
     * @return string The signature for this instance
     */
    public function getSignature();

}
<?php
/**
 * The core Key Factory
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Key
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Key;

/**
 * The core Key Factory
 *
 * @category   PHPPasswordLib
 * @package    Key
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class Factory extends \PasswordLib\Core\AbstractFactory {

    /**
     * @var array An array of KDF class implementations
     */
    protected $kdf = array();

    /**
     * @var array An array of PBKDF class implementations
     */
    protected $pbkdf = array();

    /**
     * @var array An array of symmetric key generator implementations
     */
    protected $symmetricGenerators = array();

    /**
     * Construct the instance, loading the core implementations
     *
     * @return void
     */
    public function __construct() {
        $this->loadPBKDF();
    }

    public function getKDF($name = 'kdf3', array $options = array()) {
        if (isset($this->kdf[$name])) {
            $class = $this->kdf[$name];
            return new $class($options);
        }
        throw new \InvalidArgumentException('Unsupported KDF');
    }

    public function getPBKDF($name = 'pbkdf2', array $options = array()) {
        if (isset($this->pbkdf[$name])) {
            $class = $this->pbkdf[$name];
            return new $class($options);
        }
        throw new \InvalidArgumentException('Unsupported PBKDF');
    }

    public function getPBKDFFromSignature($signature) {
        list ($name, $hash) = explode('-', $signature, 2);
        return $this->getPBKDF($name, array('hash' => $hash));
    }

    public function getSymmetricKeyGenerator() {
    }

    public function registerKDF($name, $class) {
        $this->registerType(
            'kdf',
            __NAMESPACE__ . '\\Derivation\\KDF',
            $name,
            $class
        );
    }

    public function registerPBKDF($name, $class) {
        $this->registerType(
            'pbkdf',
            __NAMESPACE__ . '\\Derivation\\PBKDF',
            $name,
            $class
        );
    }

    protected function loadKDF() {
        $this->loadFiles(
            __DIR__ . '/Derivation/KDF',
            __NAMESPACE__ . '\\Derivation\\KDF\\',
            array($this, 'registerKDF')
        );
    }

    protected function loadPBKDF() {
        $this->loadFiles(
            __DIR__ . '/Derivation/PBKDF',
            __NAMESPACE__ . '\\Derivation\\PBKDF\\',
            array($this, 'registerPBKDF')
        );
    }

}
<?php
/**
 * The Password Factory
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Password
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Password;

use PasswordLib\Password\Implementation\Blowfish;

/**
 * The Password Factory
 *
 * @category   PHPPasswordLib
 * @package    Password
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class Factory extends \PasswordLib\Core\AbstractFactory {

    /**
     * @var array An array of implementation classes
     */
    protected $implementations = array();

    /**
     * Build a new instance of the factory, loading core implementations
     *
     * @return void
     */
    public function __construct() {
        $this->loadImplementations();
    }

    /**
     * Create a new password hash from the supplied password
     *
     * This defaults to using Blowfish if $prefix is not supplied
     *
     * @param string $password The password to hash
     * @param string $prefix   The prefix for the implementation
     *
     * @return string The hashed password
     * @throws DomainException if the supplied prefix is not supported
     */
    public function createHash($password, $prefix = '$2a$') {
        if ($prefix === false) {
            throw new \DomainException('Unsupported Prefix Supplied');
        }
        foreach ($this->implementations as $impl) {
            if ($impl::getPrefix() == $prefix) {
                $instance = new $impl;
                return $instance->create($password);
            }
        }
        throw new \DomainException('Unsupported Prefix Supplied');
    }

    /**
     * Verify a hash with a supplied password
     *
     * @param string $password The password to check against
     * @param string $hash     The hash to verify
     *
     * @return boolean True if valid, false if not
     * @throws DomainException if the supplied prefix is not supported
     */
    public function verifyHash($password, $hash) {
        foreach ($this->implementations as $impl) {
            if ($impl::detect($hash)) {
                $instance = $impl::loadFromHash($hash);
                return $instance->verify($password, $hash);
            }
        }
        throw new \DomainException('Unsupported Password Hash Supplied');
    }

    /**
     * Register a password implementation for this factory instance
     *
     * @param string $name  The name of the stategy
     * @param string $class The class name of the implementation
     *
     * @return Factory $this The current factory instance
     */
    public function registerImplementation($name, $class) {
        $this->registerType(
            'implementations',
            __NAMESPACE__ . '\\Password',
            $name,
            $class
        );
        return $this;
    }

    /**
     * Load all core password hashing implementations
     *
     * @return void
     */
    protected function loadImplementations() {
        $this->loadFiles(
            __DIR__ . '/Implementation',
            __NAMESPACE__ . '\\Implementation\\',
            array($this, 'registerImplementation')
        );
    }

}<?php
/**
 * The APR1 password hashing implementation
 *
 * Use this class to generate and validate APR1 password hashes.  APR1 hashes
 * are used primarrily by Apache for .htaccess password storage.
 *
 * PHP version 5.3
 *
 * @see        http://httpd.apache.org/docs/2.2/misc/password_encryptions.html
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Password\Implementation;

use PasswordLib\Random\Factory as RandomFactory;

/**
 * The APR1 password hashing implementation
 *
 * Use this class to generate and validate APR1 password hashes.  APR1 hashes
 * are used primarrily by Apache for .htaccess password storage.
 *
 * @see        http://httpd.apache.org/docs/2.2/misc/password_encryptions.html
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class APR1 implements \PasswordLib\Password\Password {

    /**
     * @var Generator The random generator to use for seeds
     */
    protected $generator = null;

    /**
     * @var Hash The hash function to use (MD5)
     */
    protected $hash = null;

    /**
     * @var int The number of iterations to perform (1000 for APR1)
     */
    protected $iterations = 1000;

    /**
     * Determine if the hash was made with this method
     *
     * @param string $hash The hashed data to check
     *
     * @return boolean Was the hash created by this method
     */
    public static function detect($hash) {
        return strncmp($hash, '$apr1$', 6) === 0;
    }

    /**
     * Return the prefix used by this hashing method
     *
     * @return string The prefix used
     */
    public static function getPrefix() {
        return '$apr1$';
    }

    /**
     * Load an instance of the class based upon the supplied hash
     *
     * @param string $hash The hash to load from
     *
     * @return Password the created instance
     * @throws InvalidArgumentException if the hash wasn't created here
     */
    public static function loadFromHash($hash) {
        if (!static::detect($hash)) {
            throw new \InvalidArgumentException('Hash Not Created Here');
        }
        return new static;
    }

    /**
     * Build a new instance
     *
     * @param Generator $generator The random generator to use for seeds
     *
     * @return void
     */
    public function __construct(
        \PasswordLib\Random\Generator $generator = null
    ) {
        if (is_null($generator)) {
            $random    = new RandomFactory();
            $generator = $random->getMediumStrengthGenerator();
        }
        $this->generator = $generator;
    }

    /**
     * Create a password hash for a given plain text password
     *
     * @param string $password The password to hash
     *
     * @return string The formatted password hash
     */
    public function create($password) {
        $salt = $this->to64($this->generator->generateInt(0, PHP_INT_MAX), 8);
        return $this->hash($password, $salt, $this->iterations);
    }

    /**
     * Verify a password hash against a given plain text password
     *
     * @param string $password The password to hash
     * @param string $hash     The supplied ahsh to validate
     *
     * @return boolean Does the password validate against the hash
     */
    public function verify($password, $hash) {
        $bits = explode('$', $hash);
        if (!isset($bits[3]) || $bits[1] != 'apr1') {
            return false;
        }
        $test = $this->hash($password, $bits[2], $this->iterations);
        return $test == $hash;
    }

    /**
     * Perform the hashing of the password
     *
     * @param string $password   The plain text password to hash
     * @param string $salt       The 8 byte salt to use
     * @param int    $iterations The number of iterations to use
     *
     * @return string The hashed password
     */
    protected function hash($password, $salt, $iterations) {
        $len  = strlen($password);
        $text = $password . '$apr1$' . $salt;
        $bin  = md5($password.$salt.$password, true);
        for ($i = $len; $i > 0; $i -= 16) {
            $text .= substr($bin, 0, min(16, $i));
        }
        for ($i = $len; $i > 0; $i >>= 1) {
            $text .= ($i & 1) ? chr(0) : $password[0];
        }
        $bin = $this->iterate($text, $iterations, $salt, $password);
        return $this->convertToHash($bin, $salt);
    }

    protected function iterate($text, $iterations, $salt, $password) {
        $bin = md5($text, true);
        for ($i = 0; $i < $iterations; $i++) {
            $new = ($i & 1) ? $password : $bin;
            if ($i % 3) {
                $new .= $salt;
            }
            if ($i % 7) {
                $new .= $password;
            }
            $new .= ($i & 1) ? $bin : $password;
            $bin  = md5($new, true);
        }
        return $bin;
    }

    protected function convertToHash($bin, $salt) {
        $tmp  = '$apr1$'.$salt.'$';
        $tmp .= $this->to64(
            (ord($bin[0])<<16) | (ord($bin[6])<<8) | ord($bin[12]),
            4
        );
        $tmp .= $this->to64(
            (ord($bin[1])<<16) | (ord($bin[7])<<8) | ord($bin[13]),
            4
        );
        $tmp .= $this->to64(
            (ord($bin[2])<<16) | (ord($bin[8])<<8) | ord($bin[14]),
            4
        );
        $tmp .= $this->to64(
            (ord($bin[3])<<16) | (ord($bin[9])<<8) | ord($bin[15]),
            4
        );
        $tmp .= $this->to64(
            (ord($bin[4])<<16) | (ord($bin[10])<<8) | ord($bin[5]),
            4
        );
        $tmp .= $this->to64(
            ord($bin[11]),
            2
        );
        return $tmp;
    }

    /**
     * Convert the input number to a base64 number of the specified size
     *
     * @param int $num  The number to convert
     * @param int $size The size of the result string
     *
     * @return string The converted representation
     */
    protected function to64($num, $size) {
        static $seed = '';
        if (empty($seed)) {
            $seed = './0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'.
                    'abcdefghijklmnopqrstuvwxyz';
        }
        $result = '';
        while (--$size >= 0) {
            $result .= $seed[$num & 0x3f];
            $num   >>= 6;
        }
        return $result;
    }

}
<?php
/**
 * The Blowfish password hashing implementation
 *
 * Use this class to generate and validate Blowfish password hashes.
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Password\Implementation;

use PasswordLib\Random\Factory as RandomFactory;

/**
 * The Blowfish password hashing implementation
 *
 * Use this class to generate and validate Blowfish password hashes.
 *
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class Blowfish extends Crypt {

    protected $saltLen = 22;

    /**
     * Determine if the hash was made with this method
     *
     * @param string $hash The hashed data to check
     *
     * @return boolean Was the hash created by this method
     */
    public static function detect($hash) {
        static $regex = '/^\$2a\$(0[4-9]|[1-2][0-9]|3[0-1])\$[a-zA-Z0-9.\/]{53}/';
        return 1 == preg_match($regex, $hash);
    }

    /**
     * Return the prefix used by this hashing method
     *
     * @return string The prefix used
     */
    public static function getPrefix() {
        return '$2a$';
    }

    /**
     * Load an instance of the class based upon the supplied hash
     *
     * @param string $hash The hash to load from
     *
     * @return Password the created instance
     * @throws InvalidArgumentException if the hash wasn't created here
     */
    public static function loadFromHash($hash) {
        if (!static::detect($hash)) {
            throw new \InvalidArgumentException('Hash Not Created Here');
        }
        list(, , $iterations) = explode('$', $hash, 4);
        return new static((int) $iterations);
    }

    protected function generateSalt() {
        $salt   = parent::generateSalt();
        $prefix = '$2a$' . str_pad($this->iterations, 2, '0', STR_PAD_LEFT);
        return $prefix . '$' . $salt;
    }
}<?php
/**
 * The Blowfish password hashing implementation
 *
 * Use this class to generate and validate Blowfish password hashes.
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Password\Implementation;

use PasswordLib\Random\Factory as RandomFactory;

/**
 * The Blowfish password hashing implementation
 *
 * Use this class to generate and validate Blowfish password hashes.
 *
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class Crypt implements \PasswordLib\Password\Password {

    /**
     * @var Generator The random generator to use for seeds
     */
    protected $generator = null;

    protected $iterations = 10;

    protected $saltLen = 2;

    /**
     * Determine if the hash was made with this method
     *
     * @param string $hash The hashed data to check
     *
     * @return boolean Was the hash created by this method
     */
    public static function detect($hash) {
        static $regex = '/^[.\/0-9A-Za-z]{13}$/';
        return 1 == preg_match($regex, $hash);
    }

    /**
     * Return the prefix used by this hashing method
     *
     * @return string The prefix used
     */
    public static function getPrefix() {
        return '';
    }

    /**
     * Load an instance of the class based upon the supplied hash
     *
     * @param string $hash The hash to load from
     *
     * @return Password the created instance
     * @throws InvalidArgumentException if the hash wasn't created here
     */
    public static function loadFromHash($hash) {
        if (!static::detect($hash)) {
            throw new \InvalidArgumentException('Hash Not Created Here');
        }
        return new static();
    }

    /**
     * Build a new instance
     *
     * @param int       $iterations The number of times to iterate the hash
     * @param Generator $generator  The random generator to use for seeds
     *
     * @return void
     */
    public function __construct(
        $iterations = 8,
        \PasswordLib\Random\Generator $generator = null
    ) {
        if ($iterations > 31 || $iterations < 4) {
            throw new \InvalidArgumentException('Invalid Iteration Count Supplied');
        }
        $this->iterations = $iterations;
        if (is_null($generator)) {
            $random    = new RandomFactory();
            $generator = $random->getMediumStrengthGenerator();
        }
        $this->generator = $generator;
    }

    /**
     * Create a password hash for a given plain text password
     *
     * @param string $password The password to hash
     *
     * @return string The formatted password hash
     */
    public function create($password) {
        $salt   = $this->generateSalt();
        $result = crypt($password, $salt);
        if ($result[0] == '*') {
            //@codeCoverageIgnoreStart
            throw new \RuntimeException('Password Could Not Be Created');
            //@codeCoverageIgnoreEnd
        }
        return $result;
    }

    /**
     * Verify a password hash against a given plain text password
     *
     * @param string $password The password to hash
     * @param string $hash     The supplied ahsh to validate
     *
     * @return boolean Does the password validate against the hash
     */
    public function verify($password, $hash) {
        if (!static::detect($hash)) {
            throw new \InvalidArgumentException(
                'The hash was not created here, we cannot verify it'
            );
        }
        $test = crypt($password, $hash);
        return $test == $hash;
    }

    protected function generateSalt() {
        $salt  = $this->generator->generate($this->saltLen);
        $chars = $this->to64($salt);
        return substr($chars, 0, $this->saltLen);
    }

    /**
     * Convert the input number to a base64 number of the specified size
     *
     * @param int $input The number to convert
     *
     * @return string The converted representation
     */
    protected function to64($input) {
        static $itoa = null;
        if (empty($itoa)) {
            $itoa = './ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                    . 'abcdefghijklmnopqrstuvwxyz0123456789';
        }
        $output = '';
        $size   = strlen($input);
        $ictr   = 0;
        do {
            $cval1   = ord($input[$ictr++]);
            $output .= $itoa[$cval1 >> 2];
            $cval1   = ($cval1 & 0x03) << 4;
            if ($ictr >= $size) {
                $output .= $itoa[$cval1];
                break;
            }
            $cval2 = ord($input[$ictr++]);
            $cval1 |= $cval2 >> 4;
            $output .= $itoa[$cval1];
            $cval1   = ($cval2 & 0x0f) << 2;
            $cval2   = ord($input[$ictr++]);
            $cval1 |= $cval2 >> 6;
            $output .= $itoa[$cval1];
            $output .= $itoa[$cval2 & 0x3f];
        } while (true);
        return $output;
    }
}<?php
/**
 * The Drupal password hashing implementation
 *
 * Use this class to generate and validate Drupal password hashes.
 *
 * PHP version 5.3
 *
 * @see        http://www.openwall.com/phpass/
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Password\Implementation;

use PasswordLib\Random\Factory as RandomFactory;

/**
 * The PHPASS password hashing implementation
 *
 * Use this class to generate and validate PHPASS password hashes.
 *
 * @see        http://www.openwall.com/phpass/
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class Drupal extends PHPASS {

    /**
     * @var string The prefix for the generated hash
     */
    protected static $prefix = '$S$';

    /**
     * @var string The hash function to use for this instance
     */
    protected $hashFunction = 'sha512';

    /**
     * Determine if the hash was made with this method
     *
     * @param string $hash The hashed data to check
     *
     * @return boolean Was the hash created by this method
     */
    public static function detect($hash) {
        $prefix = preg_quote(static::$prefix, '/');
        return 1 == preg_match('/^'.$prefix.'[a-zA-Z0-9.\/]{95}$/', $hash);
    }

}<?php
/**
 * The basic Hash implementation.
 *
 * It's worth noting, since there's no prefix, you cannot create a hash using
 * the factory method.
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Password\Implementation;

use PasswordLib\Random\Factory as RandomFactory;

/**
 * The basic Hash implementation.
 *
 * It's worth noting, since there's no prefix, you cannot create a hash using
 * the factory method.
 *
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class Hash implements \PasswordLib\Password\Password {

    /**
     * @var Generator The random generator to use for seeds
     */
    protected $generator = null;

    /**
     * @var Hash The hash function to use (MD5)
     */
    protected $hash = null;

    /**
     * Determine if the hash was made with this method
     *
     * @param string $hash The hashed data to check
     *
     * @return boolean Was the hash created by this method
     */
    public static function detect($hash) {
        $res  = preg_match('/^[a-fA-F0-9]+$/', $hash);
        $res &= (int) in_array(strlen($hash), array(32, 40, 64, 128));
        return (boolean) $res;
    }

    /**
     * Return the prefix used by this hashing method
     *
     * @return string The prefix used
     */
    public static function getPrefix() {
        return false;
    }

    /**
     * Load an instance of the class based upon the supplied hash
     *
     * @param string $hash The hash to load from
     *
     * @return Password the created instance
     * @throws InvalidArgumentException if the hash wasn't created here
     */
    public static function loadFromHash($hash) {
        if (!static::detect($hash)) {
            throw new \InvalidArgumentException('Hash Not Created Here');
        }
        $hashMethod = '';
        switch (strlen($hash)) {
            case 32:
                $hashMethod = 'md5';
                break;
            case 40:
                $hashMethod = 'sha1';
                break;
            case 64:
                $hashMethod = 'sha256';
                break;
            case 128:
                $hashMethod = 'sha512';
                break;
        }
        return new static($hashMethod);
    }

    /**
     * Build a new instance
     *
     * @param string    $hashMethod The hash function to use for hashing
     * @param Generator $generator  The random generator to use for seeds
     * @param Factory   $factory    The hash factory to use for this instance
     *
     * @return void
     */
    public function __construct(
        $hashMethod,
        \PasswordLib\Random\Generator $generator = null
    ) {
        $this->hash = $hashMethod;
        if (is_null($generator)) {
            $random    = new RandomFactory();
            $generator = $random->getMediumStrengthGenerator();
        }
        $this->generator = $generator;
    }

    /**
     * Create a password hash for a given plain text password
     *
     * @param string $password The password to hash
     *
     * @return string The formatted password hash
     */
    public function create($password) {
        throw new \BadMethodCallException(
            'Unsalted Passwords are only implemented for verification'
        );
    }

    /**
     * Verify a password hash against a given plain text password
     *
     * @param string $password The password to hash
     * @param string $hash     The supplied ahsh to validate
     *
     * @return boolean Does the password validate against the hash
     */
    public function verify($password, $hash) {
        $test = hash($this->hash, $password);
        return $test == $hash;
    }

}
<?php
/**
 * The Joomla based hash implementation based off of the md5-hex hash method
 *
 * It's worth noting, since there's no prefix, you cannot create a hash using
 * the factory method.
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Password\Implementation;

use PasswordLib\Random\Factory as RandomFactory;

/**
 * The Joomla based hash implementation based off of the md5-hex hash method
 *
 * It's worth noting, since there's no prefix, you cannot create a hash using
 * the factory method.
 *
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class Joomla implements \PasswordLib\Password\Password {

    /**
     * @var Generator The random generator to use for seeds
     */
    protected $generator = null;

    /**
     * Determine if the hash was made with this method
     *
     * @param string $hash The hashed data to check
     *
     * @return boolean Was the hash created by this method
     */
    public static function detect($hash) {
        return (boolean) preg_match('/^[a-fA-F0-9]{32}:[a-zA-z0-9]{32}$/', $hash);
    }

    /**
     * Return the prefix used by this hashing method
     *
     * @return string The prefix used
     */
    public static function getPrefix() {
        return false;
    }

    /**
     * Load an instance of the class based upon the supplied hash
     *
     * @param string $hash The hash to load from
     *
     * @return Password the created instance
     * @throws InvalidArgumentException if the hash wasn't created here
     */
    public static function loadFromHash($hash) {
        if (!static::detect($hash)) {
            throw new \InvalidArgumentException('Hash Not Created Here');
        }
        return new static();
    }

    /**
     * Build a new instance
     *
     * @param Generator $generator  The random generator to use for seeds
     * @param Factory   $factory    The hash factory to use for this instance
     *
     * @return void
     */
    public function __construct(
        \PasswordLib\Random\Generator $generator = null
    ) {
        if (is_null($generator)) {
            $random    = new RandomFactory();
            $generator = $random->getMediumStrengthGenerator();
        }
        $this->generator = $generator;
    }

    /**
     * Create a password hash for a given plain text password
     *
     * @param string $password The password to hash
     *
     * @return string The formatted password hash
     */
    public function create($password) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $salt  = $this->generator->generateString(32, $chars);
        $hash  = md5($password . $salt);
        return $hash . ':' . $salt;
    }

    /**
     * Verify a password hash against a given plain text password
     *
     * @param string $password The password to hash
     * @param string $hash     The supplied ahsh to validate
     *
     * @return boolean Does the password validate against the hash
     */
    public function verify($password, $hash) {
        if (!static::detect($hash)) {
            throw new \InvalidArgumentException(
                'The hash was not created here, we cannot verify it'
            );
        }
        list ($hash, $salt) = explode(':', $hash, 2);
        $test               = md5($password . $salt);
        return $test == $hash;
    }

}
<?php
/**
 * The Blowfish password hashing implementation
 *
 * Use this class to generate and validate Blowfish password hashes.
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Password\Implementation;

use PasswordLib\Random\Factory as RandomFactory;

/**
 * The Blowfish password hashing implementation
 *
 * Use this class to generate and validate Blowfish password hashes.
 *
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class MD5 extends Crypt {

    protected $saltLen = 12;

    /**
     * Determine if the hash was made with this method
     *
     * @param string $hash The hashed data to check
     *
     * @return boolean Was the hash created by this method
     */
    public static function detect($hash) {
        static $regex = '/^\$1\$[a-zA-Z0-9.\/]{12}\$[a-zA-Z0-9.\/]{22}/';
        return 1 == preg_match($regex, $hash);
    }

    /**
     * Return the prefix used by this hashing method
     *
     * @return string The prefix used
     */
    public static function getPrefix() {
        return '$1$';
    }

    protected function generateSalt() {
        $salt = parent::generateSalt();
        return '$1$' . $salt;
    }
}<?php
/**
 * The PBKDF based password hashing implementation
 *
 * Use this class to generate and validate PBKDF hashed passwords.
 *
 * PHP version 5.3
 *
 * @see        http://httpd.apache.org/docs/2.2/misc/password_encryptions.html
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Password\Implementation;

use PasswordLib\Key\Factory                 as KeyFactory;
use PasswordLib\Random\Factory              as RandomFactory;
use PasswordLib\Key\Derivation\PBKDF\PBKDF2 as PBKDF2;

/**
 * The PBKDF based password hashing implementation
 *
 * Use this class to generate and validate PBKDF hashed passwords.
 *
 * PHP version 5.3
 *
 * @see        http://httpd.apache.org/docs/2.2/misc/password_encryptions.html
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class PBKDF implements \PasswordLib\Password\Password {

    /**
     * @var PBKDF The PBKDF derivation implementation to use for this instance
     */
    protected $derivation = null;

    /**
     * @var Generator The Random Number Generator to use for making salts
     */
    protected $generator = null;

    /**
     * @var int The number of iterations to perform on the password
     */
    protected $iterations = 5000;

    /**
     * @var int The length in bytes of the generated password hash
     */
    protected $size = 40;

    /**
     * Determine if the hash was made with this method
     *
     * @param string $hash The hashed data to check
     *
     * @return boolean Was the hash created by this method
     */
    public static function detect($hash) {
        return strncmp($hash, '$pbkdf$', 7) === 0;
    }

    /**
     * Return the prefix used by this hashing method
     *
     * @return string The prefix used
     */
    public static function getPrefix() {
        return '$pbkdf$';
    }

    /**
     * Load an instance of the class based upon the supplied hash
     *
     * @param string $hash The hash to load from
     *
     * @return Password the created instance
     * @throws InvalidArgumentException if the hash wasn't created here
     */
    public static function loadFromHash($hash) {
        if (!static::detect($hash)) {
            throw new \InvalidArgumentException('Hash Not Created Here');
        }
        $parts = explode('$', $hash);
        if (count($parts) != 7) {
            throw new \InvalidArgumentException('Hash Not Created Here');
        }
        $signature  = $parts[2];
        $factory    = new KeyFactory();
        $hash       = $factory->getPBKDFFromSignature($signature);
        $iterations = $parts[3];
        $size       = $parts[4];
        return new static($hash, $size, $iterations);
    }

    /**
     * Build a new instance of the PBKDF password class
     *
     * @param PBKDF     $derivation The derivation class to use
     * @param int       $size       The size of hash to generate
     * @param int       $iterations The number of iterations to perform
     * @param Generator $generator  The Random Generator to use
     *
     * @return void;
     */
    public function __construct(
        \PasswordLib\Key\Derivation\PBKDF $derivation = null,
        $size = 40,
        $iterations = 5000,
        \PasswordLib\Random\Generator $generator = null
    ) {
        if (is_null($derivation)) {
            $derivation = new PBKDF2();
        }
        $this->derivation = $derivation;
        $this->size       = $size < 40 ? 40 : (int) $size;
        $this->iterations = $iterations > 0 ? (int) $iterations : 1;
        if (is_null($generator)) {
            $factory   = new RandomFactory;
            $generator = $factory->getMediumStrengthGenerator();
        }
        $this->generator = $generator;
    }

    /**
     * Create a password hash for a given plain text password
     *
     * @param string $password The password to hash
     *
     * @return string The formatted password hash
     */
    public function create($password) {
        $size     = $this->size - 8; // remove size of stored bits
        $saltSize = floor($size / 5);  //Use 20% of the size for the salt
        $hashSize = $size - $saltSize;
        $salt     = $this->generator->generate($saltSize);
        return $this->hash($password, $salt, $this->iterations, $hashSize);
    }

    /**
     * Verify a password hash against a given plain text password
     *
     * @param string $password The password to hash
     * @param string $hash     The supplied ahsh to validate
     *
     * @return boolean Does the password validate against the hash
     */
    public function verify($password, $hash) {
        if (strlen($hash) <= 16 || strpos($hash, '$') === false) {
            return false;
        }
        $parts = explode('$', $hash);
        if (count($parts) != 7) {
            return false;
        } elseif ($parts[2] != $this->derivation->getSignature()) {
            return false;
        }
        $iterations = $parts[3];
        $size       = $parts[4];
        $salt       = base64_decode($parts[5]);
        return $this->hash($password, $salt, $iterations, $size) == $hash;
    }

    /**
     * Perform the hashing of the password
     *
     * @param string $password   The plain text password to hash
     * @param string $salt       The 8 byte salt to use
     * @param int    $iterations The number of iterations to use
     *
     * @return string The hashed password
     */
    protected function hash($password, $salt, $iterations, $size) {
        $bit = $this->derivation->derive($password, $salt, $iterations, $size);
        $sig = $this->derivation->getSignature();
        $sig = '$pbkdf$' . $sig . '$' . $iterations . '$' . $size;
        return $sig . '$' . base64_encode($salt) . '$' . base64_encode($bit);
    }

}
<?php
/**
 * The PHPASS password hashing implementation
 *
 * Use this class to generate and validate PHPASS password hashes.
 *
 * PHP version 5.3
 *
 * @see        http://www.openwall.com/phpass/
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Password\Implementation;

use PasswordLib\Random\Factory as RandomFactory;

/**
 * The PHPASS password hashing implementation
 *
 * Use this class to generate and validate PHPASS password hashes.
 *
 * @see        http://www.openwall.com/phpass/
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class PHPASS implements \PasswordLib\Password\Password {

    /**
     * @var string The ITOA string to be used for base64 conversion
     */
    protected static $itoa = './0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ
                                abcdefghijklmnopqrstuvwxyz';

    /**
     * @var Generator The random generator to use for seeds
     */
    protected $generator = null;

    /**
     * This is the hash function to use.  To be overriden by child classes
     *
     * @var string The hash function to use for this instance
     */
    protected $hashFunction = 'md5';

    /**
     * @var int The number of iterations to perform (base 2)
     */
    protected $iterations = 10;

    /**
     * @var string The prefix for the generated hash
     */
    protected static $prefix = '$P$';

    /**
     * Determine if the hash was made with this method
     *
     * @param string $hash The hashed data to check
     *
     * @return boolean Was the hash created by this method
     */
    public static function detect($hash) {
        $prefix = preg_quote(static::$prefix, '/');
        return 1 == preg_match('/^'.$prefix.'[a-zA-Z0-9.\/]{31}$/', $hash);
    }

    /**
     * Return the prefix used by this hashing method
     *
     * @return string The prefix used
     */
    public static function getPrefix() {
        return static::$prefix;
    }

    /**
     * Initialize the password hasher by replacing away spaces in the itoa var
     *
     * @return void
     */
    public static function init() {
        static::$itoa = preg_replace('/\s/', '', static::$itoa);
    }

    /**
     * Load an instance of the class based upon the supplied hash
     *
     * @param string $hash The hash to load from
     *
     * @return Password the created instance
     * @throws InvalidArgumentException if the hash wasn't created here
     */
    public static function loadFromHash($hash) {
        if (!static::detect($hash)) {
            throw new \InvalidArgumentException('Hash Not Created Here');
        }
        $iterations = static::decodeIterations($hash[3]);
        return new static($iterations);
    }

    /**
     * Decode an ITOA encoded iteration count
     *
     * @param string $byte The character to decode
     *
     * @return int The decoded iteration count (base2)
     */
    protected static function decodeIterations($byte) {
        return strpos(static::$itoa, $byte);
    }

    /**
     * Encode a base2 iteration count to a base64 character
     *
     * @param int $number
     *
     * @return string The encoded character
     */
    protected static function encodeIterations($number) {
        return static::$itoa[$number];
    }

    /**
     * Build a new instance
     *
     * @param int       $iterations The number of times to iterate the hash
     * @param Generator $generator  The random generator to use for seeds
     * @param Factory   $factory    The hash factory to use for this instance
     *
     * @return void
     */
    public function __construct(
        $iterations = 8,
        \PasswordLib\Random\Generator $generator = null
    ) {
        if ($iterations > 30 || $iterations < 7) {
            throw new \InvalidArgumentException('Invalid Iteration Count Supplied');
        }
        $this->iterations = $iterations;
        if (is_null($generator)) {
            $random    = new RandomFactory();
            $generator = $random->getMediumStrengthGenerator();
        }
        $this->generator = $generator;
    }

    /**
     * Create a password hash for a given plain text password
     *
     * @param string $password The password to hash
     *
     * @return string The formatted password hash
     */
    public function create($password) {
        $salt   = $this->to64($this->generator->generate(6));
        $prefix = static::encodeIterations($this->iterations) . $salt;
        return static::$prefix . $prefix . $this->hash($password, $salt);
    }

    /**
     * Verify a password hash against a given plain text password
     *
     * @param string $password The password to hash
     * @param string $hash     The supplied ahsh to validate
     *
     * @return boolean Does the password validate against the hash
     */
    public function verify($password, $hash) {
        if (!static::detect($hash)) {
            throw new \InvalidArgumentException(
                'The hash was not created here, we cannot verify it'
            );
        }
        $iterations = static::decodeIterations($hash[3]);
        if ($iterations != $this->iterations) {
            throw new \InvalidArgumentException(
                'Iteration Count Mismatch, Bailing'
            );
        }
        $salt = substr($hash, 4, 8);
        $hash = substr($hash, 12);
        $test = $this->hash($password, $salt);
        return $test == $hash;
    }

    /**
     * Execute the hash function with proper iterations
     *
     * @param string $password The password to hash
     * @param string $salt     The salt to use to hash
     *
     * @return string The base64 encoded generated hash
     */
    protected function hash($password, $salt) {
        $count = 1 << $this->iterations;
        $hash  = hash($this->hashFunction, $salt . $password, true);
        do {
            $hash = hash($this->hashFunction, $hash . $password, true);
        } while (--$count);
        return $this->to64($hash);
    }

    /**
     * Convert the input number to a base64 number of the specified size
     *
     * @param int $input The number to convert
     *
     * @return string The converted representation
     */
    protected function to64($input) {
        $output = '';
        $count  = strlen($input);
        $ictr   = 0;
        do {
            $value   = ord($input[$ictr++]);
            $output .= static::$itoa[$value & 0x3f];
            if ($ictr < $count) {
                $value |= ord($input[$ictr]) << 8;
            }
            $output .= static::$itoa[($value >> 6) & 0x3f];
            if ($ictr++ >= $count) {
                break;
            }
            if ($ictr < $count) {
                $value |= ord($input[$ictr]) << 16;
            }
            $output .= static::$itoa[($value >> 12) & 0x3f];
            if ($ictr++ < $count) {
                $output .= static::$itoa[($value >> 18) & 0x3f];
            }
        } while ($ictr < $count);
        return $output;
    }

}

PHPASS::init();<?php
/**
 * The PHPBB password hashing implementation
 *
 * Use this class to generate and validate PHPBB password hashes.
 *
 * PHP version 5.3
 *
 * @see        http://www.openwall.com/phpass/
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Password\Implementation;

use PasswordLib\Random\Factory as RandomFactory;

/**
 * The PHPBB password hashing implementation
 *
 * Use this class to generate and validate PHPBB password hashes.
 *
 * @see        http://www.openwall.com/phpass/
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class PHPBB extends PHPASS {

    /**
     * @var string The prefix for the generated hash
     */
    protected static $prefix = '$H$';

}<?php
/**
 * The Blowfish password hashing implementation
 *
 * Use this class to generate and validate Blowfish password hashes.
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Password\Implementation;

use PasswordLib\Random\Factory as RandomFactory;

/**
 * The Blowfish password hashing implementation
 *
 * Use this class to generate and validate Blowfish password hashes.
 *
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class SHA256 extends Crypt {

    protected $saltLen = 16;

    /**
     * Determine if the hash was made with this method
     *
     * @param string $hash The hashed data to check
     *
     * @return boolean Was the hash created by this method
     */
    public static function detect($hash) {
        $regex = '#^\$5\$(rounds=\d{4,9}\$)?[a-zA-Z0-9./]{16}\$[a-zA-Z0-9./]{56}$#';
        return 1 == preg_match($regex, $hash);
    }

    /**
     * Return the prefix used by this hashing method
     *
     * @return string The prefix used
     */
    public static function getPrefix() {
        return '$5$';
    }

    protected function generateSalt() {
        $salt = parent::generateSalt();
        return '$5$rounds=' . $this->iterations . '$' . $salt;
    }

}<?php
/**
 * The Blowfish password hashing implementation
 *
 * Use this class to generate and validate Blowfish password hashes.
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Password\Implementation;

use PasswordLib\Random\Factory as RandomFactory;

/**
 * The Blowfish password hashing implementation
 *
 * Use this class to generate and validate Blowfish password hashes.
 *
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class SHA512 extends Crypt {

    protected $saltLen = 16;

    /**
     * Determine if the hash was made with this method
     *
     * @param string $hash The hashed data to check
     *
     * @return boolean Was the hash created by this method
     */
    public static function detect($hash) {
        $regex = '#^\$6\$(rounds=\d{4,9}\$)?[a-zA-Z0-9./]{16}\$[a-zA-Z0-9./]{56}$#';
        return 1 == preg_match($regex, $hash);
    }

    /**
     * Return the prefix used by this hashing method
     *
     * @return string The prefix used
     */
    public static function getPrefix() {
        return '$6$';
    }

    protected function generateSalt() {
        $salt = parent::generateSalt();
        return '$6$rounds=' . $this->iterations . '$' . $salt;
    }

}<?php
/**
 * The core password hash interface
 *
 * All pasword implementations must implement this interface
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Password
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Password;

/**
 * The core password key interface
 *
 * All pasword implementations must implement this interface
 *
 * @category   PHPPasswordLib
 * @package    Password
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @codeCoverageIgnore
 */
interface Password {

    /**
     * Determine if the hash was made with this method
     *
     * @param string $hash The hashed data to check
     *
     * @return boolean Was the hash created by this method
     */
    public static function detect($hash);

    /**
     * Return the prefix used by this hashing method
     *
     * @return string The prefix used
     */
    public static function getPrefix();

    /**
     * Load an instance of the class based upon the supplied hash
     *
     * @param string $hash The hash to load from
     *
     * @return Password the created instance
     */
    public static function loadFromHash($hash);

    /**
     * Create a password hash for a given plain text password
     *
     * @param string $password The password to hash
     *
     * @return string The formatted password hash
     */
    public function create($password);

    /**
     * Verify a password hash against a given plain text password
     *
     * @param string $password The password to hash
     * @param string $hash     The supplied ahsh to validate
     *
     * @return boolean Does the password validate against the hash
     */
    public function verify($password, $hash);

}
<?php
/**
 * A core wrapper class to provide easy access to all of the cryptographic functions
 * contained within the library
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Core
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib;

/**
 * The autoloader class will be autoloaded at this point even if another autoloader
 * is in use.  So if it does not exist at this point, we know we must bootstrap
 * the libraries.
 */
if (!class_exists('\\PasswordLib\Core\AutoLoader', true)) {
    require_once 'bootstrap.php';
}

use PasswordLib\Password\Factory as PasswordFactory;
use PasswordLib\Random\Factory as RandomFactory;

/**
 * A core wrapper class to provide easy access to some of the cryptographic
 * functions contained within the library
 *
 * @category   PHPPasswordLib
 * @package    Core
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class PasswordLib {

    /**
     * Create a password hash from the supplied password and generator prefix
     *
     * @param string $password The password to hash
     * @param string $prefix   The prefix of the hashing function
     *
     * @return string The generated password hash
     */
    public function createPasswordHash($password, $prefix = '$2a$') {
        $factory = new PasswordFactory();
        return $factory->createHash($password, $prefix);
    }

    /**
     * Verify a password against a supplied password hash
     *
     * @param string $password The supplied password to attempt to verify
     * @param string $hash     The valid hash to verify against
     *
     * @return boolean Is the password valid
     */
    public function verifyPasswordHash($password, $hash) {
        $factory = new PasswordFactory();
        return $factory->verifyHash($password, $hash);
    }

    /**
     * Get a random element from the array
     *
     * @param array $sourceArray The source array to fetch from
     *
     * @return mixed A random element from the source array
     */
    public function getRandomArrayElement(array $sourceArray) {
        $keys       = array_keys($sourceArray);
        $upperBound = count($keys);
        $factory    = new RandomFactory;
        $generator  = $factory->getMediumStrengthGenerator();
        $key        = $generator->generateInt(0, $upperBound - 1);
        return $sourceArray[$keys[$key]];
    }

    /**
     * Generate a random full-byte string (characters 0 - 255)
     *
     * @param int $size The length of the generated string
     *
     * @return string The generated string
     */
    public function getRandomBytes($size) {
        $factory   = new RandomFactory;
        $generator = $factory->getMediumStrengthGenerator();
        return $generator->generate($size);
    }

    /**
     * Get a random number between the supplied boundaries
     *
     * @param int $min The smallest bound the generated number can be
     * @param int $max The upper bound on the generated number
     *
     * @return int The generated random number
     */
    public function getRandomNumber($min = 0, $max = PHP_INT_MAX) {
        $factory   = new RandomFactory;
        $generator = $factory->getMediumStrengthGenerator();
        return $generator->generateInt($min, $max);
    }

    /**
     * Generate a random token using base64 characters (a-zA-Z0-9./)
     *
     * @param int $size The number of characters in the generated output
     *
     * @return string The generated token string
     */
    public function getRandomToken($size) {
        $factory   = new RandomFactory;
        $generator = $factory->getMediumStrengthGenerator();
        return $generator->generateString($size);
    }

    /**
     * Shuffle an array.  This will preserve key => value relationships, and return
     * a new array that has been randomized in order.
     *
     * To get keys randomized, simply pass the result through array_values()...
     *
     * @param array $array The input array to randomize
     *
     * @return array The suffled array
     */
    public function shuffleArray(array $array) {
        $factory   = new RandomFactory;
        $generator = $factory->getMediumStrengthGenerator();
        $result    = array();
        $values    = array_values($array);
        $keys      = array_keys($array);
        $max       = count($array);
        for ($i = $max - 1; $i >= 0; $i--) {
            $int                 = $generator->generateInt(0, $i);
            $result[$keys[$int]] = $values[$int];
            unset($keys[$int], $values[$int]);
            $keys   = array_values($keys);
            $values = array_values($values);
        }
        return $result;
    }

    /**
     * Shuffle a string and return the randomized string
     *
     * @param string $string The string to randomize
     *
     * @return string The shuffled string
     */
    public function shuffleString($string) {
        $factory = new RandomFactory;
        $array   = str_split($string);
        $result  = $this->shuffleArray($array);
        return implode('', $result);
    }

}<?php
/**
 * An abstract mixer to implement a common mixing strategy
 *
 * PHP version 5.3
 *
 * @category  PHPPasswordLib
 * @package   Random
 * @author    Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright 2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version   Build ${version.number}
 */

namespace PasswordLib\Random;

/**
 * An abstract mixer to implement a common mixing strategy
 *
 * @see      http://tools.ietf.org/html/rfc4086#section-5.2
 * @category PHPPasswordLib
 * @package  Random
 * @author   Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
abstract class AbstractMixer implements \PasswordLib\Random\Mixer {

    /**
     * Get the block size (the size of the individual blocks used for the mixing)
     * 
     * @return int The block size
     */
    abstract protected function getPartSize();

    /**
     * Mix 2 parts together using one method
     *
     * @param string $part1 The first part to mix
     * @param string $part2 The second part to mix
     * 
     * @return string The mixed data
     */
    abstract protected function mixParts1($part1, $part2);

    /**
     * Mix 2 parts together using another different method
     *
     * @param string $part1 The first part to mix
     * @param string $part2 The second part to mix
     * 
     * @return string The mixed data
     */
    abstract protected function mixParts2($part1, $part2);

    /**
     * Mix the provided array of strings into a single output of the same size
     *
     * All elements of the array should be the same size.
     *
     * @param array $parts The parts to be mixed
     *
     * @return string The mixed result
     */
    public function mix(array $parts) {
        if (empty($parts)) {
            return '';
        }
        $len        = strlen($parts[0]);
        $parts      = $this->normalizeParts($parts);
        $stringSize = count($parts[0]);
        $partsSize  = count($parts);
        $result     = '';
        $offset     = 0;
        for ($i = 0; $i < $stringSize; $i++) {
            $stub = $parts[$offset][$i];
            for ($j = 1; $j < $partsSize; $j++) {
                $newKey = $parts[($j + $offset) % $partsSize][$i];
                //Alternately mix the output for each source
                if ($j % 2 == 1) {
                    $stub ^= $this->mixParts1($stub, $newKey);
                } else {
                    $stub ^= $this->mixParts2($stub, $newKey);
                }
            }
            $result .= $stub;
            $offset  = ($offset + 1) % $partsSize;
        }
        return substr($result, 0, $len);
    }

    /**
     * Normalize the part array and split it block part size.  
     * 
     * This will make all parts the same length and a multiple
     * of the part size
     *
     * @param array $parts The parts to normalize
     * 
     * @return array The normalized and split parts
     */
    protected function normalizeParts(array $parts) {
        $blockSize = $this->getPartSize();
        $callback  = function($value) {
            return strlen($value);
        };
        $maxSize = max(array_map($callback, $parts));
        if ($maxSize % $blockSize != 0) {
            $maxSize += $blockSize - ($maxSize % $blockSize);
        }
        foreach ($parts as &$part) {
            $part = str_pad($part, $maxSize, chr(0));
            $part = str_split($part, $blockSize);
        }
        return $parts;
    }
}
<?php
/**
 * The Random Factory
 *
 * Use this factory to instantiate random number generators, sources and mixers.
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Random
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Random;

use PasswordLib\Core\Strength;

/**
 * The Random Factory
 *
 * Use this factory to instantiate random number generators, sources and mixers.
 *
 * @category   PHPPasswordLib
 * @package    Random
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class Factory extends \PasswordLib\Core\AbstractFactory {

    /**
     * @var array A list of available random number mixing strategies
     */
    protected $mixers = array();

    /**
     * @var array A list of available random number sources
     */
    protected $sources = array();

    /**
     * Build a new instance of the factory, loading core mixers and sources
     *
     * @return void
     */
    public function __construct() {
        $this->loadMixers();
        $this->loadSources();
    }

    /**
     * Get a generator for the requested strength
     *
     * @param Strength $strength The requested strength of the random number
     *
     * @return Generator The instantiated generator
     * @throws RuntimeException If an appropriate mixing strategy isn't found
     */
    public function getGenerator(\PasswordLib\Core\Strength $strength) {
        $sources    = $this->getSources();
        $newSources = array();
        foreach ($sources as $source) {
            if ($strength->compare($source::getStrength()) <= 0) {
                $newSources[] = new $source;
            }
        }
        $mixer = $this->findMixer($strength);
        return new Generator($newSources, $mixer);
    }

    /**
     * Get a high strength random number generator
     *
     * High Strength keys should ONLY be used for generating extremely strong
     * cryptographic keys.  Generating them is very resource intensive and may
     * take several minutes or more depending on the requested size.
     *
     * @return Generator The instantiated generator
     */
    public function getHighStrengthGenerator() {
        return $this->getGenerator(new Strength(Strength::HIGH));
    }

    /**
     * Get a low strength random number generator
     *
     * Low Strength should be used anywhere that random strings are needed in a
     * non-cryptographical setting.  They are not strong enough to be used as
     * keys or salts.  They are however useful for one-time use tokens.
     *
     * @return Generator The instantiated generator
     */
    public function getLowStrengthGenerator() {
        return $this->getGenerator(new Strength(Strength::LOW));
    }

    /**
     * Get a medium strength random number generator
     *
     * Medium Strength should be used for most needs of a cryptographic nature.
     * They are strong enough to be used as keys and salts.  However, they do
     * take some time and resources to generate, so they should not be over-used
     *
     * @return Generator The instantiated generator
     */
    public function getMediumStrengthGenerator() {
        return $this->getGenerator(new Strength(Strength::MEDIUM));
    }

    /**
     * Get all loaded mixing strategies
     *
     * @return array An array of mixers
     */
    public function getMixers() {
        return $this->mixers;
    }

    /**
     * Get all loaded random number sources
     *
     * @return array An array of sources
     */
    public function getSources() {
        return $this->sources;
    }

    /**
     * Register a mixing strategy for this factory instance
     *
     * @param string $name  The name of the stategy
     * @param string $class The class name of the implementation
     *
     * @return Factory $this The current factory instance
     */
    public function registerMixer($name, $class) {
        $this->registerType(
            'mixers',
            __NAMESPACE__ . '\\Mixer',
            $name,
            $class
        );
        return $this;
    }

    /**
     * Register a random number source for this factory instance
     *
     * Note that this class must implement the Source interface
     *
     * @param string $name  The name of the stategy
     * @param string $class The class name of the implementation
     *
     * @return Factory $this The current factory instance
     */
    public function registerSource($name, $class) {
        $this->registerType(
            'sources',
            __NAMESPACE__ . '\\Source',
            $name,
            $class
        );
        return $this;
    }

    /**
     * Find a mixer based upon the requested strength
     *
     * @param Strength $strength The strength mixer to find
     *
     * @return Mixer The found mixer
     * @throws RuntimeException if a valid mixer cannot be found
     */
    protected function findMixer(\PasswordLib\Core\Strength $strength) {
        $newMixer = null;
        $fallback = null;
        foreach ($this->getMixers() as $mixer) {
            if ($strength->compare($mixer::getStrength()) == 0) {
                $newMixer = new $mixer;
            } elseif ($strength->compare($mixer::getStrength()) == 1) {
                $fallback = new $mixer;
            }
        }
        if (is_null($newMixer)) {
            if (is_null($fallback)) {
                throw new \RuntimeException('Could not find mixer');
            }
            return $fallback;
        }
        return $newMixer;
    }

    /**
     * Load all core mixing strategies
     *
     * @return void
     */
    protected function loadMixers() {
        $this->loadFiles(
            __DIR__ . '/Mixer',
            __NAMESPACE__ . '\\Mixer\\',
            array($this, 'registerMixer')
        );
    }

    /**
     * Load all core random number sources
     *
     * @return void
     */
    protected function loadSources() {
        $this->loadFiles(
            __DIR__ . '/Source',
            __NAMESPACE__ . '\\Source\\',
            array($this, 'registerSource')
        );
    }

}

<?php
/**
 * The Random Number Generator Class
 *
 * Use this factory to generate cryptographic quality random numbers (strings)
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Random
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @author     Timo Hamina
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Random;

use PasswordLib\Core\BaseConverter;

/**
 * The Random Number Generator Class
 *
 * Use this factory to generate cryptographic quality random numbers (strings)
 *
 * @category   PHPPasswordLib
 * @package    Random
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @author     Timo Hamina
 */
class Generator {

    /**
     * @var Mixer The mixing strategy to use for this generator instance
     */
    protected $mixer = null;

    /**
     * @var array An array of random number sources to use for this generator
     */
    protected $sources = array();

    /**
     * Build a new instance of the generator
     *
     * @param array $sources An array of random data sources to use
     * @param Mixer $mixer   The mixing strategy to use for this generator
     */
    public function __construct(array $sources, Mixer $mixer) {
        foreach ($sources as $source) {
            $this->addSource($source);
        }
        $this->mixer = $mixer;
    }

    /**
     * Add a random number source to the generator
     *
     * @param Source $source The random number source to add
     *
     * @return Generator $this The current generator instance
     */
    public function addSource(Source $source) {
        $this->sources[] = $source;
        return $this;
    }

    /**
     * Generate a random number (string) of the requested size
     *
     * @param int $size The size of the requested random number
     *
     * @return string The generated random number (string)
     */
    public function generate($size) {
        $seeds = array();
        foreach ($this->sources as $source) {
            $seeds[] = $source->generate($size);
        }
        return $this->mixer->mix($seeds);
    }

    /**
     * Generate a random integer with the given range
     *
     * @param int $min The lower bound of the range to generate
     * @param int $max The upper bound of the range to generate
     *
     * @return int The generated random number within the range
     */
    public function generateInt($min = 0, $max = PHP_INT_MAX) {
        $tmp   = (int) max($max, $min);
        $min   = (int) min($max, $min);
        $max   = $tmp;
        $range = $max - $min;
        if ($range == 0) {
            return $max;
        } elseif ($range > PHP_INT_MAX || is_float($range)) {
            /**
             * This works, because PHP will auto-convert it to a float at this point,
             * But on 64 bit systems, the float won't have enough precision to
             * actually store the difference, so we need to check if it's a float
             * and hence auto-converted...
             */
            throw new \RangeException(
                'The supplied range is too great to generate'
            );
        }

        $bits  = (int) floor(log($range, 2) + 1);
        $bytes = (int) max(ceil($bits / 8), 1);
        $mask  = (int) (pow(2, $bits) - 1);
        /**
         * The mask is a better way of dropping unused bits.  Basically what it does
         * is to set all the bits in the mask to 1 that we may need.  Since the max
         * range is PHP_INT_MAX, we will never need negative numbers (which would
         * have the MSB set on the max int possible to generate).  Therefore we
         * can just mask that away.  Since pow returns a float, we need to cast
         * it back to an int so the mask will work.
         *
         * On a 64 bit platform, that means that PHP_INT_MAX is 2^63 - 1.  Which
         * is also the mask if 63 bits are needed (by the log(range, 2) call).
         * So if the computed result is negative (meaning the 64th bit is set), the
         * mask will correct that.
         *
         * This turns out to be slightly better than the shift as we don't need to
         * worry about "fixing" negative values.
         */
        do {
            $test   = $this->generate($bytes);
            $result = hexdec(bin2hex($test)) & $mask;
        } while ($result > $range);
        return $result + $min;
    }

    /**
     * Generate a random string of specified length.
     *
     * This uses the supplied character list for generating the new result
     * string.
     *
     * @param int    $length     The length of the generated string
     * @param string $characters An optional list of characters to use
     *
     * @return string The generated random string
     */
    public function generateString($length, $characters = '') {
        if ($length == 0 || strlen($characters) == 1) {
            return '';
        } elseif (empty($characters)) {
            // Default to base 64
            $characters = '0123456789abcdefghijklmnopqrstuvwxyz' .
                          'ABCDEFGHIJKLMNOPQRSTUVWXYZ./';
        }
        //determine how many bytes to generate
        $bytes  = ceil($length * floor(log(strlen($characters), 2) + 1) / 8);
        $rand   = $this->generate($bytes);
        $result = BaseConverter::convertFromBinary($rand, $characters);
        if (strlen($result) < $length) {
            $result = str_pad($result, $length, $characters[0], STR_PAD_LEFT);
        } else {
            $result = substr($result, 0, $length);
        }
        return $result;
    }

    /**
     * Get the Mixer used for this instance
     *
     * @return Mixer the current mixer
     */
    public function getMixer() {
        return $this->mixer;
    }

    /**
     * Get the Sources used for this instance
     *
     * @return Source[] the current mixer
     */
    public function getSources() {
        return $this->sources;
    }

}
<?php
/**
 * The Hash medium strength mixer class
 *
 * This class implements a mixer based upon the recommendations in RFC 4086
 * section 5.2
 *
 * PHP version 5.3
 *
 * @see        http://tools.ietf.org/html/rfc4086#section-5.2
 * @category   PHPPasswordLib
 * @package    Random
 * @subpackage Mixer
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Random\Mixer;

use \PasswordLib\Core\Strength;

/**
 * The Hash medium strength mixer class
 *
 * This class implements a mixer based upon the recommendations in RFC 4086
 * section 5.2
 *
 * @see        http://tools.ietf.org/html/rfc4086#section-5.2
 * @category   PHPPasswordLib
 * @package    Random
 * @subpackage Mixer
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class Hash extends \PasswordLib\Random\AbstractMixer {

    /**
     * @var string The hash instance to use
     */
    protected $hash = null;

    /**
     * Build the hash mixer
     *
     * @param string $hash The hash instance to use (defaults to sha512)
     *
     * @return void
     */
    public function __construct($hash = 'sha512') {
        $this->hash = $hash;
    }

    /**
     * Return an instance of Strength indicating the strength of the source
     *
     * @return Strength An instance of one of the strength classes
     */
    public static function getStrength() {
        return new Strength(Strength::MEDIUM);
    }

    /**
     * Test to see if the mixer is available
     *
     * @return boolean If the mixer is available on the system
     */
    public static function test() {
        return true;
    }

    /**
     * Get the block size (the size of the individual blocks used for the mixing)
     *
     * @return int The block size
     */
    protected function getPartSize() {
        return strlen(hash($this->hash, '', true));
    }

    /**
     * Mix 2 parts together using one method
     *
     * @param string $part1 The first part to mix
     * @param string $part2 The second part to mix
     *
     * @return string The mixed data
     */
    protected function mixParts1($part1, $part2) {
        return hash_hmac($this->hash, $part1, $part2, true);
    }

    /**
     * Mix 2 parts together using another different method
     *
     * @param string $part1 The first part to mix
     * @param string $part2 The second part to mix
     *
     * @return string The mixed data
     */
    protected function mixParts2($part1, $part2) {
        return hash_hmac($this->hash, $part2, $part1, true);
    }

}
<?php
/**
 * The Mixer strategy interface.
 *
 * All mixing strategies must implement this interface
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Random
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Random;

/**
 * The Mixer strategy interface.
 *
 * All mixing strategies must implement this interface
 *
 * @category   PHPPasswordLib
 * @package    Random
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @codeCoverageIgnore
 */
interface Mixer {

    /**
     * Return an instance of Strength indicating the strength of the mixer
     *
     * @return Strength An instance of one of the strength classes
     */
    public static function getStrength();

    /**
     * Test to see if the mixer is available
     *
     * @return boolean If the mixer is available on the system
     */
    public static function test();

    /**
     * Mix the provided array of strings into a single output of the same size
     *
     * All elements of the array should be the same size.
     *
     * @param array $parts The parts to be mixed
     *
     * @return string The mixed result
     */
    public function mix(array $parts);

}
<?php
/**
 * The Capicom Random Number Source
 *
 * This uses the Windows CapiCom Com object to generate random numbers
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Random
 * @subpackage Source
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Random\Source;

use PasswordLib\Core\Strength;

/**
 * The Capicom Random Number Source
 *
 * This uses the Windows CapiCom Com object to generate random numbers
 *
 * @category   PHPPasswordLib
 * @package    Random
 * @subpackage Source
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @codeCoverageIgnore
 */
class CAPICOM implements \PasswordLib\Random\Source {

    /**
     * Return an instance of Strength indicating the strength of the source
     *
     * @return Strength An instance of one of the strength classes
     */
    public static function getStrength() {
        return new Strength(Strength::MEDIUM);
    }

    /**
     * Generate a random string of the specified size
     *
     * @param int $size The size of the requested random string
     *
     * @return string A string of the requested size
     */
    public function generate($size) {
        if (!class_exists('\\COM', false)) {
            return str_repeat(chr(0), $size);
        }
        try {
            $util = new \COM('CAPICOM.Utilities.1');
            $data = base64_decode($util->GetRandom($size, 0));
            return str_pad($data, $size, chr(0));
        } catch (\Exception $e) {
            unset($e);
            return str_repeat(chr(0), $size);
        }
    }

}
<?php
/**
 * The Microtime Random Number Source
 *
 * This uses the current micro-second (looped several times) for a **very** weak
 * random number source.  This is only useful when combined with several other
 * stronger sources
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Random
 * @subpackage Source
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Random\Source;

use PasswordLib\Core\Strength;

/**
 * The Microtime Random Number Source
 *
 * This uses the current micro-second (looped several times) for a **very** weak
 * random number source.  This is only useful when combined with several other
 * stronger sources
 *
 * @category   PHPPasswordLib
 * @package    Random
 * @subpackage Source
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @codeCoverageIgnore
 */
class MicroTime implements \PasswordLib\Random\Source {

    /**
     * Return an instance of Strength indicating the strength of the source
     *
     * @return Strength An instance of one of the strength classes
     */
    public static function getStrength() {
        return new Strength(Strength::VERYLOW);
    }

    /**
     * Generate a random string of the specified size
     *
     * @param int $size The size of the requested random string
     *
     * @return string A string of the requested size
     */
    public function generate($size) {
        $result = '';
        $seed   = microtime() . memory_get_usage() . getmypid();
        for ($i = 0; $i < $size; $i++) {
            $seed    = md5(microtime() . $seed, true);
            $result .= $seed[$i % 16];
        }
        return $result;
    }

}
<?php
/**
 * The MTRand Random Number Source
 *
 * This source generates low strength random numbers by using the internal
 * mt_rand() function.  By itself it is quite weak.  However when combined with
 * other sources it does provide significant benefit.
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Random
 * @subpackage Source
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Random\Source;

use PasswordLib\Core\Strength;

/**
 * The MTRand Random Number Source
 *
 * This source generates low strength random numbers by using the internal
 * mt_rand() function.  By itself it is quite weak.  However when combined with
 * other sources it does provide significant benefit.
 *
 * @category   PHPPasswordLib
 * @package    Random
 * @subpackage Source
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @codeCoverageIgnore
 */
class MTRand implements \PasswordLib\Random\Source {

    /**
     * Return an instance of Strength indicating the strength of the source
     *
     * @return Strength An instance of one of the strength classes
     */
    public static function getStrength() {
        // Detect if Suhosin Hardened PHP patch is applied
        if (defined('S_ALL')) {
            return new Strength(Strength::MEDIUM);
        } else {
            return new Strength(Strength::LOW);
        }
    }

    /**
     * Generate a random string of the specified size
     *
     * @param int $size The size of the requested random string
     *
     * @return string A string of the requested size
     */
    public function generate($size) {
        $result = '';
        for ($i = 0; $i < $size; $i++) {
            $result .= chr((mt_rand() ^ mt_rand()) % 256);
        }
        return $result;
    }

}
<?php
/**
 * The Rand Random Number Source
 *
 * This source generates low strength random numbers by using the internal
 * rand() function.  By itself it is quite weak.  However when combined with
 * other sources it does provide significant benefit.
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Random
 * @subpackage Source
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Random\Source;

use PasswordLib\Core\Strength;

/**
 * The Rand Random Number Source
 *
 * This source generates low strength random numbers by using the internal
 * rand() function.  By itself it is quite weak.  However when combined with
 * other sources it does provide significant benefit.
 *
 * @category   PHPPasswordLib
 * @package    Random
 * @subpackage Source
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @codeCoverageIgnore
 */
class Rand implements \PasswordLib\Random\Source {

    /**
     * Return an instance of Strength indicating the strength of the source
     *
     * @return Strength An instance of one of the strength classes
     */
    public static function getStrength() {
        // Detect if Suhosin Hardened PHP patch is applied
        if (defined('S_ALL')) {
            return new Strength(Strength::LOW);
        } else {
            return new Strength(Strength::VERYLOW);
        }
    }

    /**
     * Generate a random string of the specified size
     *
     * @param int $size The size of the requested random string
     *
     * @return string A string of the requested size
     */
    public function generate($size) {
        $result = '';
        for ($i = 0; $i < $size; $i++) {
            $result .= chr((rand() ^ rand()) % 256);
        }
        return $result;
    }

}
<?php
/**
 * The UniqID Random Number Source
 *
 * This uses the internal `uniqid()` function to generate low strength random
 * numbers.
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Random
 * @subpackage Source
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Random\Source;

use PasswordLib\Core\Strength;

/**
 * The UniqID Random Number Source
 *
 * This uses the internal `uniqid()` function to generate low strength random
 * numbers.
 *
 * @category   PHPPasswordLib
 * @package    Random
 * @subpackage Source
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @codeCoverageIgnore
 */
class UniqID implements \PasswordLib\Random\Source {

    /**
     * Return an instance of Strength indicating the strength of the source
     *
     * @return Strength An instance of one of the strength classes
     */
    public static function getStrength() {
        return new Strength(Strength::LOW);
    }

    /**
     * Generate a random string of the specified size
     *
     * @param int $size The size of the requested random string
     *
     * @return string A string of the requested size
     */
    public function generate($size) {
        $result = '';
        while (strlen($result) < $size) {
            $result = uniqid($result, true);
        }
        return substr($result, 0, $size);
    }

}
<?php
/**
 * The URandom Random Number Source
 *
 * This uses the *nix /dev/urandom device to generate medium strength numbers
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Random
 * @subpackage Source
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Random\Source;

use PasswordLib\Core\Strength;

/**
 * The URandom Random Number Source
 *
 * This uses the *nix /dev/urandom device to generate medium strength numbers
 *
 * @category   PHPPasswordLib
 * @package    Random
 * @subpackage Source
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @codeCoverageIgnore
 */
class URandom implements \PasswordLib\Random\Source {

    /**
     * @var string The file to read from
     */
    protected $file = '/dev/urandom';

    /**
     * Return an instance of Strength indicating the strength of the source
     *
     * @return Strength An instance of one of the strength classes
     */
    public static function getStrength() {
        return new Strength(Strength::MEDIUM);
    }

    /**
     * Generate a random string of the specified size
     *
     * @param int $size The size of the requested random string
     *
     * @return string A string of the requested size
     */
    public function generate($size) {
        if ($size == 0 || !file_exists($this->file)) {
            return str_repeat(chr(0), $size);
        }
        $file = fopen($this->file, 'rb');
        if (!$file) {
            return str_repeat(chr(0), $size);
        }
        if (function_exists('stream_set_read_buffer')) {
            stream_set_read_buffer($file, 0);
        }
        $result = fread($file, $size);
        fclose($file);
        return $result;
    }

}
<?php
/**
 * The Random Number Source interface.
 *
 * All random number sources must implement this interface
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Random
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build ${version.number}
 */

namespace PasswordLib\Random;

/**
 * The Random Number Source interface.
 *
 * All random number sources must implement this interface
 *
 * @category   PHPPasswordLib
 * @package    Random
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @codeCoverageIgnore
 */
interface Source {

    /**
     * Return an instance of Strength indicating the strength of the source
     *
     * @return Strength An instance of one of the strength classes
     */
    public static function getStrength();

    /**
     * Generate a random string of the specified size
     *
     * Note: If the source fails to generate enough data, the result must be
     * padded to the requested length.
     *
     * @param int $size The size of the requested random string
     *
     * @return string A string of the requested size
     */
    public function generate($size);

}
4Ý�b�J��#K��\*�h   GBMB