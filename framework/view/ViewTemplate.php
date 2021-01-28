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
        $jsonVariables = $this->getJsonObjectWithControllerVariables($json_file);
        $templateFileContent = file_get_contents($template);

        session_start();
        $isSessioned = AuthController::checkAuth() ? 'sessioned' : 'notsessioned';
        $sessioned = get_object_vars($jsonVariables[$isSessioned]);
        $keys = array_keys($sessioned);

        foreach($keys as $key ) {
            if($key === 'messageContent') {
                $setUpSessionedNameInContent = preg_replace('/\{\{\, \$\_SESSION\[\'name\'\] \}\}/', $_SESSION['name'], $sessioned['messageContent']);
                $templateFileContent = preg_replace('/{{ messageContent }}/', $setUpSessionedNameInContent, $templateFileContent);
            } else {
                $templateFileContent = preg_replace('/{{ '.$key.' }}/', $sessioned[$key], $templateFileContent);
            }
        }
        return $templateFileContent;
    }


    public function getJsonObjectWithControllerVariables(string $json_file): array
    {
        $jsonData = file_get_contents($json_file, true);
        return get_object_vars(json_decode($jsonData));

    }


}

