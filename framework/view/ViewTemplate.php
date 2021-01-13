<?php

namespace Framework\view;

use App\controller\AuthController;

class ViewTemplate

{
    public function render(string $filename, string $jsonSource)
    {
        try {
            echo($this->replaceVariablesInText($filename, $jsonSource));
        } catch (Exception $e) {
            echo 'catch';
        }

    }

    public function replaceVariablesInText(string $template, string $json_file)
    {
        session_start();
        $jsonData = file_get_contents($json_file, true);
        $jsonObj = get_object_vars(json_decode($jsonData));
        $templateFileContent = file_get_contents($template);

        $isSessioned = AuthController::checkAuth() ? 'sessioned' : 'notsessioned';
        var_dump($isSessioned);
        $sessioned = get_object_vars($jsonObj[$isSessioned]);
        $keys = array_keys($sessioned);

        foreach($keys as $key ) {
            if($key === 'messageContent') {
                $setUpSessionedNameInContent = preg_replace('/{{, \$_SESSION\[\'name\'] }}/', $_SESSION['name'], $sessioned['messageContent']);
                $templateFileContent = preg_replace('/{{ messageContent }}/', $setUpSessionedNameInContent, $templateFileContent);
            } else {
                $templateFileContent = preg_replace('/{{ '.$key.' }}/', $sessioned[$key], $templateFileContent);
            }
        }
        return $templateFileContent;
    }
}

