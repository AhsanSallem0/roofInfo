@extends('welcome')
@section('content')


<div id="left_toolbar" class="left_toolbar">
<ul>
	<img src="{{asset('asset/images/nav/dotted_bar.jpg')}}" class="dottedbar">
    <li class="barheader left_toolbar_title" id="toolbar_related_title">
        Shingles
	    <ul id="toolbar_resources">
		<li><a href="/shingles/ratings.html">Shingle Ratings</a></li>
		<li><a href="/shingles/reviews/">Shingle Reviews</a></li>
		<li><a href="/shingles/">How to Buy Shingles</a></li>
		<li><a href="/roofing-contractors/">Roofing Contractors</a></li>
		<li><a href="/choose-roofing-contractor.html">Choosing a Roofer</a></li>
		<li><a href="/shingles/brands/">Shingle Brands</a></li>
		<li><a href="/shingles/warranty.html">Shingle Warranties</a></li>
		<li><a href="/roof-replacement-cost.html">Roof Replacement Cost</a></li>
		<li><a href="/roofing-contractors/roofing-scams.html">Avoid Roofing Scams</a></li>
		<li><b><a rel="nofollow" href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;">Free Shingle Quotes</a></b></li>
		<li><a href="/definitions/">Roofing Definitions</a></li>
	    </ul>
	</li>
    <img src="{{asset('asset/images/nav/dotted_bar.jpg')}}" class="dottedbar">
    <li class="barheader left_toolbar_title" id="toolbar_related_title">
        Shingle Types
	    <ul id="toolbar_related">
		<li><a href="/shingles/aluminum.html">Aluminum</a></li>
		<li><a href="/shingles/architectural.html">Architectural</a></li>
		<li><a href="/shingles/asphalt.html">Asphalt</a></li>
		<li><a href="/shingles/cedar.html">Cedar</a></li>
		<li><a href="/shingles/copper.html">Copper</a></li> 
		<li><a href="/shingles/metal.html">Metal</a></li>
		<li><a href="/shingles/roll-roofing.html">Roll Roofing</a></li>
		<li><a href="/shingles/rubber.html">Rubber</a></li>
		<li><a href="/shingles/slate.html">Slate</a></li>
		<li><a href="/shingles/solar.html">Solar</a></li>
		<li><a href="/shingles/steel.html">Steel</a></li>
		<li><a href="/shingles/tile.html">Tile</a></li>
		<li><a href="/shingles/vinyl.html">Vinyl</a></li>
	    </ul>
	</li>
    <img src="{{asset('asset/images/nav/dotted_bar.jpg')}}" class="dottedbar">
    <li class="left_toolbar_title" id="toolbar_brands_title">
        <a href="/shingles/">Shingle Brands</a>
	    <ul id="toolbar_brands">
		<li><a href="/shingles/brands/arrowline.html">Arrowline</a></li>
		<li><a href="/shingles/brands/atas.html">ATAS</a></li>
		<li><a href="/shingles/brands/atlas.html">Atlas</a></li>
		<li><a href="/shingles/brands/berridge.html">Berridge</a></li>
		<li><a href="/shingles/brands/bp.html">BP</a></li>
		<li><a href="/shingles/brands/certainteed.html">CertainTeed</a></li>
		<li><a href="/shingles/brands/certi-label.html">Certi-Label</a></li>
		<li><a href="/shingles/brands/classic-metal-roofing.html">Classic Metal</a></li>
		<li><a href="/shingles/brands/custom-bilt-metal.html">Custom-Bilt</a></li>
		<li><a href="/shingles/brands/davinci-roofscapes.html">DaVinci Roofscapes</a></li>
		<li><a href="/shingles/brands/decra.html">Decra</a></li>
		<li><a href="/shingles/brands/dura-loc.html">Dura-Loc</a></li>
		<li><a href="/shingles/brands/eagle-roofing.html">Eagle Roofing</a></li>
		<li><a href="/shingles/brands/ecostar.html">EcoStar</a></li>
		<li><a href="/shingles/brands/elk.html">Elk</a></li>
		<li><a href="/shingles/brands/englert.html">Englert</a></li>
		<li><a href="/shingles/brands/gaf.html">GAF</a></li>
		<li><a href="/shingles/brands/gerard.html">Gerard</a></li>
		<li><a href="/shingles/brands/goat-lake-forest.html">Goat Lake</a></li>
		<li><a href="/shingles/brands/hanson-roof-tiles.html">Hanson</a></li>
		<li><a href="/shingles/brands/iko.html">IKO</a></li>
		<li><a href="/shingles/brands/imerys.html">Imerys</a></li>
		<li><a href="/shingles/brands/landmark.html">Landmark</a></li>
		<li><a href="/shingles/brands/ludowici-roof-tiles.html">Ludowici</a></li>
		<li><a href="/shingles/brands/malarkey.html">Malarkey</a></li>
		<li><a href="/shingles/brands/marley-roofing.html">Marley</a></li>
		<li><a href="/shingles/brands/maxitile.html">MaxiTile</a></li>
		<li><a href="/shingles/brands/meeker.html">Meeker</a></li>
		<li><a href="/shingles/brands/monier-life-tile.html">Monier Life</a></li>
		<li><a href="/shingles/brands/ondura.html">Ondura</a></li>
		<li><a href="/shingles/brands/owens-corning.html">Owens-Corning</a></li>
		<li><a href="/shingles/brands/pabco.html">Pabco</a></li>
		<li><a href="/shingles/brands/paradigm.html">Paradigm</a></li>
		<li><a href="/shingles/brands/petersen-aluminum.html">Petersen</a></li>
		<li><a href="/shingles/brands/pinnacle.html">Pinnacle</a></li>
		<li><a href="/shingles/brands/royal-building-supplies.html">Royal (Dura)</a></li>
		<li><a href="/shingles/brands/rubbur.html">RuBBur</a></li>
		<li><a href="/shingles/brands/tamko.html">Tamko</a></li>
		<li><a href="/shingles/brands/timberline.html">Timberline</a></li>
		<li><a href="/shingles/brands/uni-solar.html">Uni-Solar</a></li>
		<li><a href="/shingles/brands/vail-metal-systems.html">Vail Metal</a></li>
		<li><a href="/shingles/brands/vande-heigh-raleigh.html">Vande Heigh Raleigh</a></li>
		<li><a href="/shingles/brands/zappone.html">Zappone</a></li>
	    </ul>
	</li>
