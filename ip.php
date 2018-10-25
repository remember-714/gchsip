
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>IP查询</title>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" href="/favicon.ico">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <script type='text/javascript' src='http://6.gdhscxsh.sinaapp.com/hs_lost/hz.js' charset='utf-8'></script>
        <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.1/css/sm.min.css">
        <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.1/css/sm-extend.min.css">
        <style>
            body{
                padding-top: 50px;
            }
            .banner1
            {
                padding-top: 40px;
            }
            .form_tab
            {
                padding-top: 5px;
            }
            .footer
            {
                position: fixed;
                bottom:0;
                left:0;
                width:100%;
                text-align: center;
                padding-top: 10px;
                padding-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="page-group">
            
            <div class="page page-current" id='router'>
                <div class="content">
                    <header class="bar bar-nav">
                        <h1 class='title'>华商校园IP查询</h1>
                    </header>
                
                    <div class="banner1">
                        <div valign="bottom" class="card-header color-white no-border no-padding">
                            <img class='card-cover' src="77.jpg" alt="">
                        </div>
                    </div>
                
                    <form action="#router3" method="get" id="form1">
                        <div class="form_tab">
                            <div class="list-block">
                                
                                <ul>
                                    <!-- Text inputs -->
                                    
                                    
                                    <li>
                                        <div class="item-content">
                                            <div class="item-media"><i class="icon icon-form-gender"></i></div>
                                            <div class="item-inner">
                                                <div class="item-title label">宿舍楼</div>
                                                <div class="item-input">
                                                    <select name="ddlJZWH">
                                                        <option value="D1">东区1(原D1)</option>
                                                        <option value="D2">东区2(原D2)</option>
                                                        <option value="D3">东区6(原D3)</option>
                                                        <option value="D4">东区7(原D4)</option>
                                                        <option value="D5">东区8(原D5)</option>
                                                        <option value="D6">东区9(原D6)</option>
                                                        <option value="E1">东区3(原E1)</option>
                                                        <option value="E2">东区4(原E2)</option>
                                                        <option value="E3">东区5(原E3)</option>
                                                        <option value="E6">西区14(原E6)</option>
                                                        <option value="H1">东区10(原H1)</option>
                                                        <option value="H2">东区11(原H2)</option>
                                                        <option value="H3">东区12(原H3)</option>
                                                        <option value="H4">东区13(原H4)</option>
                                                        <option value="H5">东区15(原H5)</option>
                                                        <option value="H6">东区16(原H6)</option>
                                                        <option value="H7">东区17(原H7)</option>
                                                        <option value="H8">东区14(原H8)</option>
                                                        <option value="3">西区6-明志楼(原3栋)</option>
                                                        <option value="4">西区5-致远楼(原4栋)</option>
                                                        <option value="5">西区4-春华楼(原5栋)</option>
                                                        <option value="6">西区3-秋实楼(原6栋)</option>
                                                        <option value="7">西区2-朝晖楼(原7栋)</option>
                                                        <option value="8">西区1(原8栋)</option>
                                                        <option value="B">西区7-承泽楼(原B栋)</option>
                                                        <option value="C">西区8-博雅楼(原C栋)</option>
                                                        <option value="D西">西区9-集玉楼(原D西)</option>
                                                        <option value="D东">西区10(原D东)</option>
                                                        <option value="S1">西区11</option>
                                                        <option value="S2">西区12(紫光楼)</option>
                                                        <option value="S3">西区13(祥云楼)</option>
                                                        <option value="S4南">西区15(S4南)</option>
                                                        <option value="S4北">西区15(S4北)</option>
                                                        <option value="会议中心">会议中心</option>
                                                        <option value="A">蔚秀楼</option>
                                                        <option value="综合楼">综合楼</option>
                                                        <option value="崇德楼">崇德楼</option>  
                                                        <option value="新公寓C2">新公寓C2</option>  
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Date -->
                                    <li>
                                        <div class="item-content">
                                            <div class="item-media"><i class="icon icon-form-name"></i></div>
                                            <div class="item-inner">
                                                <div class="item-title label">宿舍号</div>
                                                <div class="item-input">
                                                    <input type="text" id="suse" name="txtSSFJH" placeholder="宿舍号" data-rules="required">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                
                            </div>
                            <div class="content-block">
                                <div class="row">
                                    <div class="col-50"><input class="button button-big button-fill button-danger" type="button" onclick="document.getElementById('form1').reset()" value="重置"/></div>
                                    <div class="col-50"><input class="button button-big button-fill button-success alert-text" type="submit" value="查询" /></div>
                                </div>
                                
                            </div>
                        </div>
                    </form>
                    </div>
                <div class="bar bar-footer">
                    <a class="title active" href="#">©新媒体发展中心技术部</a>
                </div>
                </div>
            
            </div>
            <div class="page" id='router3'>
                <header class="bar bar-nav">
                    <a class="button button-link button-nav pull-left back" href="/docs-demos/router">
                        <span class="icon icon-left"></span>
                        返回
                    </a>
                    <h1 class='title'>查询结果</h1>
                </header>
                <div class="content">
                    <div class="banner11">
                        <div class="card">
                            <div class="card-header">您宿舍的相关信息如下</div>
                            <div class="card-content">
                                <div class="card-content-inner">
                                    <?php
$sushe1=$_GET['ddlJZWH'];
$sushe2=$_GET['txtSSFJH'];
$data="__VIEWSTATE=%2FwEPDwUJNDkyNTk4MTEzD2QWAgIDD2QWBAIBDw8WAh4HVmlzaWJsZWdkFhgCAQ8QDxYGHg5EYXRhVmFsdWVGaWVsZAUESlpXSB4NRGF0YVRleHRGaWVsZAUISlpXSE5hbWUeC18hRGF0YUJvdW5kZ2QQFSYE5LicMQTkuJwyBOS4nDME5LicNATkuJw1BOS4nDYE5LicNwTkuJw4BOS4nDkF5LicMTAF5LicMTEF5LicMTIF5LicMTMF5LicMTQF5LicMTUF5LicMTYF5LicMTcE6KW%2FMQTopb8yBOilvzME6KW%2FNATopb81BOilvzYE6KW%2FNwTopb84BOilvzkF6KW%2FMTAF6KW%2FMTEF6KW%2FMTIF6KW%2FMTMF6KW%2FMTQI6KW%2FMTXljJcI6KW%2FMTXljZcM5Lya6K6u5Lit5b%2BDCeiUmuengOalvAnnu7zlkIjmpbwJ5bSH5b635qW8C%2BaWsOWFrOWvk0MyFSYCRDECRDICRTECRTICRTMCRDMCRDQCRDUCRDYCSDECSDICSDMCSDQCSDgCSDUCSDYCSDcBOAE3ATYBNQE0ATMBQgFDBETopb8EROS4nAJTMQJTMgJTMwJFNgVTNOWMlwVTNOWNlwzkvJrorq7kuK3lv4MBQQnnu7zlkIjmpbwJ5bSH5b635qW8C%2BaWsOWFrOWvk0MyFCsDJmdnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZGQCBw8WAh4EVGV4dAUM5LicMTEjMTEw5oi%2FZAIJDxYCHwQFDDE3Mi4xNi4yMS42NWQCCw8WAh8EBQwxNzIuMTYuMjEuNjZkAg0PFgIfBAUMMTcyLjE2LjIxLjY3ZAIPDxYCHwQFDDE3Mi4xNi4yMS42OGQCEQ8WAh8EBQwxNzIuMTYuMjEuNjlkAhMPFgIfBAUMMTcyLjE2LjIxLjcwZAIVDxYCHwQFDTI1NS4yNTUuMjU1LjBkAhcPFgIfBAULMTcyLjE2LjIxLjFkAhkPFgIfBAUOMjAyLjk2LjEyOC4xNjZkAhsPFgIfBAUNMjAyLjk2LjEyOC44NmQCAw8WAh8EBSo8c2NyaXB0PiQoJy5qaWVndW8nKS5zbGlkZURvd24oKTs8L3NjcmlwdD5kZPk4%2Fc9B7S3wbK6Rs21qfuGpP9ObUyiUgqgFrVo%2FCY2A&__EVENTVALIDATION=%2FwEWKQKdy5yjAQLspOtSAuyk71IC66TrUgLrpO9SAuuk01IC7KTTUgLspNdSAuyk21IC7KTfUgLYpOtSAtik71IC2KTTUgLYpNdSAtikh1EC2KTbUgLYpN9SAtikw1ICqKSnUQK5pKdRArqkp1ECu6SnUQK8pKdRAr2kp1EC7qSnUQLtpKdRAuyk45gJAuyk96ENAt2k61IC3aTvUgLdpNNSAuuk31IC1NnAAwKUjtXSDQKfh5mQDgLvpKdRAvLm%2Ft8OArej%2BpwPArWOzugGAomR5s0DAsKL2t4DJEdC%2B1bf7QKp0OhkQyN%2BevaR5FlgJAjk%2BbcKl9gLymg%3D
&ddlJZWH={$sushe1}&txtSSFJH={$sushe2}&btnSubmit=%E6%9F%A5%E8%AF%A2IP";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://pay.hsej.net/weixin/Ip.aspx?data=20e09da1%2f4EabjMqaK7m5qGyWQAb59cWyPmzvRj48P1%2b0nsoGx8%3d'); //地址
curl_setopt($ch, CURLOPT_POST, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_HEADER, 0); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9.1.5) Gecko/20091102 Firefox/3.5.5');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
$table = curl_exec($ch);
preg_match_all('/<td>(.*)<\/td>/i', $table, $m);

