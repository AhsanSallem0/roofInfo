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
<div id="content" class="content" style="height: auto !important;">
<div class="body_content" style="height: auto !important;">
	
	<h1>Roof Replacement Cost</h1>
	<p>How much does a roof replacement cost? The national average varies from around $3.00 to $7.50 per square foot for a typical asphalt shingle roof. The national average for a total home roof replacement is around $5,000 to $10,000.</p>
	<p>There are many factors that affect the cost of replacing a roof. The reasons causing the large variation in roof replacement costs are:</p>
	<ul>
	 	<li>Size and pitch of the roof</li>
	 	<li>Materials used</li>
	 	<li>Removal of old roofing</li>
	 	<li>Geographic location</li>
	 	<li>Code requirements</li>
	 	<li>Obstacles (skylights, chimney, plumbing pipes...)</li>
	 	<li>Contractor used</li>
	 	<li>Flashing and gutters</li>
	</ul>
	<div class="topleftarticle" style="margin: 0px; padding: 0px; border-width: 0px;">
<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Roof Large Rectangle -->
<ins class="adsbygoogle" style="display: inline-block; width: 0px; height: 0px;" data-ad-client="ca-pub-9300874048195348" data-ad-slot="6517631847" data-adsbygoogle-status="done" data-ad-status="unfilled"><div id="aswift_1_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 0px; width: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; opacity: 0;"><iframe id="aswift_1" name="aswift_1" style="left: 0px; position: absolute; top: 0px; border: 0px; width: 0px; height: 0px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="0" height="0" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=280&amp;slotname=6517631847&amp;adk=3953784793&amp;adf=2544600062&amp;pi=t.ma~as.6517631847&amp;w=336&amp;lmt=1664941544&amp;format=336x280&amp;url=https%3A%2F%2Fwww.roof.info%2Froof-replacement-cost.html&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1679998725183&amp;bpp=38&amp;bdt=187&amp;idt=242&amp;shv=r20230322&amp;mjsv=m202303210101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1679986049%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0&amp;nras=1&amp;correlator=1182002258233&amp;frm=20&amp;pv=1&amp;ga_vid=147616627.1679998725&amp;ga_sid=1679998725&amp;ga_hid=1200793008&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=1&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=537&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44759842%2C44777877%2C44759876%2C44759927%2C31073016%2C44772269&amp;oid=2&amp;pvsid=2317512313984602&amp;tmod=1045199903&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.roof.info%2F&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C0%2C0%2C1366%2C657&amp;vis=2&amp;rsz=%7C%7CleEr%7C&amp;abl=CS&amp;pfx=0&amp;fu=0&amp;bc=31&amp;ifi=2&amp;uci=a!2&amp;fsb=1&amp;xpc=2mThBfp4Ph&amp;p=https%3A//www.roof.info&amp;dtd=253" data-google-container-id="a!2" data-google-query-id="CKHAnfqy_v0CFRqVJwIdwJ8GdA" data-load-complete="true"></iframe></div></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
	<p>It is always a good idea to get at least three or four bids from different roofers to be sure they are in the same general area for price.  Be wary of any very high bids, but also of any very low bids. Most contractors will price roof replacement at around $3.50-$5.50 per square foot. That price range should include the removal and disposal of up to 2 layers of old shingles, installation of new underlayment, and ice-and-water shield at the eaves and valleys of the roof in accordance with local building code requirements. All the necessary building permit application expenses should also be included.</p>
	<h3>Measuring Your Roof</h3>
	<p>You can begin estimating your replacement cost by measuring your roof to find the total area in square feet. Alternatively, you can have a contractor do it. If you choose to do it yourself, measure the length and width of each plane and multiply the numbers. Add the totals from the different planes to find the total surface area of your roof. You will then need to subtract measurements for areas not requiring roofing such as skylights and chimneys.</p>
	<p>The pitch of the roof will also be needed. It is calculated by rise over run, the vertical measurement in inches over 12″ of horizontal measurement. A high pitched roof (7:12 or more) will be more dangerous to work on and will take more time to replace. This will likely make contractors charge a higher price due to the difficulty.</p>
	<h3>Materials</h3>
	<p>The type of materials used can greatly affect the cost of your replacement roof. Costs will vary be region, but an estimated cost of different roofing materials is below (a square is 100 sqft):</p>
	<table style="height: 233px;" width="353">
	<tbody>
	<tr>
	<td width="102"><strong>Material</strong></td>
	<td width="102"><strong>Price per Square</strong></td>
	</tr>
	<tr>
	<td width="102">Asphalt/Composition</td>
	<td width="102">$100 to $150</td>
	</tr>
	<tr>
	<td width="102">3D/Dimensional</td>
	<td width="102">$470</td>
	</tr>
	<tr>
	<td width="102">Cedar/Wood</td>
	<td width="102">$470</td>
	</tr>
	<tr>
	<td width="102">Metal</td>
	<td width="102">$500 to $1,800</td>
	</tr>
	<tr>
	<td width="102">Clay Tile</td>
	<td width="102">$600 to $800</td>
	</tr>
	<tr>
	<td width="102">Natural Slate</td>
	<td width="102">$800 to $1,600</td>
	</tr>
	<tr>
	<td width="102">Solar</td>
	<td width="102">$2,200</td>
	</tr>
	</tbody>
	</table>
	<p>There will be more variation within each category depending on the material's brand and warranty.</p>
	<h3>Removing Old Roofing</h3>
	<p>In most areas, it is acceptable to put the new roofing over the old material as long as there are not too many layers. However, this will decrease the life expectancy of your new materials and possibly void the warranty.</p>
	<p>Most building codes allow for 2 or more layers of asphalt shingles, but this will depend on the area where you live. Some homeowners choose to remove the old shingles themselves to save some money. That is a great idea, but be sure to do it correctly so you do not damage other roofing materials. Also, be sure to have a good plan for disposing of the old materials.</p>
	<h3>Geographic Location</h3>
	There are huge variations in cost based on where you live. For example, a new roof in Alabama will approximately $3.00 per sqft, while in California it will be $6.00 on average.<p></p>
	<h3>Contractor</h3>
	<p>You can save a lot of money if you are able to install your own roof. However, the vast majority of homeowners do not have the ability or the time to do so. Your choice of contractor is important not just for the cost, but also the quality. A higher price does not necessarily mean better quality.</p>
	<p>If you get multiple estimates, you will see a wide range of prices, probably varying several thousands of dollars. Typically, the larger established companies will charge a more. Newer companies and "weekend warrior" handymen will typically charge less. Be sure to check with friends who have had roofing work done to get their opinion on the roofer they used. You can also ask for some of their previous customers or check online to be sure the company does quality work.</p><div class="google-auto-placed ap_container" style="width: 100%; height: auto; clear: both; text-align: center;"><ins data-ad-format="auto" class="adsbygoogle adsbygoogle-noablate" data-ad-client="ca-pub-9300874048195348" data-adsbygoogle-status="done" style="display: block; margin: auto; background-color: transparent; height: 0px;" data-ad-status="unfilled"><div id="aswift_2_host" style="border: none; height: 0px; width: 936px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; opacity: 0;" tabindex="0" title="Advertisement" aria-label="Advertisement"><iframe id="aswift_2" name="aswift_2" style="left: 0px; position: absolute; top: 0px; border: 0px; width: 936px; height: 0px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="936" height="0" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=280&amp;adk=1643391969&amp;adf=4125235988&amp;pi=t.aa~a.415540099~i.41~rp.4&amp;w=936&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1664941544&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=2058001125&amp;ad_type=text_image&amp;format=936x280&amp;url=https%3A%2F%2Fwww.roof.info%2Froof-replacement-cost.html&amp;fwr=0&amp;pra=3&amp;rh=200&amp;rw=936&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;adsid=ChEI8KCKoQYQ78vWm-zJt8vNARI5AA-25JiRzsjTI8x5fGeC03fEK2D_wd41PQN5OyzFXBOHhiIsncZn_yg6SCqzNkULMteoZUVkb__i&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1679998725892&amp;bpp=3&amp;bdt=896&amp;idt=3&amp;shv=r20230322&amp;mjsv=m202303210101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1679986049%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0%2C336x280&amp;nras=2&amp;correlator=1182002258233&amp;frm=20&amp;pv=1&amp;ga_vid=147616627.1679998725&amp;ga_sid=1679998725&amp;ga_hid=1200793008&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=1&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=1949&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44759842%2C44777877%2C44759876%2C44759927%2C31073016%2C44772269&amp;oid=2&amp;pvsid=2317512313984602&amp;tmod=1045199903&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.roof.info%2F&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C0%2C0%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;jar=2023-03-27-20&amp;ifi=3&amp;uci=a!3&amp;btvi=1&amp;fsb=1&amp;xpc=pBWi8GaioG&amp;p=https%3A//www.roof.info&amp;dtd=11677" data-google-container-id="a!3" data-google-query-id="CJzZgoCz_v0CFUuQJwIdh_0PQg" data-load-complete="true"></iframe></div></ins></div>
	<p>On average, contractors' bids will reflect about 40% material and 60% installation costs. This is a general rule used by roofers, but not exact.</p>
	<h3>Flashing and Gutters</h3>
	<p>Roof replacement time is a perfect opportunity to inspect flashing and gutters.  If your flashing is peeling, corroded, or cracking, it could allow water to leak into your home. That would likely lead to water damage and mold before the problem was realized. Damaged flashing around skylights or chimneys can cost $200 to $500 to repair, although the material is normally around $5.00 per sqft.</p>
	<p>Failing gutters can lead to mold growth on the roof, as well as water spillage near your foundation. The water could pool there and cause mold and quicker deterioration of the foundation and walls.</p>
	<p>Gutter materials are generally inexpensive. A 10-foot piece of vinyl gutter will cost around $5.00 with the vinyl hangers costing under $3.00 each. End caps cost about $7.00 each. If you need a new downspout to guide the water, a 10-foot downspout pipe costs around $15.00. The elbow needed to send the water away from your foundation costs about $3.50, with a small extension at the bottom costing around $7.</p>
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