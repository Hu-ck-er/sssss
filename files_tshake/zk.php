<?php
ob_start();
$BOT_KEY = '362821931:AAFDYPW1lLrf2nBlBH9qPQ1HC0od3tVtDdE';
define('API_KEY',$BOT_KEY,0);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); 
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$iid = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$sudo = 407080957;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$alyousif = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@ALYOUSIFFAPi&user_id=$iid");
$getid = file_get_contents('yid.txt');
$exid = explode("\n", $getid);
$count = count($exid);

$inlineqt = $update->inline_query->query;
bot('answerInlineQuery',[
        'inline_query_id'=>$update->inline_query->id,    
        'results' => json_encode([[
            'type'=>'article',
            'id'=>base64_encode(rand(5,555)),
            'title'=>'مشاركة مع اصدقائك',
            'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"اهلا بكم💚 في بوت🤖 زخرفة الاسماء💎 يمكنك مع هذا البوت🎈 زخرفة اسمك بسرعه كبيره🕐"],
            'reply_markup'=>['inline_keyboard'=>[
                [
                ['text'=>'زخرف اسمك الأن❤👍️','url'=>'https://telegram.me/zkrfay_bot']
                ],
             ]]
        ]])
    ]);

if($text == "المشتركين" and $iid == $sudo){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>$count
]);
}
for($y = 0; $y < count($exid); $y++){
$bc = explode("/bc", $text);
if($bc and $iid == $sudo){
bot('sendMessage',[
'chat_id'=>$exid[$y],
'text'=>$bc[1]
]);
}
}

if($text == "/start" and !in_array($iid, $exid)){
file_put_contents('yid.txt',"\n". $iid,FILE_APPEND);
}
if($text == "/start" and strpos($alyousif, '"status":"left"') == TRUE){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"اشترك في القناة لأستخدام البوت❤👍",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضغط هنا للأشتراك", 'url'=>"https://t.me/joinchat/AAAAAERZgS1c5trPeS6qRg"]]    
]    
])
]);
}

if($text == "/start" and strpos($alyousif, '"status":"left"') != TRUE){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"اهلا بك عزيزي في بوت الزخرفه ",
'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
          ['text'=>'قسم الزخرفه العربيه 🇮🇶 ', 'callback_data'=>"zkar"]
        ],
        [
        ['text'=>'قسم الزخرفه الانكليزيه 🇱🇷 ', 'callback_data'=>"zken"]
        ],
        ]
])
]);
}
if($data == "home"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"اهلا بك عزيزي في بوت الزخرفه ",
'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
          ['text'=>'قسم الزخرفه العربيه', 'callback_data'=>"zkar"]
        ],
        [
        ['text'=>'قسم الزخرفه الانكليزيه', 'callback_data'=>"zken"]
        ],
        ]
])
]);
}

