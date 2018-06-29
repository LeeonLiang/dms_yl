<?php
namespace app\demo\controller;

use app\demo\util\Common;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function getJsonIndex()
    {
        return json(Db::query('select * from think_user'));
    }

    public function testUtil()
    {
        return json(Common::test());
    }
}
