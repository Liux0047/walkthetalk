<?php
/**
 * Created by PhpStorm.
 * User: Allen
 * Date: 2/27/2016
 * Time: 10:52 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    private $teamMembers = array(
        array('name' => '何博', 'desc' => '获新加坡政府奖学金，毕业于新加坡南洋理工大学数学专业。曾在瑞士银行、澳洲西太平洋银行及多家初创企业工作。现任莱孚士教育科技有限公司总裁。', 'title' => '总裁','name_en'=>'hebo'),
        array('name' => '韩新雨', 'desc' => '获新加坡政府奖学金，毕业于新加坡南洋理工大学电子工程系，目前主要研究的方向是通讯以及信号处理。现任莱孚士教育科技有限公司副总裁。', 'title' => '副总裁','name_en'=>'hanxinyu'),
        array('name' => '袁子杰', 'desc' => '获新加坡政府奖学金，毕业于南洋理工大学计算机工程专业，曾获瑞士政府奖学金赴瑞士联邦理工大学交换学习，并入选瑞士联邦理工大学暑期研究实习生项目，曾在美国六旗集团、Adobe和新加坡游戏创新中心等企业工作。现任莱孚士教育科技有限公司运营部主管。', 'title' => '运营部主管','name_en'=>'yuanzijie'),
        array('name' => '时光', 'desc' => '2014年获新加坡国立大学商学院和University Scholars Programme (博学计划) 双学位。大学期间曾赴北美UNC Kenan-Flagler商学院交换，于新东方济南分校北美及英联邦部任教，并多次参加各国际青年初创交流项目。现任莱孚士教育科技有限公司公关部主管。', 'title' => '公关部主管','name_en'=>'shiguang'),
        array('name' => '刘骁', 'desc' => '于2015年获得南洋理工大学计算机工程及商科双学位，在校期间担任曾系学生会主要干部并赴新加坡管理大学交换。现任莱孚士教育科技有限公司技术部主管。', 'title' => '技术部主管','name_en'=>'liuxiao'),
        array('name' => '王肃之', 'desc' => '武汉大学法学院博士研究生，主要从事网络安全法学研究。拥有法律职业资格证书，在司法实务部门实习逾六个月。曾任校级研究生会主席等职务，获得研究生国家奖学金等荣誉多项。现任莱孚士教育科技有限公司法律顾问。', 'title' => '法律顾问','name_en'=>'wangsuzhi'),
        array('name' => '刘轶洲', 'desc' => '新加坡教育部奖学金得主，毕业于新加坡南洋理工大学电子电气工程专业。大学期间曾赴德国慕尼黑理工大学交换学习。现任莱孚士教育科技有限公司运营部经理。', 'title' => '运营部经理','name_en'=>'liuyizhou'),
        array('name' => '王济华', 'desc' => '毕业于电子科大成都学院、重庆大学会计专业。在校期间任魔术协会会长，曾就职于重庆希利肯进出口有限公司、重庆诚信华荣新金属材料有限公司、重庆润际远东新材料科技有限公司等。现任莱孚士教育科技有限公司税务部经理。', 'title' => '税务部经理','name_en'=>'wangjihua'),
        array('name' => '黄嘉曌', 'desc' => '新加坡教育部奖学金得主，毕业于新加坡南洋理工大学机械工程系，科研方向为3D打印以及建模。曾担南大各大社团宣传委员职位，有丰富设计经历。现任莱孚士教育科技有限公司设计部经理。', 'title' => '设计部经理','name_en'=>'huangjiazhao'),
        array('name' => '蔡雨旸', 'desc' => '新加坡教育部奖学金得主，在南洋理工大学攻读数学专业并辅修金融，曾获杨振宁奖学金。曾赴美国加州理工大学洛杉矶分校交流学习，也曾随AIESEC全球志愿者项目在欧洲捷克的多所学校讲授中华文化，曾获澳洲西太平洋银行和贝恩咨询公司实习机会。现任莱孚士教育科技有限公司数学部经理。', 'title' => '数学部经理','name_en'=>'caiyuyang'),
        array('name' => '公雪', 'desc' => '新加坡政府奖学金得主，获得南洋理工大学物理学士学位。在校期期间担任物理学生社副主席，曾参与纳米材料和统计力学研究项目，论文曾发表于纳米材料顶级期刊Nano Letters。2015年做为四名队员之一代表新加坡队参加PLANCKS国际物理竞赛。现任莱孚士教育科技有限公司物理部经理。', 'title' => '物理部经理','name_en'=>'gongxue'),
        array('name' => '李琛', 'desc' => '华师附中奥赛班毕业，新加坡教育部奖学金得主，于2015年获得南洋理工大学计算机工程及商科双学位，在校期间曾兼职O-Level教辅并赴加州大学伯克利分校交换学习。现任莱孚士教育科技有限公司化学部经理。', 'title' => '化学部经理','name_en'=>'lichen'),
        array('name' => '张润垚', 'desc' => '燕山大学优秀毕业生，曾获国家奖学金，现在美国南加州大学攻读硕士学位，专业方向为电子工程，同时担任莱孚士教育科技有限公司美国发展部经理。', 'title' => '美国发展部经理','name_en'=>'zhangrunyao'),
        array('name' => '段浩然', 'desc' => '2014届天津大学优秀毕业生（本科），本科期间曾获澳洲政府奋进奖学金赴澳洲交流学习半年，亦曾获奖学金在澳大利亚Ian Wark纳米材料研究所访问研究半年，曾在国际高水平期刊发表论文，现在澳大利亚昆士兰大学攻读环境工程博士学位，同时担任莱孚士教育科技有限公司澳洲发展部经理。', 'title' => '澳洲发展部经理','name_en'=>'duanhaoran'),
    );

    public function showAboutUs()
    {
        $data = array();
        $data['teamMembers'] = $this->teamMembers;
        return view('pages.about-us', $data);
    }
}