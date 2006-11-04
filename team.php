
<div id="maincontent">
	<div id="midcolumn">
		<!--	<div align="center"><h1>$pageTitle</h1></div> -->
		<p>Listing ordered by number of bugs resolved. <i>Last updated: 2006-10-19</i></p>
		<div class="homeitem3col">
		    <h3>Committers</h3>
			<ul>
				<li>
                    <a href="http://www.composent.com">Scott Lewis</a>, project lead <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=ECF&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=CLOSED&emailassigned_to1=1&emailreporter1=1&emailqa_contact1=1&emailcc1=1&emaillongdesc1=1&emailtype1=substring&email1=slewis&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
                    [bugs resolved]</a>
                </li>
				<li>
                	Boris Bokowski
                </li>
				<li>
					<a href="http://mea-bloga.blogspot.com/">Chris Aniszczyk</a>
				</li>
				<li>
                	Ken Gilmer
                </li>
                <li>
                	<a href="http://www.seaquest.com">Pete Mackie</a>
                </li>
                <li>
                	Peter Nehrer
                </li>
                <li>
                	Pierre-Henry Perret
                </li>
			</ul> 
		</div>

		<div class="homeitem3col">
			<h3>Contributors</h3>
			<ul>
				<li>
				Remy Suen
				</li>
				<li>
				Mustafa Isik
				</li>
				<li>
				Marcello Mayworm 
				</li>
				<li>
				Willian Mitsuda <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=wmitsuda%40gmail.com&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				[9 resolved]</a>
				</li>
				<li>
				Nathan Hapke <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=nhapke%40cs.ubc.ca&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				[6 resolved]</a>
				</li>
				<li>
				Raphael Ackermann <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=raphael.ackermann%40gmail.com&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				[5 resolved</a>
				</li>
				<li>
				Gunnar Wagenknecht <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Mylar&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=gunnar%40wagenknecht.org&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				[3 resolved]</a>
				</li>
			</ul> 
		</div>
		   <div class="homeitem3col">
			<h3>Past Committers & Contributors</h3>
			<ul>
				<li> 
				Paul Trevithick
				</li>
			</ul> 
		</div>

		<p>&nbsp;</p>
		<p>&nbsp;</p>

	</div> 
	
	<div id="rightcolumn">
		$commonside
	</div>
	
	<p>&nbsp;</p>
	<p>&nbsp;</p>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>