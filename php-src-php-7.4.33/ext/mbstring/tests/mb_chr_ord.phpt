--TEST--
mb_chr() and mb_ord()
--SKIPIF--
<?php extension_loaded('mbstring') or die('skip mbstring not available'); ?>
--FILE--
<?php
ini_set('internal_encoding', 'utf-8');
for($ch = 1; $ch < 80000; $ch++) {
	$str = mb_chr($ch);
	if (false === $str) {
		echo "ERROR($ch)\n";
		continue;
	}
	if ($ch != mb_ord($str)) {
		echo "REAL ERROR($ch)\n";
	}
}
echo 'OK';
--EXPECT--
ERROR(55296)
ERROR(55297)
ERROR(55298)
ERROR(55299)
ERROR(55300)
ERROR(55301)
ERROR(55302)
ERROR(55303)
ERROR(55304)
ERROR(55305)
ERROR(55306)
ERROR(55307)
ERROR(55308)
ERROR(55309)
ERROR(55310)
ERROR(55311)
ERROR(55312)
ERROR(55313)
ERROR(55314)
ERROR(55315)
ERROR(55316)
ERROR(55317)
ERROR(55318)
ERROR(55319)
ERROR(55320)
ERROR(55321)
ERROR(55322)
ERROR(55323)
ERROR(55324)
ERROR(55325)
ERROR(55326)
ERROR(55327)
ERROR(55328)
ERROR(55329)
ERROR(55330)
ERROR(55331)
ERROR(55332)
ERROR(55333)
ERROR(55334)
ERROR(55335)
ERROR(55336)
ERROR(55337)
ERROR(55338)
ERROR(55339)
ERROR(55340)
ERROR(55341)
ERROR(55342)
ERROR(55343)
ERROR(55344)
ERROR(55345)
ERROR(55346)
ERROR(55347)
ERROR(55348)
ERROR(55349)
ERROR(55350)
ERROR(55351)
ERROR(55352)
ERROR(55353)
ERROR(55354)
ERROR(55355)
ERROR(55356)
ERROR(55357)
ERROR(55358)
ERROR(55359)
ERROR(55360)
ERROR(55361)
ERROR(55362)
ERROR(55363)
ERROR(55364)
ERROR(55365)
ERROR(55366)
ERROR(55367)
ERROR(55368)
ERROR(55369)
ERROR(55370)
ERROR(55371)
ERROR(55372)
ERROR(55373)
ERROR(55374)
ERROR(55375)
ERROR(55376)
ERROR(55377)
ERROR(55378)
ERROR(55379)
ERROR(55380)
ERROR(55381)
ERROR(55382)
ERROR(55383)
ERROR(55384)
ERROR(55385)
ERROR(55386)
ERROR(55387)
ERROR(55388)
ERROR(55389)
ERROR(55390)
ERROR(55391)
ERROR(55392)
ERROR(55393)
ERROR(55394)
ERROR(55395)
ERROR(55396)
ERROR(55397)
ERROR(55398)
ERROR(55399)
ERROR(55400)
ERROR(55401)
ERROR(55402)
ERROR(55403)
ERROR(55404)
ERROR(55405)
ERROR(55406)
ERROR(55407)
ERROR(55408)
ERROR(55409)
ERROR(55410)
ERROR(55411)
ERROR(55412)
ERROR(55413)
ERROR(55414)
ERROR(55415)
ERROR(55416)
ERROR(55417)
ERROR(55418)
ERROR(55419)
ERROR(55420)
ERROR(55421)
ERROR(55422)
ERROR(55423)
ERROR(55424)
ERROR(55425)
ERROR(55426)
ERROR(55427)
ERROR(55428)
ERROR(55429)
ERROR(55430)
ERROR(55431)
ERROR(55432)
ERROR(55433)
ERROR(55434)
ERROR(55435)
ERROR(55436)
ERROR(55437)
ERROR(55438)
ERROR(55439)
ERROR(55440)
ERROR(55441)
ERROR(55442)
ERROR(55443)
ERROR(55444)
ERROR(55445)
ERROR(55446)
ERROR(55447)
ERROR(55448)
ERROR(55449)
ERROR(55450)
ERROR(55451)
ERROR(55452)
ERROR(55453)
ERROR(55454)
ERROR(55455)
ERROR(55456)
ERROR(55457)
ERROR(55458)
ERROR(55459)
ERROR(55460)
ERROR(55461)
ERROR(55462)
ERROR(55463)
ERROR(55464)
ERROR(55465)
ERROR(55466)
ERROR(55467)
ERROR(55468)
ERROR(55469)
ERROR(55470)
ERROR(55471)
ERROR(55472)
ERROR(55473)
ERROR(55474)
ERROR(55475)
ERROR(55476)
ERROR(55477)
ERROR(55478)
ERROR(55479)
ERROR(55480)
ERROR(55481)
ERROR(55482)
ERROR(55483)
ERROR(55484)
ERROR(55485)
ERROR(55486)
ERROR(55487)
ERROR(55488)
ERROR(55489)
ERROR(55490)
ERROR(55491)
ERROR(55492)
ERROR(55493)
ERROR(55494)
ERROR(55495)
ERROR(55496)
ERROR(55497)
ERROR(55498)
ERROR(55499)
ERROR(55500)
ERROR(55501)
ERROR(55502)
ERROR(55503)
ERROR(55504)
ERROR(55505)
ERROR(55506)
ERROR(55507)
ERROR(55508)
ERROR(55509)
ERROR(55510)
ERROR(55511)
ERROR(55512)
ERROR(55513)
ERROR(55514)
ERROR(55515)
ERROR(55516)
ERROR(55517)
ERROR(55518)
ERROR(55519)
ERROR(55520)
ERROR(55521)
ERROR(55522)
ERROR(55523)
ERROR(55524)
ERROR(55525)
ERROR(55526)
ERROR(55527)
ERROR(55528)
ERROR(55529)
ERROR(55530)
ERROR(55531)
ERROR(55532)
ERROR(55533)
ERROR(55534)
ERROR(55535)
ERROR(55536)
ERROR(55537)
ERROR(55538)
ERROR(55539)
ERROR(55540)
ERROR(55541)
ERROR(55542)
ERROR(55543)
ERROR(55544)
ERROR(55545)
ERROR(55546)
ERROR(55547)
ERROR(55548)
ERROR(55549)
ERROR(55550)
ERROR(55551)
ERROR(55552)
ERROR(55553)
ERROR(55554)
ERROR(55555)
ERROR(55556)
ERROR(55557)
ERROR(55558)
ERROR(55559)
ERROR(55560)
ERROR(55561)
ERROR(55562)
ERROR(55563)
ERROR(55564)
ERROR(55565)
ERROR(55566)
ERROR(55567)
ERROR(55568)
ERROR(55569)
ERROR(55570)
ERROR(55571)
ERROR(55572)
ERROR(55573)
ERROR(55574)
ERROR(55575)
ERROR(55576)
ERROR(55577)
ERROR(55578)
ERROR(55579)
ERROR(55580)
ERROR(55581)
ERROR(55582)
ERROR(55583)
ERROR(55584)
ERROR(55585)
ERROR(55586)
ERROR(55587)
ERROR(55588)
ERROR(55589)
ERROR(55590)
ERROR(55591)
ERROR(55592)
ERROR(55593)
ERROR(55594)
ERROR(55595)
ERROR(55596)
ERROR(55597)
ERROR(55598)
ERROR(55599)
ERROR(55600)
ERROR(55601)
ERROR(55602)
ERROR(55603)
ERROR(55604)
ERROR(55605)
ERROR(55606)
ERROR(55607)
ERROR(55608)
ERROR(55609)
ERROR(55610)
ERROR(55611)
ERROR(55612)
ERROR(55613)
ERROR(55614)
ERROR(55615)
ERROR(55616)
ERROR(55617)
ERROR(55618)
ERROR(55619)
ERROR(55620)
ERROR(55621)
ERROR(55622)
ERROR(55623)
ERROR(55624)
ERROR(55625)
ERROR(55626)
ERROR(55627)
ERROR(55628)
ERROR(55629)
ERROR(55630)
ERROR(55631)
ERROR(55632)
ERROR(55633)
ERROR(55634)
ERROR(55635)
ERROR(55636)
ERROR(55637)
ERROR(55638)
ERROR(55639)
ERROR(55640)
ERROR(55641)
ERROR(55642)
ERROR(55643)
ERROR(55644)
ERROR(55645)
ERROR(55646)
ERROR(55647)
ERROR(55648)
ERROR(55649)
ERROR(55650)
ERROR(55651)
ERROR(55652)
ERROR(55653)
ERROR(55654)
ERROR(55655)
ERROR(55656)
ERROR(55657)
ERROR(55658)
ERROR(55659)
ERROR(55660)
ERROR(55661)
ERROR(55662)
ERROR(55663)
ERROR(55664)
ERROR(55665)
ERROR(55666)
ERROR(55667)
ERROR(55668)
ERROR(55669)
ERROR(55670)
ERROR(55671)
ERROR(55672)
ERROR(55673)
ERROR(55674)
ERROR(55675)
ERROR(55676)
ERROR(55677)
ERROR(55678)
ERROR(55679)
ERROR(55680)
ERROR(55681)
ERROR(55682)
ERROR(55683)
ERROR(55684)
ERROR(55685)
ERROR(55686)
ERROR(55687)
ERROR(55688)
ERROR(55689)
ERROR(55690)
ERROR(55691)
ERROR(55692)
ERROR(55693)
ERROR(55694)
ERROR(55695)
ERROR(55696)
ERROR(55697)
ERROR(55698)
ERROR(55699)
ERROR(55700)
ERROR(55701)
ERROR(55702)
ERROR(55703)
ERROR(55704)
ERROR(55705)
ERROR(55706)
ERROR(55707)
ERROR(55708)
ERROR(55709)
ERROR(55710)
ERROR(55711)
ERROR(55712)
ERROR(55713)
ERROR(55714)
ERROR(55715)
ERROR(55716)
ERROR(55717)
ERROR(55718)
ERROR(55719)
ERROR(55720)
ERROR(55721)
ERROR(55722)
ERROR(55723)
ERROR(55724)
ERROR(55725)
ERROR(55726)
ERROR(55727)
ERROR(55728)
ERROR(55729)
ERROR(55730)
ERROR(55731)
ERROR(55732)
ERROR(55733)
ERROR(55734)
ERROR(55735)
ERROR(55736)
ERROR(55737)
ERROR(55738)
ERROR(55739)
ERROR(55740)
ERROR(55741)
ERROR(55742)
ERROR(55743)
ERROR(55744)
ERROR(55745)
ERROR(55746)
ERROR(55747)
ERROR(55748)
ERROR(55749)
ERROR(55750)
ERROR(55751)
ERROR(55752)
ERROR(55753)
ERROR(55754)
ERROR(55755)
ERROR(55756)
ERROR(55757)
ERROR(55758)
ERROR(55759)
ERROR(55760)
ERROR(55761)
ERROR(55762)
ERROR(55763)
ERROR(55764)
ERROR(55765)
ERROR(55766)
ERROR(55767)
ERROR(55768)
ERROR(55769)
ERROR(55770)
ERROR(55771)
ERROR(55772)
ERROR(55773)
ERROR(55774)
ERROR(55775)
ERROR(55776)
ERROR(55777)
ERROR(55778)
ERROR(55779)
ERROR(55780)
ERROR(55781)
ERROR(55782)
ERROR(55783)
ERROR(55784)
ERROR(55785)
ERROR(55786)
ERROR(55787)
ERROR(55788)
ERROR(55789)
ERROR(55790)
ERROR(55791)
ERROR(55792)
ERROR(55793)
ERROR(55794)
ERROR(55795)
ERROR(55796)
ERROR(55797)
ERROR(55798)
ERROR(55799)
ERROR(55800)
ERROR(55801)
ERROR(55802)
ERROR(55803)
ERROR(55804)
ERROR(55805)
ERROR(55806)
ERROR(55807)
ERROR(55808)
ERROR(55809)
ERROR(55810)
ERROR(55811)
ERROR(55812)
ERROR(55813)
ERROR(55814)
ERROR(55815)
ERROR(55816)
ERROR(55817)
ERROR(55818)
ERROR(55819)
ERROR(55820)
ERROR(55821)
ERROR(55822)
ERROR(55823)
ERROR(55824)
ERROR(55825)
ERROR(55826)
ERROR(55827)
ERROR(55828)
ERROR(55829)
ERROR(55830)
ERROR(55831)
ERROR(55832)
ERROR(55833)
ERROR(55834)
ERROR(55835)
ERROR(55836)
ERROR(55837)
ERROR(55838)
ERROR(55839)
ERROR(55840)
ERROR(55841)
ERROR(55842)
ERROR(55843)
ERROR(55844)
ERROR(55845)
ERROR(55846)
ERROR(55847)
ERROR(55848)
ERROR(55849)
ERROR(55850)
ERROR(55851)
ERROR(55852)
ERROR(55853)
ERROR(55854)
ERROR(55855)
ERROR(55856)
ERROR(55857)
ERROR(55858)
ERROR(55859)
ERROR(55860)
ERROR(55861)
ERROR(55862)
ERROR(55863)
ERROR(55864)
ERROR(55865)
ERROR(55866)
ERROR(55867)
ERROR(55868)
ERROR(55869)
ERROR(55870)
ERROR(55871)
ERROR(55872)
ERROR(55873)
ERROR(55874)
ERROR(55875)
ERROR(55876)
ERROR(55877)
ERROR(55878)
ERROR(55879)
ERROR(55880)
ERROR(55881)
ERROR(55882)
ERROR(55883)
ERROR(55884)
ERROR(55885)
ERROR(55886)
ERROR(55887)
ERROR(55888)
ERROR(55889)
ERROR(55890)
ERROR(55891)
ERROR(55892)
ERROR(55893)
ERROR(55894)
ERROR(55895)
ERROR(55896)
ERROR(55897)
ERROR(55898)
ERROR(55899)
ERROR(55900)
ERROR(55901)
ERROR(55902)
ERROR(55903)
ERROR(55904)
ERROR(55905)
ERROR(55906)
ERROR(55907)
ERROR(55908)
ERROR(55909)
ERROR(55910)
ERROR(55911)
ERROR(55912)
ERROR(55913)
ERROR(55914)
ERROR(55915)
ERROR(55916)
ERROR(55917)
ERROR(55918)
ERROR(55919)
ERROR(55920)
ERROR(55921)
ERROR(55922)
ERROR(55923)
ERROR(55924)
ERROR(55925)
ERROR(55926)
ERROR(55927)
ERROR(55928)
ERROR(55929)
ERROR(55930)
ERROR(55931)
ERROR(55932)
ERROR(55933)
ERROR(55934)
ERROR(55935)
ERROR(55936)
ERROR(55937)
ERROR(55938)
ERROR(55939)
ERROR(55940)
ERROR(55941)
ERROR(55942)
ERROR(55943)
ERROR(55944)
ERROR(55945)
ERROR(55946)
ERROR(55947)
ERROR(55948)
ERROR(55949)
ERROR(55950)
ERROR(55951)
ERROR(55952)
ERROR(55953)
ERROR(55954)
ERROR(55955)
ERROR(55956)
ERROR(55957)
ERROR(55958)
ERROR(55959)
ERROR(55960)
ERROR(55961)
ERROR(55962)
ERROR(55963)
ERROR(55964)
ERROR(55965)
ERROR(55966)
ERROR(55967)
ERROR(55968)
ERROR(55969)
ERROR(55970)
ERROR(55971)
ERROR(55972)
ERROR(55973)
ERROR(55974)
ERROR(55975)
ERROR(55976)
ERROR(55977)
ERROR(55978)
ERROR(55979)
ERROR(55980)
ERROR(55981)
ERROR(55982)
ERROR(55983)
ERROR(55984)
ERROR(55985)
ERROR(55986)
ERROR(55987)
ERROR(55988)
ERROR(55989)
ERROR(55990)
ERROR(55991)
ERROR(55992)
ERROR(55993)
ERROR(55994)
ERROR(55995)
ERROR(55996)
ERROR(55997)
ERROR(55998)
ERROR(55999)
ERROR(56000)
ERROR(56001)
ERROR(56002)
ERROR(56003)
ERROR(56004)
ERROR(56005)
ERROR(56006)
ERROR(56007)
ERROR(56008)
ERROR(56009)
ERROR(56010)
ERROR(56011)
ERROR(56012)
ERROR(56013)
ERROR(56014)
ERROR(56015)
ERROR(56016)
ERROR(56017)
ERROR(56018)
ERROR(56019)
ERROR(56020)
ERROR(56021)
ERROR(56022)
ERROR(56023)
ERROR(56024)
ERROR(56025)
ERROR(56026)
ERROR(56027)
ERROR(56028)
ERROR(56029)
ERROR(56030)
ERROR(56031)
ERROR(56032)
ERROR(56033)
ERROR(56034)
ERROR(56035)
ERROR(56036)
ERROR(56037)
ERROR(56038)
ERROR(56039)
ERROR(56040)
ERROR(56041)
ERROR(56042)
ERROR(56043)
ERROR(56044)
ERROR(56045)
ERROR(56046)
ERROR(56047)
ERROR(56048)
ERROR(56049)
ERROR(56050)
ERROR(56051)
ERROR(56052)
ERROR(56053)
ERROR(56054)
ERROR(56055)
ERROR(56056)
ERROR(56057)
ERROR(56058)
ERROR(56059)
ERROR(56060)
ERROR(56061)
ERROR(56062)
ERROR(56063)
ERROR(56064)
ERROR(56065)
ERROR(56066)
ERROR(56067)
ERROR(56068)
ERROR(56069)
ERROR(56070)
ERROR(56071)
ERROR(56072)
ERROR(56073)
ERROR(56074)
ERROR(56075)
ERROR(56076)
ERROR(56077)
ERROR(56078)
ERROR(56079)
ERROR(56080)
ERROR(56081)
ERROR(56082)
ERROR(56083)
ERROR(56084)
ERROR(56085)
ERROR(56086)
ERROR(56087)
ERROR(56088)
ERROR(56089)
ERROR(56090)
ERROR(56091)
ERROR(56092)
ERROR(56093)
ERROR(56094)
ERROR(56095)
ERROR(56096)
ERROR(56097)
ERROR(56098)
ERROR(56099)
ERROR(56100)
ERROR(56101)
ERROR(56102)
ERROR(56103)
ERROR(56104)
ERROR(56105)
ERROR(56106)
ERROR(56107)
ERROR(56108)
ERROR(56109)
ERROR(56110)
ERROR(56111)
ERROR(56112)
ERROR(56113)
ERROR(56114)
ERROR(56115)
ERROR(56116)
ERROR(56117)
ERROR(56118)
ERROR(56119)
ERROR(56120)
ERROR(56121)
ERROR(56122)
ERROR(56123)
ERROR(56124)
ERROR(56125)
ERROR(56126)
ERROR(56127)
ERROR(56128)
ERROR(56129)
ERROR(56130)
ERROR(56131)
ERROR(56132)
ERROR(56133)
ERROR(56134)
ERROR(56135)
ERROR(56136)
ERROR(56137)
ERROR(56138)
ERROR(56139)
ERROR(56140)
ERROR(56141)
ERROR(56142)
ERROR(56143)
ERROR(56144)
ERROR(56145)
ERROR(56146)
ERROR(56147)
ERROR(56148)
ERROR(56149)
ERROR(56150)
ERROR(56151)
ERROR(56152)
ERROR(56153)
ERROR(56154)
ERROR(56155)
ERROR(56156)
ERROR(56157)
ERROR(56158)
ERROR(56159)
ERROR(56160)
ERROR(56161)
ERROR(56162)
ERROR(56163)
ERROR(56164)
ERROR(56165)
ERROR(56166)
ERROR(56167)
ERROR(56168)
ERROR(56169)
ERROR(56170)
ERROR(56171)
ERROR(56172)
ERROR(56173)
ERROR(56174)
ERROR(56175)
ERROR(56176)
ERROR(56177)
ERROR(56178)
ERROR(56179)
ERROR(56180)
ERROR(56181)
ERROR(56182)
ERROR(56183)
ERROR(56184)
ERROR(56185)
ERROR(56186)
ERROR(56187)
ERROR(56188)
ERROR(56189)
ERROR(56190)
ERROR(56191)
ERROR(56192)
ERROR(56193)
ERROR(56194)
ERROR(56195)
ERROR(56196)
ERROR(56197)
ERROR(56198)
ERROR(56199)
ERROR(56200)
ERROR(56201)
ERROR(56202)
ERROR(56203)
ERROR(56204)
ERROR(56205)
ERROR(56206)
ERROR(56207)
ERROR(56208)
ERROR(56209)
ERROR(56210)
ERROR(56211)
ERROR(56212)
ERROR(56213)
ERROR(56214)
ERROR(56215)
ERROR(56216)
ERROR(56217)
ERROR(56218)
ERROR(56219)
ERROR(56220)
ERROR(56221)
ERROR(56222)
ERROR(56223)
ERROR(56224)
ERROR(56225)
ERROR(56226)
ERROR(56227)
ERROR(56228)
ERROR(56229)
ERROR(56230)
ERROR(56231)
ERROR(56232)
ERROR(56233)
ERROR(56234)
ERROR(56235)
ERROR(56236)
ERROR(56237)
ERROR(56238)
ERROR(56239)
ERROR(56240)
ERROR(56241)
ERROR(56242)
ERROR(56243)
ERROR(56244)
ERROR(56245)
ERROR(56246)
ERROR(56247)
ERROR(56248)
ERROR(56249)
ERROR(56250)
ERROR(56251)
ERROR(56252)
ERROR(56253)
ERROR(56254)
ERROR(56255)
ERROR(56256)
ERROR(56257)
ERROR(56258)
ERROR(56259)
ERROR(56260)
ERROR(56261)
ERROR(56262)
ERROR(56263)
ERROR(56264)
ERROR(56265)
ERROR(56266)
ERROR(56267)
ERROR(56268)
ERROR(56269)
ERROR(56270)
ERROR(56271)
ERROR(56272)
ERROR(56273)
ERROR(56274)
ERROR(56275)
ERROR(56276)
ERROR(56277)
ERROR(56278)
ERROR(56279)
ERROR(56280)
ERROR(56281)
ERROR(56282)
ERROR(56283)
ERROR(56284)
ERROR(56285)
ERROR(56286)
ERROR(56287)
ERROR(56288)
ERROR(56289)
ERROR(56290)
ERROR(56291)
ERROR(56292)
ERROR(56293)
ERROR(56294)
ERROR(56295)
ERROR(56296)
ERROR(56297)
ERROR(56298)
ERROR(56299)
ERROR(56300)
ERROR(56301)
ERROR(56302)
ERROR(56303)
ERROR(56304)
ERROR(56305)
ERROR(56306)
ERROR(56307)
ERROR(56308)
ERROR(56309)
ERROR(56310)
ERROR(56311)
ERROR(56312)
ERROR(56313)
ERROR(56314)
ERROR(56315)
ERROR(56316)
ERROR(56317)
ERROR(56318)
ERROR(56319)
ERROR(56320)
ERROR(56321)
ERROR(56322)
ERROR(56323)
ERROR(56324)
ERROR(56325)
ERROR(56326)
ERROR(56327)
ERROR(56328)
ERROR(56329)
ERROR(56330)
ERROR(56331)
ERROR(56332)
ERROR(56333)
ERROR(56334)
ERROR(56335)
ERROR(56336)
ERROR(56337)
ERROR(56338)
ERROR(56339)
ERROR(56340)
ERROR(56341)
ERROR(56342)
ERROR(56343)
ERROR(56344)
ERROR(56345)
ERROR(56346)
ERROR(56347)
ERROR(56348)
ERROR(56349)
ERROR(56350)
ERROR(56351)
ERROR(56352)
ERROR(56353)
ERROR(56354)
ERROR(56355)
ERROR(56356)
ERROR(56357)
ERROR(56358)
ERROR(56359)
ERROR(56360)
ERROR(56361)
ERROR(56362)
ERROR(56363)
ERROR(56364)
ERROR(56365)
ERROR(56366)
ERROR(56367)
ERROR(56368)
ERROR(56369)
ERROR(56370)
ERROR(56371)
ERROR(56372)
ERROR(56373)
ERROR(56374)
ERROR(56375)
ERROR(56376)
ERROR(56377)
ERROR(56378)
ERROR(56379)
ERROR(56380)
ERROR(56381)
ERROR(56382)
ERROR(56383)
ERROR(56384)
ERROR(56385)
ERROR(56386)
ERROR(56387)
ERROR(56388)
ERROR(56389)
ERROR(56390)
ERROR(56391)
ERROR(56392)
ERROR(56393)
ERROR(56394)
ERROR(56395)
ERROR(56396)
ERROR(56397)
ERROR(56398)
ERROR(56399)
ERROR(56400)
ERROR(56401)
ERROR(56402)
ERROR(56403)
ERROR(56404)
ERROR(56405)
ERROR(56406)
ERROR(56407)
ERROR(56408)
ERROR(56409)
ERROR(56410)
ERROR(56411)
ERROR(56412)
ERROR(56413)
ERROR(56414)
ERROR(56415)
ERROR(56416)
ERROR(56417)
ERROR(56418)
ERROR(56419)
ERROR(56420)
ERROR(56421)
ERROR(56422)
ERROR(56423)
ERROR(56424)
ERROR(56425)
ERROR(56426)
ERROR(56427)
ERROR(56428)
ERROR(56429)
ERROR(56430)
ERROR(56431)
ERROR(56432)
ERROR(56433)
ERROR(56434)
ERROR(56435)
ERROR(56436)
ERROR(56437)
ERROR(56438)
ERROR(56439)
ERROR(56440)
ERROR(56441)
ERROR(56442)
ERROR(56443)
ERROR(56444)
ERROR(56445)
ERROR(56446)
ERROR(56447)
ERROR(56448)
ERROR(56449)
ERROR(56450)
ERROR(56451)
ERROR(56452)
ERROR(56453)
ERROR(56454)
ERROR(56455)
ERROR(56456)
ERROR(56457)
ERROR(56458)
ERROR(56459)
ERROR(56460)
ERROR(56461)
ERROR(56462)
ERROR(56463)
ERROR(56464)
ERROR(56465)
ERROR(56466)
ERROR(56467)
ERROR(56468)
ERROR(56469)
ERROR(56470)
ERROR(56471)
ERROR(56472)
ERROR(56473)
ERROR(56474)
ERROR(56475)
ERROR(56476)
ERROR(56477)
ERROR(56478)
ERROR(56479)
ERROR(56480)
ERROR(56481)
ERROR(56482)
ERROR(56483)
ERROR(56484)
ERROR(56485)
ERROR(56486)
ERROR(56487)
ERROR(56488)
ERROR(56489)
ERROR(56490)
ERROR(56491)
ERROR(56492)
ERROR(56493)
ERROR(56494)
ERROR(56495)
ERROR(56496)
ERROR(56497)
ERROR(56498)
ERROR(56499)
ERROR(56500)
ERROR(56501)
ERROR(56502)
ERROR(56503)
ERROR(56504)
ERROR(56505)
ERROR(56506)
ERROR(56507)
ERROR(56508)
ERROR(56509)
ERROR(56510)
ERROR(56511)
ERROR(56512)
ERROR(56513)
ERROR(56514)
ERROR(56515)
ERROR(56516)
ERROR(56517)
ERROR(56518)
ERROR(56519)
ERROR(56520)
ERROR(56521)
ERROR(56522)
ERROR(56523)
ERROR(56524)
ERROR(56525)
ERROR(56526)
ERROR(56527)
ERROR(56528)
ERROR(56529)
ERROR(56530)
ERROR(56531)
ERROR(56532)
ERROR(56533)
ERROR(56534)
ERROR(56535)
ERROR(56536)
ERROR(56537)
ERROR(56538)
ERROR(56539)
ERROR(56540)
ERROR(56541)
ERROR(56542)
ERROR(56543)
ERROR(56544)
ERROR(56545)
ERROR(56546)
ERROR(56547)
ERROR(56548)
ERROR(56549)
ERROR(56550)
ERROR(56551)
ERROR(56552)
ERROR(56553)
ERROR(56554)
ERROR(56555)
ERROR(56556)
ERROR(56557)
ERROR(56558)
ERROR(56559)
ERROR(56560)
ERROR(56561)
ERROR(56562)
ERROR(56563)
ERROR(56564)
ERROR(56565)
ERROR(56566)
ERROR(56567)
ERROR(56568)
ERROR(56569)
ERROR(56570)
ERROR(56571)
ERROR(56572)
ERROR(56573)
ERROR(56574)
ERROR(56575)
ERROR(56576)
ERROR(56577)
ERROR(56578)
ERROR(56579)
ERROR(56580)
ERROR(56581)
ERROR(56582)
ERROR(56583)
ERROR(56584)
ERROR(56585)
ERROR(56586)
ERROR(56587)
ERROR(56588)
ERROR(56589)
ERROR(56590)
ERROR(56591)
ERROR(56592)
ERROR(56593)
ERROR(56594)
ERROR(56595)
ERROR(56596)
ERROR(56597)
ERROR(56598)
ERROR(56599)
ERROR(56600)
ERROR(56601)
ERROR(56602)
ERROR(56603)
ERROR(56604)
ERROR(56605)
ERROR(56606)
ERROR(56607)
ERROR(56608)
ERROR(56609)
ERROR(56610)
ERROR(56611)
ERROR(56612)
ERROR(56613)
ERROR(56614)
ERROR(56615)
ERROR(56616)
ERROR(56617)
ERROR(56618)
ERROR(56619)
ERROR(56620)
ERROR(56621)
ERROR(56622)
ERROR(56623)
ERROR(56624)
ERROR(56625)
ERROR(56626)
ERROR(56627)
ERROR(56628)
ERROR(56629)
ERROR(56630)
ERROR(56631)
ERROR(56632)
ERROR(56633)
ERROR(56634)
ERROR(56635)
ERROR(56636)
ERROR(56637)
ERROR(56638)
ERROR(56639)
ERROR(56640)
ERROR(56641)
ERROR(56642)
ERROR(56643)
ERROR(56644)
ERROR(56645)
ERROR(56646)
ERROR(56647)
ERROR(56648)
ERROR(56649)
ERROR(56650)
ERROR(56651)
ERROR(56652)
ERROR(56653)
ERROR(56654)
ERROR(56655)
ERROR(56656)
ERROR(56657)
ERROR(56658)
ERROR(56659)
ERROR(56660)
ERROR(56661)
ERROR(56662)
ERROR(56663)
ERROR(56664)
ERROR(56665)
ERROR(56666)
ERROR(56667)
ERROR(56668)
ERROR(56669)
ERROR(56670)
ERROR(56671)
ERROR(56672)
ERROR(56673)
ERROR(56674)
ERROR(56675)
ERROR(56676)
ERROR(56677)
ERROR(56678)
ERROR(56679)
ERROR(56680)
ERROR(56681)
ERROR(56682)
ERROR(56683)
ERROR(56684)
ERROR(56685)
ERROR(56686)
ERROR(56687)
ERROR(56688)
ERROR(56689)
ERROR(56690)
ERROR(56691)
ERROR(56692)
ERROR(56693)
ERROR(56694)
ERROR(56695)
ERROR(56696)
ERROR(56697)
ERROR(56698)
ERROR(56699)
ERROR(56700)
ERROR(56701)
ERROR(56702)
ERROR(56703)
ERROR(56704)
ERROR(56705)
ERROR(56706)
ERROR(56707)
ERROR(56708)
ERROR(56709)
ERROR(56710)
ERROR(56711)
ERROR(56712)
ERROR(56713)
ERROR(56714)
ERROR(56715)
ERROR(56716)
ERROR(56717)
ERROR(56718)
ERROR(56719)
ERROR(56720)
ERROR(56721)
ERROR(56722)
ERROR(56723)
ERROR(56724)
ERROR(56725)
ERROR(56726)
ERROR(56727)
ERROR(56728)
ERROR(56729)
ERROR(56730)
ERROR(56731)
ERROR(56732)
ERROR(56733)
ERROR(56734)
ERROR(56735)
ERROR(56736)
ERROR(56737)
ERROR(56738)
ERROR(56739)
ERROR(56740)
ERROR(56741)
ERROR(56742)
ERROR(56743)
ERROR(56744)
ERROR(56745)
ERROR(56746)
ERROR(56747)
ERROR(56748)
ERROR(56749)
ERROR(56750)
ERROR(56751)
ERROR(56752)
ERROR(56753)
ERROR(56754)
ERROR(56755)
ERROR(56756)
ERROR(56757)
ERROR(56758)
ERROR(56759)
ERROR(56760)
ERROR(56761)
ERROR(56762)
ERROR(56763)
ERROR(56764)
ERROR(56765)
ERROR(56766)
ERROR(56767)
ERROR(56768)
ERROR(56769)
ERROR(56770)
ERROR(56771)
ERROR(56772)
ERROR(56773)
ERROR(56774)
ERROR(56775)
ERROR(56776)
ERROR(56777)
ERROR(56778)
ERROR(56779)
ERROR(56780)
ERROR(56781)
ERROR(56782)
ERROR(56783)
ERROR(56784)
ERROR(56785)
ERROR(56786)
ERROR(56787)
ERROR(56788)
ERROR(56789)
ERROR(56790)
ERROR(56791)
ERROR(56792)
ERROR(56793)
ERROR(56794)
ERROR(56795)
ERROR(56796)
ERROR(56797)
ERROR(56798)
ERROR(56799)
ERROR(56800)
ERROR(56801)
ERROR(56802)
ERROR(56803)
ERROR(56804)
ERROR(56805)
ERROR(56806)
ERROR(56807)
ERROR(56808)
ERROR(56809)
ERROR(56810)
ERROR(56811)
ERROR(56812)
ERROR(56813)
ERROR(56814)
ERROR(56815)
ERROR(56816)
ERROR(56817)
ERROR(56818)
ERROR(56819)
ERROR(56820)
ERROR(56821)
ERROR(56822)
ERROR(56823)
ERROR(56824)
ERROR(56825)
ERROR(56826)
ERROR(56827)
ERROR(56828)
ERROR(56829)
ERROR(56830)
ERROR(56831)
ERROR(56832)
ERROR(56833)
ERROR(56834)
ERROR(56835)
ERROR(56836)
ERROR(56837)
ERROR(56838)
ERROR(56839)
ERROR(56840)
ERROR(56841)
ERROR(56842)
ERROR(56843)
ERROR(56844)
ERROR(56845)
ERROR(56846)
ERROR(56847)
ERROR(56848)
ERROR(56849)
ERROR(56850)
ERROR(56851)
ERROR(56852)
ERROR(56853)
ERROR(56854)
ERROR(56855)
ERROR(56856)
ERROR(56857)
ERROR(56858)
ERROR(56859)
ERROR(56860)
ERROR(56861)
ERROR(56862)
ERROR(56863)
ERROR(56864)
ERROR(56865)
ERROR(56866)
ERROR(56867)
ERROR(56868)
ERROR(56869)
ERROR(56870)
ERROR(56871)
ERROR(56872)
ERROR(56873)
ERROR(56874)
ERROR(56875)
ERROR(56876)
ERROR(56877)
ERROR(56878)
ERROR(56879)
ERROR(56880)
ERROR(56881)
ERROR(56882)
ERROR(56883)
ERROR(56884)
ERROR(56885)
ERROR(56886)
ERROR(56887)
ERROR(56888)
ERROR(56889)
ERROR(56890)
ERROR(56891)
ERROR(56892)
ERROR(56893)
ERROR(56894)
ERROR(56895)
ERROR(56896)
ERROR(56897)
ERROR(56898)
ERROR(56899)
ERROR(56900)
ERROR(56901)
ERROR(56902)
ERROR(56903)
ERROR(56904)
ERROR(56905)
ERROR(56906)
ERROR(56907)
ERROR(56908)
ERROR(56909)
ERROR(56910)
ERROR(56911)
ERROR(56912)
ERROR(56913)
ERROR(56914)
ERROR(56915)
ERROR(56916)
ERROR(56917)
ERROR(56918)
ERROR(56919)
ERROR(56920)
ERROR(56921)
ERROR(56922)
ERROR(56923)
ERROR(56924)
ERROR(56925)
ERROR(56926)
ERROR(56927)
ERROR(56928)
ERROR(56929)
ERROR(56930)
ERROR(56931)
ERROR(56932)
ERROR(56933)
ERROR(56934)
ERROR(56935)
ERROR(56936)
ERROR(56937)
ERROR(56938)
ERROR(56939)
ERROR(56940)
ERROR(56941)
ERROR(56942)
ERROR(56943)
ERROR(56944)
ERROR(56945)
ERROR(56946)
ERROR(56947)
ERROR(56948)
ERROR(56949)
ERROR(56950)
ERROR(56951)
ERROR(56952)
ERROR(56953)
ERROR(56954)
ERROR(56955)
ERROR(56956)
ERROR(56957)
ERROR(56958)
ERROR(56959)
ERROR(56960)
ERROR(56961)
ERROR(56962)
ERROR(56963)
ERROR(56964)
ERROR(56965)
ERROR(56966)
ERROR(56967)
ERROR(56968)
ERROR(56969)
ERROR(56970)
ERROR(56971)
ERROR(56972)
ERROR(56973)
ERROR(56974)
ERROR(56975)
ERROR(56976)
ERROR(56977)
ERROR(56978)
ERROR(56979)
ERROR(56980)
ERROR(56981)
ERROR(56982)
ERROR(56983)
ERROR(56984)
ERROR(56985)
ERROR(56986)
ERROR(56987)
ERROR(56988)
ERROR(56989)
ERROR(56990)
ERROR(56991)
ERROR(56992)
ERROR(56993)
ERROR(56994)
ERROR(56995)
ERROR(56996)
ERROR(56997)
ERROR(56998)
ERROR(56999)
ERROR(57000)
ERROR(57001)
ERROR(57002)
ERROR(57003)
ERROR(57004)
ERROR(57005)
ERROR(57006)
ERROR(57007)
ERROR(57008)
ERROR(57009)
ERROR(57010)
ERROR(57011)
ERROR(57012)
ERROR(57013)
ERROR(57014)
ERROR(57015)
ERROR(57016)
ERROR(57017)
ERROR(57018)
ERROR(57019)
ERROR(57020)
ERROR(57021)
ERROR(57022)
ERROR(57023)
ERROR(57024)
ERROR(57025)
ERROR(57026)
ERROR(57027)
ERROR(57028)
ERROR(57029)
ERROR(57030)
ERROR(57031)
ERROR(57032)
ERROR(57033)
ERROR(57034)
ERROR(57035)
ERROR(57036)
ERROR(57037)
ERROR(57038)
ERROR(57039)
ERROR(57040)
ERROR(57041)
ERROR(57042)
ERROR(57043)
ERROR(57044)
ERROR(57045)
ERROR(57046)
ERROR(57047)
ERROR(57048)
ERROR(57049)
ERROR(57050)
ERROR(57051)
ERROR(57052)
ERROR(57053)
ERROR(57054)
ERROR(57055)
ERROR(57056)
ERROR(57057)
ERROR(57058)
ERROR(57059)
ERROR(57060)
ERROR(57061)
ERROR(57062)
ERROR(57063)
ERROR(57064)
ERROR(57065)
ERROR(57066)
ERROR(57067)
ERROR(57068)
ERROR(57069)
ERROR(57070)
ERROR(57071)
ERROR(57072)
ERROR(57073)
ERROR(57074)
ERROR(57075)
ERROR(57076)
ERROR(57077)
ERROR(57078)
ERROR(57079)
ERROR(57080)
ERROR(57081)
ERROR(57082)
ERROR(57083)
ERROR(57084)
ERROR(57085)
ERROR(57086)
ERROR(57087)
ERROR(57088)
ERROR(57089)
ERROR(57090)
ERROR(57091)
ERROR(57092)
ERROR(57093)
ERROR(57094)
ERROR(57095)
ERROR(57096)
ERROR(57097)
ERROR(57098)
ERROR(57099)
ERROR(57100)
ERROR(57101)
ERROR(57102)
ERROR(57103)
ERROR(57104)
ERROR(57105)
ERROR(57106)
ERROR(57107)
ERROR(57108)
ERROR(57109)
ERROR(57110)
ERROR(57111)
ERROR(57112)
ERROR(57113)
ERROR(57114)
ERROR(57115)
ERROR(57116)
ERROR(57117)
ERROR(57118)
ERROR(57119)
ERROR(57120)
ERROR(57121)
ERROR(57122)
ERROR(57123)
ERROR(57124)
ERROR(57125)
ERROR(57126)
ERROR(57127)
ERROR(57128)
ERROR(57129)
ERROR(57130)
ERROR(57131)
ERROR(57132)
ERROR(57133)
ERROR(57134)
ERROR(57135)
ERROR(57136)
ERROR(57137)
ERROR(57138)
ERROR(57139)
ERROR(57140)
ERROR(57141)
ERROR(57142)
ERROR(57143)
ERROR(57144)
ERROR(57145)
ERROR(57146)
ERROR(57147)
ERROR(57148)
ERROR(57149)
ERROR(57150)
ERROR(57151)
ERROR(57152)
ERROR(57153)
ERROR(57154)
ERROR(57155)
ERROR(57156)
ERROR(57157)
ERROR(57158)
ERROR(57159)
ERROR(57160)
ERROR(57161)
ERROR(57162)
ERROR(57163)
ERROR(57164)
ERROR(57165)
ERROR(57166)
ERROR(57167)
ERROR(57168)
ERROR(57169)
ERROR(57170)
ERROR(57171)
ERROR(57172)
ERROR(57173)
ERROR(57174)
ERROR(57175)
ERROR(57176)
ERROR(57177)
ERROR(57178)
ERROR(57179)
ERROR(57180)
ERROR(57181)
ERROR(57182)
ERROR(57183)
ERROR(57184)
ERROR(57185)
ERROR(57186)
ERROR(57187)
ERROR(57188)
ERROR(57189)
ERROR(57190)
ERROR(57191)
ERROR(57192)
ERROR(57193)
ERROR(57194)
ERROR(57195)
ERROR(57196)
ERROR(57197)
ERROR(57198)
ERROR(57199)
ERROR(57200)
ERROR(57201)
ERROR(57202)
ERROR(57203)
ERROR(57204)
ERROR(57205)
ERROR(57206)
ERROR(57207)
ERROR(57208)
ERROR(57209)
ERROR(57210)
ERROR(57211)
ERROR(57212)
ERROR(57213)
ERROR(57214)
ERROR(57215)
ERROR(57216)
ERROR(57217)
ERROR(57218)
ERROR(57219)
ERROR(57220)
ERROR(57221)
ERROR(57222)
ERROR(57223)
ERROR(57224)
ERROR(57225)
ERROR(57226)
ERROR(57227)
ERROR(57228)
ERROR(57229)
ERROR(57230)
ERROR(57231)
ERROR(57232)
ERROR(57233)
ERROR(57234)
ERROR(57235)
ERROR(57236)
ERROR(57237)
ERROR(57238)
ERROR(57239)
ERROR(57240)
ERROR(57241)
ERROR(57242)
ERROR(57243)
ERROR(57244)
ERROR(57245)
ERROR(57246)
ERROR(57247)
ERROR(57248)
ERROR(57249)
ERROR(57250)
ERROR(57251)
ERROR(57252)
ERROR(57253)
ERROR(57254)
ERROR(57255)
ERROR(57256)
ERROR(57257)
ERROR(57258)
ERROR(57259)
ERROR(57260)
ERROR(57261)
ERROR(57262)
ERROR(57263)
ERROR(57264)
ERROR(57265)
ERROR(57266)
ERROR(57267)
ERROR(57268)
ERROR(57269)
ERROR(57270)
ERROR(57271)
ERROR(57272)
ERROR(57273)
ERROR(57274)
ERROR(57275)
ERROR(57276)
ERROR(57277)
ERROR(57278)
ERROR(57279)
ERROR(57280)
ERROR(57281)
ERROR(57282)
ERROR(57283)
ERROR(57284)
ERROR(57285)
ERROR(57286)
ERROR(57287)
ERROR(57288)
ERROR(57289)
ERROR(57290)
ERROR(57291)
ERROR(57292)
ERROR(57293)
ERROR(57294)
ERROR(57295)
ERROR(57296)
ERROR(57297)
ERROR(57298)
ERROR(57299)
ERROR(57300)
ERROR(57301)
ERROR(57302)
ERROR(57303)
ERROR(57304)
ERROR(57305)
ERROR(57306)
ERROR(57307)
ERROR(57308)
ERROR(57309)
ERROR(57310)
ERROR(57311)
ERROR(57312)
ERROR(57313)
ERROR(57314)
ERROR(57315)
ERROR(57316)
ERROR(57317)
ERROR(57318)
ERROR(57319)
ERROR(57320)
ERROR(57321)
ERROR(57322)
ERROR(57323)
ERROR(57324)
ERROR(57325)
ERROR(57326)
ERROR(57327)
ERROR(57328)
ERROR(57329)
ERROR(57330)
ERROR(57331)
ERROR(57332)
ERROR(57333)
ERROR(57334)
ERROR(57335)
ERROR(57336)
ERROR(57337)
ERROR(57338)
ERROR(57339)
ERROR(57340)
ERROR(57341)
ERROR(57342)
ERROR(57343)
OK
