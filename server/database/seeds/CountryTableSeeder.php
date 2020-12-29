<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            [
                'name' => 'アメリカ合衆国',
                'imgpath' => 'use.jpg',
                'area' => '371',
                'population' => '32775',
                'capital' => 'ワシントンD.C.',
                'language' => '主として英語（法律上の定めはない）',
                'religion' => '信教の自由を憲法で保障，主にキリスト教',
                'gdp' => '17348',
                'happiness' => '6892',
                'detail' => 'アメリカ合衆国は、本土の48州にアラスカ、ハワイの2州と首都ワシントンD.C.からなり、各州が自治権を持って、一つひとつが国家のように存在している。広大な国だけに、地域により町の雰囲気も異なり、山岳地域や砂漠から亜熱帯性の気候までさまざま。文化を発信する活気あふれる大都市と小さくても魅力的な町がたくさんあり、多様なものが混在する。行く度に異なった表情を見せてくれ、ユニークでエキサイティングな旅の魅力を満喫できるアメリカは、「アメリカ」という言葉だけで表現しきれないほど奥深い国なのだ。',
                'comment' => 'northa'
            ],
            [
                'name' => 'カナダ',
                'imgpath' => 'canada.jpg',
                'area' => '998',
                'population' => '32775',
                'capital' => 'オタワ',
                'language' => '英語、フランス語が公用語',
                'religion' => '国民の3分の2以上（67.3％）がキリスト教徒（国民の約39％がローマ・カトリック）、約2割（23.9％）が無宗教（2011年カナダ統計局',
                'gdp' => '1785',
                'happiness' => '7278',
                'detail' => 'カナダといえば、ロッキー、ナイアガラ、メープル街道、プリンス・エドワード島が人気だが、広大なカナダには土地ごとに四季折々の魅力があふれている。自然とアウトドア派にはウィスラーでのスキーと夏のアクティビティ、バンクーバー島でのホエール・ウォッチング、イエローナイフのオーロラ観測、都会派にはバンクーバー、ビクトリア、トロント、モントリオールといった街々でのグルメ・ショッピング・エンターテインメントの楽しみが待っている。',
                'comment' => 'northa,wh'
            ],
            [
                'name' => 'メキシコ合衆国',
                'imgpath' => 'mexico.jpg',
                'area' => '196',
                'population' => '12619',
                'capital' => 'メキシコシティ',
                'language' => 'スペイン語',
                'religion' => 'カトリック（国民の約9割）',
                'gdp' => '1291',
                'happiness' => '6595',
                'detail' => 'メキシコは日本の約5倍の国土面積をもつ大国。西側は太平洋が広がり、東側は大西洋につながるメキシコ湾やカリブ海に面している。首都メキシコ・シティをはじめとした中央高原地帯は標高2000ｍ級の大地に都市が点在する、温暖で過ごしやすいエリアだ。一方で海岸沿いや南東部のユカタン半島などの低地は年間を通じて暑い日が続く。そんな地形や気候の起伏に富んだメキシコは各地に多様な文化があり、遺跡や古都、ビーチリゾートなどの観光要素が盛りだくさんだ。',
                'comment' => 'latin'
            ],
            [
                'name' => 'ブラジル連邦共和国',
                'imgpath' => 'brazil.jpg',
                'area' => '851',
                'population' => '20947',
                'capital' => 'ブラジリア',
                'language' => 'ポルトガル語',
                'religion' => 'カトリック約65％，プロテスタント約22％，無宗教8％（ブラジル地理統計院，2010年）',
                'gdp' => '2346',
                'happiness' => '6300',
                'detail' => '南米大陸の約半分を占めるブラジル。日本の約22.5倍、ロシア、カナダ、中国、アメリカに続き世界第5位という広大な国土は、赤道直下から南へ東西に大きく広がり、都市と都市との間には、今なお無人地帯が続いている。
                気候ひとつとっても、南部と北部ではまったく違う。中南部は平地が多く、パンタナールの湿原や大草原があり、南東部には山岳地帯がある。いっぽう北部は、アマゾン河流域とブラジル高原からなり、熱帯樹林に覆われた人跡未踏のエリアも多い。
                人種構成も、白人系48％、混血43％、黒人系8％、黄色人系1％といわれているが、正確なところはわからない。古くから、先住民と白人、黒人が混血を重ねてきたうえ、ポルトガル人、イタリア人、ドイツ人、日本人、アラブ人など数多くの移民を受け入れてきたため、今では人種が入り乱れ、人種構成を調べるとそのものが無意味となっている。
                それでも、個々の地域を見ると、人種のばらつきはある。おもしろいもので、それぞれの移民は、自分の本国と同緯度のところに暮らしている傾向がある。日系人はサン・パウロに住んでいるし、ドイツ人は南部、黒人は北部に多い。この人々の構成の違いと気候、地形の違いとが、ブラジルの各地域の特徴をつくり、“楽天主義とダイナミズム”、“感情的で無頓着”などの新しい特徴をもった人種を生み出した。そしてこの多様性こそが、ブラジルの顔となっている。
                ブラジルとはこんな国、とひとことでいうのは不可能だ。アマゾンの熱帯樹林の中でほとんど近代的な物を持たずに暮らす人々がいるかと思えば、近未来的なブラジリアの人工都市がある。そして、サルバドールの黒人文化、リオのカーニバル、コパカバーナ海岸の美女たち、サン・パウロの商業都市、イグアスの大瀑布、そして、ポルト・アレグレのガウーショまで。このすべてを自分の目で見て、ブラジルのいくつもの顔を、自分の肌で感じるしかない。
                ',
                'comment' => 'latin'
            ],
            [
                'name' => 'アルゼンチン共和国',
                'imgpath' => 'argentine.jpg',
                'area' => '278',
                'population' => '4494',
                'capital' => 'ブエノスアイレス',
                'language' => 'スペイン語',
                'religion' => 'カトリック等',
                'gdp' => '543',
                'happiness' => '6086',
                'detail' => '銀の国、アルゼンチンは、278万400km2、南北3800kmで国土面積世界第8位。首都ブエノス・アイレスは、ラ・プラタ川沿いに位置する大都市。そこからチリ国境へかけての西側は、ワインの里メンドーサや保養地のコルドバといった気候のいいエリアが広がる。ボリビア国境にかけての北側は、灼熱の太陽がむき出しの山肌を照らす乾燥地帯。その中心サルタは、アルゼンチンフォルクローレのメッカだ。そして南緯40度以南のパタゴニア地方は、人よりも動物が多いエリア。世界に残された数少ない大自然を実感できるフィールドだ。',
                'comment' => 'latin,wh'
            ],
            [
                'name' => '日本',
                'imgpath' => 'japan.jpg',
                'area' => '37',
                'population' => '12581',
                'capital' => '東京都',
                'language' => '日本語',
                'religion' => '主に無宗教、仏教、神道',
                'gdp' => '4602',
                'happiness' => '5886',
                'detail' => '気候は四季の変化に富み、国土の多くは山地で、人口は沿岸の平野部に集中している。国内には行政区分として47の都道府県があり、日本民族・アイヌ民族・外国人系の人々などが居住し、事実上の公用語として日本語が使用される。',
                'comment' => 'ajia'
            ],
            [
                'name' => '中華人民共和国',
                'imgpath' => 'chaina.jpg',
                'area' => '960',
                'population' => '140000',
                'capital' => '北京',
                'language' => '中国語',
                'religion' => '仏教・イスラム教・キリスト教など',
                'gdp' => '	10356',
                'happiness' => '5191',
                'detail' => '長い歴史と広大な土地をもつ中国。日本がもっとも古くからつながりをもつ国だ。中国を代表する大都市北京、上海は近代化の波にのり毎日違った顔を見せてくれる。西安、広州、桂林など魅力的な都市は中国全土に広がる。偉大なる歴史的文化遺産、美麗な景色、なにをとってもそのスケールの大きさに驚かされる。またどこへ行ってもおいしい本場中国の味に舌鼓を打つことだろう。東西南北、中国への興味は尽きることがない。',
                'comment' => 'ajia'
            ],
            [
                'name' => '大韓民国',
                'imgpath' => 'korea.jpg',
                'area' => '10',
                'population' => '5178',
                'capital' => 'ソウル',
                'language' => '韓国語',
                'religion' => '仏教（約762万人）、プロテスタント（約968万人）、カトリック（約389万人）等',
                'gdp' => '1410',
                'happiness' => '5895',
                'detail' => '日本から2時間で着くお隣の国「韓国」は、知れば知るほど興味深い国。人々の考え方も常識も似ているようでかなり違う。在来市場や市場ご飯は日本にないものばかり。そして現代的な街と昔ながらのレトロな路地がひとつのエリアに同居するパラレルワールドや人々の情に出会えば、もうあなたは韓国のとりこ。日本人を魅了するノンバーバルパフォーマンスや伝統芸能も、ぜひ現地で体感してみたい。また、韓国ならではのビューティー体験も、女性の旅には欠かせない。韓国で、人情ゆたかでおいしい旅を楽しもう！',
                'comment' => 'ajia,wh'
            ],
            [
                'name' => 'インドネシア共和国',
                'imgpath' => 'indonesia.jpg',
                'area' => '192',
                'population' => '26700',
                'capital' => 'ジャカルタ',
                'language' => 'インドネシア語',
                'religion' => 'イスラム教87.21％、キリスト教9.87％（プロテスタント6.96％、カトリック2.91％）、ヒンズー教1.69％、仏教0.72％、儒教0.05％、その他0.50％',
                'gdp' => '888',
                'happiness' => '5192',
                'detail' => '赤道にまたがり東西5110㎞に延びる、世界最多の島嶼をもつ国インドネシア。1万数千もの島々によって構成され、地域ごとに独自の文化や美しい自然に出合うことができる。',
                'comment' => 'ajia'
            ],
            [
                'name' => 'インド',
                'imgpath' => 'india.jpg',
                'area' => '328',
                'population' => '121057',
                'capital' => 'ニューデリー',
                'language' => '連邦公用語はヒンディー語，他に憲法で公認されている州の言語が21',
                'religion' => 'ヒンドゥー教徒79.8％，イスラム教徒14.2％，キリスト教徒2.3％，シク教徒1.7％，仏教徒0.7％，ジャイナ教徒0.4％',
                'gdp' => '2051',
                'happiness' => '4.015',
                'detail' => '日本の約9倍の面積をもつ、広大なインド亜大陸。ヤシの木が繁る熱帯の海岸線、雪に覆われたヒマーラヤの聖地、ラクダが行き交う乾いた砂漠、ベンガルタイガーが生息する森林、大河とともに生きる人々、ブッタが歩いた過酷な自然の地、緻密な彫刻に彩られた建造物...。変化に富んだ自然と、そこに暮らす多種多様な民族。5000年の歴史が生み出した多くの遺物を前にすると、いったいどれから見たらいいのか、途方に暮れてしまうだろう。',
                'comment' => 'ajia'
            ],
            [
                'name' => 'サウジアラビア王国',
                'imgpath' => 'saudi.jpg',
                'area' => '215',
                'population' => '3370',
                'capital' => 'リヤド',
                'language' => 'アラビア語（公用語）',
                'religion' => 'イスラム教',
                'gdp' => '746',
                'happiness' => '6375',
                'detail' => 'イスラム教の始祖ムハンマドの生まれたサウジアラビアは、メッカ、メディナというイスラム2大聖地をかかえるイスラム教の発祥地。国の法として位置づけられているコーランおよびハディース（預言者の言行録）では、アルコール、男女の混同、賭け事などが禁止され、女性が外出する場合はアバヤ（黒いマント）を着用しなければならない。これが外国人にも適用される。町では風紀取締官が目を光らせていて、捕まると簡単には解放されない。ただ物質的に豊かなこの国での生活は意外に快適だ。',
                'comment' => 'easta'
            ],
            [
                'name' => 'トルコ共和国',
                'imgpath' => 'turkey.jpg',
                'area' => '780',
                'population' => '8315',
                'capital' => 'アンカラ',
                'language' => 'トルコ語（公用語）',
                'religion' => 'イスラム教（スンニ派、アレヴィー派）が大部分を占める。',
                'gdp' => '798',
                'happiness' => '5373',
                'detail' => '黒海、エーゲ海、地中海に囲まれた国トルコ。ヨーロッパとアジアの交わるところに位置するその地理的状況と同様に、文化的にもアジアとヨーロッパが交じり合う場所だ。またこの地は文明発生以来、さまざまな民族が訪れ、去っていったところでもある。それゆえこの国はさまざまな顔を持つ。アジアとヨーロッパをつなぐ町イスタンブール、世界遺産に登録されているカッパドキア、世界で愛されるトルコ料理など、その魅力は尽きない。',
                'comment' => 'ajia'
            ],
            [
                'name' => 'フランス共和国',
                'imgpath' => 'french.jpg',
                'area' => '54',
                'population' => '6706',
                'capital' => 'パリ',
                'language' => 'フランス語',
                'religion' => 'カトリック、イスラム教、プロテスタント、ユダヤ教',
                'gdp' => '2833',
                'happiness' => '6592',
                'detail' => 'フランスは、あらゆる面において「豊かな国」だ。モン・サン・ミッシェルやヴェルサイユ宮殿など数多くの歴史遺産、食通をうならせる料理とワインにスイーツ、芸術家たちを虜にしたパリの都、そして多彩な魅力にあふれた地方の町……。アウトドア派、アート・ファン、グルメ、ショッピングなど、さまざまな旅人が求めるものが、きっと見つかる国。何度訪れても飽きることのない世界有数の観光大国だ。',
                'comment' => 'eu,wh'
            ],
            [
                'name' => 'ドイツ連邦共和国',
                'imgpath' => 'germany.jpg',
                'area' => '35',
                'population' => '8315',
                'capital' => 'ベルリン',
                'language' => 'ドイツ語',
                'religion' => 'カトリック（29.9％），プロテスタント（28.9％），イスラム教（2.6％），ユダヤ教（0.1％）',
                'gdp' => '3874',
                'happiness' => '6923',
                'detail' => 'ドイツの特徴は、イギリスにおけるロンドンやフランスにおけるパリのような一極集中の都市をもたないこと。自由都市や小さな領邦国家の集まりだった中世からの歴史が、個性的な地方文化をもたらした。どこを回るかで、まったく違ったドイツの顔に出合う楽しみがある。東西統合の歴史を語るベルリン、国際都市フランクフルト、新旧の文化が共存するミュンヘンなどの都市や、美しい景色に出会えるロマンチック街道など観光としての見どころが多彩だ。',
                'comment' => 'eu,wh'
            ],
            [
                'name' => 'イタリア共和国',
                'imgpath' => 'italian.jpg',
                'area' => '30',
                'population' => '6046',
                'capital' => 'ローマ',
                'language' => 'イタリア語',
                'religion' => 'キリスト教（カトリック）が国民の約80％と言われる。',
                'gdp' => '2147',
                'happiness' => '6892',
                'detail' => '世界遺産の宝庫、イタリア。芸術、文化、観光、食、ショッピングなど魅力満載で、陽気にホスピタリティあふれる人々が迎えてくれる国だ。人気の都市といえば、現代と古代が調和された町ローマ。ルネッサンス都市フィレンツェ。水の都であり旅情あふれるヴェネツィア。ショッピングも楽しい現代イタリアを代表する活気あるミラノ。どの街を訪れてもそれぞれに違う表情を与えてくれる。生きる喜びにあふれ、生活を楽しむイタリア人のなかで過ごすイタリアの旅は、私たちにも生きる喜びと新しい力を与えてくれるに違いない。',
                'comment' => 'eu,wh'
            ],
            [
                'name' => '英国',
                'imgpath' => 'british.jpg',
                'area' => '24',
                'population' => '6680',
                'capital' => 'ロンドン',
                'language' => '英語（ウェールズ語、ゲール語等使用地域あり）',
                'religion' => '英国国教会等',
                'gdp' => '2950',
                'happiness' => '7054',
                'detail' => 'イギリスといえば、バラの花咲くイングリッシュ・ガーデン、歴史と伝統を残したマナー・ハウス、そして優雅な午後の紅茶を思い浮かべる人も多いだろう。カントリー・サイドには多くの自然が残り、ゆったりとした時の流れを感じとることができる。しかし、イギリスには、ロンドンという刺激的な大都市もある。ショッピング、エンターテインメントなど、あらゆる文化の最先端と伝統が混在するロンドンは、カントリー・サイドとは一味違った魅力が凝縮されている。何度訪れても飽きることがない、さまざまな顔を持っている国だ。',
                'comment' => 'eu,wh'
            ],
            [
                'name' => 'ロシア連邦',
                'imgpath' => 'russia.jpg',
                'area' => '1710',
                'population' => '14680',
                'capital' => 'モスクワ',
                'language' => 'ロシア語',
                'religion' => 'ロシア正教，イスラム教，仏教，ユダヤ教等。',
                'gdp' => '1860',
                'happiness' => '5648',
                'detail' => 'ユーラシア大陸の北部、バルト海沿岸から太平洋まで東西に伸びる世界最大の領土を持つロシア。この自然環境と、人々とのおおらかさが魅力だ。ロシア人は、歌や詩や踊りが大好きで、川や海で泳ぐなど自然と戯れるのが得意。無愛想に見えても、よくつきあってみるとユーモアを絶やさず、もてなし好きだ。ロシアでの一番の見どころは、劇場。“舞台芸術の王国”といわれ、オペラやバレエ、芝居などハイレベルの楽しい作品をみせてくれる。本当のロシアを手探りで確かめながら旅をすれば、実り豊かなめぐりあいが待っているにちがいない。',
                'comment' => 'eu'
            ],
            [
                'name' => '南アフリカ共和国',
                'imgpath' => 'africa.jpg',
                'area' => '122',
                'population' => '5778',
                'capital' => 'プレトリア',
                'language' => '英語，アフリカーンス語，バンツー諸語（ズールー語，ソト語ほか）の合計11が公用語',
                'religion' => 'キリスト教（人口の約80％），ヒンズー教，イスラム教等',
                'gdp' => '350',
                'happiness' => '4722',
                'detail' => 'アフリカ大陸の最南端、東はインド洋、西は大西洋に囲まれ、豊かな自然と資源を有する。沿岸部はケープタウンを中心に、いくつもの見どころや観光地が続く。内陸部は、クルーガー国立公園を筆頭に数多くの国立公園や自然保護区が見られる。大自然の美しさを各地に残しつつ、ダイヤや金の発見により経済的にもアフリカ大陸最大の国となった南アフリカ。アフリカで最もアフリカらしくない国ともいわれるが、白人による国の中枢支配の長い歴史もあり、アフリカともヨーロッパとも違う独自の文化を育み、新しい時代を歩んでいる。',
                'comment' => 'africa'
            ],
            [
                'name' => 'オーストラリア連邦',
                'imgpath' => 'australia.jpg',
                'area' => '769',
                'population' => '2565',
                'capital' => 'キャンベラ',
                'language' => '英語',
                'religion' => 'キリスト教52％、無宗教30％',
                'gdp' => '1442',
                'happiness' => '7228',
                'detail' => '日本の約21倍の面積を持つ広大な国オーストラリア。グレート・バリア・リーフ、エアーズ・ロックなど世界に類を見ない壮大な自然景観、カンガルーやコアラなどのユニークな動物たち。街に目を向けると、オリンピックを成功させ活気溢れるシドニー、英国風のたたずまいを見せるメルボルン、一年中温暖で「世界でもっとも住みやすい」といわれるパース。自然も都市も丸ごと楽しめ、しかもアクティブでワンダフルな体験がいっぱいできるオーストラリア。ここは旅の魅力がいっぱい詰まった「旅大陸」だ！',
                'comment' => 'ocea,wh'
            ],
            [
                'name' => 'ニュージーランド',
                'imgpath' => 'newzealand.jpg',
                'area' => '27',
                'population' => '504',
                'capital' => 'ウェリントン',
                'language' => '英語、マオリ語、手話',
                'religion' => 'キリスト教36.5％、無宗教48.2％',
                'gdp' => '2052',
                'happiness' => '7307',
                'detail' => '南半球のニュージーランド、日本とは季節が逆の国。だからこそ南十字星や右巻の渦巻きなど新しい発見がある。国土は日本の四分の三、そこには国立公園が点在し、国を挙げて自然環境の保護に取り組んでいる。大都市でも車で1時間も走れば緑と羊の群に出会う。アウトドアを楽しむもよし、マオリ文化に浸るのもよし、南半球の楽園での楽しみ方はいっぱいある。リピーターの多いのもこの国の特徴だ。',
                'comment' => 'ceaa,wh'
            ]
        ]);
    }
}
