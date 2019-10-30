<?php


namespace App\Http\Controllers;
use App\Providers\AppServiceProvider;
use Illuminate\Http\Request;
class FBController extends Controller
{

    public function index(Request $request){

        $fb = new \Facebook\Facebook([
            'app_id' => setting('general.app_id'),
            'app_secret' => setting('general.secret_id'),
            'default_graph_version' => 'v2.10',
            'default_access_token' => setting('general.access_token'), // optional
        ]);

        try {
            $helper = $fb->getRedirectLoginHelper();
            // Get the \Facebook\GraphNodes\GraphUser object for the current user.
            // If you provided a 'default_access_token', the '{access-token}' is optional.
           // $response = $fb->get('/me');
            $response = $fb->post(
                "/".setting('general.group_id')."/feed",
                array (
                    'message' => $request->text,
                    'link' => $request->url,

                )
            );
        } catch(\Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(\Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
        return back()->with('status', 'Ура');
    }

}
