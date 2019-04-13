<?php
$XSS = [
[
  "Zafiyet uygulama tarafından kullanıcı girdisine izin verilmesi sonucu ortaya çıkmaktadır.
Bu nedenle genel olarak bir çok uygulama üzerinde görülmektedir. Kötüye kullanımı sonucunda
zararlı javascript kodları entegre edilerek, son kullanıcı açısından bir saldırı mekanizmasına
dönüştürülebilir. Son kullanıcı açısından fark edilmesi zor, sinsi bir zafiyet türüdür."
,
  "Zafiyeti sömürme aşamasında ise zararlı javascript kodu son kullanıcı tarafından maruz
kalınması sağlanır. Bu sayede en çok bilinen etkileri arasında kullanıcı yetkileri dahilinde
işlem yapılmasına ve kullanıcı oturumunun ele geçirilmesi ile sonuçlanabilir. Bu tarz durumların
önüne geçmek adına, geliştiriciler kullanıcıdan aldığı girdileri kontrol altına almalıdır."
,
  "Faydalı Linkler"
]
  ,
[
  "Cross-Site Scripting (XSS) attacks are a type of injection, in which malicious scripts are injected
  into otherwise benign and trusted websites. XSS attacks occur when an attacker uses a web application
  to send malicious code, generally in the form of a browser side script, to a different end user.
  Flaws that allow these attacks to succeed are quite widespread and occur anywhere a web application
  uses input from a user within the output it generates without validating or encoding it. "
,
  "An attacker can use XSS to send a malicious script to an unsuspecting user. The end user’s browser has
  no way to know that the script should not be trusted, and will execute the script. Because it thinks
  the script came from a trusted source, the malicious script can access any cookies, session tokens, or
  other sensitive information retained by the browser and used with that site. "
,
  "Useful Links"
]];

//------------------------------------------------------------------------------------------------
$SQLI = [
[
  "SQL Injection saldırganların veri çalma/değiştirmede kullandıkları web saldırı metodlarından biridir.
  Belkide günümüzde en çok kullanılan uygulama seviyesi tekniklerden biridir. Web uygulamasındaki
  güvensiz kodlamalardan yararlanarak login formu gibi kullanıcı girişlerinin SQL sorgusunda kullanıldığı
  yerlerde SQL komutları eklenmesi ile veritabanına yetkisiz erişim sağlar."
,
  "SQL Injection saldırganların veri çalma/değiştirmede kullandıkları web saldırı metodlarından biridir.
  Belkide günümüzde en çok kullanılan uygulama seviyesi tekniklerden biridir. Web uygulamasındaki
  güvensiz kodlamalardan yararlanarak login formu gibi kullanıcı girişlerinin SQL sorgusunda kullanıldığı
  yerlerde SQL komutları eklenmesi ile veritabanına yetkisiz erişim sağlar."
,
  "Faydalı Linkler"
]
  ,
[
  "SQL injection is a code injection technique, used to attack data-driven applications, in which malicious
  SQL statements are inserted into an entry field for execution (e.g. to dump the database contents to the
  attacker).[1] SQL injection must exploit a security vulnerability in an application's software, for example,
  when user input is either incorrectly filtered for string literal escape characters embedded in SQL statements
  or user input is not strongly typed and unexpectedly executed. SQL injection is mostly known as an attack
  vector for websites but can be used to attack any type of SQL database."
,
  "SQL injection attacks allow attackers to spoof identity, tamper with existing data, cause repudiation issues
   such as voiding transactions or changing balances, allow the complete disclosure of all data on the system,
   destroy the data or make it otherwise unavailable, and become administrators of the database server."
,
  "Useful Links"
]];

//------------------------------------------------------------------------------------------------

$HTMLI = [
[
  ""
,
  ""
,
  "Faydalı Linkler"
]
  ,
[
  ""
,
  ""
,
  "Useful Links"
]];

//------------------------------------------------------------------------------------------------

