$sudo = 280911803;
$user_id = $message->from->id;
$name = $message->from->first_name;
$username = $message->from->username;

if($text == "/start") {
MrDG( sendmessage ,[
 chat_id =>$chat_id,
 text =>"",
 reply_to_message_id =>$message->message_id,
]);
MrDG( sendMessage ,[
 chat_id =>$sudo,
 text =>"
َ
ℓ©- [ωℓcσмє вσт ](t.me/TH3VICTORY)
➖➖
ℓ☢️-  لديك رسالة جديدة
ℓ☣️- [Message](t.me/)
➖➖
ℓ🅾️-  مشترك جديد
ℓ🅰️- [New Member](t.me/TH3VICTORY)
➖➖
ℓ🚼- بيانات العضو هي كالتالي
ℓ✴️- [User Info](t.me/)
➖➖
ℓ☯️- المعرف الخاص بل عضو
ℓ🅿️- [@$username](t.me/$username)
➖➖
ℓ✳️- الاسم الخاص بل عضو
ℓ📳- [$name](t.me/$username)
➖➖
ℓ🚹- ايدي الخاص بل عضو
ℓ🆔- [$user_id](t.me/$username)
➖➖
ℓ💟- [Channel](t.me/TH3VICTORY)
",
 disable_web_page_preview => true ,
 parse_mode =>"Markdown",
]);
}
➖➖
❖￤ @PHP_IRAQ1