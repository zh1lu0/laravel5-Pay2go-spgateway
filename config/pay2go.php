<?php

return [

    'Debug' => env('CASH_STORE_DEBUG_MODE'),

    /*
     * 智付寶商店代號
     */
    'MerchantID' => env('CASH_STORE_ID'),

    /*
     * 智付寶商店代號
     */
    'HashKey' => env('CASH_STORE_HashKey'),

    /*
     * 智付寶商店代號
     */
    'HashIV' => env('CASH_STORE_HashIV'),

    /*
     * 回傳格式
     *
     * json | html
     */
    'RespondType' => 'JSON',

    /*
     * 串接版本
     */
    'Version' => '1.5',

    /*
     * 語系
     *
     * zh-tw | en
     */
    'LangType' => 'zh-tw',

    /*
     * 是否需要登入智付寶會員
     */
    'LoginType' => false,

    /*
     * 交易秒數限制
     *
     * default: null
     * null: 不限制
     * 秒數下限為 60 秒，當秒數介於 1~59 秒時，會以 60 秒計算
     */
    'TradeLimit' => null,

    /*
     * 繳費-有效天數
     *
     * default: 7
     * maxValue: 180
     */
    'ExpireDays' => 7,

    /*
     * 繳費-有效時間(僅適用超商代碼交易)
     *
     * default: 235959
     * 格式為 date('His') ，例：235959
     */
    'ExpireTime' => '235959',

    /*
     * 付款完成-後導向頁面
     *
     * 僅接受 port 80 or 443
     */
    'ReturnURL' => env('CASH_ReturnUrl'),

    /*
     * 付款完成-後的通知連結
     *
     * 以幕後方式回傳給商店相關支付結果資料
     * 僅接受 port 80 or 443
     */
    'NotifyURL' => env('CASH_NotifyURL'),

    /*
     * 商店取號網址
     *
     * 此參數若為空值，則會顯示取號結果在智付寶頁面。
     * default: null
     */
    'CustomerURL' => env('CASH_CustomerURL'),

    /*
     * 付款取消-返回商店網址
     *
     * default: null
     */
    'ClientBackURL' => env('CASH_Client_BackUrl'),

    /*
     * 付款人電子信箱是否開放修改
     *
     * default: false
     */
    'EmailModify' => false,

    /*
     * 商店備註
     *
     * 1.限制長度為 300 字。
     * 2.若有提供此參數，將會於 MPG 頁面呈現商店備註內容。
     * default: null
     */
    'OrderComment' => '商店備註',

    /*
     * 支付方式
     *
     * CREDIT: 信用卡支付  (default: false)
     * UNIONPAY: 銀聯卡支付 (default: false)
     * WEBATM: WEBATM支付 (default: true)
     * VACC: ATM支付 (default: true)
     * CVS: 超商代碼繳費支付 (default: true)
     * BARCODE: 條碼繳費支付 (default: true)
     *
     */
    'paymentMethod' => [

        /*
         * 信用卡支付
         * enable: 是否啟用信用卡支付
         * CreditRed: 是否啟用紅利
         * InstFlag: 是否啟用分期
         *
         * 0: 不啟用
         * 1: 啟用全部分期
         * 3: 分 3 期
         * 6: 分 6 期功能
         * 12: 分 12 期功能
         * 18: 分 18 期功能
         * 24: 分 24 期功能
         * 以逗號方式開啟多種分期
         */
        'CREDIT' => [
            'enable' => true,
            'CreditRed' => false,
            'InstFlag' => 0,
        ],
        'ANDROIDPAY' => false,
        'SAMSUNGPAY' => false,
        'UNIONPAY' => false,
        'WEBATM' => false,
        'VACC' => false,
        'CVS' => false,
        'BARCODE' => false,
        'P2G' => false,
        'CVSCOM' => false,


        'PERIODIC' => false,
    ],

    /*
     * 是否啟用自定義支付
     *
     * 1. 自訂支付是提供商店可新增自訂的支付方式選項於智付寶付款頁，讓付款人進行選擇。
     * 2. 新增自訂支付欄位需於智付寶平台/商店設定中進行設定，最多可啟用 5 個新增自訂支付欄位。
     * 3. 當此參數為 1 時，則表示啟用所有於平台設定為啟用的自訂支付。
     *
     * default: false
     */
    'CUSTOM' => false,

    'Period' => [
        'Version' => '1.0',

        // 1.於付款人填寫此委託單時,是否需顯示付款人資訊填寫欄位。
        // 2.若未提供此參數,則預設為是。
        // 3.付款人資訊填寫欄位包含付款人姓名、付款人電話、付款人手機。
        'PaymentInfo' => false,

        // 1.於付款人填寫此委託單時,是否需顯示收件人資訊填寫欄位。
        // 2.若未提供此參數,則預設為是。
        // 3.收件人資訊填寫欄位包含收件人姓名、收件人電話、收件人手機、收件人地址。
        'OrderInfo' => false,

        // 此委託單成立後,是否立即進行信用卡授權交易,作為檢查信用卡卡號之有效性。
        // 1=立即執行十元授權(因部分發卡銀行會阻擋一元交易,因此調整為十元)
        // 2=立即執行委託金額授權
        // 3=不檢查信用卡資訊,不授權
        'first_authorization_type' => 1,
    ]
];
