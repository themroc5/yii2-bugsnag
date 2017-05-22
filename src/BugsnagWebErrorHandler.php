<?php

namespace themroc\yii2bugsnag;

class BugsnagWebErrorHandler extends \yii\web\ErrorHandler
{
    use BugsnagErrorHandlerTrait;
}