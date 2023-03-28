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
    
    <h1>Pabco Shingles</h1>
    
<a href="/perl/review.pl?brand_id=243&amp;equip_type=shingle">Write a review of Pabco shingles</a>
<br><a href="/shingles/reviews/pabco/">Read Reviews of Pabco Shingles </a>
    <h3>Products</h3>
    <p>
        There are several products in the PABCO® shingle line.
    </p>
    <p>
        Pabco Premier Advantage® is the most durable. The shingle has a tough fiberglass mat base 
        and is coated in protective asphalt and ceramic granules. It's made for the weather 
        conditions of the western United States. 
    </p>
        <div class="topleftarticle" style="margin: 0px; padding: 0px; border-width: 0px;">
<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Roof Large Rectangle -->
<ins class="adsbygoogle" style="display: inline-block; width: 0px; height: 0px;" data-ad-client="ca-pub-9300874048195348" data-ad-slot="6517631847" data-adsbygoogle-status="done" data-ad-status="unfilled"><div id="aswift_1_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 0px; width: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; opacity: 0;"><iframe id="aswift_1" name="aswift_1" style="left: 0px; position: absolute; top: 0px; border: 0px; width: 0px; height: 0px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="0" height="0" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=280&amp;slotname=6517631847&amp;adk=3953784793&amp;adf=2544600062&amp;pi=t.ma~as.6517631847&amp;w=336&amp;lmt=1664938438&amp;format=336x280&amp;url=https%3A%2F%2Fwww.roof.info%2Fshingles%2Fbrands%2Fpabco.html&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1680035662812&amp;bpp=221&amp;bdt=213&amp;idt=1346&amp;shv=r20230323&amp;mjsv=m202303230101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1680032254%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0&amp;nras=1&amp;correlator=8406586499562&amp;frm=20&amp;pv=1&amp;ga_vid=239182076.1680035664&amp;ga_sid=1680035664&amp;ga_hid=58512990&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=1&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=403&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44759927%2C44777876%2C44759842%2C44759876%2C31071756%2C31073098%2C31073379%2C44786632&amp;oid=2&amp;pvsid=2742967760416200&amp;tmod=444791305&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.roof.info%2F&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C0%2C0%2C1366%2C657&amp;vis=2&amp;rsz=%7C%7CleEr%7C&amp;abl=CS&amp;pfx=0&amp;fu=0&amp;bc=31&amp;ifi=2&amp;uci=a!2&amp;fsb=1&amp;xpc=SEdBxlBbW8&amp;p=https%3A//www.roof.info&amp;dtd=1362" data-google-container-id="a!2" data-google-query-id="CO2GsMi8__0CFdn57QoddBAGLA" data-load-complete="true"></iframe></div></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
    <p>
        The Premier® shingle is made from multiple layers of laminates. Laminated shingles add 
        the look of depth to a roof. They may be applied in random patterns to increase the artistic 
        effect.
    </p>
    <p>
        PABCO's Precise® is another laminated shingle designed to give the new or re-roofing project 
        a distinctive and consistent look. The mat base is fiberglass, coated with asphalt, and 
        embedded with ceramic granules. This shingle has a self-sealing strip that adheres to the roof 
        when heated by the sun. It is designed to offer extra protection from wind and other weather 
        conditions.
    </p>
    <p>
        PABCO claims that their three tab shingles, although less costly offer excellent fire, wind, 
        and weather protection. They are designed to compliment any architectural style and come in 
        various colors. The models are SG-30® and SG-2® the SG-30 has a thicker asphalt coat. 
    </p>
    <h3>PABCO's History</h3>
    <p>
        PABCO Roofing was founded in 1984 when Pacific Coast Building Products acquired the west 
        coast <a href="/shingles/brands/certainteed.html">CertainTeed</a> branch. They specialize 
        in providing <a href="/shingles/asphalt.html">asphalt roofing materials</a> in the western U.S.
    </p>
    <h3>Warranty</h3>
    <p>
        All PABCO shingles come with a limited warranty. They also offer a 50-year transferable 
        warranty that costs nothing regardless of how many times the home may change hands.
    </p>
    <p>
        The Premier style comes with 50, 40, or 30-year limited warranties. They are also 
        <a href="/definitions/fire_ratings.html">rated Class "A" against fire damage</a>. 
        Your PABCO dealer can provide more information on warranties for each shingle model.
    </p><div class="google-auto-placed ap_container" style="width: 100%; height: auto; clear: both; text-align: center;"><ins data-ad-format="auto" class="adsbygoogle adsbygoogle-noablate" data-ad-client="ca-pub-9300874048195348" data-adsbygoogle-status="done" style="display: block; margin: auto; background-color: transparent; height: 0px;" data-ad-status="unfilled"><div id="aswift_2_host" style="border: none; height: 0px; width: 936px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; opacity: 0;" tabindex="0" title="Advertisement" aria-label="Advertisement"><iframe id="aswift_2" name="aswift_2" style="left: 0px; position: absolute; top: 0px; border: 0px; width: 936px; height: 0px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="936" height="0" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=280&amp;adk=1643391969&amp;adf=4125235988&amp;pi=t.aa~a.415540099~i.30~rp.4&amp;w=936&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1664938438&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=2058001125&amp;ad_type=text_image&amp;format=936x280&amp;url=https%3A%2F%2Fwww.roof.info%2Fshingles%2Fbrands%2Fpabco.html&amp;fwr=0&amp;pra=3&amp;rh=200&amp;rw=936&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;adsid=ChEI8KCKoQYQ78vWm-zJt8vNARI5AA-25JhyvUDt4-Vr1y9hDtjUUXi21uQfFhCQOG6Uc3c0jq_6ijvERDzkBTfL85BJn2AuLWWtFHGQ&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1680035664969&amp;bpp=6&amp;bdt=2370&amp;idt=6&amp;shv=r20230323&amp;mjsv=m202303230101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1680032254%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0%2C336x280&amp;nras=2&amp;correlator=8406586499562&amp;frm=20&amp;pv=1&amp;ga_vid=239182076.1680035664&amp;ga_sid=1680035664&amp;ga_hid=58512990&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=1&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=937&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44759927%2C44777876%2C44759842%2C44759876%2C31071756%2C31073098%2C31073379%2C44786632&amp;oid=2&amp;pvsid=2742967760416200&amp;tmod=444791305&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.roof.info%2F&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C0%2C0%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;jar=2023-03-28-19&amp;ifi=3&amp;uci=a!3&amp;btvi=1&amp;fsb=1&amp;xpc=cslwWuk3bI&amp;p=https%3A//www.roof.info&amp;dtd=99329" data-google-container-id="a!3" data-google-query-id="CIqIkPi8__0CFYnj7Qodmq8HcA" data-load-complete="true"></iframe></div></ins></div>
    <p>
        As with any product, be sure you understand all the terms of the warranty before 
        purchasing. 
    </p>
    <h3>Roof Repair</h3>
    <p>
    Are you looking for reputable roofing contractors?  Roof.info has partnered with a number of companies
    that provide free <a href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;" rel="nofollow" target="_blank">roofing quotes</a> from pre-screened, licensed and insured <b>roofers</b>.
    <a href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;" rel="nofollow" target="_blank">Try it now</a>! It's quick, easy and free!
 </p>

    <h3>Contacting Pabco</h3>
    <p>
        Phone: 253-272-0374
    </p>
    <p>
        Mail:<br>  
        </p><div class="mailing_addr">
            Corporate Headquarters<br>
            1718 Thorne Road<br>
            Tacoma, WA 98421-3207<br>
            USA
        </div>
    <p></p>
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