if text:match("^ايدي$") and msg.reply_to_message_id_ == 0 then
local function getpro(extra, result, success)
local user_msgs = database:get('user:msgs'..msg.chat_id_..':'..msg.sender_user_id_)
   if result.photos_[0] then
      if is_sudo(msg) then
      if database:get('lang:gp:'..msg.chat_id_) then
      t = 'Sudo'
      else
      t = 'رجل مطور  🛑'
      end
      elseif is_admin(msg.sender_user_id_) then
      if database:get('lang:gp:'..msg.chat_id_) then
      t = 'Global Admin'
      else
      t = 'رجل ادمن  🛡'
      end
      elseif is_owner(msg.sender_user_id_, msg.chat_id_) then
      if database:get('lang:gp:'..msg.chat_id_) then
      t = 'Group Owner'
      else
      t = 'رجل مدير  🔊'
      end
      elseif is_mod(msg.sender_user_id_, msg.chat_id_) then
      if database:get('lang:gp:'..msg.chat_id_) then
      t = 'Group Moderator'
      else
      t = 'رجل ادمن  🛡'
      end
      else
      if database:get('lang:gp:'..msg.chat_id_) then
      t = 'Group Member'
      else
      t = ' رجل عظو  👁‍🗨'
      end
    end
         if not database:get('bot:id:mute'..msg.chat_id_) then
          if database:get('lang:gp:'..msg.chat_id_) then
            sendPhoto(msg.chat_id_, msg.id_, 0, 1, nil, result.photos_[0].sizes_[1].photo_.persistent_id_,"¶ - رقم حذائك ?? ┇  "..msg.sender_user_id_.."\n¶ - رجل 🛑 ┇  "..t.."\n¶ - شكد ماشي برجلك 🔘 ┇  "..user_msgs,msg.id_,msg.id_.."----------------\n [ @css_1 ]")
  else
                    
       sendPhoto(msg.chat_id_, msg.id_, 0, 1, nil, result.photos_[0].sizes_[1].photo_.persistent_id_,"¶ - رقم حذائك 🆔 ┇  "..msg.sender_user_id_.."\n¶ - رجل 🛑 ┇  "..t.."\n¶ - شكد ماشي برجلك 🔘 ┇  "..user_msgs,msg.id_,msg.id_.."----------------\n [ @team_faeder ]")
end
else 
      end
   else
         if not database:get('bot:id:mute'..msg.chat_id_) then
          if database:get('lang:gp:'..msg.chat_id_) then
      send(msg.chat_id_, msg.id_, 1, "¶ -انت لا تملك ماركه لحذائك 💈┇\n\n¶ - رقم حذائك 🆔 ┇ "..msg.sender_user_id_.."\n¶ - شكد ماشي برجلك  🔘 ┇ _"..user_msgs.."_---------------\n[ @css_1 ]", 1, 'md')
   else 
  send(msg.chat_id_, msg.id_, 1, "¶ -انت لا تملك ماركه لحذائك  💈┇\n\n¶ - ايديك 🆔 ┇ "..msg.sender_user_id_.."\n¶ - شكد ماشي برجلك  🔘 ┇ _"..user_msgs.."_---------------\n[ @css_1 ]", 1, 'md')
end
else 
      end
   end
   end
   tdcli_function ({
    ID = "GetUserProfilePhotos",
    user_id_ = msg.sender_user_id_,
    offset_ = 0,
    limit_ = 1
  }, getpro, nil)
end
-------------------------------------by faeder------------------------------------------------------------
local text = msg.content_.text_:gsub('ايدي','id')
    if text:match("^[Ii][Dd] @(.*)$") then
 local ap = {string.match(text, "^([Ii][Dd]) @(.*)$")} 
 function id_by_username(extra, result, success)
 if result.id_ then
            texts = '<code>'..result.id_..'</code>'
          else 
           if database:get('lang:gp:'..msg.chat_id_) then
            texts = '<code>User not found!</code>'
          else 
            texts = '<code>خطا </code> ✖️'
end
    end
          send(msg.chat_id_, msg.id_, 1, texts, 1, 'html')
    end
       resolve_username(ap[2],id_by_username)
    end
    ----------------------------by hmada-----------------------------------------------------------------
    if text:match("^[Ii][Dd]$") or text:match("^ايدي$") and msg.reply_to_message_id_ ~= 0 then
      function id_by_reply(extra, result, success)
   local user_msgs = database:get('user:msgs'..result.chat_id_..':'..result.sender_user_id_)
        send(msg.chat_id_, msg.id_, 1, ""..result.sender_user_id_.."", 1, 'md')
        end
   getMessage(msg.chat_id_, msg.reply_to_message_id_,id_by_reply)
  end
  ----------------------by hmada-------------------------------------------------------------------------