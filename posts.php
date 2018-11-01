                                <!--
                                <li class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="img/cbsa.jpg" alt="Post">
                                        <div class="caption">
                                            <h3><a href="#">We are Solutions Architects</a></h3>
                                            <p>Raul and Sebastien have obtained the CBSA certification (Blockchain Solution Architect) from the Blockchain Training Alliance. This achievement shows the expertise of our team and their knowledge of blockchain solutions. Great job guys!</p>
                                            <a href="#" class="btn btn-link" role="button">More</a>
                                        </div>
                                    </div>                                        
                                </li>
                                <li class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="img/agreement.jpg" class="img-responsive" alt="Post">
                                        <div class="caption">
                                            <h3><a href="#">Sign training agreement</a></h3>
                                            <p>ANKONAN and KNOWTECH have announced an agreement to share training services. KNOWTECH will provide ANKONAN with its complete training technology portfolio, assisting the company in its efforts to bring its blockchain technology to his customers.</p>
                                            <a href="#" class="btn btn-link" role="button">More</a>
                                        </div>
                                    </div>                                        
                                </li>
                                <li class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="img/h3.jpg" class="img-responsive" alt="Post">
                                        <div class="caption">
                                            <h3><a href="#">Bologna Atlassian User Group (AUG)</a></h3>
                                            <p>Raul will be speaker in the next Atlassian User Group (AUG) event in Bologna (Italy) talking about the MrAddon's plugins and how these plugins can change the usual and bored way to work with Jira in a new colored-fashion/gammificated way.</p>
                                            <a href="https://aug.atlassian.com/events/details/atlassian-bologna-presents-atlassian-user-group-bologna-post-summit-report-et-al" class="btn btn-link" role="button">More</a>
                                        </div>
                                    </div>                                        
                                </li>
                                -->
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js'></script>
<script type="text/javascript">
var MYBLOG_LIMIT = 6;
var MYWRAPPER_CLASS = 'homeblog';
var WP={open:function(b){var a={posts:function(){var d=MYBLOG_LIMIT;var e=0;var c={all:function(g){var f=b+"/api/get_recent_posts/";f+="?count="+d+"&page="+e+"&callback=?";jQuery.getJSON(f,function(l){var k=l.posts;for(var j=0;j<k.length;j++){var h=k[j];h.createComment=function(i,m){i.postId=h.id;a.comments().create(i,m)}}g(k)})},findBySlug:function(f,h){var g=b+"/api/get_post/";g+="?slug="+f+"&callback=?";jQuery.getJSON(g,function(i){h(i.post)})},limit:function(f){d=f;return c},page:function(f){e=f;return c}};return c},pages:function(){var c={findBySlug:function(d,f){var e=b+"/api/get_page/";e+="?slug="+d+"&callback=?";jQuery.getJSON(e,function(g){f(g.page)})}};return c},categories:function(){var c={all:function(e){var d=b+"/api/get_category_index/";d+="?callback=?";jQuery.getJSON(d,function(f){e(f.categories)})}};return c},tags:function(){var c={all:function(e){var d=b+"/api/get_tag_index/";d+="?callback=?";jQuery.getJSON(d,function(f){e(f.tags)})}};return c},comments:function(){var c={create:function(f,e){var d=b+"/api/submit_comment/";d+="?post_id="+f.postId+"&name="+f.name+"&email="+f.email+"&content="+f.content+"&callback=?";jQuery.getJSON(d,function(g){e(g)})}};return c}};return a}};
var blog = WP.open('/blog');
blog.posts().all(function(posts){
  for(var i = 0; i < posts.length; i++){
    jQuery('.'+MYWRAPPER_CLASS).append(function(){
      //return (true) ? '<a class="lastpost_title" href="'+posts[i].url+'"><h4>'+posts[i].title+'</h4></a><br>'+posts[i].excerpt.substr(0,250)+'<a href="'+posts[i].url+'"><img src="'+posts[i].thumbnail_images.medium_large.url+'" width="300px"/></a>' : '<a href="'+posts[i].url+'"><h4>'+posts[i].title+'</h4></a>';
      return '<li class="col-md-4 col-sm-6 col-xs-12"> <div class="thumbnail"><a href="'+posts[i].url+'"><img src="'+posts[i].thumbnail_images.medium_large.url+'" class="img-responsive" alt="Post"></a><div class="caption"><h3><a href="'+posts[i].url+'">'+posts[i].title+'</a></h3>'+posts[i].excerpt.substr(0,200)+'...(<a href="'+posts[i].url+'">More</a>)</div></div></li>'
//(posts[i].thumbnail) posts[i].content
    });
  }
});
</script>
<div class="homeblog"></div>