$FU = [
[
  "File upload web uygulaması üzerinden sunucuya zararlı yazılım yükleyerek gerçekleştirilen saldırılara verilen isimdir.
  Saldırgan yanlış yapılandırılmış web sitesi üzerine hazırladığı betiği yükleyerek uzak sunucuyu ele geçirebilir.File upload zafiyeti basit bir zafiyettir.
  Açığın doğurabileceği sonuçları ve istismarının kolaylığını göz önünde bulundurunca hiç de hafife alınacak bir açık olmadığı ortaya çıkacaktır."
,
  "Web uygulamasının kuytu bir köşesinde gözden
  kaçmış bir SQL injection açığı, saldırganlar tarafından keşfedilmeyebilir. Öte yandan keşfedilen SQL injection açığı
  istismar edilemiyor olabilir. Fakat bir file upload açığı herhangi biri tarafından rahatlıkla istismar edilebilir
  ve doğuracağı sonuçlar bir SQL injection açığı ile hemen hemen aynı büyüklüklükte olacaktır."
,
  "Faydalı Linkler"
]
  ,
[
  "Uploaded files represent a significant risk to applications. The first step in many attacks is to get some
  code to the system to be attacked. Then the attack only needs to find a way to get the code executed. Using
  a file upload helps the attacker accomplish the first step.The consequences of unrestricted file upload can
  vary, including complete system takeover, an overloaded file system or database, forwarding attacks to
  back-end systems, client-side attacks, or simple defacement. It depends on what the application does with
  the uploaded file and especially where it is stored. "
,
  ""
,
  "Useful Links"
]];

//------------------------------------------------------------------------------------------------

$FI = [
[
  "File Include yani Dosya dahil etme saldırısı , hedef web sitesinde bulunan bir dosyanın bize sunmaksızın
  görüntülenebilmesine denir.File Include kendi içersinde 2 dala ayrılır.Bunlar Local File
  Include(LFI) ve Remote File Include(RFI) olarak adlandırılmaktadır."
,
  "Local File Include saldırısı hedef sistemin sunucusunda bulunan ve ziyaretçilere sunulmamış dosyalara hedef site üzerinden erişebilmemize denir.
  Remote File Include saldırısı ise hedef siteye saldırganın kendi dosyasını (örneğin shell dosyasını)
  görüntületmesine denir."
,
  "Faydalı Linkler"
]
  ,
[
  "An attacker can use Local File Inclusion (LFI) to trick the web application into exposing or running files
  on the web server. An LFI attack may lead to information disclosure, remote code execution, or even Cross-site
  Scripting (XSS). Typically, LFI occurs when an application uses the path to a file as input. If the application
  treats this input as trusted, a local file may be used in the include statement.Local File Inclusion is very
  similar to Remote File Inclusion (RFI). However, an attacker using LFI may only include local files
  (not remote files like in the case of RFI)."
,
  ""
,
  "Useful Links"
]];

//------------------------------------------------------------------------------------------------

$ComI = [
[
  "Web uygulama betikleri doğrudan işletim sistemi komutları çalıştırmayı destekleyen fonksiyonlara
  sahiptirler. Örneğin PHP’nin “exec”i, ASP’nin “wscript.shell”i gibi. Bu türden açıklıklara genellikle
  koruma duvarı, yazıcılar, yönlendiriciler ve diğer kurumsal sunuculara yönetsel arayüz sağlayan web
  uygulamalarında rastlanır."
,
  "Uygulamaların sağladığı işletim sistemi komut satırı komutlarını kullanma fonksiyonu “|” (pipe)
  yönlendirme karakteri ve arka arkaya komut çalıştırmayı destekleyen “&”, “;”, yeni satır
  (new line = %0a) gibi kabuk (shell) metakarakterleri enjekte edilip kendi istediğimiz komutları
  girdi alanlarına girerek kötü amaçla kullanılabilir."
,
  "Faydalı Linkler"
]
  ,
[
  "Command injection is basically injection of operating system commands to be executed through a web-app.
  The purpose of the command injection attack is to inject and execute commands specified by the attacker
  in the vulnerable application. In situation like this, the application, which executes unwanted system
  commands, is like a pseudo system shell, and the attacker may use it as any authorized system user.
  However, commands are executed with the same privileges and environment as the web application has.
  Command injection attacks are possible due to lack of correct input data validation, which can be
  manipulated by the attacker (forms, cookies, HTTP headers etc.)."
,
  ""
,
  "Useful Links"
]];

//------------------------------------------------------------------------------------------------

