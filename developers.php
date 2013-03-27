<?php include 'inc/header.php'; ?>
  <?php $cmenu = 'dev'; include 'inc/topmenu.php'; ?>
  <div id="content">
    <div class="basic-page">
      <p> شما میتوانید به <a href="http://www.chromium.org/developers/how-tos/chrome-frame-getting-started">راهنمای توسعه دندگان کروم فریم</a> بروید و وب سایت خود را برای استفاده از کروم فریم آماده کنید و کد هایی نمونه برای راهنمایی کاربر به سایت دانلود کروم فریم ببینید. در اینجا راهنمای سریع برای استفاده از کروم فریم قرار گرفته است. </p>
      <h4>صفحات وب خود برای کار با کروم فریم آماده کنید!</h4>
      <p> اینکه صفحات وب خود را برای کار با کروم فریم آماده کنید، بسیار ساده است! فقط تگ زیر را به بالای صفحه خود، درون تگ Head اضافه کنید! <br />
       
       <pre style="direction:ltr !important;text-align:left;font-family:monospace;color:rgb(0,112,0);font-size:9pt;background-color:rgb(250,250,250);border:1px solid rgb(187,187,187);line-height:15px;margin:1em 0px 0px;padding:0.99em;overflow:auto;word-wrap:break-word"><span style="color:rgb(0,0,136)"><code>&lt;meta</code></span><span style="color:rgb(0,0,0)"> </span><span style="color:rgb(102,0,102)"><code>http-equiv</code></span><span style="color:rgb(102,102,0)"><code>=</code></span><span style="color:rgb(0,136,0)"><code>"X-UA-Compatible"</code></span><span style="color:rgb(0,0,0)"> </span><span style="color:rgb(102,0,102)"><code>content</code></span><span style="color:rgb(102,102,0)"><code>=</code></span><span style="color:rgb(0,136,0)"><code>"chrome=1"</code></span><span style="color:rgb(0,0,136)"><code>&gt;</code></span></pre>
       
       
       </p>
      <p>همین بود! حالا دیگه کاربرایی که از اینترنت اکسپلورر استفاده میکنند، به طور خودکار با کروم فریم رندر می‌شوند.
        واسه بسیاری از وب سایت‌ها اضافه کردن این تگ به همه صفحات ممکن است کار مشکل و وقت گیری باشه، واسه همین کروم فریم میتونه توسط هدر HTTP هم با هموم اسم و مقدار شناسایی بشه: 
        
        <pre style="direction:ltr !important;text-align:left;font-family:monospace;color:rgb(0,112,0);font-size:9pt;background-color:rgb(250,250,250);border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-color:rgb(187,187,187);border-right-color:rgb(187,187,187);border-bottom-color:rgb(187,187,187);border-left-color:rgb(187,187,187);line-height:15px;margin-top:1em;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0.99em;padding-right:0.99em;padding-bottom:0.99em;padding-left:0.99em;word-wrap:break-word"><span style="color:rgb(0,136,0)"><code>X-UA-Compatible: </code></span><span style="color:rgb(0,136,0)"><code>chrome=1</code></span></pre>
        
        </p>
      <p> برای آماده کردن هدر کلی واسه همه صفحه هایی که توسط آپاچ آماده میشه، پس از اینکه مطمئن شدید که mod_headers و mod_setenvif فعال است، کد های زیر را به httpd.conf اضافه کنید: </p>
      
      <pre style="direction:ltr !important;text-align:left;font-family:monospace;color:rgb(0,112,0);font-size:9pt;background-color:rgb(250,250,250);border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-color:rgb(187,187,187);border-right-color:rgb(187,187,187);border-bottom-color:rgb(187,187,187);border-left-color:rgb(187,187,187);line-height:15px;margin-top:1em;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0.99em;padding-right:0.99em;padding-bottom:0.99em;padding-left:0.99em;word-wrap:break-word"><font color="#008800"><div><span style="font-family:courier new"><span style="color:rgb(0,0,136);font-family:monospace"><code>&lt;IfModule mod_setenvif.c&gt;</code></span></span></div><div><span style="font-family:courier new"><code>&nbsp;&nbsp;</code><span style="color:rgb(0,0,136);font-family:monospace"><code>&lt;IfModule mod_headers.c&gt;</code></span></span></div><div><span style="font-family:courier new"><code>&nbsp;&nbsp;&nbsp;&nbsp;BrowserMatch chromeframe gcf</code></span></div><div><span style="font-family:courier new"><code>&nbsp;&nbsp;&nbsp;&nbsp;Header append X-UA-Compatible "chrome=1" env=gcf</code></span></div><div><span style="font-family:courier new"><code>&nbsp;&nbsp;</code><span style="color:rgb(0,0,136);font-family:monospace"><code>&lt;/IfModule&gt;</code></span></span></div><div><span style="font-family:courier new"><span style="color:rgb(0,0,136);font-family:monospace"><code>&lt;/IfModule&gt;</code></span></span></div></font></pre>
      
      <p></p>
      <p>برای سرور IIS با نسخه ۷ یا بالاتر، شما باید هدر را در web.config به اینصورت آماده کنید: </p>
      
      <pre style="direction:ltr !important;text-align:left;fontfont-family:monospace;color:rgb(0,112,0);font-size:9pt;background-color:rgb(250,250,250);border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-color:rgb(187,187,187);border-right-color:rgb(187,187,187);border-bottom-color:rgb(187,187,187);border-left-color:rgb(187,187,187);line-height:15px;margin-top:1em;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0.99em;padding-right:0.99em;padding-bottom:0.99em;padding-left:0.99em;word-wrap:break-word"><font color="#008800"><div><span style="font-family:courier new"><span style="color:rgb(0,0,136);font-family:monospace"><span style="color:rgb(0,0,0);font-family:Helvetica,Arial,sans-serif;line-height:normal;white-space:normal;font-size:small"><div><span style="border-collapse:collapse"><font color="#274E13"><font face="arial, sans-serif"><code>&lt;configuration&gt;</code><br><code>&nbsp; &lt;system.webServer&gt;</code><br><code>&nbsp; &nbsp; &nbsp;&lt;httpProtocol&gt;</code><br><code>&nbsp; &nbsp; &nbsp; &nbsp; &lt;customHeaders&gt;</code><br><code>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;add name="X-UA-Compatible" value="chrome=1" /&gt;</code><br><code>&nbsp; &nbsp; &nbsp; &nbsp; &lt;/customHeaders&gt;</code><br><code>&nbsp; &nbsp; &nbsp;&lt;/httpProtocol&gt;</code><br><code>&nbsp; &lt;/system.webServer&gt;</code><br><code>&lt;/configuration&gt;</code></font></font></span></div></span></span></span></div></font></pre>
      
      <p> نکته اینجاست که کروم فریم یا توسط تگ متا و یا توسط هدر فعال می‌شود و صفحات را رندر میکند اما اگر کروم فریم نصب نباشد، صفحات به صورت معمولی توسط خود اینترنت اکسپلورر رندر میشوند. </p>
      <h4>فعال کردن کروم فریم تنها در نسخه هایی خاص!</h4>
      <p>بر اساس نیاز سایت شما، شما ممکن است که بخواهید از کروم فریم در برخی از نسخه های اینترنت اکسپلورر فعال کنید، این مقادیر X-UA-Compatible  چه در تگ متا باشند و چه در هدر HTTP برای شما این قدرت کنترل را محیا میکنند: 
      
      <pre style="direction:ltr !important;text-align:left;font-size:9pt;background-color:rgb(250,250,250);border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-color:rgb(187,187,187);border-right-color:rgb(187,187,187);border-bottom-color:rgb(187,187,187);border-left-color:rgb(187,187,187);line-height:15px;margin-top:1em;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0.99em;padding-right:0.99em;padding-bottom:0.99em;padding-left:0.99em;word-wrap:break-word"><font color="#006000" face="monospace"><div><span style="line-height:normal;white-space:normal;font-size:small;border-collapse:collapse"><div><div>chrome=1 &nbsp; - Always active</div><div>chrome=IE7 - Active for IE major version 7 or lower</div><div>chrome=IE8 - Active for IE major version 8 or lower</div></div></span></div></font></pre>
      <p>
       به عنوان مثال، تگ متایی که در ادامه آمده است، کروم فریم را تنها برای کاربران نسخه ششم اینترنت اکسپلورر فعال میکند و در حالتی که اینطور نباشد، مقدار Edge را منتقل می کند: 
        </p>
        <pre style="direction:ltr !important;text-align:left;font-family:monospace;color:rgb(0,112,0);font-size:9pt;background-color:rgb(250,250,250);border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-color:rgb(187,187,187);border-right-color:rgb(187,187,187);border-bottom-color:rgb(187,187,187);border-left-color:rgb(187,187,187);line-height:15px;margin-top:1em;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0.99em;padding-right:0.99em;padding-bottom:0.99em;padding-left:0.99em;word-wrap:break-word"><span style="color:rgb(0,0,136)"><code style="color:rgb(0,96,0)">&lt;meta</code></span><span style="color:rgb(0,0,0)"> </span><span style="color:rgb(102,0,102)"><code style="color:rgb(0,96,0)">http-equiv</code></span><span style="color:rgb(102,102,0)"><code style="color:rgb(0,96,0)">=</code></span><span style="color:rgb(0,136,0)"><code style="color:rgb(0,96,0)">"X-UA-Compatible"</code></span><span style="color:rgb(0,0,0)"> </span><span style="color:rgb(102,0,102)"><code style="color:rgb(0,96,0)">content</code></span><span style="color:rgb(102,102,0)"><code style="color:rgb(0,96,0)">=</code></span><span style="color:rgb(0,136,0)"><code style="color:rgb(0,96,0)">"IE=Edge,chrome=IE6"</code></span><span style="color:rgb(0,0,136)"><code style="color:rgb(0,96,0)">&gt;</code></span></pre>
        
         </p>
      <h4>شناسایی گوگل کروم فریم و تقاضا برای نصب آن</h4>
      <p>شما می‌توانید شناسایی نصب بودن کروم فریم را طرف سرور انجام دهید، اگر کروم فریم نصب بود، تگ متا در هدر قرار بگیرد و در غیر این صورت، شما می‌توانید کاربرانتان را به صفحه ایی که در آن درباره نصب کردن کروم فریم توضیحاتی داده شده است هدایت کنید. به عنوان راهکار دیگر برای شناسایی طرف سرور، شما می‌توانید از اسکریپت CFInstall.js برای شناسایی کروم فریم و تقاضا برای نصب آن بدون ریست مرورگر کاربرتون انجام بدید. استفاده از این اسکریپت ساده است و در ادامه نمونه ایی قرار گرفته است:</p>
      <span style="text-align:left;direction:ltr !important;font-family:Helvetica,Arial,sans-serif;font-size:small">
      <pre style="font-family:monospace;color:rgb(0,112,0);font-size:9pt;background-color:rgb(250,250,250);border:1px solid rgb(187,187,187);line-height:15px;margin:1em 0px 0px;padding:0.99em;overflow:auto;word-wrap:break-word"><font color="#006000">&lt;html&gt;<br>&lt;body&gt;<br>  &lt;script type="text/javascript" <br>   src="http://chromeframe.ir/api/CFInstall.js"&gt;&lt;/script&gt;<br><br>  &lt;style&gt;<br>   /* <br>    CSS rules to use for styling the overlay:<br>      .chromeFrameOverlayContent<br>      .chromeFrameOverlayContent iframe<br>      .chromeFrameOverlayCloseBar<br>      .chromeFrameOverlayUnderlay<br>   */<br>  &lt;/style&gt; <br><br>  &lt;script&gt;
   // You may want to place these lines inside an onload handler<br>   CFInstall.check({<br>     mode: "overlay",<br>     destination: "http://www.waikiki.com"<br>   });<br>  &lt;/script&gt;<br>&lt;/body&gt;<br>&lt;/html&gt;<br></font></pre>
        </span>
        
        <p>
        صفحه‌ای که از این اسکریپت استفاده میکند، باید تگ body را داشته باشد! در مرورگر های دیگه <span dir="ltr"> check() </span> کاری انجام نمیده، توجه کنید استفاده از این اسکریپت به صورت لوکال ممکن است نتیجه درستی ندهد!
