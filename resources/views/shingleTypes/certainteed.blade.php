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
    
    <h1>CertainTeed Shingles</h1>
    
<a href="/perl/review.pl?brand_id=220&amp;equip_type=shingle">Write a review of CertainTeed shingles</a>
<br><a href="/shingles/reviews/certainteed/">Read Reviews of CertainTeed Shingles </a><br><img src="{{asset('asset/shingles/brands/certainteed.jpg')}}" alt="CertainTeed Shingles" border="0" style="margin-top:16px;">
    <p>
        CertainTeed manufactures a wide range of <a href="/shingles/asphalt.html">asphalt</a> and 
        <a href="/shingles/architectural.html">architectural</a> shingles. CertainTeed took the "Overall Best of Class" award 
        for Exterior Products in Professional Remodeler's 2005 Best in Class survey. (The phone survey results were gathered 
        from a random sample of 200 subscribers to the magazine <i>Professional Remodeler</i>.) 
    </p>
    <div class="topleftarticle" style="margin: 0px; padding: 0px; border-width: 0px;">
<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Roof Large Rectangle -->
<ins class="adsbygoogle" style="display: inline-block; width: 0px; height: 0px;" data-ad-client="ca-pub-9300874048195348" data-ad-slot="6517631847" data-adsbygoogle-status="done" data-ad-status="unfilled"><div id="aswift_1_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 0px; width: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; opacity: 0;"><iframe id="aswift_1" name="aswift_1" style="left: 0px; position: absolute; top: 0px; border: 0px; width: 0px; height: 0px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="0" height="0" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=280&amp;slotname=6517631847&amp;adk=3953784793&amp;adf=2544600062&amp;pi=t.ma~as.6517631847&amp;w=336&amp;lmt=1664938074&amp;format=336x280&amp;url=https%3A%2F%2Fwww.roof.info%2Fshingles%2Fbrands%2Fcertainteed.html&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1680007309953&amp;bpp=51&amp;bdt=165&amp;idt=382&amp;shv=r20230322&amp;mjsv=m202303210101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1679986049%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0&amp;nras=1&amp;correlator=6122077842579&amp;frm=20&amp;pv=1&amp;ga_vid=1498181784.1680007310&amp;ga_sid=1680007310&amp;ga_hid=985408108&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=1&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=374&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44759842%2C44759875%2C44759926%2C44777876%2C44787455&amp;oid=2&amp;pvsid=1415110419381566&amp;tmod=1371914019&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.roof.info%2Fshingles%2Fbrands%2Fbp.html&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C0%2C0%2C1366%2C657&amp;vis=2&amp;rsz=%7C%7CleEr%7C&amp;abl=CS&amp;pfx=0&amp;fu=0&amp;bc=31&amp;ifi=2&amp;uci=a!2&amp;fsb=1&amp;xpc=x9sytSBN7f&amp;p=https%3A//www.roof.info&amp;dtd=406" data-google-container-id="a!2" data-google-query-id="COCkgvjS_v0CFZcRBgAdbDgBhg" data-load-complete="true"></iframe></div></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
    <h3>History</h3>
    <p>
        CertainTeed was founded in 1904 in St. Louis as the General Roofing Manufacturing Co. The industrial holdings company 
        Saint-Gobain acquired CertainTeed in 1988. The company is headquartered in Valley Forge, Pa.
    </p>
    <h3>Product Lines</h3>
    <p>
        The manufacturer breaks its shingle offerings into several categories: traditional, designer, premium designer and luxury. 
        In the traditional category, product offerings include the XT and CT brands of fiberglass products. 
    </p>
    <p>
        Designer shingles include the Highland Slate™ as well as the asphalt Landmark Solaris™ and Landmark™ lines. 
        Premium designer products include additional options in the Landmark line, such as the Landmark PRO and Premium, as well as 
        the Hatteras® and Independence™ brands. 
    </p><div class="google-auto-placed ap_container" style="width: 100%; height: auto; clear: both; text-align: center;"><ins data-ad-format="auto" class="adsbygoogle adsbygoogle-noablate" data-ad-client="ca-pub-9300874048195348" data-adsbygoogle-status="done" style="display: block; margin: auto; background-color: transparent; height: 0px;" data-ad-status="unfilled"><div id="aswift_2_host" style="border: none; height: 0px; width: 936px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; opacity: 0;" tabindex="0" title="Advertisement" aria-label="Advertisement"><iframe id="aswift_2" name="aswift_2" style="left: 0px; position: absolute; top: 0px; border: 0px; width: 936px; height: 0px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="936" height="0" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=280&amp;adk=1643391969&amp;adf=4125235988&amp;pi=t.aa~a.415540099~i.22~rp.4&amp;w=936&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1664938074&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=2058001125&amp;ad_type=text_image&amp;format=936x280&amp;url=https%3A%2F%2Fwww.roof.info%2Fshingles%2Fbrands%2Fcertainteed.html&amp;fwr=0&amp;pra=3&amp;rh=200&amp;rw=936&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;adsid=ChEI8KCKoQYQ78vWm-zJt8vNARI5AA-25JifmFeXqjvGXj9RFWqhDOIq9vmRwb-jMuc4ymB9p6blYBVGtA8NQpFB8RHYC8ayApcgpWgN&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1680007310769&amp;bpp=3&amp;bdt=981&amp;idt=3&amp;shv=r20230322&amp;mjsv=m202303210101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1679986049%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0%2C336x280&amp;nras=2&amp;correlator=6122077842579&amp;frm=20&amp;pv=1&amp;ga_vid=1498181784.1680007310&amp;ga_sid=1680007310&amp;ga_hid=985408108&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=1&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=722&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44759842%2C44759875%2C44759926%2C44777876%2C44787455&amp;oid=2&amp;pvsid=1415110419381566&amp;tmod=1371914019&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.roof.info%2Fshingles%2Fbrands%2Fbp.html&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C0%2C0%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;jar=2023-03-27-20&amp;ifi=3&amp;uci=a!3&amp;btvi=1&amp;fsb=1&amp;xpc=NXbFvaD4iF&amp;p=https%3A//www.roof.info&amp;dtd=11138" data-google-container-id="a!3" data-google-query-id="CJyLwv3S_v0CFQXVUQodM5gAFA" data-load-complete="true"></iframe></div></ins></div>
    <p>
        CertainTeed's high-end luxury shingles are designed to look like slate shingles, wood shakes and architectural shingles, and 
        are marketed under names such as Grand Manor®, CarriageHouse™, Presidential Shake™ and many others. 
    </p>
    <h3>Roof Repair</h3>
    <p>
    Are you looking for reputable roofing contractors?  Roof.info has partnered with a number of companies
    that provide free <a href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;" rel="nofollow" target="_blank">roofing quotes</a> from pre-screened, licensed and insured <b>roofers</b>.
    <a href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;" rel="nofollow" target="_blank">Try it now</a>! It's quick, easy and free!
 </p>

    <h3>Contacting CertainTeed</h3>
    <div class="mailing_addr">
        CertainTeed Corp.<br>
        20 Moores Road, <br>
        Malvern, PA 19355<br><br>

        Phone: 610-341-7000
    </div>
    <h3>Warranty</h3>
    <p>
        Certainteed warrants to the original 
        property owner that the shingles will be free of manufacturer defect for a period
        of time that ranges from 20 years to the lifetime of the buyer, depending on the 
        model of shingle.  They will repair or replace such shingles (though the labor cost is not 
        included).
    </p>
    <p>
        In addition, CertainTeed will replace or repair (including labor costs) shingles for an initial period of time covered by its 
        SureStart™ protection plan, should those shingles be proven to have a manufacturer's defect. 
    </p><div class="google-auto-placed ap_container" style="width: 100%; height: auto; clear: both; text-align: center;"><ins data-ad-format="auto" class="adsbygoogle adsbygoogle-noablate" data-ad-client="ca-pub-9300874048195348" data-adsbygoogle-status="done" style="display: block; margin: auto; background-color: transparent; height: 0px;" data-ad-status="unfilled"><div id="aswift_3_host" style="border: none; height: 0px; width: 936px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; opacity: 0;" tabindex="0" title="Advertisement" aria-label="Advertisement"><iframe id="aswift_3" name="aswift_3" style="left: 0px; position: absolute; top: 0px; border: 0px; width: 936px; height: 0px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="936" height="0" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=280&amp;adk=1643391969&amp;adf=1667006761&amp;pi=t.aa~a.415540099~i.38~rp.4&amp;w=936&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1664938074&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=2058001125&amp;ad_type=text_image&amp;format=936x280&amp;url=https%3A%2F%2Fwww.roof.info%2Fshingles%2Fbrands%2Fcertainteed.html&amp;fwr=0&amp;pra=3&amp;rh=200&amp;rw=936&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;adsid=ChEI8KCKoQYQ78vWm-zJt8vNARI5AA-25JifmFeXqjvGXj9RFWqhDOIq9vmRwb-jMuc4ymB9p6blYBVGtA8NQpFB8RHYC8ayApcgpWgN&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1680007310775&amp;bpp=2&amp;bdt=987&amp;idt=2&amp;shv=r20230322&amp;mjsv=m202303210101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1679986049%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0%2C336x280%2C936x280&amp;nras=3&amp;correlator=6122077842579&amp;frm=20&amp;pv=1&amp;ga_vid=1498181784.1680007310&amp;ga_sid=1680007310&amp;ga_hid=985408108&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=1&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=1588&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44759842%2C44759875%2C44759926%2C44777876%2C44787455&amp;oid=2&amp;pvsid=1415110419381566&amp;tmod=1371914019&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.roof.info%2Fshingles%2Fbrands%2Fbp.html&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C0%2C0%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;jar=2023-03-27-20&amp;ifi=4&amp;uci=a!4&amp;btvi=2&amp;fsb=1&amp;xpc=p3lp2LnBJb&amp;p=https%3A//www.roof.info&amp;dtd=11157" data-google-container-id="a!4" data-google-query-id="CMrkw_3S_v0CFX8WBgAdBbYMjA" data-load-complete="true"></iframe></div></ins></div>
    <p>
        Certain shingle models are guaranteed against algae growth (though not mold or mildew growth). However, in the event of algae growth, 
        CertainTeed reserves the right to clean the affected shingles, rather than replace them. A wind warranty also is offered, and for 
        some products goes as high as 110 miles per hour.
    </p>
    <p>
        CertainTeed's warranty varies based on many factors: the country in which the shingles are purchased /
        installed; whether or not the roof on which they were installed is adequately 
        ventilated; the model of shingle; whether or not the person submitting the claim is the original
        homeowner, etc.  Roof.info recommends that you inspect the warranty
        carefully to make sure that you understand its terms.
    </p>
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