<?php
require_once __DIR__ . '/vendor/autoload.php';
use Jay\Kg\Music;
$music = new Music();
$one = $music->getOne('O58-ECO1_Hvq7Omg');
var_dump($one);
$more = $music->getMore(array('O58-ECO1_Hvq7Omg', 'O58-ECO1_dhz6OQZ'));
var_dump($more);
/*
 * 获取单首歌曲结果如下，我们重点关注playurl 这是真实的播放地址，其他信息应该也是一目了然吧
array(5) {
    ["code"]=>
  int(0)
  ["subcode"]=>
  int(0)
  ["message"]=>
  string(0) ""
    ["default"]=>
  int(0)
  ["data"]=>
  array(49) {
        ["activity_id"]=>
    int(0)
    ["avatar"]=>
    string(50) "http://shp.qlogo.cn/ttsing/451486051/451486051/100"
        ["client_key"]=>
    string(36) "06a872c1-e306-4d7a-ab56-21a554f1123f"
        ["comment_num"]=>
    int(1)
    ["comments"]=>
    array(1) {
            [0]=>
      array(9) {
                ["avatar"]=>
        string(50) "http://shp.qlogo.cn/ttsing/451486051/451486051/100"
                ["comment_id"]=>
        string(31) "451486051_1500467860_967826_755"
                ["content"]=>
        string(15) "转发到动态"
                ["ctime"]=>
        int(1500467860)
        ["is_owner"]=>
        int(1)
        ["nick"]=>
        string(6) "海浪"
                ["reply_avatar"]=>
        string(0) ""
                ["reply_nick"]=>
        string(0) ""
                ["uid"]=>
        string(18) "66989c812d2b378e35"
      }
    }
    ["content"]=>
    string(39) "我唱了一首歌，快来听听吧。"
        ["cover"]=>
    string(84) "http://y.gtimg.cn/music/photo_new/T002R500x500M000002g6I7Z4Zg3oL.jpg?max_age=2592000"
        ["ctime"]=>
    int(1500467600)
    ["f_lat"]=>
    string(1) "0"
        ["f_lon"]=>
    string(2) "00"
        ["fb_cover"]=>
    string(84) "http://y.gtimg.cn/music/photo_new/T002R300x300M000002g6I7Z4Zg3oL.jpg?max_age=2592000"
        ["file_mid"]=>
    string(14) "004Lyjis0POIRV"
        ["flower"]=>
    array(0) {
        }
    ["flower_num"]=>
    int(0)
    ["gift_num"]=>
    int(0)
    ["hc_avatar"]=>
    string(0) ""
        ["hc_level"]=>
    int(0)
    ["hc_nick"]=>
    string(0) ""
        ["hc_second_sing_count"]=>
    int(0)
    ["hc_ugcid_half"]=>
    string(0) ""
        ["hc_uid"]=>
    string(4) "619f"
        ["iHasCp"]=>
    int(-200)
    ["is_anonymous"]=>
    int(0)
    ["is_segment"]=>
    int(0)
    ["kg_nick"]=>
    string(6) "海浪"
        ["ksong_mid"]=>
    string(14) "000Ctl2d1T0tSU"
        ["lSongMask"]=>
    int(16900)
    ["level"]=>
    int(0)
    ["mapAuth"]=>
    array(7) {
            [0]=>
      string(0) ""
            [10]=>
      string(1) "0"
            [11]=>
      string(1) "0"
            [12]=>
      string(1) "0"
            [15]=>
      string(6) "524288"
            [8]=>
      string(1) "0"
            [9]=>
      string(1) "0"
    }
    ["nick"]=>
    string(6) "海浪"
        ["photos"]=>
    array(0) {
        }
    ["play_num"]=>
    int(6)
    ["playurl"]=>
    string(477) "http://dl.stream.kg.qq.com/shkge/5a5beecccd14d8d709c7fb740caec4bea56315dc?ftnrkey=163415477c610ab7499aecf2398862c15fa1018520d118c310e8041dd25e325c51e82a1e6560801db5292531e959b52c8ad899133d749e3b3d74deed06c7a288&vkey=2963CE266CBC79C7C0DE39EAC6E1C7601D3A9688B4A672C614F6D17BB10ACD60B7ED98FC4CFB4397CF7C1E656A58BDD9AD2A715F8C27CDD76E369139D8951929479761403B442E52009B8C7A88DFC59742A5B0F4128294B8&fname=1021_33fcc2ec763ceea1547e47ef83f9a3fc6581efad.0.m4a&fromtag=1006&sdtfrom=v1006"
        ["playurl_video"]=>
    string(0) ""
        ["poi_id"]=>
    string(0) ""
        ["score"]=>
    int(4478)
    ["scoreRank"]=>
    int(5)
    ["segment_end"]=>
    int(297214)
    ["segment_start"]=>
    int(0)
    ["sentence_count"]=>
    int(49)
    ["singer_mid"]=>
    string(14) "004TXjLD41LEZI"
        ["singer_name"]=>
    string(6) "光良"
        ["song_name"]=>
    string(9) "第一次"
        ["tail_name"]=>
    string(7) "红米4"
        ["total"]=>
    int(1)
    ["ugc_id"]=>
    string(24) "451486051_1500467600_607"
        ["ugc_mask"]=>
    int(0)
    ["ugctype"]=>
    int(0)
    ["uid"]=>
    string(18) "66989c812d2b378e35"
  }
}
*/
