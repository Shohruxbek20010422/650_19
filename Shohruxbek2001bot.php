<?php
ob_start();
define('API_KEY', '1130210477:AAFuyReMzk2BL-1X7KU7vNhsm5Lxby2bkvE');
$admin = "688049453"; 
 function del($nomi){
   array_map('unlink', glob("$nomi"));
   }

   function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
} 
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
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$mtext = $message->text;
$capt = $message->caption;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$cty = $message->chat->type;
$step=file_get_contents("data/$fadmin/name.txt");

$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$botim="Xojaka_robot";
$soat = date('H:i', strtotime('5 hour'));
$message = $update->message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$gif = $message->animation;
$doc = $message->document;
$title = $message->chat->title;
$fadmin = $message->from->id;
$lang = $message->from->language_code;
$from = $message->from;
$id = $message->reply_to_message->from->id;
$message_id = $message->reply_to_message->message_id;
$from_user_first_name = $message->reply_to_message->from->first_name;
$text = $message->text;
$reply_message =$message->reply_to_message->message;
$reply_text_user_id = $message->reply_to_message->from->id;

$baza = file_get_contents("azo.dat");     
$baza1 = substr_count($baza,"\n");     
$baza1 +=160;
$gruppa = substr_count($baza,"-");     
$gruppa +=50;
$odam = $baza1 - $gruppa;     
$til1 = file_get_contents("aloqa/$chat_id.txt");   
$til = file_get_contents("aloqa/$cid2.txt");   
$chat_id2 = $update->callback_query->message->chat->id;
$mem = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$azo = $mem->result;
$title = $message->chat->title;

//Yangi odam id si
$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ism = $message->new_chat_member->first_name;
$username = $message->from->username;
$first_name = $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;
$step = file_get_contents("stat/$chat_id.step");
$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");
mkdir("warn");
mkdir("stat");
mkdir("sozlama");

//$warn_soni_user = file_get_contents("warn/$chat_id&$file_get_contents.dat"); Bu hali tayyor emas

// KANALDAN FORWARD
$chpost = $update->channel_post;
$chuser = $chpost->chat->username;
$chpmesid = $chpost->message_id;
$chcaption = $chpost->caption;

$get = file_get_contents("https://api.telegram.org/bot1130210477:AAFuyReMzk2BL-1X7KU7vNhsm5Lxby2bkvE/getUserProfilePhotos?user_id=$id&limit=1");
$json = json_decode($get);
$photo = $json->result->photos[0][0]->file_id;

$callback = $update->callback_query;
$dataa = $callback->data;
$dataa = explode("()",$dataa);

$cid = $callback->from->id;
$mid = $callback->message->message_id;
$imid = $callback->inline_message_id;
$idd = file_get_contents("sozlama/$cid.lch");
$gets = bot("getChat",[
"chat_id"=>"$idd",
]);

$title_get = $gets->result->title;

