<?php
/**
 * Generated by build/gen_test on 2014-02-26 at 05:34:15.
 */
require_once('src/lightncandy.php');

class LightnCandyTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers LightnCandy::_fileext
     */
    public function testOn__fileext() {
        $method = new ReflectionMethod('LightnCandy', '_fileext');
        $method->setAccessible(true);
        $this->assertEquals(Array('.tmpl'), $method->invoke(null,
            Array()
        ));
        $this->assertEquals(Array('test'), $method->invoke(null,
            Array('fileext' => 'test')
        ));
        $this->assertEquals(Array('test1'), $method->invoke(null,
            Array('fileext' => Array('test1'))
        ));
        $this->assertEquals(Array('test2', 'test3'), $method->invoke(null,
            Array('fileext' => Array('test2', 'test3'))
        ));
    }
    /**
     * @covers LightnCandy::_basedir
     */
    public function testOn__basedir() {
        $method = new ReflectionMethod('LightnCandy', '_basedir');
        $method->setAccessible(true);
        $this->assertEquals(Array(getcwd()), $method->invoke(null,
            Array()
        ));
        $this->assertEquals(Array(getcwd()), $method->invoke(null,
            Array('basedir' => 0)
        ));
        $this->assertEquals(Array(getcwd()), $method->invoke(null,
            Array('basedir' => '')
        ));
        $this->assertEquals(Array(getcwd()), $method->invoke(null,
            Array('basedir' => Array())
        ));
        $this->assertEquals(Array('src'), $method->invoke(null,
            Array('basedir' => Array('src'))
        ));
        $this->assertEquals(Array(getcwd()), $method->invoke(null,
            Array('basedir' => Array('*dir*not*found'))
        ));
        $this->assertEquals(Array('src'), $method->invoke(null,
            Array('basedir' => Array('src', 'dir*not*found'))
        ));
        $this->assertEquals(Array('src', 'build'), $method->invoke(null,
            Array('basedir' => Array('src', 'build'))
        ));
    }
    /**
     * @covers LightnCandy::getPHPCode
     */
    public function testOn_getPHPCode() {
        $method = new ReflectionMethod('LightnCandy', 'getPHPCode');
        $method->setAccessible(true);
        $this->assertEquals('function($a) {return;}', $method->invoke(null,
            function ($a) {return;}
        ));
        $this->assertEquals('function($a) {return;}', $method->invoke(null,
             	function ($a) {return;} 
        ));
    }
    /**
     * @covers LightnCandy::_error
     */
    public function testOn__error() {
        $method = new ReflectionMethod('LightnCandy', '_error');
        $method->setAccessible(true);
        $this->assertEquals(true, $method->invoke(null,
            Array('level' => 1, 'stack' => Array('X'), 'flags' => Array('errorlog' => 0, 'exception' => 0), 'error' => Array())
        ));
        $this->assertEquals(false, $method->invoke(null,
            Array('level' => 0, 'error' => Array())
        ));
        $this->assertEquals(true, $method->invoke(null,
            Array('level' => 0, 'error' => Array('some error'), 'flags' => Array('errorlog' => 0, 'exception' => 0))
        ));
    }
    /**
     * @covers LightnCandy::_on
     */
    public function testOn__on() {
        $method = new ReflectionMethod('LightnCandy', '_on');
        $method->setAccessible(true);
        $this->assertEquals('true', $method->invoke(null,
            1
        ));
        $this->assertEquals('true', $method->invoke(null,
            999
        ));
        $this->assertEquals('false', $method->invoke(null,
            0
        ));
        $this->assertEquals('false', $method->invoke(null,
            -1
        ));
    }
    /**
     * @covers LightnCandy::_fn
     */
    public function testOn__fn() {
        $method = new ReflectionMethod('LightnCandy', '_fn');
        $method->setAccessible(true);
        $this->assertEquals('LCRun::test', $method->invoke(null,
            Array('flags' => Array('standalone' => 0)), 'test'
        ));
        $this->assertEquals('LCRun::test2', $method->invoke(null,
            Array('flags' => Array('standalone' => 0)), 'test2'
        ));
        $this->assertEquals("\$cx['funcs']['test3']", $method->invoke(null,
            Array('flags' => Array('standalone' => 1)), 'test3'
        ));
    }
    /**
     * @covers LightnCandy::_scope
     */
    public function testOn__scope() {
        $method = new ReflectionMethod('LightnCandy', '_scope');
        $method->setAccessible(true);
        $this->assertEquals('', $method->invoke(null,
            Array()
        ));
        $this->assertEquals('[a]', $method->invoke(null,
            Array('a')
        ));
        $this->assertEquals('[a][b][c]', $method->invoke(null,
            Array('a', 'b', 'c')
        ));
    }
    /**
     * @covers LightnCandy::_qscope
     */
    public function testOn__qscope() {
        $method = new ReflectionMethod('LightnCandy', '_qscope');
        $method->setAccessible(true);
        $this->assertEquals('', $method->invoke(null,
            Array()
        ));
        $this->assertEquals("['a']", $method->invoke(null,
            Array('a')
        ));
        $this->assertEquals("['a']['b']['c']", $method->invoke(null,
            Array('a', 'b', 'c')
        ));
    }
    /**
     * @covers LightnCandy::_vn
     */
    public function testOn__vn() {
        $method = new ReflectionMethod('LightnCandy', '_vn');
        $method->setAccessible(true);
        $this->assertEquals('', $method->invoke(null,
            '', 0
        ));
        $this->assertEquals("['a']", $method->invoke(null,
            'a', 0
        ));
        $this->assertEquals("['a']", $method->invoke(null,
            'a', 1
        ));
        $this->assertEquals("['b']['c']", $method->invoke(null,
            'b.c', 0
        ));
        $this->assertEquals("['b']['c']", $method->invoke(null,
            'b.c', 1
        ));
        $this->assertEquals("['d']['e']['f']", $method->invoke(null,
            'd.e.f', 0
        ));
        $this->assertEquals("['d']['e']['f']", $method->invoke(null,
            'd.e.f', 1
        ));
        $this->assertEquals("['[g']['h]']['i']", $method->invoke(null,
            '[g.h].i', 0
        ));
        $this->assertEquals("['g.h']['i']", $method->invoke(null,
            '[g.h].i', 1
        ));
    }
    /**
     * @covers LightnCandy::_advn
     */
    public function testOn__advn() {
        $method = new ReflectionMethod('LightnCandy', '_advn');
        $method->setAccessible(true);
        $this->assertEquals("['']", $method->invoke(null,
            ''
        ));
        $this->assertEquals("['a']", $method->invoke(null,
            'a'
        ));
        $this->assertEquals("['a']", $method->invoke(null,
            '[a]'
        ));
        $this->assertEquals("['a']['b']", $method->invoke(null,
            '[a].b'
        ));
        $this->assertEquals("['a']['b']", $method->invoke(null,
            'a.b'
        ));
        $this->assertEquals("['a']['b']", $method->invoke(null,
            'a.[b]'
        ));
        $this->assertEquals("['a']['b[c']", $method->invoke(null,
            'a.[b[c]'
        ));
        $this->assertEquals("['a']['b.c']", $method->invoke(null,
            'a.[b.c]'
        ));
        $this->assertEquals("['a.b']", $method->invoke(null,
            '[a.b]'
        ));
    }
    /**
     * @covers LightnCandy::_vs
     */
    public function testOn__vs() {
        $method = new ReflectionMethod('LightnCandy', '_vs');
        $method->setAccessible(true);
        $this->assertEquals(null, $method->invoke(null,
            ''
        ));
        $this->assertEquals(Array('.'), $method->invoke(null,
            '.'
        ));
        $this->assertEquals(Array('a'), $method->invoke(null,
            'a'
        ));
        $this->assertEquals(Array('a', 'b'), $method->invoke(null,
            'a.b'
        ));
    }
    /**
     * @covers LightnCandy::_arg
     */
    public function testOn__arg() {
        $method = new ReflectionMethod('LightnCandy', '_arg');
        $method->setAccessible(true);
        $this->assertEquals('', $method->invoke(null,
            Array(), Array('flags' => Array('this' => 0, 'advar' => 0))
        ));
        $this->assertEquals('', $method->invoke(null,
            Array(), Array('flags' => Array('this' => 0, 'advar' => 1))
        ));
        $this->assertEquals("'a'", $method->invoke(null,
            Array('a'), Array('flags' => Array('this' => 0, 'advar' => 0))
        ));
        $this->assertEquals("'this'", $method->invoke(null,
            Array('this'), Array('flags' => Array('this' => 0, 'advar' => 0))
        ));
        $this->assertEquals("''", $method->invoke(null,
            Array('this'), Array('flags' => Array('this' => 1, 'advar' => 0))
        ));
    }
}
?>