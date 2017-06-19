<?php
$list_all_question  ="SELECT `qid` , `quest` ,`answer` ,`op1`,`op2`,`op3` ,`op4` FROM question";
$ifQuestion = $conn->query($list_all_question);
if($ifQuestion)
{
	while($q = $ifQuestion->fetch_assoc())
	{
		echo '<div class="question_section col-md-12 col-sm-12 col-xs-12" >
				<div class="team" id="'.$q['qid'].'" >
				  <br>
				   <h4 align="center" style="text-transform: lowercase !important;">'. $q['quest'].'</h4>
					<p class="small">Select Correct Option from following list</p>
					<p><i class="fa fa-arrow-down animated pulse infinite" aria-hidden="true"></i></p>
					<hr>
					
					<p id="options">
					  <form id="question_form">
					   <select name="q'.$q['qid'].'" id="q'.$q['qid'].'" class="form-control">
							<option>-Select Your Answer-</option>
							<option value="a">'.$q['op1'].'</option>
							<option value="b">'.$q['op2'].'</option>
							<option value="c">'.$q['op3'].'</option>
							<option value="d">'.$q['op4'].'</option>
					   </select>
					   
					   <button type="button" id="save_answer"  name="save_answer" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="I\'m Done Now ">Save  My Answers</button>                                       
					 </form>
					</p>
				</div>
			  </div>';
	}
}
?>					  