if((strpos($mtext,"/start") !== false)){if($cty == "group" or $cty == "supergroup"){
$a=json_encode(bot(bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "🖖 Assalomu alaykum <i> @Shohruxbekrobot</i> <b>1.0 versiya</b>da ishga tushdi.Botimiz juda <b>xazilkash</b> va <b>GRUPPA</b>ni ham nazorat qiladi. Botning barcha imkoniyatidan foydalanish uchun, botning lichkasiga o'ting \n \n 👨‍💻Bot yaratuvchisi : <u>@smarthackeruz</u>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[ 
[['text'=>"🤖Botga o'tish🤖",'url'=>"https://telegram.me/Shohruxbek2001bot?start"]]
]]),
])));
}
else{
$a=json_encode(bot(bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "🖖 Assalomu alaykum <i> @Shohruxbekrobot</i> <b>1.0 versiya</b>da ishga tushdi.Botimiz juda <b>xazilkash</b> va <b>GRUPPA</b>ni ham nazorat qiladi. Botimiz haqida toliq ma'lumot olish va botimizdagi bazi narsalar haqida malumot olish uchun <i>Malumot olish</i>ni bosing.Asosiy bolimga otish uchun <i>Asosiy menyu</i>ni bosing.⚜️ Premium olish uchun <i>Premium olish</i>ga bosing\n \n 
👨‍💻Bot yaratuvchisi : <u>@smarthackeruz</u>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[ 
[['text'=>"⚙️Asosiy menyu⚙️",'callback_data'=>'asosiymenyu'],
['text'=>'📜Malumot olish📜','callback_data'=>'malumot']],[['text'=>"⚜️Premium olish⚜️", 'callback_data' => "premium"],
['text'=>'➕ Guruhga qo`shing','url'=>'https://telegram.me/Shohruxbek2001bot?startgroup=new']]
]   
]),
])));
}
}
if($data=="start"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "🖖 Assalomu alaykum <i> @Shohruxbekrobot</i> <b>1.0 versiya</b>da ishga tushdi.Botimiz juda <b>xazilkash</b> va <b>GRUPPA</b>ni ham nazorat qiladi. Botimiz haqida toliq ma'lumot olish uchun <i>Malumot</i>ni bosing.Asosiy bolimga otish uchun <i>Asosiy menyu</i>ni bosing.\n \n 👨‍💻Bot yaratuvchisi : <u>@smarthackeruz</u>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>"⚙️Asosiy menyu⚙️",'callback_data'=>'asosiymenyu'],
['text'=>'📜Malumot📜','callback_data'=>'malumot']],[['text'=>"⚜️Premium⚜️", 'callback_data' => "premium"],
['text'=>'➕ Guruhga qo`shing','url'=>'https://telegram.me/Shohruxbek2001bot?startgroup=new']]
]
]),
]);
}if($data=="asosiymenyu"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Yana bir bor Assalomu alaykum 🤚. Bu botning <b>ASOSIY</b> menyusi⚙️. Bu yerda siz <i>Kamandalar</i>(buyruqlar)🗣 ro'yhatini ko'rishingiz, botning har bir <i>foydalanuvchisi</i>ga👥 va <i>guruhlar</i>ga👨‍👨‍👧‍👧 Reklama📺 jo'natishingiz, botni imkoniyatlarini kuchaytirish📈 haqida <i>taklif</i> berishingiz📩 va <i>shaxsiy bot</i> yaratib berishi🛠 uchun <b>Admin</b>ga👨‍💻 murojat qilishingiz mumkun📝.",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>"🌐Kamandalar ro'yhati🌐", 'callback_data' => "kamandalar"],['text'=>'🔰Reklama berish🔰','callback_data'=>"reklama"]],
  [['text'=>'🖊Taklif berish🖊','callback_data'=>"taklif"],
  ['text'=>'🤖Bot yaratish🤖','callback_data'=>"admin"]],
  [['text'=>"🔙Orqaga🔙", 'callback_data' => "start"]]
]
]),
]);
}
if($data=="kamandalar"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Bo bot ushbu kamanda(buyruq yoki xabar)larga javob beradi:

1️⃣ <i>Salom</i> - Salom so'ziga mos javob qaytaradi.\n
2️⃣ <i>Profil</i> - Sizning profilingizdagi rasmni jo'natadi.\n
3️⃣ <i>Sozlamalar</i> - Guruhda salom kamandasiga javob qaytarishini yoqish va o'chirish, guruhga tashlangan reklamalarni o'chirishni yoqish va o'chirish, gurhda suhbatlashishni yoqish va o'chirish, guruhga tashlangan gifni o'chirishni yoqish va o'chirish va  guruhga tashlangan stickerni o'chirishni yoqish va o'chirishni boshqarish (<u>Premium versiya uchun</u>)\n
4️⃣ <i>Soat</i> - Soat nechchi ekanligini jo'natadi\n
5️⃣ <i>Sana</i> - Sana nechchi ekanligini jo'natadi\n
6️⃣ <i>Id</i> -Sizning id raqamingizni jonatadi\n
7️⃣ <i>Guruh id</i> - Guruh id raqamini jo'natadi\n
8️⃣ <i>Kick</i> - Reply qilingan xabar egasini guruhdan kick qiladi(<u>Premium versiya uchun</u>)\n
9️⃣ <i>Ban</i> - Reply qilingan xabar egasini guruhdan ban qiladi (<u>Premium versiya uchun</u>)\n
🔟 <i>Ayblov</i> -Reply qilingan xabar egasiga ayblov qo'yadi, agar ayblov 3taga yetsa 3 soatga o'qish rejimiga tushuradi (<u>Premium versiya uchun</u>)\n
1️⃣1️⃣ <i>ogohlantirish</i> -Reply qilingan xabar egasiga ogohlantirish beradi, agar ogohlantirish 3taga yetsa guruhdan chiqarib yuboradi (<u>Premium versiya uchun</u>)\n
1️⃣2️⃣ <i>Kechir</i> - Reply qilingan xabar egasini ogohlantirish va ayblovlarini olib tashledi (<u>Premium versiya uchun</u>)\n
1️⃣3️⃣ <i>Pin</i> - Reply qilingan xabarni pin(tepaga)ga qo'yadi (<u>Premium versiya uchun</u>)\n
1️⃣4️⃣ <i>Xayr bot</i> - Botni guruhdan chiqarib yuboradi (<u>Premium versiya uchun</u>)\n
1️⃣5️⃣ Guruhda suhbatga mos javob qaytaradi\n
1️⃣5️⃣ <i>Read</i> - Reply qilingan xabar egasini faqat o'qish rejimiga tushurib qo'yadi (<u>Premium versiya uchun</u>)\n\n

Ro'yhatdagi  <u>Premium versiya uchun</u> deb yozilgan kamandalardan oddiy odam foydalana olmaydi. Ulardan foydalanish uchun ⚜️ Premium versiyani sotib oling! \n 
❗️ Yana qandaydur kamanda haqida takliflar bo'lsa '<i>Taklif</i>' bo'limidan foydalaninig.\n 
⚜️ Premium versiya haqida malumot olmoqchi bo'lsez <i>Premium</i> bo'limidan foydalaning.

\n \n 👨‍💻Bot yaratuvchisi : <u>@smarthackeruz</u>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>"❗️Taklif berish❗️", 'callback_data' => "taklif"],
['text'=>"⚜️Premium⚜️", 'callback_data' => "premium"]],
  [['text'=>"🔙Orqaga🔙", 'callback_data' => "asosiymenyu"]]
]
]),
]);
}
if($data=="taklif"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Yana bir bor Assalomu alaykum 🤚.Taklif berish uchun botni lichkasida '<i>Taklif</i>' so'zidan kegin taklifizi yozing.🖊 Biz buni albatta ko'rib chiqamiz💯",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>"⚙️Asosiy menyu⚙️", 'callback_data' => "asosiymenyu"],
['text'=>"🌐Kamandalar ro'yhati🌐", 'callback_data' => "kamandalar"]]
]
]),
]);
}
if($data=="reklama"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Yana bir bor Assalomu alaykum 🤚. Siz bergan <i>reklama</i>📛 botning barcha foydalanuvchilariga👥 va guruhlarga👩‍👩‍👧‍👧 jo'natiladi. Reklama berish narxi <u>plastikka</u>💳 o'tkaziladigan bo'lsa 1500 so'm💵. Agar <u>paynet</u>💸 qilinadigan bo'lsa 2000 so'm💵. <i>Reklama</i> bermoqchi bo'lsez adminga yozing. 🖊

Eslatma : 👨‍💻 <b>Admin</b> bilan iloji boricha, muomila madaniyatingizni to‘g‘irlab, keyin yozing❗️*",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>"👨‍💻Admin👨‍💻", 'callback_data' => "admin"],
['text'=>"🔙Orqaga🔙", 'callback_data' => "asosiymenyu"]]
]
]),
]);
}

