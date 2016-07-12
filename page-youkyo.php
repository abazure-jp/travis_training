<?php
/**
 * Title: 陽虚質
 */
 
 get_header();
showLoginBoxWithButton();
?>
<!--■メインここから -->
<div id="image-preload-subpage"></div><!--プリロードの設定-->

<nav id="pan">
    <div id="pan-inner"><!--classがpan-topだと非表示-->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a> ≫　陽虚質
    </div>
</nav>

<!-- コンテンツブロックここから -->
<div id="page_main">


    <!-- wrapper -->
    <div class="wrapper">
        <div class="contents">
           <!-- 体質別ページ共通パーツ -->
            <?php get_template_part( 'part','tainavi' ); ?>
            <!--/ 体質別ページ共通パーツ -->
        </div><!-- / .contents -->
    </div><!-- / .wrapper -->

   
    <!-- wrapper -->
    <div class="wrapper pb10">
        <div class="contents">
            <h2 class="ul fw_nomal">体質九分類</h2>
            <h2 class="sub"><img src="<?php echo get_template_directory_uri(); ?>/images/tai_youkyo_tit.png" alt="陽虚質 ようきょしつ"></h2>


        </div><!-- / .contents -->
    </div><!-- / .wrapper -->


    <!-- wrapper -->
    <div class="wrapper wrap_bg_gray_tai">
        <div class="contents">

            <img src="<?php echo get_template_directory_uri(); ?>/images/tai_youkyo_img.png" alt="陽虚質の特徴" class="tai_imgs">
            <p class="fw_b fs24">陽（エネルギー）が虚（不足）して、<br>冷えやすく、寒さに弱い<br>
            “冷え性タイプ”</p>
            <p class="fs20">体に必要なエネルギーを補充することが重要</p>
        </div><!-- / .contents -->
    </div><!-- / .wrapper wrap_bg_gray_tai -->


    <!-- wrapper -->
    <div class="wrapper">
        <div class="contents">
           

            <h3 class="ul">“陽虚質”<span class="fs20 fw_n">とは</span></h3>

            <div class="row">
                <div class="box395 fl_left">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tai_com_douga.png" alt="わかりやすく動画で解説" class="fl_left mr5">
                    <div class="fl_right"><img src="<?php echo get_template_directory_uri(); ?>/images/tai_com_douga2.png" alt="動画"></div>
                </div>
                <div class="box560 fl_right lh22">
		<?php if (!is_user_logged_in()){ //loginしてないとき ?>
<!--=====================■ビジター　ここから■===========================-->
			陽虚質の特徴：冷えやすく、寒さに弱い。<br><br>
 			① 寒さに弱い。<br>
			② 手足が冷たい。<br>
			③ 下痢しやすい。<br>
			④ 性格は内向的。<br>
			⑤ 顔色は白い。<br>

<!--=====================■ビジター　ここまで■===========================-->
		<?php }else{ //loginしてるとき  ?>
<?php if ( 2 == TS_MemberCapabilityManager::getConifoLevel()){ ?>
<!--=====================■無料会員　ここから■===========================-->
			陽虚質の特徴：冷えやすく、寒さに弱い。<br><br>
 			① 寒さに弱い。<br>
			② 手足が冷たい。<br>
			③ 下痢しやすい。<br>
			④ 性格は内向的。<br>
			⑤ 顔色は白い。<br><br>
			
<!--=====================■無料　ここまで■===========================-->
<?php } ?>
<?php if ( 3 == TS_MemberCapabilityManager::getConifoLevel()){ ?>
<!--=====================■コンシェルジュ　ここから■===========================-->
			<div class="tai_toku1">陽虚質の特徴：</div>
			<div class="tai_toku2">冷えやすく、寒さに弱い。この寒さは、絶対的な陽不足による「実寒」と陰が過剰で相対的に陽が不足している「虚寒」の2種類がある。陽虚は気虚のさらに進行したタイプとみなされている。</div>
			<div class="clear mb10"></div>
 			① 平素から寒がりで、手足が温まらない。<br>
 			　 また、膝、腰、背中、腹部、首筋が寒いと感じる。<br>
			② 冷たいものをとると体の調子が悪くなる。<br>
			③ 顔色は白く、はりがない。唇の色はうすい。<br>
			④ 月経痛、月経不順、過少月経、早発閉経、不妊がみられる。<br>
			⑤ 暖かい飲食を好む。<br>
			⑥ 便は軟らかぎみで、冷たいものをとると下痢になる場合がある。<br>
			⑦ 性格は内向的、感傷的で、落ち込むタイプである。情緒は不安定である。<br>
			⑧ 冬には弱いが夏には強い。人より風邪をひきやすい。<br><br>
			【分布状況】<br>寒い地方に多く、年齢層の高い男性と若い女性に多い。<br>
<!--=====================■コンシェルジュ　ここまで■===========================-->
<?php } ?>
		<?php } //loginしてるときここまで ?>

                </div>
            </div>
        </div><!-- / .contents -->
    </div><!-- / .wrapper wrap_bg_gray_tai -->


    <!-- wrapper -->
    <div class="wrapper">
        <div class="contents">
            <h3 class="ul">“陽虚質”<span class="fs20 fw_n">の</span>５<span class="fs20 fw_n">つの</span>養生</h3>
