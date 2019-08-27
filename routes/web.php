<?php
use illuminate\support\facades\input;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//TestForclas


Route::get('/Showpage','StudentController@showpage');

Route::post('/NEwuser','StudentController@page');



Route::post('/creates','StudentController@insert')->middleware('CheckUser','CheckAdmin');

Route::post('/email_available/check', 'StudentController@check')->middleware('CheckUser','CheckAdmin');


Route::post('/project_available/check', 'FacultyController@chcekPTitle')->middleware('CheckUser','CheckFaculty');

Route::post('/projectMembers_available/check', 'FacultyController@chcekmem1')->middleware('CheckUser','CheckFaculty');


Route::post('/projectMembers2_available/check', 'FacultyController@chcekmem2')->middleware('CheckUser','CheckFaculty');



Route::post('/projectMembers3_available/check', 'FacultyController@chcekmem3')->middleware('CheckUser','CheckFaculty');


//Test


// Admin Routes/////


Route::get('/Aclerror','StudentController@ACLerror');


Route::any('User_Search/check','StudentController@SearchUsers')->middleware('CheckUser','CheckAdmin');


Route::get('/dashboard','StudentController@dashboardshow')->middleware('CheckUser','CheckAdmin');


Route::get('/test','StudentController@Test');

Route::get('/updateUsers/{id}/edit','StudentController@updateusers')->middleware('CheckUser','CheckAdmin');

Route::any('/updatedata/{id}/save','StudentController@updateuserssave')->middleware('CheckUser','CheckAdmin');

Route::get('/AdminUserPro','StudentController@userprofile')->middleware('CheckUser','CheckAdmin');

Route::get('/DeleteUser/{id}/delete','StudentController@userdelete')->middleware('CheckUser','CheckAdmin');

Route::any('/createsfacNotification','StudentController@FacultyNotifications')->middleware('CheckUser','CheckAdmin');

Route::any('/createsStuNotification','StudentController@studentNotifications')->middleware('CheckUser','CheckAdmin');

Route::get('/FNotification','StudentController@FNotificationView')->middleware('CheckUser','CheckAdmin');

Route::get('/SNotification','StudentController@SNotificationView')->middleware('CheckUser','CheckAdmin');

Route::get('/DeletestdNoti/{id}/delete','StudentController@SNotificationdelete')->middleware('CheckUser','CheckAdmin');

Route::get('/DeletefacNoti/{id}/delete','StudentController@fNotificationdeletefNotificationdelete')->middleware('CheckUser','CheckAdmin');

Route::get('/updatefacNotification/{id}/editfn','StudentController@fNotificationedit')->middleware('CheckUser','CheckAdmin');

Route::any('/updatefacNoti/{id}/save','StudentController@updatefacNotisave')->middleware('CheckUser','CheckAdmin');

Route::get('/updatestdNoti/{id}/edit','StudentController@updatestdnotifi')->middleware('CheckUser','CheckAdmin');

Route::any('/updatestdNotis/{id}/save','StudentController@updatestdNotisave')->middleware('CheckUser','CheckAdmin');




//Tests Route

//
//Route::get('/ma', function () {
//    $student = DB::table('students')->get();
//
//    return view('Admin.Advance', ['student' => $student]);
//
//});

//////

//Home  Routes

Route::get('/EvaRules','StudentController@EvaluationRules');
Route::get('/SupervisorRules','StudentController@SupervisorRules');
Route::get('/StudentRules','StudentController@StudentRules');
Route::get('/Links','StudentController@Links');
Route::get('/News','StudentController@News');
Route::get('/PostionHolders','StudentController@PostionHolders');
//////

//Home Page Routes

Route::get('AdminHomeProjects','StudentController@AddProjectsHomePage')->middleware('CheckUser','CheckAdmin');

Route::post('AdminHomeAddProjectsHomepage','StudentController@AddProjectsHome')->middleware('CheckUser','CheckAdmin');

