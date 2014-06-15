<?php
namespace PureLib\Di;

interface DiInterface {
    public function get ($name);
    public function set ($name, $callback);
}