if($data == 'zkar'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'ارسل /zka والاسم لزخرفته
مثال:-
/zka يوسف
ستكون الزخرفه هكذا 
يِٰہوِسٰٰٓف͒ہٰٰ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه','callback_data'=>'home']] ,
[['text'=>"عرض الاقواس", 'callback_data'=>"akoas"]],
[['text'=>"عرض الاحرف", 'callback_data'=>"ahrf"]]
]    
])
]);
}
if($data == 'ahrf'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"حـروف الـزخـرفه🚶🍂
▪A = ـۂ͜ާـہ
▪B = ِـﮩ๋͜ﮧٰ۪ـہ
▪C = ـٍُہۣۗـٍُہۣۗ
▪D = ہٰ۫ـ❈ـّٰ̐ہٰٰ
▪E = ـٰ۪ہﮩ๋͜ﮧ
▪F = ـﮩﮨہٰٰہٰ
▪G = ــۛৣ๋͜ـۛۛہ
▪H = ــ๋͜ہٌٍۤـہٰٰٖ
▪I = ـٌٍّﮩٍٍّٖﮩٍِّٗـٗۤہٌٰٖ
▪J = ـًٍﮧٌٰٰٖﮧٰٖۤﮧْٰٖـ
▪K = ـﮩ๋͜ﮧـ͜ާ
▪L = ـہٰ❉ـّٰ̐ہٰٰ
▪M = ﮧ௸ْْـّٰ̐ہٰٰ
▪N = ۣۗﮧ✥ٍُـّٰ̐ہٰٰ
▪O = ـﮧـّٰ̐ہٰٰ
▪P = ٍـ௸ِـّٰ̐ہٰٰ
▪Q = ـِّﮧْٰٖ₰ـّٰ̐ہٰٰ
▪R = ـﮧ♚ـٰ̲̐ہ
▪S = ٰٰـٌـৡـ
▪T = ــ๘ٌ๋ـ
▪U = ـ✮๋͜͡‏ٰ̲ـِـ
▪V = ـٰٰٖـٰٰٖہـٰٰٖ͡ـہ
▪W = ـٌـৡـ
▪X = ــ๘ٌ๋ـ
▪Y = ـ✮๋͜͡‏ٰ̲ـِـ
▪Z = ـٰٰٖـٰٰٖہـٰٰٖ͡ـہ
▪٠ = ـہـْـہٰٰٖ͡ۂـ
▪١ = ٌـﮧـۂ͜ާـ‏
▪٢ = ہہًّ๋͜͡‏ِــًّ๋͜͡‏ـ
▪٣ = ہٰﹻٰ۪۫ﹻٰٰﹻٰٰ
▪٤ = ـہۧۖۖۗـ₪ۣۗـہـ
▪٥ = ـــ๋͜͡ـہٰٰ
▪٦ = ـــ๋͜͡ــ
▪٧ = ـٰٰٰٰٰٰٰ̲ـہ
▪٨ = ـٰٰٰٰٰٰٰ̲ــ
▪٩ = ــ͡ـ̡ـ
▪$ = ــ͡ـ̡ـہٰٰ
▪, = ــۢ͜ـہٰ
▪؛ = ـ̲̅̅ـــ
▪× = ـ̲̅̅ــہٰ
▪[ = ֆ
▪& = ໑
▪# = ♯
<~~~~~~~~~~>
طـريـقـة الأسـتـخـدام=>
/zka ي١وسف
الزخرفه:-
يِٰہـﮧـۂ͜ާـ‏وِسٰٰٓف͒ہٰٰ ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه','callback_data'=>'home']] ,
[['text'=>"رجوع", 'callback_data'=>"zkar"]]
]    
]) 
]);
}
if($data == 'akoas'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'الاقـواس🐼🍃

▪0 =║👹💥ᵛ͢ᵎᵖ ⌯﴾❥
▪1 =❥┊⁽ ℡ 🌸🌞
▪2 = ⇣ ֆ ̮☻ ء
▪3 = ˛₎🐳🍥۶ֆ
▪4 = ♩┊💎🌸❥ ₎
▪5 = ₎┋💗😻
▪6 = ┇⁽💜͢）
▪7 = ⁾ ⁞♩⁽🐰💗₎✿
▪8 = 『 ֆ🍒➻┋
▪9 = ᴖ⚉✨̈ |℡
▪@ = ˛⁽🐼”💗₎⇣
▪* = ❥🌞🌸࿓‏⁾♩
▪+ = ₎❁😻🌸⇣
▪! = ⁽💗🌝♩❥
▪: = 🍓❤️℡ֆᴖ̈
▪; = ⁾ ✿ ⁞ 💛˛
▪- =┋՞❁ 🌞💥 ﴾
▪_ =ֆ🙈💜❙✰ ﴾
▪/ =✫┋ ♛͢ ՞ ﴾
▪# =¦•☬ ‘🙆‘
▪< =❥•َْ ͢🤦🏻‍💔♂⁞₎
▪> =┊🏻“👄🌺) ℡
▪? =┋̈⁽ ❁ 💥 ֆ
▪a =❥ֆ☄⚡️ ᴗ̈
▪b =┊※🏎️‘’💛
▪c =﴿┊🙎🏼💛Ֆء﴾ۗ
▪d =ֆ💬💖⸽
▪e =₎⇣✿ ⁞😻🐼“
▪f =💥۶ֆᵛ͢ᵎᵖ ⌯﴾❥
▪g =❥•َ⚡️ْ🦇️͢ֆ⸽
▪h =♜🌸🐝 ⁞
▪i = ¦͢🙅🏻🍂₎⇣⌯﴾❥
▪j = ֆ#☻⸽͢₎⇣
▪k =⸽❥•َْ🌛🔥 ۶ֆ
▪l = ₎⇣۶ֆ🐿✿ ⁞
▪m = ❥•َْ ͢🌴🌙⸙۶ֆ
▪n = ₎⇣🌚🔥 ⁞͢₎⇣
▪o = ₎⇣♜⚡️͢ ⁞ֆ
▪p = ⸚❥•َ🌨☃┊ٴֆ
▪q =ާ҂ֆ͢🌞☄❥•َْ
▪r = ₎⇣🦋🌼۶͢ֆ ⁞
▪s = ║♜💛⚡️͢₎⇣✿ ⁞
▪t = ⇣✿💚💥 ⁞⌯﴾
▪u = ┊ާ͢💜🔥₎⇣
▪v = ⌯⇣✿💙☄ ⁞﴾❥
▪w = ¦⇣👽♜͢ ⁞
▪x =❥•َْ👻⚡️͢⸽۶ֆ
▪y = ֆ⸽♜👹🔥͢₎⇣
▪z =¦🌟😺₎⇣۶ֆ³¹³َ
<~~~~~~~~~~~~~>
طـريـقـة الاسـتـخـدام=> 
/zka يوسفj الزخرفه:-
يِٰہوِسٰٰٓف͒ہٰٰֆ#☻⸽͢₎⇣',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه','callback_data'=>'home']] ,
[['text'=>"رجوع", 'callback_data'=>"zkar"]]
]    
])
]);
}
if($data == 'zken'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"هناك عدة انواع من الزخرفه الانكليزيه 
النوع الاول:-
ارسل /zke والاسم
مثال:- /zke YOUSIF الجواب 
•🇾•🇴•🇻•🇸•🇮•🇫 \n النوع الثاني:-\n /zke1 YOUSIF الجواب:- \n YOᑌᔕIᖴ \n النوع الثالث:- \n /zke2 YOUSIF الجواب \n ᎽᎧᏬᏕᎨᎦ 
النوع الرابع:- \n /zke3 YOUSIF الجواب \n ʸᵒᵘˢᶤᶠ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه','callback_data'=>'home']] 
]    
])
]);
}

