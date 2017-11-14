<?php
/**
 * Created by PhpStorm.
 * User: sergei
 * Date: 15.11.17
 * Time: 1:33
 */

namespace app\utilities;
use Symfony\Component\Yaml\Yaml;
use yii\web\ResponseFormatterInterface;
class YamlResponseFormatter implements ResponseFormatterInterface
{
    const FORMAT = 'yaml';
    public function format($response)
    {
        $response->headers->set('Content-Type: application/yaml');
        $response->headers->set('Content-Disposition: inline');
        $response->content = Yaml::dump($response->data);
    }
}