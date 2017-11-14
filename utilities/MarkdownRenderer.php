<?php
/**
 * Created by PhpStorm.
 * User: sergei
 * Date: 15.11.17
 * Time: 1:00
 */

namespace app\utilities;
use yii\helpers\Markdown;
use yii\base\ViewRenderer;
class MarkdownRenderer extends ViewRenderer
{
    public function render($view, $file, $params)
    {
        return Markdown::process(file_get_contents($file));
    }
}