if(preg_match('/^\/([Zz]ke) (.*)/s',$text)and strpos($alyousif, '"status":"left"') != TRUE){
preg_match('/^\/([Zz]ke) (.*)/s',$text,$match);
$ev1 = $match[2];
$a1 = str_replace('a','•🇦',$ev1);
$a1 = str_replace('A','•🇦',$a1);
$b1 = str_replace("b","•🇧",$a1);
$b1 = str_replace("B","•🇧",$b1);
$c1 = str_replace("c","•🇨",$b1);
$c1 = str_replace("C","•🇨",$c1);
$d1 = str_replace("d","•🇩",$c1);
$d1 = str_replace("D","•🇩",$d1);
$e1 = str_replace("e","•🇪",$d1);
$e1 = str_replace("E","•🇪",$e1);
$f1 = str_replace("f","•🇫",$e1);
$f1 = str_replace("F","•🇫",$f1);
$g1 = str_replace("g","•🇬",$f1);
$g1 = str_replace("G","•🇬",$g1);
$h1 = str_replace("h","•🇭",$g1);
$h1 = str_replace("H","•🇭",$h1);
$i1 = str_replace("i","•🇮",$h1);
$i1 = str_replace("I","•🇮",$i1);
$j1 = str_replace("j","•🇯",$i1);
$j1 = str_replace("J","•🇯",$j1);
$k1 = str_replace("k","•🇰",$j1);
$k1 = str_replace("K","•🇰",$k1);
$l1 = str_replace("l","•🇱",$k1);
$l1 = str_replace("L","•🇱",$l1);
$m1 = str_replace("m","•🇲",$l1);
$m1 = str_replace("M","•🇲",$m1);
$n1 = str_replace("n","•🇳",$m1);
$n1 = str_replace("N","•🇳",$n1);
$o1 = str_replace("o","•🇴",$n1);
$o1 = str_replace("O","•🇴",$o1);
$p1 = str_replace("p","•🇵",$o1);
$p1 = str_replace("P","•🇵",$p1);
$q1 = str_replace("q","•🇶",$p1);
$q1 = str_replace("Q","•🇶",$q1);
$r1 = str_replace("r","•🇷",$q1);
$r1 = str_replace("R","•🇷",$r1);
$s1 = str_replace("s","•🇸",$r1);
$s1 = str_replace("S","•🇸",$s1);
$t1 = str_replace("t","•🇹",$s1);
$t1 = str_replace("T","•🇹",$t1);
$u1 = str_replace("u","•🇻",$t1);
$u1 = str_replace("U","•🇻",$u1);
$v1 = str_replace("v","•🇺",$u1);
$v1 = str_replace("V","•🇺",$v1);
$w1 = str_replace("w","•🇼",$v1);
$w1 = str_replace("W","•🇼",$w1);
$x1 = str_replace("x","•🇽",$w1);
$x1 = str_replace("X","•🇽",$x1);
$y1 = str_replace("y","•🇾",$x1);
$y1 = str_replace("Y","•🇾",$y1);
$z1 = str_replace("z","•🇿",$y1);
$z1 = str_replace("Z","•🇿",$z1);
$z1 = str_replace("1","•🇿",$z1); 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$z1,
]);
}

