<?php


namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends MainController
{
    public function getNews($count) {

        $programs = DB::table('posts')->orderBy('created_at', 'desc')->take($count)->get();
        return $programs;
    }
    public function index()
    {
        $featured_news=$this->getFuturedNews(10);
       $news = DB::table('posts')->orderBy('created_at', 'desc')->get();
       return view('frontend.news', ['news'=>$news,'featured_news'=>$featured_news]);
    }

    function load_data(Request $request)
    {
        if ($request->ajax()) {
            if ($request->id > 0) {
                $data = DB::table('posts')
                    ->where('id', '<', $request->id)
                    ->orderBy('created_at', 'DESC')
                    ->limit(5)
                    ->get();
            } else {
                $data = DB::table('posts')
                    ->orderBy('created_at', 'DESC')
                    ->limit(5)
                    ->get();
            }
            $output = '';
            $last_id = '';
            $output_button="";
            $i=0.1;
            if (!$data->isEmpty()) {
                foreach ($data as $newsitem) {
                    $i+=0.2;
                    $output .= " <div class='cd-timeline-block'>
              <div class='cd-timeline-img fables-second-background-color bounce-in'></div>
                <span class='cd-date fables-light-background-color fables-fifth-text-color bounce-in'>".date("Y-m-d H:i",strtotime($newsitem->created_at))."</span>
                <div class='cd-timeline-content mb-4 bounce-in'>
                    <div class='row  ' id='news".$newsitem->id."'>
                        <div class='col-12 col-lg-5'>
                            <div class='image-container translate-effect-right'>
                                <a href='".url("news/$newsitem->id")."'><img src='".asset('/storage/'.$newsitem->image)."' alt='' ></a>
                            </div>
                        </div>
                        <div class=\"col-12 col-lg-7 mt-3 mt-lg-0\"  >

                            <h2 class=\"font-22 semi-font mb-2\"><a href='".url("news/$newsitem->id")."' class=\"fables-main-text-color fables-second-hover-color\">".$newsitem->title."</a></h2>
                            <p class=\"fables-forth-text-color mb-2\">
                            ". $newsitem->excerpt ."
                            </p>

                            <a href='".url("news/$newsitem->id")."' class=\"fables-main-text-color p-0 underline fables-second-hover-color font-15\">Читати далі</a>
                        </div>
                    </div>
                </div>
            </div>";
                    $last_id = $newsitem->id;
                }
                $output_button.= '
    
       <div id="load_more " class="text-center  loadbutton">
        <button type="button" name="load_more_button" class="btn fables-second-background-color white-color fables-main-hover-background-color px-5 py-2 white-color-hover" data-id="' . $last_id . '" id="load_more_button">Завантажити більше</button>
       </div>';
            } else {
                $output_button .= '
       <div id="load_more" class="text-center  loadbutton">
        <button type="button" name="load_more_button" class="btn fables-second-background-color white-color fables-main-hover-background-color px-5 py-2 white-color-hover">Нічого не знайдено</button>
       </div>';
            }
            echo $output;
            echo $output_button;
        }
    }

    public function solonews($id){
        $news = DB::table('posts')->where('id',"=","$id")->get();

        $latest_news=$this->getNews(4);
        if($news->count()!=0){
            return view('frontEnd.solonewsview',['news'=>$news[0],'latest_news'=>$latest_news]);
        }else{
            return view('errors.404');
        }

    }


    public function getFuturedNews($count){
        $programs = DB::table('posts')->orderBy('created_at', 'desc')->where('featured','=','1')->take($count)->get();
        return $programs;
    }

    public function qw(Request $request)
    {
        $request= $request->query('query');
        $orders = Post::search($request)->paginate(6);
        $orders->appends( array (
            'query' =>  $request
        ) );
        $is_empty = false;
        if ($orders->isEmpty()) {
            $is_empty = true;
        }
        return view('frontEnd.Search', ['news' => $orders, 'request' => $request, 'is_empty' => $is_empty]);

    }


}
