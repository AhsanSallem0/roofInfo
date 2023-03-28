@extends('welcome')
@section('content')

<div id="left_toolbar" class="left_toolbar">
<ul>
	<img src="{{asset('asset/images/nav/dotted_bar.jpg')}}" class="dottedbar">
    <li class="barheader left_toolbar_title" id="toolbar_related_title">
        Roofing
	    <ul id="toolbar_resources">
		<li><a href="/shingles/">Buying Shingles</a></li>
		<li><a href="/shingles/brands/">Shingle Brands</a></li>
		<li><a href="/shingles/warranty.html">Shingle Warranties</a></li>
		<li><a href="/roofing-contractors/">Roofing Contractors</a></li>
		<li><a href="/choose-roofing-contractor.html">Choosing a Roofer</a></li>
		<li><a href="/roof-replacement-cost.html">Roof Replacement Cost</a></li>
		<li><a href="/roofing-contractors/roofing-scams.html">Avoid Roofing Scams</a></li>
		<li><a href="/solar-panels/">Buying Solar Panels</a></li>
		<li><a href="/solar-panels/brands/">Solar Panel Brands</a></li>
		<li><a href="/gutters/">Buying Rain Gutters</a></li>
		<li><a href="/gutters/gutter-ratings.html">Gutter Ratings</a></li>
		<li><a href="/gutter-guards/">Buying Gutter Guards</a></li>
		<li><b><a rel="nofollow" href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;">Free Roofing Quotes</a></b></li>
		<li><a href="/definitions/">Roofing Definitions</a></li>
	    </ul>
	</li>
    <img src="{{asset('asset/images/nav/dotted_bar.jpg')}}" class="dottedbar">
    <li class="barheader left_toolbar_title" id="toolbar_related_title">
        Roof Shingles 
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
    
    <h1>What are Hail Ratings (Impact Resistance Ratings)?</h1>
    <a href="{{url('/roof/def')}}">More roofing definitions</a><br>
    <p>
        <a href="http://www.ul.com">Underwriters Laboratories Inc</a> (UL), an independent, for-profit company, has developed a 
        series of laboratory test to measure how well roofing materials resist hail.  These tests are 
        widely accepted by the roofing industry, and the results are widely quoted in industry promotional materials.
    </p>
    <div class="topleftarticle" style="transition: opacity 1s cubic-bezier(0.4, 0, 1, 1) 0s, width 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, height 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, margin-left 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, margin-right 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, padding-left 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, padding-right 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, border-left-width 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, border-right-width 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, margin-top 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, margin-bottom 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, padding-top 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, padding-bottom 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, border-top-width 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, border-bottom-width 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s; margin: 0px; padding: 0px; border-width: 0px;">
<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Roof Large Rectangle -->
<ins class="adsbygoogle" style="display: inline-block; width: 0px; height: 0px;" data-ad-client="ca-pub-9300874048195348" data-ad-slot="6517631847" data-adsbygoogle-status="done" data-ad-status="filled"><div id="aswift_1_host" style="border: none; height: 0px; width: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; transition: opacity 1s cubic-bezier(0.4, 0, 1, 1) 0s, width 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, height 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, margin-left 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, margin-right 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, padding-left 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, padding-right 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, border-left-width 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, border-right-width 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, margin-top 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, margin-bottom 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, padding-top 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, padding-bottom 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, border-top-width 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, border-bottom-width 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s; opacity: 0;" tabindex="0" title="Advertisement" aria-label="Advertisement"><iframe id="aswift_1" name="aswift_1" style="left: 0px; position: absolute; top: 0px; border: 0px; width: 0px; height: 0px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="0" height="0" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=280&amp;slotname=6517631847&amp;adk=3953784793&amp;adf=2544600062&amp;pi=t.ma~as.6517631847&amp;w=336&amp;lmt=1664391280&amp;format=336x280&amp;url=https%3A%2F%2Fwww.roof.info%2Fdefinitions%2Fhail_ratings.html&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1679989843488&amp;bpp=3&amp;bdt=685&amp;idt=183&amp;shv=r20230322&amp;mjsv=m202303210101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1679986049%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0&amp;nras=1&amp;correlator=5284443307212&amp;frm=20&amp;pv=1&amp;ga_vid=1947745170.1679989844&amp;ga_sid=1679989844&amp;ga_hid=1299743724&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=1&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=321&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44759876%2C44759927%2C44777876%2C44759842%2C31071755%2C31073015%2C31073098&amp;oid=2&amp;pvsid=584766419937574&amp;tmod=1421987603&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.roof.info%2Fdefinitions%2F&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7CleE%7C&amp;abl=CS&amp;pfx=0&amp;fu=0&amp;bc=31&amp;ifi=2&amp;uci=a!2&amp;fsb=1&amp;xpc=D5M3wJWIKq&amp;p=https%3A//www.roof.info&amp;dtd=190" data-google-container-id="a!2" data-google-query-id="CLei9-6R_v0CFRPI1QodlIkIKw" data-load-complete="true"></iframe></div></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
    <p>
        UL standard 2218 describes a series of tests which involve dropping steel balls from various heights onto 
        roofing materials, and then measuring whether the material cracks.  The roofing materials that show the 
        greatest resistance earn a Class 4 rating.  Those with the least resistance earn a Class 1 rating.
    </p>
    <p>
        Note, however, a few caveats:
        </p><ol>
            <li>Manufacturers report their hail ratings voluntarily -- thus you may not find hail ratings for
                shingles that don't perform well.</li>
            <li>While metal roofs are unlikely to crack during a hail storm, they may become permanently dented, and
                the hail ratings do not take this into account.</li>
            <li>Hail resistance tends to degrade over time with most roofing materials.</li>
        </ol>
    <p></p>
    <p>
        While hail can be a significant problem in some areas, few building codes require the use of impact resistant
        roofs.  If you're thinking about putting new shingles on your roof, call your home insurance
        company -- they may give you a discount on your insurance policy if you install impact resistant shingles.
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