<?php
/*
 * @Date         : 2022-03-02 14:49:25
 * @LastEditors  : Jack Zhou <jack@ks-it.co>
 * @LastEditTime : 2022-03-02 17:22:16
 * @Description  : 
 * @FilePath     : /recruitment-php-code-test/tests/App/DemoTest.php
 */

namespace Test\App;

use PHPUnit\Framework\TestCase;


class DemoTest extends TestCase {

    public function test_foo() {

    }

    public function test_get_user_info() {

    }

    public function testGetUserInfo()
    {
        $userData = [
            'id' => 1,
            'username' => 'hello world',
        ];
        $returnData = [
            'error' => 0,
            'data'  => $userData,
        ];
        $result = json_encode($returnData, JSON_UNESCAPED_UNICODE);
        var_dump(PHP_EOL . '获取用户信息接口: ' . $result . PHP_EOL);
        return $result;
    }
}