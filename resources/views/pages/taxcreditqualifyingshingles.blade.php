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
		<li><a href="/shingles/brands/pabko.html">Pabko</a></li>
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

<!-- sidebar end -->




<div id="content" class="content">

<div class="body_content">
	
    <h1>Shingles that Qualify for a Tax Credit</h1>
    <p>
	The list that follows is our attempt to create a comprehensive list of shingles that appear to qualify for the (maximum) $1500 2010 Energy Tax Credit.
	We generated this list by looking at EnergyStar-qualified shingles whose manufacturers provide a Manufacturers' Certification Statement 
	claiming that their shingles qualify.
    </p>
    <div class="topleftarticle" style="margin: 0px; padding: 0px; border-width: 0px;">
<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Roof Large Rectangle -->
<ins class="adsbygoogle" style="display: inline-block; width: 0px; height: 0px;" data-ad-client="ca-pub-9300874048195348" data-ad-slot="6517631847" data-adsbygoogle-status="done" data-ad-status="unfilled"><div id="aswift_1_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 0px; width: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; opacity: 0;"><iframe id="aswift_1" name="aswift_1" style="left: 0px; position: absolute; top: 0px; border: 0px; width: 0px; height: 0px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="0" height="0" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=280&amp;slotname=6517631847&amp;adk=3953784793&amp;adf=355650093&amp;pi=t.ma~as.6517631847&amp;w=336&amp;lmt=1664936150&amp;format=336x280&amp;url=https%3A%2F%2Fwww.roof.info%2Fshingles%2Ftax-credit-qualifying-shingles.html&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1680041719624&amp;bpp=1&amp;bdt=306&amp;idt=519&amp;shv=r20230323&amp;mjsv=m202303230101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1680032254%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0&amp;nras=1&amp;correlator=3780227128446&amp;frm=20&amp;pv=1&amp;ga_vid=172776644.1680041720&amp;ga_sid=1680041720&amp;ga_hid=2110759580&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=1&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=279&amp;biw=1349&amp;bih=343&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44777876%2C44759837%2C44759926%2C31073105%2C44786632&amp;oid=2&amp;pvsid=1426246239932153&amp;tmod=1640861360&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.roof.info%2F%2Fshingles%2Fasphalt-shingles-get-greener&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C0%2C0%2C1366%2C343&amp;vis=2&amp;rsz=%7C%7CleEr%7C&amp;abl=CS&amp;pfx=0&amp;fu=0&amp;bc=31&amp;ifi=2&amp;uci=a!2&amp;fsb=1&amp;xpc=TZq1g2Xisb&amp;p=https%3A//www.roof.info&amp;dtd=535" data-google-container-id="a!2" data-google-query-id="CPC3mZDT__0CFUjH7QodIfcECw" data-load-complete="true"></iframe></div></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
    <p>
	If you are looking for more information on the Cool Roofing Tax Credit, please read our article titled: 
	<a href="{{url('/shingles/10-things-about-cool-roofing')}}">Cool Roofing Tax Credit: 10 Things You Need to Know</a>.
    </p>
    <p>
	Disclaimer: Roof.info does not provide tax advice, and is not staffed with tax professionals.  Check with your accountant 
	to ensure that these shingles qualify for the tax credit.
    </p>
	<table cellpadding="0" cellspacing="0" style="width:100%;">
	<tbody><tr><th colspan="2"><h1>Qualifying Shingles</h1></th></tr>
	<tr>
	    <th style="border-bottom:1px solid #cc9900" valign="top">Brand</th>
	    <th style="border-bottom:1px solid #cc9900" valign="top">Line of Shingles</th>
	    <th style="border-bottom:1px solid #cc9900" valign="top">Warranty</th>
	    <th style="border-bottom:1px solid #cc9900" valign="top">Manufacturer's Certification Statement (MCS)</th>
	</tr>
	<tr><td style="border-bottom:1px solid #cc9900" valign="top">Aluminum Lock Roofing, Inc.</td><td style="border-bottom:1px solid #cc9900" valign="top">White Aluminum Lock</td><td style="border-bottom:1px solid #cc9900" valign="top"> 30 years </td><td style="border-bottom:1px solid #cc9900" valign="top">They don't provide a MCS, but they claim that their shingles qualify: <a href="http://www.aluminumlockroofing.com/save-energy/">http://www.aluminumlockroofing.com/save-energy/</a></td></tr>
	<tr><td style="border-bottom:1px solid #cc9900" valign="top">Armorlite</td><td style="border-bottom:1px solid #cc9900" valign="top">Midnight Gray</td><td style="border-bottom:1px solid #cc9900" valign="top"> 50 years</td><td style="border-bottom:1px solid #cc9900" valign="top">They claim "All ENERGY STAR labeled roofs qualify for the tax credit" and don't provide a MCS: <a href="http://www.armorliteroofing.com/tax_credit.php">http://www.armorliteroofing.com/tax_credit.php</a></td></tr>
	<tr><td style="border-bottom:1px solid #cc9900" valign="top">Armorlite</td><td style="border-bottom:1px solid #cc9900" valign="top">Satin Copper</td><td style="border-bottom:1px solid #cc9900" valign="top"> 50 years</td><td style="border-bottom:1px solid #cc9900" valign="top"><a href="http://www.armorliteroofing.com/tax_credit.php">http://www.armorliteroofing.com/tax_credit.php</a></td></tr>
	<tr><td style="border-bottom:1px solid #cc9900" valign="top">Armorlite</td><td style="border-bottom:1px solid #cc9900" valign="top">Patina</td><td style="border-bottom:1px solid #cc9900" valign="top"> 50 years</td><td style="border-bottom:1px solid #cc9900" valign="top"><a href="http://www.armorliteroofing.com/tax_credit.php">http://www.armorliteroofing.com/tax_credit.php</a></td></tr>
	<tr><td style="border-bottom:1px solid #cc9900" valign="top">CertainTeed</td><td style="border-bottom:1px solid #cc9900" valign="top">CT20 Star White</td><td style="border-bottom:1px solid #cc9900" valign="top"> 20 years</td><td style="border-bottom:1px solid #cc9900" valign="top"><a href="http://www.certainteed.com/resources/ManufacturersCertificationStatement.pdf">http://www.certainteed.com/resources/ManufacturersCertificationStatement.pdf</a></td></tr>
	<tr><td style="border-bottom:1px solid #cc9900" valign="top">CertainTeed</td><td style="border-bottom:1px solid #cc9900" valign="top">XT25 AR Star White</td><td style="border-bottom:1px solid #cc9900" valign="top">25 years</td><td style="border-bottom:1px solid #cc9900" valign="top"><a href="http://www.certainteed.com/products/roofing/309143">http://www.certainteed.com/products/roofing/309143</a></td></tr>
	<tr><td style="border-bottom:1px solid #cc9900" valign="top">CertainTeed</td><td style="border-bottom:1px solid #cc9900" valign="top">XT25 Star White</td><td style="border-bottom:1px solid #cc9900" valign="top">25 years</td><td style="border-bottom:1px solid #cc9900" valign="top"><a href="http://www.certainteed.com/products/roofing/309143">http://www.certainteed.com/products/roofing/309143</a></td></tr>
	<tr><td style="border-bottom:1px solid #cc9900" valign="top">CertainTeed</td><td style="border-bottom:1px solid #cc9900" valign="top">Landmark Solaris (Crystal Gray, Dusky Clay, Aged Cedar, Sunset Shake)</td><td style="border-bottom:1px solid #cc9900" valign="top">Limited Lifetime</td><td style="border-bottom:1px solid #cc9900" valign="top"><a href="https://www.certainteed.com/residential-roofing/">https://www.certainteed.com/residential-roofing/</a></td></tr>
	<tr><td style="border-bottom:1px solid #cc9900" valign="top">CertainTeed</td><td style="border-bottom:1px solid #cc9900" valign="top">Landmark Solaris Max Def (Resawn Shake, Weathered Wood, Heather Blend, Burnt Sienna)</td><td style="border-bottom:1px solid #cc9900" valign="top">Limited Lifetime</td><td style="border-bottom:1px solid #cc9900" valign="top"><a href="https://www.certainteed.com/residential-roofing/">https://www.certainteed.com/residential-roofing/</a></td></tr>
	<tr><td style="border-bottom:1px solid #cc9900" valign="top">CertainTeed</td><td style="border-bottom:1px solid #cc9900" valign="top">Landmark Premium Silver Birch</td><td style="border-bottom:1px solid #cc9900" valign="top"> 50 years</td><td style="border-bottom:1px solid #cc9900" valign="top"><a href="http://www.certainteed.com/resources/landmarkseriesbrochsoutheast.pdf">http://www.certainteed.com/resources/landmarkseriesbrochsoutheast.pdf</a></td></tr>
	<tr><td style="border-bottom:1px solid #cc9900" valign="top">CertainTeed</td><td style="border-bottom:1px solid #cc9900" valign="top">Landmark (Silver Birch, Star White, Mist White)</td><td style="border-bottom:1px solid #cc9900" valign="top"> 30 years </td><td style="border-bottom:1px solid #cc9900" valign="top"><a href="http://www.certainteed.com/resources/landmarkseriesbrochsoutheast.pdf">http://www.certainteed.com/resources/landmarkseriesbrochsoutheast.pdf</a></td></tr>
	<tr><td style="border-bottom:1px solid #cc9900" valign="top">Malarkey</td><td style="border-bottom:1px solid #cc9900" valign="top">Dura-Seal 20 (Dove White)</td><td style="border-bottom:1px solid #cc9900" valign="top"> 20 years</td><td style="border-bottom:1px solid #cc9900" valign="top">Other products qualify as well: <a href="http://www.malarkeyroofing.com/wp/wp-content/uploads/2009/08/Malarkey_Manu_Cert_Stmt.pdf">http://www.malarkeyroofing.com/wp/wp-content/uploads/2009/08/Malarkey_Manu_Cert_Stmt.pdf</a></td></tr>
	<tr><td style="border-bottom:1px solid #cc9900" valign="top">Duration Premium</td><td style="border-bottom:1px solid #cc9900" valign="top">Cool Shingles (Frosted Oak, Sunrise, Harbor Fog)</td><td style="border-bottom:1px solid #cc9900" valign="top">Limited Lifetime</td><td style="border-bottom:1px solid #cc9900" valign="top">Other products qualify as well: <a href="http://roofing.owenscorning.com/docs/10000652.pdf">http://roofing.owenscorning.com/docs/10000652.pdf</a></td></tr>
	<tr><td style="border-bottom:1px solid #cc9900" valign="top">Duration Premium</td><td style="border-bottom:1px solid #cc9900" valign="top">Shasta White AR</td><td style="border-bottom:1px solid #cc9900" valign="top">Limited Lifetime</td><td style="border-bottom:1px solid #cc9900" valign="top"><a href="https://www.owenscorning.com/roofing/shingles/">https://www.owenscorning.com/roofing/shingles/</a></td></tr>
	<tr><td style="border-bottom:1px solid #cc9900" valign="top">Duration Premium</td><td style="border-bottom:1px solid #cc9900" valign="top">Shasta White</td><td style="border-bottom:1px solid #cc9900" valign="top">Limited Lifetime</td><td style="border-bottom:1px solid #cc9900" valign="top"><a href="http://roofing.owenscorning.com/homeowner/shingles/duration.aspx">http://roofing.owenscorning.com/homeowner/shingles/duration.aspx</a></td></tr>
	<tr><td style="border-bottom:1px solid #cc9900" valign="top">GAF-Elk</td><td style="border-bottom:1px solid #cc9900" valign="top">Timberline Cool Series (Cool Weathered Wood, Cool Barkwood, Cool Antique Slate) </td><td style="border-bottom:1px solid #cc9900" valign="top">Lifetime</td><td style="border-bottom:1px solid #cc9900" valign="top"><a href="http://www.gaf.com/Roofing/Commercial/Green_Roof_Central">http://www.gaf.com/Roofing/Commercial/Green_Roof_Central</a></td></tr>
	<tr><td style="border-bottom:1px solid #cc9900" valign="top">Oakridge</td><td style="border-bottom:1px solid #cc9900" valign="top">Shasta White</td><td style="border-bottom:1px solid #cc9900" valign="top">Limited Lifetime</td><td style="border-bottom:1px solid #cc9900" valign="top"><a href="http://roofing.owenscorning.com/professional/shingles/oakridge-ar.aspx">http://roofing.owenscorning.com/professional/shingles/oakridge-ar.aspx</a></td></tr>
	<tr><td style="border-bottom:1px solid #cc9900" valign="top">Owens Corning</td><td style="border-bottom:1px solid #cc9900" valign="top">Supreme</td><td style="border-bottom:1px solid #cc9900" valign="top">25 years</td><td style="border-bottom:1px solid #cc9900" valign="top"><a href="http://roofing.owenscorning.com/homeowner/shingles/supreme.aspx">http://roofing.owenscorning.com/homeowner/shingles/supreme.aspx</a></td></tr>
	<tr><td style="border-bottom:1px solid #cc9900" valign="top">Owens Corning</td><td style="border-bottom:1px solid #cc9900" valign="top">Classic Shasta White</td><td style="border-bottom:1px solid #cc9900" valign="top"> 20 years</td><td style="border-bottom:1px solid #cc9900" valign="top"><a href="http://roofing.owenscorning.com/homeowner/shingles/classic.aspx">http://roofing.owenscorning.com/homeowner/shingles/classic.aspx</a></td></tr>
    </tbody></table>
    <p>
	If you believe that any information on this page is incorrect, please <a href="{{url('/contact')}}">contact us</a>.
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