<?php
namespace app\index\behavior;

/**
 * 钩子类测试
 */
class CheckLang {
    /**
     * 测试行为
     *
     * @param array $params
     * @return void
     */
    public function run($params)
    {
        echo 'CheckLang';
        return true;
    }
}
?>