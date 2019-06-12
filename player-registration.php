<?php require_once 'assets/templates/header.php'; ?>
<?php require_once 'assets/templates/nav.php'; ?>
<form action="request-handler.php" method="post" id="frm_player_profile">
<div id="alert_message"></div>
<input type="hidden" name="form_name" value="frm_player_profile">
<!-- <div class="panel form-heading">
  <div class="panel-heading">
    <div class="panel-title">PLAYER'S REGISTRATION FORM</div>
  </div>
</div> -->
<!-- <div class="panel panel-primary">
	<div class="panel-heading">
		<h4 class="panel-title">Personal Details</h4>
	</div>
	<div class="panel-body">
    	<div class="row">
        	<div class="col-sm-6">
            	<div class="form-group">
                    <label for="mytext">MyText</label>
                    <input type="text" name="mytext" id="mytext" class="form-control" autofocus>
                </div>
            </div>
            <div class="col-sm-6">
            	<div class="form-group">
                    <label for="mytext">MyText</label>
                    <input type="text" name="mytext" id="mytext" class="form-control">
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-primary">
      <div class="panel-heading box-title ">
        <h3 class="panel-title">PLAYER'S REGISTRATION FORM</h3>
      </div>
      <div class="alert">
        <p>
        The name and photo associated with your google account will be recorded when you upload files and submit this form. Not sfac101.soumik@gmail.com?
        </p>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="applicant_name" ><h4>Applicant Name :</h4></label>
            </div>
          </div>
          <div class="col-md-8">
            <input type="text" name="applicant_name" class="form-control" Placeholder="Write Your Name" autofocus >
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="father_name" ><h4>Father Name :</h4></label>
            </div>
          </div>
          <div class="col-md-8">
            <input type="text" name="father_name" class="form-control" placeholder="Write Your Father Name" >
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6"><label for="dob" ><h4>Date Of Birth :</h4></label></div>
              <div class="col-md-6"><input type="date" name="dob" class="form-control" ></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
                <div class="col-md-6"><label for="birth_place" ><h4>Place Of Birth :</h4></label></div>
                <div class="col-md-6"><input type="text" name="birth_place" class="form-control" ></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6"><label for="gender" ><h4>Gender :</h4></label></div>
              <div class="col-md-6">
                <div class="radio">
                  <label><input type="radio" name="gender" value="Female" >Female</label>
                  <label><input type="radio" name="gender" value="Male" >Male</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
                <div class="col-md-6"><label for="blood_group" ><h4>Blood Group :</h4></label></div>
                <div class="col-md-6"><input type="text" name="blood_group" class="form-control" placeholder="Blood Group" ></div>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="aadhar_num" ><h4>Aadhar Number :</h4></label>
            </div>
          </div>
          <div class="col-md-8">
            <input type="text" name="aadhar_num" class="form-control" Placeholder="Write Your Aadhar Number" autofocus >
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="occupation" ><h4>Occupation :</h4></label>
            </div>
          </div>
          <div class="col-md-8">
            <input type="text" name="occupation" class="form-control" Placeholder="Write Your Occupation" autofocus >
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="address" ><h4>Address :</h4></label>
            </div>
          </div>
          <div class="col-md-8">
            <input type="text" name="address" class="form-control" Placeholder="Write Your Address" autofocus >
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12"><label for="contact_no" ><h4>Contact Number :</h4></label></div>
              <div class="col-md-12"><input type="text" name="contact_no" class="form-control" ></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
                <div class="col-md-12"><label for="email" ><h4>E-Mail Address :</h4></label></div>
                <div class="col-md-12"><input type="email" name="email" class="form-control" ></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12"><label for="playing_category" ><h4>Playing Category :</h4></label></div>
              <div class="col-md-12">
                <div class="radio">
                    <label><input type="radio" name="playing_category" value="B1" >B1</label><br>
                    <label><input type="radio" name="playing_category" value="B2" >B2</label><br>
                    <label><input type="radio" name="playing_category" value="B3" >B3</label>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
          <div class="col-md-12"><label for="playing_role" ><h4>Playing Role :</h4></label></div>
              <div class="col-md-12">
                <div class="radio">
                    <label><input type="radio" name="playing_role" value="Batting" >Batting</label><br>
                    <label><input type="radio" name="playing_role" value="balling" >Balling</label><br>
                    <label><input type="radio" name="playing_role" value="all_rounder" >All Rounder</label>
                  </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12"><label for="playing_hand" ><h4>Playing Hand :</h4></label></div>
              <div class="col-md-12">
                <div class="radio">
                    <label><input type="radio" name="playing_hand" value="right" >Right</label><br>
                    <label><input type="radio" name="playing_hand" value="left" >Left</label>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
          <div class="col-md-12"><label for="wicket_keeping" ><h4>Wicket Keeping :</h4></label></div>
              <div class="col-md-12">
                <div class="radio">
                    <label><input type="radio" name="wicket_keeping" value="yes" >Yes</label><br>
                    <label><input type="radio" name="wicket_keeping" value="no" >No</label>
                  </div>
              </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12"><label for="highest_level_played"><h4>Highest Level Played : </h4><label></div>
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-3">
                <div class="radio">
                <label><input type="radio" name="highest_level_played" value="international">International</label>
                </div>
              </div>
              <div class="col-md-3">
                <div class="radio">
                  <label><input type="radio" name="highest_level_played" value="national">National</label>
                </div>
              </div>
              <div class="col-md-3">
                <div class="radio">
                  <label><input type="radio" name="highest_level_played" value="state">State</label>
                </div>
              </div>
              <div class="col-md-3">
                <div class="radio">
                  <label><input type="radio" name="highest_level_played" value="institutional">Institutional</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12"><label for="representing_stage" ><h4>Representing Stage :</h4></label></div>
          <div class="col-md-12">
            <div class="form-group"><input type="text"  class="form-control" name="representing_stage" Placeholder="Write Your Answer"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12"><label for="photo" ><h4>Photo :</h4></label></div>
          <div class="col-md-12">
            <div class="form-group"><input type="file" class="form-control" name="applicant_image" ></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12"><label for="disablity_certificate" ><h4>Disability Certificate From Recognised Hospital :</h4></label></div>
          <div class="col-md-12">
            <div class="form-group"><input type="file" class="form-control" name="disablity_certificate" ></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12"><label for="age_proof" ><h4>Age Proof :</h4></label></div>
          <div class="col-md-12">
            <div class="form-group"><input type="file" class="form-control" name="age_proof" ></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12"><label for="signature" ><h4>Signature :</h4></label></div>
          <div class="col-md-12">
            <div class="form-group"><input type="file" class="form-control" name="signature" ></div>
          </div>
        </div>
        <div>
          <blockquote class="term-condition">
            <p >
              I declare<br>
              TERMS AND CONDITIONS OF PLAYER REGISTRATION <br>
              <ul>
                <li>	I declare that I am willing or likely to play or participate in cricket matches conducted by/recognized by CRICKET ASSOCIATION FOR THE BLIND IN INDIA  (CABI)   / WORLD BLIND CRICKET COUNCIL (WBCC) or its affiliated Boards, in India or abroad. </li>
                <li>  I declare that I shall not play or participate in any cricket match or tournament either in India or abroad not approved by  CABI or it’s affiliated bodies  without the prior permission in writing.  </li>
                <li> I declare that I either shall not play or participate in any charity / festival / benefit cricket match in India or abroad not approved by the  CABI or it’s affiliates without the prior permission in writing. </li>
                <li>I shall always conduct myself as a blind cricketer worthy of the tradition of the sport and not act contrary to its spirit at any time. I am aware that if I found violating these rules and regulations of registration, I am liable for action as decided by the  CABI and it’s affiliates from time to time. </li>
                <li>I have not registered with any other state. Country cricket association. I shall seek special permission from the CABI and it’s affiliates in case of unique circumstances. I shall abide by the code of conduct formulated by the CABI and it’s affiliates. </li>
                <li>I agree to abide by the _CABI and it’s affiliates’s age and medical -verification process for tournaments. I give my consent to undergo medical evaluation as part of the verification process. </li>
                <li>I shall abide by the _CABI and it’s affiliates Anti-Corruption and Anti-Doping rules and regulations. </li>
                <li>I declare that I am aware of the  CABI and it’s affiliates player registration and blind cricket rules / regulations and confirm that I fulfil all the conditions applicable for player registration. </li>
                <li>I shall abide by the decision of the selectors with regard to selections to any tournaments. </li>
                <li>I shall have no objection and give my full consent to use my information/recordings/audio/video and for media and also for both commercial and non commercial use for CABI and its affiliate organization.</li>
                <li>I also declare all the information furnished by me for player registration is true and correct to the best of my knowledge. </li>
              </ul>
              I agree <br>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="agree">
              ALL ABOVE TERMS AND CONDITION
                </label>
              </div>
            </p>
          </blockquote>
          <button class="btn btn-primary btn-md" type="button">Submit Form</button><button type="reset" class="btn btn-primary reset">Reset Form</button>
        </div>
      </div>
    </div>
  </div>
</div>

</form>
<?php require_once 'assets/templates/footer.php'; ?>