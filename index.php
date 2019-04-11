<?php
  include ("Backend/Library/General_Function.php");
  $general = new General;
  $general->startSes();
  $general->isnotLogined();
?>
<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8" />
        <title>Hoşgeldiniz</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

      <?php include "_menu.php"; ?>
      <div class="container-fluid">
        <div class="wrapper">
          <?php include "_left_bar.php";?>
          <div class="content-page">
            <div class="content">

              <div class="row">

                  <!-- XSS -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">Cross Site Scripting</h3>
                        <p class="text-muted mb-2">
                          Zafiyet uygulama tarafından kullanıcı girdisine izin verilmesi sonucu ortaya çıkmaktadır.
                          Bu nedenle genel olarak bir çok uygulama üzerinde görülmektedir. Kötüye kullanımı sonucunda
                          zararlı javascript kodları entegre edilerek, son kullanıcı açısından bir saldırı mekanizmasına
                          dönüştürülebilir. Son kullanıcı açısından fark edilmesi zor, sinsi bir zafiyet türüdür.
                        </p>
                        <p class="text-muted mb-4">
                            Zafiyeti sömürme aşamasında ise zararlı javascript kodu son kullanıcı tarafından maruz
                            kalınması sağlanır. Bu sayede en çok bilinen etkileri arasında kullanıcı yetkileri dahilinde
                            işlem yapılmasına ve kullanıcı oturumunun ele geçirilmesi ile sonuçlanabilir. Bu tarz durumların
                            önüne geçmek adına, geliştiriciler kullanıcıdan aldığı girdileri kontrol altına almalıdır.
                        </p>
                        <h5>Faydalı Linkler</h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/Cross-site_Scripting">OWASP</a></li>
                          <li><a href="https://www.netsparker.com/blog/web-security/cross-site-scripting-xss/">Netsparker</a></li>
                          <li><a href="https://www.veracode.com/security/xss">Veracode</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- SQL Injection -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">SQL Injection</h3>
                        <p class="text-muted mb-2">
                          SQL Injection saldırganların veri çalma/değiştirmede kullandıkları web saldırı metodlarından biridir.
                          Belkide günümüzde en çok kullanılan uygulama seviyesi tekniklerden biridir. Web uygulamasındaki
                          güvensiz kodlamalardan yararlanarak login formu gibi kullanıcı girişlerinin SQL sorgusunda kullanıldığı
                          yerlerde SQL komutları eklenmesi ile veritabanına yetkisiz erişim sağlar.
                        </p>
                        <p class="text-muted mb-4">
                          İnternet sitelerinin bir çocuğunda, sayfayı dinamik tutmak için veritabanından yararlanılır.
                          Güncel veritabanı yazılımlarında birçoğunda (MySQL, MSSQL,  Sqlite, Oracle SQL) SQL (Structured Query Language)
                          denilen ortak bir dil kullanılır.SQL Injection, SQL sorgusunun amacına müdahale ederek farklı bilgileri elde etmeye denir.
                        </p>
                        <h5>Faydalı Linkler</h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/SQL_Injection">OWASP</a></li>
                          <li><a href="https://www.netsparker.com/blog/web-security/sql-injection-cheat-sheet/">Netsparker</a></li>
                          <li><a href="https://www.veracode.com/security/sql-injection">Veracode</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- HTML Injection -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">HTML Injection</h3>
                        <p class="text-muted mb-2">
                          Web geliştiricileri, bir web tasarımı yaparken güvenlik tarafını bazen unutuyorlar, bazen
                          ise pek önemsemiyorlar. Elbette hepsi için geçerli değil ancak büyük çoğunluğu bu şekilde olabiliyor.
                          HTML kodlarını yazarken bazı mantık hataları ve bazı güvenlik önlemlerinin alınmaması yüzünden kötü niyetli insanlar
                          HTML kodlarına müdahale edip kendi hazırladıkları kodları, geliştiricinin hazırladığı kodların arasına sıkıştırabilmektedir.
                        </p>
                        <p class="text-muted mb-4">
                            Sıkıştırılan kodlar ile web sayfasının bütün içeriğini değiştirebilir ve örnek olarak kötü niyetli
                            bir kişi kendi hazırladığı kodu HTML açığı olan web sitesinin içine gömüp o kod sayesinde saldırgan
                            kişinin kendi hazırladığı kötü niyetli web sitesine yönlendirme yapabilir.
                        </p>
                        <h5>Faydalı Linkler</h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/Testing_for_HTML_Injection">OWASP</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- File Upload -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">File Upload</h3>
                        <p class="text-muted mb-2">
                          File upload web uygulaması üzerinden sunucuya zararlı yazılım yükleyerek gerçekleştirilen saldırılara verilen isimdir.
                          Saldırgan yanlış yapılandırılmış web sitesi üzerine hazırladığı betiği yükleyerek uzak sunucuyu ele geçirebilir.File upload zafiyeti basit bir zafiyettir.
                          Açığın doğurabileceği sonuçları ve istismarının kolaylığını göz önünde bulundurunca hiç de hafife alınacak bir açık olmadığı ortaya çıkacaktır.
                        </p>
                        <p class="text-muted mb-4">
                          Web uygulamasının kuytu bir köşesinde gözden
                          kaçmış bir SQL injection açığı, saldırganlar tarafından keşfedilmeyebilir. Öte yandan keşfedilen SQL injection açığı
                          istismar edilemiyor olabilir. Fakat bir file upload açığı herhangi biri tarafından rahatlıkla istismar edilebilir
                          ve doğuracağı sonuçlar bir SQL injection açığı ile hemen hemen aynı büyüklüklükte olacaktır.
                        </p>
                        <h5>Faydalı Linkler</h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/Unrestricted_File_Upload">OWASP</a></li>
                          <li><a href=">https://www.netsparker.com/web-vulnerability-scanner/vulnerabilities/unrestricted-file-upload/"</a>Netsparker</li>
                          <li><a href="https://infosecaddicts.com/exploit-file-upload-vulnerability/">Diğer</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- File include -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">File Include</h3>
                        <p class="text-muted mb-2">
                          File Include yani Dosya dahil etme saldırısı , hedef web sitesinde bulunan bir dosyanın bize sunmaksızın
                          görüntülenebilmesine denir.File Include kendi içersinde 2 dala ayrılır.Bunlar Local File
                          Include(LFI) ve Remote File Include(RFI) olarak adlandırılmaktadır.
                        </p>
                        <p class="text-muted mb-4">
                          Local File Include saldırısı hedef sistemin sunucusunda bulunan ve ziyaretçilere sunulmamış dosyalara hedef site üzerinden erişebilmemize denir.
                          Remote File Include saldırısı ise hedef siteye saldırganın kendi dosyasını (örneğin shell dosyasını)
                          görüntületmesine denir.
                        </p>
                        <h5>Faydalı Linkler</h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/Testing_for_Local_File_Inclusion">OWASP</a></li>
                          <li><a href="https://null-byte.wonderhowto.com/how-to/exploit-php-file-inclusion-web-apps-0179955/">Null-Byte</a></li>
                          <li><a href="https://www.sunnyhoi.com/how-to-hack-a-website-using-local-file-inclusion-lfi/">Diğer</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Command Injection -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">Command Injection</h3>
                        <p class="text-muted mb-2">
                          Web uygulama betikleri doğrudan işletim sistemi komutları çalıştırmayı destekleyen fonksiyonlara
                          sahiptirler. Örneğin PHP’nin “exec”i, ASP’nin “wscript.shell”i gibi. Bu türden açıklıklara genellikle
                          koruma duvarı, yazıcılar, yönlendiriciler ve diğer kurumsal sunuculara yönetsel arayüz sağlayan web
                          uygulamalarında rastlanır.
                        </p>
                        <p class="text-muted mb-4">
                          Uygulamaların sağladığı işletim sistemi komut satırı komutlarını kullanma fonksiyonu “|” (pipe)
                          yönlendirme karakteri ve arka arkaya komut çalıştırmayı destekleyen “&”, “;”, yeni satır
                          (new line = %0a) gibi kabuk (shell) metakarakterleri enjekte edilip kendi istediğimiz komutları
                          girdi alanlarına girerek kötü amaçla kullanılabilir.
                        </p>
                        <h5>Faydalı Linkler</h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/Command_Injection">OWASP</a></li>
                          <li><a href="https://www.netsparker.com/blog/web-security/command-injection-vulnerability/">Null-Byte</a></li>
                          <li><a href="https://portswigger.net/web-security/os-command-injection">Portswigger</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Code Injection -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">Code Injection</h3>
                        <p class="text-muted mb-2">Kod injection zafiyeti mantık olarak sql injection zafiyeti ile aynıdır.
                          Sql injectionda nasıl istediğimiz mysql sorgularını çalıştırabiliyorsak bu zafiyette de istediğimiz
                          kod parçacıklarını çalıştırabiliyoruz. Bu kodlar programlama diline göre değişecektir. Ama burada kullanılan
                          dil php olduğu için php kodları yazacağız. Bu zafiyet kullanıcıdan alınan değerin hiç bir kontrolden
                          geçirilmemesinden kaynaklanır. Bu açıktan faydalanabilmek için ilk yapmamız gereken ekrana bir hata bastırmaktır.
                        </p>
                        <h5>Faydalı Linkler</h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/Code_Injection">OWASP</a></li>
                          <li><a href="https://www.acunetix.com/blog/articles/code-injection/">Acunetix</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- CSRF  -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">Cross Side Request Forgery</h3>
                        <p class="text-muted mb-2">
                          Türkçe açılımı “Siteler Arası İstek Sahtekârlığı” şeklinde olan CSRF zafiyeti; web uygulamasını kullanmakta olan
                          kullanıcıların istekleri dışında işlemler yürütülmesidir. Uygulamaya giden isteklerin hangi kaynaktan ve nasıl
                          gönderildiği kontrol edilmeyen sistemlerde ortaya çıkan bu zafiyet, aslında uygulamayı kodlayan yazılımcıların
                          gözünden kaçan bir ayrıntıdır diyebiliriz. Genelde CSRF veya XSRF şeklinde kısaltılan bu güvenlik açığı “Session Riding”
                          olarak da bilinmektedir.
                        </p>
                        <p class="text-muted mb-4">
                          Bu güvenlik açığı ile verilebilecek zararlar uygulamayı kullanmakta olan kullanıcının yetkilerine bağlıdır.
                          Yani bir sistem yöneticisinin hesabı ile standart kullanıcının hesapları üzerinden uygulanacak bir CSRF
                          açığının vereceği zararın boyutları farklıdır. Bunu bir örnek ile açıklamak gerekirse, bilgisayar
                          kullanmakta olan birisinin yanına oturup bilgisayarını beraber kullandığınızı düşünün. Kurban olarak
                          seçtiğiniz kişi sizin yanına oturduğunuzu ve bilgisayarı beraber kullandığınızı fark etmez. Bu durumda,
                          kullanıcı uygulamayı kullanmaya devam ettiği sürece onun istekleri dışında kendi isteklerinizi sisteme
                          gönderebilirsiniz.
                        </p>
                        <h5>Faydalı Linkler</h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/Cross-Site_Request_Forgery">OWASP</a></li>
                          <li><a href="https://null-byte.wonderhowto.com/how-to/manipulate-user-credentials-with-csrf-attack-0186461/">Null-Byte</a></li>
                          <li><a href="https://www.veracode.com/security/csrf">Veracode</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- SSRF  -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">Side Side Request Forgery</h3>
                        <p class="text-muted mb-2">
                          Server Site Request Forgery, Sunucu Taraflı İstek Sahteciliği olarak türkçeye çevrilebilenceğimiz bir
                          açıklıktır.Sunucu Taraflı İstek Sahteciliği veya SSRF, bir saldırganın bir sunucuyu kendisi adına istekte bulunmaya
                          zorlayan bir güvenlik açığıdır.Biraz daha açacak olursak bir saldırganın güvenlik açığından etkilenen sunucuya gelen
                          istekleri oluşturmak veya denetlemek için web uygulamasında kullanılan bir parametreyi değiştirmesine olanak verir.
                        </p>
                        <p class="text-muted mb-4">
                          uygulamasında kullanılan bir parametreyi değiştirmesine olanak verir.Bir web uygulamasındaki bilgiler,
                          başka bir web sitesinden gelen harici bir kaynaktan alınmak zorundaysa, sunucu tarafı istekleri kaynağı
                          alıp web uygulamasına dahil etmek için kullanılır. Bu şekilde sunucuda kendi isteklerimizi çalıştırabildiğimizde
                          açıklıktan etkinlenen sunucu ve sunucunun bulunduğu networkde büyük risk oluşturabilmektedir
                        </p>
                        <h5>Faydalı Linkler</h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/Server_Side_Request_Forgery">OWASP</a></li>
                          <li><a href="https://www.hackerone.com/blog-How-To-Server-Side-Request-Forgery-SSRF">Hackerone</a></li>
                          <li><a href="https://canyoupwn.me/tr-ssrf-server-side-request-forgery-zafiyeti/">Canyoupwn</a></li>

                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Directory Travelsal -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">Directory Travelsal</h3>
                        <p class="text-muted mb-2">
                          Dizin aşım açıklıkları kullanıcı girdisinin web sunucusu veya başka bir sistem üzerindeki dosyalara
                          okuma veya yazma amacıyla güvensiz biçimde kullanılması sonucu ortaya çıkar. Ancak bu açıklıklar uzun
                          zamandır bilindiği için uygulama geliştiriciler saldırı amacıyla kullanılabilecek girdileri büyük ihtimalle
                          filtrelerler. Yine de yetersiz biçimde tasarlanan filtreleri aşmak mümkün olabilmektedir.
                        </p>
                        <h5>Faydalı Linkler</h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/Path_Traversal">OWASP</a></li>
                          <li><a href="https://www.acunetix.com/websitesecurity/directory-traversal/">Acunetix</a></li>
                          <li><a href="https://null-byte.wonderhowto.com/how-to/perform-directory-traversal-extract-sensitive-information-0185558/">Null-Byte</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- IDOR -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">Insecure Directory Object Request</h3>
                        <p class="text-muted mb-2">With supporting text below as a natural lead-in to additional contenposuere erat a ante. Voluptates, illo, iste itaque voluptas
                        corrupti ratione reprehenderit magni similique? Tempore, quos delectus asperiores libero voluptas quod perferendis! Voluptate,quod illo rerum? Lorem ipsum dolor sit amet.
                        </p>
                        <p class="text-muted mb-4">
                            Voluptates, illo, iste itaque voluptas corrupti ratione reprehenderit magni similique? Tempore, quos delectus asperiores
                            libero voluptas quod perferendis! Voluptate, quod illo rerum? Lorem ipsum dolor sit amet. With supporting text below
                            as a natural lead-in to additional contenposuere erat a ante.
                        </p>
                        <h5>Faydalı Linkler</h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/Testing_for_Insecure_Direct_Object_References">OWASP</a></li>
                          <li><a href="https://www.bugcrowd.com/how-to-find-idor-insecure-direct-object-reference-vulnerabilities-for-large-bounty-rewards/">Bugcrowd</a></li>
                          <li><a href="https://www.bugbountynotes.com/training/tutorial?id=2">Bugbountynotes</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- XPATH Injection -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">XPATH Injection</h3>
                        <p class="text-muted mb-2">
                          İlk önce Xpath’in ne anlama geldiğine bir bakalım . Xpath , XML dökümanları üzerinde basit tipte
                          sorgulama yapmamıza izin veren bir dildir. Yapısı gereği kullanıldığı birçok alan vardır . Örnek olarak
                          XQuery ve XSLT gibi. Tam olarak yaptığı iş , XML dökümanı içerisinde lokasyon aramak ve bulmak diyebiliriz.
                        </p>
                        <p class="text-muted mb-4">
                          Web uygulamalarında veriler veritabanı sunucusunda çeşitli şekillerde depolanabiliyorlar. Sunucudaki veri
                          depolama formatı RDMBS(Relational Database Management System), LDAP(Lightweight Directory Access Protocol)
                          veya XML (Extensible Markup Language) gibi formatlarda olabilir. Uygulama , kullanıcının veri giriş alanlarına
                          girdiği verilerden sorgular oluşturur ve sunucuya gönderir. Sorgunun sunucuda çalışması sonucunda dönen veriler
                          kullanıcıya sunulmaktadır .
                        </p>
                        <h5>Faydalı Linkler</h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/XPATH_Injection">OWASP</a></li>
                          <li><a href="https://www.acunetix.com/vulnerabilities/web/xpath-injection-vulnerability/">Acunetix</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- XXE -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">XML External Entity Injection</h3>
                        <p class="text-muted mb-2">
                          XXE yeni olmayan ancak Facebook gibi bir sosyal medya devinin sunucularında bulunmasıyla gündeme
                          gelen bir zafiyettir/özelliktir. Aslında XML’in esnekliğini arttırmak için düşünülen bir özellik
                          olmasına karşın bu esneklik önemli güvenlik risklerini de beraberinde getirmekte, sunucudan rasgele
                          dosya okunmasına ve bazı özel durumlarda sunucuda komut çalıştırılmasına imkan vermektedir.
                        </p>
                        <p class="text-muted mb-4">
                          XXE zafiyeti, sunucu(sunucu tarafında çalışan yazılım) XML verisini parse ederken özel olarak tanımlanmış
                          bir XML varlığının (entity) çağırılması sonucu tetiklenir. Bazı XML kütüphaneleri özel olarak varlık tanımlamaya
                          ve çağırmaya varsayılan olarak izin verirken bazılarında bu özellik kapalı gelir. Saldırının başarılı olabilmesi
                          için hedef sistemde bu özelliğin aktif olması gerekir
                        </p>
                        <h5>Faydalı Linkler</h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/XML_External_Entity">OWASP</a></li>
                          <li><a href="https://www.bgasecurity.com/2014/02/xxe-xml-external-entity-guvenlik/">BGA</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                </div> <!-- row close -->

            </div>
          </div>
        </div>
      </div>
      <?php include "_footer.php"?>

    </body>
</html>
