<?php

namespace EnvLoader\Trait;

use Dotenv\Dotenv;

/**
 * EnvLoaderのコンストラクタを管理する
 * 
 * @package EnvLoader\Trait
 */
trait Constructor
{
    /**
     * .envファイルのパス
     * 各パッケージが格納されたvendorディレクトリと同じ階層に.envファイルが前提
     * 
     * @var string
     */
    protected $path = __DIR__ . "/../../../../../";


    /**
     * EnvLoaderのコンストラクタ
     */
    function __construct()
    {
        // Dotenvクラスのインスタンスを生成
        $dotenv = Dotenv::createImmutable($this->path);

        // .envファイルを読み込む
        $dotenv->safeLoad();

        // .envファイルの内容をクラスのプロパティとしてセット
        $this->setEnv();
    }

    /**
     * .envファイルの内容をクラスのプロパティとしてセットする
     * 
     * @return void
     */
    abstract protected function setEnv(): void;
}