</ul>
</div>

<!-- side bar end -->

<div id="content" class="content" style="height: auto !important;">
<div class="body_content" style="height: auto !important;">
    
    <h1>IKO Shingles</h1>
    
<a href="/perl/review.pl?brand_id=234&amp;equip_type=shingle">Write a review of IKO shingles</a>
<br><a href="/shingles/reviews/iko/">Read Reviews of IKO Shingles </a><br><img src="{{asset('asset/shingles/brands/iko.jpg')}}" alt="IKO Shingles" border="0" style="margin-top:16px;">
    <h3>Product Lines</h3>
    <p>
        IKO makes and sells a number of shingle styles throughout the world.
    </p>
    <p>
        Some examples include: <b>Cambridge</b>, laminated to last from 30 to 50 years, depending on shingle strengths. They are a premium architectural style shingle. <b>Crowne Slate</b> shingles, which give the roof a slate appearance, but weigh less than actual rock. <b>Grandeur</b> shingles, which are fiberglass-based and one of IKO's top-of-the-line models. <b>Regency</b> shingles, which look like a genuine wood shake roof, but are laminated. <b>Royal Victorian</b> shingles, which resemble Dutch clay tiles and consist of fiberglass and asphalt. <b>Gentry</b> asphalt shingles, which come in a variety of styles and are an all-purpose shingle.
    </p>
    <div class="topleftarticle" style="margin: 0px; padding: 0px; border-width: 0px;">
