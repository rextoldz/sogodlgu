<!-- 
<style type="text/css">
.an{ width: 100%; margin: 0px auto; height: 232px;background-color: #46353500;    overflow-y: hidden;font-family: 'tahoma', serif;}
.an ul{list-style: none;position: relative;top: -35px;}
.an li{border-bottom: 1px dashed #2ba6cb;overflow: hidden;text-overflow: ellipsis;}
.an h2{ color:#fff; padding-top:10px;}
.an p{ text-align: left;padding: 1px;color: #115d69a6;overflow: hidden;text-overflow: ellipsis; white-space: nowrap;}
.an img {margin-top: 10px;height: auto; width: 100%;}
</style> -->
<style type="text/css">
    .ul-events{list-style: none;position: relative;left: -19px;width: 100%;}
    .ul-events tr.venue{font-size: 0.8em;}
    .events-container img{width: 100%; height: auto;float: left;padding-right: 10px;}
    .events-container img:hover{width: 500px}
    .events-container{border: aliceblue 2px solid;padding: 13px;}
    .events-container h6{color: #a90423b8;line-height: 1.2;}
</style>
<script type="text/javascript" src="{{ asset('js/news.js') }}"></script>
<h6 class="title-h6-d">Upcoming Events</h6>
  <ul class="ul-events">
    <li>
        <table style="border: none;" class="events-container">
            <tr>
                <td>
                    <img src="{{ asset('images/events/3.jpg') }}">  
                </td>
                <td style="width: 166px;"> 
                    <a href="">
                        <h6>Rural Impact Sourcing Technical Training</h6>
                    </a>
                </td>
            </tr>
            <tr class="venue">
                <td>Sogod Municipal Building</td>
                <td>September 14-25, 2018</td>
            </tr>
        </table>
    </li>
    <li>
        <table style="border: none;" class="events-container">
            <tr>
                <td>
                    <img src="{{ asset('images/events/2.jpg') }}">  
                </td>
                <td style="width: 166px;"> 
                    <a href="">
                        <h6>(Sample) Miss Philippines Earth-Sogod Southern Leyte 2015</h6>
                    </a>
                </td>
            </tr>
           <tr class="venue">
                <td>venue</td>
                <td>date</td>
            </tr>
        </table>
    </li>
</ul>