Route::any('/AdminHomeAddPostionHolders','StudentController@HomePagePostionHolders')->middleware('CheckUser','CheckAdmin');
Route::post('/userprofilepic','StudentController@userprofilepictur')->middleware('CheckUser','CheckAdmin');
Route::any('/AdminHomePostionHolder','StudentController@HomePagePostionHolder')->middleware('CheckUser','CheckAdmin');
Route::get('/AdminHomeLink','StudentController@HomePageLink')->middleware('CheckUser','CheckAdmin');
Route::any('/AdminHomeAddLinks','StudentController@HomePageLinkAdd')->middleware('CheckUser','CheckAdmin');
Route::any('/AdminHomepageLinK/{id}/delete','StudentController@AdminHomePageLinkDelete')->middleware('CheckUser','CheckAdmin');
Route::get('/AdminHomeNews','StudentController@AdminHomePageNews')->middleware('CheckUser','CheckAdmin');
Route::any('/AdminHomepagenewss/{id}/delete','StudentController@AdminHomePageNewsDelete')->middleware('CheckUser','CheckAdmin');
Route::any('/AdminHomepagenews/{id}/delete','StudentController@AdminHomePageDeletePostions')->middleware('CheckUser','CheckAdmin');

Route::any('AdminHomeAddNews','StudentController@AdminHomePageNewsAdd')->middleware('CheckUser','CheckAdmin');

//////MaKe Group////

Route::any('/Deleterequest/{id}/delete','StudentController@DeleteProjectRequest')->middleware('CheckUser','CheckAdmin');

Route::get('AddnewGrop','StudentController@Requestedprojectlist')->middleware('CheckUser','CheckAdmin');

Route::any('/RequestProjectAccept/{id}/Add','StudentController@AcceptProject')->middleware('CheckUser','CheckAdmin');


Route::any('/AddtoRegistedproject','StudentController@Addprojects')->middleware('CheckUser','CheckAdmin');

Route::get('registerproList','StudentController@RegisterdProjectList')->middleware('CheckUser','CheckAdmin');


////SetDeadlines
Route::post('/AddNewDeadlines','StudentController@AddNewDeadlines')->middleware('CheckUser','CheckAdmin');

Route::get('/deadlinesList','StudentController@ListDeadlines')->middleware('CheckUser','CheckAdmin');


Route::get('/Deletedeadline/{id}/delete','StudentController@deletedeadline')->middleware('CheckUser','CheckAdmin');

///////




Route::any('/RejectePro/{id}/Reject','StudentController@ProRejection')->middleware('CheckUser','CheckAdmin');

Route::post('addprorejectionreason','StudentController@rejesctionreason')->middleware('CheckUser','CheckAdmin');
/////






Route::get('/alerts','StudentController@useralert')->middleware('CheckUser','CheckAdmin');
;
Route::get('/List-user','StudentController@shows')->middleware('CheckUser','CheckAdmin');



Route::any('/user1','UserProfile@store');
Route::any('/logout','UserProfile@logout');
Route::get('/login','StudentController@index');
Route::get('/user-Profile','StudentController@janog')->middleware('CheckUser','CheckAdmin');
//
//Route::get('/register', function () {
//    return view('register');
//});
//Route::get('/data2', function () {
//Route::get('/data2', function () {
//Route::get('/data2', function () {
//    return view('Admin.data2');
//});

//DashBoard



//
//
//Route::get('/master', function () {
//    return view('Admin.Main');
//});

//UserRegestration

Route::get('/StudentReg', function () {
    return view('Admin.Registration.Student');
})->middleware('CheckUser','CheckAdmin');


//MakeUserProfile


//MakeMangeProject





Route::get('/AddNewProj', function () {
    return view('Admin.mpg.addgroup');
})->middleware('CheckUser','CheckAdmin');





Route::get('/Updateproj', function () {
    return view('Admin.mpg.updatepro');
})->middleware('CheckUser','CheckAdmin');

//makeNotification

Route::get('/StudentNorification', function () {
    return view('Admin.Notification.StudentNoti');
})->middleware('CheckUser','CheckAdmin');

//makeDeadlines

//
//Route::get('/Adddeadlin', function () {
//    return view('Admin.Deadlines.Proposal');
//})->middleware('CheckUser','CheckAdmin');
//

Route::any('Adddeadlin','StudentController@ShowDeadnlinsPage')->middleware('CheckUser','CheckAdmin');