شما میتونین اینکه چطور از کاربرتون تقاضا میشه که کروم فریم و نصب کنه رو انتخاب کنید، اما در حالت پیشفرض، <span dir="ltr"> check() </span> یک تگ iframe در بالای صفحه تزریق میکنه. این iframe صفحه دانلود و نصب کروم فریم رو باز میکنه. این iframe روی همه صفحه باز میشه و به کاربر این امکان رو میده که این پیغام رو ببنده و برای بعدها، توسط کوکی دیگه این صفحه نمایش داده نشه.
        </p>
        
        <h4>گزینه های  <span dir="ltr">CFInstall.check() </span> </h4>
        
        <p>
        
گزینه های شخصی سازی <span dir="ltr"> CFInstall.check() </span> بیشتر هستند، شما میتوانید موارد زیر را مشخص کنید:<br />
<b>mode</b>: ( غیر ضروری ) : اینکه چطور باید از کاربر تقاضا شود وقتی که گوگل کروک نصب نیست! مقدار پیشفرض inline که یک iframe در صفحه تزریق میکند که url نصب را باز میکند. اگر  گره خاصی مشخص شود، محل قرار گیری iframe کنترل میشود و در غیر اینصورت به عنوان اولین فرزند تگ body نمایش داده خواهد شد. اگر mode در حالت overlay باشد که این پیشنهاد ماست، یک کادر محاوره ای شناور روی صفحه به کاربر نمایش داده خواهد شد، اگر mode برابر popup باشد، در این صورت آدرس url در یک صفحه popup نمایش داده خواهد شد، پیشنهاد ما این است که زمانی از popup استفاده کنید که <span dir="ltr"> check() </span> توسط یک دکمه که onClick آن با کلیک کاربر فعال می‌شود فراخوانی می‌شود و الا، نرم‌افزار های مسدود کننده پاپ آپ جلوی باز شدن صفحه را میگیرند.
<br /><b>Url</b>:  ( غیر ضروری ) : در حالت پیشفرض، روی http://chromeframe.ir است، این مقدار را برای باز کردن صفحه‌ای متفاوت در تقاضا، تغییر دهید.
<br /><b>Destination</b>:   ( غیر ضروری ) :  آدرس صفحه‌ای که CFInstall پس از نصب، کاربر را باید به آن هدایت کند.
<br /><b>Node</b>:   ( غیر ضروری ) :ID یا یک مرجه به آلمان ( تگ html ) که حاوی iframe خواهد بود. اگر node مشخص نشود، iframe در بالای صفحه خواهد بود.
<br /><b>onmissing</b>:    ( غیر ضروری ) : تابعی که فراخوانی میشود، وقتی که کروم فریم نصب نباشد.
<br /><b>PreventPrompt</b>:  ( غیر ضروری ) : بولین( true یا false )‌، در حالت پیشفرض false است، که به شما اجازه می‌دهد که حالت پیشفرض تقاضای نصب را غیر فعال کنید. از این زمانی استفاده کنید که با onmissing  کنترل شخصی بر طریقه تقاضا برای نصب را ساخته اید!
<br /><b>Oninstall</b>:  ( غیر ضروری ) : تابعی که در زمانی که کرم فریم اولین بار بعد از نصب شناخته می‌شود فراخوانی میشود.
<br /><b>PreventInstallDetection</b>: ( غیر ضروری ) : بولین( true یا false )‌، در حالت پیشفرض false است، این را به حالت true قرار دهید، تا جلوی CFInstall را از چک کردن برای نصب شدن یا نشدن بگیرید!
<br /><b>CssText</b>:  ( غیر ضروری ) : استایل هایی که شما میخواهید تا به iframe در زمانی که mode روی inline است اعمال شود.
<br /><b>ClassName</b>:  ( غیر ضروری ) : کلاس css است که شما میخواهید تا به iframe در زمانی که mode روی inline است اعمال شود.</p><h4>
مثالی از CFInstall</b>:
</h4>

<p>
استفاده از مقدار دادن به node با یک تقاضای inline که iframe را در صفحه قرار میدهد و از css برای استایل دادن به iframe استفاده میکنه،و صفحه رو در زمانی که نصب به پایان رسید، refresh میکنه!        
<pre style="direction:ltr !important;text-align:left;font-family:monospace;color:rgb(0,112,0);font-size:9pt;background-color:rgb(250,250,250);border:1px solid rgb(187,187,187);line-height:15px;margin:1em 0px 0px;padding:0.99em;overflow:auto;word-wrap:break-word"><span style="color:rgb(0,0,136)"><code>&lt;html&gt;<br>&lt;body&gt;
</code></span><span style="color:rgb(0,0,0)"><code>  &lt;!--[if IE]&gt;</code><br></span><span style="color:rgb(0,0,136)"><code>    &lt;script</code></span><span style="color:rgb(0,0,0)"> </span><span style="color:rgb(102,0,102)"><code>type</code></span><span style="color:rgb(102,102,0)"><code>=</code></span><span style="color:rgb(0,136,0)"><code>"text/javascript"</code></span><span style="color:rgb(0,0,0)"> <br></span><span style="color:rgb(102,0,102)"><code>     src</code></span><span style="color:rgb(102,102,0)"><code>=</code></span><span style="color:rgb(0,136,0)"><code>"http://chromeframe.ir/api/CFInstall.js"</code></span><span style="color:rgb(0,0,136)"><code>&gt;</code></span><span style="color:rgb(0,0,136)"><code>&lt;/script&gt;</code></span><span style="color:rgb(0,0,0)"><br><code>
    &lt;style&gt;
     .chromeFrameInstallDefaultStyle {
       width: 100%; /* default is 800px */
       border: 5px solid blue;
     }
    &lt;/style&gt;

    </code></span><font color="#351c75"><code>&lt;div id="prompt"&gt;</code><br></font><font color="#444444"><code>     &lt;!-- if IE without GCF, prompt goes here --&gt;</code><br></font><font color="#351c75"><code>    &lt;/div&gt;</code></font><span style="color:rgb(0,0,0)"><code>
