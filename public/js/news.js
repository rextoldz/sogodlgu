$(document).ready(function(){
      $(".linkfeat").hover(
        function () {
            $(".textfeat").show(500);
        },
        function () {
            $(".textfeat").hide(500);
        }
    );
});
$(".advisory").bootstrapNews({
    newsPerPage: 3,
    autoplay: true,
	pauseOnHover:true,
    direction: 'up',
    newsTickerInterval: 4000,
    onToDo: function () {
        //console.log(this);
    }
});
