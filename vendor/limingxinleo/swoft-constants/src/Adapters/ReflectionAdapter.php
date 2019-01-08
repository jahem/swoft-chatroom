<?php

namespace Swoftx\Constants\Adapters;

use limx\Support\Str;
use ReflectionClass;
use ReflectionProperty;
use ReflectionClassConstant;

class ReflectionAdapter implements AdapterInterface
{
    protected $class;

    public function __construct($class)
    {
        $this->class = $class;
    }

    public function getAnnotationsByName($name, array $classConstants)
    {
        $result = [];
        /** @var ReflectionClassConstant $classConstant */
        foreach ($classConstants as $classConstant) {
            $code = $classConstant->getValue();
            $docComment = $classConstant->getDocComment();

            $result[$code] = $this->getCommentByName($docComment, $name);
        }

        return $result;
    }

    /**
     * @desc   根据name解析doc获取对应注释
     * @author limx
     * @param $doc  注释
     * @param $name 字段名
     */
    protected function getCommentByName($doc, $name)
    {
        $name = Str::studly($name);
        $pattern = "/\@{$name}\([\'|\\\"](.*)[\'|\\\"]\)/U";
        if (preg_match($pattern, $doc, $result)) {
            if (isset($result[1])) {
                return $result[1];
            }
        }
        return null;
    }
}