$CodeI = [
[
  "Kod injection zafiyeti mantık olarak sql injection zafiyeti ile aynıdır.Sql injectionda nasıl istediğimiz mysql sorgularını çalıştırabiliyorsak bu zafiyette de istediğimiz
  kod parçacıklarını çalıştırabiliyoruz. Bu kodlar programlama diline göre değişecektir. Ama burada kullanılan
  dil php olduğu için php kodları yazacağız. Bu zafiyet kullanıcıdan alınan değerin hiç bir kontrolden
  geçirilmemesinden kaynaklanır. Bu açıktan faydalanabilmek için ilk yapmamız gereken ekrana bir hata bastırmaktır."
,
  ""
,
  "Faydalı Linkler"
]
  ,
[
  "Code injection is the malicious injection or introduction of code into an application. The code introduced
  or injected is capable of compromising database integrity and/or compromising privacy properties, security
  and even data correctness. It can also steal data and/or bypass access and authentication control. Code
  injection attacks can plague applications that depend on user input for execution."

,
  "Code Injection differs from Command Injection. Here an attacker is only limited by the functionality of
  the injected language itself. For example, if an attacker is able to inject PHP code into an application
  and have it executed, he is only limited by what PHP is capable of."
,
  ""
,
  "Useful Links"
]];

//------------------------------------------------------------------------------------------------

$CSRF = [
[
  "Türkçe açılımı “Siteler Arası İstek Sahtekârlığı” şeklinde olan CSRF zafiyeti; web uygulamasını kullanmakta olan
  kullanıcıların istekleri dışında işlemler yürütülmesidir. Uygulamaya giden isteklerin hangi kaynaktan ve nasıl
  gönderildiği kontrol edilmeyen sistemlerde ortaya çıkan bu zafiyet, aslında uygulamayı kodlayan yazılımcıların
  gözünden kaçan bir ayrıntıdır diyebiliriz. Genelde CSRF veya XSRF şeklinde kısaltılan bu güvenlik açığı “Session Riding”
  olarak da bilinmektedir."
,
  "Bu güvenlik açığı ile verilebilecek zararlar uygulamayı kullanmakta olan kullanıcının yetkilerine bağlıdır.
  Yani bir sistem yöneticisinin hesabı ile standart kullanıcının hesapları üzerinden uygulanacak bir CSRF
  açığının vereceği zararın boyutları farklıdır. Bunu bir örnek ile açıklamak gerekirse, bilgisayar
  kullanmakta olan birisinin yanına oturup bilgisayarını beraber kullandığınızı düşünün. Kurban olarak
  seçtiğiniz kişi sizin yanına oturduğunuzu ve bilgisayarı beraber kullandığınızı fark etmez. Bu durumda,
  kullanıcı uygulamayı kullanmaya devam ettiği sürece onun istekleri dışında kendi isteklerinizi sisteme
  gönderebilirsiniz."
,
  "Faydalı Linkler"
]
  ,
[
  "Cross-Site Request Forgery (CSRF) is an attack that forces an end user to execute unwanted actions on a
  web application in which they're currently authenticated. CSRF attacks specifically target state-changing
  requests, not theft of data, since the attacker has no way to see the response to the forged request.
  With a little help of social engineering (such as sending a link via email or chat), an attacker may
  trick the users of a web application into executing actions of the attacker's choosing. If the victim is
  a normal user, a successful CSRF attack can force the user to perform state changing requests like
  transferring funds, changing their email address, and so forth. If the victim is an administrative account,
  CSRF can compromise the entire web application. "

,
  ""
,
  "Useful Links"
]];

//------------------------------------------------------------------------------------------------

$SSRF = [
[
  "Server Site Request Forgery, Sunucu Taraflı İstek Sahteciliği olarak türkçeye çevrilebilenceğimiz bir
  açıklıktır.Sunucu Taraflı İstek Sahteciliği veya SSRF, bir saldırganın bir sunucuyu kendisi adına istekte bulunmaya
  zorlayan bir güvenlik açığıdır.Biraz daha açacak olursak bir saldırganın güvenlik açığından etkilenen sunucuya gelen
  istekleri oluşturmak veya denetlemek için web uygulamasında kullanılan bir parametreyi değiştirmesine olanak verir."
,
  "uygulamasında kullanılan bir parametreyi değiştirmesine olanak verir.Bir web uygulamasındaki bilgiler,
  başka bir web sitesinden gelen harici bir kaynaktan alınmak zorundaysa, sunucu tarafı istekleri kaynağı
  alıp web uygulamasına dahil etmek için kullanılır. Bu şekilde sunucuda kendi isteklerimizi çalıştırabildiğimizde
  açıklıktan etkinlenen sunucu ve sunucunun bulunduğu networkde büyük risk oluşturabilmektedir."
,
  "Faydalı Linkler"
]
  ,
[
  "In a Server-Side Request Forgery (SSRF) attack, the attacker can abuse functionality on the server to read
  or update internal resources. The attacker can supply or a modify a URL which the code running on the server
  will read or submit data to, and by carefully selecting the URLs, the attacker may be able to read server
  configuration such as AWS metadata, connect to internal services like http enabled databases or perform post
  requests towards internal services which are not intended to be exposed."
,
  ""
,
  "Useful Links"
]];

