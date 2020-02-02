<?php


namespace ilbrambi\RestTools;

use Exception;

class RestTools
{

    /**
     * @param string $pattern
     * @param string $string
     * @return string
     */
    protected function removeFromPattern(string $pattern, string $string): string
    {
        try {
            return preg_replace($pattern, '', $string);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @param string $string
     * @return string
     */
    public function removeExternalBracketsFromString(string $string): string
    {
        return $this->removeFromPattern('/(^\s*\()|(\)\s*$)/', str_replace('\n\r', ' ', $string));
    }

}