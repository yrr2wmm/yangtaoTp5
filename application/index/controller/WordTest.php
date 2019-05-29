<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class WordTest extends Controller
{
    /**
     * 显示资源列表.
     *
     * @return \think\Response
     */
    public function index()
    {
        echo 123;die;
        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('static/template/demoTemp.docx');
        $phpWord -> setValue('name', '白俊遥');
        $phpWord -> saveAs('static/template/new.docx');
        // dump(filesize('static/template/new.docx'));die;
        header("Content-type: application/octet-stream"); 
        header("Accept-Ranges: bytes"); 
        header("Accept-Length: ".filesize('static/template/new.docx'));
        header('Content-Disposition: attachment; filename=test.doc'); 
        header("Pragma:no-cache"); 
        header("Expires:0"); 
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
    }

    /**
     * 保存新建的资源.
     *
     * @param \think\Request $request
     *
     * @return \think\Response
     */
    public function save(Request $request)
    {
    }

    /**
     * 显示指定的资源.
     *
     * @param int $id
     *
     * @return \think\Response
     */
    public function read($id)
    {
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param int $id
     *
     * @return \think\Response
     */
    public function edit($id)
    {
    }

    /**
     * 保存更新的资源.
     *
     * @param \think\Request $request
     * @param int            $id
     *
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * 删除指定资源.
     *
     * @param int $id
     *
     * @return \think\Response
     */
    public function delete($id)
    {
    }
}
