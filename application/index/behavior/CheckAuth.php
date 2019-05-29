<?php
namespace app\index\behavior;

/**
 * 钩子类测试
 */
class CheckAuth {
    /**
     * 测试行为
     *
     * @param array $params
     * @return void
     */
    public function run($params)
    {
        echo 'CheckAuth';
        return false;
    }
}
?>