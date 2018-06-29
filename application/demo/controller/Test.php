<?php
namespace app\demo\controller;

use think\Controller;
use think\Request;

class Test extends Controller
{

    function __construct(Request $request = null)
    {
        parent::__construct($request);
    }

    /**
     * 测试Model Insert
     * @throws \Exception
     */
    public function testDbInsert()
    {
        $objModelTest = new \app\demo\model\Test();
        $arrTestList = [
            ['name' => 'test1'],
            ['name' => 'test2']
        ];
        $mixRes = $objModelTest->saveAll($arrTestList);
        return json($mixRes);
    }

    /**
     * 测试Model Select One
     * @throws \think\exception\DbException
     */
    public function testDbSelectOne()
    {
        $objModelTest = \app\demo\model\Test::get(1);
        return json($objModelTest);
    }

    public function testDbSelectAll()
    {
       
    }
}