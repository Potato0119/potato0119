# **Potato0119's Web**

## **說明** 
這是我的個人網站 我把它開源
並在``README.md``做說明 給有需要的人

## **內容**
* 首頁
  - 第一介面
    - 用一張橫幅(class="banner")填滿
    - 橫幅會自己切換 請見banner.js
    - 然後用打字機特效(見script.js) 
  - 關於我
    - 用商品架的效果來顯示我一些資訊
    - 如: 聯絡方式 技能 遊戲
  - 作品集
    - 用六個格子(3×2)各自放上圖片文字
    - 以transition()函式做成特效放大效果
  - 商店
    - 用四個格子顯示服務項目
    - css參見style.css .block
    - js在script.js
* 登入系統
  - 運行方法
    - 獲取「使用者名稱」輸入值得注意
    - 獲取「密碼」輸入值
    - 在資料庫尋找有沒有使用者名稱
    - 如果有 獲取該資料的密碼
    - 把他用php的password_verify()驗證(因為有Hash)
    - 正確執行登入
* 註冊系統
  - 運行方法
    - 取得「使用者名稱」、「密碼」、「確認密碼」的輸入值
    - 查詢資料庫裡面「使用者名稱」是否被註冊
    - 如果沒有 則確認「密碼」是否等於「確認密碼」
    - 如果是一樣的 則把「密碼」Hash處理
    - 把「使用者名稱」跟Hash過的「密碼」上傳資料庫
* Blog
  - 運行方法(index.php)
    - 讀取資料庫全部資料
    - 跟footer的html程式碼字串合併
    - 直接echo輸出
  - 運行方法(admin.php)
    - 這是給我新增文章用的後台
    - 取得「標題」、「時間」、「內容」、「後台密碼」
    - 確認四項皆不為空
    - 驗證後台密碼是否正確
    - 正確則把前三項轉成html程式碼
    - 上傳至資料庫

## **網站架設**
* GoDaddy(網域)
  - Domain 花了一點錢購買了potato0119.com
* InfinityFree(DNS)
  - 在GoDaddy設定InfinityFree的Nameserver
  - InfinityFree有免費的SSL 很讚