//makeRepositary
Route::get('/uploadproject', function () {
    return view('Admin.Repositary.UploadPro');
})->middleware('CheckUser','CheckAdmin');






//
//Route::get('/noti', function () {
//    return view('Admin.Notification.StudentNoti');
//})->middleware('CheckUser');



//Route::get('/dead', function () {
//    return view('Admin.Deadlines.report2');
//})->middleware('CheckUser');




//
//Route::get('/mpg', function () {
//    return view('Admin.mpg.Addpro');
//})->middleware('CheckUser');

////////HOME TEST pAGES Public //////


Route::get('/','StudentController@HomeMainNews');
Route::get('PostionHoldeList','StudentController@PostionHolders');



//Route::get('/home1', function () {
//    return view('Admin.Home22');
//});



//Route::get('/addfeedback', function () {
//    return view('Faculty.feedback.addfeedback');
//});

//
//
//                 Faculty Views
//
//
//
//


Route::get('/facultyprojectRegestration','FacultyController@registrationProject')->middleware('CheckUser','CheckFaculty');

Route::any('/Facultyprofilepic','FacultyController@Profilepicture')->middleware('CheckUser','CheckFaculty');



Route::any('/facultyUserPro','FacultyController@Profile')->middleware('CheckUser','CheckFaculty');

Route::any('/flogout','FacultyController@Logout')->middleware('CheckUser','CheckFaculty');



Route::any('/user-Faculty','FacultyController@index')->middleware('CheckUser','CheckFaculty');

Route::any('/createsNewIdea','FacultyController@Addprojectidea')->middleware('CheckUser','CheckFaculty');

Route::any('/listidea','FacultyController@IdeasList')->middleware('CheckUser','CheckFaculty');

Route::get('/facultyDedlines','FacultyController@Deadlines')->middleware('CheckUser','CheckFaculty');

Route::get('/accepproject','FacultyController@RequestedProjects')->middleware('CheckUser','CheckFaculty');

Route::get('/fpswChange','FacultyController@fpswchange')->middleware('CheckUser','CheckFaculty');

Route::post('/fpswchange','FacultyController@changepswf')->middleware('CheckUser','CheckFaculty');


Route::post('requesttoregproject','FacultyController@requestforrgproject')->middleware('CheckUser','CheckFaculty');

Route::get('/addTask', function () {
    return view('Faculty.task.addtasks');
})->middleware('CheckUser','CheckFaculty');


Route::get('/editTask', function () {
    return view('Faculty.task.edittasks');
})->middleware('CheckUser','CheckFaculty');


Route::get('/listtask', function () {
    return view('Faculty.task.tasklist');
})->middleware('CheckUser','CheckFaculty');




Route::get('listproject','FacultyController@RejectionList')->middleware('CheckUser','CheckFaculty');;

Route::get('/statusprojetc','FacultyController@ProjectLists')->middleware('CheckUser','CheckFaculty');

Route::get('/updateUsers/{id}/Addmeeting','FacultyController@Meetings')->middleware('CheckUser','CheckFaculty');

Route::get('/Projectaction/{Project_Title}/Action','FacultyController@ProjectAction')->middleware('CheckUser','CheckFaculty');


Route::get('ProjectsSupervision','FacultyController@RegisterdProjects')->middleware('CheckUser','CheckFaculty');

Route::get('/ProjeectStatus/{Project_Title}/projesctnewAction','FacultyController@Actionss')->middleware('CheckUser','CheckFaculty');

 Route::get('FacultyEvaluation','FacultyController@EvaluationProjects')->middleware('CheckUser','CheckFaculty');
Route::get('/Downloadfile/{Status}/Evaluationdownload','FacultyController@downloadproposal')->middleware('CheckUser','CheckFaculty');

Route::get('/ProposalReview/{projecttitle}/AddProposalReviw','FacultyController@proposalReviwAdd')->middleware('CheckUser','CheckFaculty');

//////Project Status/ ASsgin TasK /Meeting/Marks/


Route::any('/ProjeectStatus/{id}/Status','FacultyController@ProjectStatus')->middleware('CheckUser','CheckFaculty');

Route::any('/ProjectTask/{id}/AssignTask','FacultyController@ProTask')->middleware('CheckUser','CheckFaculty');