//------------------------------------------------------------------------------------------------

$SSTI = [
[
  "Tema/Şablon motorları (Template Engine) web uygulamalarında dinamik verileri sunmak için kullanılan yaygın
  yöntemlerden biridir. Şablonlara beklenenin dışında, geliştiricinin istemediği şekilde girdi eklemek, XSS
  çalıştırmak son derece kolaydır ve kritik bir güvenlik zafiyeti olan Template Injection zafiyetini sömürülebilir
  ve sunucu tarafına doğrudan saldırı için kullanılabilir, uzaktan kod çalıştırma (RCE) elde edilebilir.
  Bu zafiyet hem geliştirici hatası hem de içerik yönetim sistemleri (CMS) tarafından işlevsellik sunmak
  için template engine kullanılmasından kaynaklanmaktadır."
,
  ""
,
  "Faydalı Linkler"
]
  ,
[
  "Template engines are widely used by web applications to present dynamic data via web pages and emails.
  Unsafely embedding user input in templates enables Server-Side Template Injection, a frequently critical
  vulnerability that is extremely easy to mistake for Cross-Site Scripting (XSS), or miss entirely. Unlike
  XSS, Template Injection can be used to directly attack web servers' internals and often obtain Remote Code
  Execution (RCE), turning every vulnerable application into a potential pivot point."
,
  "Template Injection can arise both through developer error, and through the intentional exposure of templates
   in an attempt to offer rich functionality, as commonly done by wikis, blogs, marketing applications and
   content management systems. Intentional template injection is such a common use-case that many template
   engines offer a 'sandboxed' mode for this express purpose."
,
  "Useful Links"
]];

//------------------------------------------------------------------------------------------------

$DirecTra = [
[
  "Dizin aşım açıklıkları kullanıcı girdisinin web sunucusu veya başka bir sistem üzerindeki dosyalara
  okuma veya yazma amacıyla güvensiz biçimde kullanılması sonucu ortaya çıkar. Ancak bu açıklıklar uzun
  zamandır bilindiği için uygulama geliştiriciler saldırı amacıyla kullanılabilecek girdileri büyük ihtimalle
  filtrelerler. Yine de yetersiz biçimde tasarlanan filtreleri aşmak mümkün olabilmektedir."
,
  ""
,
  "Faydalı Linkler"
]
  ,
[
  "A path traversal attack (also known as directory traversal) aims to access files and directories that are
  stored outside the web root folder. By manipulating variables that reference files with “dot-dot-slash (../)”
  sequences and its variations or by using absolute file paths, it may be possible to access arbitrary files
  and directories stored on file system including application source code or configuration and critical system
  files. It should be noted that access to files is limited by system operational access control (such as in
  the case of locked or in-use files on the Microsoft Windows operating system).This attack is also known as
  “dot-dot-slash”, “directory traversal”, “directory climbing” and “backtracking”. "
,
  ""
,
  "Useful Links"
]];

//------------------------------------------------------------------------------------------------

$IDOR = [
[
  "Bir uygulama kullanıcısı tarafından sağlanan girişi temel alan nesnelere doğrudan erişim sağladığında gerçekleşir.
  Bu güvenlik açığı sonucunda saldırganlar, örneğin veritabanı kayıtları veya dosyaları gibi sistemdeki yetkilendirme ve
  erişim kaynaklarını doğrudan atlayabilir."
,
  "Güvensiz Doğrudan Nesne Referansları, saldırganların doğrudan bir nesneye işaret etmek için kullanılan bir
  parametrenin değerini değiştirerek doğrudan izinleri atlamasına ve kaynaklara erişmesine izin verir. Bu tür
  kaynaklar diğer kullanıcılara ait veritabanı girişleri, sistemdeki dosyalar ve daha fazlası olabilir. Bunun
  nedeni uygulamanın kullanıcı tarafından sağlanan girişi alması ve yeterli yetki kontrolü yapmadan bir nesneyi
  almak için kullanmasıdır."
,
  "Faydalı Linkler"
]
  ,
[
  "IDOR was considered to be the 4th most dangerous vulnerability by OWASP Top Ten in 2013. But in the 2017
  release of OWASP Top Ten of critical vulnerabilities IDOR got merged with the Missing Function Level Access
  Control to be at the 5th position which is Broken Access Control. Now don’t start thinking it’s less critical
  now. Don’t forget, it is still in the OWASP Top 10 and its exploitability impact can be very dangerous because
  the attacker can have various details for which he/she was unauthorized. IDOR is actually an Access Control
  flaw. It is a very common vulnerability in web application and its exploitability is very easy."
,
  "Insecure Direct Object References or IDOR occur when an application takes input from the user and uses it
  to retrieve an internal object such as a file or database key without performing sufficient authorization.
  In these cases, the attacker can then make changes in the references to get access to unauthorized data."
,
  "Useful Links"
]];

