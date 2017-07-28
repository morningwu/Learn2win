<?
//Make it UTF-8
//header("Content-Type:text/html; charset=utf-8");
session_start();

//all included
include('function/database/connect1.php');


//All errors

$errors = array();
$errors_login = array();

$title = "Learn2Win | Learning with the World";
$user_name = "Morning";
$local_tour_title1 = "餐廳用語";

//Demo Result

$zone = "觀塘";
$today_learning_points = "50";
$overall_learning_points = "350";

?>
<!--Disqus code-->
    <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'learn2win'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
    </script>

 <!-- UserVoice JavaScript SDK (only needed once on a page) -->
<script>(function(){var uv=document.createElement('script');uv.type='text/javascript';uv.async=true;uv.src='//widget.uservoice.com/hHkHnP8HuJE5ehGHVWZpg.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(uv,s)})()</script>

<!-- A tab to launch the Classic Widget -->
<script>
UserVoice = window.UserVoice || [];
UserVoice.push(['showTab', 'classic_widget', {
  mode: 'full',
  primary_color: '#cc6d00',
  link_color: '#007dbf',
  default_mode: 'support',
  forum_id: 209476,
  tab_label: '我有意見！',
  tab_color: '#cc6d00',
  tab_position: 'bottom-right',
  tab_inverted: false
}]);
</script>