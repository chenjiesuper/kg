<?php

namespace Jay\Kg;

class Music{

    /**
     * 获取单首歌曲信息
     * @param  str $str 歌曲shareid
     * @return array
     */
    public function getOne($str){
        $res = file_get_contents('http://cgi.kg.qq.com/fcgi-bin/kg_ugc_getdetail?callback=jsopgetsonginfo&v=4&inCharset=GB2312&outCharset=utf-8&shareid=' . $str);
        $res = ltrim($res, 'jsopgetsonginfo(');
        $res = rtrim($res, ')');
        $res = json_decode($res, true);
        return $res;
    }

    /**
     * 获取多首歌曲信息
     * @param  array $array 歌曲shareid集合
     * @return array
     */
    public function getMore($array){
        $res = array();
        foreach ($array as $str) {
            $res[] = $this->getOne($str);
        }
        return $res;
    }
}