<?php

namespace Framework\view;

class ViewTemplate

{
    public function render(string $filename, array $variables) {
        try {
            echo $this->replaceVariablesInText($filename, $variables);
        } catch (Exception $e) {
            echo $e;
        }

    }

    public function replaceVariablesInText (string $filename, array $variables) {
        $fileContent =  file_get_contents($filename);
        $variables = [
            "siker" => "COCOOOOO",
            "alkaloid" => "kiváló alkalom"
        ];
//        $keys = array_keys($variables);
//        var_dump($keys);
//        echo "'/'.alma.'/'";
//        $changeContent = '';
//        //            preg_replace('/\$_SESSION\[\'email\'\]/', $variable->, $fileContent);
//        foreach ($keys as $key) {
//            echo $key;
//            $changeContent = preg_replace( '\{\{/.$key.\}\}/', $variables['$key'], $fileContent);
//        }
        return $fileContent;

    }

}