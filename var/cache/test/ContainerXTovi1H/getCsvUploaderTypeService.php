<?php

namespace ContainerXTovi1H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCsvUploaderTypeService extends Goreboothero_CsvUploader_KernelTestDebugContainer
{
    /**
     * Gets the private 'Goreboothero\CsvUploader\Form\Type\CsvUploaderType' shared autowired service.
     *
     * @return \Goreboothero\CsvUploader\Form\Type\CsvUploaderType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Type/CsvUploaderType.php';

        return $container->privates['Goreboothero\\CsvUploader\\Form\\Type\\CsvUploaderType'] = new \Goreboothero\CsvUploader\Form\Type\CsvUploaderType();
    }
}