if(preg_match('/^\/([Zz]ke1) (.*)/s',$text) and strpos($alyousif, '"status":"left"') != TRUE){
preg_match('/^\/([Zz]ke1) (.*)/s',$text,$match);
$ev1 = $match[2];
$a1 = str_replace('a','ᗩ',$ev1);
$a1 = str_replace('A','ᗩ',$a1);
$b1 = str_replace("b","ᗷ",$a1);
$b1 = str_replace("B","ᗷ",$b1);
$c1 = str_replace("c","ᑕ",$b1);
$c1 = str_replace("C","ᑕ",$c1);
$d1 = str_replace("d","ᗪ",$c1);
$d1 = str_replace("D","ᗪ",$d1);
$e1 = str_replace("e","E",$d1);
$e1 = str_replace("E","E",$e1);
$f1 = str_replace("f","ᖴ",$e1);
$f1 = str_replace("F","ᖴ",$f1);
$g1 = str_replace("g","G",$f1);
$g1 = str_replace("G","G",$g1);
$h1 = str_replace("h","ᕼ",$g1);
$h1 = str_replace("H","ᕼ",$h1);
$i1 = str_replace("i","I",$h1);
$i1 = str_replace("I","I",$i1);
$j1 = str_replace("j","ᒍ",$i1);
$j1 = str_replace("J","ᒍ",$j1);
$k1 = str_replace("k","K",$j1);
$k1 = str_replace("K","K",$k1);
$l1 = str_replace("l","ᒪ",$k1);
$l1 = str_replace("L","ᒪ",$l1);
$m1 = str_replace("m","ᗰ",$l1);
$m1 = str_replace("M","ᗰ",$m1);
$n1 = str_replace("n","ᑎ",$m1);
$n1 = str_replace("N","ᑎ",$n1);
$o1 = str_replace("o","O",$n1);
$o1 = str_replace("O","O",$o1);
$p1 = str_replace("p","ᑭ",$o1);
$p1 = str_replace("P","ᑭ",$p1);
$q1 = str_replace("q","ᑫ",$p1);
$q1 = str_replace("Q","ᑫ",$q1);
$r1 = str_replace("r","ᖇ",$q1);
$r1 = str_replace("R","ᖇ",$r1);
$s1 = str_replace("s","ᔕ",$r1);
$s1 = str_replace("S","ᔕ",$s1);
$t1 = str_replace("t","T",$s1);
$t1 = str_replace("T","T",$t1);
$u1 = str_replace("u","ᑌ",$t1);
$u1 = str_replace("U","ᑌ",$u1);
$v1 = str_replace("v","ᐯ",$u1);
$v1 = str_replace("V","ᐯ",$v1);
$w1 = str_replace("w","ᗯ",$v1);
$w1 = str_replace("W","ᗯ",$w1);
$x1 = str_replace("x","᙭",$w1);
$x1 = str_replace("X","᙭",$x1);
$y1 = str_replace("y","Y",$x1);
$y1 = str_replace("Y","Y",$y1);
$z1 = str_replace("z","ᘔ",$y1);
$z1 = str_replace("Z","ᘔ",$z1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$z1,
]);
}
if(preg_match('/^\/([Zz]ke2) (.*)/s',$text) and strpos($alyousif, '"status":"left"') != TRUE){
preg_match('/^\/([Zz]ke2) (.*)/s',$text,$match);
$ev1 = $match[2];
$a1 = str_replace('a','Ꭿ',$ev1);
$a1 = str_replace('A','Ꭿ',$a1);
$b1 = str_replace("b","Ᏸ",$a1);
$b1 = str_replace("B","Ᏸ",$b1);
$c1 = str_replace("c","Ꮸ",$b1);
$c1 = str_replace("C","Ꮸ",$c1);
$d1 = str_replace("d","Ꮷ",$c1);
$d1 = str_replace("D","Ꮷ",$d1);
$e1 = str_replace("e","Ꮛ",$d1);
$e1 = str_replace("E","Ꮛ",$e1);
$f1 = str_replace("f","Ꭶ",$e1);
$f1 = str_replace("F","Ꭶ",$f1);
$g1 = str_replace("g","Ᏻ",$f1);
$g1 = str_replace("G","Ᏻ",$g1);
$h1 = str_replace("h","Ᏺ",$g1);
$h1 = str_replace("H","Ᏺ",$h1);
$i1 = str_replace("i","Ꭸ",$h1);
$i1 = str_replace("I","Ꭸ",$i1);
$j1 = str_replace("j","Ꮰ",$i1);
$j1 = str_replace("J","Ꮰ",$j1);
$k1 = str_replace("k","Ꮵ",$j1);
$k1 = str_replace("K","Ꮵ",$k1);
$l1 = str_replace("l","Ꮭ",$k1);
$l1 = str_replace("L","Ꮭ",$l1);
$m1 = str_replace("m","ᗰ",$l1);
$m1 = str_replace("M","ᗰ",$m1);
$n1 = str_replace("n","Ꮑ",$m1);
$n1 = str_replace("N","Ꮑ",$n1);
$o1 = str_replace("o","Ꭷ",$n1);
$o1 = str_replace("O","Ꭷ",$o1);
$p1 = str_replace("p","Ꭾ",$o1);
$p1 = str_replace("P","Ꭾ",$p1);
$q1 = str_replace("q","Ꮕ",$p1);
$q1 = str_replace("Q","Ꮕ",$q1);
$r1 = str_replace("r","ᖇ",$q1);
$r1 = str_replace("R","ᖇ",$r1);
$s1 = str_replace("s","Ꮥ",$r1);
$s1 = str_replace("S","Ꮥ",$s1);
$t1 = str_replace("t","Ꮱ",$s1);
$t1 = str_replace("T","Ꮱ",$t1);
$u1 = str_replace("u","Ꮼ",$t1);
$u1 = str_replace("U","Ꮼ",$u1);
$v1 = str_replace("v","Ꮙ",$u1);
$v1 = str_replace("V","Ꮙ",$v1);
$w1 = str_replace("w","Ꮗ",$v1);
$w1 = str_replace("W","Ꮗ",$w1);
$x1 = str_replace("x","Ꮂ",$w1);
$x1 = str_replace("X","Ꮂ",$x1);
$y1 = str_replace("y","Ꮍ",$x1);
$y1 = str_replace("Y","Ꮍ",$y1);
$z1 = str_replace("z","ᔓ",$y1);
$z1 = str_replace("Z","ᔓ",$z1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$z1,
]);
}
if(preg_match('/^\/([Zz]ke3) (.*)/s',$text) and strpos($alyousif, '"status":"left"') != TRUE){
preg_match('/^\/([Zz]ke3) (.*)/s',$text,$match);
$ev1 = $match[2];
$a1 = str_replace('a',"ᵃ",$ev1);
$a1 = str_replace('A',"ᵃ",$a1);
$b1 = str_replace("b","ᵇ",$a1);
$b1 = str_replace("B","ᵇ",$b1);
$c1 = str_replace("c","ᶜ",$b1);
$c1 = str_replace("C","ᶜ",$c1);
$d1 = str_replace("d","ᵈ",$c1);
$d1 = str_replace("D","ᵈ",$d1);
$e1 = str_replace("e","ᵉ",$d1);
$e1 = str_replace("E","ᵉ",$e1);
$f1 = str_replace("f","ᶠ",$e1);
$f1 = str_replace("F","ᶠ",$f1);
$g1 = str_replace("g","ᵍ",$f1);
$g1 = str_replace("G","ᵍ",$g1);
$h1 = str_replace("h","ʰ",$g1);
$h1 = str_replace("H","ʰ",$h1);
$i1 = str_replace("i","ᶤ",$h1);
$i1 = str_replace("I","ᶤ",$i1);
$j1 = str_replace("j","ʲ",$i1);
$j1 = str_replace("J","ʲ",$j1);
$k1 = str_replace("k","ᵏ",$j1);
$k1 = str_replace("K","ᵏ",$k1);
$l1 = str_replace("l","ˡ",$k1);
$l1 = str_replace("L","ˡ",$l1);
$m1 = str_replace("m","ᵐ",$l1);
$m1 = str_replace("M","ᵐ",$m1);
$n1 = str_replace("n","ᶰ",$m1);
$n1 = str_replace("N","ᶰ",$n1);
$o1 = str_replace("o","ᵒ",$n1);
$o1 = str_replace("O","ᵒ",$o1);
$p1 = str_replace("p","ᵖ",$o1);
$p1 = str_replace("P","ᵖ",$p1);
$q1 = str_replace("q","ᵠ",$p1);
$q1 = str_replace("Q","ᵠ",$q1);
$r1 = str_replace("r","ʳ",$q1);
$r1 = str_replace("R","ʳ",$r1);
$s1 = str_replace("s","ˢ",$r1);
$s1 = str_replace("S","ˢ",$s1);
$t1 = str_replace("t","ᵗ",$s1);
$t1 = str_replace("T","ᵗ",$t1);
$u1 = str_replace("u","ᵘ",$t1);
$u1 = str_replace("U","ᵘ",$u1);
$v1 = str_replace("v","ᵛ",$u1);
$v1 = str_replace("V","ᵛ",$v1);
$w1 = str_replace("w","ʷ",$v1);
$w1 = str_replace("W","ʷ",$w1);
$x1 = str_replace("x","ˣ",$w1);
$x1 = str_replace("X","ˣ",$x1);
$y1 = str_replace("y","ʸ",$x1);
$y1 = str_replace("Y","ʸ",$y1);
$z1 = str_replace("z","ᶻ",$y1);
$z1 = str_replace("Z","ᶻ",$z1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$z1,
]);
}


