<?php

namespace themroc\yii2bugsnag;

class BugsnagConsoleErrorHandler extends \yii\console\ErrorHandler
{
    use BugsnagErrorHandlerTrait;
}