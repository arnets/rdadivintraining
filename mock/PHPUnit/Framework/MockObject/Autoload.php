<?php

require_once 'Text/Template/Autoload.php';
require_once 'Doctrine/Instantiator/autoload.php';
require_once 'SebastianBergmann/Exporter/autoload.php';

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'phpunit\\framework\\mockobject\\badmethodcallexception' => '/Exception/BadMethodCallException.php',
                'phpunit\\framework\\mockobject\\builder\\identity' => '/Builder/Identity.php',
                'phpunit\\framework\\mockobject\\builder\\invocationmocker' => '/Builder/InvocationMocker.php',
                'phpunit\\framework\\mockobject\\builder\\match' => '/Builder/Match.php',
                'phpunit\\framework\\mockobject\\builder\\methodnamematch' => '/Builder/MethodNameMatch.php',
                'phpunit\\framework\\mockobject\\builder\\namespacematch' => '/Builder/NamespaceMatch.php',
                'phpunit\\framework\\mockobject\\builder\\parametersmatch' => '/Builder/ParametersMatch.php',
                'phpunit\\framework\\mockobject\\builder\\stub' => '/Builder/Stub.php',
                'phpunit\\framework\\mockobject\\exception' => '/Exception/Exception.php',
                'phpunit\\framework\\mockobject\\generator' => '/Generator.php',
                'phpunit\\framework\\mockobject\\invocation' => '/Invocation/Invocation.php',
                'phpunit\\framework\\mockobject\\invocation\\objectinvocation' => '/Invocation/ObjectInvocation.php',
                'phpunit\\framework\\mockobject\\invocation\\staticinvocation' => '/Invocation/StaticInvocation.php',
                'phpunit\\framework\\mockobject\\invocationmocker' => '/InvocationMocker.php',
                'phpunit\\framework\\mockobject\\invokable' => '/Invokable.php',
                'phpunit\\framework\\mockobject\\matcher' => '/Matcher.php',
                'phpunit\\framework\\mockobject\\matcher\\anyinvokedcount' => '/Matcher/AnyInvokedCount.php',
                'phpunit\\framework\\mockobject\\matcher\\anyparameters' => '/Matcher/AnyParameters.php',
                'phpunit\\framework\\mockobject\\matcher\\consecutiveparameters' => '/Matcher/ConsecutiveParameters.php',
                'phpunit\\framework\\mockobject\\matcher\\invocation' => '/Matcher/Invocation.php',
                'phpunit\\framework\\mockobject\\matcher\\invokedatindex' => '/Matcher/InvokedAtIndex.php',
                'phpunit\\framework\\mockobject\\matcher\\invokedatleastcount' => '/Matcher/InvokedAtLeastCount.php',
                'phpunit\\framework\\mockobject\\matcher\\invokedatleastonce' => '/Matcher/InvokedAtLeastOnce.php',
                'phpunit\\framework\\mockobject\\matcher\\invokedatmostcount' => '/Matcher/InvokedAtMostCount.php',
                'phpunit\\framework\\mockobject\\matcher\\invokedcount' => '/Matcher/InvokedCount.php',
                'phpunit\\framework\\mockobject\\matcher\\invokedrecorder' => '/Matcher/InvokedRecorder.php',
                'phpunit\\framework\\mockobject\\matcher\\methodname' => '/Matcher/MethodName.php',
                'phpunit\\framework\\mockobject\\matcher\\parameters' => '/Matcher/Parameters.php',
                'phpunit\\framework\\mockobject\\matcher\\statelessinvocation' => '/Matcher/StatelessInvocation.php',
                'phpunit\\framework\\mockobject\\mockbuilder' => '/MockBuilder.php',
                'phpunit\\framework\\mockobject\\mockobject' => '/ForwardCompatibility/MockObject.php',
                'phpunit\\framework\\mockobject\\runtimeexception' => '/Exception/RuntimeException.php',
                'phpunit\\framework\\mockobject\\stub' => '/Stub.php',
                'phpunit\\framework\\mockobject\\stub\\consecutivecalls' => '/Stub/ConsecutiveCalls.php',
                'phpunit\\framework\\mockobject\\stub\\exception' => '/Stub/Exception.php',
                'phpunit\\framework\\mockobject\\stub\\matchercollection' => '/Stub/MatcherCollection.php',
                'phpunit\\framework\\mockobject\\stub\\returnargument' => '/Stub/ReturnArgument.php',
                'phpunit\\framework\\mockobject\\stub\\returncallback' => '/Stub/ReturnCallback.php',
                'phpunit\\framework\\mockobject\\stub\\returnreference' => '/Stub/ReturnReference.php',
                'phpunit\\framework\\mockobject\\stub\\returnself' => '/Stub/ReturnSelf.php',
                'phpunit\\framework\\mockobject\\stub\\returnstub' => '/Stub/ReturnStub.php',
                'phpunit\\framework\\mockobject\\stub\\returnvaluemap' => '/Stub/ReturnValueMap.php',
                'phpunit\\framework\\mockobject\\verifiable' => '/Verifiable.php',
                'phpunit_framework_mockobject_mockobject' => '/MockObject.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd
