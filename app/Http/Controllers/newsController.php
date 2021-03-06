<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\newsModel;
use App\models\newsFilesModel;
use Auth;
use Redirect;
use Illuminate\Support\Facades\Validator;

class newsController extends Controller
{
    //
    public function index()
    {
    	$this->isAlreadyLoggedIn();
    	return view('admin.addnews');
    }

    public function showHome()
    {
        $latestNews = newsModel::where('status', 'active')->skip(0)->take(3)->get();
        return view('mainlayout.layout', compact('latestNews'));
    }
    public function addFile(Request $formRequest)
    {
        $rules = [
        'addFile' => "required"
        ];
        $types = [
        	"video" => ["web", "mp4", "avi"]
        ];
        $customMessages = [
            'required' => 'The :attribute field is required.',
            'max' => 'The file size is over the limit.',
            // 'mimes' => 'The type of the file is not valid. Please upload an image or video'??
        ];
        
        $valid = Validator::make($formRequest->all(), $rules, $customMessages);

        if($valid->fails())
        {
            $errors = $valid->errors();
            $list = [];
            foreach($errors->all() as $error )
                array_push($list, $error);
            return json_encode(["success" => false, "errorMessage" =>$list]);
        }

        $formRequest->validate([
            'addFile' => "required|max:20000|mimes:jpg,jpeg,png,avi,web,mp4"
        ]);
        $fextension = $formRequest->file('addFile')->getClientOriginalExtension();
        $filename = time().'_addFile_.'.$fextension;
        if(!$formRequest->file('addFile')->move(
        base_path() . '/public/uploads/news/', $filename))
            $json =json_encode(array("success" => false, 'fileurl' => null));
        if(env('APP_ENV') === 'production')
        {
        	$fileUrl = env('APP_URL').'100tefl/public/uploads/news/'.$filename;
        }
        else
        	$fileUrl = env('APP_URL').'uploads/news/'.$filename;
        if(in_array($fextension, $types["video"]))
        	$fileUrl = "<p><video src=\"$fileUrl\" controls=\"\" width=\"550px\" height=\"400px\"> </video></p>";
        $json = json_encode(array("success" => true, "fileurl" => $fileUrl));
        return $json;
    }
    public function showAllNews()
    {
        $newsList = newsModel::where('status', 'active')->orderBy('id', 'desc')->get();
        return view('newsview.newsview', compact('newsList'));
    }
    public function getGivenNews($newsId)
    {
        $newsList = newsModel::where('status', 'active')->orderBy('id', 'desc')->get();
        $givenNews = newsModel::where([['id', '=',$newsId], ['status', '=' ,'active']])->get();
        $notfound = [];
        if($givenNews === null || $givenNews->count() <= 0)
            return view('newsview.newsview',compact('notfound', 'newsList'));
        return view('newsview.newsview',compact('givenNews', 'newsList'));
    }
    public function newNews(Request $request)
    {
    	$this->isAlreadyLoggedIn();
        $failed = false;
        $fileTypes = [
            "image" => ["jpg","jpeg","png"],
            "video" => ["avi","web","mp4"]
        ];
    	$request->validate([
    		"newsTitle" => ["required", 'min:10', 'max:200'],
    		"newsFeatureImage" => ['required','mimes:jpg,jpeg,png,avi,web,mp4,PNG', 'max:200000'],
    		'newsContent' =>  ['required', 'min:100'],
    		"newsFiles" => ['max:200000']
    	]);
        if($request->file('newsFiles'))
        {
            $numfiles = count($request->file('newsFiles'))-1;
            foreach(range(0, $numfiles) as $index) 
            {
                $request->validate([
                    'newsFiles.' . $index => 'mimes:jpg,jpeg,png,avi,web,mp4,doc,docx|max:200000'
                ]);
            }
        }
        else
            $numfiles = -1;
        $fextension = $request->file('newsFeatureImage')->getClientOriginalExtension();
    	$filename = time().'_newsFeature_.'.$fextension;
    	if(env('APP_ENV') === 'production')
        {
        	$featureImageUrl = env('APP_URL').'100tefl/public/uploads/news/'.$filename;
        }
        else
	        $featureImageUrl = env('APP_URL').'uploads/news/'.$filename;
        $newsFileNames = [];
    	if(!$request->file('newsFeatureImage')->move(
        base_path() . '/public/uploads/news/', $filename))
        {
            session()->flash('uploadFailed','Failed to upload news feature image/video');
            $failed = true;
        }
        if(in_array($fextension, $fileTypes["image"]))
            $featureType = "image";
        else if(in_array($fextension, $fileTypes["video"]))
            $featureType = "video";
        else
        {
            session()->flash('uploadFailed','Could not determine image/video extension '.$fextension);
            $failed = true;
            return view('admin.addnews');
        }
        try
        {
            $newsModel = new newsModel;
            $newsModel->title = $request->newsTitle;
            $newsModel->feature_image = $featureImageUrl;
            $newsModel->content = $request->newsContent;
            $newsModel->feature_image_type = $featureType;
            $newsModel->save();

            $newsId = $newsModel::where([['title', $request->newsTitle],['feature_image', $featureImageUrl]])->get();

            return redirect()->route('allNews', $newsId[0]->id)->send();
        }
        catch(\Illuminate\Database\QueryException $exception)
        {
            session()->flash('uploadFailed', $exception->errorInfo);
            $failed = true;
            return view('admin.addnews');

        }
        catch(Exception $exception)
        {

            session()->flash('uploadFailed','Error Exception:  '.$exception->errorInfo);
            $failed = true;
            return view('admin.addnews');
        }
            
    }
    public function newYearParty()
    {
    	return view('newspage.newyear');
    }
    protected function isAlreadyLoggedIn()
    {
        if($user = Auth::user())
        {
            //
            return true;
            //return Redirect::route('login');
        }
        else
        {
            return redirect()->route('login')->send();
        }    
    }
    public function viewnews()
    {
    	$this->isAlreadyLoggedIn();
    	$newsList = newsModel::where('status', 'active')->orderBy('id', 'desc')->get();
    	return view("admin.adminViewNews", compact('newsList'));
    }
    public function editnews($newsId)
    {
    	$this->isAlreadyLoggedIn();
    	$targetNews = newsModel::where('id' , $newsId)->get();
    	if($targetNews == null || $targetNews->count() <= 0)
    		return view('errors.404' );
    	else
    		return view('admin.editNewsView', compact('targetNews'));
    }
    public function saveEdit(Request $request)
    {
    	$this->isAlreadyLoggedIn();
        $failed = false;
        $fileTypes = [
            "image" => ["jpg","jpeg","png"],
            "video" => ["avi","web","mp4"]
        ];
    	$request->validate([
    		"newsTitle" => ["required", 'min:10', 'max:200'],
    		"newsFeatureImage" => ['mimes:jpg,jpeg,png,avi,web,mp4', 'max:200000'],
    		'newsContent' =>  ['required', 'min:100'],
    		"changeTargetId" => ["required", 'integer']
    	]);
    	
	    	
        $newsFileNames = [];
        $currentData = newsModel::where('id' ,$request->changeTargetId)->get();
        if($currentData == null || count($currentData) <= 0)
        {
        	session()->flash('uploadFailed','The news you are trying to update is not available');
	        $failed = true;
	        return view('newsview.notfound');
        }
	    if($request->file('newsFeatureImage'))
	    {
	    	$fextension = $request->file('newsFeatureImage')->getClientOriginalExtension();
	    	$filename = time().'_newsFeature_.'.$fextension;
	    	if(!$request->file('newsFeatureImage')->move(
	        base_path() . '/public/uploads/news/', $filename))
	        {
	            session()->flash('uploadFailed','Failed to upload news feature image/video');
	            $failed = true;
	            return view('admin.editNewsView');
	        }
	        if(in_array($fextension, $fileTypes["image"]))
	            $featureType = "image";
	        else if(in_array($fextension, $fileTypes["video"]))
	            $featureType = "video";
	        else
	            $featureType = "unknown";
	        if(env('APP_ENV') === 'production')
	        {
	        	$featureImageUrl = env('APP_URL').'100tefl/public/uploads/news/'.$filename;
	        }
	        else
		        $featureImageUrl = env('APP_URL').'uploads/news/'.$filename;
	    }
	    else
	    {
	    	$featureImageUrl =$currentData[0]->feature_image;
	    	$featureType = $currentData[0]->feature_image_type;
	    }	
        
        $currentData = newsModel::where('id' ,$request->changeTargetId)->get();
        $changeData = [
        	'title' => $request->newsTitle,
        	'feature_image' => $featureImageUrl,
        	"feature_image_type" => $featureType,
        	"content" => $request->newsContent,
        ];
        $newsModel = new newsModel;
        try
        {
        	$newsModel::where('id', $request->changeTargetId)->update($changeData);
        }
        catch(\Illuminate\Database\QueryException $e)
        {
        	session()->flash('uploadFailed','Failed to upload news feature image/video');
	        $failed = true;
        }
        
        if($failed === false)
            session()->flash('success',true);
        $targetNews = newsModel::where('id' , $request->changeTargetId)->get();
        return view('admin.editNewsView', compact('targetNews'));
    }
    public function deleteNews($newsId)
    {
    	$newsGiven = newsModel::where('id', $newsId)->get();
    	if($newsGiven == null || count($newsGiven) <= 0)
    	{
    		return view('newsview.notfound');
    	}
    	else
    	{
    		try
	        {
	        	newsModel::where('id', $newsId)->update(['status'=> 'inactive']);
                return redirect()->route('allNews')->send();
	        }
	        catch(\Illuminate\Database\QueryException $e)
	        {
	        	return view('errors.500');
	        }
    	}
    }
}