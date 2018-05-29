<?php
/**
 * Example of JSON data for calendar
 *
 * @package zabuto_calendar
 */

if (!empty($_REQUEST['year']) && !empty($_REQUEST['month'])) {
    $year = intval($_REQUEST['year']);
    $month = intval($_REQUEST['month']);
    $lastday = intval(strftime('%d', mktime(0, 0, 0, ($month == 12 ? 1 : $month + 1), 0, ($month == 12 ? $year + 1 : $year))));

    $dates = array();
    for ($i = 0; $i <= (rand(4, 10)); $i++) {
        $date = $year . '-' . str_pad($month, 2, '0', STR_PAD_LEFT) . '-' . str_pad(rand(1, $lastday), 2, '0', STR_PAD_LEFT);
        $dates[$i] = array(
            'date' => $date,
            'badge' => ($i & 1) ? true : false,
            'title' => $date . '',
            'body' => '<h3><a href="/clinic">General Hospital</a> <small>Public</small><a class="btn-bell1 float-right"><i class="fas fa-bell text-success"></i></a></h3> 
                    <p>462 First Avenue, <a href="/clinics">New York</a>, <a href="/clinics">NY</a>, <a href="/clinics">United States</a><br /><a class="btn-map" href="#" data-toggle="collapse" data-target="#showMap"><i class="fas fa-map-marker"></i> Show on map</a>
					<div class="collapse" id="showMap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d84016.36429915384!2d2.161754161251458!3d48.848458114630624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x47e67031f8c20147%3A0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris%2C+3+Avenue+Victoria%2C+75004+Paris%2C+Francia!3m2!1d48.856836099999995!2d2.3504327!5e0!3m2!1sen!2sru!4v1517149847463"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div><!--/.collapse-->
					</p>
                    <ul class="stiled-list">
                        <li>
                            <h4>First axamination</h4>
                            <div>at 8:00 AM office 22</div>
                            <div>Terapist <a href="/doctor">Smith John</a></div>
                            <p>Price <strong>1 MPT</strong></p>
                        </li>
                        <li>
                            <h4>Blood check</h4>
                            <div>at 8:30 AM office 144A</div>
                            <p>Price <strong>1 MPT</strong></p>
                        </li>
                        <li>
                            <h4>Radiology check</h4>
                            <div>at 9:00 AM office 55D</div>
                            <p>Price <strong>1 MPT</strong></p>
                        </li>
                    </ul>
                    <p>Total cost <strong>3 MPT</strong></p><div class="card">
                        <ul>
							<li>Transaction code <span id="transactionId">Ghhhsbb$hfhjaj77ghsFGGDa91PPvDa</span></li>
                			<li><a class="copy-link btn-copy1"><i class="far fa-copy"></i> Copy</a> / <a href="#" data-toggle="modal" data-target="#sorry">Check in blockchain explorer</a></li>
                        	<li>Transaction status <span class="text-info">In progress</span> <small class="float-right">confirmations 2/5</small></li> 
						</ul>
					</div><!--/.card-->',
            'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>',
        );

        if (!empty($_REQUEST['grade'])) {
            $dates[$i]['badge'] = false;
            $dates[$i]['classname'] = 'grade-' . rand(1, 4);
        }

        if (!empty($_REQUEST['action'])) {
            $dates[$i]['title'] = 'Action for ' . $date;
            $dates[$i]['body'] = '<p>The footer of this modal window consists of two buttons. One button to close the modal window without further action.</p>';
            $dates[$i]['body'] .= '<p>The other button [Go ahead!] fires myFunction(). The content for the footer was obtained with the AJAX request.</p>';
            $dates[$i]['body'] .= '<p>The ID needed for the function can be retrieved with jQuery: <code>dateId = $(this).closest(\'.modal\').attr(\'dateId\');</code></p>';
            $dates[$i]['body'] .= '<p>The second argument is true in this case, so the function can handle closing the modal window: <code>myFunction(dateId, true);</code></p>';
            $dates[$i]['footer'] = '
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="dateId = $(this).closest(\'.modal\').attr(\'dateId\'); myDateFunction(dateId, true);">Go ahead!</button>
            ';
        }
    }

    echo json_encode($dates);

} else {
    echo json_encode(array());
}