if($data=="premium"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "⚜️ Premium versiya bu botni maksimal darajada ishlatish uchun kerak.⚜️ Premium versiyani olish uchun adminga pul o'tkazish kerak. Premium olish narxi <u>plastikka</u>💳 o'tkaziladigan bo'lsa 1500 so'm💵. Agar <u>paynet</u>💸 qilinadigan bo'lsa 2000 so'm💵. <i>Premium</i> olmoqchi bo'lsez adminga yozing🖊🖊\n
    ⚜️ Premium versiyani olishning boshqa yo'llarini ham qo'shish harakatidamiz!\n \n

Eslatma : 👨‍💻 <b>Admin</b> bilan iloji boricha, muomila madaniyatingizni to‘g‘irlab, keyin yozing❗️*",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>"👨‍💻Admin👨‍💻", 'callback_data' => "admin"],
['text'=>"🌐Kamandalar ro'yhati🌐", 'callback_data' => "kamandalar"]]
]
]),
]);
}
if($data == "admin"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "🔷 Bot admini: @smarthackeruz\nSizga ham botlar kerak bo'lsa, bizga murojaat qiling. Siz istagan botlarni tez, sifatli, va eng asosiysi, arzon narxlar-da yaratib beramiz!",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>"👨‍💻Admin lichkasiga o'tish👨‍💻", 'url' => "https://telegram.me/smarthackeruz"]],
[['text'=>"🔰Reklama berish🔰", 'callback_data' => "reklama"],['text'=>"⚜️Premium olish⚜️", 'callback_data' => "premium"]]
]
]),
]);
bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "👨‍💻Adminga ortiqcha mavzuda yozilgan xabar spamlanadi
     \n\nEslatma : 👨‍💻Admin bilan iloji boricha, muomila madaniyatingizni to‘g‘irlab, keyin yozing❗️*",
       'show_alert'=>true
        ]);
}
if($data == "malumot"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Assalomu alaykum. Bu bot <i>@smarthackeruz</i>👨‍💻 tomonidan tayyorlandi 💻. Botning maqsadi guruhni tartibga solish.👨‍🔧💟Meni ko'proq guruhlarga qo'shing va o'sha guruh eng zo'r guruh bo'ladi💥\n
    Botda yozilgan ⚜️ <i>Premium versiya</i> bu botni maksimal darajada ishlatish uchun kerak.⚜️ Premium versiyani olish uchun adminga pul o'tkazish kerak.\n
    📖 <i>Read only</i> rejimi - Yani faqat o'qish rejimi hisoblanadi. Guruh a'zozi bu rejimga tushib qolsa guruhga xabar yozolmaydi. Faqat o'qish bilan chegaralanadi\n
    Botning statistikasini ko'rmoqchi bo'lsez <i>Statistika</i> bo'limiga o'ting",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>"📈Statistika📈", 'callback_data' => "statistika"],['text'=>"🔙Orqaga🔙", 'callback_data' => "start"]]
]]),
]);
}
if($data == "malumot"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Assalomu alaykum. Bu bot <i>@smarthackeruz</i>👨‍💻 tomonidan tayyorlandi 💻. Botning maqsadi guruhni tartibga solish.👨‍🔧💟Meni ko'proq guruhlarga qo'shing va o'sha guruh eng zo'r guruh bo'ladi💥\n
    Botda yozilgan ⚜️ <i>Premium versiya</i> bu botni maksimal darajada ishlatish uchun kerak.⚜️ Premium versiyani olish uchun adminga pul o'tkazish kerak.\n
    📖 <i>Read only</i> rejimi - Yani faqat o'qish rejimi hisoblanadi. Guruh a'zozi bu rejimga tushib qolsa guruhga xabar yozolmaydi. Faqat o'qish bilan chegaralanadi\n
    Botning statistikasini ko'rmoqchi bo'lsez <i>Statistika</i> bo'limiga o'ting",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>"📈Statistika📈", 'callback_data' => "statistika"],['text'=>"🔙Orqaga🔙", 'callback_data' => "start"]]
]]),
]);
}