<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Roof Large Rectangle -->
<ins class="adsbygoogle" style="display: inline-block; width: 0px; height: 0px;" data-ad-client="ca-pub-9300874048195348" data-ad-slot="6517631847" data-adsbygoogle-status="done" data-ad-status="unfilled"><div id="aswift_1_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 0px; width: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; opacity: 0;"><iframe id="aswift_1" name="aswift_1" style="left: 0px; position: absolute; top: 0px; border: 0px; width: 0px; height: 0px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="0" height="0" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=280&amp;slotname=6517631847&amp;adk=3953784793&amp;adf=2544600062&amp;pi=t.ma~as.6517631847&amp;w=336&amp;lmt=1670673796&amp;format=336x280&amp;url=https%3A%2F%2Fwww.roof.info%2Fshingles%2Fbrands%2Fiko.html&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1680034612822&amp;bpp=89&amp;bdt=288&amp;idt=2860&amp;shv=r20230323&amp;mjsv=m202303230101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1680032254%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0&amp;nras=1&amp;correlator=780008041642&amp;frm=20&amp;pv=1&amp;ga_vid=1351673979.1680034614&amp;ga_sid=1680034614&amp;ga_hid=58064802&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=1&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=554&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44759927%2C44777876%2C44759842%2C44759876%2C31073107%2C44786919&amp;oid=2&amp;pvsid=1683467680189884&amp;tmod=444791305&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.roof.info%2F&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C0%2C0%2C1366%2C657&amp;vis=2&amp;rsz=%7C%7CleEr%7C&amp;abl=CS&amp;pfx=0&amp;fu=0&amp;bc=31&amp;ifi=2&amp;uci=a!2&amp;fsb=1&amp;xpc=DDqVnw1oVx&amp;p=https%3A//www.roof.info&amp;dtd=2889" data-google-container-id="a!2" data-google-query-id="CO_QtNS4__0CFUO71QodzQYFDA" data-load-complete="true"></iframe></div></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
    <h3>Iko's History</h3>
    <p>
        IKO was founded in 1951 in Alberta, Canada, and began manufacturing and selling asphalt-
        soaked paper for building construction. In 1954 they began selling roofing shingles, and 
        eventually began operating in Europe. They opened their first US plant in 1979 in Wilmington, 
        Delaware. 
    </p>
    <h3>Warranty</h3>
    <p>
        Shingle warranties depend on the composition and strength of the individual line. Most 
        companies carry several lines with a variety of styles. IKO offers their "Iron Clad" warranty 
        to all shingles. It covers the cost of repair or replacement, including labor charges, for 
        up to five years.
    </p>
    <p>
        Terms of their standard limited warranty vary from 30, 40, to 50 years and cover wind velocity 
        ranging from 70 mph to 110 mph. All of their shingles are class "A" fire rated, the highest 
        rating in that category. 
    </p><div class="google-auto-placed ap_container" style="width: 100%; height: auto; clear: both; text-align: center;"><ins data-ad-format="auto" class="adsbygoogle adsbygoogle-noablate" data-ad-client="ca-pub-9300874048195348" data-adsbygoogle-status="done" style="display: block; margin: auto; background-color: transparent; height: 280px;" data-ad-status="filled"><div id="aswift_2_host" style="border: none; height: 280px; width: 936px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: visible;" tabindex="0" title="Advertisement" aria-label="Advertisement"><iframe id="aswift_2" name="aswift_2" style="left:0;position:absolute;top:0;border:0;width:936px;height:280px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="936" height="280" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=280&amp;adk=1643391969&amp;adf=4125235988&amp;pi=t.aa~a.415540099~i.26~rp.4&amp;w=936&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1670673796&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=2058001125&amp;ad_type=text_image&amp;format=936x280&amp;url=https%3A%2F%2Fwww.roof.info%2Fshingles%2Fbrands%2Fiko.html&amp;fwr=0&amp;pra=3&amp;rh=200&amp;rw=936&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;adsid=ChEI8KCKoQYQ78vWm-zJt8vNARI5AA-25JhhhuUAYbWYE4iQYcrZgG0Ix0RXeWL8TCsdDJiiUePUafcHFaC4DWz9Wy0emJ1BG4r5yHn-&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1680034616517&amp;bpp=6&amp;bdt=3983&amp;idt=6&amp;shv=r20230323&amp;mjsv=m202303230101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1680032254%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0%2C336x280&amp;nras=2&amp;correlator=780008041642&amp;frm=20&amp;pv=1&amp;ga_vid=1351673979.1680034614&amp;ga_sid=1680034614&amp;ga_hid=58064802&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=1&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=881&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44759927%2C44777876%2C44759842%2C44759876%2C31073107%2C44786919&amp;oid=2&amp;pvsid=1683467680189884&amp;tmod=444791305&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.roof.info%2F&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C0%2C0%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;jar=2023-03-28-19&amp;ifi=3&amp;uci=a!3&amp;btvi=1&amp;fsb=1&amp;xpc=4O7fFKTqCw&amp;p=https%3A//www.roof.info&amp;dtd=51225" data-google-container-id="a!3" data-google-query-id="CMrlnO24__0CFYvj1Qodsq4Kdw" data-load-complete="true"></iframe></div></ins></div>
    <p>
        IKO shingles with algae protection are warranted for 5 to 10 years, depending on the shingle 
        brand and style.
    </p><div class="google-auto-placed ap_container" style="width: 100%; height: auto; clear: both; text-align: center;"><ins data-ad-format="auto" class="adsbygoogle adsbygoogle-noablate" data-ad-client="ca-pub-9300874048195348" data-adsbygoogle-status="done" style="display: block; margin: auto; background-color: transparent; height: 280px;" data-ad-status="filled"><div id="aswift_3_host" style="border: none; height: 280px; width: 936px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: visible;" tabindex="0" title="Advertisement" aria-label="Advertisement"><iframe id="aswift_3" name="aswift_3" style="left:0;position:absolute;top:0;border:0;width:936px;height:280px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="936" height="280" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=280&amp;adk=1643391969&amp;adf=2749655495&amp;pi=t.aa~a.415540099~i.28~rp.4&amp;w=936&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1670673796&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=2058001125&amp;ad_type=text_image&amp;format=936x280&amp;url=https%3A%2F%2Fwww.roof.info%2Fshingles%2Fbrands%2Fiko.html&amp;fwr=0&amp;pra=3&amp;rh=200&amp;rw=936&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;adsid=ChEI8KCKoQYQ78vWm-zJt8vNARI5AA-25JhhhuUAYbWYE4iQYcrZgG0Ix0RXeWL8TCsdDJiiUePUafcHFaC4DWz9Wy0emJ1BG4r5yHn-&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1680034616529&amp;bpp=2&amp;bdt=3995&amp;idt=2&amp;shv=r20230323&amp;mjsv=m202303230101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1680032254%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0%2C336x280%2C936x280&amp;nras=3&amp;correlator=780008041642&amp;frm=20&amp;pv=1&amp;ga_vid=1351673979.1680034614&amp;ga_sid=1680034614&amp;ga_hid=58064802&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=1&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=1219&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44759927%2C44777876%2C44759842%2C44759876%2C31073107%2C44786919&amp;oid=2&amp;pvsid=1683467680189884&amp;tmod=444791305&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.roof.info%2F&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C0%2C0%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;jar=2023-03-28-19&amp;ifi=4&amp;uci=a!4&amp;btvi=2&amp;fsb=1&amp;xpc=2HvX0Bl0F1&amp;p=https%3A//www.roof.info&amp;dtd=51236" data-google-container-id="a!4" data-google-query-id="CI3po-24__0CFZaa1QodFpoHNQ" data-load-complete="true"></iframe></div></ins></div>
    <p>
        Always study the warranty carefully before you purchase roofing shingles, as terms can vary 
        and be confusing.
    </p>
    <h3>Roof Repair</h3>
    <p>
    Are you looking for reputable roofing contractors?  Roof.info has partnered with a number of companies
    that provide free <a href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;" rel="nofollow" target="_blank">roofing quotes</a> from pre-screened, licensed and insured <b>roofers</b>.
    <a href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;" rel="nofollow" target="_blank">Try it now</a>! It's quick, easy and free!
 </p>

    <h3>Contacting IKO</h3>
    <div class="mailing_addr">
        Phone: (800) 433-2811<br><br>
        IKO Corporate HQ<br>
        Central Business Park<br>
        Brampton, Ontario L6W 1V8
        Canada
    </div>
    <div style="width:100%;text-align:center;">
<script id="mNCC" language="javascript">
    medianet_width = "600";
    medianet_height = "250";
    medianet_crid = "911555769";
    medianet_versionId = "3111299"; 
  </script>
<script src="//contextual.media.net/nmedianet.js?cid=8CU6B6W8F"></script>
</div>
</div>	   
@endsection