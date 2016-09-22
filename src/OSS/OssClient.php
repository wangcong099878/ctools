<?php

namespace OSS;

/**
 * Class OssClient
 *
 * Object Storage Service(OSS) 的客户端类，封装了用户通过OSS API对OSS服务的各种操作，
 * 用户通过OssClient实例可以进行Bucket，Object，MultipartUpload, ACL等操作，具体
 * 的接口规则可以参考官方OSS API文档
 */
class OssClient {

    public function say_hello()
    {
        exit('hello world');
    }

}
