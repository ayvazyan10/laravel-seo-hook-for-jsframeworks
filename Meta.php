<?php

namespace App;

class Meta
{
    protected static $meta = [];
    
    public static function addBaseMeta($content): array
    {
        static::$meta[] = $content;
    }

    // base endpoint
    public static function baseRender(): string
    {
        $html = '';
        foreach (static::$meta as $content) {
            $html .= $content . PHP_EOL;
        }
        return $html;
    }

    // for cleaning up with event listener 
    public static function cleanup()
    {
        static::$meta = [];
    }
}