//------------------------------------------------------------------------------------------------

$Xpath = [
[
  "İlk önce Xpath’in ne anlama geldiğine bir bakalım . Xpath , XML dökümanları üzerinde basit tipte
  sorgulama yapmamıza izin veren bir dildir. Yapısı gereği kullanıldığı birçok alan vardır . Örnek olarak
  XQuery ve XSLT gibi. Tam olarak yaptığı iş , XML dökümanı içerisinde lokasyon aramak ve bulmak diyebiliriz."
,
  "Web uygulamalarında veriler veritabanı sunucusunda çeşitli şekillerde depolanabiliyorlar. Sunucudaki veri
  depolama formatı RDMBS(Relational Database Management System), LDAP(Lightweight Directory Access Protocol)
  veya XML (Extensible Markup Language) gibi formatlarda olabilir. Uygulama , kullanıcının veri giriş alanlarına
  girdiği verilerden sorgular oluşturur ve sunucuya gönderir. Sorgunun sunucuda çalışması sonucunda dönen veriler
  kullanıcıya sunulmaktadır."
,
  "Faydalı Linkler"
]
  ,
[
  "Similar to SQL Injection, XPath Injection attacks occur when a web site uses user-supplied information to
  construct an XPath query for XML data. By sending intentionally malformed information into the web site,
  an attacker can find out how the XML data is structured, or access data that he may not normally have access to.
  He may even be able to elevate his privileges on the web site if the XML data is being used for authentication
  (such as an XML based user file). "
,
  "Querying XML is done with XPath, a type of simple descriptive statement that allows the XML query to locate
  a piece of information. Like SQL, you can specify certain attributes to find, and patterns to match. When
  using XML for a web site it is common to accept some form of input on the query string to identify the
  content to locate and display on the page. This input must be sanitized to verify that it doesn't mess up
  the XPath query and return the wrong data. "
,
  "Useful Links"
]];

$XEE = [
[
  "XXE yeni olmayan ancak Facebook gibi bir sosyal medya devinin sunucularında bulunmasıyla gündeme
  gelen bir zafiyettir/özelliktir. Aslında XML’in esnekliğini arttırmak için düşünülen bir özellik
  olmasına karşın bu esneklik önemli güvenlik risklerini de beraberinde getirmekte, sunucudan rasgele
  dosya okunmasına ve bazı özel durumlarda sunucuda komut çalıştırılmasına imkan vermektedir."
,
  "XXE zafiyeti, sunucu(sunucu tarafında çalışan yazılım) XML verisini parse ederken özel olarak tanımlanmış
  bir XML varlığının (entity) çağırılması sonucu tetiklenir. Bazı XML kütüphaneleri özel olarak varlık tanımlamaya
  ve çağırmaya varsayılan olarak izin verirken bazılarında bu özellik kapalı gelir. Saldırının başarılı olabilmesi
  için hedef sistemde bu özelliğin aktif olması gerekir."
,
  "Faydalı Linkler"
]
  ,
[
  "XXE (XML External Entity attack) is now increasingly being found and reported in major web applications
  such as Facebook, PayPal, etc. For instance, a quick look at the recent Bug Bounty vulnerabilities on these
  sites confirms this. Although XXE has been around for many years, it never really got as much attention as
  it deserved. Most XML parsers are vulnerable to it by default, which means it is the responsibility of a
  developer to make sure that the application is free from this vulnerability."
,
  ""
,
  "Useful Links"
]];

//------------------------------------------------------------------------------------------------
?>
