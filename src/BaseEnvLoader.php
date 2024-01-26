<?php

namespace EnvLoader;

use EnvLoader\Trait\Constructor;
use EnvLoader\Trait\Getter;

/**
 * .envファイルの値をクラスのプロパティとして扱うための抽象クラス
 * 
 * @package EnvLoader
 */
abstract class BaseEnvLoader
{
    use Constructor;
    use Getter;
}
