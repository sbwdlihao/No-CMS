<style type="text/css">
    ul._newest_widget { 
        list-style-type: none; padding-left: 10px;
    }
    ul._newest_widget li {
        border-bottom:1px solid gray;
        padding-top: 5px;
        padding-bottom:5px;
    }
</style>
<?php
if(count($articles)==0){
    echo 'Currently there is no article yet';
}else{
    echo '<ul class="_newest_widget">';
    foreach($articles as $article){
        echo '<li>';
        if($module_path == 'blog'){
            echo '<span class="_article_date">'.$article['date'].'</span>'.br().anchor(site_url('blog/index/'.$article['article_url']),
                    $article['title']);    
        }else{
            echo '<span class="_article_date">'.$article['date'].'</span>'.br().anchor(site_url('{{ module_path }}/blog/index/'.$article['article_url']),
                        $article['title']);
        }
        echo '</li>';
    }
    echo '</ul>';
}