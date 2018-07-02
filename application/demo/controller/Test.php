<?php
namespace app\demo\controller;

use think\Controller;
use think\Db;
use think\Log;
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
        Log::info('test info');
        $objModelTest = \app\demo\model\Test::get(1);
        return json($objModelTest);
    }

    /**
     * 测试查询构造器
     * @return \think\response\Json
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function testDbSelectAll()
    {
        $res = \app\demo\model\Test::where('id', '>', 0)->where('id', '=', 2)->select();
        return json($res);
    }
}