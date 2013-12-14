<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2013 Zend Technologies USA Inc. (http://www.zend.com)
 */

return array(
    'input_filters' => array(
        /*
         * An array of service name => config pairs.
         *
         * Service names must be unique, and will be the name by which the
         * input filter will be retrieved. The configuration is any valid
         * configuration for an input filter, as shown in the manual:
         *
         * - http://zf2.readthedocs.org/en/latest/modules/zend.input-filter.intro.html
         */
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'ZF\ContentValidation\InputFilter\InputFilterAbstractServiceFactory',
        ),
        'factories' => array(
            'ZF\ContentValidation\ContentValidationListener' => 'ZF\ContentValidation\ContentValidationListenerFactory',
        ),
    ),
    'zf-content-validation' => array(
        /*
         * An array of controller service name => config pairs.
         *
         * The configuration *must* include:
         *
         * - input_filter: the name of an input filter service to use with the
         *   given controller
         *
         * In the future, additional options may be added, such as the ability
         * to restrict by HTTP method, define validation groups by HTTP method,
         * etc.
         */
    ),
);