if(preg_match('/^\/([Zz]ka) (.*)/s',$text) and strpos($alyousif, '"status":"left"') != TRUE){
preg_match('/^\/([Zz]ka) (.*)/s',$text,$match);
$ev1 = $match[2];
$a1 = str_replace('ا','آ',$ev1);
$b1 = str_replace("ب","بّہ" ,$a1);
$c1 = str_replace("ت","تَہَٰ",$b1);
$d1 = str_replace("ح","حہٰٰ",$c1);
$e1 = str_replace("ج","جْۧ",$d1);
$f1 = str_replace("خ","خٰ̐ہ",$e1);
$g1 = str_replace("د","د",$f1);
$h1 = str_replace("ذ","ذِ",$g1);
$i1 = str_replace("ر","ر",$h1);
$j1 = str_replace("ز","زَ",$i1);
$k1 = str_replace("س","سٰٰٓ",$j1);
$l1 = str_replace("ش","شِٰہٰٰ",$k1);
$m1 = str_replace("ص","صۛہٰٰ",$l1);
$n1 = str_replace("ض","ضۜہٰٰ",$m1);
$o1 = str_replace("ظ","ظۗہٰٰ",$n1);
$p1 = str_replace("غ","غہٰٰ",$o1);
$q1 = str_replace("ف","ف͒ہٰٰ",$p1);
$r1 = str_replace("ق","قྀ̲ہٰٰٰ",$q1);
$s1 = str_replace("ك","ڪٰྀہٰٰٖ",$r1);
$t1 = str_replace("ل","ل",$s1);
$u1 = str_replace("ن","نَِٰہٰ",$t1);
$v1 = str_replace("ه","ھہ",$u1);
$w1 = str_replace("و","وِ",$v1);
$x1 = str_replace("طۨہٰٰ","ط",$w1);
$y1 = str_replace("ث","ثہٰٰ",$x1);
$z1 = str_replace("ي","يِٰہ",$y1);
$z2 = str_replace("ع","؏ۤـہٰٰ",$z1);
$z3 = str_replace("م","مٰ̲ہ",$z2);
$z3 = str_replace("0","║👹💥ᵛ͢ᵎᵖ ⌯﴾❥",$z3);
$z3 = str_replace("1","❥┊⁽ ℡ 🌸🌞",$z3); 
$z3 = str_replace("2","",$z3); 
$z3 = str_replace("3","₎🐳🍥۶ֆ",$z3); 
$z3 = str_replace("4","♩┊💎🌸❥ ₎",$z3); 
$z3 = str_replace("5","₎┋💗😻",$z3); 
$z3 = str_replace("6","┇⁽💜͢）",$z3); 
$z3 = str_replace("7","⁾ ⁞♩⁽🐰💗₎✿",$z3); 
$z3 = str_replace("8","『 ֆ🍒➻┋",$z3); 
$z3 = str_replace("9","ᴖ⚉✨̈ |℡",$z3); 
$z3 = str_replace("@","⁽🐼”💗₎⇣",$z3); 
$z3 = str_replace("*","❥🌞🌸  ࿓‏⁾♩",$z3); 
$z3 = str_replace("+","₎❁😻🌸⇣",$z3); 
$z3 = str_replace("!","⁽💗🌝♩❥",$z3); 
$z3 = str_replace(":","🍓❤️℡ֆᴖ̈",$z3); 
$z3 = str_replace(";","⁾ ✿ ⁞ 💛˛",$z3); 
$z3 = str_replace("-","┋՞❁ 🌞💥 ﴾",$z3);  
$z3 = str_replace("_","ֆ🙈💜❙✰ ﴾",$z3); 
$z3 = str_replace("/","✫┋ ♛͢ ՞ ﴾",$z3); 
$z3 = str_replace("#","¦•☬ ‘🙆‘",$z3); 
$z3 = str_replace("<","❥•َْ ͢🤦🏻‍💔♂⁞₎",$z3); 
$z3 = str_replace(">","┊🏻“👄🌺) ℡",$z3);  
$z3 = str_replace("?","┋̈⁽ ❁ 💥 ֆ",$z3); 
$z3 = str_replace("a","❥ֆ☄⚡️ ᴗ̈",$z3); 
$z3 = str_replace("b","┊※🏎️‘’💛",$z3); 
$z3 = str_replace("c","﴿┊🙎🏼💛Ֆء﴾ۗ",$z3); 
$z3 = str_replace("d","ֆ💬💖⸽",$z3);  
$z3 = str_replace("e","₎⇣✿ ⁞😻🐼“",$z3); 
$z3 = str_replace("f","💥۶ֆᵛ͢ᵎᵖ ⌯﴾❥",$z3); 
$z3 = str_replace("g","❥•َ⚡️ْ🦇️͢ֆ⸽",$z3); 
$z3 = str_replace("h","♜🌸🐝 ⁞",$z3); 
$z3 = str_replace("i","¦͢🙅🏻🍂₎⇣⌯﴾❥",$z3);   
$z3 = str_replace("j","ֆ#☻⸽͢₎⇣",$z3); 
$z3 = str_replace("k","⸽❥•َْ🌛🔥 ۶ֆ",$z3); 
$z3 = str_replace("l","₎⇣۶ֆ🐿✿ ⁞",$z3); 
$z3 = str_replace("m","❥•َْ ͢🌴🌙⸙۶ֆ",$z3); 
$z3 = str_replace("n","₎⇣🌚🔥 ⁞͢₎⇣",$z3);   
$z3 = str_replace("o","₎⇣♜⚡️͢ ⁞ֆ",$z3); 
$z3 = str_replace("p","⸚❥•َ🌨☃┊ٴֆ",$z3); 
$z3 = str_replace("q","҂ֆ͢🌞☄❥•َْ",$z3); 
$z3 = str_replace("r","₎⇣🦋🌼۶͢ֆ ⁞",$z3); 
$z3 = str_replace("s","║♜💛⚡️͢₎⇣✿ ⁞",$z3);   
$z3 = str_replace("t","⇣✿💚💥 ⁞⌯﴾",$z3); 
$z3 = str_replace("u","┊ާ͢💜🔥₎⇣",$z3); 
$z3 = str_replace("v","⌯⇣✿💙☄ ⁞﴾❥",$z3); 
$z3 = str_replace("w","¦⇣👽♜͢ ⁞",$z3); 
$z3 = str_replace("x","❥•َْ👻⚡️͢⸽۶ֆ",$z3);   
$z3 = str_replace("y","ֆ⸽♜👹🔥͢₎⇣",$z3);   
$z3 = str_replace("z","¦🌟😺₎⇣۶ֆ³¹³َ",$z3); 
$z3 = str_replace("A","ـۂ͜ާـہ",$z3); 
$z3 = str_replace("B","ـﮩ๋͜ﮧٰ۪ـہ",$z3); 
$z3 = str_replace("C","ـٍُہۣۗـٍُہۣۗ",$z3); 
$z3 = str_replace("D","ہٰ۫ـ❈ـّٰ̐ہٰٰ",$z3); 
$z3 = str_replace("E","ـٰ۪ہﮩ๋͜ﮧ",$z3);    
$z3 = str_replace("F","ـﮩﮨہٰٰہٰ",$z3); 
$z3 = str_replace("G","ــۛৣ๋͜ـۛۛہ",$z3); 
$z3 = str_replace("H","ــ๋͜ہٌٍۤـہٰٰٖ",$z3); 
$z3 = str_replace("I","ـٌٍّﮩٍٍّٖﮩٍِّٗـٗۤہٌٰٖ",$z3); 
$z3 = str_replace("J","ـًٍﮧٌٰٰٖﮧٰٖۤﮧْٰٖـ",$z3);    
$z3 = str_replace("K","ـﮩ๋͜ﮧـ͜ާ",$z3); 
$z3 = str_replace("L","ـہٰ❉ـّٰ̐ہٰٰ",$z3); 
$z3 = str_replace("M","ﮧ௸ْْـّٰ̐ہٰٰ",$z3); 
$z3 = str_replace("N","ﮧ✥ٍُـّٰ̐ہٰٰ",$z3); 
$z3 = str_replace("O","ـﮧـّٰ̐ہٰٰ",$z3);    
$z3 = str_replace("P","ـ௸ِـّٰ̐ہٰٰ",$z3); 
$z3 = str_replace("Q","ـِّﮧْٰٖ₰ـّٰ̐ہٰٰ",$z3); 
$z3 = str_replace("R","ـﮧ♚ـٰ̲̐ہ",$z3); 
$z3 = str_replace("S","ـٌـৡـ",$z3); 
$z3 = str_replace("T","ــ๘ٌ๋ـ",$z3);    
$z3 = str_replace("U","ـ✮๋͜͡‏ٰ̲ـِـ",$z3); 
$z3 = str_replace("V","ـٰٰٖـٰٰٖہـٰٰٖ͡ـہ",$z3); 
$z3 = str_replace("W","ـٌـৡـ",$z3); 
$z3 = str_replace("X","ــ๘ٌ๋ـ",$z3); 
$z3 = str_replace("Y","ـ✮๋͜͡‏ٰ̲ـِـ",$z3);    
$z3 = str_replace("Z","ـٰٰٖـٰٰٖہـٰٰٖ͡ـہ",$z3); 
$z3 = str_replace("١","ـﮧـۂ͜ާـ‏",$z3); 
$z3 = str_replace("٢","ہہًّ๋͜͡‏ِــًّ๋͜͡‏ـ",$z3); 
$z3 = str_replace("٣","ہٰﹻٰ۪۫ﹻٰٰﹻٰٰ",$z3); 
$z3 = str_replace("٤","ـہۧۖۖۗـ₪ۣۗـہـ",$z3);    
$z3 = str_replace("٥","ـــ๋͜͡ـہٰٰ",$z3); 
$z3 = str_replace("٦","ـــ๋͜͡ــ",$z3); 
$z3 = str_replace("٧","ـٰٰٰٰٰٰٰ̲ـہ",$z3); 
$z3 = str_replace("٨","ـٰٰٰٰٰٰٰ̲ــ",$z3);    
$z3 = str_replace("٩","ــ͡ـ̡ـ",$z3); 
$z3 = str_replace("٠","ـہـْـہٰٰٖ͡ۂـ",$z3); 
$z3 = str_replace(",","ــۢ͜ـہٰ",$z3); 
$z3 = str_replace("؛","ـ̲̅̅ـــ",$z3);    
$z3 = str_replace("×","ـ̲̅̅ــہٰ",$z3); 
$z3 = str_replace("[","ֆ",$z3);   
$z3 = str_replace("&","໑",$z3); 
$z3 = str_replace("#","♯",$z3);   
$z3 = str_replace("$","ــ͡ـ̡ـہٰٰ",$z3); 
bot('sendMessage',[
    'chat_id'=>$chat_id,
'text'=>"$z3",
]);
}