//$table= mb_convert_encoding($table, "utf-8", "gb2312");
if(!empty($m[1][3]))
{
print_r($m[1][0]."</br>");
print_r($m[1][1]);
$cs=array_slice($m[1],2);
for ($i=0; $i <18 ; $i=$i+2) { 
        echo "</br>".$cs[$i].$cs[$i+1];
}
}else
{
    echo "暂未查询到您的宿舍信息，请确认宿舍号是否输入正确";
}
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="bar bar-footer">
                    <h3 class='title'><a class="tab-item external active" href="#">©新媒体发展中心技术部</a></h3>
                </div>
            </div>
         
        <script type='text/javascript' src='//g.alicdn.com/sj/lib/zepto/zepto.min.js' charset='utf-8'></script>
        <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.1/js/sm.min.js' charset='utf-8'></script>
        <!--<script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.1/js/sm-extend.min.js' charset='utf-8'></script>-->
        <script>
          //var input = $('#suse').val();
           $(function(){
              $(document).on('click','.alert-text',function () {
                 var val = $("#suse").val();
                  var ok = false;
                      if(val == "")
                      {
                          $.showPreloader('查询中...');
                          setTimeout(function () {
                              $.hidePreloader();
                              $.alert('请输入宿舍号');
                          }, 800);
                          
                          return ok;
                      }else{
                          $.showPreloader('查询中...');
                          setTimeout(function () {
                             $.hidePreloader();
                              return ture;
                          }, 2000);
                      }
              });
              $.init();
          })
      </script>
        
    </body>
</html>