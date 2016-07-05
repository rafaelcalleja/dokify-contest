<?php

interface staticInterface
{
    static function static_function();
}

abstract class C implements staticInterface{
    abstract function other();
    abstract function method($parent);


}

class B extends C {

    public function other(){
        return __CLASS__ ;
    }

    public function method($parent)
    {
        return get_class();
    }

    public static function static_function() {
        return __CLASS__ . __FUNCTION__;
    }
}

class A extends B {

    public function notexists(){}

    public function other(){

        return
            is_subclass_of('A', 'B')
            && is_subclass_of(new self(), 'B' )
            && get_class(new self()) !== get_parent_class()

                ? 'FOO' : parent::other();
    }

    public function method($parent = false)
    {
        return $parent ? get_parent_class():get_class() ;
    }

    public static function static_function() {
        return 'A'. ' Function_ME';
    }
}


$a = new A();
assert($a->method() == 'A');
assert($a->method(true) == 'B');
assert($a->other() == 'FOO');
assert(method_exists($a, 'other') === true);

assert(method_exists('A', 'other') === true);
assert(method_exists('B', 'other') === true);
assert(method_exists('C', 'other') === true);

assert(method_exists('A', 'notexists') === true);
assert(method_exists('B', 'notexists') === false);
assert(method_exists('C', 'notexists') === false);

assert($a instanceof A === true);
assert($a instanceof B === true);
assert($a instanceof C === true);

assert(is_callable(array($a, 'static_function')) === true);
assert(is_callable(array($a, 'not_static_function')) === false);

assert(is_callable('a::static_function') === true);
assert(is_callable('a::not_static_function') === false);