Route::post('/ProjectTaskAdd','FacultyController@AddTask')->middleware('CheckUser','CheckFaculty');

Route::post('ProjectMeeting','FacultyController@AddNewMeeting')->middleware('CheckUser','CheckFaculty');

Route::get('/AddProjectMarks/{id}/AddMarks','FacultyController@Addprojectmarks')->middleware('CheckUser','CheckFaculty');

Route::post('/ProjectEvaluationFB','FacultyController@AddMarks')->middleware('CheckUser','CheckFaculty');

Route::get('/DownloadfileTasl/{TaskFile}/download','FacultyController@downloadfile')->middleware('CheckUser','CheckFaculty');

Route::get('FFoploadProFiles','FacultyController@ffileupload')->middleware('CheckUser','CheckFaculty');

Route::any('fuploadprofile','FacultyController@submittoCommite')->middleware('CheckUser','CheckFaculty');



Route::get('/Deleteideafas/{id}/delete','FacultyController@deleteideafac')->middleware('CheckUser','CheckFaculty');
;


Route::get('/fDownloadfile/{path}/downloadprojectfile','FacultyController@fdownloadfiles')->middleware('CheckUser','CheckFaculty');

Route::get('/Downloadfile/{Filepath}/factdownload','FacultyController@filedownloads')->middleware('CheckUser','CheckFaculty');


Route::post('AddproposalRevies','FacultyController@SubmitproposalReview')->middleware('CheckUser','CheckFaculty');

Route::get('/internalsgrade/{Project_Title}/Addinternalsrafde','FacultyController@addgradesInternals')->middleware('CheckUser','CheckFaculty');

Route::post('internalsgrades','FacultyController@submitinternalsgradeone')->middleware('CheckUser','CheckFaculty');

Route::any('/AddExternalgrades/{Project_Title}/Addexternalsgrafde','FacultyController@AddExternalGrades')->middleware('CheckUser','CheckFaculty');

Route::post('ExternalsGradesAdd','FacultyController@addeternalsgrades')->middleware('CheckUser','CheckFaculty');


//////



Route::get('/addmeeting', function () {
    return view('Faculty.meeting.addmeeting');
})->middleware('CheckUser','CheckFaculty');


Route::get('/editmeeting', function () {
    return view('Faculty.meeting.EditMeeting');
})->middleware('CheckUser','CheckFaculty');


Route::get('/meetingrecords', function () {
    return view('Faculty.meeting.MeetingRecords');
})->middleware('CheckUser','CheckFaculty');


Route::get('/addnewideas', function () {
    return view('Faculty.ideas.addnewidea');
})->middleware('CheckUser','CheckFaculty');


Route::get('/editideas', function () {
    return view('Faculty.ideas.editidea');
})->middleware('CheckUser','CheckFaculty');


Route::get('/addfacultyprojet', function () {
    return view('Faculty.Repositary.Addprojectdata');
})->middleware('CheckUser','CheckFaculty');


////////////////Students views////////////////////////////////
///
///
///




Route::get('/index', function () {
    return view('Student.index');

})->middleware('CheckUser');

//
//Route::get('/search','SearchController@search');




/*Route::get('/search',function(){
return view('search');
}
);*/

//Route::get ('/Profile',function()
//{
//    return view('Student.Profile');
//}
//);
Route::get('Profile','ProjectCotroller@userprofile')->middleware('CheckUser','CheckStudent');


Route::get('/upload',function(){
    return view('Student.upload');
}
)->middleware('CheckUser','CheckStudent');


Route::get('/view1',function(){
    return view('Student.viewmarks');
}
)->middleware('CheckUser','CheckStudent');


//Route::get('/Dashboard',function(){
//    return view('Student.Dashboard');
//})->middleware('CheckUser','CheckStudent');


Route::get('/Dashboard','ProjectCotroller@SDashBoard')->middleware('CheckUser','CheckStudent');;

Route::get('/makegroupss',function() {
    return view('Student.makegroup');

})->middleware('CheckUser','CheckStudent');
//Route::get ('/Projectidea',function ()
//{
//    return view('Student.Projectidea');
//
//}
//);

