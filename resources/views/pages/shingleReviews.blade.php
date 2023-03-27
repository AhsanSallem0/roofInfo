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

<div id="content" class="content">






<div class="body_content">


<h1>
    Shingle Reviews
</h1>

<p>
    <b>Consumer reviews</b> represent the best source of information about customer satisfaction with 
    <b>shingles</b>.
</p>

<p>
    Independent testing organizations rate shingle manufacturers on criteria such as fire, wind and hail resistance.  While these are very important criteria to consider, you should also take into account the experiences of homeowners like you that have owned their roofs for years.  In addition, please consider <a href="/perl/review.pl?equip_type=shingle">writing a review</a> of your shingles as a way of helping others make more informed decisions.
</p>

<div class="upperarticle">
<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Roof Large Rectangle -->
<ins class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-9300874048195348" data-ad-slot="6517631847" data-adsbygoogle-status="done" data-ad-status="filled"><div id="aswift_1_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 280px; width: 336px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block;"><iframe id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;border:0;width:336px;height:280px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="336" height="280" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=280&amp;slotname=6517631847&amp;adk=3953784793&amp;adf=2544600062&amp;pi=t.ma~as.6517631847&amp;w=336&amp;lmt=1664935528&amp;format=336x280&amp;url=https%3A%2F%2Fwww.roof.info%2Fshingles%2Freviews%2F&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1679915146446&amp;bpp=2&amp;bdt=264&amp;idt=388&amp;shv=r20230322&amp;mjsv=m202303210101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1679897066%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0&amp;nras=1&amp;correlator=8574367317864&amp;frm=20&amp;pv=1&amp;ga_vid=1536922487.1679915147&amp;ga_sid=1679915147&amp;ga_hid=1883239841&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=19&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=335&amp;biw=1349&amp;bih=600&amp;scr_x=0&amp;scr_y=0&amp;eid=44777876%2C44759842%2C44759876%2C44759927%2C31073016%2C42531705&amp;oid=2&amp;pvsid=2403475952730545&amp;tmod=1833965904&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.roof.info%2Fshingles%2F&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C600&amp;vis=1&amp;rsz=%7C%7CoeE%7C&amp;abl=CS&amp;pfx=0&amp;fu=0&amp;bc=31&amp;ifi=2&amp;uci=a!2&amp;fsb=1&amp;xpc=XymMzc4VSh&amp;p=https%3A//www.roof.info&amp;dtd=403" data-google-container-id="a!2" data-google-query-id="CLv22cz7-_0CFbUy0wody6cI-g" data-load-complete="true"></iframe></div></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<p>
    We have reviews on the following brands of shingles:
</p>


<p>
</p><ul>
	<li><a href="/shingles/reviews/arrowline/">Arrowline</a> reviews</li>
	<li><a href="/shingles/reviews/atas/">Atas</a> reviews</li>
	<li><a href="/shingles/reviews/atlas/">Atlas</a> reviews</li>
	<li><a href="/shingles/reviews/bp/">BP</a> reviews</li>
	<li><a href="/shingles/reviews/cedar-west/">Cedar West</a> reviews</li>
	<li><a href="/shingles/reviews/certainteed/">Certainteed</a> reviews</li>
	<li><a href="/shingles/reviews/certi-label/">Certi-Label</a> reviews</li>
	<li><a href="/shingles/reviews/classic-metal/">Classic Metal</a> reviews</li>
	<li><a href="/shingles/reviews/continental-enterprises/">Continental Enterprises</a> reviews</li>
	<li><a href="/shingles/reviews/davinci-roofscapes/">Davinci Roofscapes</a> reviews</li>
	<li><a href="/shingles/reviews/decra/">Decra</a> reviews</li>
	<li><a href="/shingles/reviews/dura-loc/">Dura-Loc</a> reviews</li>
	<li><a href="/shingles/reviews/elk/">ELK</a> reviews</li>
	<li><a href="/shingles/reviews/gaf/">GAF</a> reviews</li>
	<li><a href="/shingles/reviews/gerard/">Gerard</a> reviews</li>
	<li><a href="/shingles/reviews/grip-rite/">Grip-Rite</a> reviews</li>
	<li><a href="/shingles/reviews/hanson/">Hanson</a> reviews</li>
	<li><a href="/shingles/reviews/iko/">IKO</a> reviews</li>
	<li><a href="/shingles/reviews/interlock/">Interlock</a> reviews</li>
	<li><a href="/shingles/reviews/klauer/">Klauer</a> reviews</li>
	<li><a href="/shingles/reviews/landmark/">Landmark</a> reviews</li>
	<li><a href="/shingles/reviews/malarkey/">Malarkey</a> reviews</li>
	<li><a href="/shingles/reviews/marley/">Marley</a> reviews</li>
	<li><a href="/shingles/reviews/metro/">Metro Roof Products</a> reviews</li>
	<li><a href="/shingles/reviews/ondura/">Ondura</a> reviews</li>
	<li><a href="/shingles/reviews/owenscorning/">Owens Corning</a> reviews</li>
	<li><a href="/shingles/reviews/pabco/">Pabco</a> reviews</li>
	<li><a href="/shingles/reviews/pinnacle/">Pinnacle</a> reviews</li>
	<li><a href="/shingles/reviews/royal/">Royal</a> reviews</li>
	<li><a href="/shingles/reviews/rubbur/">Rubbur</a> reviews</li>
	<li><a href="/shingles/reviews/tamko/">Tamko</a> reviews</li>
	<li><a href="/shingles/reviews/timberline/">Timberline</a> reviews</li>
	<li><a href="/shingles/reviews/uni-solar/">Uni-Solar</a> reviews</li>
	<li><a href="/shingles/reviews/zappone/">Zappone</a> reviews</li>
</ul>
<p></p>


<p>
<b>Want More Reviews?</b><br>
    <a href="/gutter-guards/reviews/">Gutter Guard Reviews</a><br><a href="/solar-panels/reviews/">Solar Panel Reviews</a><br>
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

<p class="subscript">
    <br><br>
    The opinions expressed in these reviews are the opinions of consumers that submitted reviews to 
    Roof.info.  They do not necessarily represent the opinions of Roof.info.
</p>

</div>	
@endsection