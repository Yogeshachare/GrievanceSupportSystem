<?php

require 'includes/dbh.inc.php';
require 'counter.php';

echo($resultPending);
echo($resultCompleted);
echo($resultNotCompleted);
?>


<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Landing</title>
        
        <link rel="stylesheet" href="landing.css">
    </head>

    <body>
        <div data-layer="4227227e-067e-4baa-9f2c-d528e2065ea6" class="landing">        <div data-layer="f024c2a6-40a2-4bb3-a2e3-388d39eebd7f" class="rectangle1"></div>
        <div data-layer="efca03c7-1c14-4cd9-9a64-0a3f135ea812" class="kisspngTechnologyStockPhotographyIllustrationTechPointBasemap5a6d4b9cd23b128826382115171122208611"></div>
        <svg data-layer="571e0d3e-6e91-41dd-b1d2-e4e0c163d785" preserveAspectRatio="none" viewBox="0 0 1928 940" class="mainBgBlockGradient"><defs><pattern id="img-mainBgBlockGradient" patternContentUnits="userSpaceOnUse" width="100%" height="100%"><image xlink:href="assets/mainBgBlockGradient.png" x="0" y="0" width="1928.00px" height="940.00px" /></pattern></defs><path d="M 0 0 L 1928 0 L 1928 940 L 0 940 L 0 0 Z" fill="url(#img-mainBgBlockGradient)" /></svg>
        <div data-layer="8d39d208-47bd-4da1-8026-ecf27fd3849b" class="hiclipartcom1"></div>
        <div data-layer="345203fc-9119-4a37-ad2c-0f75c8b711f7" class="pceLogo7b43d03a"></div>
        <div data-layer="4aa37b77-61f9-4a1a-81ff-35071c45dcd7" class="pillaiCollegeOfEngineeringb3bde552">Pillai College Of Engineering</div>
        <div data-layer="a0522e01-7096-4249-a09b-d1782c17d195" class="aAccreditedByNaac">A+ Accredited by NAAC</div>
        <a href="adminLogin.php" target="blank">
        <div data-layer="009654ae-1806-4010-a84f-a4b4508b6e88" class="logincc94dc3b">Admin</div>
        </a>
        <a href="about_us/aboutus.php" target="blank">
        <div data-layer="58400605-4437-4829-8100-879d208f90bc" class="aboutUs">About Us</div>
    </a>
        <svg data-layer="a41e8c7f-6b84-41be-8d79-84ad48e1781e" preserveAspectRatio="none" viewBox="0 -0.5 1906 1" class="line2"><path d="M 0 0 L 1906 0"  /></svg>
        <a href="profile.php" target="blank">
        <div data-layer="3b831b7d-033d-4039-a959-a422217a33a0" class="signUpe5d74b82">Profile</div>
        </a>
        <a href="landing.php" target="blank">
        <div data-layer="4b14985d-e479-4882-8583-788150a4c1aa" class="home">Home</div>
        </a>
        <div data-layer="45200b32-ff2a-42b0-8a29-8b12b1049f67" class="rectangle42"></div>
        <div data-layer="0cec7df8-5d51-4b92-9138-3d54180e1f4c" class="rectangle43"></div>
        <div data-layer="a0a9e1d4-7593-46e3-96a1-84ddcb70a938" class="studentGrievanceSupportSystem">STUDENT GRIEVANCE SUPPORT SYSTEM</div>
        <div data-layer="768a842e-bd09-425b-8d9a-d7fd12463e3c" class="rectangle2"></div>
        <div data-layer="f65626c7-bb12-4d79-bc3e-52bdeade4eea" class="rectangle3"></div>
        <a href="Login.php" target="blank">
        <div data-layer="86024ed1-5346-4987-ac39-f63f8cc0bcc0" class="login">Login</div>
        </a>
        <a href="http://localhost/Orochi/Login.php#tabs-login-2" target="blank">
        <div data-layer="9c6f8598-5b4a-400f-86e3-e3b69c02dc86" class="signUp">Sign Up</div>
        </a>
        <div data-layer="8a860597-d1f6-456f-8554-c95e4da58b1b" class="thePceGrievanceRedressalCommitteeIsADedicatedbodyToAddressAllTheGrievancesOfTheStudentsToTakeTimelyActionAndHelpStudents">"The PCE Grievance Redressal Committee is a dedicated<br />body to address all the grievances of the students, to <br />take timely action and help students"</div>
        <div data-layer="0e667391-08ec-4de8-8f29-19245625e50c" class="rectangle4"></div>
        <div data-layer="a4945efd-b7f5-4fc5-8fd1-ac9d61b35601" class="rectangle5"></div>
        <div data-layer="9fcbfd94-b319-464b-b26f-2edb703ac573" class="recieved">Recieved</div>
        <div data-layer="38846fae-74d6-4430-85dd-bf7dc81f3126" class="completed">Completed</div>
        <div data-layer="440e60b8-039b-467f-a463-abc83f5e6a2f" class="rectangle6"></div>
        <div data-layer="ae49ef8f-9041-41d0-ac50-78617297301f" class="inProgress">In-Progress</div>
        <div data-layer="2226e58f-9fa7-4a5f-bf9d-57007ed455b2" class="rectangle7"></div>
        <div data-layer="17966088-53a3-410a-9db6-6b8b35b27d64" class="rectangle9"></div>
        <div data-layer="4bf03382-843d-47b3-a55d-e870b1de3f1b" class="rectangle8"></div>
        <div data-layer="f6394654-6f39-49c7-b73d-5c8d728ed092" class="x100"><?php echo($resultPending); ?></div>
        <div data-layer="c3d8dc45-85ce-4d8b-9d6c-a5a6d8de899e" class="x50e0b36d3c"><?php echo($resultNotCompleted); ?></div>
        <div data-layer="e6c4d378-bbc7-48dd-b6b1-24cb6773a481" class="x50"><?php echo($resultCompleted); ?></div>
        <div data-layer="fdda473f-e804-4121-8c44-64a682dabd9b" class="grievanceCounter">Grievance Counter</div>
        <svg data-layer="9ea13eea-3cbd-487e-9315-52c2d86f8aff" preserveAspectRatio="none" viewBox="0 -0.5 1906 1" class="line1"><path d="M 0 0 L 1906 0"  /></svg>
        <div data-layer="003d2c31-08a0-4097-8918-4c91f105918e" class="howDoesTheGrievanceSystemWorks">How Does The Grievance System Works ?</div>
        <div data-layer="16963b43-56a8-4cdc-89e2-6836b2e427ac" class="component11">            <svg data-layer="0d2a339b-799f-46a2-a831-801d4e0c2d17" preserveAspectRatio="none" viewBox="0 0 113 48" class="polygon115635ecb"><path d="M 56.5 0 L 113.0000076293945 48 L 0 48 Z"  /></svg>
            <div data-layer="796a34d2-c816-4dbb-a037-36b3517dd661" class="rectangle44bb7285b8"></div>
