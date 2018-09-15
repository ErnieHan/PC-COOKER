-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018 年 09 月 12 日 10:50
-- 伺服器版本: 10.1.34-MariaDB
-- PHP 版本： 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `pccooker`
--

-- --------------------------------------------------------

--
-- 資料表結構 `categories`
--

CREATE TABLE `categories` (
  `sid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `categories`
--

INSERT INTO `categories` (`sid`, `name`, `parent_sid`) VALUES
(1, '中央處理器', 0),
(2, '主機板', 0),
(3, '記憶體', 0),
(4, '固態硬碟', 0),
(5, '內接硬碟', 0),
(6, '顯示卡', 0),
(7, '電源供應器', 0),
(8, '機殼', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `activated` int(11) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `members`
--

INSERT INTO `members` (`id`, `email`, `password`, `mobile`, `address`, `birthday`, `hash`, `activated`, `nickname`, `created_at`) VALUES
(40, '789@gmail.com', '789456', NULL, NULL, NULL, NULL, NULL, 'qweee', NULL),
(41, 'test@gmail.com', '123456', NULL, NULL, NULL, NULL, NULL, 'pc chen', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `sid` int(11) NOT NULL,
  `member_sid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `orders`
--

INSERT INTO `orders` (`sid`, `member_sid`, `amount`, `order_date`) VALUES
(4, 1, 1820, '2016-03-25 12:15:08'),
(5, 1, 1820, '2016-03-25 12:19:05'),
(9, 1, 2070, '2016-06-01 11:01:37'),
(10, 13, 1460, '2016-06-01 11:15:53'),
(11, 1, 2030, '2017-10-03 13:49:20'),
(12, 30, 0, '2018-08-15 12:08:59'),
(13, 30, 560, '2018-08-15 12:09:42'),
(14, 30, 980, '2018-08-16 09:18:29'),
(15, 30, 1950, '2018-08-16 09:39:17'),
(16, 30, 980, '2018-08-16 10:02:39'),
(17, 30, 980, '2018-08-16 10:33:42');

-- --------------------------------------------------------

--
-- 資料表結構 `order_details`
--

CREATE TABLE `order_details` (
  `sid` int(11) NOT NULL,
  `order_sid` int(11) NOT NULL,
  `product_sid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `order_details`
--

INSERT INTO `order_details` (`sid`, `order_sid`, `product_sid`, `price`, `quantity`) VALUES
(1, 4, 22, 580, 1),
(2, 4, 17, 620, 2),
(3, 4, 22, 580, 1),
(4, 5, 22, 580, 1),
(5, 5, 17, 620, 2),
(6, 9, 6, 450, 1),
(7, 9, 8, 520, 2),
(8, 9, 22, 580, 1),
(9, 10, 1, 560, 1),
(10, 10, 2, 420, 1),
(11, 10, 3, 480, 1),
(12, 11, 5, 690, 2),
(13, 11, 15, 650, 1),
(14, 15, 1, 560, 1),
(15, 15, 2, 420, 1),
(16, 15, 3, 480, 1),
(17, 15, 4, 490, 1),
(18, 16, 1, 560, 1),
(19, 16, 2, 420, 1),
(20, 17, 1, 560, 1),
(21, 17, 2, 420, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `sid` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `bookname` varchar(60) NOT NULL,
  `category_sid` int(11) NOT NULL DEFAULT '1',
  `book_id` varchar(30) NOT NULL,
  `publish_date` date NOT NULL,
  `pages` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `isbn` varchar(30) NOT NULL,
  `on_sale` tinyint(1) NOT NULL DEFAULT '1',
  `introduction` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `products`
--

INSERT INTO `products` (`sid`, `author`, `bookname`, `category_sid`, `book_id`, `publish_date`, `pages`, `price`, `isbn`, `on_sale`, `introduction`) VALUES
(1, '洪一新、許瑞珍', '圖解C++程式設計', 16, 'PG30036', '2010-02-08', 624, 560, '978-986-201-306-9 ', 1, 'C++語言融合了傳統的程序式語言、物件導向設計以及C++樣版三種不同程式設計方式，使它成為近代最受重視且普及的程式語言。\r\n本書強調理論與實作並重，依C++功能循序漸進、由淺入深，詳實地說明了C++語言相關的語法，書中融入大量的程式範例，每一個範例程式都經過測試，可以正確無誤地執行，並且從實作中熟悉各種程式設計技巧。\r\n除了課文內大量的程式範例外，每章均有「上機實習課程」單元，可以讓使用者有更多的實際演練機會。在課後大量精心設計的習題，驗收學習成效，提供更多的程式實作經驗。'),
(2, '吳睿紘', '圖解資料結構-使用JAVA', 1, 'PG30035', '2009-12-15', 384, 420, '978-986-201-281-9 ', 1, '資料結構一直是電腦科學領域非常重要的基礎課程，本書是以教導如何將資料結構概念用Java程式語言來實作的重要著作。其特色在於將複雜的理論輔以圖文並茂的解說方式，搭配豐富的圖表及範例介紹，將資料結構中重要的觀念及演算法加以詮釋，集中學習焦點。\r\n每章重要理論均有範例實作，書中收錄了精華的演算法及程式的執行畫面，隨書光碟則附與完整的範例程式，提供詳盡的探討，提昇學習的成效。\r\n\r\n◎內容架構完整，邏輯清楚，採用豐富的圖例來闡述基本觀念及應用，有效提高可讀性。\r\n◎以JAVA程式語言實作資料結構中的重要理論，以範例程式說明資料結構的內涵。\r\n◎精選重點習題，參斟國家重要的考試命題重點，課後立即複習，達到事半功倍的效果。'),
(3, '江家頡、陳怡均', 'Visual C# 2008網路遊戲程式設計', 1, 'PG30034', '2009-11-27', 424, 480, '978-986-201-278-9 ', 1, '本書特色在於網路與遊戲的結合，如何把動畫加入在遊戲中呈現，並且撰寫出最簡單扼要的程式碼。再來是網路程式撰寫部份，如何把網路功能加入到遊戲裡面達到玩家與玩家溝通的效果，結合遊戲概念與網路程式的實作使遊戲變的有趣。\r\n全書共分三篇16章，內容由淺入深，首先介紹Visual C#的基本語法與控制項使用方式，讓沒接觸過Visual C#的讀者能夠快速上手。接著簡單的說明網路概念，並教各位如何利用Visual C#來寫Socket網路程式，進而完成一個簡單的聊天室。而第二、三篇則是實作基本與進階的網路遊戲。透過不斷的實作，讓讀者能夠從中獲得更多的經驗值。\r\n本書對於想進入遊戲設計門檻者而言可說是最佳學習途徑，不僅快速領略Visual C# 2008程式設計的基礎，更藉由各個範例程式瞭解視窗程式的高階設計技巧，期使本書能對讀者在視窗程式設計能有卓著的進步。'),
(4, '結城 浩', 'Java 重構- Java Refactoring', 1, 'PG20252', '2010-01-21', 432, 490, '978-986-201-087-7 ', 1, '本書的特徵有以下幾點：\r\n◆用Java語言所寫成的範例程式\r\n因為重構最主要的目的是改善軟體的體質，所以用具體的範例程式來解說是不可或缺的。\r\n◆詳細地解說重要的重構\r\n在Martin Fowler的『Refactoring』一書中，共用了70個重構的例子來說明。然而本書並沒有針對所有重構以同樣的篇幅來說明，而是針對重要的重構整理出要點，並做詳細的解釋。至於在本書中無法詳細解說到的重構部分，我們擇要在書末的附錄A中做介紹說明。\r\n◆利用練習問題來確認基礎知識是否紮實\r\n重構的解說由於出現了許多細膩的步驟，因此往往會因不留神而忽略了重點的部分。在本書的各章節的章末中都附有練習問題，可以讓你針對這章節中所學到的基礎知識再做一次複習。\r\n◆透過練習問題來發現「不祥的徵兆」\r\n當你在進行重構時，及時找出程式所散發出的「不祥的徵兆」的練習也是很重要的一環。在本書的練習問題中，不僅包括如何去找出程式碼所發出的「不祥的徵兆」的練習。由於存有不用撰寫程式也能做確認的結構，因此即使抽不出時間學習的人也能輕鬆地挑戰。'),
(5, '平田豊', 'Linux Device Driver Programming 驅動程式設計', 1, 'PG20280', '2009-01-05', 624, 690, '978-986-201-186-7 ', 1, '本書是一本寫給Linux裝置驅動程式開發者的書籍。以初次開發裝置驅動程式的開發者也容易理解的角度，從基礎概念開始詳加解說。\r\n\r\n全書前半部以著重於裝置驅動程式開發前的基本知識及其思考方法做為主要介紹，在後半部則依每個不同的硬體做專章的探討。網羅從計時器、記憶體、中斷的基礎到 PCI Express、ACPI、IPMI等最新的硬體知識。除此之外，還包含執行手法、偵錯手法、同步與鎖定…等等主題，一直到解讀既有驅動程式碼的技巧，全都收錄在本書中。\r\n\r\n本書獲得日本Amazon讀者票選五顆星的青睞，書中隨附光碟內更收錄了書中範例程式碼。不管對入門者或是專業的 Linux程式設計師來說，本書內所提及的開發驅動程式的精華，絕對會讓您很快就成為驅動程式的開發戰力。 '),
(6, '王鴻儒', 'Excel VBA 2007程式設計 - 增訂新版', 1, 'PG20271', '2008-05-27', 400, 450, '978-986-201-129-4', 1, '本書的設計主軸，即是以企業人員目前所面臨到的資料應用為課題，以深入淺出的方式，利用最簡單的VBA語言工具，快速而有效率的處理在企業中所會面臨到的會計帳務處理、行銷問卷整合、業務經銷資料佣金計算或者是行政人員所面臨的人事出缺席計算等課題，用既有的活頁簿資料，輔以VBA程式，快速的計算出帳務資料、經銷佣金或出缺席資料…等問題。\r\n\r\n透過本書，讀者可以深入學習Excel最經典的部份，經由深入淺出的說明，引導讀者一步步熟悉 VBA在Excel中的應用，為讀者建立VBA程式設計的基礎；搭配豐富的圖文解說，導引學習並熟悉VBA語法及架構，教讀者對問題迎刃而解的最佳法則！'),
(7, '姜姃延', '彩繪天堂Painter數位插畫輕鬆學', 2, 'GH20187', '2009-09-14', 448, 550, '978-986-201-255-0', 1, '各式各樣的筆刷配合影像完美演出\r\n創造搶眼奪目的藝術品！\r\n學Painter的第一本書\r\n初學者邁向實務設計者之路\r\n囊括基本繪圖至應用插畫、影像編輯效果！\r\n展現手繪質感的各種技法與實務工作者的現場訪談！\r\n\r\n■只要5分鐘，Painter基本功能與概念OK！\r\n階段性深入探討在畫布上呈現惟我獨尊藝術感的超強繪圖軟體Painter，其數位插畫之設計過程。\r\n■輕鬆學習以實務為中心的核心範例\r\n說明部分與輕鬆學練習是初學者必讀的內容。若能確實瞭解此部分的內容，超脫painter初學者身份將無庸置疑。\r\n■使自身設計實力晉昇‘哇~’階級的實際Know How\r\n更進一步說明Painter的架構。以Painter為主軸的使用者們必備的資訊，在範例學習過程當中，若想更深入學習，須認真研讀。\r\n■現代painter實務工作者們的工作經驗\r\n透過訪談活躍於各個領域的實務工作者，間接體驗各領域的實際工作環境。對未曾聽聞的新領域或已知卻苦無機會參觀現場的人而言，將是絕佳的實務指南。'),
(8, '金惠京', '不一樣的創作設計風格- Photoshop Artworks Stylebook ', 2, 'GH20200', '2009-11-30', 304, 520, '978-986-201-276-5', 1, '如果您想要了解掌握世界上數位藝術創作的趨勢，並學習一流獨特的技法，本書是您必看的選擇。想要了解如何用Photoshop創作安迪‧沃荷的普普風格，或是創作像蒙太奇、超現實主義、夢幻仙境風格、復古流行的表現手法；另外還有好萊塢風格的海報、中國水墨畫風格、水彩或粉筆畫風的創作...等，本書內含世界級超水準的20組作品，詳實地將創作技巧與實作方法全部公開，配合隨書附上DVD的高解析度作品相關檔案來學習，讓您邁向世界級的創作領域。\r\n\r\n本書一開始便整理出創作不一樣設計時要知道的三種Photoshop核心功能，接著以20個專題實例，分別是粉筆畫風格創作、水彩畫的合作創作、水墨畫創作、城市藝術的普普風、蒙太奇、超現實主義、夢幻仙境風格、復古流行的表現手法、好萊塢風格的海報...等等，各種當前世界上主流設計風尚作品。最後更有延伸學習的創意收集發想技巧、素材製作技巧，以及一流作品欣賞。\r\n'),
(9, '大室はじめ Hajime', '日式風格藝術紋樣素材選集', 2, 'GH20182', '2009-03-09', 128, 350, '978-986-201-203-1', 1, '在日式風格的設計作品裡，蘊涵著樸實與簡潔的獨有特質，不喧賓奪主的背景紋樣更能襯托出強烈的日式風情之存在感。\r\n\r\n本書收錄521種以底紋、插圖、裝飾框線等三大分類的日式傳統圖紋，總計有3900個以上的EPS、JPG、GIF紋樣檔。書中素材圖案皆取材自豐富的自然風土、昆蟲動物、花草植物與傳統插畫，經由反覆的組合排列，建構出獨特的紋路美感與優雅意象。\r\n\r\n*隨附DVD適用Mac & Win,內含EPS、JPG、GIF精緻圖檔。為了方便讀者使用，圖檔顏色更分為全彩、半彩、黑白等三種效果。'),
(10, '五島由實', 'Illustrator GOODS COLLECTION', 2, 'GH20173', '2008-10-29', 192, 350, '978-986-201-172-0 ', 1, '華麗的美感已經太多，簡單實用才夠迷人\r\n用自己的雙手，一折一割所做出來輕巧迷人的作品，總是有種說不出來的魅力！從開啟範本、套用圖樣、轉印、切割、縫製到完成，每個過程或許花費的時間並不多，但從動手做的那一刻開始，一股難掩的愉悅及成就感便滿滿充斥著內心。\r\n有別於一般書籍只帶給讀者單方面的介紹，本書著重於動手製作與軟體操作的相互搭配，雖然自己動手難免線條歪斜、成品也不盡完美，但樸拙的手感卻是電腦所無法比擬的。每一個製作的過程、每一次的成果都令人熱切期待；製作完成的作品，除了美觀之外，更可以依自己喜好運用在日常生活上，兼具美感與實用性－這，就是本書所帶給您的無窮魅力。\r\n\r\n◎本書著重於動手製作與軟體操作的相互搭配，並依照難易度共分為5個星等，但其實每一個製作步驟都很簡單，無需準備太多的工具與花費太多時間，就能輕鬆做出屬於自己的作品。\r\n◎透過本書將近50個作品範例的學習，激發讀者對生活的靈感，將平時隨手可得的物品，利用一點巧思設計製作，不但可增加生活樂趣，更具備再生利用的環保概念。\r\n◎本書貼心收錄以PDF格式所儲存的完成檔，讓沒有安裝Illustrator軟體的讀者，可以直接開啟PDF檔案後，直接列印使用，既省時又便利。'),
(11, '久米原榮、上田浩', 'Wireshark 網路協定分析與管理', 3, 'NE20287', '2010-01-12', 400, 480, '978-986-201-292-5', 1, '學會通訊協定與網路問題疑難排解的Wireshark實踐技術！\r\n這是一本專為想徹底了解Wireshark及網路協定的讀者們所撰寫的書籍。全書分為九大章節，在前面的章節是以Wireshark初學者必備的知識作為開端，說明網路的基本及Wireshark的概要。而在後半段為了要讓讀者在查閱上更加方便，分別以不同目的作為分類基礎，劃分成擷取操作、檔案操作、自訂設定、協定、網路、Tips、疑難排解等七個主題進行說明。\r\n\r\n本書分類清楚、圖解眾多，除了可以學會通訊協定外，也適用於想進行疑難排解的網路管理者。是一本絕對能夠為您釐清概念，讓您完全掌握這一套整合度完整的 Wireshark軟體。 '),
(12, '陳佩婷', 'Flash CS4動畫設計應用集', 3, 'NE30021', '2010-01-07', 464, 520, '978-986-201-290-1', 1, '◎以範例為導向，結合基礎觀念的說明與實用範例的步驟操作，範例精彩動人，循序漸進教導學習者進入Flash殿堂。\r\n◎內容包含基礎概念、圖文設計、動畫製作、按鈕設定、到ActionScript的程式應用，讓學習者輕鬆學會Flash的各項技巧功能。\r\n◎範例操作步驟詳盡清楚，讓學習者現學功能現用技巧，之後再舉一反三，自我驗收成果。\r\n◎熟讀本書，輕鬆學會製作酷炫動畫及精巧Flash遊戲。 '),
(13, '陳東偉', 'Internet網路實務與應用', 3, 'NE30018', '2010-01-04', 512, 500, '978-986-201-286-4', 1, '本書掌握Internet最新的觀念，結合時尚的新知與應用，教導如何利用這些網路資源來強化人脈經營、輔助學習、商業應用、社群經營、微網誌建立和網頁美化，對於網路安全的認識與防範、資訊倫理、電子商務、行動商務，也是本書關心的重點。在內容安排上，絕對是一本真正能夠掌握網際網路相關入門知識及最新科技應用的重點書籍。特色如下：\r\n\r\n■內容充實完備\r\n涵蓋的主題包括最新網際網路新知與科技應用，內容完備且豐富，依單元可分為：網路入門篇、人脈經營篇、資源活用篇、網路商業篇、視覺美化篇。\r\n■搭配圖例原理\r\n針對不易理解的原理，加入大量的圖例及示意圖來增加理解程度，期以最輕鬆的方式，吸收Internet相關應用的精華資訊。\r\n■融入實例操作\r\n將重要的軟體功能搭配實例演練，藉由循序步驟式的操作的過程從中學習實用的功能。\r\n■課後大量習題\r\n各章末尚有安排習題測驗，提供學生課後練習的機會，可作為老師驗收教學成效的測驗平台。'),
(14, '奧山壽史', '打開就能用的整站網頁設計範例集', 3, 'NE20286', '2009-12-23', 176, 380, '978-986-201-284-0', 1, '由專業設計師彙整集結了當下最具美感的網頁設計實例，您再也不需要因為沒有靈感而浪費掉寶貴的時間，本書隨附時尚的網頁設計版面，立即讓您擁有設計大師的超水準！\r\n本書共分成商店網頁的設計架構、專為介紹大量商品所設計的網頁架構、以圖片為主的簡單網頁架構、專為整合及傳達資訊所設計的網頁架構、專為個人網站所設計的架構等5個單元，並從中分析了高級感的設計、清新多彩的設計、信賴感的設計、以圖片傳達資訊的設計等14類各式的整站網頁設計，是一本可以自由使用的整站網頁設計範例集。每個設計至少都準備了一個最基本的網頁範本，只要依照本書所寫的步驟一步步執行，則無論是誰，皆可作出漂亮美觀的網頁。\r\n本書隨附光碟收錄書中所介紹設計的HTML檔案及CSS檔案，含括高級感的設計、清新多彩的設計、信賴感的設計、乾淨清爽感的設計、以圖片傳達資訊的設計等14類整站設計。打開收錄檔案可以隨修即用，加速網頁設計。'),
(15, 'Time研究室 陳錦輝', 'ASP.NET 3.5初學指引-使用Visual Basic 2008', 3, 'NE30015', '2009-10-29', 896, 650, '978-986-201-270-3', 1, '本書使用VWD採拖拉方式設計網頁介面，以事件處理模式開發ASP.NET程式為主軸，以及使用現成的相關資源來建置網站。例如使用Login等相關控制製作會員登入程式，利用驗證控制項進行輸入範圍的篩選，充分展現ASP.NET開發網頁程式的方便性。\r\n除此之外，網頁資料庫與新型態的AJAX網頁設計也包含在本書範圍之中。網頁資料庫方面可使用現成的資料控制項，幾乎不用撰寫程式就可以取得資料庫的資料，當然也能夠透過指定的SQL命令進行資料庫的存取。\r\n在觀念方面，本書將介紹ASP.NET程式的流程，並詳細說明ASP.NET為何能夠以事件處理模式開發ASP.NET程式，包含按鈕的PostBack與特定元件的AutoPostBack等行為。除此之外，也將說明AJAX運作的原理與一般網頁有何不同。\r\n\r\n本書特色\r\n■ 以「圖解」的方式來解說網站運作流程。\r\n■透過大量「實例」說明各種控制項，以實作建立ASP.NET網頁。\r\n■透過聊天室、網路書局、網路相簿等整合實例，示範如何開發具有特定功能的網站。\r\n■採用內嵌程式碼分割模型(Inline Code Separation Model，單一檔案模式)開發ASP.NET程式，讀者不必深入VB2008語法亦可學會設計ASP.NET。\r\n■隨書附贈Visual Web Developer 2008 Express（內含SQL Server Express 2008）開發網頁程式，並且大多數範例使用【檔案系統】方式建置，不需牽涉IIS與其他資料庫即可執行。\r\n■讀者不但能夠迅速學會使用 ASP.NET設計網頁，亦可增進更多的網頁知識，增強網頁設計的功力。'),
(16, '榮欽科技 鄭苑鳳', 'Dreamweaver CS4網頁設計應用集', 3, 'NE30020', '2009-09-07', 480, 520, '978-986-201-261-1', 1, '本書以範例導向，利用Step by step方式，引導初學者進入Dreamweaver CS4的世界。透過書中步驟式教學，能在短時間內熟悉網站設計建置的各項功能技巧與應用。\r\n內容分四篇，共十六章，方便教師規劃一學期的教學課程，課後評量附上各類試題與實作題練習，可評估學習效果。在各章節之後所規畫的「應用範例」，將完成一個完整的網站製作。涵蓋範圍如下：\r\n◎網站的前置規劃\r\n第一階段介紹完美的網站前置作業，學習如何規劃網站內容，提供初學者在設計網站前應有的觀念與架構。\r\n◎網頁設計基礎\r\n第二階段為網頁設計基礎，包括建立網站、設定文字以強化重點、加入表格以編排頁面、圖片編排以美化網頁、設定超連結以暢行無阻、以及網站的上傳與管理。\r\n◎ 多媒體建置篇\r\n第三階段著重在多媒體建置，包括Div設定以靈活頁面、加入頁框以多元化網頁、插入多媒體物件、Spry組件的應用、以及CSS樣式效果的運用。\r\n◎網站管理篇\r\n第四階段為互動、優化及輕鬆管理網站，介紹資源、圖庫與範本的使用，互動式表單，以及行為指令的使用。'),
(17, '賈蓉生、胡大源、許世豪', 'Java互動網站實作 -JSP與資料庫', 3, 'NE30017', '2009-08-13', 656, 620, '978-986-201-250-5', 1, '本書以初學基礎觀點，輕鬆切入JSP/Html/Java/Access設計資料庫的互動網頁操作程式，每一個學習重點都涵蓋了JSP網頁與Access 資料庫之設計與應用，藉由148則範例完全剖析JSP/Access基礎程式設計之各類問題，最後以三個實例系統貫穿全書，帶領讀者快速進入實務應用的領域。\r\n\r\n本書特色如下：\r\n* JSP/Access/JAVA環境：JSP使用jdk6.0、Tomcat6.0及Access 2007等最新版系統，介紹如何以Java語言支援JSP/Html網頁與資料庫之應用，建立第一個JSP網站資料庫。\r\n*互動式網頁設計：包括物件概念、輸入互動、預設物件、Java Bean應用、資料庫基礎操作、使用者認證等。\r\n* JSP與資料庫指令：包括Java Bean與資料庫、資料查詢、集合運算、聚合函數、巢式子查詢等。\r\n*交易管理設計：以銀行交易轉帳為例，詳細討論交易處理、轉帳交易與故障修補。\r\n* 基礎網頁框架：包括網頁框架設計與應用。將網頁分隔成數個次網頁，各個次網頁之間互相關連，使網頁多元生動，倍增功能應用。\r\n* JSP/Access應用實例：包括甄試與查榜系統、網路銀行系統、學生操行成績電腦化系統，三套系統實例引導完整設計與操作。'),
(18, '田中康博、林拓也', 'ActionScript 3.0 活用範例大辭典', 3, 'NE20280', '2009-03-23', 544, 550, '978-986-201-207-9', 1, '本書特色\r\n●依照ActionScript 3.0的各種實際應用功能來劃分成280個單元，讓讀者可以快速找到相關的內容。\r\n●詳細說明各種屬性與方法之格式、型態、傳回值、用途，以及所屬類別。\r\n●以圖片表示的執行結果，搭配範例程式碼和語法說明，讓您徹底精通 ActionScript 3.0。\r\n●隨附光碟收錄了本書所有範例的fla檔、swf檔、html檔，方便您進行學習和修改使用。'),
(19, '數位新知', '網頁設計應用集 -Dreamweaver+PhotoImpact+Flash', 3, 'NE30007', '2009-03-16', 464, 520, '978-986-201-202-4', 1, '想要製作精緻動人的網站或網頁並不是難事，但對於初學者來說往往不知該如何選擇軟體，本書將推薦以Flash來製作網頁動畫，以PhotoImpact編修影像、製作網頁元件，以Dreamweaver來做網頁的整合處理。相信看完本書之後，設計一個具專業水準又實用的網頁，對您來說絕對是件容易的事。\r\n書中內容共分為五篇，首先針對網站企劃與設計要領作介紹，接著從Dreamweaver CS3的編輯與整合開始，到PhotoImpact X3的影像編輯製作，接著搭配Flash CS3的酷炫動畫，三項超強網頁設計軟體，以一圖一步驟詳細的圖文解說方式，帶領您循序操作，輕鬆學會書中所有技巧，最後一篇結合本書所有軟體的技巧，完整的應用，讓您感受網頁製作上一氣呵成的快感。並且提昇網頁設計的功力，輕鬆完成具有個人獨特風格的網頁。'),
(20, '陳湘揚 ', '網路概論(第二版)', 3, 'NE30010', '2008-12-30', 592, 580, '978-986-201-187-4', 1, '◎參考全國多位老師教學經驗設計編撰，專為大專網路概論所設計的教學用書。\r\n◎書中以圖解和個案來談論網路的運作概念，避免艱深技術，方便老師授課。\r\n◎書中也安排簡易的網路實作練習，讓讀者可自行學習之用。\r\n◎網路基礎篇首先介紹網路的各種用途與分類；通訊協定和網路模型則介紹重要的OSI七層協定和DoD四層協定；而傳輸媒介和和網路設備，則介紹目前實際運用的媒介和概念，讓讀者知道實際網路的實體組成。\r\n◎網路原理篇針對網路運作的原理來進行比較深入的談論。深入介紹區域網路的主流-乙太網路和廣域網路，包括ADSL和Cable Modem等；另外介紹DoD模型最重要的IP層和TCP層的相關原理。\r\n◎應用層篇係討論網路應用層重要的相關應用和其原理。例如：DNS和 DHCP、WWW、檔案傳輸協定(FTP)與點對點傳輸(P2P)、電子郵件的POP3和SMTP協定、即時通軟體和網路電話等等。\r\n◎無線網路和資訊安全篇則探討無線網路和資訊安全相關應用和原理。'),
(21, '林季嫻', 'Joomla圖解架站實例應用', 3, 'NE20279', '2008-11-25', 560, 490, '978-986-201-178-2', 1, '讓您輕鬆架設及管理互動式網站的神兵利器-Joomla\r\n本書是以初、中階級的讀者為導向，將Joomla的操作程序及架設網站等功能，利用圖解加上實例導向的方式，為您深入淺出地引領至Joomla的最高殿堂。全書內容不但包含遠端主機的架設及Joomla的選單管理、內容管理、元件管理等，另外還專章深入為讀者介紹Joomla的擴充套件。透過隨附光碟的動態操作示範及實地建構，本書絕對是您在架設Joomla互動式網站時的必備工具書。\r\n\r\n◎利用步驟式的圖解說明，帶您一步步掌握Joomla的全貌\r\n◎以個案實例的解析手法，實地培養您的Joomla實戰經驗\r\n◎ 專章分析網頁、選單、內容、元件等管理，讓您輕輕鬆鬆成為Joomla達人\r\n◎透過隨附光碟內的動態教學操作示範，帶您實際體驗架站的樂趣\r\n◎ 介紹符合讀者需求的擴充套件，架設個人化的Joomla互動式網站\r\n◎由作者精選網羅線上的架站資源，讓您的網站更加豐富化 '),
(22, '前沿科技 溫謙', 'Web CSS網頁設計大全', 3, 'NE20277', '2008-10-29', 448, 580, '978-986-201-169-0', 1, '●內容深入淺出，配合範例詳細解說\r\n本書以獨特的探索方式針對CSS設計技術的原理和方法進行講解，符合自學自修的參考與應用。配合書中講解及光碟的範例，讀者不但知其然，而且知其所以然，明白了道理之後，應用起來就能遊刃有餘。\r\n●一流作品的範例實作技巧與經驗分享\r\n本書帶領大家深入探索，並透過實作與實驗，讓讀者自己體會。對各種設計中常用的網頁元素和版面配置的設計提供完整的思路和製作方法，對學習和工作過程中遇到的問題提供過來人的經驗分享。\r\n●時下最流行的設計應用技巧與實作\r\n對各種網頁元素和版面配置方式，包括各種導航、導覽功能表（水平的、垂直的、固定寬度的、自我調整寬度的、下拉的等），Tab面板、可收合式面板和折疊式面板，以及各種多欄式編排的版面配置（固定寬度的、變化寬度的、固定寬度與變化寬度結合的）…等等，都提供詳細的分類和歸納，便於讀者在理解的基礎上，直接修改後使用。\r\n作者與「CSS禪意花園」的創建者Dave Shea取得了連絡，並獲得了使用禪意花園作品的授權。本書會結合禪意花園網站中的一些精彩案例，提出技巧與設計的分析和說明。最後將綜合前面所學，從創意、拍攝素材到實際完成的全過程，培養實際製作出一流作品的實力。'),
(23, '林新德', 'Flash CS3 ActionScript 3.0應用程式設計', 3, 'NE20265', '2007-11-22', 560, 520, '978-986-201-067-9', 1, '◎詳述 ActionScript 3.0 基本觀念\r\nActionScript 3.0 的語法只有基本的部份和 ActionScript 2.0 相同，事件處理、類別定義和 API 都有極多的差異。使用Flash CS3當然要使用ActionScript 3.0，若只是使用ActionScript 2.0，顯然是停留在被淘汰的邊緣，和使用舊版本的Flash相差無幾。本書從最基本的語法、最基本的觀念開始，一步步帶領讀者進入 ActionScript 3.0的驚奇世界。\r\n◎降低物件導向的學習門檻\r\n以適當的譬喻說明物件導向程式設計，並以範例印證觀念，釐清ActionScript 3.0和其它物件導向程式語言的不同。\r\n◎細說視覺物件與組件的使用\r\n仔細說明視覺物件的架構及相互關係，並以範例說明各個組件的用法及應用。\r\n◎是觀念書也是範例書\r\n本書第一部份「基礎語法與物件導向」不厭其煩敘述基本觀念，並以範例說明觀念，打穩ActionScript 3.0基礎。第二部份「視覺物件與組件」和第三部份「資料交換與XML」使用大量範例說明常用類別的用法，讓讀者開發專案時能更得心應手。');

-- --------------------------------------------------------

--
-- 資料表結構 `product_book`
--

CREATE TABLE `product_book` (
  `sid` int(11) NOT NULL,
  `category_sid` int(11) NOT NULL,
  `Chip` varchar(255) DEFAULT NULL,
  `Label` varchar(255) DEFAULT NULL,
  `CodeName` varchar(255) DEFAULT NULL,
  `Chipsets` varchar(255) DEFAULT NULL,
  `Density` varchar(255) DEFAULT NULL,
  `Capacity` varchar(255) DEFAULT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductDetail` varchar(255) DEFAULT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `product_book`
--

INSERT INTO `product_book` (`sid`, `category_sid`, `Chip`, `Label`, `CodeName`, `Chipsets`, `Density`, `Capacity`, `ProductName`, `ProductDetail`, `Price`) VALUES
(1, 1, 'Intel', NULL, 'KabyLake', NULL, NULL, NULL, 'Intel KabyLake Celeron G3930 2.9GHz 51W', '腳位：1151 \r\n<br>時脈速度：2.90 GHz \r\n<br>快取記憶體：2.0 MB \r\n<br>內含顯示：HD Graphics 610 \r\n<br>核心/執行緒：2 / 2 \r\n<br>TDP：51W ', 1050),
(2, 1, 'Intel', NULL, 'KabyLake', NULL, NULL, NULL, 'Intel KabyLake Celeron G3950 3.0GHz 51W', NULL, 1480),
(3, 1, 'Intel', NULL, 'KabyLake', NULL, NULL, NULL, 'Intel KabyLake Pentium G4560 3.5GHz 54W', NULL, 1700),
(4, 1, 'Intel', NULL, 'KabyLake', NULL, NULL, NULL, 'Intel KabyLake Core i3-7100 3.9GHz 51W', NULL, 3250),
(5, 1, 'Intel', NULL, 'KabyLake', NULL, NULL, NULL, 'Intel KabyLake Core i5-7400 3.0GHz 65W', NULL, 5300),
(6, 1, 'Intel', NULL, 'KabyLake', NULL, NULL, NULL, 'Intel KabyLake Core i5-7600 3.5GHz 65W', NULL, 6390),
(7, 1, 'Intel', NULL, 'CoffeeLake', NULL, NULL, NULL, 'Intel CoffeeLake Celeron G4900 3.1GHz 54W', NULL, 1180),
(8, 1, 'Intel', NULL, 'CoffeeLake', NULL, NULL, NULL, 'Intel CoffeeLake Celeron G4920 3.2GHz 54W', NULL, 1680),
(9, 1, 'Intel', NULL, 'CoffeeLake', NULL, NULL, NULL, 'Intel CoffeeLake Pentium G5400 3.7GHz 54W', NULL, 1880),
(10, 1, 'Intel', NULL, 'CoffeeLake', NULL, NULL, NULL, 'Intel CoffeeLake Pentium G5600 3.9GHz 54W', NULL, 3100),
(11, 1, 'Intel', NULL, 'CoffeeLake', NULL, NULL, NULL, 'Intel CoffeeLake Core i3-8100 3.6GHz 65W', NULL, 3400),
(12, 1, 'Intel', NULL, 'CoffeeLake', NULL, NULL, NULL, 'Intel CoffeeLake Core i3-8300 3.7GHz 65W', NULL, 4400),
(13, 1, 'Intel', NULL, 'CoffeeLake', NULL, NULL, NULL, 'Intel CoffeeLake Core i5-8400 2.8GHz 65W', NULL, 5600),
(14, 1, 'Intel', NULL, 'CoffeeLake', NULL, NULL, NULL, 'Intel CoffeeLake Core i5-8600 3.1GHz 65W', NULL, 6800),
(15, 1, 'Intel', NULL, 'CoffeeLake', NULL, NULL, NULL, 'Intel CoffeeLake Core i7-8700 3.2GHz 65W', NULL, 9800),
(16, 1, 'Intel', NULL, 'CoffeeLake', NULL, NULL, NULL, 'Intel CoffeeLake Core i7-8086K 4.0GHz 95W', NULL, 13900),
(17, 1, 'AMD', NULL, 'Ryzen 1000', NULL, NULL, NULL, 'AMD Ryzen 1000 R3 1200 3.1GHz 65W', NULL, 1990),
(18, 1, 'AMD', NULL, 'Ryzen 1000', NULL, NULL, NULL, 'AMD Ryzen 1000 R3 1300X 3.5GHz 65W', NULL, 3850),
(19, 1, 'AMD', NULL, 'Ryzen 1000', NULL, NULL, NULL, 'AMD Ryzen 1000 R7 1700X 3.4GHz 95W', NULL, 8880),
(20, 1, 'AMD', NULL, 'Ryzen 1000', NULL, NULL, NULL, 'AMD Ryzen 1000 R7 1800X 3.6GHz 95W', NULL, 11300),
(21, 1, 'AMD', NULL, 'Ryzen 2000', NULL, NULL, NULL, 'AMD Ryzen 2000 R3 2200G 3.5GHz 65W', NULL, 3220),
(22, 1, 'AMD', NULL, 'Ryzen 2000', NULL, NULL, NULL, 'AMD Ryzen 2000 R5 2400G 3.6GHz 65W', NULL, 5200),
(23, 1, 'AMD', NULL, 'Ryzen 2000', NULL, NULL, NULL, 'AMD Ryzen 2000 R5 2600 3.4GHz 65W', NULL, 6390),
(24, 1, 'AMD', NULL, 'Ryzen 2000', NULL, NULL, NULL, 'AMD Ryzen 2000 R7 2700X 3.2GHz 65W', NULL, 9990),
(25, 2, 'Intel', 'ASUS', NULL, 'H110', NULL, NULL, 'ASUS H110M-K', '物超所值的 micro-ATX H110 具備穩定可靠的5重防護 II<br>\r\nLED 發光音效屏蔽和支援 DDR4<br> \r\n5重防護 II – 先進的全方位硬體防護<br> \r\nDDR4 記憶體相容性<br> \r\n壯闊的遊戲音效與 LED 發光屏蔽<br>\r\n業界聞名的 UEFI BIOS 與 EZ Flash 3', 2190),
(26, 2, 'Intel', 'GIGABYTE', NULL, 'H110', NULL, NULL, 'GIGABYTE H110M-H', NULL, 2190),
(27, 2, 'Intel', 'MSI', NULL, 'H110', NULL, NULL, 'MSI H110M PRO-VD', NULL, 1690),
(28, 2, 'Intel', 'MSI', NULL, 'H110', NULL, NULL, 'MSI H110M PRO-VHL\r\n', NULL, 2190),
(29, 2, 'Intel', 'ASUS', NULL, 'B250', NULL, NULL, 'ASUS PRIME B250M-K', 'M.2*1支援NVME<br>\r\n五項數位電源<br>\r\nDUB+DVI<br>\r\nCom Head<br>\r\n升級電競音效與LED發光音效屏蔽<br> \r\n四年保固', 2690),
(30, 2, 'Intel', 'ASUS', NULL, 'B250', NULL, NULL, 'ASUS PRIME B250M-A', 'USB3.0 TYPE A+C搭載<br> \r\nM.2*2支援NVME<br> \r\nDSUB+DVI+HDMI<br>  \r\nCom + LPT Head<br>  \r\n升級電競音訊與LED發光音效屏蔽 ', 2990),
(31, 2, 'Intel', 'ASUS', NULL, 'B250', NULL, NULL, 'ASUS B250-PRO\r\n', 'USB3.0 TYPE A+C搭載<br>\r\nM.2*2支援NVME<br> \r\nDSUB+DVI+HDMI<br> \r\nPCI*2<br> \r\n紅色PCB電競塗裝，支援AIO PUMP<br> \r\n升級電競音訊與發光音效屏蔽', 3390),
(32, 2, 'Intel', 'ASUS', NULL, 'B250', NULL, NULL, 'ASUS ROG STRIX B250G GAMING', 'ROG SupremeFX S1220A 音效晶片：優異音效技術搭載雙耳擴大器，打造水晶般清澈音質 \r\n<br>遊戲網路：同級最佳 IntelR Gigabit 乙太網路，提供絕佳區域網路、線上遊戲體驗，並配備 LANGuard 突波防護\r\n<br>次世代連線功能：內建雙 M.2 插槽，提供高達 32Gbps PCIe 頻寬和 IntelR Optane memory ready\r\n<br>申請專利中的 ASUS SafeSl', 2490),
(33, 2, 'Intel', 'ASUS', NULL, 'B250', NULL, NULL, 'ASUS ROG STRIX B250H GAMING', '支援CPU ：1151腳位(intel 7代 MAX)<br> \r\n記憶體 ：4x DIMM / 64GB DDR4(max)<br>  \r\n顯示輸出：1x DVI / 1x HDMI<br>  \r\n擴充插槽：2x PCIe 3.0x16 / 4x PCIe 3.0x1<br>  \r\n儲存插槽：2x M.2 / 6x SATA<br>  \r\nUSB插槽 ：6x USB 3.0 / 6x USB 2.0<br>  \r\n網路連接：Intel I219V', 3490),
(34, 2, 'Intel', 'GIGABYTE', NULL, 'B250', NULL, NULL, 'GIGABYTE B250M-D2V', NULL, 2590),
(35, 2, 'Intel', 'GIGABYTE', NULL, 'B250', NULL, NULL, 'GIGABYTE B250M-D3H', NULL, 3090),
(36, 2, 'Intel', 'MSI', NULL, 'B250', NULL, NULL, 'MSI B250M PRO-VH\r\n', NULL, 2090),
(37, 2, 'Intel', 'MSI', NULL, 'B250', NULL, NULL, 'MSI B250M MORTAR', NULL, 2790),
(38, 2, 'Intel', 'ASUS', NULL, 'B360', NULL, NULL, 'ASUS PRIME B360M-K', '支援CPU ：1151腳位(intel 8代)<br>\r\n記憶體 ：2x DIMM / 32GB DDR4(max)<br> \r\n顯示輸出：1x D-Sub / 1x DVI<br> \r\n擴充插槽：1x PCIe 3.0x16 / 2x PCIe 3.0x1<br> \r\n儲存插槽：1x M.2 / 6x SATA<br> \r\nUSB插槽 ：2x USB 3.1 Gen2 / 4x USB 3.1<br> Gen1 / 6x USB 2.0/1.1<br> \r\n網路連接：Realtek ALC887', 2690),
(39, 2, 'Intel', 'ASUS', NULL, 'B360', NULL, NULL, 'ASUS PRIME B360M-A', '支援CPU ：1151腳位(intel 8代)<br> \r\n記憶體 ：4x DIMM / 64GB DDR4(max)<br>  \r\n顯示輸出：1x D-Sub / 1x HDMI<br>  \r\n擴充插槽：1x PCIe 3.0x16 / 2x PCIe 3.0x1<br>  \r\n儲存插槽：2x M.2 / 6x SATA<br>  \r\nUSB插槽 ：2x USB 3.1 Gen2 / 3x USB 3.1<br>  Gen1 / 6x USB 2.0/1.1<br>  \r\n網路連接：Realtek AL', 2990),
(40, 2, 'Intel', 'ASUS', NULL, 'B360', NULL, NULL, 'ASUS TUF B360M-E GAMING', NULL, 3090),
(41, 2, 'Intel', 'ASUS', NULL, 'B360', NULL, NULL, 'ASUS TUF B360-PLUS GAMING', NULL, 3490),
(42, 2, 'Intel', 'ASUS', NULL, 'B360', NULL, NULL, 'ASUS ROG STRIX B360-G GAMING', NULL, 3390),
(43, 2, 'Intel', 'GIGABYTE', NULL, 'B360', NULL, NULL, 'GIGABYTE B360M GAMING HD', NULL, 2450),
(44, 2, 'Intel', 'GIGABYTE', NULL, 'B360', NULL, NULL, 'GIGABYTE B360M D3H', NULL, 3090),
(45, 2, 'Intel', 'GIGABYTE', NULL, 'B360', NULL, NULL, 'GIGABYTE B360M AORUS GAMING 3', NULL, 3090),
(46, 2, 'Intel', 'GIGABYTE', NULL, 'B360', NULL, NULL, 'GIGABYTE B360 HD3', NULL, 3290),
(47, 2, 'Intel', 'MSI', NULL, 'B360', NULL, NULL, 'MSI B360M FIRE', NULL, 2460),
(48, 2, 'Intel', 'MSI', NULL, 'B360', NULL, NULL, 'MSI B360M PRO-VDH', NULL, 2600),
(49, 2, 'Intel', 'MSI', NULL, 'B360', NULL, NULL, 'MSI B360M BAZOOKA', NULL, 3090),
(50, 2, 'Intel', 'MSI', NULL, 'B360', NULL, NULL, 'MSI B360M MORTAR TITANIUM', NULL, 3150),
(51, 2, 'Intel', 'MSI', NULL, 'B360', NULL, NULL, 'MSI B360 GAMING PLUS', NULL, 3590),
(52, 2, 'Intel', 'ASUS', NULL, '', NULL, NULL, 'ASUS PRIME Z370-P', NULL, 4090),
(53, 2, 'Intel', 'ASUS', NULL, 'Z370', NULL, NULL, 'ASUS TUF Z370-PLUS GAMING', NULL, 4290),
(54, 2, 'Intel', 'ASUS', NULL, 'Z370', NULL, NULL, 'ASUS TUF Z370-PRO GAMING', NULL, 4990),
(55, 2, 'Intel', 'ASUS', NULL, 'Z370', NULL, NULL, 'ASUS ROG STRIX Z370-G GAMING', NULL, 4790),
(56, 2, 'Intel', 'ASUS', NULL, 'Z370', NULL, NULL, 'ASUS ROG STRIX Z370-H GAMING', NULL, 5090),
(57, 2, 'Intel', 'GIGABYTE', NULL, 'Z370', NULL, NULL, 'GIGABYTE Z370M DS3H', NULL, 3590),
(58, 2, 'Intel', 'GIGABYTE', NULL, 'Z370', NULL, NULL, 'GIGABYTE Z370P D3', NULL, 3990),
(59, 2, 'Intel', 'GIGABYTE', NULL, 'Z370', NULL, NULL, 'GIGABYTE Z370 HD3-OP', NULL, 4990),
(60, 2, 'Intel', 'MSI', NULL, 'Z370', NULL, NULL, 'MSI Z370-A PRO', NULL, 3790),
(61, 2, 'Intel', 'MSI', NULL, 'Z370', NULL, NULL, 'MSI Z370 TOMAHAWK', NULL, 4680),
(62, 2, 'Intel', 'MSI', NULL, 'Z370', NULL, NULL, 'MSI Z370 GAMING PRO CARBON', NULL, 5410),
(63, 2, 'AMD', 'ASUS', NULL, 'A320', NULL, NULL, 'ASUS PRIME A320M-K', NULL, 2390),
(64, 2, 'AMD', 'GIGABYTE', NULL, 'A320', NULL, NULL, 'GIGABYTE A320M-S2H', NULL, 2090),
(65, 2, 'AMD', 'MSI', NULL, 'A320', NULL, NULL, 'MSI A320M PRO-VH PLUS', NULL, 2090),
(66, 2, 'AMD', 'ASUS', NULL, 'B350', NULL, NULL, 'ASUS PRIME B350M-E', NULL, 2290),
(67, 2, 'AMD', 'ASUS', NULL, 'B350', NULL, NULL, 'ASUS TUF B350M-PLUS GAMING', NULL, 3090),
(68, 2, 'AMD', 'ASUS', NULL, 'B350', NULL, NULL, 'ASUS ROG STRIX B350-F GAMING', NULL, 3690),
(69, 2, 'AMD', 'GIGABYTE', NULL, 'B350', NULL, NULL, 'GIGABYTE AB350M-GAMING 3', NULL, 2490),
(70, 2, 'AMD', 'GIGABYTE', NULL, 'B350', NULL, NULL, 'GIGABYTE AB350-GAMING 3', NULL, 2980),
(71, 2, 'AMD', 'MSI', NULL, 'B350', NULL, NULL, 'MSI B350M PRO-VD PLUS', NULL, 2390),
(72, 2, 'AMD', 'MSI', NULL, 'B350', NULL, NULL, 'MSI B350M MORTAR', NULL, 2790),
(73, 2, 'AMD', 'MSI', NULL, 'B350', NULL, NULL, 'MSI B350 GAMING PLUS', NULL, 2990),
(74, 2, 'AMD', 'MSI', NULL, 'B350', NULL, NULL, 'MSI B350 TOMAHAWK', NULL, 3490),
(75, 2, 'AMD', 'ASUS', NULL, 'X370', NULL, NULL, 'ASUS PRIME X370-A', NULL, 2990),
(76, 2, 'AMD', 'ASUS', NULL, 'X370', NULL, NULL, 'ASUS ROG CROSSHAIR VI HERO', NULL, 4990),
(77, 2, 'AMD', 'GIGABYTE', NULL, 'X370', NULL, NULL, 'GIGABYTE AX370-GAMING 3', NULL, 3390),
(78, 2, 'AMD', 'GIGABYTE', NULL, 'X370', NULL, NULL, 'GIGABYTE AORUS AX370-GAMING K7', NULL, 6790),
(79, 2, 'AMD', 'MSI', NULL, 'X370', NULL, NULL, 'MSI X370 GAMING PLUS', NULL, 2990),
(80, 2, 'AMD', 'MSI', NULL, 'X370', NULL, NULL, 'MSI X370 GAMING PRO CARBON', NULL, 4690),
(81, 2, 'AMD', 'MSI', NULL, 'X370', NULL, NULL, 'MSI X370 XPOWER GAMING TITANIUM', NULL, 4990),
(82, 2, 'AMD', 'ASUS', NULL, 'X470', NULL, NULL, 'ASUS TUF X470-PLUS GAMING', NULL, 4490),
(83, 2, 'AMD', 'ASUS', NULL, 'X470', NULL, NULL, 'ASUS ROG STRIX X470-F GAMING', NULL, 5990),
(84, 2, 'AMD', 'GIGABYTE', NULL, 'X470', NULL, NULL, 'GIGABYTE X470 AORUS ULTRA GAMING', NULL, 5190),
(85, 2, 'AMD', 'GIGABYTE', NULL, 'X470', NULL, NULL, 'GIGABYTE X470 AORUS GAMING 7 WIFI', NULL, 7990),
(86, 2, 'AMD', 'MSI', NULL, 'X470', NULL, NULL, 'MSI X470 GAMING PLUS', NULL, 4290),
(87, 3, NULL, 'UMAX', NULL, NULL, '4G', NULL, 'UMAX 4G 2133MHz', NULL, 1080),
(88, 3, NULL, 'UMAX', NULL, NULL, '4G', NULL, 'UMAX 4G 2400MHz', NULL, 1090),
(89, 3, NULL, 'UMAX', NULL, NULL, '4G', NULL, 'UMAX 4G 2666MHz', NULL, 1130),
(90, 3, NULL, 'UMAX', NULL, NULL, '8G', NULL, 'UMAX 8G 2133MHz', NULL, 1950),
(91, 3, NULL, 'UMAX', NULL, NULL, '8G', NULL, 'UMAX 8G 2400MHz', NULL, 2050),
(92, 3, NULL, 'UMAX', NULL, NULL, '8G', NULL, 'UMAX 8G 2666MHz', NULL, 2100),
(93, 3, NULL, 'UMAX', NULL, NULL, '16G', NULL, 'UMAX 16G 2133MHz', NULL, 4200),
(94, 3, NULL, 'UMAX', NULL, NULL, '16G', NULL, 'UMAX 16G 2400MHz', NULL, 4400),
(95, 3, NULL, 'UMAX', NULL, NULL, '16G', NULL, 'UMAX 16G 2666MHz', NULL, 4500),
(96, 3, NULL, 'Transcend', NULL, NULL, '4G', NULL, 'Transcend 4G 2400MHz', NULL, 1260),
(97, 3, NULL, 'Transcend', NULL, NULL, '8G', NULL, 'Transcend 8G 2400MHz', NULL, 2380),
(98, 3, NULL, 'Transcend', NULL, NULL, '16G', NULL, 'Transcend 16G 2400MHz', NULL, 4650),
(99, 3, NULL, 'ADATA', NULL, NULL, '4G', NULL, 'ADATA 4G 2400MHz', NULL, 1130),
(100, 3, NULL, 'ADATA', NULL, NULL, '4G', NULL, 'ADATA 4G 2666MHz', NULL, 1150),
(101, 3, NULL, 'ADATA', NULL, NULL, '8G', NULL, 'ADATA 8G 2400MHz', NULL, 2050),
(102, 3, NULL, 'ADATA', NULL, NULL, '8G', NULL, 'ADATA 8G 2666MHz', NULL, 2180),
(103, 3, NULL, 'ADATA', NULL, NULL, '16G', NULL, 'ADATA 16G 2400MHz', NULL, 4650),
(104, 3, NULL, 'ADATA', NULL, NULL, '16G', NULL, 'ADATA 16G 2666MHz', NULL, 4680),
(105, 3, NULL, 'Kingston', NULL, NULL, '4G', NULL, 'Kingston 4G 2400MHz', NULL, 1290),
(106, 3, NULL, 'Kingston', NULL, NULL, '8G', NULL, 'Kingston 8G 2400MHz', NULL, 2300),
(107, 3, NULL, 'Kingston', NULL, NULL, '8G', NULL, 'Kingston 8G 2666MHz', NULL, 2310),
(108, 3, NULL, 'Kingston', NULL, NULL, '16G', NULL, 'Kingston 16G 2400MHz', NULL, 4650),
(109, 3, NULL, 'Kingston', NULL, NULL, '16G', NULL, 'Kingston 16G 2666MHz', NULL, 4680),
(110, 3, NULL, 'Micron', NULL, NULL, '4G', NULL, 'Kingston 4G 2400MHz', NULL, 1190),
(111, 3, NULL, 'Micron', NULL, NULL, '8G', NULL, 'Kingston 8G 2400MHz', NULL, 2090),
(112, 3, NULL, 'Micron', NULL, NULL, '8G', NULL, 'Kingston 8G 2666MHz', NULL, 2180),
(113, 3, NULL, 'Micron', NULL, NULL, '16G', NULL, 'Kingston 16G 2666MHz', NULL, 4599),
(114, 4, NULL, 'ADATA', NULL, NULL, NULL, '120G', 'ADATA Ultimate SU650 120G', NULL, 880),
(115, 4, NULL, 'ADATA', NULL, NULL, NULL, '240G', 'ADATA Ultimate SU650 240G', NULL, 1450),
(116, 4, NULL, 'ADATA', NULL, NULL, NULL, '480G', 'ADATA Ultimate SU650 480G', NULL, 2680),
(117, 4, NULL, 'ADATA', NULL, NULL, NULL, '960G', 'ADATA Ultimate SU650 960G', NULL, 4880),
(118, 4, NULL, 'ADATA', NULL, NULL, NULL, '128G', 'ADATA Ultimate SU800 128G', NULL, 1130),
(119, 4, NULL, 'ADATA', NULL, NULL, NULL, '256G', 'ADATA Ultimate SU800 256G', NULL, 1750),
(120, 4, NULL, 'ADATA', NULL, NULL, NULL, '512G', 'ADATA Ultimate SU800 512G', NULL, 3150),
(121, 4, NULL, 'ADATA', NULL, NULL, NULL, '1TB', 'ADATA Ultimate SU800 1TB', NULL, 6450),
(122, 4, NULL, 'ADATA', NULL, NULL, NULL, '256G', 'ADATA Ultimate SU900 256G', NULL, 2580),
(123, 4, NULL, 'ADATA', NULL, NULL, NULL, '512G', 'ADATA Ultimate SU900 512G', NULL, 4480),
(124, 4, NULL, 'ADATA', NULL, NULL, NULL, '1TB', 'ADATA Ultimate SU900 1TB', NULL, 8790),
(125, 4, NULL, 'Kingston', NULL, NULL, NULL, '120G', 'Kingston UV400 120G', NULL, 950),
(126, 4, NULL, 'Kingston', NULL, NULL, NULL, '960G', 'Kingston UV400 960G', NULL, 7500),
(127, 4, NULL, 'Kingston', NULL, NULL, NULL, '120G', 'Kingston UV500 120G', NULL, 990),
(128, 4, NULL, 'Kingston', NULL, NULL, NULL, '240G', 'Kingston UV500 240G', NULL, 1650),
(129, 4, NULL, 'Kingston', NULL, NULL, NULL, '480G', 'Kingston UV500 480G', NULL, 2950),
(130, 4, NULL, 'SanDisk', NULL, NULL, NULL, '128G', 'SanDisk X400 128G', NULL, 1750),
(131, 4, NULL, 'SanDisk', NULL, NULL, NULL, '512G', 'SanDisk X400 512G', NULL, 4990),
(132, 4, NULL, 'SanDisk', NULL, NULL, NULL, '1TB', 'SanDisk X400 1TB', NULL, 8880),
(133, 4, NULL, 'Micron', NULL, NULL, NULL, '250G', 'Micron MX500 250G', NULL, 1850),
(134, 4, NULL, 'Micron', NULL, NULL, NULL, '500G', 'Micron MX500 500G', NULL, 3450),
(135, 4, NULL, 'Micron', NULL, NULL, NULL, '1TB', 'Micron MX500 1TB', NULL, 6850),
(136, 4, NULL, 'Micron', NULL, NULL, NULL, '2TB', 'Micron MX500 2TB', NULL, 14990),
(137, 4, NULL, 'WD', NULL, NULL, NULL, '250G', 'WD Blue 250G', NULL, 1780),
(138, 4, NULL, 'WD', NULL, NULL, NULL, '500G', 'WD Blue 500G', NULL, 3250),
(139, 4, NULL, 'WD', NULL, NULL, NULL, '1TB', 'WD Blue 1TB', NULL, 6780),
(140, 4, NULL, 'WD', NULL, NULL, NULL, '2TB', 'WD Blue 2TB', NULL, 14500),
(141, 5, NULL, 'Toshiba', NULL, NULL, NULL, '1TB', 'Toshiba DT01ACA100 1TB', NULL, 1340),
(142, 5, NULL, 'Toshiba', NULL, NULL, NULL, '2TB', 'Toshiba DT01ACA200 2TB', NULL, 1890),
(143, 5, NULL, 'Toshiba', NULL, NULL, NULL, '3TB', 'Toshiba DT01ACA300 3TB', NULL, 2290),
(144, 5, NULL, 'Toshiba', NULL, NULL, NULL, '4TB', 'Toshiba MD04ACA400 4TB', NULL, 2990),
(145, 5, NULL, 'Toshiba', NULL, NULL, NULL, '6TB', 'Toshiba MD04ACA600 6TB', NULL, 5890),
(146, 5, NULL, 'Seagate', NULL, NULL, NULL, '1TB', 'Seagate ST1000DM010 1TB', NULL, 1450),
(147, 5, NULL, 'Seagate', NULL, NULL, NULL, '2TB', 'Seagate ST2000DM006 2TB', NULL, 1990),
(148, 5, NULL, 'Seagate', NULL, NULL, NULL, '3TB', 'Seagate ST3000DM007 3TB', NULL, 2790),
(149, 5, NULL, 'Seagate', NULL, NULL, NULL, '4TB', 'Seagate ST4000DM004 4TB', NULL, 3390),
(150, 5, NULL, 'Seagate', NULL, NULL, NULL, '6TB', 'Seagate ST6000DM003 6TB', NULL, 5590),
(151, 5, NULL, 'Seagate', NULL, NULL, NULL, '8TB', 'Seagate ST8000DM004 8TB', NULL, 6790),
(152, 5, NULL, 'WD', NULL, NULL, NULL, '1TB', 'WD 10EZEX 1TB', NULL, 1450),
(153, 5, NULL, 'WD', NULL, NULL, NULL, '2TB', 'WD 20EZRZ 2TB', NULL, 1890),
(154, 5, NULL, 'WD', NULL, NULL, NULL, '4TB', 'WD 40EZRZ 4TB', NULL, 3490),
(155, 5, NULL, 'WD', NULL, NULL, NULL, '6TB', 'WD 60EZRZ 6TB', NULL, 5890),
(156, 6, 'NVIDIA', 'ASUS', NULL, 'GT1060', NULL, NULL, 'ASUS PH-GTX1060-3G', '顯示晶片 ：NVIDIA GeForce GTX 1060<br> \r\n記憶體 ：3GB GDDR5<br>\r\nCUDA數 ：1152<br>\r\n核心時脈 ：1506 MHz<br> \r\n記憶體時脈：8008 MHz<br>\r\n記憶體介面：192-bit<br>\r\n最高解析度：7680x4320<br>\r\n輸出端子 ：2x DP / 2x HDMI / DVI<br> \r\n電源連結器：1x 6-pin', 6890),
(157, 6, 'NVIDIA', 'ASUS', NULL, 'GT1060', NULL, NULL, 'ASUS DUAL-GTX1060-O6G', '顯示晶片 ：NVIDIA GeForce GTX 1060<br> \r\n記憶體 ：6GB GDDR5<br>\r\nCUDA數 ：1280<br> \r\n核心時脈 ：1569 MHz<br> \r\n記憶體時脈：8008 MHz<br> \r\n記憶體介面：192-bit<br> \r\n最高解析度：7680x4320<br> \r\n輸出端子 ：2x DP / 2x HDMI / DVI<br>\r\n電源連結器：1x 6-pin ', 9890),
(158, 6, 'NVIDIA', 'ASUS', NULL, 'GT1060', NULL, NULL, 'ASUS STRIX-GTX1060-DC2O6G', '顯示晶片 ：NVIDIA GeForce GTX 1060<br> \r\n記憶體 ：6GB GDDR5<br> \r\nCUDA數 ：1280<br> \r\n核心時脈 ：1595 MHz<br> \r\n記憶體時脈：8008 MHz<br> \r\n記憶體介面：192-bit<br> \r\n最高解析度：7680x4320<br> \r\n輸出端子 ：2x DP / 2x HDMI / DVI<br> \r\n電源連結器：1x 6-pin ', 10890),
(159, 6, 'NVIDIA', 'MSI', NULL, 'GT1060', NULL, NULL, 'MSI GTX1060 AERO 3G OC', '顯示晶片：NVIDIA GeForce GTX 1060<br> \r\n記憶體：3GB GDDR5<br>  \r\n記憶體時脈：8008 MHz<br>  \r\n記憶體介面：192-bit<br>  \r\n介面規格：PCI-E 3.0<br>  \r\n輸出端子：DP*2 / HDMI 2.0*2 / DVI-D<br>  \r\n電源連結器：6-pinx1 ', 6890),
(160, 6, 'NVIDIA', 'MSI', NULL, 'GT1060', NULL, NULL, 'MSI GTX1060 ARMOR 6G OCV1', '顯示晶片 ：NVIDIA GeForce GTX 1060<br> \r\n記憶體 ：6GB GDDR5<br>  \r\n核心時脈 ：1544 MHz<br>  \r\n記憶體時脈：8008 MHz<br>  \r\n記憶體介面：192-bit<br>  \r\n最高解析度：7680x4320<br>  \r\n輸出端子 ：2x DP / 2x HDMI / DVI<br>  \r\n電源連結器：1x 8-pin', 9890),
(161, 6, 'NVIDIA', 'MSI', NULL, 'GT1060', NULL, NULL, 'MSI GTX1060 GAMING VR X 6G', '顯示晶片 ：NVIDIA GeForce GTX 1060<br> \r\n記憶體 ：6GB GDDR5<br>  \r\nCUDA數 ：1280<br>  \r\n核心時脈 ：1506 MHz<br>  \r\n記憶體時脈：8008 MHz<br>  \r\n記憶體介面：192-bit<br>  \r\n輸出端子 ：2x DP /2x HDMI / DVI ', 10890),
(162, 6, 'NVIDIA', 'GIGABYTE', NULL, 'GT1060', NULL, NULL, 'GIGABYTE GTX1060 WINDFORCE OC 3G', '顯示晶片 ：NVIDIA GeForce GTX 1060<br>\r\n記憶體 ：3GB GDDR5<br> \r\n核心時脈 ：1582 MHz<br> \r\n記憶體時脈：8008 MHz<br> \r\n記憶體介面：192-bit<br> \r\n最高解析度：7680x4320<br> \r\n輸出端子 ：DP / HDMI / 2xDVI<br> \r\n電源連結器：1x 6-pin ', 7290),
(163, 6, 'NVIDIA', 'GIGABYTE', NULL, 'GT1060', NULL, NULL, 'GIGABYTE GTX1060 WINDFORCE OC 6G', '顯示晶片 ：NVIDIA GeForce GTX 1060<br> \r\n記憶體 ：6GB GDDR5<br> \r\n核心時脈 ：1544 MHz<br> \r\n記憶體時脈：8008 MHz<br> \r\n記憶體介面：192-bit<br> \r\n最高解析度：7680x4320<br> \r\n輸出端子 ：2x DP / HDMI / DVI', 9790),
(164, 6, 'NVIDIA', 'GIGABYTE', NULL, 'GT1060', NULL, NULL, 'GIGABYTE AORUS GTX1060 6G R2.0', NULL, 10990),
(165, 6, 'NVIDIA', 'ASUS', NULL, 'GT1070', NULL, NULL, 'ASUS TURBO-GTX1070-8G', NULL, 14990),
(166, 6, 'NVIDIA', 'ASUS', NULL, 'GT1070', NULL, NULL, 'ASUS DUAL-GTX1070-O8G', NULL, 14890),
(167, 6, 'NVIDIA', 'ASUS', NULL, 'GT1070', NULL, NULL, 'ASUS ROG STRIX-GTX1070-O8G-GAMING', NULL, 15890),
(168, 6, 'NVIDIA', 'MSI', NULL, 'GT1070', NULL, NULL, 'MSI GTX1070 ARMOR 8G OC', NULL, 14500),
(169, 6, 'NVIDIA', 'MSI', NULL, 'GT1070', NULL, NULL, 'MSI GTX1070 GAMING X 8G', NULL, 14990),
(170, 6, 'NVIDIA', 'GIGABYTE', NULL, 'GT1070', NULL, NULL, 'GIGABYTE GTX1070 WINDFORCE OC 8G', NULL, 14500),
(171, 6, 'NVIDIA', 'GIGABYTE', NULL, 'GT1070', NULL, NULL, 'GIGABYTE GTX1070 G1 Gaming 8G', NULL, 15290),
(172, 6, 'NVIDIA', 'ASUS', NULL, 'GT1070Ti', NULL, NULL, 'ASUS TURBO-GTX1070TI-8G', NULL, 16790),
(173, 6, 'NVIDIA', 'ASUS', NULL, 'GT1070Ti', NULL, NULL, 'ASUS CERBERUS-GTX1070TI-A8G', NULL, 16890),
(174, 6, 'NVIDIA', 'ASUS', NULL, 'GT1070Ti', NULL, NULL, 'ASUS ROG STRIX-GTX1070TI-A8G-GAMING', NULL, 16990),
(175, 6, 'NVIDIA', 'MSI', NULL, 'GT1070Ti', NULL, NULL, 'MSI GTX1070Ti ARMOR 8G', NULL, 16300),
(176, 6, 'NVIDIA', 'MSI', NULL, 'GT1070Ti', NULL, NULL, 'MSI GTX1070Ti GAMING 8G', NULL, 16800),
(177, 6, 'NVIDIA', 'GIGABYTE', NULL, 'GT1070Ti', NULL, NULL, 'GIGABYTE GTX1070Ti WINDFORCE 8G', NULL, 16050),
(178, 6, 'NVIDIA', 'GIGABYTE', NULL, 'GT1070Ti', NULL, NULL, 'GIGABYTE GTX1070Ti GAMING 8G', NULL, 16590),
(179, 6, 'NVIDIA', 'ASUS', NULL, 'GT1080', NULL, NULL, 'ASUS TURBO-GTX1080-8G', NULL, 20990),
(180, 6, 'NVIDIA', 'MSI', NULL, 'GT1080', NULL, NULL, 'MSI GTX1080 GAMING 8G', NULL, 18900),
(181, 6, 'NVIDIA', 'GIGABYTE', NULL, 'GT1080', NULL, NULL, 'GIGABYTE GTX1080 G1 Gaming 8G', NULL, 19990),
(182, 6, 'AMD', 'ASUS', NULL, 'RX560', NULL, NULL, 'ASUS ROG STRIX-RX560-O4G-GAMING', NULL, 5490),
(183, 6, 'AMD', 'MSI', NULL, 'RX560', NULL, NULL, 'MSI RX560 AERO 4G OC', NULL, 4990),
(184, 6, 'AMD', 'GIGABYTE', NULL, 'RX560', NULL, NULL, 'GIGABYTE RX560 GAMING OC-4GD R2.0', NULL, 5190),
(185, 6, 'AMD', 'ASUS', NULL, 'RX570', NULL, NULL, 'ASUS EX-RX570-O4G', NULL, 8490),
(186, 6, 'AMD', 'ASUS', NULL, 'RX570', NULL, NULL, 'ASUS ROG STRIX-RX570-O4G-GAMING', NULL, 8990),
(187, 6, 'AMD', 'MSI', NULL, 'RX570', NULL, NULL, 'MSI RX570 ARMOR 8G OC', NULL, 9990),
(188, 6, 'AMD', 'MSI', NULL, 'RX570', NULL, NULL, 'MSI RX570 ARMOR MK2 8G OC', NULL, 11990),
(189, 6, 'AMD', 'GIGABYTE', NULL, 'RX570', NULL, NULL, 'GIGABYTE RX570 Gaming 4G', NULL, 8490),
(190, 6, 'AMD', 'GIGABYTE', NULL, 'RX570', NULL, NULL, 'GIGABYTE RX570 AORUS-4GD', NULL, 8790),
(191, 6, 'AMD', 'ASUS', NULL, 'RX580', NULL, NULL, 'ASUS DUAL-RX580-O8G', NULL, 10990),
(192, 6, 'AMD', 'ASUS', NULL, 'RX580', NULL, NULL, 'ASUS ROG-STRIX-RX580-T8G-GAMING', NULL, 14690),
(193, 6, 'AMD', 'MSI', NULL, 'RX580', NULL, NULL, 'MSI RX580 ARMOR 8G OC', NULL, 11500),
(194, 6, 'AMD', 'MSI', NULL, 'RX580', NULL, NULL, 'MSI RX580 ARMOR MK2 8G OC', NULL, 13500),
(195, 6, 'AMD', 'GIGABYTE', NULL, 'RX580', NULL, NULL, 'GIGABYTE RX580 GAMING-8GD', NULL, 11590),
(196, 6, 'AMD', 'GIGABYTE', NULL, 'RX580', NULL, NULL, 'GIGABYTE AORUS-RX580-8GD', NULL, 11990),
(197, 7, NULL, 'Seasonic', NULL, NULL, NULL, NULL, 'Seasonic Focus SSR-450FM 450W', NULL, 1490),
(198, 7, NULL, 'Seasonic', NULL, NULL, NULL, NULL, 'Seasonic Focus SSR-550FM 550W', NULL, 1690),
(199, 7, NULL, 'Seasonic', NULL, NULL, NULL, NULL, 'Seasonic Focus SSR-650FM 650W', NULL, 1990),
(200, 7, NULL, 'Seasonic', NULL, NULL, NULL, NULL, 'Seasonic Focus SSR-750FM 750W', NULL, 3990),
(201, 8, NULL, NULL, NULL, NULL, NULL, NULL, 'CoolerMaster MasterBox MB500', NULL, 2490),
(202, 8, NULL, NULL, NULL, NULL, NULL, NULL, 'CoolerMaster MasterBox Pro 5', NULL, 2990),
(203, 8, NULL, NULL, NULL, NULL, NULL, NULL, 'Apexgaming Z2', NULL, 2230),
(204, 8, NULL, NULL, NULL, NULL, NULL, NULL, 'BitFenix Enso TG', NULL, 2190),
(205, 8, NULL, NULL, NULL, NULL, NULL, NULL, 'AeroCool DS 230', NULL, 2300),
(206, 8, NULL, NULL, NULL, NULL, NULL, NULL, 'AIGO T400', NULL, 1090),
(207, 8, NULL, NULL, NULL, NULL, NULL, NULL, '視博通 噬魂者', NULL, 990),
(208, 8, NULL, NULL, NULL, NULL, NULL, NULL, '視博通 捍衛戰士', NULL, 1890),
(209, 8, NULL, NULL, NULL, NULL, NULL, NULL, 'SAMA 影子戰士', NULL, 1390),
(210, 8, NULL, NULL, NULL, NULL, NULL, NULL, '賽德斯 荷魯斯', NULL, 990);

-- --------------------------------------------------------

--
-- 資料表結構 `product_color`
--

CREATE TABLE `product_color` (
  `sid` int(11) NOT NULL,
  `product_sid` int(11) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `product_color`
--

INSERT INTO `product_color` (`sid`, `product_sid`, `color`) VALUES
(1, 2, '紅色'),
(2, 2, '藍色');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `sid` (`sid`);

--
-- 資料表索引 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- 資料表索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `order_sid` (`order_sid`),
  ADD KEY `product_sid` (`product_sid`);

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `product_book`
--
ALTER TABLE `product_book`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `product_sid` (`product_sid`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- 使用資料表 AUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表 AUTO_INCREMENT `order_details`
--
ALTER TABLE `order_details`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用資料表 AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- 使用資料表 AUTO_INCREMENT `product_book`
--
ALTER TABLE `product_book`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- 使用資料表 AUTO_INCREMENT `product_color`
--
ALTER TABLE `product_color`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