Route::any('/studentsearchidea','ProjectCotroller@ideasearch')->middleware('CheckUser','CheckStudent');


Route::get('/Projectidea','ProjectCotroller@Ideas')->middleware('CheckUser','CheckStudent');


Route::post('/makegroup','MakeGroupController@insertMember')->middleware('CheckUser','CheckStudent');

Route::post('/upload','ProjectCotroller@upload')->middleware('CheckUser','CheckStudent');

Route::get('/Deadlines','ProjectCotroller@deadlines')->middleware('CheckUser','CheckStudent');
Route::any('/studentprofilepic','ProjectCotroller@proilePic')->middleware('CheckUser','CheckStudent');
Route::post('/studentuploadtask','ProjectCotroller@uploadFile')->middleware('CheckUser','CheckStudent');


Route::get('Spswchange','ProjectCotroller@spswchane')->middleware('CheckUser','CheckStudent');
Route::post('stupswchange','ProjectCotroller@pswchange')->middleware('CheckUser','CheckStudent');

Route::get('UploadproTask','ProjectCotroller@ProjectTask')->middleware('CheckUser','CheckStudent');

Route::get('/SubmitProTask/{id}/SubmitTask','ProjectCotroller@SubmitTask')->middleware('CheckUser','CheckStudent');

Route::any('/ProjectSubmitTaskAdd','ProjectCotroller@Submion')->middleware('CheckUser','CheckStudent');

Route::get('ViewProMArks','ProjectCotroller@showMarks')->middleware('CheckUser','CheckStudent');

Route::get('uploadProjectFile','ProjectCotroller@uploadprojectfile')->middleware('CheckUser','CheckStudent');

Route::post('uploadprojectfiles','ProjectCotroller@uplodeed')->middleware('CheckUser','CheckStudent');

Route::any('/Downloadfile/{Filepath}/uploadLin','ProjectCotroller@download')->middleware('CheckUser','CheckStudent');

///////Evaluator Routes//////




Route::get('EvaPro','EvaluatorController@profile')->middleware('CheckUser','CheckEvaluator');

Route::get('/EvaProjectList','EvaluatorController@EvaProjectList')->middleware('CheckUser','CheckEvaluator');


Route::get('/EvaPropsalReview','EvaluatorController@EvaPropsalReview')->middleware('CheckUser','CheckEvaluator');


Route::get('/ExtrnalsEva','EvaluatorController@ExtrnalsEva')->middleware('CheckUser','CheckEvaluator');


Route::get('/intelnalsEva','EvaluatorController@intelnalsEva')->middleware('CheckUser','CheckEvaluator');

Route::get('/deadlines','EvaluatorController@deadlines')->middleware('CheckUser','CheckEvaluator');

Route::get('/Edashboard','EvaluatorController@Dashboard')->middleware('CheckUser','CheckEvaluator');

Route::get('Evachngepass','EvaluatorController@Evachangepassword')->middleware('CheckUser','CheckEvaluator');

Route::post('pswchange','EvaluatorController@changepassword')->middleware('CheckUser','CheckEvaluator');


Route::get('EvashowProjects','EvaluatorController@ProjectsList')->middleware('CheckUser','CheckEvaluator');

Route::any('/DeatilsofProject/{Project_Title}/ProjectDeatils','EvaluatorController@projectDeatils')->middleware('CheckUser','CheckEvaluator');

Route::any('changeStatusProject','EvaluatorController@projectstatuschange')->middleware('CheckUser','CheckEvaluator');

Route::get('/Downloadfile/{path}/storedfilesdownload','EvaluatorController@downloadstorefiles')->middleware('CheckUser','CheckEvaluator');

Route::get('/Asginfeedback/{ProjectTitle}/feedback','EvaluatorController@Asginfeedbackpropsal')->middleware('CheckUser','CheckEvaluator');

Route::post('Assginfeedbactofaculty','EvaluatorController@toasingproposalfeedbac')->middleware('CheckUser','CheckEvaluator');

Route::post('INTERNALS','EvaluatorController@AsssginInternals')->middleware('CheckUser','CheckEvaluator');

Route::post('EXTERNAL','EvaluatorController@AssginExternal')->middleware('CheckUser','CheckEvaluator');