</div>
        <div data-layer="806bc869-d2d1-4dc7-ac3c-e2d5a56cadf8" class="studentRegistersThemselvesLoginToLodgeAGrievance">Student Registers themselves & Login to Lodge a Grievance</div>
        <div data-layer="bc1cdc96-56a4-47ce-915e-2da1a4f8852c" class="theConcernedCommitteeMemberReceivesTheGrievanceHeInitiatesActionandUpdateTheStatusOfTheGrievance">The Concerned Committee Member Receives the Grievance, He Initiates action<br />and Update the status of the Grievance </div>
        <div data-layer="83661312-75ee-4a2e-8761-9ffe60f859db" class="theStudentCanLoginAnytimeAndTrackTheStatusOfTheGrievanceHeRaised">The student can login anytime and track the status of the Grievance he raised</div>
        <div data-layer="06fbfc12-7a9a-4d7f-9c23-039f18fdefad" class="onceTheGrievanceIsSuccessfullyResolvedTheAdminMarksTheGrievanceAscompletedAndAddsARemarkOnTheSame">Once the grievance is successfully resolved the Admin marks the grievance as<br />completed and adds a remark on the same</div>
        <div data-layer="8f1a8bfd-7179-4a62-996a-2b8c7815d967" class="studentReceivesANotificationThatHisGrievanceHasBeenCompletedHeCannowLogInToHisAccountAndSeeWhatActionHasBeenTaken">Student receives a notification that his grievance has been completed, He can<br />now log in to his account and see what action has been taken </div>
        <div data-layer="d9169e03-bfc5-4132-b602-6d1594de502b" class="component12">            <svg data-layer="dbc159f7-8e35-455a-86a4-0da048d7f9ea" preserveAspectRatio="none" viewBox="0 0 113 48" class="polygon1a8790706"><path d="M 56.5 0 L 113.0000076293945 48 L 0 48 Z"  /></svg>
            <div data-layer="b83dee47-a1d1-4af2-a9f6-f7e36c6ff1fb" class="rectangle44b662241b"></div>
