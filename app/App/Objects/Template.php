<?php
namespace App\Objects;

spl_autoload_register();

use App\Objects\PrimarySchool;
use App\Objects\College;
use App\Objects\Lycee;

class Template{
    
    function templateHTML($schoolName)
    {
        $template = '
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>template d\'affichage</title>
        </head>
        <body>
            <h1>School Name: {{schoolName}}</h1>
        </body>
        </html>';
    
        return str_replace('{{schoolName}}', $schoolName, $template);
    }
}