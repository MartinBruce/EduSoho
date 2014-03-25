<?php
namespace Topxia\Service\CloudPlatform\Client;

interface AppClient 
{
    /**
     * 检查更新包
     */
    public function checkUpgradePackages($apps);

    /**
     * 提交应用包升级／安装日志数据
     */
    public function commitPackageLog($packageId, array $data);

    /**
     * 下载应用包
     */
    public function downloadPackage($uri,$filename);

    /**
     * 获得包信息
     */
    public function getPackage($packId);

    public function repairProblem($token);
}