</div>
        <div data-layer="5f1d9bcc-33a3-45f6-8d39-6f6e85700e1c" class="component13">            <svg data-layer="f98c1df0-5b9b-43dc-9919-e6e0a02e30ca" preserveAspectRatio="none" viewBox="0 0 113 48" class="polygon1cd74490b"><path d="M 56.5 0 L 113.0000076293945 48 L 0 48 Z"  /></svg>
            <div data-layer="f210ec67-bdef-4276-9f7e-e82984e44beb" class="rectangle4443cd64c1"></div>
</div>
        <div data-layer="4c7c7679-8223-4e1d-ae67-727dfef7fc27" class="component14">            <svg data-layer="0b0942e8-7039-4139-9256-7205ef8c4228" preserveAspectRatio="none" viewBox="0 0 113 48" class="polygon1"><path d="M 56.5 0 L 113.0000076293945 48 L 0 48 Z"  /></svg>
            <div data-layer="167e1ef4-2d81-46b3-9911-a2f0a125a4a0" class="rectangle44"></div>
</div>
        <svg data-layer="d7ed3c30-6c5d-4f5e-8dab-9b003406d302" preserveAspectRatio="none" viewBox="0 0 1928 537" class="path76"><defs><pattern id="img-path76" patternContentUnits="userSpaceOnUse" width="100%" height="100%"><image xlink:href="assets/path76.png" x="0" y="0" width="1928.00px" height="537.00px" /></pattern></defs><path d="M 0 0 L 1928 0 L 1928 537 L 0 537 L 0 0 Z" fill="url(#img-path76)" /></svg>
        <div data-layer="e2e610d3-f254-4e2a-9477-0275a8af9e6d" class="pillaiCollegeOfEngineering">Pillai College Of Engineering</div>
        <div data-layer="75144984-feb9-46a6-9763-0e406d530dcf" class="pceLogo"></div>
        <div data-layer="f0e31eef-836a-452b-9cba-786d82878b24" class="drKMVasudevanPillaiCampusPlotNo10Sector16NewPanvelEastNaviMumbaiMaharashtra410206"> Dr. K. M. Vasudevan Pillai Campus, Plot No. 10,<br>Sector 16, New Panvel East, Navi Mumbai, Maharashtra<br>410206</div>
        <div data-layer="9ec4172f-d7c0-4c1d-abd6-67ba6b012727" class="connectWithUs">Connect with us</div>
        <div data-layer="1dbae899-d366-4cf3-a72a-1ba21c116634" class="enquiry">Enquiry</div>
        <div data-layer="08d2e364-91ab-4ad0-8041-079076b806cf" class="info">info@mes.ac.in</div>
        <div data-layer="d18ef51d-9326-46e4-be7f-5d0774f4dfd9" class="grievance">grievance@mes.ac.in</div>
       <a href="https://www.instagram.com/pillaiscollege/?hl=en" target="blank">
        <div data-layer="0c0c1821-62dd-4d7e-bf68-4ab8acc62a3d" class="instagramLogoVector"></div>
        </a>
       <a href="https://www.linkedin.com/school/pillaiengineering/?originalSubdomain=in" target="blank">
        <div data-layer="6e587881-936d-4061-b5f7-dfd848abe97d" class="linkedinLogoBlackVector"></div>
        </a>
        <a href="https://www.facebook.com/pillaicollege/?hc_ref=ARTWm58KK2IaGtm1A-hxX2-bUH0hhiz-Eqc7LGCYiklnqRZWpYHVqGn_9589mywIXUk&ref=nf_target&__tn__=kC-R" target="blank">
        <div data-layer="ec759498-1b43-49a3-99dc-57c0042b666e" class="fbLogoVector"></div>
        </a>
        <div data-layer="a66dcaf9-9a4d-443f-bd2e-e1c7cc894ddf" class="undrawopenedrei38e"></div>
        <div data-layer="81accbe5-3f67-48e3-bdb0-d871359999f6" class="undrawinprogressql66"></div>
        <div data-layer="885bfff5-2a96-42fd-87a1-84d70f3d3bee" class="undrawchecklistre2w7v"></div>
</div>

<script type="text/javascript">
    (function(d, m){
        var kommunicateSettings = 
            {"appId":"17992fc11452d4af346600297792ef62","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
</script>
    
    </body>
    </html>
            