<?php

/**
 * ⚠️ Editing not allowed except for 'en' language.
 *
 * @see https://github.com/monicahq/monica/blob/master/docs/contribute/translate.md for translations.
 */

return [
    'sidebar_settings' => '帳戶設定',
    'sidebar_personalization' => '個性化',
    'sidebar_settings_storage' => '儲存空間',
    'sidebar_settings_export' => '匯出資料',
    'sidebar_settings_users' => '使用者',
    'sidebar_settings_subscriptions' => '訂閱',
    'sidebar_settings_import' => '匯入資料',
    'sidebar_settings_tags' => 'Tag management',
    'sidebar_settings_api' => 'API',
    'sidebar_settings_dav' => 'Dav 資源',
    'sidebar_settings_security' => '安全',
    'sidebar_settings_auditlogs' => '追蹤日誌',

    'title_general' => '基本資訊',
    'title_i18n' => '本地化',
    'title_layout' => '佈局',

    'me_title' => '通訊錄',
    'me_help' => '這個聯絡人在Monica代表了 <em>你</em>',
    'me_select' => '選擇聯絡人',
    'me_no_contact' => '沒有選擇聯絡人',
    'me_select_click' => '單擊此處選擇一位聯絡人',
    'me_remove_contact' => '刪除關聯',
    'me_choose' => '選擇自己',
    'me_choose_placeholder' => '選擇自己',

    'export_title' => '匯出帳戶資料',
    'export_be_patient' => 'Click the button to start the export. It may take several minutes to process the export – please be patient and do not repeatedly click button.',
    'export_title_sql' => 'Export data to SQL',
    'export_sql_explanation' => 'Exporting your data in SQL format allows you to take your data and import it to your own Monica instance. This is only useful if you are running Monica on your own server.',
    'export_sql_cta' => 'Export data to SQL',
    'export_sql_link_instructions' => '<a href=":url">Read the instructions</a> to learn how to import this file into your instance.',

    'firstname' => '名',
    'lastname' => '姓氏',
    'name_order' => '名稱順序',
    'name_order_firstname_lastname' => '<First name> <Last name> – John Doe',
    'name_order_lastname_firstname' => '<Last name> <First name> – Doe John',
    'name_order_firstname_lastname_nickname' => '<First name> <Last name> (<Nickname>) – John Doe (Rambo)',
    'name_order_firstname_nickname_lastname' => '<First name> (<Nickname>) <Last name> – John (Rambo) Doe',
    'name_order_lastname_firstname_nickname' => '<Last name> <First name> (<Nickname>) – Doe John (Rambo)',
    'name_order_lastname_nickname_firstname' => '<Last name> (<Nickname>) <First name> – Doe (Rambo) John',
    'name_order_nickname_firstname_lastname' => '<Nickname> (<First name> <Last name>) – Rambo (John Doe)',
    'name_order_nickname_firstname_lastname' => '<Nickname> (<Last name> <First name>) – Rambo (Doe John)',
    'name_order_nickname' => '<Nickname> – Rambo',
    'currency' => '貨幣',
    'name' => '您的姓名: :name',
    'email' => '電子郵件地址',
    'email_placeholder' => '輸入電子郵箱',
    'email_help' => 'This is the email used to login, and this is Monica will send your reminders.',
    'timezone' => '時區',
    'temperature_scale' => '溫度單位',
    'temperature_scale_fahrenheit' => '華氏度',
    'temperature_scale_celsius' => '攝氏度',
    'layout' => '佈局',
    'layout_small' => '最大1200畫素寬',
    'layout_big' => '瀏覽器的全寬度',
    'save' => '更新偏好',
    'delete_title' => '刪除您的帳戶',
    'delete_desc' => 'Do you wish to delete your account? Deletion is permanent and all of your data will be erased permanently. If you have a subscription, it will be cancelled immediately.',
    'delete_other_desc' => 'Your data in the main database will be deleted immediately. As described in our privacy policy, we carry out daily backups, securely encrypted backups of the database and this backup is kept for 30 days after which it is completely deleted. We cannot delete specific data from the backups we hold any earlier than this.  All of your data will be completely deleted within 30 days of your account’s deletion.',
    'reset_desc' => 'Do you wish to reset your account? This will remove all your contacts, and all of the data associated with them. Your account will not be deleted.',
    'reset_title' => '刪除您的帳戶',
    'reset_cta' => '重置帳戶',
    'reset_notice' => 'Are you sure to reset your account? This is permanent and cannot be undone.',
    'reset_success' => 'Your account has been reset successfully.',
    'delete_notice' => 'Are you sure to delete your account? This is permanent and cannot be undone. All of your data will be deleted and will not be recoverable.',
    'delete_cta' => '刪除帳戶',
    'settings_success' => '偏好設定已更新',
    'locale' => '應用程式中使用的語言',
    'locale_help' => '您想要幫助翻譯Monica或新增新語言嗎？請點選 <a href=":url" target="_blank" lang="en">瞭解更多資訊</a>。',
    'locale_ar' => '阿拉伯文',
    'locale_cs' => '捷克文',
    'locale_de' => '德文',
    'locale_en' => '英文',
    'locale_es' => '西班牙文',
    'locale_fr' => '法文',
    'locale_he' => '希伯來文',
    'locale_hr' => '克羅埃西亞文',
    'locale_it' => '義大利文',
    'locale_ja' => 'Japanese',
    'locale_nl' => '荷蘭文',
    'locale_pt' => '葡萄牙文',
    'locale_pt-BR' => '葡萄牙語 (巴西)',
    'locale_ru' => '俄文',
    'locale_sv' => 'Swedish',
    'locale_zh' => '簡體中文',
    'locale_zh-TW' => '繁體中文（台灣）',
    'locale_tr' => '土耳其文',
    'locale_en-GB' => '英語 (英國)',

    'security_title' => '安全',
    'security_help' => '更改您的帳戶的安全選項。',
    'password_change' => 'Change your password',
    'password_current' => '當前密碼',
    'password_current_placeholder' => '輸入當前密碼',
    'password_new1' => '新密碼',
    'password_new1_placeholder' => 'Enter your new password',
    'password_new2' => 'Confirm your new password',
    'password_new2_placeholder' => 'Retype your new password',
    'password_btn' => '更改密碼',
    '2fa_title' => '雙重驗證',
    '2fa_otp_title' => '用於二次驗證的App',
    '2fa_enable_title' => '啟用二次驗證',
    '2fa_enable_description' => '啟用雙重身份驗證以提高帳戶的安全性。',
    '2fa_enable_otp' => 'Open up your Two Factor Authentication mobile app and scan the following QR barcode:',
    '2fa_enable_otp_help' => 'If your Two Factor Authentication mobile app does not support QR barcodes, enter in the following code:',
    '2fa_enable_otp_validate' => '請驗證您剛設定的新裝置:',
    '2fa_enable_success' => '雙重認證已啟用',
    '2fa_enable_error' => '嘗試啟用雙重身份驗證時出錯',
    '2fa_enable_error_already_set' => '二次驗證已啟用',
    '2fa_disable_title' => '關閉雙重身份驗證',
    '2fa_disable_description' => '為您的帳戶禁用雙重素身份驗證。小心, 你的帳戶將不再安全!',
    '2fa_disable_success' => '雙重身份認證已禁用',
    '2fa_disable_error' => '嘗試禁用雙重身份驗證時出錯',

    'webauthn_title' => '安全鑰匙 - WebAuthn',
    'webauthn_enable_description' => '新增一個安全鑰匙',
    'webauthn_key_name_help' => '給你的鑰匙起個名字',
    'webauthn_key_name' => '鑰匙名稱:',
    'webauthn_success' => '您的鑰匙已被檢測到並驗證完畢。',
    'webauthn_last_use' => '最後使用: {timestamp}',
    'webauthn_delete_confirmation' => '確實要刪除這個鑰匙嗎?',
    'webauthn_delete_success' => '鑰匙已刪除',
    'webauthn_insertKey' => '插入您的安全鑰匙',
    'webauthn_buttonAdvise' => '如果您的安全鑰匙有按鈕，請按下它。',
    'webauthn_noButtonAdvise' => '如果沒有, 請將其拔出並再次插入。',
    'webauthn_not_supported' => '您的遊覽器並不支援WebAuthn',
    'webauthn_not_secured' => 'WebAuthn只支援SSL連線，請使用https開啟這個頁面',
    'webauthn_error_already_used' => '這個鑰匙已經註冊，您無需在註冊一次。',
    'webauthn_error_not_allowed' => '操作超時或不允許。',

    'recovery_title' => '恢復程式碼',
    'recovery_show' => '獲取恢復程式碼',
    'recovery_copy_help' => '複製到您的剪貼簿',
    'recovery_help_intro' => '以下是您的恢復程式碼:',
    'recovery_help_information' => '您可以使用每個恢復程式碼一次。',
    'recovery_clipboard' => 'Codes copied to the clipboard.',
    'recovery_generate' => 'Generate new codes…',
    'recovery_generate_help' => 'Generating new codes will invalidate previously generated codes.',
    'recovery_already_used_help' => 'This code has already been used.',

    'users_list_title' => '可以訪問您的帳戶的使用者',
    'users_list_add_user' => '邀請新使用者',
    'users_list_you' => '這是你',
    'users_list_invitations_title' => '待處理的邀請',
    'users_list_invitations_explanation' => '已邀請',
    'users_list_invitations_invited_by' => '被:name邀請',
    'users_list_invitations_sent_date' => '在:date傳送',
    'users_blank_title' => '您是唯一可以訪問此帳戶的人。',
    'users_blank_add_title' => '你想邀請別人嗎？',
    'users_blank_description' => '此人將具有您擁有的相同訪問許可權, 並且可以新增、編輯或刪除聯絡人資訊。',
    'users_blank_cta' => '邀請他人加入',
    'users_add_title' => 'Invite a new user to your account by email',
    'users_add_description' => 'This person will have the same access as you do, including inviting or deleting other users, including you. Make sure you trust this person before giving them access.',
    'users_add_email_field' => '輸入您要邀請的人的電子郵件',
    'users_add_confirmation' => 'I confirm that I want to invite this user to my account. This person will have access to ALL of my data and see exactly what I see.',
    'users_add_cta' => '通過電子郵件邀請使用者',
    'users_accept_title' => '接受邀請並新建一個賬號',
    'users_error_please_confirm' => '請您先確認您要邀請此使用者',
    'users_error_email_already_taken' => '這個電子郵件已經存在，請另選一個！',
    'users_error_already_invited' => '您已經邀請了此使用者。請選擇其他電子郵件地址。',
    'users_error_email_not_similar' => '這不是邀請人的電子郵件。',
    'users_invitation_deleted_confirmation_message' => '已成功刪除邀請',
    'users_invitations_delete_confirmation' => '確實要刪除此邀請嗎？',
    'users_list_delete_confirmation' => '是否確實要從您的帳戶中刪除此使用者？',
    'users_invitation_need_subscription' => '您需要升級賬戶才能新增更多使用者',

    'subscriptions_account_current_plan' => '您當前的訂閱',
    'subscriptions_account_current_paid_plan' => '您當前的訂閱是：:name，感謝您的訂閱。',
    'subscriptions_account_next_billing' => '您的訂閱將在 <strong>:date</strong> 自動續費',
    'subscriptions_account_cancel' => '您可以隨時 <a href=":url">取消訂閱</a>。',
    'subscriptions_account_free_plan' => '您正在使用免費版',
    'subscriptions_account_free_plan_upgrade' => '您可以將您的帳戶升級為:name, 它的成本為每月$:price。您將享有以下特權:',
    'subscriptions_account_free_plan_benefits_users' => '不限數量的使用者',
    'subscriptions_account_free_plan_benefits_reminders' => '電子郵件提醒',
    'subscriptions_account_free_plan_benefits_import_data_vcard' => '從 vCard 檔案匯入聯絡人',
    'subscriptions_account_free_plan_benefits_support' => '支援專案的長久執行, 使我們可以引入更多的功能。',
    'subscriptions_account_upgrade' => '更新您的賬戶',
    'subscriptions_account_upgrade_title' => '立即升級您的Monica賬戶吧！',
    'subscriptions_account_upgrade_choice' => '在下方選擇一個訂閱（已有 :customers 訂閱了高階版）',
    'subscriptions_account_invoices' => '發票',
    'subscriptions_account_invoices_download' => '下載',
    'subscriptions_account_invoices_subscription' => '訂閱週期：:startDate 至 :endDate',
    'subscriptions_account_payment' => '哪個付費週期最適合您？',
    'subscriptions_account_confirm_payment' => '交易尚未完成，請您按此<a href=":url">確認您的付款</a>',
    'subscriptions_downgrade_title' => '將您的帳戶降級為免費版',
    'subscriptions_downgrade_limitations' => '免費版的功能有限制。如果您需要降級，請您確保完成以下檢查：',
    'subscriptions_downgrade_rule_users' => '您的帳戶中必須只有1個使用者',
    'subscriptions_downgrade_rule_users_constraint' => '您的帳戶中當前有 <a href=":url">:count 個使用者</a>。',
    'subscriptions_downgrade_rule_invitations' => 'You must not have any pending invitations',
    'subscriptions_downgrade_rule_invitations_constraint' => 'You currently have <a href=":url">1 pending invitation</a>.|You currently have <a href=":url">:count pending invitations</a>.',
    'subscriptions_downgrade_rule_contacts' => '您不能超過 :number 的活躍聯絡人',
    'subscriptions_downgrade_rule_contacts_constraint' => '當前有 <a href=":url">:count 位聯絡人</a>。',
    'subscriptions_downgrade_cta' => '降級',
    'subscriptions_downgrade_success' => '您已降級到免費版！',
    'subscriptions_downgrade_thanks' => '非常感謝您嘗試過高階版訂閱。我們一直為Monica不斷地增加新的功能-, 期待您的再次訂閱。',
    'subscriptions_back' => '返回設定',
    'subscriptions_upgrade_title' => '升級您的帳戶',
    'subscriptions_upgrade_choose' => '您選擇了:plan',
    'subscriptions_upgrade_infos' => '請在下方輸入您的付款資訊：',
    'subscriptions_upgrade_name' => '持卡人姓名',
    'subscriptions_upgrade_zip' => '郵政編碼',
    'subscriptions_upgrade_credit' => '信用卡或借記卡',
    'subscriptions_upgrade_submit' => '支付{amount}',
    'subscriptions_upgrade_charge' => 'We’ll charge your card :price now. The next charge will be on :date. If you ever change your mind, you can cancel at any time, no questions asked.',
    'subscriptions_upgrade_charge_handled' => '支付服務由第三方支付平臺 <a href=":url">Stripe</a> 提供，我們無法接觸到您的個人資訊。',
    'subscriptions_upgrade_success' => '感謝您的訂閱！',
    'subscriptions_upgrade_thanks' => '歡迎來到讓世界變得更美好的社群。',

    'subscriptions_payment_confirm_title' => '確認您的 :amount 付款',
    'subscriptions_payment_confirm_information' => '需要額外資訊來處理您的付款，請您補充下列付款資訊。',
    'subscriptions_payment_succeeded_title' => '支付成功',
    'subscriptions_payment_succeeded' => '此交易已經完成。',
    'subscriptions_payment_cancelled_title' => '付款已取消',
    'subscriptions_payment_cancelled' => '您的付款已被取消。',
    'subscriptions_payment_error_name' => '請提供您的姓名',
    'subscriptions_payment_success' => '您的付款已成功',

    'subscriptions_pdf_title' => '您的:name每月訂閱',
    'subscriptions_plan_choose' => '選擇此計劃',
    'subscriptions_plan_year_title' => '按年度支付',
    'subscriptions_plan_year_cost' => '$45 美元/年',
    'subscriptions_plan_year_cost_save' => '您可以節省 25%',
    'subscriptions_plan_year_bonus' => '一整年的安心',
    'subscriptions_plan_month_title' => '按月支付',
    'subscriptions_plan_month_cost' => '$5 美元/月',
    'subscriptions_plan_month_bonus' => '隨時取消',
    'subscriptions_plan_include1' => '您將享有以下特權：',
    'subscriptions_plan_include2' => '無限新增聯絡人·無限的使用者數量·電子郵件提醒·匯入 vCard ·個性化的聯絡人資訊',
    'subscriptions_plan_include3' => '收入的100% 用於此專案的開發。',
    'subscriptions_help_title' => '您可能還關心',
    'subscriptions_help_opensource_title' => '什麼是開源專案？',
    'subscriptions_help_opensource_desc' => 'Monica is an open source project.  This means it is built by a community who wants to build a great tool for the greater good. Being open source means the code is publicly available on GitHub, and everyone can inspect it, modify it or enhance it. All the money we raise is dedicated to building better features, paying for more powerful servers, and paying other costs. Thanks for your help. We couldn’t do it without you.',
    'subscriptions_help_limits_title' => 'Is there a limit to the number of contacts we can have on the free plan?',
    'subscriptions_help_limits_plan' => '是的。免費版您能擁有:number位聯絡人。',
    'subscriptions_help_discounts_title' => '你們對非盈利機構和學生有優惠嗎？',
    'subscriptions_help_discounts_desc' => '當然！Monica免費為學生，非盈利機構提供服務。您只需要提交一下材料給我們的 <a href=":support">支援人員</a>。',
    'subscriptions_help_change_title' => '如果我改變主意怎麼辦？',
    'subscriptions_help_change_desc' => 'You can cancel anytime, no questions asked, and all by yourself – no need to contact support. However, you will not be refunded for the current period.',

    'stripe_error_card' => '您的卡被拒，原因是：:message',
    'stripe_error_api_connection' => '與Stripe的通訊失敗，請稍候重試。',
    'stripe_error_rate_limit' => '與Stripe的通訊次數過多，請稍候再試。',
    'stripe_error_invalid_request' => '無效的引數，請稍後再試。',
    'stripe_error_authentication' => 'Stripe授權失敗',

    'import_title' => '在您的帳戶中匯入聯絡人',
    'import_cta' => '上載聯絡人',
    'import_stat' => '您目前為止匯入了:number個檔案。',
    'import_result_stat' => '上傳了包含 :total_contacts 個聯絡人的 vCard (:total_imported imported, :total_skipped skipped)',
    'import_view_report' => '檢視報告',
    'import_in_progress' => '匯入正在進行中。在一分鐘內重新載入頁面。',
    'import_upload_title' => '從 vCard 檔案匯入聯絡人',
    'import_upload_rules_desc' => '但是, 我們有一些規則:',
    'import_upload_rule_format' => '我們支援 <code>vcard</code> 和 <code>vcf</code> 檔案。',
    'import_upload_rule_vcard' => 'We support the vCard 3.0 format, which is the default format for macOS’s Contacts.app) and Google Contacts.',
    'import_upload_rule_instructions' => 'Export instructions for <a href=":url1" target="_blank" rel="noopener noreferrer">macOS Contacts.app</a> and <a href=":url2" target="_blank" rel="noopener noreferrer">Google Contacts</a>.',
    'import_upload_rule_multiple' => 'If your contacts have multiple email addresses or phone numbers, only the first entry will be saved.',
    'import_upload_rule_limit' => '檔案限制為10MB。',
    'import_upload_rule_time' => 'It might take up to a minute to upload the contacts and process them. Please be patient.',
    'import_upload_rule_cant_revert' => 'Please make sure data is accurate before uploading, as you can’t undo the upload.',
    'import_upload_form_file' => '你的 <code>.vcf</code> 或 <code>. vCard</code> 檔案:',
    'import_upload_behaviour' => '匯入偏好:',
    'import_upload_behaviour_add' => 'Add new contacts and skip existing',
    'import_upload_behaviour_replace' => '替換現有條目',
    'import_upload_behaviour_help' => 'Replacing will replace all data found in the vCard, but will keep existing contact fields.',
    'import_report_title' => '匯入報表',
    'import_report_date' => '匯入日期',
    'import_report_type' => '匯入型別',
    'import_report_number_contacts' => '檔案中的聯絡人數',
    'import_report_number_contacts_imported' => '匯入的聯絡人數量',
    'import_report_number_contacts_skipped' => '跳過的聯絡人數',
    'import_report_status_imported' => '匯入',
    'import_report_status_skipped' => '跳過',
    'import_vcard_parse_error' => '分析 vcard 項時出錯',
    'import_vcard_contact_exist' => '聯絡人已存在',
    'import_vcard_contact_no_firstname' => 'No first name (mandatory)',
    'import_vcard_file_not_found' => '檔案不存在',
    'import_vcard_unknown_entry' => '未知的聯絡人姓名',
    'import_vcard_file_no_entries' => '檔案不包含聯絡人',
    'import_blank_title' => '您暫無匯入的聯絡人。',
    'import_blank_question' => '是否立即匯入聯絡人？',
    'import_blank_description' => '我們可以從 Google Contacts 或您的Contact manager那裡匯入您的 vCard 檔案。',
    'import_blank_cta' => '匯入 vCard',
    'import_need_subscription' => '您需要訂閱才能匯入聯絡人',

    'tags_list_title' => '標籤',
    'tags_list_description' => '您可以通過設定來標記聯絡人。標記的工作方式類似於資料夾, 但可以向聯絡人新增多個標記。若要新增新標記, 請在聯絡人中新增即可。',
    'tags_list_contact_number' => ':count 個聯絡人',
    'tags_list_delete_success' => '標籤已成功刪除',
    'tags_list_delete_confirmation' => '確實要刪除該標籤嗎？不會刪除任何聯絡人, 只有標籤。',
    'tags_blank_title' => '標籤是對您的聯絡人進行分類的一種很好的方式。',
    'tags_blank_description' => 'Tags work like folders, but you can add more than one tag to a contact. Go to a contact and tag a friend, right below the name. Once a contact is tagged, come back here to manage all the tags in your account.',

    'api_title' => 'API 訪問',
    'api_description' => 'API 可以用來從外部應用程式操縱Monica的資料, 例如移動應用程式。',
    'api_help' => '要使用 API，必須要有一個Token。 您可以建立個人訪問 Token，也可以授權OAuth 客戶端為您建立它。 檢視 <a href=":url">API 文件</a>獲取詳情',
    'api_endpoint' => '此 Monica 例項的 API 終端是：',

    'api_personal_access_tokens' => '個人訪問令牌',
    'api_pao_description' => '請確保將此token授予您信任的源-因為它們允許您訪問所有資料。',
    'api_token_title' => '個人訪問 Token',
    'api_token_create_new' => '建立金鑰',
    'api_token_not_created' => '您沒有已建立的訪問金鑰',
    'api_token_name' => 'Token 名稱',
    'api_token_expire' => '過期於 {date}',
    'api_token_delete' => '刪除',
    'api_token_create' => '建立金鑰',
    'api_token_scopes' => '作用域',
    'api_token_help' => '這是您的個人訪問金鑰，我們只會展示一次，請妥善保管。您現在可以使用這個金鑰進行API請求',

    'api_oauth_clients' => '您的 Oauth 客戶端',
    'api_oauth_clients_desc' => '您可以註冊自己的 OAuth 客戶端。',
    'api_oauth_clients_desc2' => '使用此客戶端ID請求一個新的Token，並將授權碼轉換為Token。請參閱 <a href="{url}">Laravel Passport文件</a> 獲取更多資訊。',
    'api_oauth_title' => 'OAuth 客戶端',
    'api_oauth_create_new' => '建立新的客戶端',
    'api_oauth_edit' => '編輯客戶端',
    'api_oauth_not_created' => '您尚未建立Oauth客戶端',
    'api_oauth_clientid' => '客戶端 ID',
    'api_oauth_name' => '名稱',
    'api_oauth_name_help' => '安全碼',
    'api_oauth_secret' => '金鑰',
    'api_oauth_create' => '建立客戶端',
    'api_oauth_redirecturl' => '重定向URL',
    'api_oauth_redirecturl_help' => '應用程式的授權回撥 URL。',

    'api_authorized_clients' => '授權客戶端列表',
    'api_authorized_clients_desc' => '本節列出了您授權訪問應用程式的所有客戶端，您可以隨時撤銷此授權。',
    'api_authorized_clients_title' => '已授權的應用',
    'api_authorized_clients_none' => 'There are no authorized clients yet.',
    'api_authorized_clients_name' => '名稱',
    'api_authorized_clients_scopes' => '作用域',

    'personalization_tab_title' => '個性化您的帳戶',

    'personalization_title' => 'Here you will find different settings to configure your account. These features are intended for “power users” who want maximum control over Monica.',
    'personalization_contact_field_type_title' => '聯絡人欄位型別',
    'personalization_contact_field_type_add' => '新增新欄位型別',
    'personalization_contact_field_type_description' => 'You can configure all the different types of contact fields that you can associate to all your contacts. For example, if a new social network appears in the future, you will be able to add this new way of communicating with your contacts right here.',
    'personalization_contact_field_type_table_name' => '名稱',
    'personalization_contact_field_type_table_protocol' => '協議',
    'personalization_contact_field_type_table_actions' => '行動',
    'personalization_contact_field_type_modal_title' => '新增新的聯絡人欄位型別',
    'personalization_contact_field_type_modal_edit_title' => '編輯現有聯絡人欄位型別',
    'personalization_contact_field_type_modal_delete_title' => '刪除現有聯絡人欄位型別',
    'personalization_contact_field_type_modal_delete_description' => 'Are you sure you want to delete this contact field type? Deleting this type of contact field will delete ALL the data with this type for all of your contacts.',
    'personalization_contact_field_type_modal_name' => '名稱',
    'personalization_contact_field_type_modal_protocol' => '協議 (可選)',
    'personalization_contact_field_type_modal_protocol_help' => '每個新的聯絡人欄位型別都可以選定。如果設定了協議, 我們將使用它來觸發設定的操作。',
    'personalization_contact_field_type_modal_icon' => '圖示 (可選)',
    'personalization_contact_field_type_modal_icon_help' => '您可以將圖示與此聯絡人欄位型別關聯。您需要新增對Font Awesome圖示的引用。',
    'personalization_contact_field_type_delete_success' => 'The contact field type has been successfully deleted.',
    'personalization_contact_field_type_add_success' => '已成功新增聯絡人欄位型別。',
    'personalization_contact_field_type_edit_success' => '聯絡人欄位型別已成功更新。',

    'personalization_genders_title' => '性別型別',
    'personalization_genders_add' => '新增新的性別型別',
    'personalization_genders_desc' => '你可以根據需要定義儘可能多的性別。您的帳戶中至少需要一種性別型別。',
    'personalization_genders_modal_add' => '新增性別型別',
    'personalization_genders_modal_edit' => '更新性別型別',
    'personalization_genders_modal_name' => '名稱',
    'personalization_genders_modal_name_help' => '在聯絡人頁面顯示性別的名稱',
    'personalization_genders_modal_sex' => '性別',
    'personalization_genders_modal_sex_help' => '在匯入/匯出 VCard 時用於定義關係',
    'personalization_genders_modal_default' => '選擇新聯絡人的預設性別',
    'personalization_genders_modal_delete' => '刪除性別型別',
    'personalization_genders_modal_delete_desc' => 'Are you sure you want to delete the gender “{name}”?',
    'personalization_genders_modal_delete_question' => 'You currently have {count} contact with this gender. If you delete this gender, what gender should this contact have?|You currently have {count} contacts with this gender. If you delete this gender, what gender should these contacts have?',
    'personalization_genders_modal_delete_question_default' => 'This gender is the default one. If you delete this gender, which one will be the new default?',
    'personalization_genders_modal_error' => 'Please choose a gender from the list.',
    'personalization_genders_list_contact_number' => '{count} 個聯絡人|{count} 個聯絡人',
    'personalization_genders_table_name' => '名稱',
    'personalization_genders_table_sex' => '性別',
    'personalization_genders_table_default' => '預設',
    'personalization_genders_default' => '預設性別',
    'personalization_genders_make_default' => '更改預設性別',
    'personalization_genders_select_default' => '選擇預設性別',
    'personalization_genders_m' => '男性',
    'personalization_genders_f' => '女性',
    'personalization_genders_o' => '其他',
    'personalization_genders_u' => '未知',
    'personalization_genders_n' => '無或不適用',

    'personalization_reminder_rule_save' => '更改已儲存',
    'personalization_reminder_rule_title' => '提醒規則',
    'personalization_reminder_rule_line' => '提前 {count} 天|提前 {count} 天',
    'personalization_reminder_rule_desc' => 'For every reminder that you set, Monica can send you an email a number of days before the event happens.  You can adjust these notification settings here. These notifications only apply to monthly and yearly reminders.',

    'personalization_module_save' => '更改已被儲存',
    'personalization_module_title' => '功能',
    'personalization_module_desc' => 'You may not need all of Monica’s features. Below you can toggle specific features that are used on a contact sheet. This change will affect ALL your contacts. Turning off a feature does not delete any data, it simply hides the feature.',

    'personalisation_paid_upgrade' => '這是一個高階功能，需要付費訂閱才能啟用。通過訪問 <a href=":url">設定 > 訂閱</a> 來升級您的帳戶。',
    'personalisation_paid_upgrade_vue' => '這是一個高階功能，需要付費訂閱才能啟用。透過瀏覽 <a href="{url}">設定 > 訂閱</a> 來升級您的帳戶。',

    'reminder_time_to_send' => 'Time of the day reminders will be sent',
    'reminder_time_to_send_help' => 'Your next reminder is scheduled to be sent on <span title="{dateTimeUtc}" class="reminder-info">{dateTime}</span>.',

    'personalization_activity_type_category_title' => '活動分類',
    'personalization_activity_type_category_add' => '增加一個活動分類',
    'personalization_activity_type_category_table_name' => '名稱',
    'personalization_activity_type_category_description' => 'An activity with one of your contacts can have a type and a category type. Your account comes with a set of predefined category types by default, but you can customize these here.',
    'personalization_activity_type_category_table_actions' => '行動',
    'personalization_activity_type_category_modal_add' => '增加活動分類',
    'personalization_activity_type_category_modal_edit' => '編輯活動分類',
    'personalization_activity_type_category_modal_question' => 'What should we name this new category?',
    'personalization_activity_type_add_button' => '增加一個活動',
    'personalization_activity_type_modal_add' => '增加一個活動',
    'personalization_activity_type_modal_question' => 'What should we name this new activity type?',
    'personalization_activity_type_modal_edit' => '編輯活動',
    'personalization_activity_type_category_modal_delete' => '刪除活動分類',
    'personalization_activity_type_category_modal_delete_desc' => 'Are you sure you want to delete this category? Deleting it will delete all associated activity types. Activities that belong to this category will not be affected by this deletion.',
    'personalization_activity_type_modal_delete' => '刪除活動',
    'personalization_activity_type_modal_delete_desc' => '您真的要刪除這個活動嗎？',
    'personalization_activity_type_modal_delete_error' => '我們無法找到這個活動',
    'personalization_activity_type_category_modal_delete_error' => '我們無法找到這個活動分類',

    'personalization_life_event_category_title' => 'Life event categories',
    'personalization_live_event_category_table_name' => 'Name',
    'personalization_life_event_category_description' => 'A life event can have a type and a category. Your account comes with a set of predefined categories and types by default, but you can customize life event types here.',
    'personalization_live_event_category_table_actions' => 'Actions',
    'personalization_life_event_type_add_button' => 'Add a new life event type',
    'personalization_life_event_type_modal_add' => 'Add a new life event type',
    'personalization_life_event_type_modal_question' => 'What should we name this new life event type?',
    'personalization_life_event_type_modal_edit' => 'Edit a life event type',
    'personalization_life_event_type_modal_delete' => 'Delete a life event type',
    'personalization_life_event_type_modal_delete_desc' => 'Are you sure you want to delete this life event type? Life events that belong to this type will be deleted by performing this action.',
    'personalization_life_event_type_modal_delete_error' => 'We can’t find this life event type.',

    'personalization_life_event_category_work_education' => '工作與教育',
    'personalization_life_event_category_family_relationships' => '家庭與戀愛',
    'personalization_life_event_category_home_living' => '家與生活',
    'personalization_life_event_category_travel_experiences' => '旅行與經歷',
    'personalization_life_event_category_health_wellness' => '健康與飲食',

    'personalization_life_event_type_new_job' => '新工作',
    'personalization_life_event_type_retirement' => '退休',
    'personalization_life_event_type_new_school' => '新學校',
    'personalization_life_event_type_study_abroad' => '留學',
    'personalization_life_event_type_volunteer_work' => '志願者工作',
    'personalization_life_event_type_published_book_or_paper' => '出版一本書或一篇論文',
    'personalization_life_event_type_military_service' => '兵役',
    'personalization_life_event_type_first_met' => '第一次見面',
    'personalization_life_event_type_new_relationship' => '新關係',
    'personalization_life_event_type_engagement' => '訂婚',
    'personalization_life_event_type_marriage' => '婚姻',
    'personalization_life_event_type_anniversary' => '週年紀念日',
    'personalization_life_event_type_expecting_a_baby' => '想要孩子',
    'personalization_life_event_type_new_child' => '新的孩子',
    'personalization_life_event_type_new_family_member' => '新的家庭成員',
    'personalization_life_event_type_new_pet' => '新寵物',
    'personalization_life_event_type_end_of_relationship' => '結束了一段關係',
    'personalization_life_event_type_loss_of_a_loved_one' => '失去心愛的人',
    'personalization_life_event_type_moved' => '搬家了',
    'personalization_life_event_type_bought_a_home' => '買了新房子',
    'personalization_life_event_type_home_improvement' => '裝修',
    'personalization_life_event_type_holidays' => '假日',
    'personalization_life_event_type_new_vehicle' => '新車',
    'personalization_life_event_type_new_roommate' => '新室友',
    'personalization_life_event_type_overcame_an_illness' => '熬過了疾病',
    'personalization_life_event_type_quit_a_habit' => '戒掉一個習慣',
    'personalization_life_event_type_new_eating_habits' => '新的飲食習慣',
    'personalization_life_event_type_weight_loss' => '減肥',
    'personalization_life_event_type_wear_glass_or_contact' => 'Started wearing glasses or contacts',
    'personalization_life_event_type_broken_bone' => 'Broke a bone',
    'personalization_life_event_type_removed_braces' => 'Had braces removed',
    'personalization_life_event_type_surgery' => 'Had surgery',
    'personalization_life_event_type_dentist' => 'Had dental treatment',
    'personalization_life_event_type_new_sport' => 'Started playing a new sport',
    'personalization_life_event_type_new_hobby' => 'Took up a new hobby',
    'personalization_life_event_type_new_instrument' => 'Started learning a new instrument',
    'personalization_life_event_type_new_language' => 'Started learning a new language',
    'personalization_life_event_type_tattoo_or_piercing' => '紋身或耳洞',
    'personalization_life_event_type_new_license' => '新駕照',
    'personalization_life_event_type_travel' => '旅行',
    'personalization_life_event_type_achievement_or_award' => '成就或獎項',
    'personalization_life_event_type_changed_beliefs' => '改變信仰',
    'personalization_life_event_type_first_word' => '第一次發言',
    'personalization_life_event_type_first_kiss' => '初吻',

    'storage_title' => '儲存空間',
    'storage_account_info' => 'Your account limit is :accountLimit Mb. Your current usage is :currentAccountSize Mb (about :percentUsage%).',
    'storage_upgrade_notice' => '升級您的帳戶, 以便上傳文件和照片。',
    'storage_description' => '在這裡, 您可以看到上傳的有關您的聯絡人的所有文件和照片。',

    'dav_title' => 'WebDAV',
    'dav_description' => '在這裡, 您可以找到所有設定, 以便為 Carddav 和 CalDAV 匯出使用 webdav 資源。',
    'dav_copy_help' => '複製到您的剪貼簿',
    'dav_clipboard_copied' => '值已複製到剪貼簿',
    'dav_url_base' => '所有CardDAV和CalDAV資源的基本 url:',
    'dav_connect_help' => '您可以在手機或計算機上使用此基本 url 連線您的聯絡人和/或日曆。',
    'dav_connect_help2' => 'Use your login (email) and create an API token as the password to authenticate.',
    'dav_url_carddav' => '用於聯絡資源的 CardDAV',
    'dav_url_caldav_birthdays' => '用於生日資源的 caldav url:',
    'dav_url_caldav_tasks' => '用於任務資源的 caldav url:',
    'dav_title_carddav' => 'CardDAV',
    'dav_title_caldav' => 'CalDAV',
    'dav_carddav_export' => '匯出一個檔案中的所有聯絡人',
    'dav_caldav_birthdays_export' => '在一個檔案中匯出所有生日',
    'dav_caldav_tasks_export' => '匯出一個檔案中的所有任務',

    'archive_title' => 'Archive all of the contacts in your account',
    'archive_desc' => 'This will archive all of the contacts in your account.',
    'archive_cta' => 'Archive all of your contacts',

    'logs_title' => 'Everything that has happened to this account',
    'logs_author' => ':name 於 :date ',
];
