<?php
namespace App\Domain;

class QiniuDm {

    public function getUploadToken($bucket) {

        return \App\request('App.Qiniu.GetUploadToken', $bucket);

    }

}