<?php if (!is_user_logged_in()){ //loginしてないとき ?>
<!--=====================■ビジター　ここから■===========================-->
            <ul class="tab">
                <li class="select"><img src="<?php echo get_template_directory_uri(); ?>/images/tai_yojo_1.png" alt="飲食の養生"></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/images/tai_yojo_2.png" alt="メンタル養生"></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/images/tai_yojo_3.png" alt="ライフスタイル"></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/images/tai_yojo_4.png" alt="運動による養生"></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/images/tai_yojo_5.png" alt="ツボのセルフケア"></li>
            </ul>
            <ul class="content">
		<!-------------------飲食の養生の内容ここから------------------->
                <li>
                    <h4>【飲食原則】</h4>

			生もの、冷たいもの（氷、アイスクリームなど）の摂りすぎは禁物。<br>
                    
                    <h4>【適する食材】</h4>
                    （食品群の分類は「五訂食品成分表」に準ずる）<br>
			① 穀類	: 米<br>
			② いも及びでん粉類 : サツマイモ<br>
			③ 砂糖及び甘味類 : 黒砂糖<br>
			④ 豆類	: アズキ（小豆）<br>
			⑤ 種実類 : 栗<br>
			⑥ 野菜類 : かぼちゃ<br>
			⑦ 果実類 : オリーブ<br>
			⑩ 魚介類 : うなぎ<br>
			⑪ 肉類	: 羊肉<br>
			⑰ 調味料及び香辛料類 : コショウ<br>


			<h4>【量を控える食材】</h4>

			⑥ 野菜類 : ニガウリ（ゴーヤ）<br>
			⑦ 果実類 : スイカ<br>

			<h4>【体質改善食】</h4>
                    
			ニラとクルミの炒め物

			<h4>【体質改善茶】</h4>

			ショウガ入り紫蘇甘茶


                    <div class="ta_center">
                       <a href="javascript: void(0);" class="nonborder tai_more_button show_minilogin">さらに詳しい情報を見る</a>
                    </div>
                </li>
		<!-------------------飲食の養生の内容ここまで------------------->
		<!-------------------メンタルの養生の内容ここから------------------->
                <li class="hide">
		友達を広く作り、周りの人とよく交流する。<br>
                    <div class="ta_center">
                       <a href="javascript: void(0);" class="nonborder tai_more_button show_minilogin">さらに詳しい情報を見る</a>
                    </div>

                </li>
		<!-------------------メンタルの養生の内容ここまで------------------->
		<!-------------------ライフスタイルの内容ここから------------------->
                <li class="hide">
		扇風機や冷房の風が直接当たらないように注意し、温度設定も低すぎないようにする。夏場のキャンプなど野外では体を冷やさないように注意する。<br>

                    <div class="ta_center">
                       <a href="javascript: void(0);" class="nonborder tai_more_button show_minilogin">さらに詳しい情報を見る</a>
                    </div>

                </li>
		<!-------------------ライフスタイルの養生の内容ここまで------------------->
		<!-------------------運動の養生の内容ここから------------------->
                <li class="hide">

		運動強度は、少し汗ばみ、疲労を感じない程度が望ましい。<br>
<br>
                    <div class="ta_center">
                       <a href="javascript: void(0);" class="nonborder tai_more_button show_minilogin">さらに詳しい情報を見る</a>
                    </div>
                </li>
		<!-------------------運動の養生の内容ここまで------------------->
		<!-------------------ツボのセルフケアの内容ここから------------------->
                <li class="hide">

		「足三里」を自己マッサージする。<br>
                    <div class="ta_center">
                       <a href="javascript: void(0);" class="nonborder tai_more_button show_minilogin">さらに詳しい情報を見る</a>
                    </div>

                </li>
		<!-------------------ツボのセルフケアの内容ここまで------------------->
            </ul>
<!--=====================■ビジター　ここまで■===========================-->
<?php }else{ //loginしてるとき  ?>
<?php if ( 2 == TS_MemberCapabilityManager::getConifoLevel()){ ?>
<!--=====================■無料会員　ここから■===========================-->
            <ul class="tab">
                <li class="select"><img src="<?php echo get_template_directory_uri(); ?>/images/tai_yojo_1.png" alt="飲食の養生"></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/images/tai_yojo_2.png" alt="メンタル養生"></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/images/tai_yojo_3.png" alt="ライフスタイル"></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/images/tai_yojo_4.png" alt="運動による養生"></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/images/tai_yojo_5.png" alt="ツボのセルフケア"></li>
            </ul>
            <ul class="content">
		<!-------------------飲食の養生の内容ここから------------------->
                <li>
                    <h4>【飲食原則】</h4>
			生もの、冷たいもの（氷、アイスクリームなど）の摂りすぎは禁物。<br>
                    
                    <h4>【適する食材】</h4>
                    （食品群の分類は「五訂食品成分表」に準ずる）<br>
			① 穀類	: 米、もち米<br>
			② いも及びでん粉類 : サツマイモ、長芋<br>
			③ 砂糖及び甘味類 : 黒砂糖<br>
			④ 豆類	: アズキ（小豆）、ソラマメ<br>
			⑤ 種実類 : 栗、クルミ<br>
			⑥ 野菜類 : かぼちゃ、玉ねぎ<br>
			⑦ 果実類 : オリーブ、さくらんぼ<br>
			⑧ きのこ類 : ヤマブシタケ<br>
			⑩ 魚介類 : うなぎ、太刀魚<br>
			⑪ 肉類	: 羊肉、牛肉<br>
			⑰ 調味料及び香辛料類 : コショウ、唐辛子<br>


			<h4>【量を控える食材】</h4>
			⑥ 野菜類 : ニガウリ（ゴーヤ）、クワイ<br>
			⑦ 果実類 : スイカ、ナシ（梨）<br>
			⑩ 魚介類 : カニ<br>

			<h4>【体質改善食】</h4>
			1. ショウガ入り羊肉スープ<br>
			2. ニラとクルミの炒め物

			<h4>【体質改善茶】</h4>

			ショウガ入り紫蘇甘茶


                    
                </li>
		<!-------------------飲食の養生の内容ここまで------------------->
		<!-------------------メンタルの養生の内容ここから------------------->
                <li class="hide">
		① 友達を広く作り、周りの人とよく交流する。<br>
		② プラス思考で暮らす。<br>

                </li>
		<!-------------------メンタルの養生の内容ここまで------------------->
		<!-------------------ライフスタイルの内容ここから------------------->
                <li class="hide">
		① 扇風機や冷房の風が直接当たらないように注意し、温度設定も低すぎないようにする。<br>
		　 夏場のキャンプなど野外では体を冷やさないように注意する。<br>
		② 住居は日当たりのよい南向きが望ましい。寝室は、温度変化の少ない環境が望ましく、<br>　 風邪、寒邪の影響を受けないようにする。<br>

                </li>
		<!-------------------ライフスタイルの養生の内容ここまで------------------->
		<!-------------------運動の養生の内容ここから------------------->
                <li class="hide">

		① 冬場は天気のよい日に、適度な室外運動をする。<br>
		② 運動強度は、少し汗ばみ、疲労を感じない程度が望ましい。<br>


                </li>
		<!-------------------運動の養生の内容ここまで------------------->
		<!-------------------ツボのセルフケアの内容ここから------------------->
                <li class="hide">
                    方　法：「足三里」を自己マッサージする。<br>
                    　　　　毎日2回、毎回3～5分、“痛気持ちいい”程度の強さで押す。<br>
                </li>
		<!-------------------ツボのセルフケアの内容ここまで------------------->
            </ul>
<!--=====================■無料　ここまで■===========================-->
<?php } ?>
<?php if ( 3 == TS_MemberCapabilityManager::getConifoLevel()){ ?>
<!--=====================■コンシェルジュ　ここから■===========================-->
            <ul class="tab">
                <li class="select"><img src="<?php echo get_template_directory_uri(); ?>/images/tai_yojo_1.png" alt="飲食の養生"></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/images/tai_yojo_2.png" alt="メンタル養生"></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/images/tai_yojo_3.png" alt="ライフスタイル"></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/images/tai_yojo_4.png" alt="運動による養生"></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/images/tai_yojo_5.png" alt="ツボのセルフケア"></li>
            </ul>
            <ul class="content">
		<!-------------------飲食の養生の内容ここから------------------->
                <li>
                    <h4>【飲食原則】</h4>
			① 体を温め、腎を補い、脾の機能を助けるものを摂る。<br>
			② 生もの、冷たいもの（氷、アイスクリームなど）の摂りすぎは禁物。<br>
                    
                    <h4>【適する食材】</h4>
                    （食品群の分類は「五訂食品成分表」に準ずる）<br>
			① 穀類	: 米、もち米、トウモロコシ<br>
			② いも及びでん粉類 : サツマイモ、長芋<br>
			③ 砂糖及び甘味類 : 黒砂糖<br>
			④ 豆類	: アズキ（小豆）、ソラマメ<br>
			⑤ 種実類 : 栗、クルミ、ハスの実、マツの実<br>
			⑥ 野菜類 : かぼちゃ、玉ねぎ、ニラ、ネギ、ショウガ、ニンニク<br>
			⑦ 果実類 : オリーブ、さくらんぼ、ナツメ、ぶどう、もも、ライチ<br>
			⑧ きのこ類 : ヤマブシタケ<br>
			⑩ 魚介類 : うなぎ、太刀魚、エビ、伊勢エビ、車エビ<br>
			⑪ 肉類	: 羊肉、牛肉、豚レバー、鹿肉、鶏肉<br>
			⑰ 調味料及び香辛料類 : コショウ、唐辛子<br>


			<h4>【量を控える食材】</h4>
			④ 豆類	: 緑豆<br>
			⑥ 野菜類 : ニガウリ（ゴーヤ）、クワイ<br>
			⑦ 果実類 : スイカ、ナシ（梨）<br>
			⑨ 藻類	: 昆布<br>
			⑩ 魚介類 : カニ<br>
			⑬ 乳類	: アイスクリーム<br>
			⑯ し好飲料類 : 緑茶、冷たいお茶、サイダー・ジュースなどの清涼飲料<br>

			<h4>【体質改善食】</h4>
			1. ショウガ入り羊肉スープ<br>
			2. クルミとハスの実入り豚肉煮込み<br>
			3. ニラとクルミの炒め物<br>

			<h4>【体質改善茶】</h4>

			1. ショウガ入り紫蘇甘茶<br>
			2. ショウガ龍眼茶<br>

			<h4>【ワンポイントアドバイス】</h4>
			 Q:陽虚質によいといわれているショウガについてもっと教えてください。<br>

			A:ショウガは五性六味では温性、辛味であり、とくにショウキョウ（生のショウガ）は手足の冷えによく、乾姜（カンキョウ：蒸したショウガを乾燥したもの）は体内とくに中焦（上腹部）を温めます。この機序はショウガが体内の寒気を発散させることによるものと考えられています。中医学ではもともと男性は陽に属し、女性は陰に属しますが、意外に男性の陽虚質が多く、「男子不可百日無姜」という言葉もあります。これは「男はショウガなしでは百日も暮らせない」という意味です。通常日本ではショウガは女性の冷え性によいとされていますが、実は男性もショウガを積極的に摂取した方がよい場合が多いです。<br>

                    
                </li>
		<!-------------------飲食の養生の内容ここまで------------------->
		<!-------------------メンタルの養生の内容ここから------------------->
                <li class="hide">
		① 友達を広く作り、周りの人とよく交流する。<br>
		② プラス思考で暮らす。<br>
		③ 気持ちを発散し、自分の胸の内を人に打ち明けるようにする。<br>
		④ 音楽は、軽快で楽しい軽音楽やクラシックがおすすめ。<br>
                </li>
		<!-------------------メンタルの養生の内容ここまで------------------->
		<!-------------------ライフスタイルの内容ここから------------------->
                <li class="hide">
		① 扇風機や冷房の風が直接当たらないように注意し、温度設定も低すぎないようにする。<br>
		　 夏場のキャンプなど野外では体を冷やさないように注意する。<br>
		② 古典理論では“春と夏は陽を養う”とされており、両季節とも太陽の光をよく浴びることが重要。<br>
		　 中医学では腹部は陰で、背部は陽とされるため、背中の日光浴が望ましい。<br>
		　 日光浴は陽気を強くし、経絡を温めて、気血の流れをスムーズにする。<br>
		　 ただし、長時間日に当たることは避ける。<br>
		③ 住居は日当たりのよい南向きが望ましい。<br>
		　 寝室は、温度変化の少ない環境が望ましく、風邪、寒邪の影響を受けないようにする。<br>

                </li>
		<!-------------------ライフスタイルの養生の内容ここまで------------------->
		<!-------------------運動の養生の内容ここから------------------->
                <li class="hide">
		① 運動の時期としては春と夏が最も適している。<br>
		② 冬場は天気のよい日に、適度な室外運動をする。<br>
		③ 風が強い日、寒い日、霧の濃い日、大雪の日は、運動を中止する。<br>
		④ 運動の際、汗のかきすぎには注意。<br>
		⑤ 運動の種類は、軽いジョギング、散歩、ラジオ体操、太極拳、太極剣、<br>
		　 八段錦、ゆっくりした縄跳びなどスローテンポな運動がおすすめ。<br>
		⑥ 全体的に運動強度は、少し汗ばみ、疲労を感じない程度が望ましい。<br>
                </li>
		<!-------------------運動の養生の内容ここまで------------------->
		<!-------------------ツボのセルフケアの内容ここから------------------->
                <li class="hide">
			<img src="<?php echo get_template_directory_uri(); ?>/images/taibetsu_tsubo_ashisan.jpg" alt="足三里" class="fl_right ml20">
			原　則：腎を補い、陽気を助けることで陽虚質の改善を図る。<br>
			方　法：「足三里」を自己マッサージ。<br>
			　　　　毎日2回、毎回3～5分、
			“痛気持ちいい”程度に刺激する。<br>
			場　所：膝蓋骨（膝小僧）の下縁から脛骨に沿って4横指下ったところから<br>
			　　　　さらに外側に1横指のところ。<br>
			<div class="clear"> </div>
                </li>
		<!-------------------ツボのセルフケアの内容ここまで------------------->
            </ul>
<!--=====================■コンシェルジュ　ここまで■===========================-->
<?php } ?>
<?php } //loginしてるときここまで ?>
        </div><!-- / .contents -->
    </div><!-- / .wrapper -->

    <!-- wrapper -->
    <div class="wrapper">
        <div class="contents tai_bb">
            <!-- 体質別ページ共通パーツ -->
            <?php get_template_part( 'part','tainavi' ); ?>
            <!--/ 体質別ページ共通パーツ -->
        </div><!-- / .contents -->
    </div><!-- / .wrapper -->


    <?php get_template_part( 'part','taibutton' ); ?>
    
    <?php get_template_part( 'prefooter','2' ); ?>
</div>
	<input type="hidden" id="minilogin_href" name="href" value="<?php echo get_query_var('pagename'); ?>" />
<!-- / コンテンツブロックここまで -->
<?php get_footer(); ?>