&nbsp;</code><br></span><span style="color:rgb(0,0,136)"><code>    &lt;script&gt;
</code></span><span style="color:rgb(0,0,0)"><code>     // The conditional ensures that this code will only execute in IE,</code>
<code>     // Therefore we can use the IE-specific attachEvent without worry</code>
<code>     window.attachEvent("onload", function() {</code><br><code>  &nbsp;    </code></span><span style="color:rgb(102,0,102)"><code>CFInstall</code></span><span style="color:rgb(102,102,0)"><code>.</code></span><span style="color:rgb(0,0,0)"><code>check</code></span><span style="color:rgb(102,102,0)"><code>({</code><br></span><span style="color:rgb(0,0,0)"><code>         mode: </code><span style="color:rgb(0,136,0)"><code>"inline"</code><span style="color:rgb(0,0,0)"><code>, </code></span><font color="#666666"><code>// the default</code></font><span style="color:rgb(0,0,0)">
</span></span><code>         node: </code><font color="#38761d"><code>"prompt"</code></font><br></span><span style="color:rgb(0,0,0)"><code>&nbsp;      </code></span><span style="color:rgb(102,102,0)"><code>});
</code></span><span style="color:rgb(0,0,0)">     });<br></span><span style="color:rgb(0,0,136)"><code>    &lt;/script&gt;
</code></span><span style="color:rgb(0,0,0)"><code>  &lt;![endif]--&gt;</code><br></span><span style="color:rgb(0,0,136)"><code>&lt;/body&gt;<br>&lt;/html&gt;</code></span></pre>



</p>
        
        
        
    </div>
  </div>
  <?php include 'inc/footer.php'; ?>
