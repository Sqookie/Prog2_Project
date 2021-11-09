<?php
    $lang = array
    (   
        /* =========== MENU =========== */
        "title" => "元气骑士",
        "home" => "主页",
        "weapon" => "武器",
        "weapon_table" => "武器表格",
        "weapon_comment" => "武器评论",
        "character" => "角色",
        "language" => "语言",
        "lang_en" => "英语",
        "lang_hu" => "匈牙利语",
        "lang_cn" => "中文",

        /* =========== HOME PAGE =========== */
        "home_page"=>
        '
        <h1><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">补丁说明</a></h1>
            <span class="version_title">版本 3.3.0 (2021年 9月 23号)</span>
            <ul class="home_ul">
                <li>在试炼之地模式中添加了新的限时挑战。</li>
                <li>添加了钓鱼小游戏。</li>
                <li>为新皮肤系列蒸汽朋克添加了 6 种皮肤。</li>
                <li>添加了2个多人房间皮肤。</li>
                <li>添加了2个装甲坐骑和3个坐骑。</li>
                <li>重新制作字符选择面板。</li>
                <li>优化了家具、游戏模式和部分功能的解锁流程。</li>
                <li>完成了骑士、巫师和圣骑士所有皮肤的重新构造。</li>
                <li>为一些技能添加了视觉特效。</li>
                <li>添加了武器合并提示。</li>
                <li>修复了错误。</li> 
            </ul>
            <span class="version_title">版本 3.2.0 (2021年 7月 11号)</span>
            <ul class="home_ul">
                <li>新增传奇英雄越界者和古代元素使，需要用特殊神器召唤。</li>
                <li>新一季旧大陆的圣器现已开放！</li>
                <li>添加了一个生物群落（以及它的磁带）。</li>
                <li>添加了一系列新皮肤，星辰与大海。</li>
                <li>添加了3个多人房间皮肤。</li>
                <li>添加了6个增益和4个挑战条件。</li>
                <li>添加了4件武器和一个爪子娱乐室。</li>
                <li>添加了新成就。</li>
                <li>在一些旧生物群系中添加了新怪物。</li>
                <li>为守夜皮肤的第三项技能添加了视觉特效。</li>
                <li>重新设计了精灵、狼人和游侠的所有皮肤。</li> 
            </ul>
            <span class="version_title">版本 3.0.0 (2021年 1月 27号)</span>
            <ul class="home_ul">
                <li>中秋快乐！ 大堂已重新装修。
                <li>添加了新的生物群系沼泽和坟墓。 完成后，您将获得正面或负面的挑战条件。</li>
                <li>添加了季节模式。 本季游戏模式为小小指挥官。 实现特定目标以赢得季节性奖励。</li>
                <li>为5个角色添加了第3个技能。</li>
                <li>添加了中国歌剧主题皮肤！</li>
                <li>重新构造一些旧皮肤并将每个循环的帧数从 4 增加到 8。</li>
                <li>优化的用户界面显示。</li>
                <li>添加了在线多人游戏（测试版）。</li>
                <li>修复了一系列错误。</li> 
            </ul>
        ',
        
        /* =========== WEAPON PAGE =========== */
        "weapon_header" =>
        '
            <div class="weapon_title">概述</div>
            <div class="weapon_text">
                在地窖中，所有曾经获得过（至少获得一次）的武器都会与它们的统计数据和获得次数一起显示。
            </div>
            <div class="weapon_text">
                通过从扭蛋机、客厅内的宝箱、跑步过程中发现的箱子、自动售货机或在跑步过程中通过购买从商店获得该武器来增加该数字
            </div>
            <div class="weapon_text">
                对于入门武器，一旦升级，其未升级版本的地窖框架将永久替换为升级版本。
            </div>
            <div class="weapon_text">
                还有一个空框代表手刀。 季节性武器不会出现在地窖中。 
            </div>
            <div class="weapon_text"> 
                如果你想在武器上评论，请<a class="weapon_change" href="index.php?page=weapon_comment&lang='.$_SESSION['lang'].'">点击这里</a>。
            </div>
        ',

        "comment_header" =>
        '
            <div class="weapon_title">评论区</div>
            <div class="weapon_text">
                每一个武器的评论你在这里都能找到，尽情分享你的注意吧~ 注意评论礼仪喔！
            </div>
            <div class="weapon_text"> 
                如果你想搜索武器，请 <a class="weapon_change" href="index.php?page=weapon_table&lang='.$_SESSION['lang'].'">点击这里</a>。
            </div>
        ',

        "no_weapon_found" => "没找到相关武器",
        "filter_comment" => "从评论里筛选武器 （以目前选择的语言来筛选）",
        "filter" => "筛选",
        "select_weapon" => "----- 选择武器 -----",
        "comment" => "评论",
        "enter_your_comment" => "输入你的评论",
        "all_comments" => "所有评论",
        "filtered_comments" => "筛选后的评论",
        "comment_successful" => "评论成功！",
        "no_comment_available" => "没有评论",

        "search_for_weapon" => "搜索武器",
        "search" => "搜索",
        "weapon_name" => "武器名称",
        "damage" => "伤害",
        "energy_cost" => "蓝量消耗",
        "crit_chance" => "暴击率",
        "inaccuracy" => "偏移率",

        /* =========== CHARACTER PAGE =========== */
        "character_header" =>
        '
            <div class="character_title">升级角色会给予以下效果：</div>
            <div class="character_text">
                - <strong>1 星</strong>: 增加1点血量 (花费: 500 蓝币)
            </div>
            <div class="character_text">
                - <strong>2 星</strong>: 增加1点护盾 (花费: 1000 蓝币)
            </div>
            <div class="character_text">
                - <strong>3 星</strong>: 增加20点蓝量 (花费: 1500 蓝币)
            </div>
            <div class="character_text">
                - <strong>4 星</strong>: 技能冷却时间减少2秒 (花费: 2000 蓝币)
            </div>
            <div class="character_text">
                - <strong>5 星</strong>: 技能升级 - 每个角色的效果都不一样， 升级后将永久影响所有技能 (花费: 2500 蓝币)
            </div>
            <div class="character_text">
                - <strong>额外</strong>: 角色获得永久增益，以补充他们的技能/游戏风格 (花费: 5000 蓝币)
            </div>
            <div class="character_text">
                - <strong>额外 2</strong>: 永久升级角色初始武器 (花费: 8000 蓝币)
            </div>
            <div class="character_title">角色数据、价格和增益</div>
            <div class="character_text">
            列表中的生命值、护盾值和蓝量是初始数据（升级后的数据在旁边的括号中）
            </div>
        ',

        "character_name" => "角色名称",
        "character" => "角色",
        "health" => "生命值",
        "armor" => "护盾值",
        "energy" => "蓝量",
        "crit_chance" => "暴击率",
        "melee_damage" => "手刀伤害",
        "starter_weapon" => "初始武器",
        "price" => "价格",
        "bonus_buff" => "额外天赋",

        "knight" => "骑士",
        "knight_weapon" => "破旧的手枪",
        "knight_price" => "免费",
        "knight_buff" => "护甲被破坏不受额外伤害。",

        "rogue" => "游侠",
        "rogue_weapon" => "小明与小红",
        "rogue_price" => "2000 蓝币",
        "rogue_buff" => "子弹暴击穿透敌人。",

        "wizard" => "法师",
        "wizard_weapon" => "法典",
        "wizard_price" => "3000 蓝币",
        "wizard_buff" => "元素攻击暴击时效果双倍。",

        "assassin" => "刺客",
        "assassin_weapon" => "血刃",
        "assassin_price" => "4000 蓝币",
        "assassin_buff" => "近战武器可以反弹子弹。",

        "alchemist" => "炼金术士",
        "alchemist_weapon" => "休眠的毒泡泡泵",
        "alchemist_price" => "5000 蓝币",
        "alchemist_buff" => "免疫毒素并加强毒素攻击，免疫减速效果。",

        "engineer" => "工程师",
        "engineer_weapon" => "欠欠时代冲锋枪",
        "engineer_price" => "6￥",
        "engineer_buff" => "降低爆炸伤害并免疫火焰，对敌人火焰伤害增强。",

        "vampire" => "吸血鬼",
        "vampire_weapon" => "鲜血酒杯",
        "vampire_price" => "6￥",
        "vampire_buff" => "击杀敌人有概率恢复血量。",

        "paladin" => "圣骑士",
        "paladin_weapon" => "神圣连枷",
        "paladin_price" => "6￥",
        "paladin_buff" => "护盾被破坏时释放冲击波。",

        "elf" => "精灵",
        "elf_weapon" => "古老的弓",
        "elf_price" => "12000 蓝币",
        "elf_buff" => "蓄力武器速度加快。",

        "werewolf" => "狼人",
        "werewolf_weapon" => "灼热爪刃",
        "werewolf_price" => "12￥",
        "werewolf_buff" => "免疫陷阱并免疫碰撞伤害。",	

        "priest" => "牧师",
        "priest_weapon" => "木质十字架",
        "priest_price" => "12000 蓝币",
        "priest_buff" => "加强药水恢复能力。",

        "druid" => "德鲁伊",
        "druid_weapon" => "嘎嘣脆的骨头",
        "druid_price" => "12￥",
        "druid_buff" => "增强宠物，随从。",

        "robot" => "机器人",
        "robot_weapon" => "卫星浮游炮",
        "robot_price" => "用工程师解锁",
        "robot_buff" => "增强激光类武器。",

        "berserker" => "狂战士",
        "berserker_weapon" => "拳套",
        "berserker_price" => "12￥",
        "berserker_buff" => "击杀敌人恢复蓝量。",

        "necromancer" => "死灵法师",
        "necromancer_weapon" => "瘟疫之杖",
        "necromancer_price" => "12￥",
        "necromancer_buff" => "降低敌人子弹速度，拾起金币能量球范围提升。",

        "officer" => "警官",
        "officer_weapon" => "罪恶克星",
        "officer_price" => "成就解锁",
        "officer_buff" => "连续攻击武器的连击数增加。",

        "taoist" => "道士",
        "taoist_weapon" => "道剑",
        "taoist_price" => "12￥",
        "taoist_buff" => '使你的副武器进入浮游状态[角色限定]。',

        "interdimension_traveler" => "古代元素使",
        "interdimension_traveler_weapon" => "元能之相",
        "interdimension_traveler_price" => "回响琥珀解锁",
        "interdimension_traveler_buff" => "随机升起一个元素碑（冰，火，雷）攻击敌人。当不同属性的碑存在时，会进行复合攻击[角色限定]。",

        "element_envoy" => "越界者",
        "element_envoy_weapon" => "次元之握",
        "element_envoy_price" => "维度指引手册解锁",
        "element_envoy_buff" => "降低爆炸伤害并免疫火焰，对敌人火焰伤害提升，免疫冰冻对敌人的冰冻时间增加[角色限定]。",
        
        /* =========== SIGN IN/UP PAGE =========== */
        "signin" => "登录",
        "signup" => "注册",
        "username" => "用户名",
        "email" => "邮箱",
        "password" => "密码",
        "password_again" => "确认密码",
        "send" => "发送",
        "signout" => "退出",
        "not_signed_up" => "没有注册账号？",
        "sign_up_here" => "点击注册",
        "signed_up" => "已经注册了账号？",
        "sign_in_here" => "点击登录",
        "invalid_email" => "无效邮箱！",
        "wrong_answer" => "错误答案！",
        "successful_registration" => "注册成功！",
        "email_already_registered" => "邮箱已注册！",
        "password_not_matched" => "提供的密码不一致！",
        "wrong_email_or_password" => "错误邮箱或密码！",
        "user_not_exist" => "用户不存在！",
        
        /* =========== SEND EMAIL =========== */
        "hi" => "你好 ",
        "comma" => "，",
        "log_in_now" =>
        '
            <br><br>
            感谢您的注册！
            <br>
            您现在可以: <br>
            - 查看所有武器的数据 <br>
            - 查看所有角色的数据 <br>
            - 在武器下面评论 <br>
            - 使用搜索栏来寻找你想找到的数据 <br>

            <br>
            希望这个网站能帮到您！

            <br><br>
            此致,
            <br>
            <strong>曲奇君</strong>
        ',
        "subject" => "感谢您的注册",

        /* =========== COPYRIGHT =========== */
        "copyright" => "&copy; " . date("Y") . ". - 曲奇君有限公司 版权所有",
    );
?>